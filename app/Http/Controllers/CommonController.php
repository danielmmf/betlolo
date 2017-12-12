<?php namespace App\Http\Controllers;

class CommonController extends Controller {


 protected static $template = 'common';
 protected static $login_pages = 'index,minhapagina';
    
 public function logar(){
        $dados = $_POST;
        $usuario = new \App\Classes\User;
        $usuario->email = $dados['email'];
        $usuario->password = $dados['password'];
        $resultado = $usuario->login();

        $class = get_called_class();
        $paginas = $class::paginas_login();
        $resposta = array("logado"=>false);

        if($resultado['logado']){
            $resposta['pagina'] = $paginas[$resultado['grupo']==1];
            $resposta['logado'] = 1;
        }

        return response()->json($resposta);
    }

    public static function decide_view(){
        return static::$template;
    }

    public static function paginas_login(){
        return explode(',',static::$login_pages);
    }

    public function registrar(){
        $class = get_called_class();
        return view($class::decide_view().'/registrar');
    }


    public function cadastrar(){
        return response()->json(\App\Classes\User::criar_cliente($_POST));
    }
}




