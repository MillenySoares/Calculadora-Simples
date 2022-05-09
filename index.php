<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $num1 = "";
    $num2 = "";
    $resul = "";
    $calcular = 'somar';

    if(isset($_GET['num1'], $_GET['num2'], $_GET['calcular'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $calcular = $_GET['calcular'];

        switch($calcular){
            case 'somar';              
                $resul = $num1 + $num2;
                break;
            case 'subtrair';
                $resul = $num1 - $num2;
                break;
            case 'multiplicar';
                $resul = $num1 * $num2;
                break;
            case 'dividir';
                $resul = $num1 / $num2;
                break;


        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calculadora/Exercício</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="CSS.css" rel="stylesheet">

    </head>
    <body>
    <center>
        <div class="box-shadow"> 
            <form> 
                <h2>CALCULADORA</h2>
                <label>Digite um número:</label><br>
                <input class="input" type="number" name="num1" value=<?php echo $num1; ?> required/></br><br>
                <label>Digite outro número:</label><br>
                <input class="input" class="input" type="number" name="num2" value=<?php echo $num2; ?> required/> <br><br>
                <select name="calcular">
                    <option value="somar" <?php ($calcular=='somar')?'Selected':''; ?>>Somar</option>
                    <option value="subtrair" <?php ($calcular=='subtrair')?'Selected':''; ?>>Subtrair</option>
                    <option value="multiplicar" <?php ($calcular=='multiplicar')?'Selected':''; ?>>Multiplicar</option>
                    <option value="dividir" <?php ($calcular=='dividir')?'Selected':''; ?>>Dividir</option>
                </select>
                <br><br>
                <input class="input-button" type="submit" value="Calcular" name="Calcular"/>
                <p>O resultado é <?php echo $resul; ?></p>
            </form>
        </div>
        </center>
    </body>
</html>