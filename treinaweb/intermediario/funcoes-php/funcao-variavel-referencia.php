<?php

// Define a função
function removerChave(&$array, $item) {
    if (isset($array[$item])) {
        unset($array[$item]);
        return true;
    }

    return false;
}

// Define o array
$carros = [
    "uno" => [
        "ano" => 2015,
        "motor" => 1.0
    ],
    "vectra" => [
        "ano" => 2011,
        "motor" => 1.6
    ],
    "hb20" => [
        "ano" => 2015,
        "motor" => 1.6
    ]
];

if (removerChave($carros, "uno")) {
    var_dump($carros);
} else {
    echo "O valor informado não existe no Array.";
}
