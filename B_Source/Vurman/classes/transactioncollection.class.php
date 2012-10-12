<?php
class TransactionCollection
{
  static public function checkId()
  {
    $_GET['id'] = mysql_real_escape_string($_GET['id']);
    if(!exist($_GET['id']))
      die('wrong id, please contact admin..');
  }

  static public function loadTransaction()
  {
    TransactionCollection::checkId();

    $query = "SELECT t.* , c.abbreviation, i.fund_name name FROM transactions t, fund i,currency c WHERE t.id = '".$_GET['id']."'
    AND t.id_isin1 = i.id AND i.currency = c.id";
    $qres=mysql_query($query);
    $row=mysql_fetch_assoc($qres);

    if(empty($row))
      die('wrong id, please contact admin.');

    $fieldsDb = explode(',','types,id_isin1,amount1,abbreviation,name,id_account,comment_user,status');

    $fields = explode(',','types,security1,Amount,Currency,Name,account,comment,status');

    foreach($fields as $key=>$value)
      $_POST[$value] = $row[$fieldsDb[$key]];

  }


  static public function getTransactions($id=false) 
  {
    $accounts= array();

    $query = $id ? "SELECT * FROM transactions WHERE id = '$id'" : 
             " SELECT cl.name, i.ISIN code, t.id, t.amount1, t.types, t.status, t.types
               FROM  transactions t, fund i, user cl
               WHERE t.id_client = cl.id AND t.id_isin1 = i.id ";
    $qres=mysql_query($query);

    if(!empty($qres))
    while($row = mysql_fetch_assoc($qres))
      $accounts[] = $row;

    return($accounts);
  }


  static public function retrieveByClient($status, $client_id = null)
  {
//echo $status;
    $types= array('all','sell','purchase','switch');
    $statuses= array('all','pending','completed','cancelled');    
    if(!in_array($status,$statuses))
    if(!in_array($status,$types))    
      die('Wrong status when getting tranaction collection!');
    $IsTypeOriented = in_array($status,$statuses) ? false: true;
    if(!$client_id)
      die('Should add case for all clients!');


    $transactions= array();
    if($IsTypeOriented)
      $addition = ($status!= 'all') ? " AND types = '$status'" : "";
    else
      $addition = ($status!= 'all') ? " AND status = '$status'" : "";
      
    $query = " SELECT t.id, t.created_at, t.comment_user, t.comment_admin, a.name aname, i.fund_name name,
    i.ISIN code, t.status, t.types, t.amount1  FROM transactions t, custody_ac a, fund i
    WHERE t.id_client = '$client_id' AND a.id = t.id_account AND i.id = t.id_isin1 $addition ";
    
//echo $query;

    $qres=mysql_query($query) or die(mysql_error());
    while($row=mysql_fetch_assoc($qres))
    {
      if(trim($row['id_isin2']))
      {
        $query = " SELECT name, code FROM isin WHERE id = '".trim($row['id_isin2'])."' LIMIT 1";
        //die($query);
        $qres1=mysql_query($query);
        $crow=mysql_fetch_assoc($qres1);
      }


      $transaction = new Transaction();
      $transaction->setId($row['id']);
      $transaction->setStatus($row['status']);
      $transaction->setType($row['types']);
      $transaction->setCommentUser($row['comment_user']);
      $transaction->setCommentAdmin($row['comment_admin']);
      $transaction->setSecurity1($row['name']);
      $transaction->setAmount1($row['amount1']);
      $transaction->setSecurity2($crow['name']?$crow['name']:0);
      $transaction->setAmount2($row['amount2']);
      $transaction->setIsin($row['code']);
      $transaction->setIsin2($crow['code']);
      $transaction->setAccount($row['aname']);
      $transaction->setDatetime($row['created_at']);
      $transactions[] = $transaction;

    }

    return $transactions;
  }


