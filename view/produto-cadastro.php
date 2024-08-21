<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cadastro de Produto</title>
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
<form enctype="multipart/form-data" method="POST" action="cadastro.php">
<label>Nome: <input type='text' name='nome'></label><br>
<label>Descrição: <input type='text' name='descricao'></label><br>
<label>Preço: <input type='number' name='preco'></label><br>
<input type="hidden" name="MAX_FILE_SIZE" value="50000000">
<label>Foto: <input type='file' name='arquivo'></label><br>
<input type='submit' name="cadastrar">
</form>
<br>
<br>
Lista de produtos
<ul class="list-group">
<?php foreach(Produto::all() as $produto_view):?>
<br>
  <li class="list-group-item">
  <?php echo $produto_view->id ?> - <?php echo $produto_view->nome ?><br>
  <form action="/trabalhophpds4/produto/alteracao.php" method="post">
  <input type="hidden" name="produto" value="<?php echo $produto_view->id?>"/>
  <input type="submit" name="alterar" value="Alterar"/>
  </form> 
  | <a href="">Excluir</a>
  </li>
 <?php endforeach;?>
</ul>

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