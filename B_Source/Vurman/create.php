<?php
include('config.php');
include('functions.php');
include('classes/client.class.php');
include('classes/security.class.php');
include('classes/securitycollection.class.php');
include('classes/isin.class.php');
include('classes/isincollection.class.php');
include('classes/transactioncollection.class.php');
//check, if client is already logged in.
$username="";
$login="";
login();
if(!logged())
{
  include('login_header.php');
}
elseif(isset($_POST['button']))
{
//process data	
  $transaction = new TransactionCollection();
  $collection = new SecurityCollection();
  $isinCollection = new IsinCollection;
  $client = new Client;
  $isins = $isinCollection->getIsins();
  $accounts = getAccounts();

  $result = $transaction->saveTransaction();

  if(empty($result))
  {
    header('location: create_success.php');
  }
  else
  {
    include($templates.'menu.html');
    $show= 'MANDATORY FIELDS * ARE: '.implode($result,',');;
    echo '<span id="error">'.$show.'</span><br/><br/>';
    include($templates.'create_transaction.php');
  }

  include($templates.'footer.html');
}
 else
{
  $result = array();
  $isinCollection = new IsinCollection;
  $client = new Client;
  if(!in_array(trim($_GET['type']),$typesAllowed))
    die('Wrong type');
  $isins = $isinCollection->getIsins();
  $accounts = getAccounts();
  include($templates.'menu.html');
  include($templates.'create_transaction.php');
  include($templates.'footer.html');

}

?>