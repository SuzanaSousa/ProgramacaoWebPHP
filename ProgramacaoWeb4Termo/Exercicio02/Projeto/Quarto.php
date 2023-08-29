<?php

$flag_msg = null;
$msg = "";
if (isset($_GET['enviar'])) {
  
  
  

  if (!empty($i) &&  !empty($j) && is_numeric($j)&&
      is_numeric($i)  &&
      $i >=0  && $j >=0 ) {
  
     
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
      <div class="p-4 mb-4 bg-secondary">
          <h1 class="display-5">Escreva um programa que exiba as tabuadas de 1 a 100 </h1>
                
      </div>
      <div class="p-4 mb-4 bg-secondary">
        <h1 class="display-5"></h1>
        <hr class="my-3">
        <p class="lead"></p>
      </div>

      <div class="sticky-top">
          <a href ="/Exercicio02/Projeto/Quinto.php">
            <button type="button" class="btn btn btn-warning">Proximo</button>
          </a>
      </div>
          <br/>
          <br/>
        </form>
        <?php
       
            

          for ($i = 0; $i <= 10; $i++) { //Loop primeiro elemento

            for ($contador = 0; $contador <= 10; $contador++){ //Loop para determinar em qual elemento está
              while ($i == $contador) {
                  echo "\n\nTabuada do número :$contador\n";
                  echo "<br>";

                  break;
              }
            }

              for ($num = 0; $num <= 10; $num ++){ //Loop para determinar o segundo elemento e realizar a multiplicação

                $calc = $i * $num;
                echo "<br>";
                echo $i ." X ". $num ." = ". $calc."\n" ;
                echo "<br>";
              }
              echo "<br />";
             
            }  
            
     
        
        ?>   
      </div>
      
     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.
    bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwx
    hTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>