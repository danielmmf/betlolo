<?php
namespace App\Classes;

class  FireBase{
	public function salvar( $email, $game){
		$key = md5(strtolower($email));
		$dateTime = new \DateTime();

		$dados = array(
	    	"game" => "cadastro",
	    	"hora" => $dateTime->format('c'),
	    	"email" => $email,
	    	"pontuacao" => 200
		);
		//$firebase->set(DEFAULT_PATH . '/' . $dateTime->format('c')
		$DEFAULT_URL = 'https://controlblack-6de94.firebaseio.com/';
		$DEFAULT_TOKEN = '7UWUiDOKscyS6zKX7UENS6yOz6Q4SiHJkp9LDNnR';
		$DEFAULT_PATH = 'betlolo';

		$firebase = new \Firebase\FirebaseLib($DEFAULT_URL, $DEFAULT_TOKEN);

		$firebase->set($DEFAULT_PATH . '/usuarios/'.$key.'/'.$dateTime->format('c'), $dados);
	}


	public function indicacao( $email, $game){
		$key = md5(strtolower($email));
		$dateTime = new \DateTime();

		$dados = array(
	    	"game" => "indicaco",
	    	"hora" => $dateTime->format('c'),
	    	"email" => $email,
	    	"pontuacao" => 60
		);
		//$firebase->set(DEFAULT_PATH . '/' . $dateTime->format('c')
		$DEFAULT_URL = 'https://controlblack-6de94.firebaseio.com/';
		$DEFAULT_TOKEN = '7UWUiDOKscyS6zKX7UENS6yOz6Q4SiHJkp9LDNnR';
		$DEFAULT_PATH = 'betlolo';

		$firebase = new \Firebase\FirebaseLib($DEFAULT_URL, $DEFAULT_TOKEN);
		$firebase->set($DEFAULT_PATH . '/usuarios/'.$key.'/'.$dateTime->format('c'), $dados);
	}



}
