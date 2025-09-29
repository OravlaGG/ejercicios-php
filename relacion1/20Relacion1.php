<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20 de la Relación 1 - CONVERSOR</title>
</head>
<body>
    <h1>Ejercicio 19 de la Relación 1 - CONVERSOR</h1>

    <?php

        $num = 155;
        $bi = "";
        $copia = $num;

        echo "El $num en ";

        while ($copia > 0)
        {
            $digito = $copia % 2;
            $copia = intval($copia/2);

            $bi = sprintf("%s%s",strval($digito),$bi);
        }
        echo "<br>binario es: $bi";
        
        $copia = $num;
        $bi = "";

        while ($copia > 0)
        {
            $digito = $copia % 8;
            $copia = intval($copia/8);

            $bi = sprintf("%s%s",strval($digito),$bi);
        }
        echo "<br>Octal es: $bi";

        $copia = $num;
        $bi = "";

        while ($copia > 0)
        {
            $digito = $copia % 16;
            $copia = intval($copia/16);

            switch($digito)
            {
                case 0:case 1:case 2:case 3:case 4:case 5:case 6:case 7:case 8:
                case 9:
                    $bi = sprintf("%s%s",strval($digito),$bi);
                    break;
                case 10:
                    $bi = sprintf("A%s",$bi);
                    break;
                case 11:
                    $bi = sprintf("B%s",$bi);
                    break;
                case 12:
                    $bi = sprintf("C%s",$bi);
                    break;
                case 13:
                    $bi = sprintf("D%s",$bi);
                    break;
                case 14:
                    $bi = sprintf("E%s",$bi);
                    break;
                case 15:
                    $bi = sprintf("F%s",$bi);
                    break;
            }
        }
        echo "<br>Hexadecimal es: $bi";

    ?>
</body>
</html>