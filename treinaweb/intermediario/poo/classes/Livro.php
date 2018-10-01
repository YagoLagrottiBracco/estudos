<?php
class Livro {
  public $codigo;
  public $titulo;
  public $autor;
  public $valor;
  
  public function cadastrar() {
    echo "Cadastra livro '$this->titulo' no banco de dados";
  }
  
  public function mostrar() {
    echo "Código: $this->codigo<br>";
    echo "Título: $this->titulo";
  }
}