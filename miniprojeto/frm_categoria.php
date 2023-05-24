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
                    <button class="btn btn-primary" name="btoPesquisar" id="btoPesquisar" formaction="frm_categoria.php">&#128269;</button>
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
                    <button name="btoLimpar" id="btoLimpar" class="btn btn-secondary" formaction="frm_categoria.php">Limpar</button>
                    <button name="btoExcluir" id="btoCExcluir" class="btn btn-warning" formaction="categoria_excluir.php">Excluir</button>
                    <button name="btoSair" id="btoSair" class="btn btn-dark" formaction="index.php">Sair</button>
                </div>
            </div>
        </form>
    </div>


    <script src="../js/bootstrap.js"></script>
</body>
</html>