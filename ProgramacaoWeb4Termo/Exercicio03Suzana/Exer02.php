
<?php require_once "footer.php"; ?>
<?php

$arquivo= array(
    ['time1','time2','time3','time4','time5']
);

if (isset($_GET['var'])){
    $var = $_GET['var'];
    if ($var == "txt") {
        //texto
     $myfile = fopen("times.txt", "w") or die("Ferrou!!");
        $txt = "";
   
        foreach($arquivo as $d) {
            $txt = $d["time1"] . ", " . $d["time2"] . 
             $d["time3"] . $d["time4"] .$d["time5"]. "\n";
        }
        fwrite($myfile, $txt);
        fclose($myfile);
    }elseif ($var == "txt") {
        //cvs
        $headers = ['time1', 'tim2', 'time3', 'time4', 'time5'];
        $filecsv = fopen('times.txt', 'w');
        fputcsv($filecsv , $headers); // Criar com cabeçalho        
        foreach ($arquivo as $fields ) {
            fputcsv($filecsv, $fields);
        }        
        fclose($filetxt);
        //Criar aquivo na pasta do servidor
        echo "Export to txt:<br>";
        echo "O arquivo times.txt foi criado com " . filesize("times.txt")  . " bytes.";

        //baixar o arquivo
        // $filepath = "tabela.csv";
        // header('Content-Description: File Transfer');
        // header('Content-Type: application/octet-stream');
        // header("Content-Transfer-Encoding: utf-8");   
        // header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        // readfile($filepath);
    } else if ($var == "aquivo") {
        //Criar aquivo na pasta do servidor
        // echo "Export to JSON:<br>";
        $json = json_encode($aquivo);
        $bytes = file_put_contents("tabela.json", $arquivo); 
        // echo "O arquivo tabela.json foi criado com $bytes bytes.";

        //baixar o arquivo
        $filepath = "tabela.json";
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: utf-8");   
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        readfile($filepath);
    }
    exit;
    <form frmTimes nome="" action="times.txt" method="post">
    <label> Time 1:</label>
    <input type="text" name="time[]"><br><br>
    <label> Time 2:</label>
    <input type="text" name="time[]"><br><br>
    <label> Time 3:</label>
    <input type="text" name="time[]"><br><br>
    <label> Time 4:</label>
    <input type="text" name="time[]"><br><br>
    <label> Time 5:</label>
    <input type="text" name="time[]"><br><br>
    <input type="submit" value="Inserirtimes">
    </form>
}

require_once "header.php"; 
?>