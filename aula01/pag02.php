<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario/Post</title>
</head>
<body>
    <h1>Formulario e Post's</h1>    
    <hr>

    <form action="" method="post">
        <h2><b>Nome</b></h2>
        <p>
            <label for="txtNome">Informe seu nome</label><br>
            <input type="text" name="txtNome" id="txtNome">
        </p>
        <p>
            <label for="txtSobrenome">Informe seu sobrenome</label><br>
            <input type="text" name="txtSobrenome" id="txtSobrenome">
        </p>
        <p>
            <button formaction="pag02.php">OK</button>
        </p>
    </form>

    <hr>

    <?php
    if($_POST)
    {
        print_r($_POST);
        //echo '<br>';
        echo $_POST['txtNome']." ".$_POST['txtSobrenome'];
    }
    ?>


</body>
</html>