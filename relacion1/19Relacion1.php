<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 de la Relación 1 - TRANSFORMA A BINARIO</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">

</head>
<body>
    <h1>Ejercicio 19 de la Relación 1 - TRANSFORMA A BINARIO</h1>

    <?php

        $num = 33;
        $bi = "";

        //echo "El $num en binario es ",decbin($num);// esto es para comprobar que el numero binario final de un buen resultado
        echo "El número $num en binaraio es:";
        if ($num == 0)
        {
            echo "<br>$num";
        }
        else
        {
             while ($num > 0)
            {
                $digito = $num % 2;
                $num =intval($num/2);

                $bi = sprintf("%s%s",strval($digito),$bi);
            }
            echo "<br>$bi";
        } 

    ?>
</body>
</html>  