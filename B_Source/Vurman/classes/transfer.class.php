<?php

class Transfer
{
  private $id;
  private $security;
  private $amount;
  private $account;
  private $tradeDate;
  private $settlementDate;
  private $type;  
  private $isin;  
  private $status;  
  private $comment;
  private $createdAt;
  
  public function setId($var)
  {
    $this->id = $var;
  }
  public function setAccount($var)
  {
    $this->account = $var;
  }
  public function setTradeDate($var)
  {
    $this->tradeDate= $var;
  }
  public function setSettlementDate($var)
  {
    $this->settlementDate= $var;
  }
  public function setIsin($var)
  {
    $this->isin = $var;
  }
  public function setSecurity($var)
  {
    $this->security= $var;
  }
  public function setAmount($var)
  {
    $this->amount= $var;
  }
  public function setType($var)
  {
    $this->type = $var;
  }
  public function setStatus($var)
  {
    $this->status= $var;
  }
  public function setComment($var)
  {
    $this->comment = $var;
  }
  public function setCreatedAt($var)
  {
    $this->createdAt= $var;
  }
  public function getId()
  {
    return($this->id );
  }
  public function getAccount()
  {
    return($this->account);
  }
  public function getTradeDate()
  {
    return($this->tradeDate);
  }
  public function getSettlementDate()
  {
    return($this->settlementDate);
  }
  public function getIsin()
  {
    return($this->isin );
  }
  public function getSecurity()
  {
    return($this->security);
  }
  public function getAmount()
  {
    return($this->amount);
  }
  public function getStatus()
  {
    return($this->status);
  }
  public function getType($tweak = false)
  {
    if($tweak)
      if($this->type == 'sell')
        return('RED');
    if($tweak)
      if($this->type == 'purchase')
        return('SUB');
    return($this->type);
  }
  public function getComment()
  {
    return($this->comment);
  }
  public function getCreatedAt()
  {
    return($this->createdAt);
  }
}
