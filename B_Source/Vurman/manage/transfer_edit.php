<?php
include('../config.php');
include('../functions.php');
include('../classes/transfercollection.class.php');
include('../classes/clientcollection.class.php');
include('../classes/isincollection.class.php');
include('../classes/securitycollection.class.php');
include('../classes/custodycollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  $transaction = new TransferCollection();
  $clients = ClientCollection::getClients();
  $isins = IsinCollection::getIsins();
  $collection = new SecurityCollection();
  $isinCollection = new IsinCollection;

  $accounts = CustodyCollection::getAccountsForClientByTransferId(mysql_real_escape_string($_GET['id']));

  if(exist($_POST['button']))
    $result = TransferCollection::updateTransfer();
  else
  {
    TransferCollection::loadTransfer();
    $result = array();
  }
  include("$templates/menu.php");

  $clients = ClientCollection::getClients();
  $isins = IsinCollection::getIsins();
  include("$templates/transfer_edit.php");

  include("$templates/footer.php");
?>
