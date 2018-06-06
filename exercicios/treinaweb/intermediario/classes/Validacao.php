<?php
class Validacao {
  function numeros($var) {
    $pattern = '/^[0-9]{5,40}+$/';
    return preg_match_all($pattern, $var) ? true : false;
  }
}
