<?php


class Usuario extends \Codeception\Test\Unit//usuarioTest
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

    public function testDeveCriarUsuarioComDataDeNascimento(){

        $dados['name']="Usuario de teste";
        $dados['email']="usuario@teste.com";
        $dados['password']="suariodeteste";
        $dados['nascimento']='1982-09-21';
        $retorno = \App\Classes\User::criar_cliente_comdata($dados);
        $this->assertEquals($retorno['status'] , 1);

    }

}



    ?>