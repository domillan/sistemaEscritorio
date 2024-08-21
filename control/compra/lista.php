<?php

if( !isset($_SESSION["user"])){
	header('Location:'.root('cliente/login'));
	die();
}

$compras = ($_SESSION["user"])->compras()->all();
require_once('view/lista.php')

?>