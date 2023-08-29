<?php

$flag_msg = null;
$msg = "";

if (isset($_GET['enviar'])) {
  
  $vq = $_GET["vq"];
  $q = $_GET["q"];

  if (!empty($vq) && !empty($q) && 
      is_numeric($vq) && is_numeric($q) &&
      $vq >=0 && $q >= 0) {
  
    $VF = ($vq * $q);

    $flag_msg = true; // Sucesso 
    $msg = "Cálculo efetuado com sucesso:<br/><br/>VQ = "; 
    $msg .= number_format($vq,2);
    $msg .= "<br/><br/>Q = "; 
    $msg .= number_format($q,2); 
    $msg .= "<br/><br/>ValorFinal: ";
    $msg .= number_format($VF,2);
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
          <h1 class="display-5">Cálculo de valor  do Produto</h1>
          <hr class="my-3">
          <p class="lead">Calcular valor final  da quantidade de um produto.</p>
    </div>

  <div class="container">
      <form method="GET">
        <div class="form-group col-md-2">
          <label for="vq">VQ:</label>
          <input type="text" class="form-control" id="vq" name="vq" required>
        </div>
        <br/>
        <br/>
        <div class="form-group col-md-2">
          <label for="v2">Q:</label>
          <input type="text" class="form-control" id="q" name="q" required>
        </div>
          <br/>
          <br/>
          <button type="submit" class="btn btn-primary mb-2" name="enviar">Resultado</button>
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
        <a href ="/Exercicio/Projeto/Terceiro.php">
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