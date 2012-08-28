<?php
class TransferCollection
{
  static public function retrieveByClient($status, $client_id = null)
  {
//echo $status;
    $types= array('all','sell','purchase','switch');
    $statuses= array('all','pending','completed','cancelled');    
    if(!in_array($status,$statuses))
    if(!in_array($status,$types))    
      die('Wrong status when getting transfer collection!');
    $IsTypeOriented = in_array($status,$statuses) ? false: true;
    if(!$client_id)
      die('Should add case for all clients!');


    $transactions= array();
    if($IsTypeOriented)
      $addition = ($status!= 'all') ? " AND types = '$status'" : "";
    else
      $addition = ($status!= 'all') ? " AND status = '$status'" : "";
      
    $query = " SELECT t.id, t.created_at, t.comment, a.name aname, i.fund_name name,
    i.ISIN code, t.status, t.types, t.amount, t.trade_date, t.settlement_date
    FROM transfers t, custody_ac a, fund i
    WHERE t.id_client = '$client_id' AND a.id = t.id_custody1 AND i.id = t.id_isin $addition ";
    
    $qres=mysql_query($query) or die(mysql_error());
    while($row=mysql_fetch_assoc($qres))
    {

      $transfer = new Transfer();
      $transfer->setId($row['id']);
      $transfer->setStatus($row['status']);
      $transfer->setType($row['types']);
      $transfer->setComment($row['comment']);
      $transfer->setSecurity($row['name']);
      $transfer->setAmount($row['amount']);
      $transfer->setIsin($row['code']);
      $transfer->setTradeDate($row['trade_date']);
      $transfer->setSettlementDate($row['settlement_date']);
      $transfer->setAccount($row['aname']);
      $transfer->setCreatedAt($row['created_at']);
      $transfers[] = $transfer;

    }

    return $transfers;
  }


