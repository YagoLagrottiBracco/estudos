<?php

$dns = 'mysql:host=192.168.2.253;port=3306;dbname=yago_teste;charset=utf8';
$usuario = 'root';
$senha = 'bb8-c3po-r2d2';

$opcoes = [
  PDO::ATTR_PERSISTENT => true
];

try {
  $pdo = new PDO($dns, $usuario, $senha, $opcoes);
} catch (PDOException $e) {
  exit('Erro: ' . $e->getMessage());
}

$funcionarios = $pdo->query('SELECT id, nome, email FROM funcionario');

?>

<table border="1">
  <tr>
    <td>Id</td>
    <td>Nome</td>
    <td>E-mail</td>
  </tr>
  <?php while($func = $funcionarios->fetchObject()): ?>
    <tr>
      <td><?=$func->id;?></td>
      <td><?=$func->nome;?></td>
      <td><?=$func->email;?></td>
    </tr>
  <?php endwhile ?>
</table>