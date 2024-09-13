<?php

class Gift extends Product{
  protected $occasion;
  protected $recipient;
  protected $category;

  public function __construct($name, $price, $description, $image, $occasion, $recipient, $category)
  {
    parent::__construct($name, $price, $description, $image);
    $this->occasion = $occasion;
    $this->recipient = $recipient;
    $this->category = $category;
  }

  public function chooseRecipient($recipient)
  {
    if(in_array($recipient, ['Friend', 'Family', 'Colleague']))
    {
      return "Gift for $recipient chosen.<br>";
    } else {
      return "Recipient not recognized.<br>";
    }
  }

  public function displayCategory()
  {
    return "The gift is categorized under: " . $this->category . "<br>";
  }
}



