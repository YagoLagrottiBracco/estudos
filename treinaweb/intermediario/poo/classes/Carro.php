<?php

class Carro {
    protected $marca;
    public $modelo;
    public $qtdPortas;
    public $cor;
    public $ano;

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }
}

$i30 = new Carro();
$i30->setMarca('Hyundai');

echo 'A marca do carro é: '.$i30->getMarca();