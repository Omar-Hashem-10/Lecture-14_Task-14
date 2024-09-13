<?php


class Pet extends Animal{
  protected $owner;
  protected bool $is_vaccinated;

  public function __construct($type, $age, $owner, bool $is_vaccinated)
  {
    parent::__construct($type, $age);
    $this->owner = $owner;
    $this->is_vaccinated = $is_vaccinated;
  }

  public function play() {
    return "$this->type is playing with their owner $this->owner.<br>";
}
}