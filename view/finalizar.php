<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Finalizar pedido</title>
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
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Finalizar compra</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body" method='POST' action='<?=root('compra/confirmado')?>'>

              <!--Grid row-->
              
                <div class="md-form input-group pl-0 mb-5">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Nome:</span>
                </div>
				<span class='form-control'><?=$cliente->nome?></span>
                </div>

              <div class="md-form input-group pl-0 mb-5">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Email:</span>
                </div>
				<span class='form-control'><?=$cliente->email?></span>
                </div>

              <div class="md-form input-group pl-0">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">&nbsp;CPF:&nbsp;</span>
                </div>
				<span class='form-control'><?=$cliente->cpf?></span>
                </div>
				<h6 class='mb-5'>Não é você? <a href='<?=root('cliente/logout?logout=1')?>'>Troque de conta</a></h6>
              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-lg-12 col-md-12 mb-4">

				  <?php if (isset($_GET['erro'])):?>
				  <div class="alert alert-danger ml-2 mr-2" role="alert">
						Selecione uma forma válida de pagamento
					</div>
				  <?php endif;?>
				  
                  <label for="pagamento">Forma de pagamento</label>
                  <select class="custom-select d-block w-100" id="pagamento" name="pagamento" required>
                    <option disabled selected value="">Selecione</option>
					<?php foreach ($formas as $forma):?>
					  <option value='<?=$forma->getPrimary()?>'><?=$forma->descricao?></option>  
					  <?php endforeach;?>
                  </select>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Confirmar compra</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Seu carrinho</span>
            <span class="badge badge-secondary badge-pill"><?=sizeof($produtos)?></span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
		  <?php foreach ($produtos as $produto):?>
		  <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"><?=$produto->nome?></h6>
				<small class="text-muted"><?=$carrinho->quantidade($produto).' x '.number_format($produto->preco, 2, ',', '.')?></small>
              </div>
              <span class="text-muted">R$ <?=number_format($carrinho->subtotal($produto), 2, ',', '.')?></span>
            </li>		  
		  <?php endforeach;?>
		  
            <li class="list-group-item d-flex justify-content-between">
              <span>Total:</span>
              <strong>R$ <?=number_format($carrinho->total(), 2, ',', '.')?></strong>
            </li>
          </ul>
          <!-- Cart -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

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
