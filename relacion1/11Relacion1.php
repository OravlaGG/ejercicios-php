<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11 de la Relación 1 - EQUACION 2º GRADO 2.0</title>
</head>
<body>
    <h1>Ejercicio 11 de la Relación 1 - EQUACION 2º GRADO 2.0</h1>

    <?php
    /*
    Hay q considerar q todos en algun punto sea 0
    */
        $a = 3;
        $b = 0;
        $c = -2;
        
        if ($a == 0)
        {
            if ($b == 0)
            {
                echo "No hay incongnita que resolver";
            }
            else
            {
                printf("El resultado de x es: %.02f",((-$c)/$b));
            }
        }
        elseif ($b == 0)
        {
            if (($c < 0 &&  $a < 0) || ($a > 0 && $c > 0))
            {
                printf("El a y el c tienen signos contrarios");
            }
            else
            {
                printf("El resultado de x es: %.02f y %.02f",sqrt((-$c)/$a),-(sqrt((-$c)/$a)));

            }
        }
        elseif ($c == 0)
        {
            printf("El resultado de x puede ser 0 o %.02f",((-$b)/$a));
        }
        else
        {
            $raiz = ($b ** 2) - (4 * $a * $c);
            printf("El resultado positivo es %.02f y el negativo es %.02f",((- $b + sqrt($raiz)) / (2 * $a)),((- $b - sqrt($raiz)) / (2 * $a)));

        }
    ?>
</body>
</html>