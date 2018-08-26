<?php

try {
  $pdo = new PDO('mysql:host=192.168.2.253;post=3306;dbname=yago_teste', 'root', 'bb8-c3po-r2d2', [
    PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
  
  // $qtd = $pdo->exec("
  //   INSERT INTO funcionario
  //     (nome, email, endereco, telefone)
  //   VALUES
  //     ('Roberto Pereira', 'rob@gmail.com', 'Rua Aramar, 500', '12 3445-4488')
  // ");
  
  // echo "Registro(s) alterado(s): ".$qtd;

  // $qtd = $pdo->exec("
  //   UPDATE
  //     funcionario
  //   SET
  //     telefone = '00 0000-0000'
  // ");

  $qtd = $pdo->exec("
    DELETE FROM
      funcionario
    WHERE
      id in (2, 6, 7, 10)
  ");
  
  $stmt = $pdo->query('SELECT * FROM funcionario');
  $funcs = $stmt->fetchAll();
  
  var_dump($funcs);
  
} catch (PDOException $ex) {
  echo $ex->getMessage();
}

