<?php

$obj = new stdClass;

$obj->valor1 = 'Um valor aqui 1';
$obj->valor2 = 'Um valor aqui 2';
$obj->valor3 = 'Um valor aqui 3';

var_dump($obj);

$arrObj = (object)[
  'nome' => 'Pedro Lima',
  'end' => 'Rua 123, teste 4',
  'tel' => '11 1233-7899'
];

var_dump($arrObj);

foreach ($arrObj as $prop => $val) {
  echo "$prop: $val<br>";
}