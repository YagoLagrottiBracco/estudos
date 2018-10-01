<?php

class Clientes {
  public $nome;
  public $email;
  public $endereco;
  
  public function __construct($nome = null, $email = null, $endereco = null) {
    $this->nome     = $nome;
    $this->email    = $email;
    $this->endereco = $endereco;
  }
}