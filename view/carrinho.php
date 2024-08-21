<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Meu carrinho</title>
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
			<div class="col-lg-8">

			  <!-- Card -->
			  <div class="card mb-3">
				<div class=" card-body pt-4 wish-list">

				  <h5 class="mb-4">Carrinho <span class="badge badge-warning badge-pill"> <?=sizeof($produtos)?> </span></h5>
				  <?php if (!sizeof($produtos)):?>
				  <h5>Seu carrinho está vazio!</h5>
				  <?php endif;?>
				  
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
						  <form action='<?=root('compra/edita')?>'>
							  <div class="input-group w-75 float-right">
							  <input name="id" value="<?= $produto->getPrimary();?>" type="hidden">
								<input class="form-control text-center" min="1" name="quantidade" value="<?=$carrinho->quantidade($produto);?>" type="number">
								<div class="input-group-append">
								  <button class="btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button>
								</div>
								
							  </div>
						  </form>
						  </div>
						</div>
						<div class="d-flex justify-content-between align-items-center">
						  <div>
							<a href=<?=root('compra/edita')."?quantidade=0&id=".$produto->id?>" type="button" class="card-link-secondary small text-uppercase mr-3"><i
								class="fas fa-trash-alt mr-1"></i> Remover item </a>
						  </div>
						  <p class="mb-0"><span><strong>R$ <?=number_format($carrinho->subtotal($produto), 2, ',', '.')?></strong></span></p class="mb-0">
						</div>
					  </div>
					</div>
				  </div>
				  <?php endforeach;?>
				  <br><p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Por favor, realize seu pedido com 30 minutos de antecedência.</p>


				</div>
			  </div>
			  <!-- Card -->



			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-lg-4">

			  <!-- Card -->
			  <div class="card mb-3">
				<div class="card-body pt-4">

				  <h5 class="mb-3">Resumo do carrinho</h5>

				  <ul class="list-group list-group-flush">
					
					<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
					  <div>
						<strong>Valor a pagar:</strong>
					  </div>
					  <span><strong>R$ <?=number_format($total, 2, ',', '.')?></strong></span>
					</li>
				  </ul>
				  
				  <a href="<?=root()?>" type="button" class="btn btn-info btn-block">Continue comprando</a>
				  <br>
				  <br>
				  
					<?php if (sizeof($produtos)):?> 
						<a href='<?=root('compra/finalizar')?>' type="button" class="btn btn-primary btn-block">Fechar compra</a>
					<?php else:?>
					<button type="button" disabled class="btn btn-primary btn-block">Fechar compra</a>
					<?php endif;?>
				</div>
			  </div>
			  <!-- Card -->

			</div>
			<!--Grid column-->

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
