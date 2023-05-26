<?php include_once('historico_pesquisa.php') ?>
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-sm-12 text-center">
                <h1>Gerencimento do Histórico</h1>
            </div>
        </div>
        <form action="" method="post" class="form-control">
            <div class="row mt-3">
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="txtUsu" id="txtUsu" placeholder="Nome do Usuário" value="<?=$nomeUsuarioHistorico?>">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" name="IDusu"  placeholder="ID do Usuário" value="<?=$idUsuarioHistorico?>" >
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                <input type="number" class="form-control" min="0" name="txtID"  placeholder="ID do Histórico" value="<?=$idHistorico?>" >
                </div>
                <div class="col-sm-5">
                    <button class="btn btn-primary" name="btoPesquisa" id="btoPesquisa" formaction="_sistema.php?tela=historico">&#128269;</button>
                </div>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="txtCadastro" id="txtCadastro" value="<?=substr($cadastroHistorico,0,10)?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="txtProduto" id="txtProduto" placeholder="Nome do Produto" value="<?=$nomeProdutoHistorico?>">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" name="txtIDpro" placeholder="ID do Produto" value="<?=$idProdutoHistorico?>" >
                </div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-3">
              <input type="number" class="form-control" name="txtValor" placeholder="Valor de venda" value="<?=$valorvendaHistorico?>">
              </div>
              <div class="col-sm-3">
              <input type="number" class="form-control" name="txtQtd" min="0" placeholder="Quantidade de itens" value="<?=$qtdeHistorico?>">
              </div>
              <div class="col-sm-6">
                <select name="txtStatus" id="textStatus" class="form-control">
                    <option value="">--Selecione um Status--</option>
                    <option value="ativo" <?=($statusHistorico=='ativo'?'selected':"") ?> >Ativo</option>
                    <option value="inativo" <?=($statusHistorico=='inativo'?'selected':"") ?>>Inativo</option>
                </select>
              </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtDesc" class="form-control" id="txtDesc" rows="7" placeholder="Descrição do histáorico"><?=$descricaoHistorico?></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtObs" class="form-control" id="txtObs" rows="5" placeholder="Observações do Histórico"><?=$obsHistorico?></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar" id="btoCadastrar" class="btn btn-primary" formaction="historico_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar" id="btoAlterar" class="btn btn-danger" formaction="historico_alterar.php">Alterar</button>
                    <a href="_sistema.php?tela=historico" name="btoLimpar" id="btoLimpar" class="btn btn-">Limpar</a>
                    <button name="btoExcluir" id="btoCExcluir" class="btn btn-warning" formaction="historico_excluir.php">Excluir</button>
                    <a href="_sistema.php" name="btoSair" id="btoSair" class="btn btn-dark">Sair</a>
                </div>
            </div>
        </form>
    </div>



    <script src="../js/bootstrap.js"></script>
</body>
</html>