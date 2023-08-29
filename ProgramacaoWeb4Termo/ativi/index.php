<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $altura = 2.0;
    $peso = 200;
    
    $imc = $peso / ($altura ** 2);
    $dicionario=[
        18,5 => "Abaixo do peso normal",
        24,9 => " Peso normal",
        29,9 => "Excesso de peso",
        34,9 => "Obesidade classe I",
        39,9 => "Obesidade classe II",
        40,0 => "Obesidade classe III",




    ];


    foreach($dicionario as $key => $value){
        if((float) $key <= 40.0){
            if($imc <= $key){
                echo "value";
                break;
            }

        }
    }
        
           
        
        
        
    ?>
</body>
</html>