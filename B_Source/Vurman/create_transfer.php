<?php
include('config.php');
include('functions.php');
include('classes/client.class.php');
include('classes/security.class.php');
include('classes/securitycollection.class.php');
include('classes/isin.class.php');
include('classes/isincollection.class.php');
include('classes/transfercollection.class.php');
//check, if client is already logged in.
login();
if(!logged())
{
  include('login_header.php');
}
elseif(isset($_POST['button']))
{
//process data	
  $transaction = new TransferCollection();
  $collection = new SecurityCollection();
  $isinCollection = new IsinCollection;
  $client = new Client;
  $isins = $isinCollection->getIsins();
  $accounts = getAccounts();

  $result = $transaction->saveTransfer();

  if(empty($result))
  {
    header('location: create_success.php');
  }
  else
  {
    include($templates.'menu.html');
    $show= 'MANDATORY FIELDS * ARE: '.implode($result,',');;
    echo '<span id="error">'.$show.'</span><br/><br/>';
    include($templates.'fund_rec.php');
  }

  include($templates.'footer1.html');
}
 else
{
  if(!in_array(trim($_GET['type']),$typesAllowed))
    die('Wrong type');
  $result = array();
  $isinCollection = new IsinCollection;
  $isins = $isinCollection->getIsins();
  $accounts = getAccounts();
  include($templates.'menu.html');
  include($templates.'fund_rec.php');
  include($templates.'footer1.html');

}

?>