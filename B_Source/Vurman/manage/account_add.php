<?php
include('../config.php');
include('../functions.php');
include('../classes/accountcollection.class.php');
include('../classes/currencycollection.class.php');
include('../classes/clientcollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  if(exist($_POST['add']))
    $result = AccountCollection::addAccount();

  include("$templates/menu.php");

  $currencies = CurrencyCollection::getCurrencies();
  $clients = ClientCollection::getClients();

  include("$templates/account_add.php");

  include("$templates/footer.php");
?>
