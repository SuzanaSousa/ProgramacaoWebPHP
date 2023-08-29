<?php
require_once("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $coluna1 = $_POST["coluna1"];
    $coluna2 = $_POST["coluna2"];
    $coluna3 = $_POST["coluna3"];

    // Consulta SQL para inserir o novo registro
    $sql = "INSERT INTO sua_tabela (coluna1, coluna2, coluna3) VALUES ('$coluna1', '$coluna2', '$coluna3')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso.";
    } else {
        echo "Erro ao inserir o registro: " . $conn->error;
    }
}

$conn->close();
?>