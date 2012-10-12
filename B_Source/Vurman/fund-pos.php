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
elseif(!isset($_POST['ISIN']))
{
  include($templates.'menu.html');
  include($templates.'style-fund-pos.html');
  include($templates.'question.php');
  include($templates.'footer.html');
}elseif(isset($_POST['ISIN']))
{
  $collection = new SecurityCollection();
  $securities = $collection->getSecurity($_POST['ISIN']);
  include($templates.'menu.html');
  include($templates.'show_securities.php');
  include($templates.'footer.html');
	
}
?>
