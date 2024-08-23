<?php

validaLogin(url());
validaToken();

$categoria = request('categoria');
$busca = request('busca');
$inicial = request('inicial');

$buscaReplaced = preg_replace ( '/[\s]+/m' , ' % ', $busca);
if($categoria){
	$cat = CategoriaP::find($categoria);
	$processos = $cat->processos()->where("processo.assunto like '%$buscaReplaced%' or processo.numero like '%$buscaReplaced%'");
}
else
{
	$processos = Processo::where("processo.assunto like '%$buscaReplaced%' or processo.numero like '%$buscaReplaced%'");
}

include("view/topo.php");
include("view/processos.php");
include("view/rodape.php");
?>