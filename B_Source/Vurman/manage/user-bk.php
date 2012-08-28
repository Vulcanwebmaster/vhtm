<?php
include('../config.php');
include('../functions.php');
include('../classes/clientcollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  if(isset($_POST['add']))
    header('location: user_add.php');

  if(isset($_POST['delete']))
    ClientCollection::deleteClients();

  include("$templates/menu.php");

  $clients= ClientCollection::getClients();
  include("$templates/user.php");

  include("$templates/footer.php");
?>
