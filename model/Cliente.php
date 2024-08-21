<?php

class Cliente extends DBClass{
	
	public const table = 'cliente';
    public const fields = ['id', 'nome', 'cpf', 'email', 'senha'];
    public const primary = 'id';
	
	public function cadastrante()
    {
        return $this->manyToOne(Compra::class, 'usuario_id');
    }
	
	public function processos()
    {
		return $this->manyToMany(Produto::class, 'cliente_processo', 'processo_id', 'cliente_id');
    }

    public function relacionados()
    {
		return $this->manyToMany(Cleinte::class, 'cliente_cliente', 'cliente1_id', 'cliente2_id');
    }
	
	public function formaPagamento()
    {
        return $this->manyToOne(FormaPagamento::class, 'pagamento_id');
    }
	

	
}

?>