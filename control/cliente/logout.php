<?php
if (isset($_GET['logout']) && $_GET['logout']=1)
	unset($_SESSION['user']);
else
	session_destroy();

header('Location:'.root('cliente/login'));
die();
?>