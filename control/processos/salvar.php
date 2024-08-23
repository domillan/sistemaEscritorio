<?php

validaLogin(url());
validaToken();
//validaAcesso();
DB::debugOn();
if(request('id'))
	$p = Processo::find(request('id'));

if(is_null($p))
	$p = Processo::new();

$p->set(request(Processo::fields));
$p->save();
if(request('clientes'))
{
	$clientes = json_decode(request('clientes'));
	if(!is_array($clientes))
		$clientes = [$clientes];
	$p->clientes()->add(Cliente::where(DB::in('id', $clientes)));
	$p->saveRelations();
}

redirect(root('processos/dados?id='.$p->getPrimary()));
?>