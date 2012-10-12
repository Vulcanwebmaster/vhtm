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
  $transfers= $client->getTransfers('pending');
//var_dump($transfers);
  include('templates/menu.html');
  include('templates/show_pending_transfers.php');
  include('templates/footer.html');  
}

?>