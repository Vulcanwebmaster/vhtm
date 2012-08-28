<?php 
if(isset($_POST['id']) && $_POST['id']!="")
{
	require_once('../core/connect.php');
	require_once('../core/CoreClass.php');
	require_once('../BLL/Transfer_BLL.php');
	
	$id=$_POST['id'];
	$seller_ac_cust=$_POST['seller_ac_cust'];
	$transfer_agent=$_POST['transfer_agent'];
	$bic_ta=$_POST['bic_ta'];
	$cust_ac_ta=$_POST['cust_ac_ta'];
	
	$objTransfer=new TransferClass($db);
	$objTransfer->id=$id;
	$objTransfer->seller_ac_cust=$seller_ac_cust;
	$objTransfer->transfer_agent=$transfer_agent;
	$objTransfer->bic_ta=$bic_ta;
	$objTransfer->cust_ac_ta=$cust_ac_ta;
	$msg=$objTransfer->UpdateTransferDetails();
	
	echo $msg;
}
?>