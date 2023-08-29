<?php

$flag_msg = null;
$msg = "";


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Primeira Atividade PHP</title>
    </head>
    <body class="bg-secondary">
    
            <a href ="/Exercicio/Projeto/menu.php">
                <button type="button" class="btn btn-warning">Voltar menu Principal</button>
            </a>
            <div class="p-4 mb-4 bg-secondary">
                <h1 class="display-5">Analisar a catégoria de um nadador infantil </h1>
                <hr class="my-3">
                <p class="lead">Informe o idade   do nadador que deseja análise.</p>
            </div>

        <div class="container">
            <form method="GET">
                <div class="form-group col-md-2">
                <label for="tp"> Número:</label>
                <input type="text" class="form-control" id="n" name="n" required>
                </div>
                <br/>
                <br/>
                <button type="submit" class="btn-warning" name="enviar">Resultado</button>
                <br/>
                <br/> 
            
            </form>
            <?php
                if (isset($_GET['enviar'])) {
                    $n = $_GET["n"];
                       
                    if($n >= 5 && $n <= 7){
                        echo "É um número: $n  negativo par.";
                    }
                    elseif($n > 0 && $n  % 2 != 0 ){
                        echo "É um número: $n  positivo impar.";
                    }
                    elseif($n > 0 && $n  % 2 == 0 ){
                        echo "É um número: $n  positivo par.";
                    }
                    else{
                        echo "É um número: $n  negativo impar.";
                    }
                                    
                }

            ?>
        <div class="text-reght-90">
            </br>
            <a href ="/Exercicio/Projeto/Decimo_Primeiro.php">
             <button type="button" class="btn-warning">Proximo</button>
            </a>
        </div>
            

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1
                /dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS
                1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
                crossorigin="anonymous">
            </script>
        </div>
    </body>
</html>