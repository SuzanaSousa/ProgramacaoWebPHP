<?php require_once "header.php";

require "connection.php";
require "classes/Vendedor.php";

$sql = "SELECT * FROM vendedor";
$stmt = $conn->query($sql);
$vendedores = $stmt->fetchAll(PDO::FETCH_CLASS, "Vendedor");


?>

<div class="b-example-divider"></div>

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="images/fachada.jpg" class="rounded d-block mx-lg-auto img-fluid" alt="Tarefas" loading="lazy" width="300" height="300">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5">Bem-vindo à XLS Moto Shop!</h1>
      <hr class="my-3">
      <p class="lead">Procurando pela moto dos seus sonhos? Você está no lugar certo!</p>
    </div>
  </div>
</div>

<div class="p-2 mb-2 text-success-emphasis bg-success-subtle border border-success-subtle rounded-3">
  <h2 class="display-6 text-center">Fale com um de nossos vendedores!</h2>
</div>

<div class="container">
  <p></p>
  <table class="table table-responsive table-sm table-striped">
    <tr class="table-light text-center">
      <th>Nome</th>
      <th>E-mail</th>
      <th>Telefone</th>
    </tr>
    <?php foreach ($vendedores as $vendedor) { ?>
      <tr class="text-center">
        <td class="table-light" style="width:20%"><?= $vendedor->getNome(); ?></td>
        <td class="table-light" style="width:20%"><?= $vendedor->getEmail(); ?></td>
        <td class="table-light" style="width:20%"><?= $vendedor->getTelefone(); ?></td>

      </tr>
    <?php } ?>
  </table>
</div>

<?php require_once "footer.php"; ?>