<?php

if(!isset($_SESSION['user'])){
	$mensagem = null;
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nome = filter_var($_REQUEST['nome'], FILTER_SANITIZE_STRING);
		$cpf = filter_var($_REQUEST['cpf'], FILTER_SANITIZE_STRING);
		$senha = filter_var($_REQUEST['senha'], FILTER_SANITIZE_STRING);
		$email = $_REQUEST['email'];
		$cpfExists = Cliente::first("cpf='".$cpf."'");
		$emailExists = Cliente::first("email='".$email."'");
		//echo var_dump($cpfExists);
		if($emailExists!=null){
			$mensagem="E-mail já cadastrado. ";
		}
		elseif($cpfExists != null){
			$mensagem="CPF já cadastrado. ";
		}	
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$mensagem="E-mail inválido. ";
		}
		elseif(!validaCPF($cpf))
		{
			$mensagem="CPF inválido. ";
		}
		else{
			$cliente = new Cliente();
			$cliente->nome = $nome;
			$cliente->cpf = $cpf;
			$cliente->email = $email;
			$cliente->senha = password_hash($senha, PASSWORD_DEFAULT);
			$cliente->save();
			$_SESSION['user'] = $cliente;
			
			header('Location: '.root());
			die();
		}
	}
	include("view/cliente-cadastro.php");	
}
else {
	header('Location: '.root('cliente/menu'));
	die();
}	
?>