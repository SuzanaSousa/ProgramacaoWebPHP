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
                                   //o ano com quatro digitos
    echo "Ola! Hoje é" . date('d/m/y') . ".Dia do PI.";
    $x = 10;

    echo "<br><br>"; //quebra linha
    echo $x;
   
    $x = 5;
    $y = 10;

    function myTest() {
    global $x, $y;
    $y = $x + $y;
    }
    echo "<br><br>";
    myTest();

    echo $y; // outputs 15
    print("<h3> Suzana</h3.");

    $x = 5985;
    var_dump(is_int($x));   //mostra mais informações que o conteudo
        //string
       //str_word_count conta palavras
       //strrev inverte palavra
       //strlen conta letras
       //strpos 
       //str_replace subistituir 
       //numeros
       //is_int() se a variavel e inteira
       // is_integer() - alias de is_int()
       // is_long() - apelido de is_int()
       //is_float
       //Cast conversão o tipo que quer  com a variavel na frente.int para float e float para int
       //abs valor absoluto
       // round aredondamento pra baixo ou para cima
       //rand ((1,200))
       //define cria costante lentra maiscula e sem $m

       //modulus
       ///=== identico conteudo e tipo iguais
       ///!== não identico conteudo e  tipo
        //<=> 0 se for igual e maior 1  menor -1
        //++$x  incrementa primeiro e depios a atribuição
        //$++x  primeiro a atribuição depois o incremento
        //xor 
        // .= 
        //. concatenar
        //switch tem  que ter um break  e  defautf
        //21/03/2023
        // array
        //count contar numero de elementos no vetor
       

    ?>

    
   
</body>
</html>
