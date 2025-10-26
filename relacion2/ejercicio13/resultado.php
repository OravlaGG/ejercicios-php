<?php
        $lado1 = $_GET['lado1'];
        $lado2 = $_GET['lado2'];
        $lado3 = $_GET['lado3'];

        if ($lado1 == $lado2 and $lado1 == $lado3)
        {
            echo "El triangulo es equilatero";
        }
        else if($lado1 == $lado2 or $lado2 == $lado3 or $lado3 == $lado1)
        {
            echo "El triangulo es isosceles";
        }
        else
        {
            echo "El triangulo es escaleno";
        }
?>