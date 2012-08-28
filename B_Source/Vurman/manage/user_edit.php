<?php
include('../config.php');
include('../functions.php');
include('../classes/clientcollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  if(exist($_POST['add']))
    $result = ClientCollection::updateClient();
  else
    ClientCollection::loadClient();

  include("$templates/menu.php");

  include("$templates/user_edit.php");

  include("$templates/footer.php");
?>
