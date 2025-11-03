<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/playamar.png" type="image/x-icon">
    <title>Formulario notas </title>
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
        <h1>Ejercicio 12 Relación 2 - Notas v3</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-white">
    <form action="12calculador-nota.php" method="get"class="p-3 shadow rounded"
        id="form1">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
        <div id="nombreHelp" class="form-text text-danger">El nombre no tiene formato correcto o esta vacio</div>
    </div>
    <div class="mb-3">
        <label for="mail" class="form-label">Email</label>
        <input type="email" name="mail" id="mail" class="form-control">
        <div id="emailHelp" class="form-text text-danger">El email no tiene formato correcto o esta vacio</div>
    </div>
    <div class="mb-3">
        <p>Selecciona tu documento:</p>
        <input type="radio" id="DNI" name="DNI" value="DNI"><label for="Documento">DNI</label><br>
        <input type="radio" id="NIE" name="NIE" value="NIE"><label for="Documento">NIE</label><br><br>
        <label for="documento" class="form-label">Documento de Identificación</label>
        <input type="text" name="documento" id="documento" class="form-control">
        <div id="docHelp" class="form-text text-danger">El documento no tiene formato correcto o esta vacio</div>
        <div id="ExtraHelp" class="form-text">
            <label for="NIE" class="form-label">Documento de Identificación</label>
            <input type="text" name="sNIE" id="sNIE" class="form-control">
            <div id="NIEHelp" class="form-text text-danger">El numero de soporte no tiene formato correcto o esta vacio</div>
        </div>
    </div>
    <div class="mb-3">
        <label for="nota0" class="form-label">Introduce la nota inicial:</label>
        <input type="text" name="nota0" id="nota0" class="form-control">
        <div id="nota0Help" class="form-text text-danger">La nota esta en un formato no aceptado</div>

    </div>
    <div class="mb-3">
        <label for="nota1" class="form-label">Introduce la primera nota</label>
        <input type="text" name="nota1" id="nota1" class="form-control">
        <div id="nota1Help" class="form-text text-danger">La nota esta en un formato no aceptado</div>
    </div>
    <div class="mb-3">
        <label for="nota2" class="form-label">Introduce la segunda nota</label>
        <input type="text" name="nota2" id="nota2" class="form-control">
        <div id="nota2Help" class="form-text text-danger">La nota esta en un formato no aceptado</div>
    </div>
    <div class="mb-3">
        <label for="nota3" class="form-label">Introduce la tercera nota</label>
        <input type="text" name="nota3" id="nota3" class="form-control">
        <div id="nota3Help" class="form-text text-danger">La nota esta en un formato no aceptado</div>
    </div>
    <input type="submit" value="Enviar">
    </form>
    <script src="./validaciones.js"></script>
</body>

</html>