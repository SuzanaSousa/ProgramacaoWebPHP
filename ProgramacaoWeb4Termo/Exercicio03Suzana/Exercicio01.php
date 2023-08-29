<?php require_once "header.php"; ?>

<div class="container">
    <br />
    <h3 class= "text-center">Exercício 01</h3>
    <br />
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <?php
        echo readfile("meuarquivo.txt");
        echo "<hr />";
        $arquivo = fopen("meuarquivo.txt", "r")
            or die("Não conseguir abrir o arquivo");
            fclose($arquivo);
            echo "<hr />";
        
        

        $arquivo = fopen("meuarquivo.txt","w")
                        or die("Não e possivel abrir esse aquivo");
            $txt = "<h3>Web PHP !!!<br></h3>";
            fwrite($arquivo, $txt);
            $txt = "<h3>Fatec Presidente Prudente.<br /></h3>";
            fwrite($arquivo, $txt);
            $txt = "<h3>Professor Paulo Tacca.<br /></h3>";
            fwrite($arquivo, $txt);
            fclose($arquivo);
            //Fechamos o arquivo após escrever nele fclose($arquivo);
            echo "O arquivo meuarquivo.txt foi criado com " . filesize("meuarquivo.txt")  . " bytes.<br />";
            echo " Data: " . date("Y.m.d") . "<br />";
            
        ?>

            
    </form>
     <a href ="/Exercicio03Suzana/PaginaInicial.php">
        <button type="button" class="btn btn-warning">Voltar menu Principal</button>
     </a>
     
     
    <a  href ="/Exercicio03Suzana/Exercicio02.php">
        <button type="button text-end " class="btn btn-warning text-end">Proximo</button>
    </a>
       
</div>

<?php require_once "footer.php"; ?>