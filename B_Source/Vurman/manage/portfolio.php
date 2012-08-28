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

  if(exist($_POST['add']))
    header('location: portfolio_add.php?userid='.$_GET['userid']);

  if(exist($_POST['delete']))
    SecurityCollection::deleteSecurities($userid);

  if(exist($_POST['update']))
    SecurityCollection::updateSecurities($userid,maxQuantity);

  include("$templates/menu.php");

  $securities = SecurityCollection::getSecurities($userid);
//var_dump($securities);
//die();
  include("$templates/portfolio.php");

  include("$templates/footer.php");
?>
