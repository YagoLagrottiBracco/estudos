<?php

function filtraArray($valor) {
    return ($valor > 8);
}

$valores = [6, 7, 8, 9, 10, 3, 2, 11, 12];

// Filtra o Array removendo todos os valores menores que 8
$novosValores = array_filter($valores, "filtraArray");

// Imprime o novo array
print_r( $novosValores );








$entrada = [6, 7, 8, 9, 10, 3, 2, 11, 12];
$saida = array_filter($entrada, function($v){ return $v > 8; });

// Imprime o novo array
print_r( $saida );








$entrada = [6, 7, 8, 9, 10, 3, 2, 11, 12];

array_walk($entrada, function(&$v) {
    if ($v < 8) {
        // variável alterada por referencia
        $v *= 20;
    }
});

// Imprime o novo array
print_r($entrada);








$saudacao = function($str) {
    return "Hello World, {$str}!";
};

echo $saudacao("boa noite");

$saudacao = "Hello, World!";








// Define a função
$closure = function() use ($saudacao) { echo $saudacao; };

// Chama a função
$closure();







$saudacao = "Hello, World!";

// Define a função
$closure = function() use (&$saudacao) {
    $saudacao = "Novo texto.";
    return $saudacao;
};

// Imprime o resultado da função
var_dump($closure());

// Imprime o valor da variável global 'saudacao'
var_dump($saudacao);










$config = ["parsear" => TRUE];

$formata = function($html) use($config) {
    if( $config["parsear"]===TRUE ) {
        $html = preg_replace('/\[b](.*?)\[\/b]/', '<b>$1</b>', $html);
    }
    return $html;
};

echo $formata('[b]TreinaWeb Cursos[/b]');








$add = function($valor) {
    return function ($outro_valor) use ($valor) {
        return $outro_valor + $valor;
    };
};

$var1 = $add(4);
echo $var1(11);