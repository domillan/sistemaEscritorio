<?php

validaLogin(url());
validaToken();

$processo = Processo::new();
if(request('clientes'))
{
	$clientes = json_decode(request('clientes'), true);
	if(!is_array($clientes))
		$clientes = [$clientes];
	$processo->clientes()->add(Cliente::where(DB::in('id', $clientes)));
}

include("view/topo.php");
include("view/processo.php");
include("view/rodape.php");
?>