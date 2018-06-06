<?php

class Corrente extends Conta {
  public $limiteCredito;
  public $porcentagemJuros = 5.25;
  
  public function __construct($numeroConta = null, $saldo = null, $agencia = null, $historicoOperacoes = null, $limiteCredito = null) {
    $this->numeroConta      = $numeroConta;
    $this->saldo            = $saldo;
    $this->agencia          = $agencia;
    $this->limiteCredito    = $limiteCredito;
  }
  
  public function extratoTotal() {
    return $this->saldo > 0 ? 'Conta Corrente positiva.' : 'Conta Corrente negativa.';
  }
}