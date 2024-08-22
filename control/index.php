<?php


//validaLogin(url());

$categoria = request('categoria');
$busca = request('busca');
$inicial = request('inicial');

$buscaReplaced = preg_replace ( '/[\s]+/m' , ' % ', $busca);
if($categoria!=0){
	$cat = CategoriaC::find($categoria);
	$clientes = $cat->clientes()->where("cliente.nome like '%$buscaReplaced%' and cliente.nome like '$inicial%'");
}
else
{
	$clientes = Cliente::where("cliente.nome like '%$buscaReplaced%' and cliente.nome like '$inicial%'");
}

include("view/home.php");
?>