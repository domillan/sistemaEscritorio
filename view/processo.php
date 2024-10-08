<main class='pt-5 mt-5'>
<?php if($processo->id): ?>
<div class="container bg-light p-3">
    <h3> Clientes <button type="" class="btn btn-sn btn-info">+</button></h3>
    <ul class="list-group">
    <?php foreach ($processo->clientes()->all() as $cliente): ?>
      <li class="list-group-item"><a href ="<?=root('clientes/dados')."?id=$cliente->id"?>"><?=$cliente->nome?></a></li> 
    <?php endforeach; ?>
    </ul>
</div>
<br>
<?php endif; ?>
<div class="container bg-light p-3">
    <form method="post" action="<?= htmlspecialchars(root('processos/salvar')) ?>">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="numero" class="form-label">Número do Processo</label>
                    <input type="text" class="form-control" id="numero" name="numero" value="<?= htmlspecialchars($processo->numero) ?>">
                    <input type="hidden" id="id" name="id" value="<?= htmlspecialchars($processo->id) ?>">
                    <input type="hidden" id="clientes" name="clientes" value='<?= json_encode($processo->clientes()->getLista()) ?>'>
                </div>
                <div class="col-md-6">
                    <label for="assunto" class="form-label">Assunto</label>
                    <input type="text" class="form-control" id="assunto" name="assunto" value="<?= htmlspecialchars($processo->assunto) ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="chave" class="form-label">Chave</label>
                    <input type="text" class="form-control" id="chave" name="chave" value="<?= htmlspecialchars($processo->chave) ?>">
                </div>
                <div class="col-md-6">
                    <label for="area" class="form-label">Área</label>
                    <input type="text" class="form-control" id="area" name="area" value="<?= htmlspecialchars($processo->area) ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="objeto" class="form-label">Objeto</label>
                    <input type="text" class="form-control" id="objeto" name="objeto" value="<?= htmlspecialchars($processo->objeto) ?>">
                </div>
                    <div class="col-md-6">
                    <label for="fase" class="form-label">Fase</label>
                    <input type="text" class="form-control" id="fase" name="fase" value="<?= htmlspecialchars($processo->fase) ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="pedido" class="form-label">Pedido</label>
                    <input type="text" class="form-control" id="pedido" name="pedido" value="<?= htmlspecialchars($processo->pedido) ?>">
                </div>
                <div class="col-md-6">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="<?= htmlspecialchars($processo->status) ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="comarca" class="form-label">Comarca</label>
                    <input type="text" class="form-control" id="comarca" name="comarca" value="<?= htmlspecialchars($processo->comarca) ?>">
                </div>
                <div class="col-md-6">
                    <label for="tramita" class="form-label">Tramita</label>
                    <input type="text" class="form-control" id="tramita" name="tramita" value="<?= htmlspecialchars($processo->tramita) ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="detalhes" class="form-label">Detalhes</label>
                    <input type="text" class="form-control" id="detalhes" name="detalhes" value="<?= htmlspecialchars($processo->detalhes) ?>">
                </div>
            </div>
            <hr/>
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="campo1" class="form-label">Campo extra 1</label>
                    <input type="text" class="form-control" id="campo1" name="campo1" value="<?= htmlspecialchars($processo->campo1) ?>">
                </div>
                <div class="col-md-3">
                    <label for="campo2" class="form-label">Campo extra 2</label>
                    <input type="text" class="form-control" id="campo2" name="campo2" value="<?= htmlspecialchars($processo->campo2) ?>">
                </div>
                <div class="col-md-3">
                    <label for="campo3" class="form-label">Campo extra 3</label>
                    <input type="text" class="form-control" id="campo3" name="campo3" value="<?= htmlspecialchars($processo->campo3) ?>">
                </div>
                <div class="col-md-3">
                    <label for="campo4" class="form-label">Campo extra 4</label>
                    <input type="text" class="form-control" id="campo4" name="campo4" value="<?= htmlspecialchars($processo->campo4) ?>">
                </div>
            </div>
            <hr/>
            <div class="mb-3">
                <label for="observacao" class="form-label">Observação</label>
                <textarea class="form-control" id="observacao" name="observacao" rows="4"><?= htmlspecialchars($processo->observacao) ?></textarea>
            </div>            
            
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
</div>
<?php if($processo->id): ?>
<br>
<div class="container bg-light p-3">
    <h3> Comentarios <a class="btn btn-small btn-info" href="<?= root('processos/comentario?id='.$processo->id)?>">+</a></h3>
    <ul class="list-group">
    <?php foreach (array_reverse($processo->comentarios()) as $comentario): ?>
      <li class="list-group-item"><?=$comentario->descricao?> <br> <small><?=$comentario->usuario()->first()->nome?> às <?=$comentario->data?></small></li> 
    <?php endforeach; ?>
    </ul>
