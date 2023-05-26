<?php
    include_once('conexao.php');

    $idHistorico='';
    $idProdutoHistorico='';
    $idUsuarioHistorico='';
    $nomeProdutoHistorico='';
    $nomeUsuarioHistorico='';
    $valorvendaHistorico='';
    $cadastroHistorico='';
    $qtdeHistorico='';
    $descricaoHistorico='';
    $obsHistorico='';
    $statusHistorico='';

    if($_POST)
    {
        $id = $_POST['txtID'];

        $sql = $conn->query('select * from historico where id_historico='.$id);

        if($sql->rowCount()>=1)
        {
            foreach ($sql as $row) 
            {
                $idHistorico=$row[0];
                $idProdutoHistorico=$row[1];
                $idProduto=$row[1];
                $idUsuarioHistorico=$row[2];
                $idUsuario=$row[2];
                $valorvendaHistorico=$row[3];
                $cadastroHistorico=$row[4];
                $qtdeHistorico=$row[5];
                $descricaoHistorico=$row[6];
                $obsHistorico=$row[7];
                $statusHistorico=$row[8];
            }

            $sql = $conn->query('select * from produto where id_produto='.$idProduto);
            
            foreach ($sql as $row) 
                {
                    $nomeProdutoHistorico=$row[2];
                }
            
            $sql = $conn->query('select * from usuario where id_usuario='.$idUsuario);
            
                foreach ($sql as $row) 
                {
                    $nomeUsuarioHistorico=$row[1];
                }

        }
        else
        {
            echo '<p>A categoria não existe!</p>';
        }
    }
?>