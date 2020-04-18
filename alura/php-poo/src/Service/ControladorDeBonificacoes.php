<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    use \Alura\Banco\Modelo\AcessoPropriedades;
    
    private $totalBonificacoes = 0;

    public function setBonificacaoDe(Funcionario $funcionario): void
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotalBonificacao(): float
    {
        return $this->totalBonificacoes;
    }
}
