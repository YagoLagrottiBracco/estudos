<?php

// Representação da cor em Hexadecimal: #1E4262
// Representação da cor em Decimal: 1983074 = var_dump(0x1E4262)
// Representação da cor em Binário: 000111100100001001100010

// Valor decimal da cor.
// Mas também pode ser usado o valor hexadecimal dela com a notação do PHP para isso: 0x1E4262
$cor = 1983074;

// red
$r = ($cor >> 16) & 0xFF;

//                   $r = 0000000000011110 = 30
//                 0xFF = 0000000011111111 = 255
// Resultado Comparação = 0000000000011110 = 30

// green
$g = ($cor >> 8) & 0xFF;

//                   $g = 0000000001000010 = 66
//                 0xFF = 0000000011111111 = 255
// Resultado Comparação = 0000000001000010 = 66

// blue
$b = $cor & 0xFF;

//                   $b = 0000000001100010 = 98
//                 0xFF = 0000000011111111 = 255
// Resultado Comparação = 0000000001100010 = 98

// Imprime o equivalente RGB da cor
echo "<div style='color:#fff;background-color: rgb(".$r.", ".$g.", ".$b.");'>TreinaWeb - RGB</div><br>";

// Imprime a cor pelo seu valor hexadecimal
echo "<div style='color:#fff;background-color: #1E4262;'>TreinaWeb - Hexadecimal</div>";

var_dump( 0xFF * 0xFF * 0xFF ); // 0xFF esse valor hexadecimal equivale a 255 em decimal

var_dump( 255 * 255 * 255 ); // Equivalente

$r = ($cor >> 16) & 0xFF;
$g = ($cor >> 8) & 0xFF;
$b = $cor & 0xFF;