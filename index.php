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


function path()
{
	$path = $_SERVER['REQUEST_URI'];
	$path = explode("?", $path)[0];

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
	if($_SERVER['HTTP_HOST']!='localhost')
		return "/$path";
	
	return $GLOBALS['ROOT']."/$path";
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

$GLOBALS['APP_NAME'] = 'Cantina Virtual';
$GLOBALS['PATH_INFO'] = pathinfo($_SERVER['SCRIPT_FILENAME']);
$GLOBALS['ROOT'] = str_replace ( '/'.$GLOBALS['PATH_INFO']['basename'] , '' , $_SERVER['SCRIPT_NAME']);


//Conexão com o banco do 000
DB::setConnection('localhost', 'root', '', 'sistema');
include_once(path());


?>
