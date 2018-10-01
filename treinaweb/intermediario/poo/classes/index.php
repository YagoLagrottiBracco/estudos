<?php 
require 'Livro.php';

$livro1 = new Livro();

$livro1->codigo = 8;
$livro1->titulo = 'Senhor dos aneis';
$livro1->autor  = 'JRR Tolkien';
$livro1->valor  = 56.50;

$livro1->cadastrar();
echo "<br>";
$livro1->mostrar();