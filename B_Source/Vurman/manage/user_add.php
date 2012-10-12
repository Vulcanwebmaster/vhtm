<?php
include('../config.php');
include('../functions.php');
include('../classes/clientcollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  if(exist($_POST['add']))
    $result = ClientCollection::addClient();

  include("$templates/menu.php");

  include("$templates/user_add.php");

  include("$templates/footer.php");
?>
