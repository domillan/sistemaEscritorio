<?php

class CategoriaP extends DBClass{

	public const table = 'categoriap';
    public const fields = ['id', 'descricao'];
    public const primary = 'id';

	public function processos()
    {
        return $this->manyToMany(Processo::class, 'categoriaP_processo', 'processo_id', 'categoriaP_id');
    }
}

?>