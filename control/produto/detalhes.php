<?php

$produto = Produto::find($_REQUEST['id']);
require_once("view/produto.php");
?>