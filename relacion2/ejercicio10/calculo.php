<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend de la calculadora</title>
</head>
<body>
    <?php
    //haremos que se ejecute los cálculos tras el envio
        //Esto son 3 variable locales
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $operador = $_GET['operador'];

        //echo $numero1, $operador, $numero2;
        
       /* switch ($operador)
        {
            case "suma":
                $resultado = $numero1 + $numero2;
                break;
            case "resta":
                $resultado = $numero1 - $numero2;
                break;
            case "producto":
                $resultado = $numero1 * $numero2;
                break;
            case "division":
                $resultado = $numero1 / $numero2;
                break;
            case "resto":
                $resultado = $numero1 % $numero2;
                break;
        }*/

        $resultado = match ($operador)
        {
            "suma"=> $numero1 + $numero2,
            "resta"=> $numero1 - $numero2,
            "producto"=> $numero1 * $numero2,
            "division"=> $numero1 / $numero2,
            "resto"=> $numero1 % $numero2,
        };
        echo "<br>El resultado es: $resultado";
    
    ?>
</body>
</html>