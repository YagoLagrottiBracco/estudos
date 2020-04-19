<?php

require_once 'Calculadora.php';

use Alura\Arrays\Calculadora;


$notas = array(
    'Português' => 9,
    'Matemática' => 3,
    'Geografia' => 10,
    'História' => 5,
    'Química' => 10,
    'Artes' => 8
);

$calculadora = new Calculadora();

echo $calculadora->exibeNotas($notas);
echo $calculadora->calculaMedia($notas);