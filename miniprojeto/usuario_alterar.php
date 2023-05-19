<?php
    include_once('conexao.php');

    if($_POST)
    {
        $id = $_POST['txtID'];
        $nome = $_POST['txtNome'];
        $login = $_POST['txtLogin'];
        $senha = $_POST['txtSenha'];
        $nasc = $_POST['txtNascimento'];
        $img = '';
        $obs = $_POST['txtObs']; 
        $status = $_POST['txtStatus'];
        
        try 
        {
            $sql = $conn->prepare("
                update usuario set
                    nome_usuario=:nome_usuario,
                    nascimento_usuario=:nascimento_usuario,
                    usuario_usuario=:usuario_usuario,
                    senha_usuario=:senha_usuario,
                    img_usuario=:img_usuario,
                    obs_usuario=:obs_usuario,
                    status_usuario=:status_usuario
                where id_usuario=:id_usuario
            ");     
            
            $sql->execute(array(
                ':id_usuario'=>$id,
                ':nome_usuario'=>$nome,
                ':nascimento_usuario'=>$nasc,
                ':usuario_usuario'=>$login,
                ':senha_usuario'=>$senha,
                ':img_usuario'=>$img,
                ':obs_usuario'=>$obs,
                ':status_usuario'=>$status

            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados alterados com sucesso</p>';
            }



        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    else
    {
        header('Locatiom:frm_usuario.php');
    }
?>

<a href="frm_usuario.php">Voltar</a>