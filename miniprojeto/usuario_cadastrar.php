<?php
    include_once('conexao.php');

    if($_POST)
    {
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
                insert into usuario
                    (
                        nome_usuario,
                        nascimento_usuario,
                        usuario_usuario,
                        senha_usuario,
                        img_usuario,
                        obs_usuario,
                        status_usuario
                    )
                values
                    (
                        :nome_usuario,
                        :nascimento_usuario,
                        :usuario_usuario,
                        :senha_usuario,
                        :img_usuario,
                        :obs_usuario,
                        :status_usuario

                    )
            
            ");     
            
            $sql->execute(array(
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
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<p>ID Gerado: '.$conn->lastInsertId().'</p>';
            }



        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    else
    {
        header('Locatiom:_sistema.php?tela=usuario');
    }
?>

<a href="_sistema.php?tela=usuario">Voltar</a>