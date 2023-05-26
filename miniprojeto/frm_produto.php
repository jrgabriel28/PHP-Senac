
    <?php include_once('produto_pesquisa.php') ?>
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-sm-12 text-center">
                <h1>Gerenciamento de Produto</h1>
            </div>
        </div>
        <form action="" method="post" class="form-control">
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="number" class="form-control" name="txtID" min="0" placeholder="ID do Produto" value="<?=$idProduto?>">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-primary" name="btoPesquisa" id="btoPesquisa" formaction="_sistema.php?tela=produto">&#128269;</button>
                </div>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="txtCadastro" id="txtCadastro" value="<?=substr($cadastroProduto,0,10)?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome do Produto" value="<?=$nomeProduto?>">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtMarca" id="txtMarca" placeholder="Nome da Marca" value="<?=$marcaProduto?>">
                </div>
                <div class="col-sm-2">
                    <input type="number" class="form-control" name="txtQtd" min="0" placeholder="Qtd de produto" value="<?=$qtdeProduto?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="txtValorCusto" step="0.01" min="0" value="<?=$valorcustoProduto?>" placeholder="Valor Unitario de Custo do Produto">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="txtValorUni" step="0.01" min="0" value="<?=$valoruniProduto?>" placeholder="Valor Unitario do Produto">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="txtIDC" min="0" placeholder="ID da Categoria" value="<?=$idCategoria?>">
                </div>
                <div class="col-sm-3">
                <select name="txtStatus" id="textStatus" class="form-control">
                        <option value="">--Selecione um Status--</option>
                        <option value="ativo" <?=($statusProduto=='ativo'?'selected':'') ?>>Ativo</option>
                        <option value="inativo" <?=($statusProduto =='inativo'?'selected':'') ?>>Inativo</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtObs" id="txtObs" class="form-control" rows="5" placeholder="Observações do Usuário"><?=$obsProduto?></textarea>
                </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar" id="btoCadastrar" class="btn btn-primary" formaction="produto_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar" id="btoAlterar" class="btn btn-danger" formaction="produto_alterar.php">Alterar</button>
                    <a href="_sistema.php?tela=produto" name="btoLimpar" id="btoLimpar" class="btn btn-">Limpar</a>
                    <button name="btoExcluir" id="btoCExcluir" class="btn btn-warning" formaction="produto_excluir.php">Excluir</button>
                    <a href="_sistema.php" name="btoSair" id="btoSair" class="btn btn-dark">Sair</a>
                </div>
            </div>
        </form>
    </div>    




    <script src="../js/bootstrap.js"></script>
