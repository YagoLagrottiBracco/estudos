<?php

require 'Pessoa.php';
require 'Fornecedor.php';
require 'Cliente.php';

$cli    = new Cliente;
$fornec = new Fornecedor;

$cli->codigo    = 12;
$cli->nome      = 'Ricardo';
$cli->email     = 'ric@gmail.com';
$fornec->codigo = 123;
$fornec->nome   = 'Microsoft';
$fornec->email  = 'microsoft@msn.com';

$cli->exibi();
$fornec->exibi();