<?php

  ini_set('display_errors', 'On');
  error_reporting(E_ALL);

  require 'Calculadora.php';

  try {
    $calc = new Calculadora(20);
    $calc->dividirPor(0);
    printf('Resultado da divisão: %s', $calc->getValor());
  } catch (Exception $e) {
    echo 'Ops. Algo deu errado.';
  }