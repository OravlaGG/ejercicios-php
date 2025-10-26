<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17 Relación 2 - Primos o divisores</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .form-text
        {
            visibility: hidden;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ejercicio 17 Relación 2 - Primos o divisores</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form action="resultado.php" id="formT" method="get"class="p-3 shadow rounded">
    <div class="mb-3">
        <label for="dividendo" class="form-label">Introduce el dividendo</label>
        <input type="text" name="dividendo" id="dividendo" class="form-control">
        <div id="dividendoHelp" class="form-text text-danger">El número esta vacio</div>
    </div>
    <div class="mb-3">
        <label for="divisor" class="form-label">Introduce el dividendo</label>
        <input type="text" name="divisor" id="divisor" class="form-control">
        <div id="divisorHelp" class="form-text text-danger">El número esta vacio o es 0</div>
    </div>
    <div class="mb-3">
        <p>Introduce una opcion o ambas</p><br>
        <input type="checkbox" id="cociente" name="cociente" value="cociente">
        <label for="cociente">Cociente</label><br>
        <input type="checkbox" id="resto" name="resto" value="resto">
        <label for="resto">Resto</label><br>
        <div id="checkHelp" class="form-text text-danger">Tienes que elegir 1 como minimo</div>
    </div>    
    <input type="submit" value="Enviar">
    </form>
    </div>
    <script src="./validacion.js"></script>

</body>
</html>