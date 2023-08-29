<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "O arquivo não existe!";
    die();
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 100000) {
    echo "Seu arquivo e muito grande!";
    die();
}

// Allow certains file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Apenas arquivo nos formatos JPG, JPEG, PNG e GIF são aceitos.";
    die();
}

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "O arquivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]) . " foi carregado com sucesso.");
    echo "<br/><img src='uploads/" . 
            htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "' />";
} else {
    echo "Não foi possível carregar seu arquivo.";
}

//proximo codigo
<?php require_once "header.php"; ?>

<div class="container">
    <br />
    <h1>Exercício 01</h1>
    <br />
    <?php
        echo readfile("webdictionary.txt");
        echo "<hr />";
        
        $myfile = fopen("webdictionary.txt", "r") 
                    or die("Não consegui abrir o arquivo!");

        //echo fread($myfile, filesize("webdictionary.txt"));

        while (!feof($myfile)) {
            echo fgets($myfile) . "<br />";
        }
        
        fclose($myfile);

        echo "<hr />";

        $myfile = fopen("newfile.txt", "w")
                    or die("Não consegui abrir o arquivo!");
        $txt = "O Palmeiras não tem mundial!!\n";
        fwrite($myfile, $txt);
        $txt = "Nem a rainha da Inglaterra conseguiu esperar o titulo\n";
        fwrite($myfile, $txt);
        
        $myfile = fopen("newfile.txt", "r")
                    or die("Não consegui abrir o arquivo!");
        while (!feof($myfile)) {
            echo fgets($myfile) . "<br />";
        }
        fclose($myfile);

        echo "<hr>";

        $path = "./";
        $itens = new DirectoryIterator($path);

        foreach ($itens as $item) {
            if ($item->isDir()) {
                $diretorios[] = $item->getFilename();
            }else{
                $arquivos[] = $item->getFilename();
            }
        }

        $file = fopen("listaDir.txt", "w" ) 
                    or die("Falha na abertura do arquivo!");

        $texto = "";
        foreach($diretorios as $txt) {
            echo "<a href='" . $path . $txt . "'>[" . $txt . "]</a><br>";
            $texto .= "$txt\n";
        }

        foreach($arquivos as $txt) {
            echo "<a href='" . $path . $txt . "'>" . $txt . "</a><br>";
            $texto .= "$txt\n";
        }

        fwrite($file, $texto);
        fclose($file);
        echo "<hr>";
    ?>
</div>

<?php require_once "footer.php"; ?>

//000



?>
