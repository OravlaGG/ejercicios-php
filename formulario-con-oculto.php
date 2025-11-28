<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con campos ocultos</title>
    <link rel="shortcut icon" href="../img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid m-auto m-auto w-50 bg-primary-subtle">
        <form action=<?php echo htmlspecialchars("1con-cookies.php");?> method="post"class="p-3 shadow rounded"
        id="form1">
            <div class="mb-3">
                <label for="idusuario" class="form-label">Id del Isuario</label>
                <input type="text" name="idusuario" id="idusuario" class="form-control">
                <div id="idusuarioHelp" class="form-text text-danger">El nombre no tiene formato correcto o esta vacio</div>
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="text" name="contrasena" id="contrasena" class="form-control">
                <div id="contrasenaHelp" class="form-text text-danger">Debe contener may, min, digitos y car. especiales</div>
            </div>
            <input type="hidden" name="navegador" value="pepe
            ">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>