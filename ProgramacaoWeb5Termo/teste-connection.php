<?php 

require_once("connection.php");

$dados = $conn->query("SELECT * FROM  contatos");

try{

    $conn->beginTransaction();

    $conn->exec("INSERT INTO contatos(nome,email))
                    VALUES('Suzana','suzana@gmail.com'");

    $conn->exec("UPDATE  contatos SET email = 'Suzanasousa@gmail.com' 
                    FROM id=3");
    // se tudo ocorreu bem
    $conn->commit();

}catch(Exception $e){
    // se ocorreu erro
    $conn->rollBack();

    echo'erro. Message' .$e->getMessage();
}
               
?>