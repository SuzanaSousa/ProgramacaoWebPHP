<?php
$nome = "";
$email = "";
$telefone = "";
$flag_msg = null;
$msg = "";

date_default_timezone_set("America/Sao_Paulo");

if (isset($_POST["enviar"])) {
    try {
        require("connection.php");

        $nome = $_POST["nomeVendedor"];
        $email = $_POST["emailVendedor"];
        $telefone = $_POST["telefoneVendedor"];


        if (empty($_POST["nomeVendedor"]) || empty($_POST["emailVendedor"]) || empty($_POST["telefoneVendedor"])) {
            $flag_msg = false; //Erro 
            $msg = "Dados incompletos, preencha o formulário corretamente!";
        } else {
            $stmt = $conn->prepare("INSERT INTO vendedor (nome, email, telefone) VALUES (:nome, :email, :telefone)");

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telefone', $telefone);

            $stmt->execute();

            $flag_msg = true; // Sucesso 
            $msg = "Dados enviados com sucesso!";
            $nome = "";
            $email = "";
            $telefone = "";
        }
    } catch (PDOException $e) {
        $flag_msg = false; //Erro 
        $msg = "Erro na conexão com o Banco de dados: " . $e->getMessage();
    }

    $conn = null;
}
require_once "header.php";
?>
<div class="p-4 mb-4 bg-light">
    <h1 class="display-5">Vendedores</h1>
    <hr class="my-3">
    <p class="lead">Inclusão de Vendedores.</p>
</div>

<div class="container">
    <?php
    if (!is_null($flag_msg)) {
        if ($flag_msg) {
            echo "<div class='alert alert-success' role='alert'>$msg</div>";
        } else {
            echo "<div class='alert alert-warning' role='alert'>$msg</div>";
        }
    }
    ?>
    <form method="POST">
        <div class="input-group mb-3">
            <span for="nomeVendedor" class="input-group-text">Nome:</span>
            <input type="text" class="form-control" id="nomeVendedor" name="nomeVendedor" value="<?= $nome; ?>" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" for="emailVendedor">E-mail:</span>
            <input type="text" class="form-control" id="emailVendedor" name="emailVendedor" value="<?= $email; ?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" for="telefoneVendedor">Telefone:</span>
            <input type="text" class="form-control" id="telefoneVendedor" name="telefoneVendedor" value="<?= $telefone; ?>">
        </div>

        <br />

        <button type="submit" class="btn btn-outline-primary mb-2" name="enviar">Enviar</button>
        <a href="veiculo_insert.php"><button type="reset" class="btn btn-outline-primary mb-2" name="limpar">Limpar</button></a>
    </form>
</div>

<?php require_once "footer.php"; ?>