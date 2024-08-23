<?php

validaLogin(url());
validaToken();
//validaAcesso();

if(request('id'))
	$c = Cliente::find(request('id'));

if(is_null($c))
	$c = Cliente::new();

$c->set(request(Cliente::fields));
$c->save();

redirect(root('clientes/dados?id='.$c->getPrimary()));
?>