<?php

// Define a marcação do XML dentro de uma variável
$xml = <<<XML
<alunos>
  <aluno>
    <nome>Thiago</nome>
    <curso>PHP Básico</curso>
  </aluno>
  <aluno>
    <nome>Pedro</nome>
    <curso>PHP Intermediário</curso>
  </aluno>
  <aluno>
    <nome>Cristina</nome>
    <curso>PHP Avançado</curso>
  </aluno>
</alunos>
XML;

// Parseia a marcação XML
$documento = simplexml_load_string($xml);

// Imprime os objetos resultantes
foreach( $documento as $aluno ) {
    printf('Nome: %s <br> Curso: %s <br><br>', $aluno->nome, $aluno->curso);
}