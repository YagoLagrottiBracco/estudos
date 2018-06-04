<?php

function func1($parm)
{
    echo 'função 1 com par: ' . $parm;
}

function func2($parm)
{
    echo 'função 2 com par: ' . $parm;
}

$minha_str = 'func1';
$outra_str = 'func2';


$minha_str('Qualquer coisa aqui');
echo '<br>';
$outra_str('Qualquer coisa aqui também');
