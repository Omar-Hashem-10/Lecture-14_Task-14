<?php


class User extends Validations{
  protected $user_id;
  protected $address;

  public function __construct($name, $email, $password, $user_id, $address)
  {
    parent::__construct($name, $email, $password);
    $this->user_id = $user_id;
    $this->address = $address;
  }

  public function getName() {
    return $this->name;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getPassword() {
    return $this->password;
  }
}

