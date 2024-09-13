<?php


class Animal{
  protected $type;
  protected $age;

  public function __construct($type, $age)
  {
    $this->type = $type;
    $this->age = $age;
  }

  public function eat()
  {
    return $this->type . " is eating<br>";
  }

  public function sleep()
  {
    return $this->type . " is sleeping<br>";
  }
}