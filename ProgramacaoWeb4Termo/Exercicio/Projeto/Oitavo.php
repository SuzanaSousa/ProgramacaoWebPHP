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
            Crie um programa que armazene em um array 10 jogos da megasena, com 6 números
             inteiros cada (de 1 a 60) e em seguida crie um método que sorteie 6 dezenas 
             e exiba a quantidade de acertos de cada jogo
            <div class="p-4 mb-4 bg-secondary">
                <h1 class="display-5">Analisar Votos </h1>
                <hr class="my-3">
                <p class="lead">Imprimir relatório de Votos.</p>
            </div>

        <div class="container">
            <form method="GET">
                <div class="form-group col-md-2">
                <label for="tp">Total_p:</label>
                <input type="text" class="form-control" id="tp" name="tp" required>
                </div>
                <br/>
                <br/>
                <div class="form-group col-md-2">
                <label for="tp">Total_pp:</label>
                <input type="text" class="form-control" id="tpp" name="tpp" required>
                </div>
                <br/>
                <br/>
                <div class="form-group col-md-2">
                <label for="tp">Valor_atual :</label>
                <input type="text" class="form-control" id="va" name="va" required>
                </div>
                <br/>
                <br/>
                <button type="submit" class="btn-warning" name="enviar">Resultado</button>
                <br/>
                <br/> 
            
            </form>
            <?php
                if (isset($_GET['enviar'])) {
                    $tp = $_GET['tp'];
                    $tpp = $_GET['tpp'];
                    $va = $_GET['va'];
                    
                    

                    if(!empty($tp) && !empty($tpp ) && !empty($va )&& 
                        is_numeric($tp) && is_numeric($tpp) && is_numeric($va)
                        && $tp >=0 && $tpp >= 0 && $va >=
                        0) {
                        

                        $qtd_pagar = ($tp - $tpp );
                        $valor_devedor = ($qtd_pagar *  $va);
                       
                       
                        echo "<h4>Relatório:</h4>";
                        echo "Total de prestações a serem pagas: $qtd_pagar prestações.<br/>";
                        echo "Total  do valor atual de devedor será de R$: $valor_devedor reias.<br/>";
                        
                          
                    
                    }
                        
                    
                    
                        
                }

            ?>
        <div class="text-reght-90">
            </br>
            <a href ="/Exercicio/Projeto/Nono.php">
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