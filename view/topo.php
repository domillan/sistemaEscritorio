<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?=$GLOBALS['APP_NAME'] ?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?=root('css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?=root('css/mdb.min.css')?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?=root('css/style.min.css')?>" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    main
    {
      min-height: 120%;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="<?=root()?>">
        <strong class="blue-text"><?=$GLOBALS['APP_NAME']?></strong>
      </a>

      <div>
    <div class="btn-group">
      <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Clientes
      </button>
      <div class="dropdown-menu">
         <a class="nav-link" href="<?=root('clientes/lista')?>">
        <strong class="text-primary">Buscar</strong>
        </a>
        <div class="dropdown-divider"></div>
        <a class="nav-link" href="<?=root('clientes/novo')?>">
        <strong class="text-primary">Cadastrar</strong>
        </a>
      </div>
    </div>

    <div class="btn-group">
      <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Tarefas
      </button>
      <div class="dropdown-menu">
         <a class="nav-link" href="<?=root('tarefas/lista')?>">
        <strong class="text-primary">Buscar</strong>
        </a>
        <div class="dropdown-divider"></div>
        <a class="nav-link" href="<?=root('tarefas/novo')?>">
        <strong class="text-primary">Novo</strong>
        </a>
      </div>
    </div>

    <div class="btn-group">
      <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Processos
      </button>
      <div class="dropdown-menu">
         <a class="nav-link" href="<?=root('processos/lista')?>">
        <strong class="text-primary">Buscar</strong>
        </a>
        <div class="dropdown-divider"></div>
        <a class="nav-link" href="<?=root('processos/novo')?>">
        <strong class="text-primary">Novo</strong>
        </a>
      </div>
    </div>

        <div class="btn-group">
      <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categorias
      </button>
      <div class="dropdown-menu">
         <a class="nav-link" href="<?=root('clientes/lista')?>">
        <strong class="text-primary">Clientes</strong>
        </a>
        <div class="dropdown-divider"></div>
        <a class="nav-link" href="<?=root('clientes/novo')?>">
        <strong class="text-primary">Processos</strong>
        </a>
      </div>
    </div>
  </div>


    <span class="nav-link"></span>
    <span class="nav-link"></span>
    <span class="nav-link"></span>
    <span class="nav-link"></span>



		<ul class="navbar-nav nav-flex-icons float-right">
          <li class="nav-item">
            <a href = '<?= root('404')?>' class="nav-link border border-light rounded waves-effect">
			&nbsp;
              <i class="fas fa-cog"></i>
              <span class="clearfix d-none d-sm-inline-block"> Ajustes </span>
            &nbsp;
			</a>
          </li>
          <li class="nav-item">
            <a href='<?= root('logout')?>' class="nav-link border border-light rounded waves-effect">
            &nbsp;
			  <i class="fas fa-user"></i>
			  <span class="clearfix d-none d-sm-inline-block"> Conta </span> 
            &nbsp;
			</a>
          </li>
        </ul>
      <!-- Links -->
    </div>
  </nav>
  <!-- Navbar -->