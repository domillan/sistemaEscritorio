<main class='pt-5 mt-5'>
<div class="container bg-light p-3">
    <form method="post" action="<?= htmlspecialchars(root('registro')) ?>">
        <h4>Novo Andamento</h4>
        <?php if(isset($cliente)): ?>
        <div class="mb-3">
            Cliente: <a href="<?= root('clientes/dados?id='.$cliente->id) ?>"><?= htmlspecialchars($cliente->nome) ?></a>
            <input type="hidden" id="cliente" name="cliente" value="<?= htmlspecialchars($cliente->id) ?>">
            <input type="hidden" id="codigo" name="codigo" value="13">
        </div>
         <?php elseif(isset($processo)) :?>
        <div class="mb-3">
            Processo: <a href="<?= root('processos/dados?id='.$processo->id) ?>"><?= htmlspecialchars($processo->numero) ?> - <?= htmlspecialchars($processo->nomesClientes()) ?> </a>
            <input type="hidden" id="processo" name="processo" value="<?= htmlspecialchars($processo->id) ?>">
            <input type="hidden" id="codigo" name="codigo" value="23">
        </div>
        <?php endif; ?>
                <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="4"></textarea>
            </div>            
            
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
</div>

</main>
