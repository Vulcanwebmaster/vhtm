<?php
$server_name="localhost";
$user_name="ganpati_pfund";
$password="ZKFM=&}=DDUn";

$db_con = mysql_connect($server_name,$user_name,$password);
mysql_select_db("ganpati_funds",$db_con);
if (!$db_con)
  {
  die('Could not connect: ' . mysql_error());
  }

 function get_fund($ISIN)
 {
 	$qr = mysql_query("SELECT * FROM fund WHERE ISIN='".$ISIN."' ");
	if ( mysql_error() ) echo mysql_error();
	if ( mysql_num_rows($qr) == 0 ) return NULL;
	//if ( mysql_num_rows( $qr) > 1 ) return "Duplicate Entry!!!!, please check database";
	// return the very first object incase of multiple entry
	return mysql_fetch_object($qr);
 }
?>
