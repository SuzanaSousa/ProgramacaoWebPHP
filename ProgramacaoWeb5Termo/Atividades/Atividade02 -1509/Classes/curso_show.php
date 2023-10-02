<?php 

if (isset($_GET['id'])) {
    require "connection.php";
    require "classes/Curso.php";

    $id = $_GET['id'];
   
    $sql = "SELECT * from cursos WHERE id = :id"; // Adicione uma cláusula WHERE para filtrar por ID
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    
    // Verifique se o curso foi encontrado
    if ($stmt->rowCount() > 0) {
        $curso = $stmt->fetchObject("Curso");
    } else {
        header("location: curso-list.php");
        exit;
    }
} else {
    header("location: curso-list.php");
    exit;
}

require_once "header_inc.php"; 
?>

<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Gerenciamento de Cursos</h1>
</div>
<div>
<div class="container">
  <a class="btn btn-primary" href="curso-list.php">Voltar</a>
  <p></p>
  <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data Cadastro:</strong>
                <?= date('d/m/Y H:i:s', strtotime($curso->getDataCadastro())); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome: </strong>
                <?= $curso->getNome(); ?>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group" style="text-align: justify; word-wrap: break-word;font-size: 18px;">
                <strong class="descricao-titulo">Descrição:</strong><br>
                <?= $curso->getDescricao(); ?>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="text-align: center;"> <!-- Use CSS inline para centralizar o conteúdo -->
                <strong> </strong>
                <img src="<?= $curso->getImagem(); ?>" alt="Imagem do Curso" style="display: block; margin-left: 55%; margin-bottom: 2% ; margin-top: -15%"> <!-- Use CSS inline para definir a margem esquerda -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="text-align: center;"> <!-- Use CSS inline para centralizar o conteúdo -->
                <strong> </strong>
                <img src="<?= $curso->getAcao(); ?>" alt="Imagem do Curso" style="display: block; margin-left: 55%; margin-bottom: 2% ; margin-top: -15%"> <!-- Use CSS inline para definir a margem esquerda -->
            </div>
        </div>

    </div>
</div>


<?php require_once "footer_inc.php"; ?>