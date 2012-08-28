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

  include("$templates/menu.php");

  $total = count(IsinCollection::getHistory())-1; 
  $instance = IsinCollection::getHistoryInstance(); 

  include("$templates/isins_history.php");

  include("$templates/footer.php");
?>