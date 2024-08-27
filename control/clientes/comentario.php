<?php

validaLogin(url());
validaToken();
validaAcesso(3);

$cliente = Cliente::find(request('id'));
include("view/topo.php");
include("view/novoComentario.php");
include("view/rodape.php");
?>