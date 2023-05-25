<?php
    include_once('conexao.php');

    if($_POST) 
    {
        $IDpro = $_POST['txtID'];
        $IDcat = $_POST['txtIDC'];
        $nome = $_POST['txtNome'];
        $marca = $_POST['txtMarca'];
        $cadastro = $_POST['txtCadastro'];
        $valorcusto = $_POST['txtValorCusto'];
        $valoruni = $_POST['txtValorUni'];
        $obs = $_POST['txtObs'];
        $status = $_POST['txtStatus'];
        $qtde = $_POST['txtQtd'];

        try {
            $sql = $conn->prepare("
                update produto set 
                    id_categoria_produto=:id_categoria_produto,
                    nome_produto=:nome_produto,
                    marca_produto=:marca_produto,
                    valorunitario_produto=:valorunitario_produto,
                    valordecusto_produto=:valordecusto_produto,
                    obs_produto=:obs_produto,
                    status_produto=:status_produto,
                    qtde_produto=:qtde_produto
                where id_produto=:id_produto
            ");

            $sql->execute(array(
                ':id_produto'=>$IDpro,
                ':id_categoria_produto'=>$IDcat,
                ':nome_produto'=>$nome,
                ':marca_produto'=>$marca,
                ':valorunitario_produto'=>$valoruni,
                ':valordecusto_produto'=>$valorcusto,
                ':obs_produto'=>$obs,
                ':status_produto'=>$status,
                ':qtde_produto'=>$qtde
                
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados alterados com sucesso!</p>';
            }


        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('Location:_sistema.php?tela=produto');
    }

?>

<hr>
<a href="_sistema.php?tela=produto">Voltar</a>