<?php

class Wild_animal extends Animal {
  public $habitat;

  public function __construct($type, $age, $habitat) {
      parent::__construct($type, $age);
      $this->habitat = $habitat;
  }

  public function hunt() {
    return "$this->type is hunting in $this->habitat.<br>";
  }
}
