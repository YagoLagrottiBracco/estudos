<?php

class Calculadora {
  protected $valor;

  public function __construct($valor) {
    $this->setValor($valor);
  }

  public function setValor($valor) {
    $this->valor = $valor;
  }

  public function getValor() {
    return number_format($this->valor, 2);
  }

  public function dividirPor($por) {
    if($por === 0) {
      throw new Exception('Não é possível dividir por zero.');
    }

    $this->valor /= $por;
  }
}