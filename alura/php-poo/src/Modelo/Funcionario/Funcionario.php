<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{
    use \Alura\Banco\Modelo\AcessoPropriedades;

    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function setNome(string $nome): void
    {
        parent::validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao(): float;
}
