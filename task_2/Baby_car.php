<?php


class Baby_car extends Product{
  protected $age;
  protected $weight;
  protected $materials;

  public function __construct($name, $price, $description, $image, $age, $weight, $materials)
  {
    parent::__construct($name, $price, $description, $image);
    $this->age = $age;
    $this->weight = $weight;
    $this->materials = $materials;
  }
}