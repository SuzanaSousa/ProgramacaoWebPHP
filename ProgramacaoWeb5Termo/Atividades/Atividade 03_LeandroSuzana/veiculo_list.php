<?php require_once "header.php"; 

require "connection.php";
require "classes/Veiculo.php";

$sql = "SELECT * FROM veiculo";
$stmt = $conn->query($sql);
$veiculos = $stmt->fetchAll(PDO::FETCH_CLASS, "Veiculo");

require_once "header.php"; 

?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Gerenciamento de Veículos</h1>
  <hr class="my-3">
  <p class="lead">Permite a inclusão, edição e exclusão dos veículos.</p>
</div>

<div class="container"> 
    <a class="btn btn-success" href="veiculo_insert.php">Cadastrar Novo veículo</a> 
  <p></p>
  <table class="table table-hover">
    <tr class="table-dark text-center">      
      <th>#</th>
      <th>Marca</th>      
      <th>Modelo</th>
      <th>Cor</th>
      <th>Ano Fabricação</th>
      <th>Ano Modelo</th>
      <th>Combustível</th>
      <th>Preço</th>
      <th>Foto</th>
      <th>Ação</th>
    </tr>
    <?php foreach ($veiculos as $veiculo) { ?>
    <tr class="text-center">    
      <td class="table-light" style="width:5%"><?= $veiculo->getId(); ?></td>      
      <td class="table-light" style="width:10%"><?= $veiculo->getMarca(); ?></td>      
      <td class="table-light" style="width:10%"><?= $veiculo->getModelo(); ?></td>
      <td class="table-light" style="width:12%"><?= $veiculo->getCor(); ?></td>
      <td class="table-light" style="width:5%"><?= $veiculo->getAnoFabric(); ?></td>
      <td class="table-light" style="width:5%"><?= $veiculo->getAnoModelo(); ?></td>
      <td class="table-light" style="width:12%"><?= $veiculo->getCombustivel(); ?></td>
      <td class="table-light" style="width:12%"><?= $veiculo->getPreco(); ?></td>
      <td class="table-light" style="width:12%"><?= $veiculo->getFoto(); ?></td>
      
      <td class="table-light" style="width:30%">        
        <a href="veiculo_update.php?id=<?= $veiculo->getId(); ?>"><button type="button" class="btn btn-warning">Editar</button></a>
        <a href="veiculo_destroy.php?id=<?= $veiculo->getId(); ?>"><button type="button" class="btn btn-danger">Excluir</button></a>        
      </td>
    </tr>
    <?php } ?>
  </table>
</div>

<?php require_once "footer.php"; ?>