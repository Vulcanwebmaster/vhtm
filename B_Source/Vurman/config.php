<?php
session_start();
//session_register("login");
//session_register("usertype");
define('DBHOST','localhost');
define('LOGIN','root');
define('PASSWORD','');
$link = mysql_connect(DBHOST, LOGIN, PASSWORD) or die('couldnt connect to Mysql Db ');
mysql_select_db('web1244_gajendra', $link) or die ('Can\'t use database : ' . mysql_error());

define('aLogin','admin');  
define('aPass','pass');

define('maxQuantity','100000000');


$templates = 'templates/';
  $typesAllowed = array ('purchase','sell','switch');

?>
