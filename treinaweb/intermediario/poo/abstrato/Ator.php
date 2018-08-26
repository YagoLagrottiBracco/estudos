<?php

abstract class Ator {
  protected $vida;
  
  public function __construct() {
    $this->setVida();
  }
  
  abstract protected function setVida();
  
  public function tomarDano() {
    $this->vida -= 15;
  }
}