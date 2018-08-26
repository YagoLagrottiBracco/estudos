<?php

$dados = <<<'XML'
    <curso>
        <nome>PHP Intermediário</nome>
        <categoria>Programação</categoria>
    </curso>
    <curso>
        <nome>PHP Avançado</nome>
        <categoria>Programação</categoria>
    </curso>
XML;

echo $dados;

$dados = <<<'HTML'
TreinaWeb Cursos, o interpretador não entenderá $isso como sendo uma variável.
<br /><br />
<b>Teste HTML</b>
HTML;

echo $dados;

$dados = <<<'TEXT'
 TreinaWeb Cursos, o interpretador não entenderá $isso como sendo uma variável.
<br /><br />
<b>Teste HTML</b>
TEXT;

echo $dados;

$isso = '<b>(interpretou)</b>';

$dados = <<<HTML
 O interpretador entenderá $isso
como sendo uma variável.
<br /><br />
<b>Teste HTML</b>
HTML;

echo $dados;

$dados = <<<HTML
 O interpretador entenderá {$isso}
como sendo uma variável.
<br /><br />
<b>Teste HTML</b>
HTML;

echo $dados;

$data = <<<TEXT

HEREDOC

TEXT;

echo $dados;

$data = <<< 'TEXT'

NOWDOC

TEXT;

echo $dados;

$nome = 'TreinaWeb';

// HEREDOC
$heredoc = <<<MEUTEXTO
$nome: Meu texto aqui sem conflitar com aspas simples "'" ou aspas duplas
exemplo """
MEUTEXTO;

$nowdoc = <<<'OUTROTEXTO'
Aqui dentro tem now DOC $nome
OUTROTEXTO;

echo $nowdoc;
