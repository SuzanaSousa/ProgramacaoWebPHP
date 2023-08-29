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
                <label for="tp"> Lado A:</label>
                <input type="text" class="form-control" id="a" name="a" required>
                </div>
                <br/>
                <br/>
                <div class="form-group col-md-2">
                <label for="tp"> Lado B:</label>
                <input type="text" class="form-control" id="b" name="b" required>
                </div>
                <br/>
                <br/>
                <div class="form-group col-md-2">
                <label for="tp">Lado C:</label>
                <input type="text" class="form-control" id="c" name="c" required>
                </div>
                <br/>
                <br/>
                <button type="submit" class="btn-warning" name="enviar">Resultado</button>
                <br/>
                <br/> 
            
            </form>
            <?php
                if (isset($_GET['enviar'])) {
                    $a = $_GET['a'];
                    $b = $_GET['b'];
                    $c = $_GET['c'];
                    
                    

                    if(!empty($a) && !empty($b ) && !empty($c )&& 
                        is_numeric($a) && is_numeric($b) && is_numeric($c)
                        && $a >=0 && $b >= 0 && $c >=
                        0) {
                        

                                
                                if(($a + $b > $c) or ($a + $c > $b) or ($b + $c > $a)){
                                    if($a == $b && $b == $c){
                                        echo "È um triâgulo equilátero.";
                                    }
                                    elseif($a =! $b or $a =! $c or $b =! $a){
                                        echo "È um triâgulo e escaleno.";
                                    }
                                    else{
                                         echo " È um triâgulo isósceles.";
                                    }
                                    
                                }
                        
                            
                            
                        
                    }
                        
                    
                    
                        
                }

            ?>
        <div class="text-reght-90">
            </br>
            <a href ="/Exercicio/Projeto/Decimo.php">
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