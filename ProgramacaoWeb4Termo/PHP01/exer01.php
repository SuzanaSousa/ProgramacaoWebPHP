<?php
require_once "header.php";?>
<div class="container">
    <br/>
     <h1>Exercicio 01</h1>
    <br/>
    <?php
    echo readfile("webdictionnary.txt");
    echo "<hr />";
    $myfile = fopen("webdictionnary.txt", "r")
          or die("Não conseguir abrir o arquivo");
    
    while(!feof($myfile)){
        echo fgets($myfile). "<br />";

    }
    //echo fread($myfile,filesize("webdictionnary.txt"));
    fclose($myfile);
    echo "<hr />";

    $myfile = fopen("newfile.txt","w")
          or die("Não conseguir abrir o arquivo");
    $txt ="A materia de PHP\n";
    fwrite($myfile, $txt);
    $txt ="A materia de PHP\n";
    fwrite($myfile, $txt);
    
    
    }
    fclose($myfile);
    ?>
<div>   
<?php require_once "footer.php";?>$myfile = fopen("newfile.txt","r")
          or die("Não conseguir abrir o arquivo");
    while(!feof($myfile)){
          echo fgets($myfile). "<br />";