<?php

function factorial($num)
        {
            if ($num == 1)
            {
                return 1;
            }
            else
            {
                return $num * factorial($num-1);
            }
            
        }

function mcd($num1, $num2)
        {
            if ($num1 == $num2)
            {
                return $num1;
            }
            else
            {
                if ($num1 > $num2)
                {
                    return mcd($num1-$num2, $num2);
                }
                else
                {
                    return mcd($num1, $num2-$num1);
                }
            }
            
        }
function esPrimo($num)
        {
            $prim = true;
            $div = 2;

            while($div < $num && $prim != false)
            {
                if ($num % $div == 0)
                {
                    $prim = false;
                }
                $div++;
            }
            return $prim;
        }

function aleatorio($num1, $num2)
        {
            return (rand($num1,$num2));
        }

function nombreDia()
        {
            $dia = date('w');
            

            $dEsp = match ($dia)
            {
                "0" => "Domingo",
                "1" => "Lunes",
                "2" => "Martes",
                "3" => "Miércoles",
                "4" => "Jueves",
                "5" => "Viernes",
                "6" => "Sábado"
            };

            return $dEsp;
        }

function nombreMes()
        {
            $mes = date('n');

            $mEsp = match ($mes)
            {
                "1" => "Enero",
                "2" => "Febrero",
                "3" => "Marzo",
                "4" => "Abril",
                "5" => "Mayo",
                "6" => "Junio",
                "7" => "Julio",
                "8" => "Agosto",
                "9" => "Septiembre",
                "10" => "Octubre",
                "11" => "Noviembre",
                "12" => "Diciembre"
            };

            return $mEsp;
        }
?>