<?php

class Cliente extends DBClass{
	
	public const table = 'cliente';
    public const fields = ['id', 'nome', 'cpf', 'rg', 'nacionalidade', 'profissao','escolaridade','estado_civil','data_nasc',
    						'email', 'celular','telefone','cep','endereço','bairro','cidade','estado','pai','mae','religiao','observacao'];
    public const primary = 'id';
	
	public function registros()
    {
        return $this->oneToMany(Registro::class, 'cliente_id');
    }
	
	public function processos()
    {
		return $this->manyToMany(Processo::class, 'cliente_processo', 'processo_id', 'cliente_id');
    }

    public function relacionados()
    {
		return $this->manyToMany(Cliente::class, 'cliente_cliente', 'cliente1_id', 'cliente2_id');
    }
	
	public function categorias()
    {
		return $this->manyToMany(CategoriaC::class, 'categoriaC_cliente', 'categoriaC_id', 'cliente_id');
    }

    public function comentarios()
    {
        return $this->registros()->where('codigo = 12');
    }

    public function andamentos()
    {
        return $this->registros()->where('codigo = 13');
    }
	
	public function registrosTarefas()
    {
        return $this->registros()->where('codigo = 14');
    }
}

?>