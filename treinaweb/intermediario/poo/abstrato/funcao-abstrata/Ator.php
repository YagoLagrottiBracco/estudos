<?php

abstract class Ator {
  protected $vida = 100;
  
  public function tomarDano() {
    $this->vida -= 20;
  }
}
