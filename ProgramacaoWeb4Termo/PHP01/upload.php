<?php require_once "header.php"; ?>

<div class="container">
    <br />
    <h1>Exercício 02</h1>
    <br />
    <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="formFile" class="form-label">Selecione a imagem para upload:</label>
                <input class="form-control" type="file" id="fileToUpload" name="fileToUpload">
            </div>       
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar imagem</button>
            </div>
    </form>
</div>

<?php require_once "footer.php"; ?>





<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if file already exists
if (file_exists($target_file)) {
    echo "O arquivo não existe!";
    die();
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 100000) {
    echo "Seu arquivo e muito grande!";
    die();
}

// Allow certains file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Apenas arquivo nos formatos JPG, JPEG, PNG e GIF são aceitos.";
    die();
}

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "O arquivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]) . " foi carregado com sucesso.");
} else {
    echo "Não foi possível carregar seu arquivo.";
}
?>