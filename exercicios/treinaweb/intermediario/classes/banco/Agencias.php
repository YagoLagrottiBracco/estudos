<?php

class Agencias {
  public $codigo;
  public $endereco;
  
  public function __construct($codigo = null, $endereco = null) {
    $this->codigo   = $codigo;
    $this->endereco = $endereco;
  }
}