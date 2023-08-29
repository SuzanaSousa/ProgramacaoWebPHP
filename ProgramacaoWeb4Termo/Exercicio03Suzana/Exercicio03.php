<?php require_once "header.php"; ?>

<div class="container">
    <br />
    <h3 class= "text-center">Exercício 03</h3>
    <br />
        <a  href ="/Exercicio03Suzana/PaginaInicial.php">
            <button type="button text-end " class="btn btn-warning text-end">Voltar Munu Principal</button>
        </a>
        <form  class= "text-center" method="POST" action="adicionar_compromisso.php">
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" id="usuario">
            <br>
            <br>
            <label for="compromisso">Compromisso:</label>
            <input type="text" name="compromisso" id="compromisso">
            <br>
            <br>
            <label for="local">Local:</label>
            <input type="text" name="local" id="local">
            <br>
            <br>
            <label for="data">Data:</label>
            <input type="date" name="data" id="data">
            <br>	
            <br>
            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora">
            <br>
            <br>
            <input type="submit" value="Adicionar">
        </form>
    </div>
    <?php
         	
     /*    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
           $compromisso = []
                
            $usuario => $_POST['usuario']
                        
                    
            $compromisso => $_POST['compromisso'],
                        
                    
            $local => $_POST['local'],
                        
                    
            $data => $_POST['data'],
                        
                    
            'hora' => $_POST['hora']
                    
                
                
                

        
            $arquivo = 'compromissos.json';
            $json = file_get_contents($arquivo);
            $compromissos = json_decode($json, true);
            if (!$compromissos) {
                    
              $compromissos = [];
            }
    
            $compromissos[] = $compromisso;    
            $json = json_encode($compromissos, JSON_PRETTY_PRINT);
            file_put_contents($arquivo, $json);
        } */
     
       

         
            
    ?>
	  
    </div>
<?php require_once "footer.php"; ?>

