<?php

class FormaPagamento extends DBClass{
	
	public const table = 'forma_pagamento';
    public const fields = ['id', 'descricao'];
    public const primary = 'id';
	
	public function compras()
    {
        return $this->oneToMany(Compra::class, 'pagamento_id');
    }
	
}

?>