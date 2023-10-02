<?php
$marca = "";
$modelo = "";
$cor = "";
$ano_fabric = 0;
$ano_modelo = 0;
$combustivel = "";
$preco = 0.00;
$detalhes = "";
$foto = "";
$flag_msg = null;
$msg = "";

date_default_timezone_set("America/Sao_Paulo");

if (isset($_POST["enviar"])) {
  try {
    require("connection.php");

    $marca = $_POST["marcaVeiculo"];
    $modelo = $_POST["modeloVeiculo"];
    $cor = $_POST["corVeiculo"];    
    $ano_fabric = $_POST["ano_fabricVeiculo"];
    $ano_modelo = $_POST["ano_modeloVeiculo"];
    $combustivel = $_POST["combustivelVeiculo"];
    $preco = $_POST["precoVeiculo"];    
    $detalhes = $_POST["detalhesVeiculo"];
    $foto = $_POST["fotoVeiculo"];
    
    if (empty($_POST["marcaVeiculo"]) || empty($_POST["modeloVeiculo"]) || empty($_POST["corVeiculo"]) || empty($_POST["ano_fabricVeiculo"]) || empty($_POST["ano_modeloVeiculo"]) || empty($_POST["combustivelVeiculo"]) || empty($_POST["precoVeiculo"]) ){
      $flag_msg = false; //Erro 
      $msg = "Dados incompletos, preencha o formulário corretamente!";
    } else {
      $stmt = $conn->prepare("INSERT INTO veiculo (marca, modelo, cor, ano_fabricacao, ano_modelo, combustivel, preco, detalhes, foto) VALUES (:marca, :modelo, :cor, :ano_fabricacao, :ano_modelo, :combustivel, :preco, :detalhes, :foto)");
                                    
      $stmt->bindParam(':marca', $marca);
      $stmt->bindParam(':modelo', $modelo);      
      $stmt->bindParam(':cor', $cor);
      $stmt->bindParam(':ano_fabricacao', $ano_fabric);
      $stmt->bindParam(':ano_modelo', $ano_modelo);
      $stmt->bindParam(':combustivel', $combustivel);
      $stmt->bindParam(':preco', $preco);
      $stmt->bindParam(':detalhes', $detalhes);  
      $stmt->bindParam(':foto', $foto);      

      $stmt->execute();

      $flag_msg = true; // Sucesso 
      $msg = "Dados enviados com sucesso!";
      $marca = "";
      $modelo = "";
      $cor = "";
      $ano_fabric = 0;
      $ano_modelo = 0;
      $combustivel = "";
      $preco = 0.00;
      $detalhes = "";
      $foto = "";
      
    }
  } catch(PDOException $e) {
    $flag_msg = false; //Erro 
    $msg = "Erro na conexão com o Banco de dados: " . $e->getMessage();
  }
  
  $conn = null;
}
require_once "header.php";
?>
<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Veículos</h1>
  <hr class="my-3">
  <p class="lead">Inclusão de Veículos.</p>
</div>

<div class="container">
  <?php 
    if (!is_null($flag_msg)) {
      if ($flag_msg) {
        echo "<div class='alert alert-success' role='alert'>$msg</div>"; 
      }else{
        echo "<div class='alert alert-warning' role='alert'>$msg</div>"; 
      }
    }
  ?>
  <form method="POST">
    <div class="input-group mb-3">
      <span for="marcaVeiculo" class="input-group-text">Marca:</span>
      <input type="text" class="form-control" id="marcaVeiculo" name="marcaVeiculo" value="<?= $marca; ?>" required>
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text" for="modeloVeiculo">Modelo:</span>
      <input type="text" class="form-control" id="modeloVeiculo" name="modeloVeiculo" value="<?= $modelo; ?>">
    </div>
       
    <div class="input-group mb-3">
      <span class="input-group-text" for="corVeiculo">Cor:</span>
      <input type="text" class="form-control" id="corVeiculo" name="corVeiculo" value="<?= $cor; ?>">
    </div>
     
    <div class="input-group mb-3">
      <label for="ano_fabricVeiculo" class="input-group-text">Ano de Fabricação:</label>
      <input type="number" class="form-control" id="ano_fabricVeiculo" name="ano_fabricVeiculo" value="<?= $ano_fabric; ?>">
    </div>

    <div class="input-group mb-3">
      <label for="ano_modeloVeiculo" class="input-group-text">Ano do Modelo:</label>
      <input type="number" class="form-control" id="ano_modeloVeiculo" name="ano_modeloVeiculo" value="<?= $ano_modelo; ?>">
    </div>

    <div class="input-group mb-3">
      <label for="combustivelVeiculo" class="input-group-text">Combustível:</label>
      <input type="text" class="form-control" id="combustivelVeiculo" name="combustivelVeiculo" value="<?= $combustivel; ?>">
    </div>    

    <div class="input-group mb-3">
      <label for="precoVeiculo" class="input-group-text">Preço:</label>
      <input type="number" class="form-control" id="precoVeiculo" name="precoVeiculo" value="<?= $preco; ?>">
      <span class="input-group-text">.00</span>
    </div>

    <div class="input-group mb-3">
      <label for="detalhesVeiculo" class="input-group-text">Detalhes:</label>
      <input type="text" class="form-control" id="detalhesVeiculo" name="detalhesVeiculo" value="<?= $detalhes; ?>">
    </div>
    
    <div class="input-group mb-3">
      <label for="fotoVeiculo" class="input-group-text">Foto:</label>
      <input type="file" class="form-control" id="fotoVeiculo" name="fotoVeiculo" value="<?= $foto; ?>">
    </div>

    <br />
    
    <button type="submit" class="btn btn-outline-primary mb-2" name="enviar">Enviar</button>
    <a href="veiculo_insert.php"><button type="reset" class="btn btn-outline-primary mb-2" name="limpar">Limpar</button></a>
  </form>
</div>

<?php require_once "footer.php"; ?>