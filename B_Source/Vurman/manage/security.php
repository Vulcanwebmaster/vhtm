<?php
include('../config.php');
include('../functions.php');
include('../classes/clientcollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  include("$templates/menu.php");

  $clients= ClientCollection::getClients();
  include("$templates/security.php");

  include("$templates/footer.php");
?>
