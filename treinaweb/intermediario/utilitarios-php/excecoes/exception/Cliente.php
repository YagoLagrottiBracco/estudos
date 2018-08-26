<?php

class Cliente {
  protected $nome;
  protected $email;
  
  public function setNome($nome) {
    if (mb_strlen($nome, 'utf8') < 3) {
      throw new Exception('Nome deve conter mais que 2 caracteres.', 1);
    }
    $this->nome = $nome;
  }
  
  public function setEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new ErrorException('Email inválido', 2);
    }
    $this->email = $email;
  }
}