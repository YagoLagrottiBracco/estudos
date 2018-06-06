<?php
class Arquivo {
  protected $nome;
  protected $conteudo;

  public function __construct($nome = '', $conteudo = '') {
    $this->nome = $nome;
    $this->conteudo = $conteudo;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function setConteudo($conteudo) {
    $this->conteudo = $conteudo;
  }

  public function salvar() {
    printf('<p>O arquivo <strong>%s</strong> foi salvo.</p>', $this->nome);
    printf('<p><strong>Conteúdo:</strong> %s</p>', $this->conteudo);
  }
  
  public function __destruct() {
    printf('<p style=\'color:red;\'>** O objeto foi liberado da memória.</p>');
  }
}