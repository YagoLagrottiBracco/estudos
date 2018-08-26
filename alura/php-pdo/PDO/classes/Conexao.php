<?php
    class Conexao {
        public static function pegarConexao() {
            $dadosDb = ['host'      => 'localhost',
                        'nomeBanco' => 'estoque',
                        'usuario'   => 'root',
                        'senha'     => ''];

            return new PDO('mysql:host='.$dadosDb['host'].';dbname='.$dadosDb['nomeBanco'], $dadosDb['usuario'], $dadosDb['senha']);
        }
    }