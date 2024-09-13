<?php


class Validations{
  protected $name;
  protected $email;
  protected $password;

  public function __construct($name, $email, $password) 
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;  
  }

  public function requireVal($value)
  {
    if(empty($value))
    {
      return true;
    }else{
      return false;
    }
  }

  public function minLength($value, $ruleValue)
  {
    if(strlen($value) < $ruleValue)
    {
      return true;
    }else{
      return false;
    }
  }

  public function maxLength($value, $ruleValue)
  {
    if(strlen($value) > $ruleValue)
    {
      return true;
    }else{
      return false;
    }
  }

  public function email($value)
  {
    if(filter_var($value, FILTER_VALIDATE_EMAIL))
    {
      return true;
    }else{
      return false;
    }
  }
}