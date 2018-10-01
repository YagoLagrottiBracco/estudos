<?php

function subtrai($num)
{
    if ($num == 0) {
        return $num;
    }
    echo $num . '<br>';
    subtrai($num - 1);
}

function fatorial($num)
{
    return ($num) ? $num * fatorial($num - 1) : 1;
}

echo fatorial(5);