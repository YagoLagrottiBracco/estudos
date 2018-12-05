<?php
    //FUNÇÕES RECURSIVAS

    function sum($value) {
        $sum = 0;
        for ($i = 1; $i <= $value; $i++) {
            $sum += $i;
        }
        return $sum;
    }

    echo 'Normal: '.sum(5).'<br>';

    //SIMPLIFICANDO
    function sumRecursive($value) {
        return ($value) ? ($value + sumRecursive($value - 1)) : 0;
    }

    echo 'Simplificado sem modificar o php.ini: '.sumRecursive(998).'<br>'; //MÁXIMO DE NESTING LEVEL DEFINIDO NO PHP.INI

    ini_set('xdebug.max_nesting_level', 130);

    echo 'Simplificado modificando com o ini_set: '.sumRecursive(128).'<br><br>'; //MÁXIMO DE NESTING LEVEL DEFINIDO PELO INI_SET

    function subtrai($num){
        if ($num == 0){
            return $num;
        }
        echo $num.'<br>';
        subtrai($num - 1);
    }

    subtrai(5);

    echo '<br><br>';

    function fatorial($num){
        return ($num) ? $num * fatorial($num - 1) : 1;
    }

    echo fatorial(5);