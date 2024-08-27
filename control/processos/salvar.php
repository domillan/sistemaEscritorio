<?php

validaLogin(url());
validaToken();
validaAcesso(20);

$descricao = '';
if(request('id')){
	$p = Processo::find(request('id'));
	validaAcesso(40);
	$codigo = 21;
	foreach (Processo::fields as $value) {
		if(request($value) !=$p->$value)
			$descricao = "$value; $descricao";
	}
}

if(is_null($p)){
	$p = Processo::new();
	$codigo = 20;
}

$p->set(request(Processo::fields));
$p->save();

$registro = Registro::new(['codigo'=>$codigo]);
$registro->usuario()->set($_SESSION['user']);
$registro->processo()->set($p);
$registro->data = date('Y-m-d H:i:s');
$registro->descricao = $descricao;
$registro->save();

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