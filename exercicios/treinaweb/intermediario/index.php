<?php ini_set('display_errors', 'On');
error_reporting(E_ALL);

require 'autoload.php';
require 'classes/Validacao.php';

$digito = '12345';

if (!(new Validacao)->numeros($digito)) {
  echo 'Digito incorreto, apenas números, no mínimo 5 caracteres e no máximo 40.<br>';
} else {
  echo 'Digito correto.<br>';
}

$obAgencias      = new Agencias(16, 'R. Dr. Carlos Carvalho Rosa, 115');
$obClientes      = new Clientes('Yago Lagrotti Bracco', 'yago@wapstore.com.br', 'R. Emília Santos, 324');
$obContaCorrente = new Corrente(006514, 654.98, 005, '20 Operações efetuadas esta semana.', 1100.00);
$obContaPoupanca = new Poupanca(0005554, 8548.54, 007, '3 Operações de poupança foram efetuadas este mês.');

echo $obContaCorrente->extratoConta();
echo "<br>";
$obContaCorrente->creditoConta(423.23);
echo "<br>";
echo $obContaCorrente->extratoConta();
echo "<br>";
echo $obContaPoupanca->taxaRetornoMes();
echo "<br>";
echo $obContaCorrente->extratoTotal();