<?php

class Produto extends DBClass{
	
	public const table = 'produto';
    public const fields = ['id', 'nome', 'descricao', 'preco', 'imagem'];
    public const primary = 'id';
	
	public function categorias()
    {
		return $this->manyToMany(Categoria::class, 'produto_categoria', 'categoria_id', 'produto_id');
    }
	
	public function compras()
    {
		return $this->manyToMany(Categoria::class, 'produto_compra', 'compra_id', 'produto_id', ['quantidade'=>1]);
    }
	
}

?>