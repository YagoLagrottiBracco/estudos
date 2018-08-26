<?php
require 'Cliente.php';
require 'cliente-pf.php';

$cli = new Cliente();

$cli->nome = 'Richard';
$cli->setEmail('teste@teste.tst');

echo $cli->getEmail();

$pf = new ClientePf();

$pf->teste2();