<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Relación 2 -  FORMULARIO CALCULADORA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body class="bg-black">
    <h1 class="text-center text-white">Ejercicio 1 Relación 2 -  FORMULARIO CALCULADORA</h1>
<div class="d-flex justify-content-center align-items-center vh-100">
<!-- cundo el calculo esta en el propio archivo
  hay que llamarlo desde action (a sí  mismo)-->
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get" class="shadow-lg p-3 rounded bg-white">
    <div class="mb-3">
        <label for="numero1" class="form-label">Introduce número</label>
        <input type="number" step="0.01" placeholder="Como mucho 2 cifras decimales" name="numero1" id="numero1" class="form-control">
    </div>
    <div class="mb-3">
        <select name="operador" id="operador" class="form-control">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="producto">*</option>
            <option value="division">/</option>
            <option value="resto">%</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="numero2" class="form-label">Introduce número</label>
        <input type="number" step="0.01" placeholder="Como mucho 2 cifras decimales" name="numero2" id="numero2" class="form-control">
    </div>    
    <input type="submit" value="Enviar">
    </form>
    
</div>
<p class="text-white">
    <?php
        echo "algo";
    ?>
</p>
</body>
</html>