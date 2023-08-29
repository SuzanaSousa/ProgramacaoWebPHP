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
                <h1 class="display-5">Analisar Votos </h1>
                <hr class="my-3">
                <p class="lead">Imprimir relatório de Votos.</p>
            </div>

        <div class="container">
            <form method="GET">
                <div class="form-group col-md-2">
                <label for="vq">vb:</label>
                <input type="text" class="form-control" id="vb" name="vb" required>
                </div>
                <br/>
                <br/>
                <div class="form-group col-md-2">
                <label for="vq">vn:</label>
                <input type="text" class="form-control" id="vn" name="vn" required>
                </div>
                <br/>
                <br/>
                <div class="form-group col-md-2">
                <label for="vv">vv:</label>
                <input type="text" class="form-control" id="vv" name="vv" required>
                </div>
                <br/>
                <br/>
                <button type="submit" class="btn-warning" name="enviar">Resultado</button>
                <br/>
                <br/> 
            
            </form>
            <?php
                if (isset($_GET['enviar'])) {
                    $vb = $_GET['vb'];
                    $vn = $_GET['vn'];
                    $vv = $_GET['vv'];
                    
                    

                    if(!empty($vb) && !empty($vn ) && !empty($vv )&& 
                        is_numeric($vb) && is_numeric($vn) && is_numeric($vv)
                        && $vb >=0 && $vn >= 0 && $vv >=
                        0) {
                        

                        $total_v = ($vb + $vn + $vv );
                        $percetual_b = ($vb / $total_v) * 100;
                        $percetual_n = ($vn / $total_v) * 100;
                        $percetual_v = ($vv/ $total_v) * 100;

                       
                        echo "<h4>Relatório:</h4>";
                        echo "Total de votos computados foram:  $total_v votos .<br/>";
                        echo "Percentual de votos computados branco: $percetual_b % votos.<br/>";
                        echo "Percentual de votos computados nulos: $percetual_n % votos.<br/>";
                        echo "Percentual de votos computados validos: $percetual_v % votos.<br/>";
                          
                    
                    }
                        
                    
                    
                        
                }

            ?>
        <div class="text-reght-90">
            </br>
            <a href ="/Exercicio/Projeto/Oitavo.php">
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