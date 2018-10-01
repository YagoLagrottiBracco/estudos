<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

require 'classes/Db.php';

$db = new Db('mysql', '192.168.2.253', 'yago_teste', 'root', 'bb8-c3po-r2d2');

// $func = $db->select('SELECT * FROM funcionario WHERE id < :id', ['id' => 5]);

$db->insert('funcionario', [
  'nome'     => 'Ana',
  'email'    => 'ana@dominio.com.br',
  'endereco' => 'Rua de teste',
  'telefone' => '00 0000-0000'
]);

echo "O id: $id";

$func = $db->select('SELECT * FROM funcionario');

var_dump($func);