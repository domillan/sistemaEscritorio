<?php

validaLogin(url());
validaToken();

$processo = Processo::find(request('id'));
include("view/topo.php");
include("view/novoAndamento.php");
include("view/rodape.php");
?>