</div>
<br/>
<div class="container bg-light p-3">
    <h3> Andamentos <a class="btn btn-small btn-info" href="<?= root('processos/andamento?id='.$processo->id)?>">+</a></h3>
    <ul class="list-group">
    <?php foreach (array_reverse($processo->andamentos()) as $andamento): ?>
      <li class="list-group-item"><?=$andamento->descricao?> <br> <small><?=$andamento->usuario()->first()->nome?> às <?=$andamento->data?></small></li> 
    <?php endforeach; ?>
    </ul>
</div>

<br/>
<div class="container bg-light p-3">
    <h3> Tarefas <a class="btn btn-small btn-info" href="<?= root('processos/tarefa?id='.$processo->id)?>">+</a></h3>
    <ul class="list-group">
    <?php foreach (array_reverse($processo->registrosTarefa()) as $rTarefa): ?>
        <?php $tarefa = $rTarefa->tarefa(); if($tarefa===null) continue;?>
      <li class="list-group-item"> <b><?=$tarefa->usuario()->first()->nome?> até <?=$tarefa->data?></b>: <?=$tarefa->descricao?> 
        <br><small>
        <?php if($tarefa->concluida_em): ?>
            &#9989; <?=$tarefa->concluida_em ?>
       <?php else: ?>
            &#9634; Em aberto
        <?php endif; ?> <br> 
        <?=$rTarefa->usuario()->first()->nome?> às <?=$rTarefa->data?></small></li> 
    <?php endforeach; ?>
    </ul>
</div>

<br/>
<div class="container bg-light p-3">
    <h3> Registros </h3>
    <ul class="list-group">
    <?php foreach (array_reverse($processo->registrosInfo()) as $registro): ?>
      <li class="list-group-item">
        <?= ($registro->codigo == 20) ? "Criação": "Alteração de $registro->descricao";?> <br>
        <small><?=$registro->usuario()->first()->nome?> às <?=$registro->data?></small></li> 
    <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>
    <style type="text/css">
        /* Animação de piscar */
    @keyframes piscar {
        0% { border-color: #0000ff; } /* Cor inicial */
        50% { border-color: #ffffff; } /* Cor durante o piscar */
        100% { border-color: #0000ff; } /* Cor final */
    }

    /* Classe que aplica a animação */
    .piscar {
        animation: piscar 1s ease-out;
    }
    </style>
    <script type="text/javascript">
        function piscar($elem){
            // Adiciona a classe para iniciar a animação
            $elem.addClass('piscar');
            // Remove a classe após a animação (1 segundo)
            setTimeout(function() {
                $elem.removeClass('piscar');
            }, 1000);
        }

    <?php if($processo->id && !$_SESSION['user']->temAcesso(40)):?>
            $('input').prop('readonly', true);
            $('textarea').prop('readonly', true);
            $("button[type='submit']").hide();
    <?php endif; ?>

        $('input').on('dblclick', function() {
            // Confere valor do input
            if(!$(this).val()) return;
            // Selecionar o input
            $(this).select();
            // Copiar o valor para a área de transferência
            document.execCommand('copy');
            piscar($(this));
    })
   </script>
</main>
