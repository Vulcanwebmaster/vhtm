<?php
include('../config.php');
include('../functions.php');
include('../classes/accountcollection.class.php');
include('../classes/currencycollection.class.php');
include('../classes/clientcollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  if(isset($_POST['add']))
    $result = AccountCollection::addAccount();
  else
    AccountCollection::loadAccount();

  include("$templates/menu.php");

  $currencies = CurrencyCollection::getCurrencies();
  $clients = ClientCollection::getClients();

  include("$templates/account_edit.php");

  include("$templates/footer.php");
?>
