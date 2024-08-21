<?php

class Usuario extends DBClass{
	
	public const table = 'usuario';
    public const fields = ['id', 'nome', 'cpf', 'email', 'senha'];
    public const primary = 'id';

    public function tarefas()
    {
        return $this->oneToMany(Tarefa::class, 'usuario_id');
    }

    public function comentarios()
    {
        return $this->oneToMany(Comentario::class, 'usuario_id');
    }

    public function clientesCadastrados()
    {
        return $this->oneToMany(Cliente::class, 'usuario_id');
    }

    public function registros()
    {
        return $this->oneToMany(Registro::class, 'usuario_id');
    }


}

?>