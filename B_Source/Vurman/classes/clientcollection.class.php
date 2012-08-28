<?php
class ClientCollection
{

  static public function checkClientExistance () 
  {
    $id = mysql_real_escape_string($_POST['client']);
    if(!$id)
      return('Should choose client');


    if(!count(ClientCollection::getClients($id)))
      return('Should choose client');

   if(!count(CustodyCollection::getAccountsForClient($id)))
     return('This client has no custody accounts... add custody accounts first!');

    return false;
  }

  static public function getClients($id = false) 
  {
    $result = array();
    $query = $id ? " SELECT id, name, email, login, password FROM user WHERE id = '$id'" : " SELECT id, name, email, login, password FROM user" ;
	echo $query;
    $qres=mysql_query($query);
    if(!empty($qres))
    while($row = mysql_fetch_assoc($qres))
      $result[] = $row;
    return($result);
  }

  static public function deleteClients() 
  {
    $_POST[$key] = mysql_real_escape_string($value);

    foreach($_POST as $key=>$curr):
    $key = mysql_real_escape_string($key);
    if(substr($key, 0, 3) == 'id_')
    if(substr($key,3))
    {
      $query= "DELETE FROM user WHERE id = '".substr($key,3)."'" ;
      mysql_query($query);
    }
    endforeach;
  }

  static public function verifyFields() 
  {
    foreach($_POST as $key=>$value)
      $_POST[$key] = mysql_real_escape_string($value);

    $fields = array('login','password','email','name');
    $fieldsObligatory = array('login','password');
    $errorMessage = array('Login','Password');
    $result = array();

    foreach($fieldsObligatory as $key=>$field):
      if(!exist($_POST[$field]))
        $result[] = $errorMessage[$key];
    endforeach;

   return $result;
  }

  static public function addClient() 
  {
    $result = ClientCollection::verifyFields();

    if(count($result))
      return ($result);
//  if all right, save data.

$query = "INSERT INTO `user` (
`id` ,
`login` ,
`password` ,
`email` ,
`name`
)
VALUES (
NULL , '".$_POST['login']."', '".$_POST['password']."', '".$_POST['email']."', '".$_POST['name']."');";

//die($query);

mysql_query($query);
header('location: user_created.php');
  }

  static public function loadClient()
  {
    $_GET['id'] = mysql_real_escape_string($_GET['id']);
    if(!exist($_GET['id']))
      die('wrong id, please contact admin..');
    $query = "SELECT * FROM user WHERE id = '".$_GET['id']."'";
    $qres=mysql_query($query);
    $row=mysql_fetch_assoc($qres);

    if(empty($row))
      die('wrong id, please contact admin.');

    $fields = array('id','login','password','email','name');
    $fieldsDb = array('id','login','password','email','name');
    foreach($fields as $key=>$value)
      $_POST[$value] = $row[$fieldsDb[$key]];
  }

  static public function updateClient() 
  {
    $result = ClientCollection::verifyFields();

    if(count($result))
      return ($result);

$query = "UPDATE `user` SET `login` = '".$_POST['login']."' , `password` = '".$_POST['password']."' , `email` = '".$_POST['email']."' , 
`name` = '".$_POST['name']."' WHERE id = '".$_POST['id']."';";
mysql_query($query);
header('location: user_updated.php');
  }


}
