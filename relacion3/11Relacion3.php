<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11 Relación 3 - Funcion Palabra Invertidas</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Ejercicio 11 Relación 3 - Funcion Swap</h1>
    </div>
    <div class="justify-content-center align-items-center">
    <?php

        include "relacion3.php";
        //Las funciones las metere en relacion3.php
        /*
        function swap(&$n1,&$n2)
        {
            $tmp = $n1;

            $n1 = $n2;

            $n2 = $tmp;
        }

        function invierteArr(&$arr)
        {
            for ($i = 0; $i < count($arr)/2; $i++)
            {
                swap($arr[$i],$arr[(count($arr)-1)-$i]);
            }
        }*/

        $v1 = 22;
        $v2 = 101;
        $aray = [1,10,20,35];

        echo "Antes v1 = $v1 y v2 = $v2";

        swap($v1,$v2);

        echo "<br>Despues v1 = $v1 y v2 = $v2";

        $stri = implode(", ", $aray);
        echo "<br>Antes El array es $stri";

        invierteArr($aray);
        $stri = implode(", ", $aray);
        echo "<br>Despues El array es $stri";
    ?>
    </div>
</body>
</html>