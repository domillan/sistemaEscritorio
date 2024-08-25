<main class='pt-5 mt-5'>
<div class="container bg-light p-3">
    <form method="post" action="<?= root('registro') ?>">
        <h4>Nova Tarefa</h4>
        <?php if(isset($cliente)): ?>
        <div class="mb-3">
            Cliente: <a href="<?= root('clientes/dados?id='.$cliente->id) ?>"><?= htmlspecialchars($cliente->nome) ?></a>
            <input type="hidden" id="cliente" name="cliente" value="<?= htmlspecialchars($cliente->id) ?>">
            <input type="hidden" id="codigo" name="codigo" value="14">
        </div>
         <?php elseif(isset($processo)) :?>
        <div class="mb-3">
            Processo: <a href="<?= root('processos/dados?id='.$processo->id) ?>"><?= htmlspecialchars($processo->numero) ?> - <?= htmlspecialchars($processo->nomesClientes()) ?> </a>
            <input type="hidden" id="processo" name="processo" value="<?= htmlspecialchars($processo->id) ?>">
            <input type="hidden" id="codigo" name="codigo" value="24">
        </div>
        <?php endif; ?>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" name="data" value="<?=date("Y-m-d")?>">
            </div>
            <div class="col-md-6">

                <label for="responsavel" class="form-label">Destinatário</label>
                <select id="responsavel" name="responsavel" class="custom-select">
                    <?php foreach (Usuario::where('usuario.acesso > 0') as $usuario): ?>
                        <option value="<?=$usuario->id ?>"><?=$usuario->nome?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

                <div class="mb-3">
                <label for="descricaoT" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricaoT" name="descricaoT" rows="4"></textarea>
            </div>            
            
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
</div>

</main>
