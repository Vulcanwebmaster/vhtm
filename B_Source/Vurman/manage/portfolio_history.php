<?php
include('../config.php');
include('../functions.php');
include('../classes/clientcollection.class.php');
include('../classes/security.class.php');
include('../classes/securitycollection.class.php');
$userid = mysql_real_escape_string($_GET['userid']);
loginAdmin();
if(!loggedAdmin())
  header('location: index.php');

  include("$templates/menu.php");

  $total = count(SecurityCollection::getHistory())-1; 

  $instances = SecurityCollection::getHistoryInstance(); 

  include("$templates/portfolio_history.php");

  include("$templates/footer.php");
?>
