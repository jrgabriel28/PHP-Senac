<?php
    include_once('conexao.php');

    if($_POST)
    {
        $nome = $_POST['txtNome'];
        $desc = $_POST['txtDescricao'];
        $obs = $_POST['txtObs'];
        $status = $_POST['txtStatus'];

        try 
        {
            $sql = $conn->prepare("
                insert into categoria
                (
                    nome_categoria,
                    descricao_categoria,
                    obs_categoria,
                    status_categoria
                )
                values
                (
                    :nome_categoria,
                    :descricao_categoria,
                    :obs_categoria,
                    :status_categoria
                )
            
            ");

            $sql->execute(array(
                ':nome_categoria'=>$nome,
                ':descricao_categoria'=>$desc,
                ':obs_categoria'=>$obs,
                ':status_categoria'=>$status

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
        header('Location:frm_categoria.php');
    }
?>

<hr>
<a href="frm_categoria.php">Voltar</a>