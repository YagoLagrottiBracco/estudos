<?php

require 'Ator.php';
require 'Jogador.php';
require 'Inimigo.php';

$jogador = new Jogador;
$inimigo = new Inimigo;

$jogador->atirar();
$inimigo->tomarDano();

$inimigo->darPorrada();
$jogador->tomarDano();
