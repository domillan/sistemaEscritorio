<?php

class Comentario extends DBClass{

	public const table = 'comentario';
    public const fields = ['id', 'texto', 'data', 'processo_id', 'usuario_id'];
    public const primary = 'id';

	public function processo()
    {
        return $this->manyToOne(Processo::class, 'processo_id');
    }
    public function autor()
    {
        return $this->manyToOne(Usuario::class, 'usuario_id');
    }
}

?>