<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de PHP</title>
</head>
<body>
    
    <style>.tam{width: 300px; margin-left:150px}</style>

    <h1>Maior problema das pessoas em 2023</h1>
    <hr>
    
    <p><button formaction="pag02.php">Voltar</button></p>

    <?php
        $time = 'Corinthians';
        $pedidodeajuda = 'me ajuda';
        

        echo '<h2>Por que os jovens estão cada vez mais doentes da cabeça?</h2>'; //o echo imprimi o conteudo
        echo "<h3> Porque tem 11 milionários burros que jogam pela desgraça do $time</h3>";

        echo '<h5>por favor ' .$pedidodeajuda.'</h5>'; //a variavel só funciona pq está entre "." que no php significa concatenar.

        echo '<img src="img/caimo.jpg" class="tam" alt="">';
        echo '<br>';
        echo '<br>';

        $jogadores = ['Gil','Fabio Santos','Fagner','Maycon','Roni']; //lista de bagres
        var_dump($jogadores); //o var dump mostra o tipo da variavel e quantos caracteres ele possui

        echo '<p>Qual o pior deles?</p>';
        echo $jogadores[4]; //ele puxa o nome da lista da variavel de acordo com a ordem de posição dela (começa do 0)
        var_dump($jogadores[2]);

        echo '<br>';
        echo '<br>';

       /*if($_POST)
        {
            echo $_POST['txtNome']." ".$_POST['txtSobrenome'];
        }
        */
    ?>
    
</body>
</html>