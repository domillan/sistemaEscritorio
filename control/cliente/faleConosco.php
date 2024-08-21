<?php
$nome='';
$email='';
if( isset($_SESSION["user"])){
	($_SESSION["user"])->refresh();
	$nome=$_SESSION["user"]->nome;
	$email=$_SESSION["user"]->email;
}
else
{
	$nome='';
	$email='';
}

require_once('view/faleConosco.php')
?>