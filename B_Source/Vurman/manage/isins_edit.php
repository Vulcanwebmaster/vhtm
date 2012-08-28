<?php
include('../config.php');
include('../functions.php');
include('../classes/isincollection.class.php');
include('../classes/currencycollection.class.php');
include('../classes/clientcollection.class.php');
include('../classes/anytable.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  if(exist($_POST['add']))
  {
    $result = IsinCollection::AddIsin(true);
    if(!count($result))
      header('location: isins_updated.php');
  }
  else
    IsinCollection::loadIsin();

  include("$templates/menu.php");

  $currencies = CurrencyCollection::getCurrencies();

  include("$templates/isins_edit.php");

  include("$templates/footer.php");
?>