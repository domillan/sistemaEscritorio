<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Detalhes da compra</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?=root('css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?=root('css/mdb.min.css')?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?=root('css/style.min.css')?>" rel="stylesheet">
</head>

<body class="grey lighten-3">

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="<?=root()?>">
        <strong class="blue-text"><?=$GLOBALS['APP_NAME']?></strong>
      </a>


		<ul class="navbar-nav nav-flex-icons float-right">
          <li class="nav-item">
            <a href = '<?= root('compra/carrinho')?>' class="nav-link border border-light rounded waves-effect">
			&nbsp;
              <i class="fas fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Carrinho </span>
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
  <main class="mt-5 pt-5">
    <div class="container wow fadeIn">

		<!--Section: Block Content-->
		<section>

		  <!--Grid row-->
		  <div class="row md-12">

			<!--Grid column-->
			<div class="col-lg-12">

			  <!-- Card -->
			  <div class="card mb-3">
				<div class=" card-body pt-4 wish-list">

				  <h5 class="mb-4">Pedido nº <?=str_pad($compra->getPrimary(), 7, '0', STR_PAD_LEFT);?></h5>
				  <div><h6><strong>Data : </strong> <?=(new DateTime($compra->horario))->format('d/m/Y - H:i')?></h6></div>
				  <div><h6><strong>Valor: </strong> R$ <?=number_format($total, 2, ',', '.')?></h6></div>
				  <div><h6><strong>Forma de pagamento: </strong> <?=$pagamento->descricao?></h6></div>
				  <?php foreach ($produtos as $produto):?>
				  <hr class="mb-4">
				  <div class="row mb-4">
					<div class="col-md-5 col-lg-3 col-xl-3">
					  <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
						<img class="img-fluid w-100"
						  src="<?=root("img/produtos/$produto->imagem")?>" alt="Sample">
					  </div>
					</div>
					<div class="col-md-7 col-lg-9 col-xl-9">
					  <div>
						<div class="d-flex justify-content-between">
						  <div>
							<a href="<?=root('produto/detalhes?id='.$produto->getPrimary())?>">
							<h5><?=$produto->nome?></h5>
							</a>
							<p class="mb-3 text-muted text-uppercase small">
							<?=$produto->descricao?>
							</p>
							<p class="mb-3 text-muted text-uppercase small">
							Valor unitário: R$ <?=number_format($produto->preco, 2, ',', '.')?>
							</p>
						  </div>
						  <div>
						  <div class="col-md-6 float-right">
							<h5 ><?=$compra->quantidade($produto);?></h5>
							
						  </div>
						  </div>
						</div>
						<div class="d-flex justify-content-between align-items-center">
						  <p class="mb-0"><span><strong>R$ <?=number_format($compra->subtotal($produto), 2, ',', '.')?></strong></span></p class="mb-0">
						</div>
					  </div>
					</div>
				  </div>
				  <?php endforeach;?>
				  <br>
				  
				  <a href="<?=root()?>" type="button" class="btn btn-info btn-block">Continue comprando</a>
				  
				  
				</div>
			  </div>
			  <!-- Card -->



			</div>
			

		  </div>
		  <!-- Grid row -->

		</section>
		<!--Section: Block Content-->


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
      © 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
	  <br>
	  Daniel Oliveira Millan & Eduarda Dias Martins
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
