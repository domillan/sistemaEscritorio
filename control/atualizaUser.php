<?php
validaLogin(url());
validaToken();
$user = $_SESSION['user'];

$user->nome = request('nome');
$user->email = request('email');
$user->senha = password_hash(request('senha'), PASSWORD_BCRYPT);
$user->save();

//email($to, $subject, $message, $from)

redirect(root('conta')."?status=1");
?>