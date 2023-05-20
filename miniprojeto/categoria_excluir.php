<?php
    include_once('conexao.php');

    if($_POST)
    {
        $id = $_POST['txtID'];

        try 
        {
            $sql = $conn->prepare("
                delete from categoria where id_categoria=:id_categoria
            ");

            $sql->execute(array(
                ':id_categoria'=>$id
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados excluidos com sucesso!</p>';
            }
            else
            {
                echo '<p>A categoria não existe.';
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