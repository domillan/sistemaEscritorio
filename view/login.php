<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login</title>
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

<!-- Navbar -->
  <nav class="navbar fixed-top navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="<?=root()?>">
        <strong class="blue-text"><?=$GLOBALS['APP_NAME']?></strong>
      </a>

    </div>
  </nav>
  <!-- Navbar -->

<div class="mt-5 page-wrap d-flex flex-row align-items-center">

    <div class="container mt-4 pt-4">
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form method="POST" action="<?=root('login')?>">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-4">
                                    <h2><i class="fa fa-envelope"></i> Acesso</h2>
                                </div>
                            </div>
                            <div class="card-body p-3 text-center">
                                <!--Body-->		
                                <div class="form-group w-100">
                                    <div class="input-group mb-3">
									<label for='email'>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i>&nbsp;E-mail </div>
                                        </div>
									</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
									<label for='senha'>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-key text-info"></i>&nbsp;Senha </div>
                                        </div>
									</label>
                                        <input class="form-control" type='password' name='senha' id='senha' placeholder="Sua senha" required><br>
                                    </div>
                                <p><a class='mb-5 text-start' href="cadastro.php">Esqueci minha senha</a></p>
                                </div>

                                <div class="text-center">
                                    <input type="submit" name="logar" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>
							<?php if($mensagem!=null):?>
							<div class="alert alert-danger ml-2 mr-2" role="alert">
							  <?php echo $mensagem; ?>
							</div>
							<?php endif;?>
                        </div>
                    </form>
                </div>
	</div>
</div>
</div>

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