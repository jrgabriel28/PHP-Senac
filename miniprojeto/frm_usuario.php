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
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Gerenciamento de usuario</h1>
            </div>
        </div>
        <form action="" method="post" class="form-control">
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="number" class="form-control" min="0" name="txtID" placeholder="ID do Usuário">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-primary" name="btoPesquisar" id="btoPesquisar">&#128269;</button>
                </div>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="txtCadastro" id="txtCadastro">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome do usuário">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do usuário">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtSenha" id="txtSenha" placeholder="Senha do usuário">
                </div>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="txtNascimento" id="txtNascimento" placeholder="Data de nascimento">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-8">
                    <input type="file" class="form-control" name="txtImg" id="txtImg" placeholder="Imagem do usuário">
                </div>
                <div class="col-sm-4">
                    <select name="txtStatus" id="txtStatus" class="form-control">
                        <option value="">-- Selecione um status --</option>
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea class="form-control" name="txtObs" id="txtObs" rows="10" placeholder="Observação do usuário"></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar" id="btoCadastrar" class="btn btn-primary" formaction="usuario_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar" id="btoAlterar" class="btn btn-danger" formaction="usuario_alterar.php">Alterar</button>
                    <button name="btoLimpar" id="btoLimpar" class="btn btn-secondary">Limpar</button>
                    <button name="btoExcluir" id="btoCExcluir" class="btn btn-warning">Excluir</button>
                    <button name="btoSair" id="btoSair" class="btn btn-dark">Sair</button>
                </div>
            </div>
        </form>
    </div>




    <script src="../js/bootstrap.js"></script>
</body>
</html>