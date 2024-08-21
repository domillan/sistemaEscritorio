<?php

if( !isset($_SESSION["carrinho"]) || !sizeof($_SESSION["carrinho"]->produtos()->get()) ){
	header('Location: '.root('compra/carrinho'));
	exit();
}

if( !isset($_SESSION["user"]) ){
	header('Location: '.root('cliente/login'));
	exit();
}

if(!isset($_REQUEST['pagamento']) || FormaPagamento::find($_REQUEST['pagamento']) === null ){
	header('Location: '.root('compra/finalizar?erro=pagamento'));
	exit();
}
($_SESSION["user"])->refresh();
$carrinho = $_SESSION["carrinho"];
$carrinho->cliente()->set($_SESSION["user"]);
$carrinho->formaPagamento()->set($_REQUEST['pagamento']);
$carrinho->horario = (new DateTime('NOW'))->format('Y-m-d H:i:s');
$carrinho->save();

email(($_SESSION["user"])->email, "Pedido realizado",
"Olá!\nSeu pedido Nº ".str_pad($carrinho->getPrimary(), 7, '0', STR_PAD_LEFT).
' foi realizado em '.(new DateTime($carrinho->horario))->format('d/m/Y - H:i').
".\nO valor do pedido é R$ ".number_format($carrinho->total(), 2, ',', '.').
' e a forma de pagamento selecionada foi '.$carrinho->formaPagamento()->first()->descricao.
".\nPara mais informações, acesse o site.\n\nAtenciosamente, ".$GLOBALS['APP_NAME'].'.',
 "eduardam2002@gmail.com");
 
unset($_SESSION["carrinho"]);

header('Location: '.root('compra/detalhes?id='.$carrinho->getPrimary()));
exit();
?>