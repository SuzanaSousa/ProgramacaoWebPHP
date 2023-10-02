
<?php 

require "connection.php";
require "classes/Curso.php";

$sql = "SELECT * FROM cursos ORDER BY id";
$stmt = $conn->query($sql);
$cursos = $stmt->fetchAll(PDO::FETCH_CLASS, "Curso");

require_once "header_inc.php"; 
?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Cursos</h1>
  <hr class="my-3">
  <div class="container">
        <h1 class="display-5">Lista de Cursos</h1>
        <table class="table table-bordered">
            <tr class="table-success text-center">
                <th>Nome</th>
                <th>Imagem</th>
                <th>Descrição</th>
            </tr>
            <?php foreach ($cursos as $curso) { ?>
                <tr class="text-center">
                    <td class="table-light"><?= $curso->getNome(); ?></td>
                    <td class="table-light"><img src="<?= $curso->getImagem(); ?>" alt="Imagem do Curso"></td>
                    <td class="table-light"><?= $curso->getDescricao(); ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<?php require_once "footer_inc.php"; ?>