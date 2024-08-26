  <!--Main layout-->
  <main class='pt-5 mt-5'>
    <div class="container">
          <div class="text-center">
            <h3>Processos</h3>
          </div>
      <!--Navbar-->
        <div class="navbar navbar-expand-lg navbar-dark mdb-color lighten mt-5">

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
        <a class="nav-link" href="<?=root('processos/lista?categoria=0'."&busca=$busca")?>">
          <strong class="text-primary">Todos</strong>
        </a>
        <?php foreach(CategoriaP::all() as $cat):?>
         <a class="nav-link" href="<?=root('processos/lista?categoria='.$cat->getPrimary()."&busca=$busca")?>">
          <strong class="text-primary"><?=$cat->descricao?></strong>
        </a>
        <?php endforeach;?>
      </div>
    </div>

		    <ul class="navbar-nav mr-auto">
		        <a class="nav-link active" href="<?=root('processos/lista')?>">Limpar
              </a>
          </ul>
          <!-- Links -->
			<a class='text-white' href='<?=root('processos/lista?categoria='.$categoria."&busca=")?>'>X</a>
          <form class="form-inline">
            <div class="md-form my-0">
			<input name='categoria' value='<?=$categoria?>' type="hidden">
              <input id='busca' name='busca' value='<?=$busca?>' class="form-control mr-sm-2" type="text" placeholder="Busca" aria-label="Search">
            </div>
			<button class="btn btn-primary btn-sm"> <i class="fas fa-search"></i> </button>
          </form>
        </div>
        <!-- Collapsible content -->

      </div>
      <!--/.Navbar-->
<br>
      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">

		  <?php if(!sizeof($processos)):?><div class="col-md-12 text-center mb-4">
		  <h5>Sua busca não retornou resultados.</h5>
		  </div>
		  
			<?php endif;?>

<table class="table mx-3 table-striped table-bordered">
                <tbody>
                <?php foreach($processos as $processo): ?>
                    <tr>
                        <td><a class="blue-text font-weight-bold" href="<?=root('processos/dados?id='.$processo->getPrimary())?>"><?=$processo->numero?></a></td>
                      </td>
                        <td><?=$processo->nomesClientes()?></td>
                        <td><?=$processo->assunto?></td>
                        <td>
                          <?php foreach($processo->categorias()->all() as $categ):?>
                          <a href="<?=root('?categoria='.$categ->getPrimary())?>">
                          <span class="badge badge-pill text-uppercase danger-color"><?=$categ->descricao?></span>
                          </a>
                        <?php endforeach;?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php if($page > 1):?>
          <a href='<?=root("processos/lista?categoria=$categoria&busca=$busca&page=".($page-1))?>' class="btn btn-light btn-sm">&#8678;
          </a>
        <?php endif;?>

        <?php if(sizeof($processos) == $CPAGINA): ?>
          <a href='<?=root("processos/lista?categoria=$categoria&busca=$busca&page=".($page+1))?>' class="btn btn-light btn-sm">&#8680;
          </a>
        <?php endif;?>

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->

      

    </div>
  </main>
  <!--Main layout-->
