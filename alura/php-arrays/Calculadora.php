<?php

namespace Alura\Arrays;

class Calculadora
{
    public function calculaMedia(array $notas): ?string
    {
        $quantidadeNotas = sizeof($notas);

        if ($quantidadeNotas <= 0) {
            echo "<p>Não foi possível executar o calculo.</p>";
            exit();
        }

        $soma = array_sum($notas);
        $calculo = $soma / $quantidadeNotas;
        
        return "<p>Sua nota média é de: {$calculo}.</p>";
    }

    public function exibeNotas(array $notas): ?string
    {
        if (sizeof($notas) <= 0) {
            echo "<p>Não foi possível executar o calculo.</p>";
            exit();
        }

        $retorno = '';

        foreach ($notas as $chave => $valor) {
            $retorno .= "<p>A nota de {$chave} é: {$valor}.</p>";
        }

        return $retorno;
    }
}
