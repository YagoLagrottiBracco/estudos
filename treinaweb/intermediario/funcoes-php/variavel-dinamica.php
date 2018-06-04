<?php

// O array dos dados
$dados = [
    'nome' => 'TreinaWeb',
    'email' => 'treinaweb@treinaweb.com.br',
    'telefone' => '99-9999-9999',
    'site' => 'http://www.treinaweb.com.br'
];

foreach ($dados as $chave => $valor) {
    // Cria a variável dinâmica com o nome da respectiva chave do array
    $$chave = $valor;
}

// Acessa as variáveis criadas dinamicamente
echo $nome . "<br>";
echo $email . "<br>";
echo $telefone . "<br>";
echo $site . "<br>";

$destino = 'cidade';
$$destino = 'Porto Alegre';

echo "Cidade de destino é: $cidade <br>";







$teste = 'explicacao';
$$teste = 'este daqui é um teste para entender melhor como funciona a variavel dinamica.';

echo $explicacao;
