<?php namespace App\Http\Controllers;

class BetlolosController extends Controller {

    public function index(){
    	return view('betlolo/index');
    }

    public function registrar(){
        $fb = new \App\Classes\FireBase;



        $data = explode('/',$_POST['nascimento']);

        $ano = date("Y");
        $minima = $ano -16;
        $maxima = $ano -90;

        if($data[2] > $minima){
            $resp = array();
            $resp['status'] = 0;
            $resp['response']="Erro ao salvar o usuario, você deve ser maior de 16 anos";
            return response()->json($resp);
        }

        if($data[2] < $maxima){
            $resp = array();
            $resp['status'] = 0;
            $resp['response']="Erro ao salvar o usuario, você deve ser menor de 90 anos";
            return response()->json($resp);
        }


            if(!$fb->salvar($_POST['email'],$_POST['nascimento']))
                echo "Erro ao salvar o usuario";
        $resposta_cliente = \App\Classes\User::criar_cliente_comdata($_POST); 
        try {
            
            $endereco = array('street'=>$_POST['rua'],
            'bairro'=>$_POST['bairro'],
            'cidade'=>$_POST['cidade'],
            'cep'=>$_POST['cep'],
            'numero'=>0,
            'telefone'=>0,
            'uf'=>$_POST['uf']);

            $resposta_endereco = \App\Classes\Address::criar($resposta_cliente['cliente'], $endereco);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return response()->json($resposta_cliente);
    }


    public function logar(){
        try {
            $dados = $_POST;
            $usuario = new \App\Classes\User;
            $usuario->email = $dados['email'];

            $usuario->password = $dados['password'];
            $resultado = $usuario->login();

            if($resultado['logado']){
                if($resultado['grupo']==1){
                    echo 'betlolo/ranking';
                }else{
                    echo 'betlolo/minhapagina';
                }
            }else{
                'login';
            }
        } catch (Exception $e) {
            echo 'login';
        }
    	
    }


    public function minha(){
    	if(isset($_SESSION['grupo_logado'])){
            $key = md5(strtolower($_SESSION['logado']['email']));
    	   return view('betlolo/minhapagina', array('usuario' => $key, 'nome'=>$_SESSION['logado']['nome'], 'email'=>$_SESSION['logado']['email'] ));
    	}else{
    		header("Location: /");
			die();
    	}
    }


    public function ranking(){
    	if(isset($_SESSION['grupo_logado']) && $_SESSION['grupo_logado'] == 1){
    		return view('betlolo/ranking', array('usuarios' => 'usuario' , 'nome'=>$_SESSION['logado']['nome']));
    	}else{
    		header("Location: /");
			die();
    	}
    }

     public function indicacao(){
        $fb = new \App\Classes\FireBase;
        echo $fb->indicacao($_GET['email']);
        echo 'Pontos registrados com sucesso';
    }

    public function recuperar(){
        //$fb = new \App\Classes\FireBase;
        //$fb->recuperar($_GET['email']);
        ///echo $_GET['email'];
        //echo 'Pontos registrados com sucesso';
        return view('betlolo/recuperar');
    }


    public function lembrar(){
        $existe = \App\User::where('email','=',$_POST['email'])->first();

        $para      = $_POST['email'];
        $assunto = 'Sua senha no BetLolo';
        $message = 'Ola , vc pediu pra gente lembrar sua senha :'.$existe->password;
        $headers = 'From: noreply@betlolo.com' . "\r\n" .
            'Reply-To: atendimento@betlolo.com' . "\r\n";

        mail($to, $subject, $message, $headers);//se precisar a gente troca por serviço de email

        echo $existe->password;
    }

    public function torna_admin(){
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $email = $request->email;
 
        try {
            $existe = \App\User::where('email','=',$email)->first();
            $existe->group_id = 1;
            $existe->save();
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        echo 'OK';
    }


}
