<?php

class Fornecedor extends Pessoa {
  public $cnpj;
  
  public function exibe() {
    echo 'Fornecedor<br>';
    parent::exibe();
    echo 'CNPJ: '.$this->cnpj.'<br>';
  }
}
