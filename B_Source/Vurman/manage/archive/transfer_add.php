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

  $accounts = CustodyCollection::getAccountsForClient(mysql_real_escape_string($_GET['id']));

  if(exist($_POST['button']))
  {  
    $result = TransferCollection::saveTransfer();
    if(empty($result))
      header('location: create_success.php');

  }
  else 
    $result=array();

//var_dump($result);

  include("$templates/menu.php");
  include("$templates/transfer_add.php");
  include("$templates/footer.php");
?>
