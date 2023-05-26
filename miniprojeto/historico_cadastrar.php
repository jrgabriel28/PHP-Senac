<?php
    include_once('conexao.php');
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    //return;

    if($_POST) 
    {
        $nomeUsu = $_POST['txtUsu'];
        $idUsu = $_POST['IDusu'];
        $cadastro = $_POST['txtCadastro'];
        $nomePro = $_POST['txtProduto'];
        $idPro = $_POST['txtIDpro'];
        $valorV = $_POST['txtValor'];
        $qtde = $_POST['txtQtd'];
        $desc = $_POST['txtDesc'];
        $obs = $_POST['txtObs'];
        $status = $_POST['txtStatus'];

        try {
            $sql = $conn->prepare("
                insert into historico
                (
                    id_produto_historico,
                    id_usuario_historico,
                    valordavenda_historico,
                    qtde_historico,
                    descricao_historico,
                    obs_historico,
                    status_historico
                )
                values
                (
                    :id_produto_historico,
                    :id_usuario_historico,
                    :valordavenda_historico,
                    :qtde_historico,
                    :descricao_historico,
                    :obs_historico,
                    :status_historico
                )
            
            ");

            $sql->execute(array(
                ':id_produto_historico'=>$idPro,
                ':id_usuario_historico'=>$idUsu,
                ':valordavenda_historico'=>$valorV,
                ':qtde_historico'=>$qtde,
                ':descricao_historico'=>$desc,
                ':obs_historico'=>$obs,
                ':status_historico'=>$status
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
        header('Location:_sistema.php?tela=historico');
    }

?>

<hr>
<a href="_sistema.php?tela=historico">Voltar</a>


