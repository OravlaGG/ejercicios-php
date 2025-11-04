<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 Relación 3 - Funcion Palabra Invertidas</title>
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
        //Esta funcios sera incluida en la libreria de arriba
        /*
        function asBurbuja(&$datos)
        {
            for ($c = 1; $c <= count($datos)/2; $c++)
            {
                for ($i = 0; $i < count($datos)-1; $i++)
                {
                    if($datos[$i] > $datos[$i+1])
                    {
                        swap($datos[$i], $datos[$i+1]);
                    }
                }
            }
        }
        */
        $datos = ['Pérez','García','López','Márquez','Álvarez','Domínguez','Ruíz','Díaz'];

        
        $stri = implode(", ", $datos);
        echo "<br>Antes El array es [$stri]";
        
        asBurbuja($datos);
        $stri = implode(", ", $datos);
        echo "<br>Antes El array es [$stri]";

        $numeros = [1,0,8,9,4,-1,150,33,21,67];

        $stri = implode(", ", $numeros);
        echo "<br>Antes El array es [$stri]";
        
        asBurbuja($numeros);
        $stri = implode(", ", $numeros);
        echo "<br>Antes El array es [$stri]";
    ?>
    </div>
</body>
</html>