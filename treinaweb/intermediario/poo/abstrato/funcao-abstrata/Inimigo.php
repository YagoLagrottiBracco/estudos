<?php

class Inimigo extends Ator {
  protected function setVida() {
    $this->vida = 150;
  }
  
  public function darPorrada() {
    echo 'Inimigo da porrada no jogador!<br>';
  }
}
