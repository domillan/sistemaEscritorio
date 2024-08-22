<?php

spl_autoload_register(function ($name) {
    include_once("model/$name.php");
});

function redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}


function request($campos)
{
	if(is_array($campos))
	{
		$retorno = [];
		foreach ($campos as $campo)
		{
			$retorno[$campo] = (isset($_REQUEST[$campo])? $_REQUEST[$campo] :null);
		}
		return $retorno;
	}
	else
	{
		return (isset($_REQUEST[$campos]) ? $_REQUEST[$campos] :null);
	}

}

function url()
{
	return root($_SERVER['REQUEST_URI']);
}

function path()
{
	$path = explode("?", $_SERVER['REQUEST_URI'])[0];

	$path = str_replace ( '#'.root() , '' , '#'.$path);

	if($path == '')
	$path = 'index';

	if(@end(explode(".", $path)) == $path)
		$path = $path.'.php';
	
	if(file_exists("control/$path"))
		return "control/$path";
	
	return "control/404.php";
}

function root($path='')
{
	$path = preg_replace ('/^\//' , '',  $path);

	if($_SERVER['HTTP_HOST']!='localhost')
		return "/$path";
	
	return "/$path";
}


function validaLogin($path='')
{
	if($_SESSION['user'] && $_SESSION['token'])
	{
		return true;
	}
	redirect(root('login'));
}

function validaToken()
{
	if($_SESSION['token'] == Usuario::find($_SESSION['user'])->token)
	{
		return true;		}
	else
	{
		session_destroy();
		redirect(root('login'));
	}
}

function validaAcesso($codigo = 0)
{
	if(Usuario::find($_SESSION['user'])->acesso <= $codigo)
	{
		return true;
	}
	else
	{
		redirect(root('clientes'));
	}
}


function email($to, $subject, $message, $from)
{
	mail($to, $subject, $message, "From: $from");
}

function validaCPF($cpf) {

    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );

    if (strlen($cpf) != 11) {
        return false;
    }

    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}


session_start();

date_default_timezone_set('America/Sao_Paulo');

$GLOBALS['APP_NAME'] = 'Sistema Emilio Neto';
$GLOBALS['PATH_INFO'] = pathinfo($_SERVER['SCRIPT_FILENAME']);
$GLOBALS['ROOT'] = str_replace ( '/'.$GLOBALS['PATH_INFO']['basename'] , '' , $_SERVER['SCRIPT_NAME']);

//Conexão com o banco do 000
DB::setConnection('localhost', 'root', '', 'sistema');

include_once(path());
?>
