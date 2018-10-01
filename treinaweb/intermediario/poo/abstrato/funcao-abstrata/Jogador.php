<?php

class Jogador extends Ator {
  protected function setVida() {
    $this->vida = 100;
  }
  
  public function atirar() {
    echo 'Atira no inimigo<br>';
  }
}