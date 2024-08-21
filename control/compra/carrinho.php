<?php
if( !isset($_SESSION["carrinho"]) ){
	$_SESSION["carrinho"] = Compra::new();
}

$carrinho = $_SESSION["carrinho"];
$produtos = $carrinho->produtos()->get();
$total = $carrinho->total();
require_once("view/carrinho.php");
?>