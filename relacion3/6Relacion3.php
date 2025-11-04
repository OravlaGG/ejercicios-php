<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Relación 3 - Funcion MCD con Recursividad</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Ejercicio 6 Relación 3 - Dados</h1>
    </div>
    <div class="d-flex  justify-content-center align-items-center">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get"class="p-3 shadow rounded">
    <div class="mb-3">
        <label for="numero1" class="form-label">Introduce un número de tirada del dado</label>
        <input type="number" name="numero1" id="numero1" class="form-control">
    </div> 
    <input type="submit" value="Enviar">
    </form></div><br><br><br>
    <div class="content-center align-items-center">
    <?php
    
        include "relacion3.php";

        /*
        function aleatorio($num1, $num2)
        {
            return (rand($num1,$num2));
        }*/

        if (isset($_GET['numero1']))
        {
            $tiradas = $_GET['numero1'];

            echo "Tiradas Normales - Tiradas trucadas";
            for($i = 0; $i < $tiradas; $i++)
            {
                $normal = aleatorio(1,6);
                $trucado = aleatorio(1,8);

                if($trucado > 6)
                {
                    $trucado = 6;
                }
                echo "      $normal         $trucado";
            }
        }

    ?>
    
</body>
</html>