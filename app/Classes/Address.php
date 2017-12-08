<?php

namespace App\Classes;


class Address extends \App\Address
{
    public static function criar($user_id, $dados_endereco){
    	$endereco = new \App\Address;
    	$endereco->name=$dados_endereco['street']."@".$dados_endereco['numero'];
    	$endereco->street=$dados_endereco['street'];
    	$endereco->number = $dados_endereco['numero'];
    	$endereco->zipcode = $dados_endereco['cep'];
    	$endereco->city = $dados_endereco['cidade'];
    	$endereco->state = $dados_endereco['uf'];
    	$endereco->phone = $dados_endereco['telefone'];
    	$endereco->user_id = $user_id;
    	$endereco->manufacturer_id = $user_id;
    	$endereco->save();
	}


    public static function meu_endereco(){
        $id = \App\Classes\User::meu_id_logado();
        $endereco = \App\Address::where(['user_id' => $id])->first();
        return $endereco;
    }

/*
	bairro
:
"Vila Universitária"
cep
:
"05359190"
cidade
:
"São Paulo"
numero
:
"123"
street
:
"Ernesto Brodella"
telefone
:
"11964657654"
uf
:
"SP"*/


 
}
