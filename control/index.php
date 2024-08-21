<?php

$categoria = (isset($_REQUEST['categoria'])) ? $_REQUEST['categoria']: 1;
$busca = $_REQUEST['busca'] ?? '';
$buscaReplaced = preg_replace ( '/[\s]+/m' , ' % ', $busca);
if($categoria!=0){
	$c = Categoria::find($categoria);
	$produtos = $c->produtos()->where("produto.nome like '%$buscaReplaced%'");
}
else
{
	$produtos = Produto::where("produto.nome like '%$buscaReplaced%'");
}
include("view/home.php");
?>