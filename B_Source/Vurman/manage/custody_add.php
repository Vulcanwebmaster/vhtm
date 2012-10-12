<?php
include('../config.php');
include('../functions.php');
include('../classes/custodycollection.class.php');
include('../classes/clientcollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  if(exist($_POST['add']))
    $result = CustodyCollection::addAccount();

  include("$templates/menu.php");

  $clients = ClientCollection::getClients();

  include("$templates/custody_add.php");

  include("$templates/footer.php");
?>