  static public function saveTransfer()
  {

    $result = array();
    if(!exist($_POST['type']))
      $result[]=strtoupper("Type");
    if(trim($_POST['type'])=='sell')
    if(!exist($_POST['security1']))
      $result[]=strtoupper("ISIN");
    if(!exist($_POST['account1']))
      $result[]=strtoupper("Account");
    if(!exist($_POST['Quantity']))
      $result[]=("Quantity");
    if(!exist($_POST['Trade_Date']))
      $result[]=("T/D");
    if(!exist($_POST['Settlement_Date']))
      $result[]=("S/D");
    if((!exist($_POST['Partner']))&&(!exist($_POST['BIC_Partner'])))
      $result[]=(trim($_POST['type']) == 'purchase')?("Seller incl. BIC"):("Buyer incl. BIC");
//      $result[]=(trim($_POST['type']) == 'purchase')?("Seller incl. BIC"):("Buyer incl. BIC");
    if((!exist($_POST['Custodian']))&&(!exist($_POST['Custodian_BIC'])))
      $result[]=("Custodian incl. BIC");
    if(!exist($_POST['Custody_ac_Partner']))
      $result[]=(trim($_POST['type']) == 'purchase')?strtoupper("Custody ac Seller"):strtoupper("Custody ac Buyer");

    if(!empty($result))
    {
    }
    else
    {

foreach($_POST as $key=>$value)
  $_POST[$key] = mysql_real_escape_string($value);
extract($_POST);

      $query = "INSERT INTO `transfers` (
`id` ,
`id_client` ,
`id_isin` ,
`fund_name` ,
`amount` ,
`id_custody1` ,
`trade_date` ,
`settlement_date` ,
`partner` ,
`custodian` ,
`custody2` ,
`transfer_agent` ,
`custody3` ,
`comment` ,
`bic1` ,
`bic2` ,
`bic3` ,
`created_at` ,
`types`
)
VALUES (
NULL , '".$_SESSION['login']."', '$security1', '$Name', '$Quantity', '$account1', '$Trade_Date',
 '$Settlement_Date', '$Partner', '$Custodian', '$Custody_ac_Partner', '$TA_Name', '$account3', 
 '$comment', '$BIC_Partner', '$Custodian_BIC', '$TA_BIC', NOW(), '$type'
);";

      mysql_query($query) or die(mysql_error()."!<br/>".$query);
//      $result = strtoupper('<br/>Transaction was saved!');
    }
    return($result);
  }

  static public function getTransfers($id=false) 
  {
    $accounts= array();

    $query = $id ? "SELECT * FROM transfers WHERE id = '$id'" : 
             " SELECT cl.name, i.ISIN code, t.id, t.amount, t.types, t.status
               FROM  transfers t, fund i, user cl
               WHERE t.id_client = cl.id AND t.id_isin = i.id ";
    $qres=mysql_query($query);

    if(!empty($qres))
    while($row = mysql_fetch_assoc($qres))
      $accounts[] = $row;

    return($accounts);
  }

  static public function checkId()
  {
    $_GET['id'] = mysql_real_escape_string($_GET['id']);
    if(!exist($_GET['id']))
      die('wrong id, please contact admin..');
  }

  static public function loadTransfer()
  {
    TransferCollection::checkId();

    $query = "SELECT t.* , c.abbreviation FROM transfers t, fund i,currency c WHERE t.id = '".$_GET['id']."'
    AND t.id_isin = i.id AND i.currency = c.id";
    $qres=mysql_query($query);
    $row=mysql_fetch_assoc($qres);

    if(empty($row))
      die('wrong id, please contact admin.');

  $fields = explode(',','types,security1,Currency,Name,Quantity,account1,Trade_Date,Settlement_Date,Partner,BIC_Partner,Custodian,Custodian_BIC,account2,TA_Name,TA_BIC,account3,comment,status');

  $fieldsDb = str_replace('`','','`types`,`id_isin` ,`Abbreviation`,`fund_name` ,`amount` ,`id_custody1` ,`trade_date` ,`settlement_date`,partner` ,`bic1`,`custodian` ,`bic2` ,`custody2` ,`transfer_agent` ,`bic3` ,`custody3`,`comment`,status');
  $fieldsDb = str_replace(' ','',$fieldsDb);
  $fieldsDb = explode(',',$fieldsDb);

    foreach($fields as $key=>$value)
      $_POST[$value] = $row[$fieldsDb[$key]];

  }

  static public function deleteTransfers() 
  {
    $_POST[$key] = mysql_real_escape_string($value);

    foreach($_POST as $key=>$curr):
    $key = mysql_real_escape_string($key);
    if(substr($key, 0, 3) == 'id_')
    if(substr($key,3))
    {
      $query= "DELETE FROM transfers WHERE id = '".substr($key,3)."'" ;
      mysql_query($query);
    }
    endforeach;
  }

  static public function updateTransfer() 
  {
    $result = TransferCollection::verifyFields();

    if(count($result))
      return ($result);

  $fields = explode(',','security1,Quantity,account1,Trade_Date,Settlement_Date,Partner,BIC_Partner,Custodian,Custodian_BIC,account2,TA_Name,TA_BIC,account3,status');

  $fieldsDb = str_replace('`','','`id_isin` ,`amount` ,`id_custody1` ,`trade_date` ,`settlement_date`,partner` ,`bic1`,`custodian` ,`bic2` ,`custody2` ,`transfer_agent` ,`bic3` ,`custody3`,status');
  $fieldsDb = str_replace(' ','',$fieldsDb);
  $fieldsDb = explode(',',$fieldsDb);
$partOfQuery = array();
  foreach($fields as $key=>$value):
    $partOfQuery[]="`".$fieldsDb[$key]."` = '".$_POST[$fields[$key]]."'";
  endforeach;
$query = "UPDATE `transfers` SET ".implode(" , ",$partOfQuery)." WHERE id = '".$_POST['id']."';";
mysql_query($query);
header('location: transfer_updated.php');
  }

  static public function verifyFields() 
  {
    foreach($_POST as $key=>$value)
      $_POST[$key] = mysql_real_escape_string($value);
    
  $fields = explode(',','types,security1,Currency,Name,Quantity,account1,Trade_Date,Settlement_Date,Partner,BIC_Partner,Custodian,Custodian_BIC,account2,TA_Name,TA_BIC,account3,comment');
  $fieldsObligatory = explode(',','types,security1,Quantity,account1,Trade_Date,Settlement_Date,account2,account3');
  
  $errorMessage = array('types','ISIN','Quantity','account1','Trade Date','Settlement Date','Seller account','Agent account');
    
    $result = array();
    if($_POST['security1'] == '0')
      unset($_POST['security1']);
  
    foreach($fieldsObligatory as $key=>$field):
      if(!exist($_POST[$field]))
        $result[] = $errorMessage[$key];
    endforeach;

    if((!exist($_POST['Partner']))&&(!exist($_POST['BIC_Partner'])))
      $result[]=(trim($_POST['type']) == 'purchase')?("Seller incl. BIC"):("Buyer incl. BIC");
    if((!exist($_POST['Custodian']))&&(!exist($_POST['Custodian_BIC'])))
      $result[]=("Custodian incl. BIC");
    
   return $result;
  }

  static public function getClientId()
  {

    TransferCollection::checkId();

    $query = "SELECT id_client FROM transfers WHERE id = '".$_GET['id']."'";
    $qres=mysql_query($query);
    $row=mysql_fetch_assoc($qres);

    if(empty($row))
      die('wrong id, please contact admin.');

    die($row['id_client']);
    return ($row['id_client']);
  }

  static public function addTransfer() 
  {
    $result = TransferCollection::verifyFields();

    if(count($result))
      return ($result);
//  if all right, save data.

$query = "INSERT INTO `transfers` (
`id` ,
`id_client` ,
`name` 
)
VALUES (
NULL , '".$_POST['client']."', '".$_POST['aname']."');";

//die($query);

mysql_query($query);
header('location: custody_created.php');
  }



}
?>