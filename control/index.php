<?php


//validaLogin(url());

$categoria = request('categoria');
$busca = request('busca');
$buscaReplaced = preg_replace ( '/[\s]+/m' , ' % ', $busca);
if($categoria!=0){
	$cat = CategoriaC::find($categoria);
	$clientes = $cat->clientes()->where("cliente.nome like '%$buscaReplaced%'");
}
else
{
	$clientes = Cliente::where("cliente.nome like '%$buscaReplaced%'");
}
include("view/home.php");
?>