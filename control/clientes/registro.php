<?php

validaLogin(url());
validaToken();


$registro = Registro::new();
$registro->codigo = request('codigo');
$registro->descricao = request('descricao');
$registro->usuario()->set($_SESSION('user'));


if(request('cliente')){
	$registro->cliente()->set(Cliente::find(request('cliente')));
	$caminho = root('clientes/dados?id='.request('cliente'));
}
elseif(request('processo')){
	$registro->processo()->set(Processo::find(request('processo')));
	$caminho = root('processos/dados?id='.request('processo'));
}
else
{
	redirect(root());
}

$registro->save();

if(request('codigo') == 14 || request('codigo') == 24)
{
	$tarefa = Tarefa::new();
	$tarefa->data = request('data');
	$tarefa->descricao = request('descricaoT');
	$tarefa->usuario()->set(Usuario::find(request('responsavel')));
	$tarefa->save();

}

redirect($caminho);
?>