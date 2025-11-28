<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <h3>Introduce dos cadenas y te calculo la distancia Hamming entre
        ellas</h3>
        <div>
            <label for="cadena1">Cadena 1:</label>
            <input type="text" id="cadena1" name="cadena1" required>
        </div>
        <div>
            <label for="cadena2">Cadena 2:</label>
            <input type="text" id="cadena2" name="cadena2" required>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>

    <?php

        include "libreria_examen.php";

        if (isset($_POST['cadena1']) && isset($_POST['cadena2']))
        {
            $cadena1 = $_POST['cadena1'];
            $cadena2 = $_POST['cadena2'];
            $caracteresProhibidos = ["<",">"];
            $tmp1 = str_split($cadena1);
            $tmp2 = str_split($cadena2);
            $splitCadenas = array_merge($tmp1,$tmp2);
            $flag = false;
            $i = 0;

            do
            {
                for ($ii = 0; $ii < count($caracteresProhibidos); $ii++)
                {
                    if ($splitCadenas[$i] == $caracteresProhibidos[$ii])
                    {
                        $flag = true;
                    }
                }
                $i++;
            }while ($i < count($splitCadenas) && !$flag);
            if(!$flag)
            {
                $cs = distanciaHamming($cadena1,$cadena2);

                $nCs = distanciaHamming($cadena1,$cadena2,false);

                if($cs != -1)
                {
                    echo "CaseSensitive Ditancia Hammering es igual a $cs<br>";

                    echo "No CaseSensitive Ditancia Hammering es igual a $nCs";
                }
                else
                {
                    echo "Las cadenas son de distinta longitud";
                }
            }
            else
            {
                echo "Has intentado hacer un ataque XSS";
            }
            
        }
    ?>
</body>
</html>