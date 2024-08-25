<?php

class Processo extends DBClass{
	
	public const table = 'processo';
    public const fields = ['id', 'numero', 'chave', 'area', 'objeto', 'assunto','pedido', 'status','comarca',
    						'tramita','fase','detalhes','observacao','campo1','campo2','campo3','campo4'];
    public const primary = 'id';
	
	
	public function clientes()
    {
		return $this->manyToMany(Cliente::class, 'cliente_processo', 'cliente_id', 'processo_id');
    }

	public function registros()
    {
        return $this->oneToMany(Registro::class, 'processo_id');
    }

    public function categorias()
    {
        return $this->manyToMany(CategoriaP::class, 'categoriaP_processo', 'categoriaP_id', 'processo_id');
    }

    public function comentarios()
    {
        return $this->registros()->where('codigo = 22');
    }

    public function andamentos()
    {
        return $this->registros()->where('codigo = 23');
    }

    public function registrosTarefa()
    {
        return $this->registros()->where('codigo = 24');
    }

    public function nomesClientes()
    {
        $array = [];
        foreach($this->clientes as $cliente)
            $array[] = $cliente->nome;
        return implode(', ', $array);
    }


}

?>