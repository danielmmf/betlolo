<?php


class EnderecoTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester , $endereco;



    public function testDeveTestarEndereco()
    {
    	$user_id = 7;
    	$dados['cep']='053599';
        $dados['numero']='123';
        $dados['street']='abc@qwe';
        $dados['name']='abc@qwe';
        $dados['cidade']='abc@qwe';
        $dados['uf']='abc@qwe';
        $dados['manufacturer_id']=1;
        $dados['user_id']=1;
    	$dados['telefone']='31233123';
    	$endereco =  App\Classes\Address::criar($user_id , $dados);
    }

}



    ?>