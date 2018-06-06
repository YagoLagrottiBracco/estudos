<?php

class Fornecedor extends Pessoa {
  public $cnpj;
  
  public function exibe() {
    echo 'Fornecedor<br>';
    echo 'Código: '.$this->codigo.'<br>';
    echo 'Nome: '.$this->nome.'<br>';
    echo 'Email: '.$this->email.'<br>';
    echo 'CNPJ: '.$this->cnpj.'<br>';
  }
}
