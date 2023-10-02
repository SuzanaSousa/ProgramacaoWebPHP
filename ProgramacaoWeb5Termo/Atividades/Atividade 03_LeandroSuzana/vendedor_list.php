<?php require_once "header.php";

require "connection.php";
require "classes/Vendedor.php";

$sql = "SELECT * FROM vendedor";
$stmt = $conn->query($sql);
$vendedores = $stmt->fetchAll(PDO::FETCH_CLASS, "Vendedor");

require_once "header.php";

?>

<div class="p-4 mb-4 bg-light">
    <h1 class="display-5">Gerenciamento de Vendedores</h1>
    <hr class="my-3">
    <p class="lead">Permite a inclusão, edição e exclusão dos vendedores.</p>
</div>

<div class="container">
    <a class="btn btn-success" href="vendedor_insert.php">Cadastrar Novo Vendedor</a>
    <p></p>
    <table class="table table-hover">
        <tr class="table-dark text-center">
            <th>#</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ação</th>
        </tr>
        <?php foreach ($vendedores as $vendedor) { ?>
            <tr class="text-center">
                <td class="table-light" style="width:5%"><?= $vendedor->getId(); ?></td>
                <td class="table-light" style="width:20%"><?= $vendedor->getNome(); ?></td>
                <td class="table-light" style="width:20%"><?= $vendedor->getEmail(); ?></td>
                <td class="table-light" style="width:15%"><?= $vendedor->getTelefone(); ?></td>

                <td class="table-light" style="width:30%">
                    <a href="vendedor_update.php?id=<?= $vendedor->getId(); ?>"><button type="button" class="btn btn-warning">Editar</button></a>
                    <a href="vendedor_destroy.php?id=<?= $vendedor->getId(); ?>"><button type="button" class="btn btn-danger">Excluir</button></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php require_once "footer.php"; ?>