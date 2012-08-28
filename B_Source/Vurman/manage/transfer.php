<?php

include('../config.php');
include('../functions.php');
include('../classes/transfercollection.class.php');
include('../classes/clientcollection.class.php');
include('../classes/custodycollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  include("$templates/menu.php");

  $transfers = TransferCollection::getTransfers();
  $clients = ClientCollection::getClients();
  include("$templates/transfer.php");

  include("$templates/footer.php");
?>
