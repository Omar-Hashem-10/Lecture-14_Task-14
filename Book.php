<?php

class Book extends Product{
  protected $publisher;
  protected $writer;
  protected $color;
  protected $supplier;

  public function __construct($name, $price, $description, $image, $publisher, $writer, $color, $supplier)
  {
    parent::__construct($name, $price, $description, $image);
    $this->publisher = $publisher;
    $this->writer = $writer;
    $this->color = $color;
    $this->supplier = $supplier;
  }

  public function choosePublisher($publisher)
  {
    if(in_array($publisher, $this->publisher))
    {
      return "Publisher $publisher chosen for the book $this->name.<br>";
    }else{
      return "Publisher not found<br>";
    }
  }
}