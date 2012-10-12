<?php 
if(isset($_POST['clientid']) && $_POST['clientid']!="")
{
	require_once('../core/connect.php');
	require_once('../core/CoreClass.php');
	require_once('../BLL/UserBLL.php');
	
	$clientid=$_POST['clientid'];
	
	$objUser=new UserClass($db);
	$objUser->clientid=$clientid;
	$arrUser=$objUser->SearchUser();
	
	if(sizeof($arrUser)>0)
	{
		echo $arrUser[0]['first_name']."".$arrUser[0]['last_name'];
	}
	else{
		echo "Not Found";
	}
}
?>