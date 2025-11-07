<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Flechas</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Ejercicio 15 Relación 3 - Funciones Flechas</h1>
    </div>
    <div class="d-flex  justify-content-center align-items-center">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get"class="p-3 shadow rounded">
    <div class="mb-3">
        <label for="radio" class="form-label">Introduce un numero</label>
        <input type="number" min="0.000001" step="0.000001" require name="radio" id="radio" class="form-control">
    </div>  
    <input type="submit" value="Enviar">
    </form>
    </div>
    <div class="justify-content-center align-items-center">
    <?php
        if (isset($_GET['radio']))
        {
            $r = $_GET['radio'];
            $circunferencia = fn ($n) => (2 * $n * pi());
            $circulo = fn ($n) => (pi() * $n^2);
            $esfera = fn ($n) => ((4/3) * pi() * $n);

            echo "El resultado del radio introducido son:<br>Circunferencia = ". $circunferencia($r) ."<br>
                Area Circulo = ". $circulo($r) ."<br>Volumen de Esfera = ". $esfera($r);

        }
        
    ?>
    </div>
</body>
</html>