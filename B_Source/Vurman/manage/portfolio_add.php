<?php
include('../config.php');
include('../functions.php');
//include('../classes/custody.class.php');
include('../classes/custodycollection.class.php');
include('../classes/securitycollection.class.php');
include('../classes/isincollection.class.php');
include('../classes/currencycollection.class.php');
include('../classes/clientcollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  if(exist($_POST['add']))
  {
    $result = SecurityCollection::addSecurity(maxQuantity);
    if(!count($result))
      header('location: portfolio_created.php');
  }

  include("$templates/menu.php");

  $currencies = CurrencyCollection::getCurrencies();
  $accounts = CustodyCollection::retrieveByClient($_GET['userid']);
  if(empty($accounts))
   $result[] = 'This client has no preset custody account. Please add custody account before depositing funds.';

  $isins = IsinCollection::getIsins();
  include("$templates/portfolio_add.php");

  include("$templates/footer.php");
?>