  static public function saveTransaction()
  {
    //var_dump($_POST);
    $result = array();
    if(!exist($_POST['type']))
      $result[]=strtoupper("Type");
    if(!exist($_POST['account']))
      $result[]=("Account");
    if(trim($_POST['type']) == 'switch')  
    if(!exist($_POST['account2']))
      $result[]=("Redemption Account");
    if(!exist($_POST['security1']))
      if(trim($_POST['type']) <> 'purchase')  
        $result[]=("Sell ISIN");
    if((!exist($_POST['Amount']))&&(!exist($_POST['Units'])))
      $result[]=("Units or Amount");

    if(trim($_POST['type']) == 'switch')  
    if((!exist($_POST['Amount2']))&&(!exist($_POST['Units2'])))
    if(!in_array("Units or Amount",$result))
      $result[]=("Units or Amount");
/*  if(trim($_POST['type']) == 'switch')  
    if(!exist($_POST['security2']))
      $result[]=strtoupper("Buy Isin");*/
//1. validate all fields.
//2. save data.
    if(!empty($result))
    {
    }
    else
    {
      //save data here
      if(!exist($_POST['Amount']))
        $amount = mysql_real_escape_string($_POST['Units']);
      else
        $amount = mysql_real_escape_string($_POST['Amount']);
      if(!exist($_POST['Amount2']))
        $amount2 = mysql_real_escape_string($_POST['Units2']);
      else
        $amount2 = mysql_real_escape_string($_POST['Amount2']);

      if(trim($_POST['type']) == 'switch')  
      {
        $query = " INSERT INTO transactions (id_client,id_isin1,amount1,id_account,types,status,comment_user,comment_admin, created_at) ";
        $query.= " VALUES ('".$_SESSION['login']."', '".mysql_real_escape_string($_POST['security1'])."', '".$amount."', ";
        $query.= " '".mysql_real_escape_string($_POST['account'])."', 'sell','pending', '".mysql_real_escape_string($_POST['comment'])."', '', NOW())";
        mysql_query($query) or die(mysql_error()."!<br/>".$query);

        $query = " INSERT INTO transactions (id_client,id_isin1,amount1,id_account,types,status,comment_user,comment_admin, created_at) ";
        $query.= " VALUES ('".$_SESSION['login']."', '".mysql_real_escape_string($_POST['security2'])."', '".$amount2."', ";
        $query.= " '".mysql_real_escape_string($_POST['account2'])."', 'purchase','pending', '".mysql_real_escape_string($_POST['comment2'])."', '', NOW())";
        mysql_query($query) or die(mysql_error()."!<br/>".$query);
      }
      else
      {
        $query = " INSERT INTO transactions (id_client,id_isin1,amount1, id_account,types,status,comment_user,comment_admin) ";
        $query.= " VALUES ('".$_SESSION['login']."', '".mysql_real_escape_string($_POST['security1'])."', '".$amount."', ";
        $query.= " '".mysql_real_escape_string($_POST['account'])."', '".mysql_real_escape_string($_REQUEST['type'])."','pending', '".mysql_real_escape_string($_POST['comment2'])."', '')";
        mysql_query($query) or die(mysql_error()."!<br/>".$query);
      }

    }
    return($result);
  }

  static public function updateTransaction() 
  {
    $result = TransactionCollection::verifyFields();

    if(count($result))
      return ($result);

    $fields = explode(',','security1,Amount,account,status');
    $fieldsDb = explode(',','id_isin1,amount1,id_account,status');

$partOfQuery = array();
  foreach($fields as $key=>$value):
    $partOfQuery[]="`".$fieldsDb[$key]."` = '".$_POST[$fields[$key]]."'";
  endforeach;
$query = "UPDATE `transactions` SET ".implode(" , ",$partOfQuery)." WHERE id = '".$_POST['id']."';";
//echo$query;
mysql_query($query);
header('location: transaction_updated.php');
  }

  static public function verifyFields() 
  {
    foreach($_POST as $key=>$value)
      $_POST[$key] = mysql_real_escape_string($value);
//  $fieldsDb = explode(',','types,id_isin1,amount1,abbreviation,name,id_account,comment_user');
    $fields = explode(',','types,security1,Amount,Currency,Name,account,comment');
    $fieldsObligatory = explode(',','types,security1,account');
    $errorMessage = array('Type (please contact admin)','ISIN','account');
    
    $result = array();
    if($_POST['security1'] == '0')
      unset($_POST['security1']);

    if((!exist($_POST['Amount']))&&(!exist($_POST['Units'])))
      $result[]=("Amount/Units");
  
    foreach($fieldsObligatory as $key=>$field):
      if(!exist($_POST[$field]))
        $result[] = $errorMessage[$key];
    endforeach;

   return $result;
  }


}
