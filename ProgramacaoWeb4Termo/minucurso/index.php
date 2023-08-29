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
        
        $resultado = 0;

        $op = $_GET['operacao'];

        // if(isset($_POST['operacao']))
        //     $op = $_POST['operacao'];


        switch($op)
        {
            case 1:
                $resultado = $_GET['numero'] * 2;
                break;
            case 2:
                $resultado = pow($_GET['numero'], 2);
                break;
            case 3:
                $resultado = sqrt($_GET['numero']);
                break;
            default:
                $resultado = 'Nao foi escolhido um tipo';
        }
        
        
    ?>
    <form method="GET">
        <label id="numero">Numero</label>
        <input name="numero" id="numero" type="number"/>
        <input type="radio" value="1" id="dobro" name="operacao" checked/>
        <label id="dobro">Dobro</label>
        <input type="radio" value="2" id="potencia" name="operacao"/>
        <label id="potencia">Potencia</label>
        <input type="radio" value="3" id="raiz" name="operacao"/>
        <label id="raiz">Raiz</label>
        <input type="submit" value="Enviar"/>
    </form>
    <hr>
    <p>Resultado: <?= $resultado ?></p>

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
        $carros = ['Gol', 'Fiesta', 'Fit', 'Uno', 'Fusca', 'HR-V'];
        
    ?>
    <table>
        <thead>
            <th>id</th>
            <th>Carro</th>
        </thead>
        <tbody>
            <?php
                for($i = 0; $i < sizeof($carros); $i++){
                    ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $carros[$i] ?></td>
                    </tr>
                    <?php
                }
                foreach($carros as $key => $modelos){
                    ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $modelos ?></td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>


</body>
</html>