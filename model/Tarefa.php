<?php

class Tarefa extends DBClass{
	
	public const table = 'tarefa';
    public const fields = ['id', 'descricao', 'tipo', 'data', 'concluida_em'];
    public const primary = 'id';
	
	public function usuario()
    {
        return $this->manyToOne(Usuario::class, 'usuario_id');
    }
	
	public function registro()
    {
        return $this->manyToOne(Registro::class, 'registro_id');
    }

}

?>