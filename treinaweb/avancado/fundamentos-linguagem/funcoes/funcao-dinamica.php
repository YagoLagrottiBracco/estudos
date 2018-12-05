<?php
    //FUNÇÕES DINAMICAS
    function somar($a, $b) {
        return $a + $b;
    }

    $closure = function ($a, $b) {
        return $a * $b;
    };

    $string = 'somar';
    echo call_user_func($string, 10, 20);
    echo '<br>';
    echo call_user_func($closure, 2, 50);
    echo '<br><br><br>';

    class Robot {
        public function talk($nome, $sobrenome){
            echo 'Robo falando: Olá '.$nome.' '.$sobrenome;
        }

        public function parametros(){
            echo '<pre>';
            print_r(func_get_args());
            echo '<pre>';
        }
    }

    call_user_func(['Robot', 'talk'], 'Yago', 'Lagrotti Bracco');
    echo '<br>';
    call_user_func_array(['Robot', 'talk'], ['Yago', 'Lagrotti Bracco']);
    echo '<br>';
    call_user_func_array('Robot::talk', ['Yago', 'Lagrotti Bracco']);