<?php

validaLogin(url());
validaToken();

$CPAGINA = 20;

$categoria = request('categoria');
$busca = request('busca');
$page = request('page');
if(!$page) $page=1;

$buscaReplaced = preg_replace ( '/[\s]+/m' , ' % ', $busca);
if($categoria){
	$cat = CategoriaP::find($categoria);
	$processos = $cat->processos()->select(['where'=>"processo.assunto like '%$buscaReplaced%' or processo.numero like '%$buscaReplaced%'",
											'orderBy'=>'processo.assunto','limit'=> $CPAGINA, 'offset'=>$CPAGINA*($page-1)]);
}
else
{
	$processos = Processo::select(['where'=>"processo.assunto like '%$buscaReplaced%' or processo.numero like '%$buscaReplaced%'",
											'orderBy'=>'processo.assunto','limit'=> $CPAGINA, 'offset'=>$CPAGINA*($page-1)]);
}

include("view/topo.php");
include("view/processos.php");
include("view/rodape.php");
?>