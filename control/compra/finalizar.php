<?php
if( !isset($_SESSION["user"]) ){
	header('Location: '.root('cliente/login'));
	exit();
}
if( !isset($_SESSION["carrinho"]) || !sizeof($_SESSION["carrinho"]->produtos()->get()) ){
	header('Location: '.root('compra/carrinho'));
	exit();
}

($_SESSION["user"])->refresh();
$cliente = $_SESSION["user"];
$carrinho = $_SESSION["carrinho"];
$produtos = $carrinho->produtos()->get();
$total = $carrinho->total();
$formas = FormaPagamento::all();
require_once("view/finalizar.php");
?>