<?php

  $nome = 'Ricardo';

  $dados = [
    'nome' => 'TreinaWeb',
    'email' => 'treinaweb@treinaweb.com.br',
    'telefone' => '99-9999-9999',
    'site' => 'http://www.treinaweb.com.br/'
  ];

  extract($dados, EXTR_PREFIX_ALL, 'extr1');

  echo $nome.'<br>';
  echo $extr1_nome.'<br>';
  echo $extr1_email.'<br>';
  echo $extr1_telefone.'<br>';
  echo $extr1_site;
