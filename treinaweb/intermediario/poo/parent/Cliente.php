<?php

class Cliente extends Pessoa {
  public $cpf;
  
  public function exibe() {
    echo 'Cliente<br>';
    parent::exibe();
    echo 'CPF: '.$this->cpf.'<br>';
  }
}
