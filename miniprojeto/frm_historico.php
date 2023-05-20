<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-sm-12 text-center">
                <h1>Gerencimento do Histórico</h1>
            </div>
        </div>
        <form action="" method="post" class="form-control">
            <div class="row mt-3">
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="txtUsu" id="txtUsu" placeholder="Nome do Usuário">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" name="txtIDusu"  placeholder="ID do Usuário" >
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                <input type="number" class="form-control" min="0" name="txtID"  placeholder="ID do Histórico" >
                </div>
                <div class="col-sm-5">
                    <button class="btn btn-primary" name="btoPesquisa" id="btoPesquisa" formaction="">&#128269;</button>
                </div>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="txtCadastro" id="txtCadastro">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="txtProduto" id="txtProduto" placeholder="Nome do Produto">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" name="txtIDpro"  placeholder="ID do Produto" >
                </div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-3">
              <input type="number" class="form-control" name="txtValor" placeholder="Valor de venda">
              </div>
              <div class="col-sm-3">
              <input type="number" class="form-control" name="txtQtde" placeholder="Quantidade de itens">
              </div>
              <div class="col-sm-6">
                <select name="txtStatus" id="textStatus" class="form-control">
                    <option value="">--Selecione um Status--</option>
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                </select>
              </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtDesc" class="form-control" id="txtDesc" rows="7" placeholder="Descrição do histáorico"></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtObs" class="form-control" id="txtObs" rows="5" placeholder="Observações do Histórico"></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar" id="btoCadastrar" class="btn btn-primary" formaction="historico_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar" id="btoAlterar" class="btn btn-danger" formaction="historico_alterar.php">Alterar</button>
                    <button name="btoLimpar" id="btoLimpar" class="btn btn-secondary" formaction="frm_historico.php">Limpar</button>
                    <button name="btoExcluir" id="btoCExcluir" class="btn btn-warning" formaction="historico_excluir.php">Excluir</button>
                    <button name="btoSair" id="btoSair" class="btn btn-dark" formaction="index.php">Sair</button>
                </div>
            </div>
        </form>
    </div>



    <script src="../js/bootstrap.js"></script>
</body>
</html>