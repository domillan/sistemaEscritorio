<?php

validaLogin(url());
validaToken();

$CPAGINA = 20;

$categoria = request('categoria');
$busca = request('busca');
$inicial = request('inicial');
$page = request('page');
if(!$page) $page=1;

$buscaReplaced = preg_replace ( '/[\s]+/m' , ' % ', $busca);
if($categoria){
	$cat = CategoriaC::find($categoria);
	$clientes = $cat->clientes()->select(['where'=>"cliente.nome like '%$buscaReplaced%' and cliente.nome like '$inicial%'",
											'orderBy'=>'cliente.nome','limit'=> $CPAGINA, 'offset'=>$CPAGINA*($page-1)]);
}
else
{
	$clientes = Cliente::select(['where'=>"cliente.nome like '%$buscaReplaced%' and cliente.nome like '$inicial%'",
									'orderBy'=>'cliente.nome','limit'=> $CPAGINA, 'offset'=>$CPAGINA*($page-1)]);
}

include("view/topo.php");
include("view/clientes.php");
include("view/rodape.php");

?>