<?php

require 'File.php';

$file = new File('Z:\sites\testes\yago\arquivos\teste.txt');
$file->escreve('Hello World!');