<?php

class Token extends DBClass{
	
	public const table = 'token';
    public const fields = ['id', 'token', 'data'];
    public const primary = 'id';

    public function usuario()
    {
        return $this->ManytoOne(Usuario::class, 'usuario_id');
    }

}

?>