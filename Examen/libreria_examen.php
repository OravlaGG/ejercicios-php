<?php

function distanciaHamming(string $stringA, string $stringB, bool $caseSensitive = true): int
{
    $a = [];
    $b = [];
    $tmp = "";
    $dist = 0;

    if (strlen($stringA) != strlen($stringB))
    {
        $dist = -1;
    }
    else
    {
        if(!$caseSensitive)
        {
            $tmp = strtoupper($stringA);
            $a = str_split($tmp);
            $tmp = strtoupper($stringB);
            $b = str_split($tmp);
        }
        else
        {
            $a = str_split($stringA);
            $b = str_split($stringB);
        }

        for($i = 0; $i < count($a); $i++)
        {
            if($a[$i] != $b[$i])
            {
                $dist++;
            }
        }
    }
    return $dist;
}



