<?php

use Alura\Banco\Modelo\Conta\{Titular,ContaPoupanca, ContaCorrente, Conta};
use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Service\{ControladorDeBonificacoes, Autenticador};
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorVideo};

require_once 'autoload.php';

$endereco      = new Endereco('Guararapes', 'Industrial', 'Rua Luis Perón', '89');
$cpf           = new CPF('123.456.789-10');
$titular       = new Titular($cpf, 'Yago Lagrotti Bracco', $endereco);
$primeiraConta = new ContaCorrente($titular);

$primeiraConta->deposita(500);
$primeiraConta->saca(100);

var_dump($primeiraConta);

$endereco      = new Endereco('Guararapes', 'Industrial', 'Rua Luis Perón', '89');
$cpf           = new CPF('123.456.789-10');
$titular       = new Titular($cpf, 'Yago Lagrotti Bracco', $endereco);
$segundaConta = new ContaPoupanca($titular);

$segundaConta->deposita(500);
$segundaConta->saca(100);

var_dump($segundaConta);

$cpf = new CPF('123.456.789-10');
$desenvolvedor = new Desenvolvedor('Windy', $cpf, 3500);
$controlador = new ControladorDeBonificacoes();

var_dump($desenvolvedor);

$desenvolvedor->setNome('João Bracco Netto');

var_dump($desenvolvedor);

$controlador->setBonificacaoDe($desenvolvedor);

$gerente = new Gerente('Elaine Maria Lagrotti Bracco', $cpf, 2500);
$controlador->setBonificacaoDe($gerente);

$diretor = new Diretor('Yago Lagrotti Bracco', $cpf, 4500);
$controlador->setBonificacaoDe($diretor);

$editorVideo = new EditorVideo('Yago Lagrotti Bracco', $cpf, 4500);
$controlador->setBonificacaoDe($editorVideo);

var_dump($gerente);
var_dump($diretor);
var_dump($desenvolvedor);
var_dump($editorVideo);

$desenvolvedor->sobeDeNivel();

var_dump($desenvolvedor);

var_dump($controlador->getTotalBonificacao());

$autenticador = new Autenticador();
$autenticador->tentaLogin($diretor, '4321');
$autenticador->tentaLogin($gerente, '4321');
$autenticador->tentaLogin($titular, 'abcd');

$umEndereco = new Endereco('teste1', 'teste1', 'teste1', 'teste1');
$doisEndereco = new Endereco('teste2', 'teste2', 'teste2', 'teste2');
$tresEndereco = new Endereco('teste3', 'teste3', 'teste3', 'teste3');
$quartroEndereco = new Endereco('teste4', 'teste4', 'teste4', 'teste4');
$cincoEndereco = new Endereco('teste5', 'teste5', 'teste5', 'teste5');

echo $umEndereco;
echo $doisEndereco;
echo $tresEndereco;
echo $quartroEndereco;
echo $cincoEndereco;

echo $umEndereco->rua;
echo $umEndereco->numero;
echo $umEndereco->bairro;
echo $umEndereco->cidade;