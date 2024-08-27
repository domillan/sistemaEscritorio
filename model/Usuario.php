<?php

class Usuario extends DBClass{
	
	public const table = 'usuario';
    public const fields = ['id', 'nome', 'email', 'senha', 'acesso'];
    public const primary = 'id';

    // ACESSO (XY)
    // X PROCESSO
    // Y CLIENTE
    // 0=NENHUM 1=CONSULTA 2=CRIAÇÃO 3=RELAÇÕES 4=ALTERAR 5=CATEGORIAS 6=EXCLUIR 9=ADMIN
    // e.g. 04 (gabinete), 14 (recepcao), 44 (estagiários), 55 (advogados), 99 (admin)


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

    public function getAcessoProcessos()
    {
        return floor($this->acesso/10);
    }

    public function getAcessoClientes()
    {
        return intval($this->acesso)%10;
    }

    public function setAcessoProcessos($num=0)
    {
        $this->acesso = $num*10 + $this->getAcessoClientes();
    }

    public function setAcessoClientes($num=0)
    {
        $this->acesso = $this->getAcessoProcessos()*10 + $num;
    }

    public function temAcesso($acesso=0)
    {
        $c = intval($acesso)%10;
        $p = floor($acesso/10);
        if($this->getAcessoClientes() >= $c && $this->getAcessoProcessos() >= $p)
            return true;
        else
            return false;
    }





}

?>