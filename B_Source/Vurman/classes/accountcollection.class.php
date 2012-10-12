<?php
class AccountCollection
{
  static public function getHistory()
  {
    $_GET['id'] = mysql_real_escape_string($_GET['id']);

    $format = '%Y-%m-%d %H:%M:%S';
    $strf = strftime($format);
    
    $rows = array();
    //$rows[] = array('created_at'=>$strf);
    $query = " SELECT a.*, cu.abbreviation cuname, cl.name clname, id_account
               FROM account a, currency cu, user cl
               WHERE cl.id = a.id_client AND cu.id = a.id_currency AND a.id_account = '".$_GET['id']."'
	       ORDER BY created_at DESC";
    $qres = mysql_query($query);
    
    while($x = mysql_fetch_assoc($qres))
     $rows[] = $x;
    //var_dump($rows);die();
    return($rows);
  }
  /* function accepts $_GET array (that sets id of account, and number of instance)
     function outputs array to be shown at form */
  static public function getHistoryInstance()
  {
    $allInstances = AccountCollection::getHistory();
    if((isset($_GET['number']))&&(isset($allInstances[$_GET['number']])))
      return $allInstances[$_GET['number']];
    else
      return $allInstances[0];
  }

  static public function retrieveByClient($client_id = null)
  {
    if(!$client_id)
      die('Should add case for all clients!');
    // sql here for retrieve info from db by $client_id
    $accounts = array();
    $query="SELECT a.id, a.name, a.amount, c.abbreviation cname FROM account a, currency c WHERE id_client = '$client_id' AND c.id = a.id_currency";
//echo $query;
    $qres=mysql_query($query);
    while($row=mysql_fetch_assoc($qres))
    {
      $account = new Account();
      $account->setId($row['id']);
      $account->setName($row['name']);
      $account->setAmount($row['amount']);
      $account->setCurrency($row['cname']);
      $accounts[] = $account;
    }

    return $accounts;
  }

  static public function getAccounts($id=false) 
  {
    $accounts= array();

    $query = $id ? "SELECT * FROM account a WHERE id_account = '$id'
                    AND created_at = (SELECT max(created_at) FROM account aa WHERE aa.id_account = a.id_account )"
		    : 
             " SELECT a.id, a.name, a.amount, cu.abbreviation cuname, cl.name clname, id_account
               FROM account a, currency cu, user cl
               WHERE cl.id = a.id_client AND cu.id = a.id_currency 
	       AND created_at = 
               (SELECT max(created_at) FROM account aa WHERE aa.id_account = a.id_account ) ";
    $qres=mysql_query($query);

    if(!empty($qres))
    while($row = mysql_fetch_assoc($qres))
      $accounts[] = $row;

    return($accounts);
  }

  static public function deleteAccounts() 
  {
    foreach($_POST as $key=>$curr):
    $key = mysql_real_escape_string($key);
    if(substr($key, 0, 3) == 'id_')
    if(substr($key,3))
    {
      $query= "DELETE FROM account WHERE id_account = '".substr($key,3)."'" ;
      mysql_query($query);
    }
    endforeach;
  }

  static public function generateAccountId()
  {
    $query = "SELECT id_account FROM account a
              WHERE NOT EXISTS (SELECT * FROM account aa WHERE aa.id_account = a.id_account+1 )";
    $qres = mysql_query($query);
    $row = mysql_fetch_assoc($qres);
    return((int)$row['id_account']+1);

  }

  static public function verifyFields() 
  {
    foreach($_POST as $key=>$value)
      $_POST[$key] = mysql_real_escape_string($value);

    $errors='';
    $fields = array('currency','client','aname','amount','credit','valuec','debit','valued');
    $fieldsDates = array('valuec','valued');
    $fieldsNumbers= array('amount','credit','debit');
    $fieldsObligatory = array('currency','client','aname','amount');
    $errorMessage = array('Currency','Client','Account name','Amount');
    $errorMessageDates= array('Credit date (should be YYYY-MM-DD)','Debit date (should be YYYY-MM-DD)');
    $errorMessageNumbers= array('Amount should be number','Credit should be number','Debit should be number');
    $result = array();

    foreach($fieldsObligatory as $key=>$field):
      if(!exist($_POST[$field]))
        $result[] = $errorMessage[$key];
    endforeach;

    foreach($fieldsDates as $key=>$field)
      if(trim($_POST[$field]))
      if(trim($_POST[$field]) !== '0000-00-00')
      if((!preg_match("/[0-9]{4}-[0-9]{2}-[0-9]{2}$/", $_POST[$field]))||(strtotime(trim($_POST[$field]))<1))
        $result[] = $errorMessageDates[$key];

    foreach($fieldsNumbers as $key=>$field)
      if(trim($_POST[$field]))
        if(!preg_match("/^[\d]{0,8}$/", $_POST[$field]))
        $result[] = $errorMessageNumbers[$key];

   if(trim($_POST['client']))
   if(!ClientCollection::getClients(trim($_POST['client'])))
     die('Database error: not existant client.. please apply admin');

   if(trim($_POST['currency']))
   if(!CurrencyCollection::getCurrencies(trim($_POST['currency'])))
     die('Database error: not existant currency.. please apply admin');    
   return $result;
  }

  static public function addAccount() 
  {
    $result = AccountCollection::verifyFields();

    if(count($result))
      return ($result);
//  if all right, save data.

$_POST['id_account'] = $_POST['id_account'] ? $_POST['id_account'] : AccountCollection::generateAccountId();

$query = "INSERT INTO `account` (
`id` ,
`id_account` ,
`id_client` ,
`name` ,
`amount` ,
`id_currency` ,
`credit` ,
`debit` ,
`vdate1` ,
`vdate2` ,
`created_at` 
)
VALUES (
NULL , '".$_POST['id_account']."', '".$_POST['client']."', '".$_POST['aname']."', 
'".$_POST['amount']."', '".$_POST['currency']."', '".$_POST['credit']."', '".$_POST['debit']."', 
'".$_POST['valuec']."', '".$_POST['valued']."', CURRENT_TIMESTAMP );";

//die($query);

mysql_query($query);
header($_POST['id_account']? 'location: account_updated.php':'location: account_created.php');
  }

  static public function loadAccount()
  {
    $_GET['id'] = mysql_real_escape_string($_GET['id']);
    if(!exist($_GET['id']))
      die('wrong id, please contact admin..');
    $query = "SELECT * FROM account a WHERE id_account = '".$_GET['id']."'
    AND created_at = 
               (SELECT max(created_at) FROM account aa WHERE aa.id_account = a.id_account )";
	       
    $qres=mysql_query($query);
    $row=mysql_fetch_assoc($qres);
    
    if(empty($row))
      die('wrong id, please contact admin.');

    $fields = array('id_account','currency','client','aname','amount','credit','valuec','debit','valued');
    $fieldsDb = array('id_account','id_currency','id_client','name','amount','credit','vdate1','debit','vdate2');
    foreach($fields as $key=>$value)
      $_POST[$value] = $row[$fieldsDb[$key]];

  }


}

