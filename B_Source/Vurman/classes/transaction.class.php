<?php

class Transaction
{
  private $id;
  private $security1;
  private $amount1;
  private $security2;
  private $amount2;
  private $account;
  private $datetime;
  private $type;  
  private $isin;  
  private $isin2;  
  private $status;  
  private $commentUser;
  private $commentAdmin;
  
  public function setId($var)
  {
    $this->id = $var;
  }
  public function setAccount($var)
  {
    $this->account = $var;
  }
  public function setDatetime($var)
  {
    $this->datetime= $var;
  }
  public function setIsin($var)
  {
    $this->isin = $var;
  }
  public function setIsin2($var)
  {
    $this->isin2 = $var;
  }
  public function setSecurity1($var)
  {
    $this->security1= $var;
  }
  public function setSecurity2($var)
  {
    $this->security2= $var;
  }
  public function setAmount1($var)
  {
    $this->amount1= $var;
  }
  public function setAmount2($var)
  {
    $this->amount2= $var;
  }
  public function setType($var)
  {
    $this->type = $var;
  }
  public function setStatus($var)
  {
    $this->status= $var;
  }
  public function setCommentUser($var)
  {
    $this->commentUser= $var;
  }
  public function setCommentAdmin($var)
  {
    $this->commentAdmin= $var;
  }
  public function getId()
  {
    return($this->id );
  }
  public function getAccount()
  {
    return($this->account);
  }
  public function getDatetime()
  {
    return($this->datetime);
  }
  public function getIsin()
  {
    return($this->isin );
  }
  public function getIsin2()
  {
    return($this->isin2 );
  }
  public function getSecurity1()
  {
    return($this->security1);
  }
  public function getSecurity2()
  {
    return($this->security2);
  }
  public function getAmount1()
  {
    return($this->amount1);
  }
  public function getAmount2()
  {
    return($this->amount2);
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
/*    if($tweak=='1')
      if($this->type == 'SWITCH')
        return('SWITCH SUB');
    if($tweak=='2')
      if($this->type == 'SWITCH')
        return('SWITCH RED');*/
    return($this->type);
  }
  public function getCommentUser()
  {
    return($this->commentUser);
  }
  public function getCommentAdmin()
  {
    return($this->commentAdmin);
  }

}
