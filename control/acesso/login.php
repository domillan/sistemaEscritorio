<?php

if(!isset($_SESSION['user'])){
	$mensagem = null;	
	if (isset($_POST['logar'])){
		$senha = $_REQUEST['senha'];
		$email = $_REQUEST['email'];
		if(filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
			$cliente = Cliente::first("email='$email'");
			if($cliente == null){
				$mensagem = "E-mail não cadastrado.";
			}
			else{
				if(password_verify($senha, $cliente->senha)){
					$_SESSION['user'] = $cliente;
					header('Location: '.root());
					die();
				
				}
				else {
					$mensagem = "Senha incorreta.";
				}	
			}		
		}
	}
	include("view/cliente-login.php");
}
else {
	header('Location:'.root('cliente/menu'));
	die();
}		
?>