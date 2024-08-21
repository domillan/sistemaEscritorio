<?php

if( !isset($_SESSION["carrinho"]) ){
	$_SESSION["carrinho"] = Compra::new();
}
if( !isset($_REQUEST["id"]) ||  null === Produto::find($_REQUEST['id'])){
	require_once('control/404.php');
}

$produto = Produto::find($_REQUEST['id']);

if(!isset($_REQUEST['quantidade']) || !is_numeric ($_REQUEST['quantidade']) || $_REQUEST['quantidade']<1)
{
	$quantidade = 1;
}
else{
	$quantidade = intval($_REQUEST['quantidade']);
}

$qtdAntigo = ($_SESSION["carrinho"])->produtos()->getPivotField($produto, 'quantidade');
if($qtdAntigo!=null){
	$quantidade += $qtdAntigo;
}

($_SESSION["carrinho"])->produtos()->addWithPivot($produto, ['quantidade'=>$quantidade]);

header('Location: '.root('compra/carrinho'));


exit();
?>