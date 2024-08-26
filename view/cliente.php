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
                <input type="text" placeholder="000.000.000-00" class="form-control" id="cpf" name="cpf" value="<?= htmlspecialchars($cliente->cpf) ?>">
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
                <label for="celular" class="form-label">Celular <a id="zapBtn" class="font-weight-bold text-success"><i class="fab fa-whatsapp"></i></a>
                </label>
                <input type="tel" placeholder="(00) 00000-0000" class="form-control fone" id="celular" name="celular" value="<?= htmlspecialchars($cliente->celular) ?>">
            </div>
            <div class="col-md-6">
           
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel"  placeholder="(00) 00000-0000" class="form-control fone" id="telefone" name="telefone" value="<?= htmlspecialchars($cliente->telefone) ?>">
            </div>
        </div>
        <hr class="pb-3">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?=htmlspecialchars($cliente->endereco)?>">
            </div>

            <div class="col-md-2">
                <label for="num_casa" class="form-label">Número</label>
                <input type="text" class="form-control" id="num_casa" name="num_casa" value="<?= htmlspecialchars($cliente->num_casa) ?>">
            </div>

            <div class="col-md-4">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" value="<?= htmlspecialchars($cliente->cep) ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?= htmlspecialchars($cliente->bairro) ?>">
            </div>
            <div class="col-md-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?= htmlspecialchars($cliente->cidade) ?>">
            </div>
            <div class="col-md-2">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" value="<?= htmlspecialchars($cliente->estado) ?>">
            </div>
            <div class="col-md-4">
                <label for="complemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" value="<?= htmlspecialchars($cliente->complemento) ?>">
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
    <h3> Comentarios <a class="btn btn-small btn-info" href="<?= root('clientes/comentario?id='.$cliente->id)?>">+</a></h3>
    <ul class="list-group">
    <?php foreach (array_reverse($cliente->comentarios()) as $comentario): ?>
      <li class="list-group-item"><?=$comentario->descricao?> <br> <small><?=$comentario->usuario()->first()->nome?> às <?=$comentario->data?></small></li> 
    <?php endforeach; ?>
    </ul>
</div>
<br/>
<div class="container bg-light p-3">
    <h3> Andamentos <a class="btn btn-small btn-info" href="<?= root('clientes/andamento?id='.$cliente->id)?>">+</a></h3>
    <ul class="list-group">
    <?php foreach (array_reverse($cliente->andamentos()) as $andamento): ?>
      <li class="list-group-item"><?=$andamento->descricao?> <br> <small><?=$andamento->usuario()->first()->nome?> às <?=$andamento->data?></small></li> 
    <?php endforeach; ?>
    </ul>
</div>

<br/>
<div class="container bg-light p-3">
    <h3> Tarefas <a class="btn btn-small btn-info" href="<?= root('clientes/tarefa?id='.$cliente->id)?>">+</a></h3>
    <ul class="list-group">
    <?php foreach (array_reverse($cliente->registrosTarefa()) as $rTarefa): ?>
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
    <?php foreach (array_reverse($cliente->registrosInfo()) as $registro): ?>
      <li class="list-group-item">
        <?= ($registro->codigo == 10) ? "Criação": "Alteração de $registro->descricao";?> <br>
        <small><?=$registro->usuario()->first()->nome?> às <?=$registro->data?></small></li> 
    <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

</main>

<script type="text/javascript">

    function isValidCPF(cpf) {
        if (cpf.length !== 11) return false;
        // Elimina CPFs inválidos conhecidos
        if (/^(\d)\1{10}$/.test(cpf)) return false;
        // Valida 1º dígito
        let sum = 0;
        for (let i = 0; i < 9; i++) {
            sum += (10 - i) * parseInt(cpf.charAt(i));
        }
        let remainder = (sum * 10) % 11;
        if (remainder === 10 || remainder === 11) remainder = 0;
        if (remainder !== parseInt(cpf.charAt(9))) return false;
        // Valida 2º dígito
        sum = 0;
        for (let i = 0; i < 10; i++) {
            sum += (11 - i) * parseInt(cpf.charAt(i));
        }
        remainder = (sum * 10) % 11;
        if (remainder === 10 || remainder === 11) remainder = 0;
        if (remainder !== parseInt(cpf.charAt(10))) return false;

        return true;
    }


    //Quando o campo cep perde o foco.
    $("#cep").blur(function () {
        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/", function (dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#endereco").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#estado").val(dados.uf);
                        $("#cep").val(dados.cep);
                        numero.focus();
                        loc();
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                alert("CEP inválido.");
            }
        } //end if.
    });

    $('input').on('dblclick', function() {
        // Selecionar o valor do input
        var value = $(this).val();
        $(this).select();
        // Copiar o valor para a área de transferência
        document.execCommand('copy');
    });

     $('#zapBtn').on('click', function() {
        //window.open("whatsapp://send/?phone=55"+celular.value.replace(/[^0-9]|/gi, ""), "_self");
        window.open("https://wa.me/55"+celular.value.replace(/[^0-9]|/gi, ""), "_blank");
    });

     $("#cpf").blur(function () {
        cpfText = cpf.value;
        cpfText = cpfText.replace(/\D/g, '');
        if (isValidCPF(cpfText) || cpfText.length == 0) {
            cpf.classList.remove('border-danger');
        } else {
            cpf.classList.add('border-danger');
        }
        cpfText = cpfText.replace(/(\d{3})(\d{3})(\d{3})(\d{1,2})/, '$1.$2.$3-$4');
        cpf.value = cpfText;
     });

     $(".fone").blur(function () {
        cel = $(this).val().replace(/\D/g, '');
        
        if (cel.length >= 10 || cel.length == 0)
            $(this).removeClass('border-danger');
        else 
            $(this).addClass('border-danger');
        
        if(cel.length < 11)
            cel = cel.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
        else
            cel = cel.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        $(this).val(cel);
     });

</script>
