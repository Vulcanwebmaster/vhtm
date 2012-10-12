<?php
include('config.php');
include('functions.php');
include('classes/client.class.php');
include('classes/security.class.php');
include('classes/securitycollection.class.php');
//check, if client is already logged in.
login();
if(!logged())
{
  include('login_header.php');  
}
else
{
  $collection = new SecurityCollection();
  $securities = $collection->getSecurities(1);
  include($templates.'menu.html');
  include($templates.'show_securities.php');
  include($templates.'footer.html');
}
//  include('templates/index.html');  


//login
 /* 
 */ 

?>