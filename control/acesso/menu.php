<?php
if(isset($_SESSION['user'])){
	($_SESSION['user'])->refresh();
	$cliente = $_SESSION['user'];
	include("view/cliente-menu.php");
}
else{
	header('Location:'.root('cliente/login'));
	die();
}
?>