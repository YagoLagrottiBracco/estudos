<?php

require_once 'Calculadora.php';

use Alura\Arrays\Calculadora;

$calculadora = new Calculadora();

$materias = array(
    'Português',
    'Matemática',
    'Geografia',
    'História',
    'Química',
    'Artes'
);

$notas = array(
    9,
    3,
    7,
    5,
    10,
    9
);

$outrasNotasMateria = array(
    'Português' => 9,
    'Matemática' => 3,
    'Geografia' => 10,
    'História' => 5,
    'Química' => 10,
    'Artes' => 8
);

$nomes = "Yago, Elaine, João, Wagner, Gabriela, Pedro, José, Renato";

$notasMateria = Calculadora::unirMateriasNotas($materias, $notas);

echo $calculadora->exibeNotas($notasMateria);
echo $calculadora->calculaMedia($notasMateria);
echo $calculadora->exibeMenorNota($notasMateria);
echo $calculadora->exibeNomes($nomes, ', ');
echo Calculadora::removerNota(10, $notasMateria);
var_dump(Calculadora::exibirDiferenca($notasMateria, $outrasNotasMateria));
echo Calculadora::verificaMateriaExiste('Geografia', $notasMateria);