<?php
include('config.php');
include('functions.php');
include('classes/client.class.php');
include('classes/security.class.php');
include('classes/securitycollection.class.php');
include('classes/isin.class.php');
include('classes/isincollection.class.php');
include('classes/transactioncollection.class.php');
//check, if client is already logged in.
login();
if(!logged())
{
  include('login_header.php');
}
//process data	
  $transaction = new TransactionCollection();
  $collection = new SecurityCollection();
  $isinCollection = new IsinCollection;
  $client = new Client;
  $isins = $isinCollection->getIsins();
  $accounts = getAccounts();

  include($templates.'menu.html');
  echo strtoupper('THANK YOU!<br/><br/>YOUR ORDER HAS BEEN SUCCESSFULLY PROCESSED!');  
  include($templates.'welcome.html');
  include($templates.'footer.html');

?>