<?php

class Tarefa extends DBClass{
	
	public const table = 'tarefa';
    public const fields = ['id', 'descricao', 'data', 'concluida_em', 'registro_id'];
    public const primary = 'id';
	
	public function usuario()
    {
        return $this->manyToOne(Usuario::class, 'usuario_id');
    }
	
	public function registro()
    {
        return $this->manyToOne(Registro::class, 'registro_id');
    }

    public function cliente()
    {
        return $this->registro()->first()->cliente()->first();
    }

    public function processo()
    {
        return $this->registro()->first()->processo()->first();
    }

}

?>