<?php

function foo(&$var) {
    $var++; // Incrementa $var
    var_dump($var); // 10
}

// Inicializa a variável $valor
$valor = 9;

// Passa a variável $valor para a função foo()
foo($valor);

// Imprime o valor da variável $valor
var_dump($valor); // 10


$a = 5;
$b =& $a;

echo $b;

$a = 10;
$c =& $b;

echo $b;
