<?php

session_destroy();
$t = Token::first('token = "'.request('token').'"');
if($t)
{
	session_start();
	$timestamp = strtotime($t->data); // Converte o timestamp
    $tempoLimite = time() - (15 * 60);

	if($timestamp >= $tempoLimite){
		$user = $t->usuario()->first();
		$_SESSION['user'] = $user;
		$_SESSION['token'] = $t->token;
		//redirect(root('novaSenha'));
		redirect(root('clientes/lista'));
	}
}
	redirect(root('login'));



?>