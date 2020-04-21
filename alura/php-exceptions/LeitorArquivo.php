<?php

class LeitorArquivo
{
    private $arquivo;

    public function __construct($arquivo)
    {
        $this->arquivo = $arquivo;    
    }

    public function abrirArquivo()
    {
        echo "abrindo arquivo" . PHP_EOL;
    }

    public function lerArquivo()
    {
        echo "lendo arquivo" . PHP_EOL;
    }

    public function fecharArquivo()
    {
        echo "fechando arquivo" . PHP_EOL;
    }

    public function escreverArquivo()
    {
        echo "escrevendo arquivo" . PHP_EOL;
    }
}
