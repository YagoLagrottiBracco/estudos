<?php

require 'Pessoa.php';
require 'Fornecedor.php';
require 'Cliente.php';

$cli    = new Cliente;
$fornec = new Fornecedor;

$cli->codigo    = 1;
$cli->nome      = 'Carlos';
$cli->email     = 'carlos@teste.com';
$cli->cpf       = '232.587.458-12';
$fornec->codigo = 5;
$fornec->nome   = 'Microsoft';
$fornec->email  = 'microsoft@msn.com';
$fornec->cnpj    = '264.125.492-/0001-87';

$cli->exibe();
$fornec->exibe();