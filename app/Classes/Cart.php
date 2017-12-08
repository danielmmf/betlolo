<?php

namespace App\Classes;


class Cart extends \App\Cart
{
    public function carrinho(){

        $id = \App\Classes\User::meu_id_logado() ;


		$carrinho = \App\Classes\Cart::where([
	       'user_id' => $id,
	       'status' => 1])->first();

    		if(!$carrinho){
    			$carrinho = new \App\Classes\Cart;
    	    	$carrinho->name = 'carrinho@teste';
    	    	$carrinho->deal_at = date('Y-m-d H:i:s');
    	    	$carrinho->total = 0;
    	    	$carrinho->user_id = $id;//precisa pegar o ip tbm
    	    	$carrinho->store_id = 1; //@TODO devemos pegar o ID da loja na config do cliente
    	    	$carrinho->status = 1;
    	    	$carrinho->save();
    		}
        //se nao tiver logado usar o ip como id de usuario ip e browser id
            //por hora so usamos o ip //no neusa/idonni temos essa funcao no carrinho
		return $carrinho;

    }


    public function add($id_produto){

        //$produto_carrinho = new \App\CartProduct;
        $produto =  \DB::table('products')->where('id','=',$id_produto)->first();

        $produto_carrinho = \App\CartProduct::where([
           'cart_id' => $this->id,
           'product_id' => $id_produto])->first();

     
        if(!isset($produto_carrinho)){
    		$produto_carrinho = new \App\CartProduct;
    		$produto_carrinho->name = $produto->name;
        	$produto_carrinho->added_at = date('Y-m-d H:i:s');
        	$produto_carrinho->price = $produto->price;
        	$produto_carrinho->discount = $produto->promo;
        	$produto_carrinho->quantity = 1;
        	$produto_carrinho->cart_id = $this->id;
        	$produto_carrinho->product_id = $id_produto;
        }else{
            ++$produto_carrinho->quantity;
        }
    	$produto_carrinho->save();
    	

        //print_r($carrinho);
        //die("carrinho");
    	return true;
    }

    public function remove($id_produto){
    	$carrinho = $this->carrinho();

		$produto_carrinho = \App\CartProduct::where([
	       'cart_id' => $carrinho->id,
	       'product_id' => $id_produto])->first();
       
    	$produto_carrinho->quantity = $produto_carrinho->quantity-1;
    	$produto_carrinho->save();
    	return $carrinho;
    }

    public  function product_remove($id_produto){
    	$carrinho = $this->carrinho();

		$produto_carrinho = \App\CartProduct::where([
	       'cart_id' => $carrinho->id,
	       'product_id' => $id_produto])->delete();
    	return $carrinho;
    }

    public function close(){
        $this->status = 2;
        $this->save();    
    }

    public function meus_carrinhos(){
        
        return \App\Classes\Cart::where([
           'user_id' => $this->user_id])->get();  
    }


   /* public function meus_carrinhos_abertos(){
        $this->user_id;
        $carrinho = \App\Classes\Cart::where([
           'user_id' => $id,
           'status' => 1])->first();  
    }
*/

    public function pagamentos(){
        return \App\Payment::where('cart_id', '=', $this->id)->get();
    }


    public function qtd_itens(){
        $produtos = $this->produtos();
        $total = 0;
        foreach ($produtos as $produto) {
            $total+=$produto->quantity;
        }
        return $total;
    }

    public function produtos(){
    	return \App\CartProduct::where('cart_id', '=', $this->id)->get();
    }

    public function volume(){
        $produtos = $this->produtos();
        $total = 0;
        $ultimo_id = 0;
        foreach ($produtos as $produto) {
            if($produto->id != $ultimo_id)
                $total++;
        }
        return $total;
    }

    public function grand_total(){
    	$produtos = $this->produtos();
    	$total = 0;
    	foreach ($produtos as $produto) {
    		(float)$total+=floatval(str_replace(',', '.', $produto->price))*$produto->quantity;
    	}
    	return (float)floatval($total);
    }
    
    public function pay($method , $value){
    	$payment = new \App\Payment;
		$payment->name = $this->name;
    	$payment->deal_at = date('Y-m-d H:i:s');
    	$payment->total = $value;
    	$payment->status = 1;
    	$payment->method = $method;
    	$payment->cart_id = $this->id;
    	$payment->user_id = $this->user_id;
    	$payment->save();

    	return $payment;
    }

     public function total(){
    	$produtos = $this->produtos();
    	$total = 0;
    	$pago = 0;

    	foreach ($produtos as $produto) {
    		$total+=(float)$produto->price*(float)$produto->quantity;
    	}

    	$pagamentos = $this->pagamentos();
    	foreach ($pagamentos as $pagamento) {
    		$pago+=$pagamento->total;
    	}

    	return $total-$pago;
    }




 
}
