<?php

require 'Validacao.php';

Validacao::validaEmail('teste@test.tst');
Validacao::verdadeiro(true);

echo Validacao::$tipo;

echo Validacao::getTipo();