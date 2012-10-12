<?php
include('../config.php');
include('../functions.php');
include('../classes/custodycollection.class.php');
include('../classes/clientcollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  if(exist($_POST['add']))
    $result = CustodyCollection::updateAccount();
  else
    CustodyCollection::loadAccount();

  include("$templates/menu.php");

  $clients = ClientCollection::getClients();

  include("$templates/custody_edit.php");

  include("$templates/footer.php");
?>
