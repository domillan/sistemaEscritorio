<?php

class CategoriaC extends DBClass{

	public const table = 'categoriac';
    public const fields = ['id', 'descricao'];
    public const primary = 'id';

	public function clientes()
    {
        return $this->manyToMany(Cliente::class, 'categoriaC_cliente', 'cliente_id', 'categoriaC_id');
    }
}

?>