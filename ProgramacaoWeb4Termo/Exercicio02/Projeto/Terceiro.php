<?php

$flag_msg = null;
$msg = "";
if (isset($_GET['enviar'])) {
  
  $n1 = 1;
  $n2 = 0;
  

  if (!empty($n1) &&  (!empty($n2) && 
      is_numeric($n1) && is_numeric($n2) &&
      $n1 >=0 && $n2 )) {
  
     
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
          <h1 class="display-5">Escreva um programa que apresente a série de Fibonacci até o 
            vigésimo quinto termo </h1>
                
      </div>
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
        
                $n1 = 1;
                $n2 = 0;
                 
                echo $n1;
                echo $n2;
                
                
            
                for ($i = 0; $i <= 25; $i++){
                    $n1 = $n1 + $n2;
                    $n2 = $n1 - $n2;
                
                 echo $n1 ."\t"."<br>" ;
                 
                }
               
                
                
                
            }
        
        ?>   
      </div>
      
      <div class="sticky-top">
        <a href ="/Exercicio02/Projeto/Quarto.php">
          <button type="button" class="btn-warning">Proximo</button>
        </a>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.
    bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwx
    hTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>