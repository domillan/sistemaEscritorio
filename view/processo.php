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

<?php endif; ?>

</main>
