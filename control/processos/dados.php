<?php

validaLogin(url());
validaToken();
validaAcesso(10);

$processo = Processo::find(request('id'));

include("view/topo.php");
include("view/processo.php");
include("view/rodape.php");
?>