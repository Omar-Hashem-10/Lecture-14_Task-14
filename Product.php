<?php


class Product{
  protected $name;
  protected $price;
  protected $description;
  protected $image;

  public function __construct($name, $price, $description, $image){
    $this->name = $name;
    $this->price = $price;
    $this->description = $description;
    $this->image = $image;
  } 

  public function uploadImage()
  {
    return "Uploading image for $this->name<br>";
  }

  public function calcPrice()
  {
    return $this->price . "<br>";
  }
}