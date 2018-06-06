<?php

function autoload($class) {
  $path = __DIR__."/classes/banco/$class.php";
  if (file_exists($path)) {
    require $path;
    return true;
  }
  return false;
}

spl_autoload_register('autoload');
