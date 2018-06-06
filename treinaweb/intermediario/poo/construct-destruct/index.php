<?php
require 'construct-destruct.php';

$arquivo = new Arquivo('teste.docx', 'Lorem Ipsum');
$arquivo->salvar();

// Print
printf('<p>-> O script continuou ...</p>');

// Remove o objeto da memória.
unset($arquivo);

// Print
printf('<p>-> O script finalizou aqui ...</p>');