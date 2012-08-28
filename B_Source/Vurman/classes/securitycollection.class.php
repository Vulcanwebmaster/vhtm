<?php
class SecurityCollection
{
  /* function gets $_GET['userid'] as input.
     function produces array of time marks (created_at column) as output.*/
  static public function getDates()
  {
    // get all different time marks (created_at column), that belong to funds of this particular agent
    // make array of it
    // output array of it
    if(loggedAdmin()) //if it is admin
      $userid = mysql_real_escape_string($_GET['userid']);
    elseif(trim($_SESSION['login']))
      $userid = mysql_real_escape_string($_SESSION['login']);
    else die('unauthorized access!');
    //if(loggedAdmin())
    //echo 'pizdec!';
//echo "!!!".$userid;
//var_dump($_SESSION);
    $format = '%Y-%m-%d %H:%M:%S';
    $strf = strftime($format);
    
    $rows = array();
    $rows[] = array('created_at'=>$strf);
    $qres= mysql_query("SELECT DISTINCT created_at FROM security WHERE id_client = '$userid' ORDER BY created_at DESC");
    //echo "SELECT created_at FROM security WHERE id_client = '$userid' ORDER BY created_at DESC";
    while($x = mysql_fetch_assoc($qres))
      $rows[] = $x;
    unset($rows[count($rows)-1]);
    //var_dump($rows);
    //die();
    return $rows;
  }
  
  static public function getHistory()
  {
    $allTimes = SecurityCollection::getDates();
    if(loggedAdmin()) //if it is admin
      $id_client= mysql_real_escape_string($_GET['userid']);
    elseif(isset($_SESSION['login']))
      $id_client= mysql_real_escape_string($_SESSION['login']);
    else die('unauthorized access!');

    //$id_client = mysql_real_escape_string($_GET['userid']);
    $condition = " s.id_client = '$id_client' AND";
    
//    var_dump($allTimes);
    $rows=array();
    foreach($allTimes as $key=>$thisTime):
      $query = " SELECT s.id, i.fund_name iname, s.quantity, ca.name custody, s.created_at, i.ISIN code
      FROM security s, fund i, custody_ac ca ";
      $query.= " WHERE $condition i.id = s.id_isin AND ca.id = s.id_custody 
      AND s.created_at = (SELECT MAX(created_at) FROM security ss WHERE ss.id_client = s.id_client
      AND ss.id_custody = s.id_custody AND ss.id_isin = s.id_isin AND ss.created_at < '".$thisTime['created_at']."') ";
//      echo "$query<br/><br/>";
      $qres = mysql_query($query) or die('could not execute query'.$query);
      while($x = mysql_fetch_assoc($qres))
        $rows[$key][] = $x;
    endforeach;
    
    //var_dump($rows);
    //echo'<hr/><hr/>';
    /*if(1==0)
    foreach($rows as $row):
    echo'<hr/><hr/>';
      var_dump($row);
    echo'<hr/><hr/>';      
    endforeach;*/
    
    return($rows);
  }
  
  static public function getHistoryInstance()
  {
    $allInstances = SecurityCollection::getHistory();
//var_dump($allInstances);
    //var_dump($allInstances);
    if((isset($_GET['number']))&&(isset($allInstances[$_GET['number']])))
      return $allInstances[$_GET['number']];
    else
      return $allInstances[0];
  }
 
  static public function deleteSecurities($userid)
  {
    foreach($_POST as $key=>$curr):
    $key = mysql_real_escape_string($key);
    if(substr($key, 0, 3) == 'id_')
    if(substr($key,3))
    {
      $query = " DELETE FROM security WHERE id_client = '$userid' AND id = '".substr($key,3)."' ";
      mysql_query($query);
    }
    endforeach;
  }

