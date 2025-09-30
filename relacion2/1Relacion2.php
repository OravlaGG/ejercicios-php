<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Relación 2 -  FORMULARIO CALCULADORA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <h1>Ejercicio 1 Relación 2 -  FORMULARIO CALCULADORA</h1>
    <form action="" method="get"class="m-auto p-3 w-50">
    <div class="mb-3">
        <label for="numero1" class="form-label">Introduce número</label>
        <input type="text" name="numero1" id="numero1" class="form-control">
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
        <input type="text" name="numero2" id="numero2" class="form-control">
    </div>    
    <input type="submit" value="Enviar">
    </form>
</body>
</html>