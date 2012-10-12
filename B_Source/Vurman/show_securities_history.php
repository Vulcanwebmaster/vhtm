<?php
include('config.php');
include('functions.php');
include('classes/client.class.php');
include('classes/security.class.php');
include('classes/securitycollection.class.php');

login();
if(!logged())
{
  include('login_header.php');  
}
else
{
  $collection = new SecurityCollection();
  $securities = $collection->getSecurities($_SESSION['login']);

  $total = count(SecurityCollection::getHistory())-1; 
  $instances = SecurityCollection::getHistoryInstance(); 

//var_dump($instances); 

  include($templates.'menu.html');
  include($templates.'show_securities_history.php');
  include($templates.'footer.html');
}

?>