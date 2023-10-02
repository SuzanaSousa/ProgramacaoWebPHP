<?php require_once "header.php";

require "connection.php";
require "classes/Veiculo.php";

$sql = "SELECT * FROM veiculo ORDER BY marca,modelo";
$stmt = $conn->query($sql);
$veiculos = $stmt->fetchAll(PDO::FETCH_CLASS, "Veiculo");

require_once "header.php";

?>

<div class="p-4 mb-4 bg-light">
    <h1 class="display-5">Showroom </h1>
    <hr class="my-3">
    <p class="lead">Escolha sua!</p>
</div>

<div class="card-group">
    <p></p>
    <?php foreach ($veiculos as $veiculo) { ?>
        <div class="card" style="width: 18rem;">
            <img src="images/<?= $veiculo->getFoto(); ?>" class="card-img-top w-50 h-50 mx-auto" alt="<?= $veiculo->getModelo(); ?>">
            <div class="card-body">
                <h5 class="card-title">
                    <?=
                    $veiculo->getModelo();
                    ?>
                </h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cor: <?= $veiculo->getCor(); ?> </li>
                    <li class="list-group-item">Ano Fabricação: <?= $veiculo->getAnoFabric(); ?> </li>
                    <li class="list-group-item">Ano Modelo: <?= $veiculo->getAnoModelo(); ?></li>
                    <li class="list-group-item">Preço: R$ <?= $veiculo->getPreco(); ?> </li>
                </ul>
                <a href="veiculo_detalhe.php?id=<?= $veiculo->getId(); ?>" class="btn btn-primary">Detalhes</a>
            </div>
        </div>
    <?php } ?>
</div>

<?php require_once "footer.php"; ?>