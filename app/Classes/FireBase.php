<?php
namespace App\Classes;

class  FireBase{
	public function salvar( $email, $nascimento){
		try {
			$key = md5(strtolower($email));
			$dateTime = new \DateTime();
			//21/09/1982
			$data_nascimento = \DateTime::createFromFormat('d/m/Y', $nascimento);
			$diff = $data_nascimento->diff($dateTime); 

			$dados = array(
		    	"game" => "cadastro",
		    	"nascimento" => $nascimento,
		    	"idade_atual" => $diff->y,
		    	"hora" => $dateTime->format('c'),
		    	"email" => $email,
		    	"pontuacao" => 200
			);
			//$firebase->set(DEFAULT_PATH . '/' . $dateTime->format('c')
			$DEFAULT_URL = 'https://controlblack-6de94.firebaseio.com/';
			$DEFAULT_TOKEN = '7UWUiDOKscyS6zKX7UENS6yOz6Q4SiHJkp9LDNnR';
			$DEFAULT_PATH = 'betlolo';

			$firebase = new \Firebase\FirebaseLib($DEFAULT_URL, $DEFAULT_TOKEN);
			$firebase->set($DEFAULT_PATH . '/usuarios/'.$key.'/cadastro', $dados);
			//echo "Usuario salvo com sucesso";
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
			return false;
		}
	}
		


	public function indicacao( $email){
		$key = $email;
		$dateTime = new \DateTime();
		$dados = array(
	    	"game" => "indicaco",
	    	"hora" => $dateTime->format('c'),
	    	"email" => $email,
	    	"pontuacao" => 60
		);

		try {
			//$firebase->set(DEFAULT_PATH . '/' . $dateTime->format('c')
			$DEFAULT_URL = 'https://controlblack-6de94.firebaseio.com/';
			$DEFAULT_TOKEN = '7UWUiDOKscyS6zKX7UENS6yOz6Q4SiHJkp9LDNnR';
			$DEFAULT_PATH = 'betlolo';

			$firebase = new \Firebase\FirebaseLib($DEFAULT_URL, $DEFAULT_TOKEN);
			$firebase->set($DEFAULT_PATH . '/usuarios/'.$key.'/indicacao', $dados);
			echo "Usuario pontuado com sucesso";
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}



}
