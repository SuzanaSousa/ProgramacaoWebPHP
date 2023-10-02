<?php 
$nome="";
$descri = "";
$url = "";
$sql ="";
if (isset($_POST['enviar'])) {

   /*  require_once "connection.php"; */

    try{
        require("connection.php");
       
        $nome = $_POST["nome"];
        $descri = $_POST["descricao"];
        $url = $_POST["url"];
       
       
        if(!empty($nome) && !empty($descri)  && !empty($url)){
                 
            $sql = "INSERT INTO  cursos (nome,descricao,imagem) VALUES (:nome,:descricao,:imagem) ";
          
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $descri, PDO::PARAM_STR);
            $stmt->bindParam(':imagem', $url, PDO::PARAM_STR);
            $stmt->execute();
        
         
         header("Location:curso-list.php");
        
        }else{
            
          echo "erro!!!";
        }
    
      }catch(Exception $e){
        echo "erro ".$e;
      }
    
 


}

/* 
 try{
    require("connection.php");
    $dataCadastro = $_POST["dataCadastro"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $imagem = $_POST["imagem"];
   
    $imagem = $_POST["imagem"];
    require_once "connection.php";
    if(!empty($dataCadastro) == ""  && !empty($nome ) == "" && !empty($desricao) ==""  && !empty($imagem)){
  
    
     
     
    
    }else{
      echo "erro";
    }

  }catch(Exception $e){

  }

*/
require_once "header_inc.php";
?>
<form method="POST">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="url">Url da Imagem:</label>
      <input type="text" class="form-control" id="url" name="url" value="<?= $url; ?>">
    </div>
    <br />
   
    <br />
    <div class="form-group">
      <label for="descricao">Descrição:</label>
      <textarea class="form-control" id="descricao" name="descricao" rows="3" required><?=$descri?></textarea>
    </div>
    <br />
    <button type="submit" class="btn btn-primary mb-2" name="enviar">Salvar</button>
    <a href="contatos.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
  </div>
</form>

<?php 
require "footer_inc.php";
?>