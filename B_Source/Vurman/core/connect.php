<?php
	session_start();
	if(isset($_SESSION['login']) && $_SESSION['login']!="" && $_SESSION['login']>0)
{
	
}
else{
	header('Location: index.php');
}
	$db=mysql_connect("localhost","web1244_gajendra","B~mC[oo,fTA@");
	mysql_select_db('web1244_gajendra');	
?>