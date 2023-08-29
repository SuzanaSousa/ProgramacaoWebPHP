<?php require_once "header.php"; ?>
   

<?php
$flag_msg = null;
$msg = "";
if (isset($_GET['enviar'])) {
   
    $times = array(
        ['time1' => 'time','time2' => 'time','time3' => 'time','time4' 
        => 'time','time5' => 'time']
    );
        
    

}
    ?>
    
    <div class="container">
        <br />
        <h3 class= "text-center">Exercício 02</h3>
        <br />
        <form class= "text-center" action="times.txt" method="post" nctype="multipart/form-data" >
            <label> Time 1:</label>
            <input type="text" name="time1[]"><br><br>
            <label> Time 2:</label>
            <input type="text" name="time2[]"><br><br>
            <label> Time 3:</label>
            <input type="text" name="time3[]"><br><br>
            <label> Time 4:</label>
            <input type="text" name="time4[]"><br><br>
            <label> Time 5:</label>
            <input type="text" name="time5[]"><br><br>
            <input type="submit" class="btn btn-warning" value="Inserir times">
            <br>
            <br>
            <div>
                <a  href ="/Exercicio03Suzana/Exercicio03.php">
                    <button type="button text-end " class="btn btn-warning text-end">Proximo</button>
                </a>
            <div>
            <br>
            <div>
                <a href ="/Exercicio03Suzana/PaginaInicial.php">
                  <button type="button" class="btn btn-warning">Voltar menu Principal</button>
                </a>
            </div>
        </form>
       
        <?php
        
        $times = fopen("times.txt","w")
                or die("Não e possivel abrir esse aquivo");
           
            fwrite($times, $time1);
            fwrite($times, $time2);
            fwrite($times, $time3);
            fwrite($times, $time4);
            fwrite($times, $time5);
            fclose($times);

        echo readfile("times.txt");
        echo "<hr />";
        $times = fopen("times.txt", "r")
            or die("Não conseguir abrir o arquivo");
        fclose($times);
        echo "<hr />";
            
            //Fechamos o arquivo após escrever nele fclose($arquivo);
            echo "O arquivo times.txt foi criado com " . filesize("times.txt")  . " bytes.<br />";
            echo " Data: " . date("Y.m.d") . "<br />";
            
        ?>

       
    </div>

    <?php require_once "footer.php"; ?>