  static public function updateSecurities($userid,$maxValue)
  {
    foreach($_POST as $key=>$curr):
    $key = mysql_real_escape_string($key);
    $_POST[$key] = mysql_real_escape_string($_POST[$key]);    
    if(substr($key, 0, 5) == 'fund_')
    if(substr($key,5))
    if(is_numeric($_POST[$key]))
    if(0<=$_POST[$key])
    if($_POST[$key] <= $maxValue)
    {
//1. get all security data
      $qres = mysql_query(" SELECT * FROM security WHERE id_client = '$userid' AND id = '".substr($key,5)."' ")or die('failed to execute query');
      $security = mysql_fetch_assoc($qres);
      extract($security);
//2. change it's amount
      $quantityNew = $_POST[$key];
      if($quantity <> $quantityNew)
      {
        $query = "INSERT INTO `security` (`id` ,`id_client` ,`id_isin` ,`quantity` ,`id_custody` ,`created_at` )
                  VALUES (NULL , '$userid', '$id_isin', '$quantityNew', '$id_custody', NOW());";
                  $qres = mysql_query($query) or die('failed to executy query'.$query);
      }
    }
    endforeach;
  }

// function get all securities for single client.
// in case $forAll variable is true, it gets securities for all clients.
  static public function getSecurities($id_client = false)
  {

    if(!$id_client)
      $condition = '';
    else
      $condition = " s.id_client = '$id_client' AND";

    $securities = array();

    $query = " SELECT s.id, s.quantity, ca.name custody, i.fund_name iname, i.ISIN code, c.abbreviation cabbreviation 
     FROM security s, fund i, currency c, custody_ac ca ";
    $query.= " WHERE $condition c.id = i.currency AND ca.id = s.id_custody AND s.id_isin = i.id
     AND s.created_at = (SELECT MAX(created_at) FROM security ss WHERE ss.id_client = s.id_client
     AND ss.id_custody = s.id_custody AND ss.id_isin = s.id_isin)";

    $qres=mysql_query($query) or die(mysql_error());
    while($row=mysql_fetch_assoc($qres))
    {
      $pending = '';

      $security = new Security();
      $security->setId($row['id']);
      $security->setCode($row['code']);
      $security->setIsin($row['iname']);
      $security->setQuantity($row['quantity']);
      $security->setName_fund($row['name']);
      $security->setCurrency($row['cabbreviation']);
      $security->setNav($row['nav']);
      $security->setDate_nav($row['date_nav']);
      $security->setPending($pending);
      $security->setCustody($row['custody']);
      $securities[] = $security;

    }

    return $securities;
  }
  static public function getSecurity($isin)
  {

    $id_client = $_SESSION['login'];
    $condition = " s.id_client = '$id_client' AND";

    $securities = array();

    if (get_magic_quotes_gpc()) 
        $isin= stripslashes($isin);


    $query = " SELECT s.id, i.fund_name iname, s.quantity, ca.name custody, i.ISIN code, c.abbreviation cabbreviation
     FROM security s, fund i, currency c, custody_ac ca ";
    $query.= " WHERE $condition c.id = i.currency AND i.ISIN= '".mysql_real_escape_string($isin)."' 
               AND ca.id = s.id_custody AND s.id_isin = i.id" ;

    $qres=mysql_query($query) or die(mysql_error());
    while($row=mysql_fetch_assoc($qres))
    {

      $security = new Security();
      $security->setId($row['id']);
      $security->setCode($row['code']);
      $security->setIsin($row['iname']);
      $security->setQuantity($row['quantity']);
      $security->setName_fund($row['name']);
      $security->setCurrency($row['cabbreviation']);
      $security->setNav($row['nav']);
      $security->setDate_nav($row['date_nav']);
      $security->setCustody($row['custody']);
      $securities[] = $security;

    }

    return $securities;
  }

  static public function addSecurity($maxQuantity)
  {
    SecurityCollection::verifyFields();
    extract($_POST);
    
    $errors=array();
    if(!is_numeric($quantity))
      $errors[] = 'Quantity should be number.';
    if($quantity<0)
      $errors[] = 'Quantity should positive.';      
    if($quantity>$maxQuantity)
      $errors[] = 'Quantity should be less then '.$maxQuantity;
    if(!trim($currency))
      $errors[] = 'Please choose isin';    
    /*elseif(!IsinCollection::getIsin($isin))
      $errors[] = 'Isin should be correct';*/
    if(!trim($account))
      $errors[] = 'Please choose account';    

    if(count($errors))
      return($errors);
    $query = "INSERT INTO `security` (`id` ,`id_client` ,`id_isin` ,`quantity` ,`id_custody` ,`created_at` )
              VALUES (NULL , '$_POST[userid]', '$_POST[isin]', '$_POST[quantity]', '$_POST[account]', NOW());";
//echo $query;
    $qres = mysql_query($query) or die('failed to executy query'.$query);
  }
  static public function verifyFields()
  {
    foreach($_POST as $key=>$value)
      $_POST[$key] = mysql_real_escape_string($value);
  }
}
