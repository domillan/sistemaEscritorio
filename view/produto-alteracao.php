<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Alteração de Produto</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?=root('css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?=root('css/mdb.min.css')?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?=root('css/style.min.css')?>" rel="stylesheet">
</head>
<body>
<form enctype="multipart/form-data" method="POST" action="alteracao.php">
<label>Nome: <input type='text' name='inserir_nome' value="<?php echo $produto->nome?>"></label><br>
<label>Descrição: <input type='text' name='inserir_descricao' value="<?php echo $produto->descricao?>"></label><br>
<label>Preço: <input type='number' name='inserir_preco' value="<?php echo $produto->preco?>"></label><br>
<input type="hidden" name="id_produto" value="<?php echo $produto->id?>">
<input type="hidden" name="MAX_FILE_SIZE" value="50000000">
<label>Foto: <input type='file' name='inserir_arquivo'></label><br>
<input name="inserir_alteracao" type='submit'>
</form>
<br>

<!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?=root('js/jquery-3.4.1.min.js')?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?=root('js/popper.min.js')?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?=root('js/bootstrap.min.js')?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?=root('js/mdb.min.js')?>"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>
</html>