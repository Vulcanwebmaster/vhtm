<?php
include('../config.php');
include('../functions.php');
include('../classes/anytable.class.php');
include('../classes/isincollection.class.php');
include('../classes/currencycollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  if(exist($_POST['add']))
  {
    $result = IsinCollection::addIsin();
    if(!count($result))
      header("location: isins_created.php");
  }

  include("$templates/menu.php");

  $currencies = CurrencyCollection::getCurrencies();

  include("$templates/isins_add.php");

  include("$templates/footer.php");
?>
