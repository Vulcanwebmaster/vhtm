<?php
include('config.php');
include('functions.php');
include('classes/client.class.php');
include('classes/transfer.class.php');
include('classes/transfercollection.class.php');

login();
if(!logged())
{
  include('login_header.php');
}
else
{
  $client = new Client();
  $transfers= $client->getTransfers('completed');
  include($templates.'menu.html');
  include($templates.'show_completed_transfers.php');
  $transfers= $client->getTransfers('cancelled');
  include($templates.'show_cancelled_transfers.php');
  include($templates.'footer.html');  
}

?>