<?php

class Sea_animal extends Animal {
  public $waterType;

  public function __construct($type, $age,$waterType) {
    parent::__construct($type, $age);
    $this->waterType = $waterType;
  }

  public function swim() {
    return "$this->type is swimming in $this->waterType water.<br>";
  }
}
