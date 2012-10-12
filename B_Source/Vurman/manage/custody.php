<?php
include('../config.php');
include('../functions.php');
include('../classes/custodycollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  if(exist($_POST['add']))
    header('location: custody_add.php');

  if(exist($_POST['delete']))
    CustodyCollection::deleteAccounts();

  include("$templates/menu.php");

//include appropriate template
$accounts = CustodyCollection::getAccounts();
  include("$templates/custody.php");
//var_dump($accounts);


  include("$templates/footer.php");
?>
