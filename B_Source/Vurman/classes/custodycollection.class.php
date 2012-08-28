<?php
class CustodyCollection
{
  static public function retrieveByClient($client_id = null)
  {
    if(!$client_id)
      die('Should add case for all clients!');
    // sql here for retrieve info from db by $client_id
    $accounts = array();
    $query="SELECT a.id, a.name FROM custody_ac a WHERE id_client = '$client_id' ";

    $qres=mysql_query($query);
    while($row=mysql_fetch_assoc($qres))
      $accounts[] = $row;


    return $accounts;
  }

  static public function getAccounts($id = false) 
  {
    $accounts= array();

    $query = $id ? "SELECT * FROM custody_ac WHERE id = '$id'" : 
             " SELECT a.id, a.name, cl.name clname
               FROM custody_ac a, user cl
               WHERE cl.id = a.id_client ";
    $qres=mysql_query($query);

    if(!empty($qres))
    while($row = mysql_fetch_assoc($qres))
      $accounts[] = $row;

    return($accounts);
  }

  static public function getAccountsForClientByTransferId($id) 
  {
    $accounts= array();

    $query = "SELECT c.id, c.name FROM custody_ac c, transfers t WHERE c.id_client = t.id_client AND t.id = '$id'";
    $qres=mysql_query($query);

    if(!empty($qres))
    while($row = mysql_fetch_assoc($qres))
      $accounts[] = $row;

    return($accounts);
  }

  static public function getAccountsForClientByTransactionId($id) 
  {
    $accounts= array();

    $query = "SELECT c.id, c.name FROM custody_ac c, transactions t WHERE c.id_client = t.id_client AND t.id = '$id'";
    $qres=mysql_query($query);

    if(!empty($qres))
    while($row = mysql_fetch_assoc($qres))
      $accounts[] = $row;

    return($accounts);
  }

  static public function deleteAccounts() 
  {
    $_POST[$key] = mysql_real_escape_string($value);

    foreach($_POST as $key=>$curr):
    $key = mysql_real_escape_string($key);
    if(substr($key, 0, 3) == 'id_')
    if(substr($key,3))
    {
      $query= "DELETE FROM custody_ac WHERE id = '".substr($key,3)."'" ;
      mysql_query($query);
    }
    endforeach;
  }

  static public function verifyFields() 
  {
    foreach($_POST as $key=>$value)
      $_POST[$key] = mysql_real_escape_string($value);

    $errors='';
    $fields = array('client','aname');
    $fieldsObligatory = array('client','aname');
    $errorMessage = array('Client','Account name');
    $result = array();

    foreach($fieldsObligatory as $key=>$field):
      if(!exist($_POST[$field]))
        $result[] = $errorMessage[$key];
    endforeach;

   if(trim($_POST['client']))
   if(!ClientCollection::getClients(trim($_POST['client'])))
     die('Database error: not existant client.. please apply admin');

   return $result;
  }

  static public function addAccount() 
  {
    $result = CustodyCollection::verifyFields();

    if(count($result))
      return ($result);
//  if all right, save data.

$query = "INSERT INTO `custody_ac` (
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

  static public function updateAccount() 
  {
    $result = CustodyCollection::verifyFields();

    if(count($result))
      return ($result);

$query = "UPDATE `custody_ac` SET `id_client` = '".$_POST['client']."' ,
`name` = '".$_POST['aname']."' WHERE id = '".$_POST['id']."';";

mysql_query($query);
header('location: custody_updated.php');
  }


  static public function loadAccount()
  {
    $_GET['id'] = mysql_real_escape_string($_GET['id']);
    if(!exist($_GET['id']))
      die('wrong id, please contact admin..');
    $query = "SELECT * FROM custody_ac WHERE id = '".$_GET['id']."'";
    $qres=mysql_query($query);
    $row=mysql_fetch_assoc($qres);

    if(empty($row))
      die('wrong id, please contact admin.');

    $fields = array('id','client','aname');
    $fieldsDb = array('id','id_client','name');
    foreach($fields as $key=>$value)
      $_POST[$value] = $row[$fieldsDb[$key]];

  }


}
	