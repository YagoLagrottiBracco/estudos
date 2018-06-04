<?php
class Carro {
    public $marca;
    public $modelo;
    public $qtdPortas;
    public $cor;
    public $ano;
    
    public function acelerar() {
      echo '-> [Aumentando a aceleração do veículo ...] <br>';
    }
    
    public function frear() {
      echo '-> [Freando o veículo ...]';
    }
}

$i30 = new Carro();
$i30->marca = 'Hyundai';
$i30->modelo = 'i30';

$i30->acelerar();
$i30->frear();