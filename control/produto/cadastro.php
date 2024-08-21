<?php
if (isset($_POST['cadastrar'])){
	$produto = new Produto();
	$nome = filter_var($_REQUEST['nome'], FILTER_SANITIZE_STRING);
	$descricao = filter_var($_REQUEST['descricao'], FILTER_SANITIZE_STRING);
	$preco = filter_var($_REQUEST['preco'], FILTER_SANITIZE_STRING);
	$caminho = "C:/xampp/htdocs/trabalhophpds4/img/produtos/";
	if($_FILES['arquivo']['size'] < 50000000 &&($_FILES['arquivo']['type'] == 'image/gif' || $_FILES['arquivo']['type'] == 'image/jpeg' || $_FILES['arquivo']['type'] == 'image/jpg' || $_FILES['arquivo']['type'] == 'image/png')){
		$produto->nome = $nome;
		$produto->descricao = $descricao;
		$produto->preco = $preco;
		$produto->categorias()->add(1);
		$produto->save();
		$nome = "prod" . $produto->getPrimary() . "." . str_replace("image/", "", $_FILES['arquivo']['type']); 
		if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$caminho.$nome)){
			$produto->imagem = $nome;
			$produto->save();
		}
	}
	else {
		echo var_dump($produto);
	}
}
include("view/produto-cadastro.php");
?>
<a href='../compra/index.php'>Compra</a>