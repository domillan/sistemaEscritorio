<?php
if (request('logout')==1)
	unset($_SESSION['user']);
else
	session_destroy();
redirect(root());
die();
?>