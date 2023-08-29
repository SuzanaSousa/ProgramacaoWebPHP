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
                <h1 class="display-5">Analisar se o número e positivo ou negativo</h1>
                <hr class="my-3">
                <p class="lead">Imprimir se o número digitado e negativo ou pasitivo.</p>
            </div>

        <div class="container">
            <form method="GET">
                <div class="form-group col-md-2">
                <label for="vq">Nota1:</label>
                <input type="text" class="form-control" id="n1" name="n1" required>
                </div>
                <br/>
                <br/>
                <div class="form-group col-md-2">
                <label for="vq">Nota2:</label>
                <input type="text" class="form-control" id="n2" name="n2" required>
                </div>
                <br/>
                <br/>
                <div class="form-group col-md-2">
                <label for="vq">Nota3:</label>
                <input type="text" class="form-control" id="n3" name="n3" required>
                </div>
                <br/>
                <br/>
                <div class="form-group col-md-2">
                <label for="vq">Nota4:</label>
                <input type="text" class="form-control" id="n4" name="n4" required>
                </div>
                <br/>
                <br/>
                <button type="submit" class="btn-warning" name="enviar">Resultado</button>
                <br/>
                <br/> 
            
            </form>
            <?php
                if (isset($_GET['enviar'])) {
                
                    
                
                    $n1 = $_GET['n1'];
                    $n2 = $_GET['n2'];
                    $n3 = $_GET['n3'];
                    $n4 = $_GET['n4'];
                    

                    if(!empty($n1) && !empty($n2 ) && !empty($n3 ) && !empty($n4)&& 
                        is_numeric($n1) && is_numeric($n2) && is_numeric($n3)
                        && is_numeric($n4) && $n1 >=0 && $n2 >= 0 && $n3 >=
                        0 && $n4 >= 0) {
                        

                        $media = ($n1 + $n2 + $n3 + $n4) / 4;
                        if($media >= 7){
                            echo "Média: $media .Aluno aprovado!";
                        }
                        else{
                            echo " Media: $media .Aluno reprovado não conseguiu atingir a média";
                        }
                    
                    }
                        
                    
                    
                        
                }

            ?>
        <div class="text-reght-90">
            <a href ="/Exercicio/Projeto/Sexto.php">
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