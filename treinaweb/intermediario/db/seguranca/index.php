<?php

$id = isset($_GET["id"]) ? $_GET["id"] : null;

if( !is_numeric($id)) {
  die('Informe um id válido.');
}

printf('SELECT nome, email FROM funcionarios WHERE id=%s', $id);