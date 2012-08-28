<?php
include('config.php');
include('functions.php');
include('classes/client.class.php');
include('classes/account.class.php');
include('classes/accountcollection.class.php');
//check, if client is already logged in.
login();
if(!logged())
  {
  include($templates.'header.html');
  include($templates.'login.html');
  include($templates.'footer_empty.html');
  }
else
{
  $client = new Client();
  $accounts = $client->getAccounts();
  include($templates.'menu.html');
  include($templates.'show_accounts.php');
  include($templates.'footer.html');
}
//  include('templates/index.html');  


//login
/*
*/

?>