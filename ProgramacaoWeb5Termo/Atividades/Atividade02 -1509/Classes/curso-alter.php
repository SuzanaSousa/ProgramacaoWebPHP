<?php 
$nome = "";
$descri = "";
$url = "";
$error = "";

// Verificar se um ID de curso foi fornecido via parâmetro GET
if (isset($_GET['id'])) {
    $curso_id = $_GET['id'];

    // Consultar o banco de dados para obter os detalhes do curso com o ID fornecido
    require("connection.php");
    $sql = "SELECT * FROM cursos WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $curso_id, PDO::PARAM_INT);
    $stmt->execute();
    $curso = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($curso) {
        // Preencher os campos do formulário com os dados do curso
        $nome = $curso["nome"];
        $descri = $curso["descricao"];
        $url = $curso["imagem"];
    } else {
        // Curso não encontrado, redirecionar para uma página de erro ou lista de cursos
        header("Location: curso-list.php");
        
        exit;
    }
}

if (isset($_POST['enviar'])) {
    try {
        require_once "connection.php";

        $nome = $_POST["nome"];
        $descri = $_POST["descricao"];
        $url = $_POST["url"];

        if (!empty($nome) && !empty($descri) && !empty($url)) {
            $sql = "UPDATE cursos SET nome = :nome, descricao = :descricao, imagem = :imagem WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $curso_id, PDO::PARAM_INT);
            $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $descri, PDO::PARAM_STR);
            $stmt->bindParam(':imagem', $url, PDO::PARAM_STR);

            if ($stmt->execute()) {
                header("Location: curso-list.php");
                exit;
            } else {
                $error = "Erro ao atualizar o curso no banco de dados.";
            }
        } else {
            $error = "Por favor, preencha todos os campos.";
        }
    } catch (Exception $e) {
        $error = "Erro: " . $e->getMessage();
    }
}

require_once "header_inc.php";
?>

<div class="container">
    <h1 class="display-5">Editar Curso</h1>
    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger"><?= $error; ?></div>
    <?php } ?>
    <form method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome; ?>" required>
        </div>
        <div class="form-group">
            <label for="url">URL da Imagem:</label>
            <input type="text" class="form-control" id="url" name="url" value="<?= $url; ?>">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required><?= $descri; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="enviar">Salvar</button>
        <a href="curso-list.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once "footer_inc.php"; ?>