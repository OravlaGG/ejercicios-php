<?php

        $num = $_GET['binario'];
        $bi = "";

        //echo "El $num en binario es ",decbin($num);// esto es para comprobar que el numero binario final de un buen resultado
        echo "El número $num en binario es:";
        if ($num == 0)
        {
            echo "<br>$num";
        }
        else
        {
             while ($num > 0)
            {
                $digito = $num % 2;
                $num =intval($num/2);

                $bi = sprintf("%s%s",strval($digito),$bi);
            }
            echo "<br>$bi";
        } 
    ?>