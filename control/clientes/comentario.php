<?php

validaLogin(url());
validaToken();

$cliente = Cliente::find(request('id'));
include("view/topo.php");
include("view/novoComentario.php");
include("view/rodape.php");
?>