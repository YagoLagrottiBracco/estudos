<?php

class Pessoa {
  public $codigo;
  public $nome;
  public $email;
  
  public function exibe() {
    echo 'Código: '.$this->codigo.'<br>';
    echo 'Nome: '.$this->nome.'<br>';
    echo 'Email: '.$this->email.'<br>';
  }
}
