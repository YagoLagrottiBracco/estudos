<?php

namespace Zend\Library;

use DateTime;

class Validation {
  public function data() {
    $data = new DateTime;
    echo $data->format('Y');
  }
}