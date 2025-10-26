<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 de la Relación 1 - TRIANGULOS</title>
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
        <h1>Ejercicio 13 de la Relación 2 - TRIANGULOSv2</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form action="resultado.php" id="formT" method="get" class="p-3 shadow rounded">
    <div class="mb-3">
        <label for="lado1" class="form-label">Introduce un lado</label>
        <input type="text" name="lado1" id="lado1" class="form-control">
        <div id="lado1Help" class="form-text text-danger">El lado esta vacio o es 0 o inferior</div>

    </div>
    <div class="mb-3">
        <label for="lado2" class="form-label">Introduce un lado</label>
        <input type="text" name="lado2" id="lado2" class="form-control">
        <div id="lado2Help" class="form-text text-danger">El lado esta vacio o es 0 o inferior</div>

    </div>
    <div class="mb-3">
        <label for="lado3" class="form-label">Introduce un lado</label>
        <input type="text" name="lado3" id="lado3" class="form-control">
        <div id="lado3Help" class="form-text text-danger">El lado esta vacio o es 0 o inferior</div>
    </div>    
    <input type="submit" value="Enviar">
    </form>
    <script src="./validacion.js"></script>
</body>
</html>