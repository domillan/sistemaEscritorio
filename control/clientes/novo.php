<?php

validaLogin(url());
validaToken();
validaAcesso(2);

$cliente = Cliente::new();
include("view/topo.php");
include("view/cliente.php");
include("view/rodape.php");
?>