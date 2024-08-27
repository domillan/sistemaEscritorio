<?php

function logado()
{
	if(isset($_SESSION['aguardaLogin']))
	{
		$path = $_SESSION['aguardaLogin'];
		unset($_SESSION['aguardaLogin']);
		redirect($path);
	}
	else{
		redirect(root());
	}
}

if(!isset($_SESSION['user'])){
	$mensagem = null;	
	if (isset($_POST['logar'])){
		$senha = request('senha');
		$email = request('email');
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
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
					logado();				
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
	logado();
?>