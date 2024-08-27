<?php

validaLogin(url());
validaToken();
validaAcesso(2);

$descricao = '';
if(request('id')){
	$c = Cliente::find(request('id'));
	validaAcesso(4);
	$codigo = 11;
	foreach (Cliente::fields as $value) {
		if(request($value) !=$c->$value)
			$descricao = "$value; $descricao";
	}
}

if(is_null($c)){
	$c = Cliente::new();
	$codigo = 10;
}

$c->set(request(Cliente::fields));
$c->save();

$registro = Registro::new(['codigo'=>$codigo]);
$registro->usuario()->set($_SESSION['user']);
$registro->cliente()->set($c);
$registro->data = date('Y-m-d H:i:s');
$registro->descricao = $descricao;
$registro->save();

redirect(root('clientes/dados?id='.$c->getPrimary()));
?>