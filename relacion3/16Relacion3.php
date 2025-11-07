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
        <h1>Ejercicio 16 Relación 3 - Funciones Flechas</h1>
    </div>

    <?php
        $arr = range(1,100);
        /*Esta no funciona. Funcionaria  de la siguiente manera creamos un do while
        que recorra el array cuya condicion de salida sea una flag que cambiaria si 
        encuentra un número que no es positivo*/
        /*echo"<div class='alert alert-secondary' role='alert'>";
        $tmp = array_all($arr, function ($n) { return ($n >= 0);});
        echo "Son todos los numeros positivos? ";
        echo"</div>";*/
        /*Esta no funciona. Funcionaria  de la siguiente manera creamos un do while
        que recorra el array cuya condicion de salida sea una flag que cambiaria si 
        encuentra un número que es divisible entre 5*/
        /*echo"<div class='alert alert-secondary' role='alert'>";
        $tmp = array_all($arr, function ($n) { return ($n % 5 == 0);});
        echo "Son todos los numeros positivos? ";
        echo"</div>";*/
        $primo = function ($n) 
        { 
            $div = 2;
            $esPrim = true;

            while($div < $n && $esPrim != false)
            {
                if ($n % $div == 0)
                {
                    $esPrim = false;
                }

                $div++;
            }

            return $esPrim;
        };
        echo"<div class='alert alert-secondary' role='alert'>";
        $tmp = array_filter($arr, $primo);//Devuelve Almacena los elementos que son true
        echo "Que numeros son primos? ". implode(", ",$tmp);
        echo"</div>";
        //Devolveria la primera ocurrencia que sea true
        /*
        $digitos = function ($n) {return (($n % 10) == ($n / 10));};
        echo"<div class='alert alert-secondary' role='alert'>";
        $tmp = array_find($arr, $digitos);//Devuelve Almacena los elementos que son true
        echo "Que es el primero con 2 digitos identicos? $tmp";
        echo"</div>";*/
        $cuadrado = function ($n) { return ($n * $n);};
        echo"<div class='alert alert-danger' role='alert'>";
        $tmp = array_map($cuadrado, $arr);//Devuelve un array el cual almacena lo devuelto por la funcion
        echo "Los cuadrados de los numeros del array: ". implode(", ",$tmp);
        echo"</div>";

        $doble = function ($n) { return ($n * 2);};
        echo"<div class='alert alert-warning' role='alert'>";
        array_walk($doble, $arr);//Devuelve Almacena los elementos que son true
        echo "Los doble de los numeros del array: ". implode(", ",$arr);
        echo"</div>";
    ?>
</body>
</html>