<?php

$hora1 = new DateTime("12:10:10");
$hora2 = new DateTime("16:20:10");

$diferenca = $hora1->diff($hora2);

vprintf("%d horas, %d minutos e %d segundos<br>", [
    $diferenca->h,
    $diferenca->i,
    $diferenca->s
]);

echo '<br><img src="../../../../material-de-apoio/diff-data.png"><br>';