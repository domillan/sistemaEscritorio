<main class='pt-5 mt-5'>

<div class="container bg-light p-3">
    <div class="text-right" ><a class="btn btn-danger" href="<?=root('logout')?>">Sair</a></div>
        <h2>Editar Conta</h2>
        <small>Nível de acesso: clientes <?=$_SESSION['user']->getAcessoClientes()?> + processos <?=$_SESSION['user']->getAcessoProcessos()?></small>
        <form action="<?=root('atualizaUser')?>" method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($user->nome); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user->email); ?>" required>
            </div>
            <div class="form-group">

                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" pattern=".{8,}" title="A senha deve ter pelo menos 8 caracteres" required>
                <small id="senhaHelp" class="form-text text-muted">A senha deve ter pelo menos 8 caracteres.</small>
            </div>
            <div class="form-group">
                <label for="confirma_senha">Confirme a Senha</label>
                <input type="password" class="form-control" id="confirma_senha" name="confirma_senha" pattern=".{8,}" title="A confirmação deve ter pelo menos 8 caracteres" required>
                <small id="confirmaSenhaHelp" class="form-text text-muted">Confirme a senha digitada anteriormente.</small>
            </div>
            <?php if(request('status')): ?><div class="alert alert-success" role="alert">Alterações salvas com sucesso!</div> <?php endif; ?>
    
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
</div>
    <script>
        function validateForm() {
            var senha = document.getElementById("senha").value;
            var confirmaSenha = document.getElementById("confirma_senha").value;
            if (senha !== confirmaSenha) {
                alert("As senhas não correspondem.");
                return false;
            }
            return true;
        }
    </script>

</main>
