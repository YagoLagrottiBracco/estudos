<?php

//FUNÇÃO DE REFERENCIA
echo 'Função de referencia</br>';
$valor1 = 20;

function &meuValor() {
    global $valor1;
    return $valor1;
}

$valor2 =& meuValor();
$valor2 = 25;

var_dump($valor1, $valor2);

//FUNÇÃO RECURSIVA
echo '</br>Função de recursividade</br>';
function funcaoRecursiva($num) {
    if ($num < 5) {
        printf("%d\n", $num);
        funcaoRecursiva($num + 1);
    }
}

funcaoRecursiva(1);

echo '</br>Função de recursividade com soma</br>';
function sum($value) {
    $sum = 0;
    for ($i = 1; $i <= $value; $i++) {
        $sum += $i;
    }
    return $sum;
}

echo sum(5);

echo '</br>Função simplificada de recursividade com soma</br>';

ini_set('xdebug.max_nesting_level', 130);

function sumRecursive($value) {
    return ($value) ? ($value + sumRecursive($value - 1)) : 0;
}

echo sumRecursive(100);

