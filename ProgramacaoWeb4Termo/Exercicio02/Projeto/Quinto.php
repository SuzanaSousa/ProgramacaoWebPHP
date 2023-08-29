<?php

$flag_msg = null;
$msg = "";
if (isset($_GET['enviar'])) {
  
  $array = array();
  

  if (!empty($array) && is_numeric($array)&&
      is_numeric($array)  &&
      $array >=0 ) {
  
     
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
      <h1 class="display-5"> Criar um array com 50 números inteiros, exibi-lo em ordem crescente
         e exibir a quantidade de números pares e de números primos.</h1>
                
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

            $nums = array();
            for ($i = 0; $i < 50; $i++) {
                $nums[$i] = rand(1, 100);
            }
            sort($nums); // Ordenar em ordem crescente;
            $count_pares = 0;
            $count_primos = 0;
            echo "Array ordenado em ordem crecente: ";
            foreach($nums as $num){
              if($num % 2 == 0){
                $count_pares++;
              }
              if(gmp($num) > 0){
                $count_primos++;
              }
              echo "<br />";
              echo $num;
              echo "<br />";
            /* }
              $count_pares = 0;
              $count_primos = 0;
    
            foreach ($array as $array) {
    
              if ($array % 2 == 0) {
              $count_pares++;
                
              }
              else{
              $count_primos++;
              }

            }
            function is_prime($num){
              if($num <= 1){
            return false;
              }
            }
            for($i = 2; $i <= sqrt($num); $i++){
              if($num % $i == 0){
           
              }
            }
                     */
        
          echo implode(",",$nums)."<br>";
          echo "\nQuantidade de numeros primos:". $count_primos."<br/>" ;
          echo "\nQuantidade de numeros pares:". $count_pares. "<br/>";

       
        }
                      
                
      }     
        
           
            
        
        ?>   
      </div>
      
      <div class="sticky-top">
        <a href ="/Exercicio02/Projeto/Sexto.php">
          <button type="button" class="btn-warning">Proximo</button>
        </a>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.
    bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwx
    hTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>