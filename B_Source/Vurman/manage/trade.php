<?php
include('../config.php');
include('../functions.php');
include('../classes/transactioncollection.class.php');
include('../classes/clientcollection.class.php');
include('../classes/custodycollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  include("$templates/menu.php");

  $transactions = TransactionCollection::getTransactions();
  $clients = ClientCollection::getClients();

  include("$templates/trade.php");

  include("$templates/footer.php");
?>
