<?php

abstract class Conta {
  public $numeroConta;
  public $saldo;
  public $agencia;
  public $historicoOperacoes;
  
  public function creditoConta($valorCredito) {
    $valorSaldo = $this->saldo;
    $valorDescontado = $valorSaldo - $valorCredito;
    $this->saldo = ($valorSaldo > $valorDescontado) ? $valorDescontado : 'Saldo Indisponível.';
    
    return $valorSaldo;
  }
  
  public function extratoConta() {
    $mensagem = "Número da agência: $this->agencia<br>
                 Número da conta: $this->numeroConta<br>
                 Saldo da conta: $this->saldo<br>
                 $this->historicoOperacoes";

    return $mensagem;
  }
}