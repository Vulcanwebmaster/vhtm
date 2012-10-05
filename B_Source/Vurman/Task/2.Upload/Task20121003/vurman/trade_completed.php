<?php
include('config.php');
include('functions.php');
include('classes/client.class.php');
include('classes/transaction.class.php');
include('classes/transactioncollection.class.php');

login();
if(!logged())
{
  include('login_header.php');
}
else
{
  $client = new Client();
  include($templates.'menu.html');
  $transactions = $client->getTransactions('completed');  
  include($templates.'show_completed.php');
  $transactions = $client->getTransactions('cancelled');  
  include($templates.'show_cancelled.php');
  include($templates.'footer.html');  
}

?>