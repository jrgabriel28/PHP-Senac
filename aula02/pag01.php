<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    

</head>
<body>

    <div class="container">
        <div class="col-sm-12 text-center">
            <h1>Calculadora</h1>
        </div>
        <form action="" method="post" class="form-control">
            <div class="row">
                <div class="col sm-3">
                    <input type="number" name="txtN1" placeholder="Informe o N1" class="form-control" id="txtN1" required>
                </div>
                <div class="col sm-3">
                    <input type="number" name="txtN2" placeholder="Informe o N2" class="form-control" id="txtN2" required>
                </div>
                <div class="col-sm-6">
                    <button id="btoMais" name="bto" class="btn btn-primary" formaction="pag01.php" value="mais"> + </button>
                    <button id="btoMenos" name="bto" class="btn btn-secondary" formaction="pag01.php" value="menos"> - </button>
                    <button id="btoMult" name="bto" class="btn btn-danger" formaction="pag01.php" value="mult"> x </button>
                    <button id="btoDiv" name="bto" class="btn btn-warning" formaction="pag01.php" value="divisão"> / </button>
                    <!--Todos os "name" fica com a mesma coisa para que na hora de verificar não precisar fazer uma verificação
                        para cada botão -->
                </div>
            </div>
        
            <div class="row">
                <div class="col-sm-12">
                    <hr>
                    <div class="text-center p-3 m-2" style="background-color: lightgray; border-radius:20px">
                        <h1>
                            <?php
                                if($_POST)
                                {
                                    $n1 = $_POST['txtN1'];
                                    $n2 = $_POST['txtN2'];
                                    $op = $_POST['bto'];
                                    $total = 0;

                                    //print_r($_POST);
                                    
                                    if($op == "mais") //A op se equivale ao "bto" que são todos os botões acima, e o if só vai ser acionado quando o op for igual a "mais", que é o valor do bto acima.
                                    {
                                        $total = $n1 + $n2;
                                    }
                                    else if ($op == "menos")
                                    {
                                        $total = $n1 - $n2;
                                    }
                                    else if ($op == "mult")
                                    {
                                        $total = $n1 * $n2;
                                    }
                                    else if ($op == "divisão")
                                    {
                                        $total = $n1 / $n2;
                                    }
                                           
                                    echo $total;
                                    
                                }
                            ?>
                        </h1>
                    </div>
                </div>
            </form>
        </div>
    </div>    

    <link rel="stylesheet" href="../js/bootstrap.js">
</body>
</html>