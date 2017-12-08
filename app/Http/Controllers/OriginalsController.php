<?php namespace App\Http\Controllers;

class OriginalsController extends Controller {

      public function index()
    {

        return view('original/index');
    }


    public function sdk()
    {

        echo "var original = {
		  urls: ['sandox.original.com.br', 'original.com.br'],
		  key: 'huaeiheaehehae7a87eh',
		  id: '123abc',
		  saldo: function() {
		    alert(this.urls[0] + ' ' + this.urls[1] + ' is ' + this.key + ' <-minhaa chave .' + this.carteira());
		  },
		  carteira: function() {
		    alert('Ola! sua url é ' + this.urls[1] + '.');
		  }
		};";
    }

}
