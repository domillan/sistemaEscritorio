<main class='pt-5 mt-5'>

<div class="container bg-light p-3">
    <form method="post" action="<?=root('clientes/salvar')?>">
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= htmlspecialchars($cliente->nome) ?>" required>
                <input type="hidden" id="id" name="id" value="<?= htmlspecialchars($cliente->id) ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="<?= htmlspecialchars($cliente->cpf) ?>">
            </div>
            <div class="col-md-6">
                <label for="rg" class="form-label">RG</label>
                <input type="text" class="form-control" id="rg" name="rg" value="<?= htmlspecialchars($cliente->rg) ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nacionalidade" class="form-label">Nacionalidade</label>
                <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" value="<?= htmlspecialchars($cliente->nacionalidade) ?>">
            </div>
            <div class="col-md-6">
                <label for="profissao" class="form-label">Profissão</label>
                <input type="text" class="form-control" id="profissao" name="profissao" value="<?= htmlspecialchars($cliente->profissao) ?>">
            </div>
        </div>
        <div class="row mb-3">

            <div class="col-md-6">
                <label for="escolaridade" class="form-label">Escolaridade</label>
                <input type="text" class="form-control" id="escolaridade" name="escolaridade" value="<?= htmlspecialchars($cliente->escolaridade) ?>">
            </div>
            <div class="col-md-6">
                <label for="estado_civil" class="form-label">Estado Civil</label>
                <input type="text" class="form-control" id="estado_civil" name="estado_civil" value="<?= htmlspecialchars($cliente->estado_civil) ?>">
            </div>
        </div>
        <div class="row mb-3">

            <div class="col-md-6">
                <label for="data_nasc" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nasc" name="data_nasc" value="<?= htmlspecialchars($cliente->data_nasc) ?>">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($cliente->email) ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="celular" class="form-label">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" value="<?= htmlspecialchars($cliente->celular) ?>">
            </div>
            <div class="col-md-6">
           
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?= htmlspecialchars($cliente->telefone) ?>">
            </div>
        </div>
        <hr class="pb-3">
        <div class="row mb-3">
            <div class="col-md-8">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?=htmlspecialchars($cliente->endereco)?>">
            </div>

            <div class="col-md-4">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" value="<?= htmlspecialchars($cliente->cep) ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?= htmlspecialchars($cliente->bairro) ?>">
            </div>
            <div class="col-md-4">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?= htmlspecialchars($cliente->cidade) ?>">
            </div>
            <div class="col-md-4">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" value="<?= htmlspecialchars($cliente->estado) ?>">
            </div>
        </div>
        <hr class="pb-3">
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="pai" class="form-label">Nome do Pai</label>
                <input type="text" class="form-control" id="pai" name="pai" value="<?= htmlspecialchars($cliente->pai) ?>">
            </div>
            <div class="col-md-4">
                <label for="mae" class="form-label">Nome da Mãe</label>
                <input type="text" class="form-control" id="mae" name="mae" value="<?= htmlspecialchars($cliente->mae) ?>">
            </div>
            <div class="col-md-4">
                <label for="religiao" class="form-label">Religião</label>
                <input type="text" class="form-control" id="religiao" name="religiao" value="<?= htmlspecialchars($cliente->religiao) ?>">
            </div>
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="4"><?= htmlspecialchars($cliente->observacao) ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
<?php if($cliente->id): ?>
<br>
<div class="container bg-light p-3">
    <h3> Processos <a href="<?=root("processos/novo?clientes=[$cliente->id]")?>" class="btn btn-sn btn-info">+</a></h3>
    <ul class="list-group">
    <?php foreach ($cliente->processos()->all() as $processo): ?>
      <li class="list-group-item"><a href ="<?=root('processos/dados')."?id=$processo->id"?>"><?=$processo->numero?></a> - <?=$processo->assunto?></li> 
    <?php endforeach; ?>
    </ul>
</div>
<br>
<div class="container bg-light p-3">
    <h3> Andamentos </h3>
    <div class="row mb-3">
        <div class="col-md-8">
        <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
        </div>
        <div class="col-md-3 text-center">
            <select class="form-control" id="codigo" name="codigo">
                <option value="12">Comentário</option>
                <option value="13">Andamento</option>
            </select>
            <button type="submit" class="btn btn-primary">Novo</button>
        </div>

    </div>
    <ul class="list-group">
    <?php foreach ($cliente->andamentos() as $andamento): ?>
      <li class="list-group-item"><?=$andamento->descricao?> <br> <small><?=$andamento->usuario()->first()->nome?> às <?=$andamento->data?></small></li> 
    <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

</main>
