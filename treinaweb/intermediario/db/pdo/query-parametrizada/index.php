<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

try {
  $pdo = new PDO('mysql:host=192.168.2.253;post=3306;dbname=yago_teste', 'root', 'bb8-c3po-r2d2', [
    PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
  ]);
  
  $id = $_GET['id'];
  
  $stmt = $pdo->prepare('SELECT * FROM funcionario WHERE id=:id'); // and nome=:nome
  
  $stmt->bindParam(':id', $id, PDO::PARAM_INT); //bindParam recebe a variavel por referencia e o bindValue não
  //$stmt->bindValue(':nome', 'Pedro Marcos', PDO::PARAM_STR);
  
  $stmt->execute();
  
  $funcs = $stmt->fetchAll();
  
  var_dump($funcs);
} catch (PDOException $ex) {
  echo $ex->getMessage();
}
