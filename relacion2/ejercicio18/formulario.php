<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18 Relación 2 - Formulario Binario</title>
    <link rel="shortcut icon" href="../../img/playamar.png" type="image/x-icon">
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
        <h1>Ejercicio 18 Relación 2 - Formulario Binario</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form action="resultado.php" id="formT" method="get"class="p-3 shadow rounded">
    <div class="mb-3">
        <label for="binario" class="form-label">Introduce el numero</label>
        <input type="text" name="binario" id="binario" class="form-control">
        <div id="binarioHelp" class="form-text text-danger">El número esta vacio o es menor a 0</div>
    </div>    
    <input type="submit" value="Enviar">
    </form>
    </div>
    <script src="./validacion.js"></script>

</body>
</html>