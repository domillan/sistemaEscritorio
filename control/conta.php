<?php
validaLogin(url());
validaToken();
$user = $_SESSION['user'];

include("view/topo.php");
include("view/user.php");
include("view/rodape.php");
?>