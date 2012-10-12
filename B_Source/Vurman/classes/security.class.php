<?php

class Security
{
  private $id;
  private $isin;
  private $code;
  private $quantity;
  private $name_fund;
  private $currency;
  private $nav;  
  private $custody;  
  private $date_nav;  
  private $pending;  
  
  public function setId($var)
  {
    $this->id = $var;
  }
  public function setCode($var)
  {
    $this->code = $var;
  }
  public function setIsin($var)
  {
    $this->isin= $var;
  }
  public function setQuantity($var)
  {
    $this->quantity= $var;
  }
  public function setName_fund($var)
  {
    $this->name_fund = $var;
  }
  public function setCurrency($var)
  {
    $this->currency= $var;
  }
  public function setNav($var)
  {
    $this->nav= $var;
  }
  public function setDate_nav($var)
  {
    $this->date_nav= $var;
  }
  public function setPending($var)
  {
    $this->pending= $var;
  }
  public function setCustody($var)
  {
    $this->custody= $var;
  }
  public function getId()
  {
    return($this->id);
  }
  public function getCode()
  {
    return($this->code);
  }
  public function getIsin()
  {
    return($this->isin);
  }
  public function getQuantity()
  {
    return($this->quantity);
  }
  public function getFund_name()
  {
    return($this->name_fund);
  }
  public function getCurrency()
  {
    return($this->currency);
  }
  public function getNav()
  {
    return($this->nav);
  }
  public function getNav_date()
  {
    return($this->date_nav);
  }
  public function getPending()
  {
    return($this->pending);
  }
  public function getCustody()
  {
    return($this->custody);
  }

}
