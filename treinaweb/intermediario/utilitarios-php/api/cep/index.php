<?php 

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$cep = $_GET['cep'];

$xml = file_get_contents('http://api.postmon.com.br/v1/cep/'.$cep.'?format=xml');

$end = new SimpleXMLElement($xml);

echo $end->cidade;