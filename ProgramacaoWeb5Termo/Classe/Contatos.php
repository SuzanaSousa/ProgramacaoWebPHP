
<?php
$nome = "";
$email = "";
$datanasc = "";

if (isset($_POST['enviar'])){

  require_once("connection.php");

  $nome  = $_POST["nomeContato"];
  $email  = $_POST["emailContato"];
  $datanasc  = $_POST["datanascContato"];

  $smtp = $conn->prepare("INSERT INTO contatos(nome, email,datanasc) 
              Values(:nome, :email, :datanasc)");
  $stmt->bindParam(':nome',$nome);
  $stmt->bindParam(':email',$email);
  $stmt->bindParam(':datanasc',$datanasc);

   $stmt->execute();
   $conn = null;
}
require_once "header_inc.php";
?>
<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Contatos</h1>
  <hr class="my-3">
  <p class="lead">Nossa equipe está sempre a disposição para ouvir as suas críticas e sugestões. Entre em contato que iremos responder o mais breve possível.</p>
</div>


  <form method="POST">
    <div class="form-group">
      <label for="nomeContato">Nome:</label>
      <input type="text" class="form-control" id="nomeContato" name="nomeContato" value="<?= $nome; ?>" required>
    </div>
    <br />
    <div class="form-group">
      <label for="emailContato">Email:</label>
      <input type="email" class="form-control" id="emailContato" name="emailContato" value="<?= $email; ?>">
    </div>
    <br />
    <div class="form-group">
      <label for="tipoContato">Tipo de contato:</label>
      <select class="form-control" id="tipoContato" name="tipoContato">
        <option value="Sugestão" <?php if ($tipo=="Sugestão") echo "selected"; ?>>Sugestão</option>
        <option value="Crítica" <?php if ($tipo=="Crítica") echo "selected"; ?>>Crítica</option>
        <option value="Elogio" <?php if ($tipo=="Elogio") echo "selected"; ?>>Elogio</option>
        <option value="Dúvida" <?php if ($tipo=="Dúvida") echo "selected"; ?>>Dúvida</option>
      </select>
    </div>
    <br />
    <div class="form-group">
      <label for="mensagemContato">Mensagem:</label>
      <textarea class="form-control" id="mensagemContato" name="mensagemContato" rows="3" required><?= $mensagem; ?>
    </div>