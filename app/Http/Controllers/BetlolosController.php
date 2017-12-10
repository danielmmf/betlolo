<?php namespace App\Http\Controllers;

class BetlolosController extends Controller {

    public function index(){
    	return view('betlolo/index');
    }

    public function registrar(){

    	$dados = $_POST;
    	echo json_encode(\App\Classes\User::criar_cliente_comdata($dados));
    }


     public function logar(){

    	$dados = $_POST;
    	$usuario = new \App\Classes\User;
    	$usuario->email = $dados['email'];
    	$usuario->password = $dados['password'];
    	$resultado = $usuario->login();

    	if($resultado['logado']){
    		if($resultado['grupo']==1){
    			echo 'ranking';
    		}else{
    			echo 'minhapagina';
    		}
    	}
    }


    public function minha(){
    	if(isset($_SESSION['grupo_logado'])){
    		return view('betlolo/minhapagina', array('usuarios' => 'usuario' ));
    	}else{
    		header("Location: /");
			die();
    	}
    }


    public function ranking(){
    	if(isset($_SESSION['grupo_logado']) && $_SESSION['grupo_logado'] == 1){
    		return view('betlolo/ranking', array('usuarios' => 'usuario' ));
    	}else{
    		header("Location: /");
			die();
    	}
    }

}
