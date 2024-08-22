<?php

class Usuario extends DBClass{
	
	public const table = 'usuario';
    public const fields = ['id', 'nome', 'email', 'senha', 'acesso'];
    public const primary = 'id';

    // ACESSO (XY)
    // X PROCESSO
    // Y CLIENTE
    // 0=NENHUM 1=CONSULTA 2=CRIAÇÃO 3=ALTERAR 4=EXCLUIR 9=ADMIN
    // e.g. 03 (gabinete), 13 (recepcao), 33 (estagiários), 44 (advogados), 99 (admin)


    public function tarefas()
    {
        return $this->oneToMany(Tarefa::class, 'usuario_id');
    }

    public function registros()
    {
        return $this->oneToMany(Registro::class, 'usuario_id');
    }

    public function tokens()
    {
        return $this->oneToMany(Token::class, 'usuario_id');
    }

    //não testei isso
    public function clientesCadastrados()
    {
        Cliente::where(DB::in('id', $this->registros()->select(['select'=> 'cliente_id', 'where' => 'codigo = 10'])));
    }

}

?>