<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

require 'Cliente.php';

try {
  $cli = new Cliente;
  
  $cli->setNome('Yago Lagrotti Bracco');
  $cli->setEmail('testando@teste.tst');
  
  var_dump($cli);
} catch(ErrorException $erEx) {
  echo $erEx->getTraceAsString();
} catch(Exception $ex) {
  echo 'Erro ao tentar logar: '.$ex->getMessage().'<br>';
}

