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
        <h1>Ejercicio 3 Relación 3 - Funcion MCD con Recursividad</h1>
    </div>
    <div class="d-flex  justify-content-center align-items-center">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get"class="p-3 shadow rounded">
    <div class="mb-3">
        <label for="numero1" class="form-label">Introduce un número natural</label>
        <input type="number" name="numero1" id="numero1" class="form-control">
    </div> 
    <div class="mb-3">
        <label for="numero2" class="form-label">Introduce un número natural</label>
        <input type="number" name="numero2" id="numero2" class="form-control">
    </div>  
    <input type="submit" value="Enviar">
    </form>
    <div class="justify-content-center align-items-center">
    <?php
    
        function mcd($num1, $num2)
        {
            if ($num1 == $num2)
            {
                return $num1;
            }
            else
            {
                if ($num1 > $num2)
                {
                    return mcd($num1-$num2, $num2);
                }
                else
                {
                    return mcd($num1, $num2-$num1);
                }
            }
            
        }

        if (isset($_GET['numero1']))
        {
            $num1 = $_GET['numero1'];
            $num2 = $_GET['numero2'];

            $cd = mcd($num1, $num2);
            echo "<h2>El MCD de $num1 y $num2 es: $cd</h2><br>";
        }

    ?>
    </div>
</body>
</html>