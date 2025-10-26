<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Ejercicio 11 Relación 2 - Notas v2</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form action="11calculo-nota.php" method="get"class="p-3 shadow rounded">
    <div class="mb-3">
        <label for="nota1" class="form-label">Introduce la nota 1</label>
        <input type="number" min="1" max="10" name="nota1" id="nota1" class="form-control">
    </div>
    <div class="mb-3">
        <label for="nota2" class="form-label">Introduce la nota 2</label>
        <input type="number" min="1" max="10"name="nota2" id="nota2" class="form-control">
    </div>
    <div class="mb-3">
        <label for="faltas" class="form-label">Introduce la faltas</label>
        <input type="number" min="0" name="faltas" id="faltas" class="form-control">
    </div>    
    <input type="submit" value="Enviar">
    </form>
</body>
</html>