<?php
include('../config.php');
include('../functions.php');
include('../classes/isincollection.class.php');
include('../classes/anytable.class.php');

  loginAdmin();

  if(!loggedAdmin())
    header('location: index.php');

  if(isset($_POST['add']))
    header('location: isins_add.php');

  if(isset($_POST['delete']))
    IsinCollection::deleteIsins();

  include("$templates/menu.php");

  //include appropriate template
  $isins = IsinCollection::getIsins();

  include("$templates/isins.php");
  //var_dump($accounts);

  include("$templates/footer.php");
?>