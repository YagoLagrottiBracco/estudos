<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');

include "autoload.php";

$contaJoao = new ContaCorrente("Joao","1212","343477-9",2000.00);
$contaMaria = new ContaCorrente("Maria","1212","343423-9",6000.00);
$contaJose = new ContaCorrente("Jose","1212","343423-9",6000.00);
$contaFernanda = new ContaCorrente("Fernanda","1212","343423-9",6000.00);
$contaBernardo = new ContaCorrente("Bernardo","1212","343423-9",6000.00);
$contaFelipte = new ContaCorrente("Felipte","1212","343423-9",6000.00);
$contaLucas = new ContaCorrente("Lucas","1212","343423-9",6000.00);

echo ContaCorrente::$totalDeContas . PHP_EOL;
echo ContaCorrente::$taxaOperacao . PHP_EOL;

try {
    $contaJoao->transferir(1000, $contaMaria);
} catch (InvalidArgumentException $erro) {
    echo $erro->getMessage() . PHP_EOL;
} catch (\exception\SaldoInsuficienteException $erro) {
    $contaJoao->totalSaquesNaoPermitidos++;
    echo $erro->getMessage() . "Saldo é de: {$erro->saldo} Valor do saque: {$erro->valor}" . PHP_EOL;
} catch (Exception $erro) {
    echo $erro->getPrevious()->getTraceAsString();
    echo $erro->getTraceAsString();
    echo $erro->getPrevious()->getMessage() . PHP_EOL;
    echo $erro->getMessage() . PHP_EOL;
}

try {
    $contaJoao['teste'];
} catch (Error $erro) {
    echo $erro->getMessage() . PHP_EOL;
}

try {
    $contaJoao->sacar(1000);
} catch (\exception\SaldoInsuficienteException $erro) {
    $contaJoao->totalSaquesNaoPermitidos++;
    echo $erro->getMessage() . PHP_EOL;
}

echo ContaCorrente::$operacaoNaoRealizada;
echo "<br>";
var_dump($contaJoao);