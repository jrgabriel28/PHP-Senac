
    <?php include_once('categoria_pesquisa.php') ?>
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-sm-12 text-center">
                <h1>Gerenciamento de Categoria</h1>
            </div>
        </div>
        <form action="" method="post" class="form-control">
            <div class="row mt-3">
                <div class="col-sm-6">
                    <input type="number" name="txtID" min="0" class="form-control" placeholder="*ID da Categoria" value="<?=$idCategoria?>">
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-primary" name="btoPesquisar" id="btoPesquisar" formaction="_sistema.php?tela=categoria">&#128269;</button>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <input type="text" name="txtNome" id="txtNome" class="form-control" formaction="" placeholder="*Nome da Categoria" value="<?=$nomeCategoria?>">
                </div>
                <div class="col-sm-6">
                    <select name="txtStatus" id="textStatus" class="form-control">
                        <option value="">--Selecione um Status--</option>
                        <option value="ativo" <?=($statusCategoria=='ativo'?'selected':"")?>>ativo</option>
                        <option value="inativo" <?=($statusCategoria=='inativo'?'selected':"")?>>inativo</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtDescricao" id="txtDescricao" rows="5" class="form-control" formaction="" placeholder="*Descrição da Categoria"><?=$descricaoCategoria?></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtObs" id="txtObs" rows="10" class="form-control" formaction="" placeholder="Observação do Usuário"><?=$obsCategoria?></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar" id="btoCadastrar" class="btn btn-primary" formaction="categoria_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar" id="btoAlterar" class="btn btn-danger" formaction="categoria_alterar.php">Alterar</button>
                    <a href="_sistema.php?tela=categoria" name="btoLimpar" id="btoLimpar" class="btn btn-">Limpar</a>
                    <button name="btoExcluir" id="btoCExcluir" class="btn btn-warning" formaction="categoria_excluir.php">Excluir</button>
                    <a href="_sistema.php" name="btoSair" id="btoSair" class="btn btn-dark">Sair</a>
                </div>
            </div>
        </form>
    </div>


    <script src="../js/bootstrap.js"></script>