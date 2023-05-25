
    <?php include_once('usuario_pesquisa.php') ?> 
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Gerenciamento de usuario</h1>
            </div>
        </div>
        <form action="" method="post" class="form-control">
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="number" class="form-control" min="0" name="txtID" value="<?=$idUsuario ?>" placeholder="ID do Usuário">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-primary" name="btoPesquisar" id="btoPesquisar" formaction="_sistema.php?tela=usuario">&#128269;</button>
                </div>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="txtCadastro" id="txtCadastro" value="<?=substr($cadastroUsuario,0,10) ?>" placeholder="Data de cadastro">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="txtNome" id="txtNome" value="<?=$nomeUsuario ?>" placeholder="Nome do usuário">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtLogin" id="txtLogin" value="<?=$loginUsuario ?>" placeholder="Login do usuário">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtSenha" id="txtSenha" value="<?=$senhaUsuario ?>" placeholder="Senha do usuário">
                </div>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="txtNascimento" id="txtNascimento" value="<?=substr($nascimentoUsuario,0,10) ?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-8">
                    <input type="file" class="form-control" name="txtImg" id="txtImg" placeholder="Imagem do usuário">
                </div>
                <div class="col-sm-4">
                    <select name="txtStatus" id="txtStatus" class="form-control">
                        <option value="">-- Selecione um status --</option>
                        <option value="ativo" <?=($statusUsuario=='ativo'?'selected':"") ?>>ativo</option>
                        <option value="inativo" <?=($statusUsuario=='inativo'?'selected':"") ?>>inativo</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea class="form-control" name="txtObs" id="txtObs" rows="10"  placeholder="Observação do usuário"> <?=$obsUsuario ?> </textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar" id="btoCadastrar" class="btn btn-primary" formaction="usuario_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar" id="btoAlterar" class="btn btn-danger" formaction="usuario_alterar.php">Alterar</button>
                    <a href="_sistema.php?tela=usuario" name="btoLimpar" id="btoLimpar" class="btn btn-">Limpar</a>
                    <button name="btoExcluir" id="btoCExcluir" class="btn btn-warning" formaction="usuario_excluir.php">Excluir</button>
                    <a href="_sistema.php" name="btoSair" id="btoSair" class="btn btn-dark">Sair</a>
                </div>
            </div>
        </form>
    </div>
    <script src="../js/bootstrap.js"></script>
