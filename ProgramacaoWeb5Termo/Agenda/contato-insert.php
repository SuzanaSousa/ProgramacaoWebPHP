<?php 
if (isset($_GET['id'])) {

    require_once "connection.php";

    $id = $_GET['id'];
    $sql = "INSERT INTO  contato (id, nome, email,) VALUES ('$coluna1', '$coluna2', '$coluna3') ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();


    header("Location: contato-list.php");
    exit;

}