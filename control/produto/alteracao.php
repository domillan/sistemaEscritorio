<?php
if (isset($_POST['alterar'])){
	$produto = Produto::find($_POST['produto']);
	include("view/produto-alteracao.php");
}
if (isset($_POST['inserir_alteracao'])){
		$produto = Produto::find($_POST['id_produto']);
		$nome = filter_var($_REQUEST['inserir_nome'], FILTER_SANITIZE_STRING);
		$descricao = filter_var($_REQUEST['inserir_descricao'], FILTER_SANITIZE_STRING);
		$preco = filter_var($_REQUEST['inserir_preco'], FILTER_SANITIZE_STRING);
		$caminho = "C:/xampp/htdocs/trabalhophpds4/img/produtos/";
		if($_REQUEST['inserir_arquivo']==null||$_FILES['inserir_arquivo']['size'] < 50000000 &&($_FILES['inserir_arquivo']['type'] == 'image/gif' || $_FILES['inserir_arquivo']['type'] == 'image/jpeg' || $_FILES['inserir_arquivo']['type'] == 'image/jpg' || $_FILES['inserir_arquivo']['type'] == 'image/png')){
			$produto->nome = $nome;
			$produto->descricao = $descricao;
			$produto->preco = $preco;
			$produto->categorias()->add(1);
			$produto->save();
			$nome = "prod" . $produto->getPrimary() . "." . str_replace("image/", "", $_FILES['inserir_arquivo']['type']); 
			if($_REQUEST['inserir_arquivo']!=null&&move_uploaded_file($_FILES['inserir_arquivo']['tmp_name'],$caminho.$nome)){
				$produto->imagem = $nome;
				$produto->save();
			}	
		}
		header('Location: cadastro.php');
}
?>
<a href='cadastro.php'>Gerenciar produtos</a>