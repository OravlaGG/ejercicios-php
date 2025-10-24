<?php

        $dividendo = $_GET['dividendo'];
        $divisor = $_GET['divisor'];
        
        $cociente = 0;
        
        while ($dividendo >= $divisor)
        {
            $dividendo -= $divisor;
            $cociente++;
        }

        if(isset($_GET['cociente']))
        {
            echo "El cociente es: $cociente";
        }
        if(isset($_GET['resto']))
        {
            echo " El resto $dividendo ";
        }
        
    ?>