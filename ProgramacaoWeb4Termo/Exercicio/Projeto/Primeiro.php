<?php

$flag_msg = null;
$msg = "";

if (isset($_GET['enviar'])) {
  
  $v1 = $_GET["v1"];
  $v2 = $_GET["v2"];

  if (!empty($v1) && !empty($v2) && 
      is_numeric($v1) && is_numeric($v2) &&
      $v1 >=0 && $v2 >= 0) {
  
    $Troco = ($v2- $v1);

    $flag_msg = true; // Sucesso 
    $msg = "Cálculo efetuado com sucesso:<br />V1 = "; 
    $msg .= number_format($v1,2);
    $msg .= "<br />V2 = "; 
    $msg .= number_format($v2,2); 
    $msg .= "<br />Troco: ";
    $msg .= number_format($Troco,2);
  }else{  
    $flag_msg = false; //Erro 
    $msg = "Dados incorretos, preencha o formulário corretamente!";
  }
}
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
          <h1 class="display-5">Cálculo de Troco</h1>
          <hr class="my-3">
          <p class="lead">Calcular troco a ser retornado.</p>
    </div>

  <div class="container">
      <form method="GET">
        <div class="form-group col-md-2">
          <label for="p1">V1:</label>
          <input type="text" class="form-control" id="v1" name="v1" required>
        </div>
        <br />
        <div class="form-group col-md-2">
          <label for="v2">V2:</label>
          <input type="text" class="form-control" id="v2" name="v2" required>
        </div>
          <br/>
           <button type="submit" class="btn-warning" name="enviar">Resultado</button>
          <br/>
          <br/>
      </form>
      <?php 
        if (!is_null($flag_msg)) {
          if ($flag_msg) {
            echo "<div class='alert alert-success' role='alert'>$msg</div>"; 
          }else{
            echo "<div class='alert alert-warning' role='alert'>$msg</div>"; 
          }
        }
      ?>


 

      <div class="text-reght-90">
        <a href ="/Exercicio/Projeto/Segundo.php">
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