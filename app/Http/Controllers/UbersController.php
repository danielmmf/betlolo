<?php namespace App\Http\Controllers;

class UbersController extends CommonController {

	protected static $template = 'uber';
	protected static $login_pages = 'index,minhapagina';
    
	public function index()
    {
    	if(@$_SESSION['logado'])
        	return view('uber/index');
    	else
        	return view('uber/login');
    }



 
}
