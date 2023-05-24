<?php
    include_once('conexao.php');

    if($_POST) 
    {
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
                insert into produto
                (
                    id_categoria_produto,
                    nome_produto,
                    marca_produto,
                    valorunitario_produto,
                    valordecusto_produto,
                    obs_produto,
                    status_produto,
                    qtde_produto
                )
                values
                (
                    :id_categoria_produto,
                    :nome_produto,
                    :marca_produto,
                    :valorunitario_produto,
                    :valordecusto_produto,
                    :obs_produto,
                    :status_produto,
                    :qtde_produto
                )
            ");

            $sql->execute(array(
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
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<p>ID Gerado: '.$conn->lastInsertId().'</p>';
            }


        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('Location:frm_produto.php');
    }

?>

<hr>
<a href="frm_produto.php">Voltar</a>