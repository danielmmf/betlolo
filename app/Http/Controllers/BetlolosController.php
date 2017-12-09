<?php namespace App\Http\Controllers;

class BetlolosController extends Controller {

    public function index(){
    	return view('betlolo/index');
    }

    public function registrar(){

    	$dados = $_POST;
    	echo json_encode(\App\Classes\User::criar_cliente($dados));
    }

}
