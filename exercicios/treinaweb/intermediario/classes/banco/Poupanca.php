<?php

class Poupanca extends Conta{
  public $taxaJurosMes = 2.75;
  
  public function __construct($numeroConta = null, $saldo = null, $agencia = null, $historicoOperacoes = null) {
    $this->numeroConta        = $numeroConta;
    $this->saldo              = $saldo;
    $this->agencia            = $agencia;
    $this->historicoOperacoes = $historicoOperacoes;
  }
  
  public function taxaRetornoMes(){
    $valorRetornoMesTotal = $this->saldo * $this->taxaJurosMes / 100;
    $valorRetornoMes = $valorRetornoMesTotal + $this->saldo;
    $mensagem = "O seu rendimento por mês será de: R$ ".number_format($valorRetornoMesTotal, 2)." <br>
                 Resultando em: R$ ".number_format($valorRetornoMes, 2);
                 
    return $mensagem;
  }
}
