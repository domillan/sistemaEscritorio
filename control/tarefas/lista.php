<?php

validaLogin(url());
validaToken();

//DB::debugOn();

if(request('data'))
	$data = request('data');
else
	$data = date('Y-m-d');

$tarefas = ($_SESSION['user'])->tarefas()->where("data='$data'");

include("view/topo.php");
include("view/tarefas.php");
include("view/rodape.php");
?>