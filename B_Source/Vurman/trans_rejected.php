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
  $transactions = $client->getTransactions('sell');

  include('templates/menu.html');
  include('templates/show_rejected.php');
}

?>