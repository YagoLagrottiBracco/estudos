<?php

class Db extends PDO {
  public function __construct($sgdb, $host, $db, $user, $password, $persistent = true)
  {
    $options = [
      PDO::ATTR_PERSISTENT => $persistent,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    $dns = sprintf('%s:host=%s;dbname=%s;charset=utf8', $sgdb, $host, $db);
    parent::__construct($dns, $user, $password, $options);
  }
  
  public function select($sql, array $where = [], $all = true, $fetchMode = PDO::FETCH_OBJ)
  {
    $sth = $this->prepare($sql);
    
    foreach ($where as $key => $val) {
      $tipo = (is_int($val)) ? PDO::PARAM_INT : PDO::PARAM_STR;
      $sth->bindValue(":$key", $val, $tipo);
    }
    
    $sth->execute();
    
    if ($all) {
      return $sth->fetchAll($fetchMode);
    }
    return $sth->fetch($fetchMode);
  }
  
  public function insert($table, $data)
  {
    $camposNomes   = implode('`, `', array_keys($data));
    $camposValores = ':' . implode(', :', array_keys($data));
    
    $sql = sprintf('INSERT INTO %s (`%s`) VALUES (%s)', $table, $camposNomes, $camposValores);
    
    $sth = $this->prepare($sql);
    
    foreach ($data as $key => $val) {
      $tipo = (is_int($val)) ? PDO::PARAM_INT : PDO::PARAM_STR;
      $sth->bindValue(":$key", $val, $tipo);
    }
    
    $sth->execute();
    
    return $this->lastInsertId();
  }
}