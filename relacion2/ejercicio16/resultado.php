<?php
        $num = $_GET['numero1'];
        $opcion = $_GET['seleccion'];
        $div = 0;

        if ($opcion == "primo")
        {
            $esPrim = true;
            $div = 2;
            while($div < $num && $esPrim != false)
            {
                if ($num % $div == 0)
                {
                    $esPrim = false;
                }
                $div++;
            }

            printf("El numero %d es primo? %s",$num, ($esPrim ? 'True' : 'False'));

        }
        else
        {
            $div = 1;
            if ($num < 1)
            {
                echo "El numero no tiene divisores porque es 0 o menor";
            }
            else
            {
                while($div <= $num)
                {
                    if ($num % $div == 0)
                    {
                        echo "<span style='color: red;'>$div</span> ";
                    }
                    else
                    {
                        echo "$div ";
                    }
                    $div++;
                }
            }
        }
?>