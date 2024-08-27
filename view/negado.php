<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Acesso negado</title>
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
<div class="mt-5 page-wrap d-flex flex-row align-items-center">

    <div class="container">
	<div class="row content-center">
		<h1 class="mx-auto mb-4">
			<strong><?= $GLOBALS['APP_NAME'] ?></strong>
		</h1>
	</div>
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-3 d-block">Acesso negado</span>
                <div class="mb-4 lead">Você não acesso a essa página.</div>
                <a href="<?=root()?>" class="btn btn-link">Voltar para o site</a>
            </div>
        </div>
    </div>
</div>
</body>

</html>
