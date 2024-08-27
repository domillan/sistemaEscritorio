<?php

	$email = request('email');
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		$user = Usuario::first("email='$email'");
		if($user == null){
			$mensagem = "E-mail não cadastrado.";
		}
		else{
			$t = Token::new(['token'=>hash('md2', uniqid()), 'data'=>date("Y-m-d H:i:s")]);
			$t->usuario()->set($user);
			$t->save();

			$texto = "<h3>Alteração de senha</h3>Acesse o <a href='".root('acessoEmail?token=')."$t->token'>link</a> nos próximos 15 minutos se desejar trocar sua senha. Caso seja um erro, apenas ignore.";

			//Envia email ou exibe mensagem
			email($email, "Altere sua senha", $texto, "sistema@emilioneto.com");
			
			echo $texto;	die();		
			$mensagem = "Link enviado para o email.";
		}		
	}
	if(isset($_SESSION['user']))
	{
		redirect(root());
		//redirect(root('usuarios/lista'));
	}
	else{
		include("view/esqueceuSenha.php");
	}

?>