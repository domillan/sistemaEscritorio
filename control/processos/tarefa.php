<?php

validaLogin(url());
validaToken();
validaAcesso(30);

$processo = Processo::find(request('id'));
include("view/topo.php");
include("view/novaTarefa.php");
include("view/rodape.php");
?>