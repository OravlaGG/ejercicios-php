<?php

        $dividendo = $_GET['dividendo'];
        $divisor = $_GET['divisor'];
        $cociente = 0;
        
        while ($dividendo >= $divisor)
        {
            $dividendo -= $divisor;
            $cociente++;
        }

        echo "El cociente es: $cociente y el resto $dividendo ";
    ?>