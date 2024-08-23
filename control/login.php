<?php

if(!isset($_SESSION['user'])){
	$mensagem = null;	
	if (isset($_POST['logar'])){
		$senha = $_REQUEST['senha'];
		$email = $_REQUEST['email'];
		if(filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
			$user = Usuario::first("email='$email'");
			if($user == null){
				$mensagem = "E-mail não cadastrado.";
			}
			else{
				if(password_verify($senha, $user->senha)){
					$t = Token::new(['token'=>hash('md2', uniqid()), 'data'=>date("Y-m-d H:i:s")]);
					$t->usuario()->set($user);
					$t->save();
					$_SESSION['user'] = $user;
					$_SESSION['token'] = $t->token;

					redirect(root());				
				}
				else {
					$mensagem = "Senha incorreta.";
				}	
			}		
		}
	}
	include("view/login.php");
}
else
	redirect(root());
?>