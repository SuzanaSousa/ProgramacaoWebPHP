<?php

$flag_msg = null;
$msg = "";
if (isset($_GET['enviar'])) {
  
  $nums = array();
  

  if (!empty($nums) &&  
      is_numeric($nums)  &&
      $nums >=0 ) {
  
     
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
          <h1 class="display-5">Criar um array com um número x de número inteiros (fornecido 
            pelo usuário), exibir a soma dos elementos do array, a média dos elementos, o menor
             e o maior elemento e a suas respectivas posições do array </h1>
                
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
                echo "Digite o tamanho do array: ";

                $array = 50;
                $nums = array();
                for ($i = 0; $i < $array; $i++) {
                  echo "Digite o elemento $i: ";
                                  }
                $soma = array_sum($nums);
                $media = $soma / $array;
                $min = min($nums);
                $max = max($nums);
                $pos_min = array_search($min, $nums);
                
                $
                $pos_max = array_search($max, $nums);
                echo "Soma dos elementos: $soma<br>";
                echo "Média dos elementos: $media<br>";
                echo "Menor elemento: $min (posição $pos_min)<br>";
                echo "Maior elemento: $max (posição $pos_max)<br>";
               
            
                
                
            }
        
        ?>   
      </div>
      
      <div class="sticky-top">
        <a href ="/Exercicio02/Projeto/Setimo.php">
          <button type="button" class="btn-warning">Proximo</button>
        </a>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.
    bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwx
    hTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>