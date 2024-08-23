<?php

validaLogin(url());
validaToken();

$cliente = Cliente::find(request('id'));
include("view/topo.php");
include("view/cliente.php");
include("view/rodape.php");
?>