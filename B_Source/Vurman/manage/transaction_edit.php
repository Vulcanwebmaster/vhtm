<?php
include('../config.php');
include('../functions.php');
include('../classes/transactioncollection.class.php');
include('../classes/clientcollection.class.php');
include('../classes/isincollection.class.php');
include('../classes/securitycollection.class.php');
include('../classes/custodycollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  $transaction = new TransactionCollection();
  $clients = ClientCollection::getClients();
  $isins = IsinCollection::getIsins();
  $collection = new SecurityCollection();
  $isinCollection = new IsinCollection;

  $accounts = CustodyCollection::getAccountsForClientByTransactionId(mysql_real_escape_string($_GET['id']));

  if(exist($_POST['button']))
  {
    $result = TransactionCollection::updateTransaction();
  }
  else
  {
    TransactionCollection::loadTransaction();
    $result = array();
  }
  include("$templates/menu.php");

  $clients = ClientCollection::getClients();
  $isins = IsinCollection::getIsins();
  include("$templates/transaction_edit.php");

  include("$templates/footer.php");
?>
