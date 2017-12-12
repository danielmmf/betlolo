<?php namespace App\Http\Controllers;

class BetlolosController extends Controller {

    public function index(){
    	return view('betlolo/index');
    }

    public function registrar(){
        return response()->json(\App\Classes\User::criar_cliente_comdata($_POST));
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
            $key = md5(strtolower($_SESSION['logado']['email']));
    	   return view('betlolo/minhapagina', array('usuario' => $key  ));
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
