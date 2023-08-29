<?php

$flag_msg = null;
$msg = "";



if (isset($_GET['enviar'])) {
  
    $valor = $_GET["valor"];
    

    if (!empty($valor) &&  
        is_numeric($valor)  &&
        $valor < 0 ) {
    
       
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
      <a href ="/Exercicio/Projeto/menu.php">
        <button type="button" class="btn btn-warning">Voltar menu Principal</button>
      </a>
     
      <div class="p-4 mb-4 bg-secondary">
        <h1 class="display-5">Efetuado análise se o valor e maior ou menor que 10.</h1>
        <hr class="my-3">
        <p class="lead">Verificar se o valor digitado é maior ou menor que 10.</p>
      </div>

    <div class="container">
        <form method="GET">
          <div class="form-group col-md-2">
            <label for="vq">valor:</label>
            <input type="text" class="form-control" id="valor" name="valor" required>
          </div>
          <br/>
          <br/>
            <button type="submit" class="btn-warning" name="enviar">Resultado</button>
          <br/>
          <br/>
        </form>
        <?php
          if(isset($_GET['enviar'])) {
              
                  
            $valor = $_GET["valor"];
    
            if ($valor > 10){
              echo "O valor maior que 10";
            }
            else{
              echo "O valor menor que 10";
            }
          
          }   
        ?>   
      </div>
      
      <div class="text-reght-90">
        <a href ="/Exercicio/Projeto/Quarto.php">
          <button type="button" class="btn-warning">Proximo</button>
        </a>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.
    bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwx
    hTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>