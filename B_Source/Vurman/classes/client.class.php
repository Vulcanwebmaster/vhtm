<?php

class Client
{
  private $id;
  private $email;
  private $name;  
  protected static $accounts = null;
  protected static $securities = null;
  protected static $transactions = null;
  protected static $transfers = null;

  public function getData($id)
  {
    $query = "SELECT name, email FROM user WHERE id = '".mysql_real_escape_string($id)."'";
    $qres=mysql_query($query);
    $row = mysql_fetch_assoc($qres);
    return $row;
  }
  public function getAccounts()
  {
    if (is_null(self::$accounts)) self::$accounts = AccountCollection::retrieveByClient($this->getId());
    return self::$accounts;
  }
  public function getTransactions($type)
  {
    self::$transactions= TransactionCollection::retrieveByClient($type,$this->getId());
    return self::$transactions;
  }
  public function getTransfers($type)
  {
    self::$transfers= TransferCollection::retrieveByClient($type,$this->getId());
    return self::$transfers;
  }
  private function getId()
  {
    return(trim($_SESSION['login']));
  }
  /*
  checks, if security with this id belongs to this client
  */
  public function checkId($id)
  {
    $query = "SELECT * FROM security WHERE id = '".mysql_real_escape_string($id)."' AND id_client = '".$_SESSION['login']."'";
    $qres=mysql_query($query);
    if(mysql_num_rows($qres))
      return(TRUE);
    return FALSE;
  }

}


                              
