<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario notas </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Ejercicio 12 Relación 2 - Notas v3</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form action="12calculador-nota.php" method="get"class="p-3 shadow rounded"
        onsubmit="return validarFormularioNotas()">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input require type="text" name="nombre" id="nombre" class="form-control">
    </div>
    <div class="mb-3">
        <label for="mail" class="form-label">Email</label>
        <input require type="email" name="mail" id="mail" class="form-control">
    </div>
    <div class="mb-3">
        <label for="inicial" class="form-label">Introduce la nota inicial: <span id="nota0Help" class="form-text">La nota debe ser entera y entre 1 y 10</span></label>
        <input type="text" name="inicial" id="inicial" class="form-control">
    </div>
    <div class="mb-3">
        <label for="primera" class="form-label">Introduce la primera nota</label>
        <input type="text" name="primera" id="primera" class="form-control">
    </div>
    <div class="mb-3">
        <label for="segunda" class="form-label">Introduce la segunda nota</label>
        <input type="text" name="segunda" id="segunda" class="form-control">
    </div>
    <div class="mb-3">
        <label for="tercera" class="form-label">Introduce la tercera nota</label>
        <input type="text" name="tercera" id="tercera" class="form-control">
    </div>
    <input type="submit" value="Enviar">
    </form>
    <script src="./validaciones.js"></script>
</body>

</html>