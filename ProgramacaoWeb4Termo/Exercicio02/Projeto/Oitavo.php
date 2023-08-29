<?php

$flag_msg = null;
$msg = "";
if (isset($_GET['enviar'])) {
  
  $jogos = [array];
  
  

  if (!empty($jogos) &&  
      is_numeric($jogos)  &&
      $jogos >=0 ) {
  
     
   }
}
?>




<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primeira Atividade PHP</title>
    
  </head>

       
  <body class="bg-secondary">
      <a href ="/Exercicio02/Projeto/menu.php">
        <button type="button" class="btn btn-warning">Voltar menu Principal</button>
      </a>
      <h1 class="display-5">Crie um programa que armazene em um array 10 jogos da megasena,
      com 6 números  inteiros cada (de 1 a 60) e em seguida crie um método que sorteie 6
      dezenas e exiba a quantidade de acertos de cada jogo.</h1>
      <div class="p-4 mb-4 bg-secondary">
        <h1 class="display-5"></h1>
        <hr class="my-3">
        <p class="lead"></p>
      </div>

    <div class="container">
        <form method="GET">
          <div class="form-group col-md-2">
             <button type="submit" class="btn-warning" name="enviar">Resultado</button>
          <br/>
          <br/>
        </form>
        <?php
        if (isset($_GET['enviar'])) {
    
            $jogos = array(
                array(),array(),array(),array(),array(),
                array(),array(),array(),array(),array()
            );
              
            
            function sortearNumeros(){
                $numerosSorteados = array();

                while(count($numerosSorteados) < 6){
                    $numero = rand(1,60);


                    if(!in_array($numero,$numerosSorteados)){
                        $numerosSorteados[] = $numero;
                    }
                }
                return $numerosSorteados;
            }
            
            foreach($jogos as $jogo){

                $numerosSorteados = sortearNumeros();

           
                       $acertos = count(array_intersect($jogos, $numerosSorteados));

                        echo "jogo:".implode("," ,$jogo)."<br>";

                        echo "numeros sorteados:".implode(",",$numerosSorteados)."<br>";
                          echo "Acertos:".$acertos."<br>";
            }
            return $jogos;

              
        }
          
        
        ?>   
      </div>
      
      <div class="sticky-top">
        <a href ="/Exercicio02/Projeto/Segundo.php">
          <button type="button" class="btn-warning">Proximo</button>
        </a>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.
    bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwx
    hTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>