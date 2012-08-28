<?php

class Account
{
  private $id;
  private $name;
  private $amount;  
  private $currency;
  
  public function __toString()
  {
    return $this->getName();
  }

  public function setId($var)
  {
    $this->id = $var;
  }
  public function setName($var)
  {
    $this->name = $var;
  }
  public function setAmount($var)
  {
    $this->amount = $var;
  }
  public function setCurrency($var)
  {
    $this->currency = $var;
  }

  public function getId()
  {
    return($this->id);
  }
  public function getName()
  {
    return($this->name);
  }
  public function getAmount()
  {
    return($this->amount);
  }
  public function getCurrency()
  {
    return($this->currency);
  }

}
