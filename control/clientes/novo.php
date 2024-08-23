<?php

validaLogin(url());
validaToken();

$cliente = Cliente::new();
include("view/topo.php");
include("view/cliente.php");
include("view/rodape.php");
?>