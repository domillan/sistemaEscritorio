<?php

validaLogin(url());
validaToken();

//DB::debugOn();

if(request('data'))
	$data = request('data');
else
	$data = date('Y-m-d');

$tarefas = ($_SESSION['user'])->tarefas()->where("data='$data'");

$dias = array_column(($_SESSION['user'])->tarefas()->select(['select'=>'tarefa.data', 'where' => 'tarefa.concluida_em is NULL', 'groupBy'=>'tarefa.data'], true), 'data');
include("view/topo.php");
include("view/tarefas.php");
include("view/rodape.php");
?>