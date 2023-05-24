<?php
    include_once('conexao.php');

    $idProduto='';
    $idCategoria='';
    $nomeProduto='';
    $marcaProduto='';
    $cadastroProduto='';
    $valorcustoProduto='';
    $valoruniProduto='';
    $qtdeProduto='';
    $obsProduto='';
    $statusProduto='';

    if($_POST) 
    {
        $id = $_POST['txtID'];

        $sql = $conn->query('select * from produto where id_produto='.$id);

        if($sql->rowCount()>=1) 
        {
            foreach ($sql as $row) 
            {
                $idProduto=$row[0];
                $idCategoria=$row[1];
                $nomeProduto=$row[2];
                $marcaProduto=$row[3];
                $valoruniProduto=$row[4];
                $valorcustoProduto=$row[5];
                $cadastroProduto=$row[6];
                $obsProduto=$row[7];
                $statusProduto=$row[8];
                $qtdeProduto=$row[9];
            }
        }
        else
        {
            echo '<p>Usuário não existe</p>';
        }
    }
?>