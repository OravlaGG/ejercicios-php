<?php
    function hexadecimal($num)
    {
        $copia = $num;
        $bi = "";
        while ($copia > 0)
        {
            $digito = $copia % 16;
            $copia = intval($copia/16);

            match($digito)
            {
                0,1,2,3,4,5,6,7,8,9 =>
                    $bi = sprintf("%s%s",strval($digito),$bi),
                10 =>
                    $bi = sprintf("A%s",$bi),
                11 =>
                    $bi = sprintf("B%s",$bi),
                12 =>
                    $bi = sprintf("C%s",$bi),
                13 =>
                    $bi = sprintf("D%s",$bi),
                14 =>
                    $bi = sprintf("E%s",$bi),
                15 =>
                    $bi = sprintf("F%s",$bi),
            };
        }
        return "<br>Hexadecimal es: $bi";
    }
    
    function octal($num)
    {
        $copia = $num;
        $bi = "";

        while ($copia > 0)
        {
            $digito = $copia % 8;
           $copia = intval($copia/8);

            $bi = sprintf("%s%s",strval($digito),$bi);
        }
        return "<br>Octal es: $bi";
    }

    function binario($num)
    {
        $copia = $num;
        $bi = "";

        while ($copia > 0)
            {
                $digito = $copia % 2;
                $copia = intval($copia/2);

                $bi = sprintf("%s%s",strval($digito),$bi);
            }
            return "<br>binario es: $bi";
    }

    $num = $_GET['numero1'];
    $opcion = $_GET['seleccion'];
    $txt = "";

    if($num == 0)
    {
        echo "Todos es $num";
    }
    else
    {
        match($opcion)
        {
            'nada' => $txt = "Elige una opción",
            'binario' => $txt = binario($num),
            'octal' => $txt = octal($num),
            'hexadecimal' => $txt = hexadecimal($num),
        };
    }

    echo $txt;

?>