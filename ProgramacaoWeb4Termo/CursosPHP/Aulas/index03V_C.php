<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costantes e Variáves</title>
</head>
<body>
    <h1>Costantes e Variáves</h1>

    <?php 
     $nome = "Suzana";
     $sobrenome ="Sousa"; //variavel
     const PAIS = "Brasil";// constante
     echo "Muito Prazer, $nome $sobrenome! Eu moro no ".PAIS . "<br>";
     
     $nome = "Lia";
     $sobrenome = "Brillaty";
     const Cidade = "Bahia";
     echo "Muito Prazer, $nome $sobrenome! Eu moro no ".Cidade;
    ?>
</body>
</html>