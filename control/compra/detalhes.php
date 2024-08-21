<?php

if( !isset($_REQUEST["id"]) || !isset($_SESSION["user"])|| null==($_SESSION["user"])->compras()->first(Compra::primary.' = "'.$_REQUEST["id"].'"')){
	require_once('control/404.php');
}

$compra = Compra::find($_REQUEST['id']);
$pagamento = $compra->formaPagamento()->first();
$produtos = $compra->produtos()->get();
$total = $compra->total();
require_once('view/compra.php')

?>