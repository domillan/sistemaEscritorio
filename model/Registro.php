<?php

class Registro extends DBClass{
	
	public const table = 'registro';
    public const fields = ['id', 'descricao', 'codigo', 'data', 'cliente_id', 'processo_id', 'usuario_id'];
    public const primary = 'id';
	
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
	
}

?>