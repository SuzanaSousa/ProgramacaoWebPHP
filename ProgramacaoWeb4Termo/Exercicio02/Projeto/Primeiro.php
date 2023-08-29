<?php

$flag_msg = null;
$msg = "";
if (isset($_GET['enviar'])) {

  if (!empty($num) &&  
      is_numeric($num)  &&
      $num >=0 ) {
  
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
         <h1 class="display-5">Apresentar os quadrados dos números inteiros de 15 a 200 </h1>
                
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
    
            $num = 15;
            while ($num <= 200) {
              echo( $num * $num )."<br />";
              echo "<br />";
              $num++;
              
                
            }
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