<?php

// Instancia a classe mysqli passando os dados de conexão
$db = new mysqli('192.168.2.253', 'root', 'bb8-c3po-r2d2', 'yago_teste');

// Define qual é a codificação de caracteres utilizada pela base de dados
$db->set_charset('utf8');

// Recebe o id do funcionário via $_GET
$id = $db->real_escape_string($_GET["id"]);

// Recupera os dados desse funcionário
$sql = <<<SQL
SELECT
    nome, email
FROM
    funcionario
WHERE
    id={$id}
SQL;

if( ! $resultado = $db->query($sql)) {
    die('Erro ao executar a query [' . $db->error . ']');
}

// Imprime os dados do funcionário
while($row = $resultado->fetch_assoc()) {
    vprintf("<p><b>Nome:</b> %s <br /><b>E-mail:</b> %s </p>", $row);
}