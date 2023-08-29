<?php

$flag_msg = null;
$msg = "";



if (isset($_GET['enviar'])) {
  
    $Frase = $_GET["Frase"];
    $Buscar = $_GET["Buscar"];
    

    if (!empty($Frase) && !empty($Buscar)&&
        is_string($Frase)  && is_string($Buscar) &&
        $Frase >=0  && $Buscar >=0 ) {
    
       
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Segunda Atividade</title>
    </head>
    <body class="bg-secondary">
    
            <a href ="/Exercicio/Projeto/menu.php">
                <button type="button" class="btn btn-warning">Voltar menu Principal</button>
            </a>
            <div class="p-4 mb-4 bg-secondary">
                <h1 class="display-5">Crie um programa que a partir de um texto e uma palavra,
                    fornecidos pelo usuário, realize uma busca no texto e exiba a posição inicial
                    e final da palavra no texto. Exiba também a quantidade de letras e palavras 
                    contidas no texto. Por fim, crie um array para armazenar as letras que aparecem
                    no texto e a quantidade de vezes que cada uma aparece</h1>
               
            </div>

        <div class="container">
            <form method="GET">
                <div class="form-group col-md-2">
                <label for="f">Frase:</label>
                <input type="text" class="form-control" id="f" name="f" required>
                </div>
                <br/>
                <div class="form-group col-md-2">
                <label for="f">Buscar:</label>
                <input type="text" class="form-control" id="f" name="f" required>
                </div>
                <br/>
                <button type="submit" class="btn-warning" name="enviar">Resultado</button>
                <br/>
                <br/> 
            
            </form>
            <?php
              if (isset($_GET['enviar'])) {
                    // Texto fornecido pelo usuário
                        $frase = "";

                        // Palavra fornecida pelo usuário

                        
                        $Buscar = "";

                        // Busca pela posição inicial e final da palavra no texto

                        
                        $posicao_inicial = strpos($frase, $Buscar);
                        $posicao_final = $posicao_inicial + strlen($Buscar) - 1;
                        
                        // Exibição das posições iniciais e finais da palavra no texto
                        echo "Posição Inicial: " . $posicao_inicial . "<br>";
                        echo "Posição Final: " . $posicao_final . "<br>";
                        
                        // Quantidade de letras e palavras contidas no texto
                        $quantidade_letras = strlen($Frase);
                        $quantidade_palavras = str_word_count($Frase);
                        
                        // Exibição da quantidade de letras e palavras contidas no texto
                        echo "Quantidade de Letras: " . $quantidade_letras . "<br>";
                        echo "Quantidade de Palavras: " . $quantidade_palavras . "<br>";
                        
                        // Criação do array para armazenar as letras que aparecem no texto e a quantidade de vezes que cada uma aparece
                        
                        $Buscar = array();
                        
                        // Loop para percorrer todas as letras do texto
                    for ($i = 0; $i < $quantidade_letras; $i++) {
                            
                    $Buscar = $Frase[$i];
                            
                            
                            
                            
                        
                            
                        // Se a letra já foi contabilizada no array, incrementa o contador
                            
                            
                        if (isset($Buscar[$Buscar])) {
                
                            $Buscar[$Buscar]++;
                        }
                            
                        
                            
                        // Se a letra ainda não foi contabilizada no array, adiciona com valor 1
                            
                            
                        if{
                            $Buscar[$Buscar] = 1;
                        }
                        
                        
                        
                            
                        // Exibição do array com as letras e suas respectivas quantidades
                        foreach ($Buscar as $Buscar => $quantidade) {
                            
                            
                        echo "Letra " . $Buscar . " aparece " . $quantidade . " vezes.<br>";
                        }
                    }
                }
            ?>
        <div class="text-reght-90">
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