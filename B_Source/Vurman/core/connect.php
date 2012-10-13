<?php
	session_start();
	if(isset($_SESSION['login']) && $_SESSION['login']!="" && $_SESSION['login']>0)
{
	
}
else{
	header('Location: index.php');
}
	$db=mysql_connect("localhost","root");
	mysql_select_db('vurman1');	
?>