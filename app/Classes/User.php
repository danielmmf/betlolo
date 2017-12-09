<?php

namespace App\Classes;


class User extends \App\User
{
    public function login(){
        $logado = $this::where('email','=', $this->email)->first();
        $_SESSION['login_message']='';
        $array_retorno = array();
        if($logado){
            if($this->password == $logado->password){
                $grupo = $logado->group()->first();
                $_SESSION['login_message']='Logado';

         
                $logado->password ='*******';
                $_SESSION['user_logado']=$logado->toJson();
                $_SESSION['id_logado']=$logado->id;
                $_SESSION['grupo_logado']=$logado->group_id;
                $nome_grupo = isset($grupo->name)?$grupo->name:'usuario';

                $_SESSION['nome_grupo_logado']=$nome_grupo;
                $array_retorno = array('logado'=>1,
                                                        'nome'=>$logado->name,
                                                        'name'=>$logado->name,
                                                        'email'=>$logado->email,
                                                        'grupo'=>$logado->group_id , 
                                                        'grupo_nome'=> $nome_grupo, 
                                                        'usuario_logado'=>$logado->toJson());
                $_SESSION['logado']=$array_retorno;
            }else{
                $_SESSION['login_message']='Sua senha não confere';
                $array_retorno = array('logado'=>0,
                                                        'login_message'=>'Sua senha não confere');
                $_SESSION['logado']=$array_retorno;
            }
        }else{
           $_SESSION['login_message']='Não foi encontrado nenhum usuario em nosso banco de dados'; 
           $array_retorno = array('logado'=>0,
                                                        'login_message'=>'Não foi encontrado nenhum usuario em nosso banco de dados');
           $_SESSION['logado']=$array_retorno;
        }
        return $array_retorno;
    }

    public function logged(){
        $logado = $this::where('email','=', $this->email)->first();
        $array_retorno = array();
        if($logado){
            if($this->password == $logado->password){
                $this->login();
                $grupo = $logado->group()->first();
                $logado->password ='*******';
                $nome_grupo = isset($grupo->name)?$grupo->name:'usuario';

                $array_retorno = json_encode(array('logado'=>1,
                                                        'nome'=>$logado->name,
                                                        'name'=>$logado->name,
                                                        'email'=>$logado->email,
                                                        'grupo'=>$logado->group_id , 
                                                        'grupo_nome'=>$nome_grupo , 
                                                        'usuario_logado'=>$logado->toJson()));
            }else{
              $array_retorno = json_encode(array('logado'=>0,
                                        'login_message'=>'Sua senha não confere',
                                        'usuario_logado'=>''));
            }
        }else{
           $array_retorno = json_encode(array('logado'=>0,
                                        'login_message'=>'Não foi encontrado nenhum usuario em nosso banco de dados',
                                        'usuario_logado'=>'')); 
        }
        return $array_retorno;
    }


    public static function create_user($nome, $email, $senha , $group_id = 4){
        $resp = array();
        $resp['status'] = 0;
        $resp['response']='';
        $resp['cliente']='';
        $user = new \App\User; 
        $user->name = $nome;
        $user->email = $email;
        $user->password = $senha;
        $user->group_id = $group_id;

        $existe = \App\User::where('email','=',$email)->first();

        if($existe){
                $resp['response'] .= 'Conta já existe no sistema';
                $resp['cliente'] = $existe->id;
                return $resp;
        }

        try {
            $user->save();
            $resp['response'] .= 'Conta Criada com sucesso';
            $resp['status'] .= 1;
            $resp['cliente'] = $user->id;
        } catch (Exception $e) {
             $resp['response'] .= $e->getMessage();
        }





        return $resp;
    }


    public static function criar_cliente($dados){
       // print_r($dados);
        $resp = array();
        $resp['status'] = 0;
        $resp['response']='';

        if(!isset($dados['name'])){
            $resp['response'] .= 'Nao foi possivel criar, falta seu nome';
            return $resp;
        }

        if(!isset($dados['email'])){
            $resp['response'] .= 'Nao foi possivel criar, falta seu email';
            return $resp;
        }

        if(!isset($dados['password'])){
            $resp['response'] .= 'Nao foi possivel criar, falta sua senha';
            return $resp;
        }

        

        return self::create_user($dados['name'],$dados['email'],$dados['password']);
    }

    public static function criar_cliente_comdata($dados){
        $retorno = \App\Classes\User::criar_cliente($dados);
        if($retorno['status'] == 1){
           $usuario = \App\Classes\User::find($retorno['cliente']);
           $usuario->created_at = $dados['nascimento'];
           $usuario->save();
        }
        return $retorno;
    }


    public static function meu_id_logado(){
        if (php_sapi_name() == "cli") {
            $ip = '192.168.0.1';
            //print_r("foi teste , tá rodando cli");//isso só serve pra teste , o codigo abaixo pega o ip real
        } else {

            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {
    
                    $ip = $_SERVER['REMOTE_ADDR'];
                }
        }

        if(isset($_SESSION) && isset($_SESSION['id_logado']) && $_SESSION['id_logado']){
            $id = $_SESSION['id_logado'];
        }else{

          
                if (isset($_SESSION['store_client_id'])) {
                    $id = $_SESSION['store_client_id'];
                }else{
                    $id = $_SESSION['store_client_id']=$ip;
                }

            // Sets the id for the shopping cart if doesn't exist
            if (!$id) {
                if (php_sapi_name() == "cli") {
                    $_SESSION['store_client_id']=$ip;
                    $id =$ip;
                }
            }
        }

        return $id;
    }

    
}
