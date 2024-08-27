<?php

validaLogin(url());
validaToken();

//DB::debugOn();
$tarefa = Tarefa::find(request('id'));
if($tarefa){
	if(request('value') == 1){
		$tarefa->concluida_em = date('Y-m-d H:i:s');
	}
	else
	{
		$tarefa->concluida_em = null;
	}
	$tarefa->save();
}

redirect(root("tarefas/lista?data=".request('data')));
?>