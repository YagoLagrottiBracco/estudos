<?php
    //FUNÇÕES POR REFERÊNCIAS
    $valor1 = 20;

    function &meuValor() {
        global $valor1;
        return $valor1;
    }

    $valor2 =& meuValor();
    $valor2 = 25;

    var_dump('valor1 = '.$valor1, 'valor2 = '.$valor2);