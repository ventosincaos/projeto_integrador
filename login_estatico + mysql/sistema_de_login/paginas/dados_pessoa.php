<?php

class dados_pessoa {
	
private $nome;
private $sobre_nome;
private $email;
private $telefone;
private $nascimento;
private $sexo;
private $cep;
private $endereco;
private $senha;



function setNome($nome){
	$this -> nome = $nome;
	
}
function getNome(){
	return $this -> nome;
}
	
function setSobre_nome($sobre_nome){
	$this -> sobre_nome = $sobre_nome;
}	

function getSobre_nome(){
	return $this -> sobre_nome;
	}
	
function setEmail($email){
	$this -> email -> $email;
}	
function getEmail(){
	return $this -> email;
}	
function setTelefone($telefone){
	$this -> telefone = $telefone;
}

function getTelefone(){
	return $this -> telefone;
}

function setNascimento($nascimento){
	$this -> nascimento = $nascimento;
}
function getNascimento(){
	return $this -> nascimento;
}
function setSexo($sexo){
	$this -> sexo = $sexo;
	
}
function getSexo(){
	return $this -> sexo;
}
function setCep($cep){
	$this -> cep = $cep;
}	
function getCep(){
	return $this -> cep;
}

function setEndereco($endereco){
	$this -> endereco = $endereco;
}

function getEndereco(){
	return $this -> endereco;
}
function setSenha($senha){
$this -> senha = $senha;	
}

function getSenha(){
	return $this -> senha;
}


}






?>