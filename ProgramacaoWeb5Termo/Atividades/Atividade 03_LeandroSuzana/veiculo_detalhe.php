<?php

if (isset($_GET['id'])) {
    require "connection.php";
    require "classes/Veiculo.php";

    $id = $_GET['id'];
    $lida = true;

    $sql = "SELECT * FROM veiculo WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':id' => $id]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Veiculo');
    $veiculo = $stmt->fetch();
} else {
    header("location: veiculo_estoque.php");
    exit;
}
require_once "header.php";
?>

<div class="card m-3" style="width: 100%;">
    <img src="images/<?= $veiculo->getFoto(); ?>" class="card-img-top rounded mx-auto d-block w-50" alt="<?= $veiculo->getModelo(); ?>">
    <div class="card-body">
        <h5 class="card-title">
            <?=
            $veiculo->getModelo();
            ?>
        </h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Cor:</b> <?= $veiculo->getCor(); ?> </li>
            <li class="list-group-item"><b>Ano Fabricação: </b> <?= $veiculo->getAnoFabric(); ?> </li>
            <li class="list-group-item"><b>Ano Modelo:</b> <?= $veiculo->getAnoModelo(); ?></li>
            <li class="list-group-item"><b>Preço: R$ </b> <?= $veiculo->getPreco(); ?> </li>
            <li class="list-group-item"><b>Combustível: </b> <?= $veiculo->getCombustivel(); ?> </li>
            <li class="list-group-item"><b>Detalhes:</b> <?= $veiculo->getDetalhes(); ?> </li>
        </ul>
        <a href="veiculo_estoque.php" class="btn btn-primary">Voltar</a>
    </div>
</div>