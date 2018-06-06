<?php

require 'Pessoa.php';
require 'Funcionario.php';
require 'Cliente.php';

$funcionario = new Funcionario('Pedro');
$funcionario->setNascimento('10/07/1985');
$funcionario->setCargo('Analista Desenvolvedor');
$funcionario->setSalario(3200);

$cliente = new Cliente('José');
$cliente->setNascimento('10/12/1978');
$cliente->setCodigo(999);

printf('<p>A idade do %s é %s</p>', $funcionario->getNome(), $funcionario->getIdade());
printf('<p>A idade do %s é %s</p>', $cliente->getNome(), $cliente->getIdade());