<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 Relación 3 - Funcion Factorial con Recursividad Libreria</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Ejercicio 4 Relación 3 - Funcion Factorial con Recursividad Libreria</h1>
    </div>
    <div class="d-flex  justify-content-center align-items-center">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get"class="p-3 shadow rounded">
    <div class="mb-3">
        <label for="numero1" class="form-label">Introduce un número natural</label>
        <input type="number" min="2" name="numero1" id="numero1" class="form-control">
    </div>    
    <input type="submit" value="Enviar">
    </form>
    <div class="justify-content-center align-items-center">
    <?php
    include 'relacion3.php';

        if (isset($_GET['numero1']))
        {
            $num = $_GET['numero1'];

            $fac = factorial($num);
            echo "<h2>El factorial de  $num es: $fac</h2><br>";
        }

    ?>
    </div>
</body>
</html>