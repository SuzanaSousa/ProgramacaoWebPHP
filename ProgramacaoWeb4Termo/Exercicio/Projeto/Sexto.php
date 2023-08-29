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
                <h1 class="display-5">Analisar Gastos </h1>
                <hr class="my-3">
                <p class="lead">Imprimir relatório de consumo.</p>
            </div>

        <div class="container">
            <form method="GET">
                <div class="form-group col-md-2">
                <label for="vq">Qi:</label>
                <input type="text" class="form-control" id="Qi" name="Qi" required>
                </div>
                <br/>
                <br/>
                <div class="form-group col-md-2">
                <label for="vq">Qf</label>
                <input type="text" class="form-control" id="Qf" name="Qf" required>
                </div>
                <br/>
                <br/>
                <div class="form-group col-md-2">
                <label for="vq">Lc:</label>
                <input type="text" class="form-control" id="Lc" name="Lc" required>
                </div>
                <br/>
                <br/>
                <div class="form-group col-md-2">
                <label for="vq">Plc:</label>
                <input type="text" class="form-control" id="Plc" name="Plc" required>
                </div>
                <br/>
                <br/>
                <button type="submit" class="btn-warning" name="enviar">Resultado</button>
                <br/>
                <br/> 
            
            </form>
            <?php
                if (isset($_GET['enviar'])) {
                
                    
                
                    $Qi = $_GET['Qi'];
                    $Qf = $_GET['Qf'];
                    $Lc = $_GET['Lc'];
                    $Plc = $_GET['Plc'];
                    

                    if(!empty($Qi) && !empty($Qf ) && !empty($Lc ) && !empty($Plc)&& 
                        is_numeric($Qi) && is_numeric($Qf) && is_numeric($Lc)
                        && is_numeric($Plc) && $Qi >=0 && $Qf >= 0 && $Lc >=
                        0 && $Plc >= 0) {
                        

                        $distancia = $Qf - $Qi;
                        $valor = $Lc * $Plc;
                        $consumo  = $distancia / $Lc;
                        echo "<h4>Relatório:</h4>";
                        echo "A distância percorida no trajéto foi: $distancia Km².<br/>";
                        echo " O valor gasto total gasto no trajéto foi:R$ $valor reais.<br/>";
                        echo " O valor  total do comsumido no trajéto pelo carro foi: $consumo  litros.";
                       
                            
                          
                    
                    }
                        
                    
                    
                        
                }

            ?>
        <div class="text-reght-90">
            </br>
            <a href ="/Exercicio/Projeto/Setimo.php">
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