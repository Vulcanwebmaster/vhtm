<?php
include('../config.php');
include('../functions.php');
include('../classes/accountcollection.class.php');

loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  include("$templates/menu.php");

  $total = count(AccountCollection::getHistory())-1; 
  $instance = AccountCollection::getHistoryInstance(); 
  
  include("$templates/account_history.php");

  include("$templates/footer.php");
?>