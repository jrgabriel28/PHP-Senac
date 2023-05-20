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
                <h1>Gerenciamento de Produto</h1>
            </div>
        </div>
        <form action="" method="post" class="form-control">
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="number" class="form-control" name="txtID" min="0" placeholder="ID do Produto">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-primary" name="btoPesquisa" id="btoPesquisa" formaction="produto_pesquisa.php">&#128269;</button>
                </div>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="txtCadastro" id="txtCadastro">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome do Produto">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="txtMarca" id="txtMarca" placeholder="Nome da Marca">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="txtValorCusto" min="0" placeholder="Valor Unitario de Custo do Produto">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="txtValorUni" min="0" placeholder="Valor Unitario do Produto">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="txtIDC" min="0" placeholder="ID da Categoria">
                </div>
                <div class="col-sm-3">
                <select name="txtStatus" id="textStatus" class="form-control">
                        <option value="">--Selecione um Status--</option>
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtObs" id="txtObs" class="form-control" rows="5" placeholder="Observações do Usuário"></textarea>
                </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar" id="btoCadastrar" class="btn btn-primary" formaction="categoria_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar" id="btoAlterar" class="btn btn-danger" formaction="categoria_alterar.php">Alterar</button>
                    <button name="btoLimpar" id="btoLimpar" class="btn btn-secondary" formaction="frm_categoria.php">Limpar</button>
                    <button name="btoExcluir" id="btoCExcluir" class="btn btn-warning" formaction="categoria_excluir.php">Excluir</button>
                    <button name="btoSair" id="btoSair" class="btn btn-dark" formaction="index.php">Sair</button>
                </div>
        </form>
    </div>    




    <script src="../js/bootstrap.js"></script>
</body>
</html>