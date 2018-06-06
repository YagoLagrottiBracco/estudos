<?php
class Cliente{
  public $nome;
  protected $email;
  private $info = 'ClienteBase';
  
  public function setEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $this->email = $email;
      return true;
    }
    exit('Email é inválido');
  }
  
  public function getEmail() {
    $this->exibir();
    return $this->email;
  }
  
  protected function exibir() {
    echo $this->info;
  }
}