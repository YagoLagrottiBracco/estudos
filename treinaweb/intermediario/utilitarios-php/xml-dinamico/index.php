<?php

  ini_set('display_errors', 'On');
  error_reporting(E_ALL);

$alunos = [
  [
    'id'     => 1,
    'nome'   => 'Pedro',
    'cidade' => 'São Paulo'
  ],
  [
    'id'     => 2,
    'nome'   => 'Ana',
    'cidade' => 'São Paulo'
  ],
  [
    'id'     => 3,
    'nome'   => 'Carla',
    'cidade' => 'Curitiba'
  ],
  [
    'id'     => 4,
    'nome'   => 'Marcos',
    'cidade' => 'Recife'
  ]
];

$dom = new DOMDocument('1.0', 'UTF-8');

$treinaweb = $dom->createElement('treinaweb');

foreach ($alunos as $aluno) {
  settype($aluno, 'object'); //opcional
  $alunoTag = $dom->createElement('aluno');
  $alunoTag->setAttribute('id', $aluno->id);
  $alunoTag->appendChild($dom->createElement('nome', $aluno->nome));
  $alunoTag->appendChild($dom->createElement('cidade', $aluno->cidade));
  $treinaweb->appendChild($alunoTag);
}

$dom->appendChild($treinaweb);
$dom->formatOutput = true;
echo $dom->saveXML();

$dom->save('alunos.xml');

