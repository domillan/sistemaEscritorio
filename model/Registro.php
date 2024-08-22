<?php

class Registro extends DBClass{
	
	public const table = 'registro';
    public const fields = ['id', 'descricao', 'codigo', 'data'];
    public const primary = 'id';
	
    // CÓDIGOS (XY)
    // X: 1=CLIENTE 2=PROCESSO
    // Y: 0=CRIAÇÃO 1=ALTERAÇÃO 2=COMENTARIO 3=ANDAMENTO 4=TAREFA
    // e.g. 10, 11, 12, 13, 14, 20, 21, 22, 23, 24

    // 'cliente_id', 'processo_id', 'usuario_id'
    
	public function cliente()
    {
        return $this->manyToOne(Cliente::class, 'cliente_id');
    }

    public function processo()
    {
        return $this->manyToOne(Processo::class, 'processo_id');
    }

    public function usuario()
    {
        return $this->manyToOne(Usuario::class, 'usuario_id');
    }

    public function tarefas()
    {
        return $this->oneToMany(Tarefa::class, 'registro_id');
    }
	
}

?>