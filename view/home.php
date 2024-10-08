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
            <a href = '<?= root('compra/carrinho')?>' class="nav-link border border-light rounded waves-effect">
			&nbsp;
              <i class="fas fa-cog"></i>
              <span class="clearfix d-none d-sm-inline-block"> Ajustes </span>
            &nbsp;
			</a>
          </li>
          <li class="nav-item">
            <a href='<?= root('cliente/menu')?>' class="nav-link border border-light rounded waves-effect"> 
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

  <!--Main layout-->
  <main class='pt-5 mt-5'>
    <div class="container">

      <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten mt-5">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
		  
    <div class="btn-group">
      <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categorias
      </button>
      <div class="dropdown-menu">
        <a class="nav-link" href="<?=root('?categoria=0'."&busca=$busca")?>">
          <strong class="text-primary">Todos</strong>
        </a>
        <?php foreach(CategoriaC::all() as $cat):?>
         <a class="nav-link" href="<?=root('?categoria='.$cat->getPrimary()."&busca=$busca")?>">
          <strong class="text-primary"><?=$cat->descricao?></strong>
        </a>
        <?php endforeach;?>
      </div>
    </div>

		    <ul class="navbar-nav mr-auto">
		        <a class="nav-link active" href="<?=root()?>">Limpar
              </a>
          </ul>
          <!-- Links -->
			<a class='text-white' href='<?=root('?categoria='.$categoria."&busca=")?>'>X</a>
          <form class="form-inline">
            <div class="md-form my-0">
			<input name='categoria' value='<?=$categoria?>' type="hidden">
              <input id='busca' name='busca' value='<?=$busca?>' class="form-control mr-sm-2" type="text" placeholder="Busca" aria-label="Search">
            </div>
			<button class="btn btn-primary btn-sm"> <i class="fas fa-search"></i> </button>
          </form>
        </div>
        <!-- Collapsible content -->

      </nav>
      <div class="row">
        <a class="nav-link strong" href="<?=root('?categoria=0'."&busca=$busca")?>">
          <strong class="text-primary">Todos</strong>
        </a>
        <?php foreach(range('a', 'z') as $letra):?>
         <a class="nav-link strong" href="<?=root('?inicial='.$letra."&busca=$busca")?>"><?=$letra?></a>
        <?php endforeach;?>
        </div><br>
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">

		  <?php if(!sizeof($clientes)):?><div class="col-md-12 text-center mb-4">
		  <h5>Sua busca não retornou resultados.</h5>
		  </div>
		  
			<?php endif;?>


<?php foreach($clientes as $produto):?>
		  <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view zoom overlay">
                  <a href="<?=root('produto/detalhes?id='.$produto->getPrimary())?>">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div style='height:170px;' class="card-body text-center">
                <!--Category & Title-->
                			
                <h5>
                  <strong>
                    <a href="<?=root('produto/detalhes?id='.$produto->getPrimary())?>" class="dark-grey-text"><?=$produto->nome?></a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong><?=$produto->cpf?></strong>
                </h4>
				<?php foreach($produto->categorias()->all() as $categoria):?>
				  <a href="<?=root('?categoria='.$categoria->getPrimary())?>">
					<span class="badge badge-pill text-uppercase danger-color"><?=$categoria->descricao?></span>
				  </a>
				<?php endforeach;?>
              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

	<?php endforeach;?>


        </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->

      

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="<?=root('cliente/faleConosco')?>" role="button">
	  Fale Conosco
        <i class="fas fa-envelope ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="<?=root('sobre')?>" role="button">
	  Sobre
        <i class="fas fa-info-circle ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">


    <!--Copyright-->
    <div class="footer-copyright py-3">
      Sistema EN - Escritório Emilio Neto
	  <br>
	  <small>Developed by Daniel Millan</small>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

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
