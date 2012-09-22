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
	$objTransfer->counterparty_ac_custodian=$seller_ac_cust;
	$objTransfer->transfer_agent_name=$transfer_agent;
	$objTransfer->bic_transfer_agent=$bic_ta;
	$objTransfer->custodian_ac_transfer_agent=$cust_ac_ta;
	$msg=$objTransfer->UpdateTransferDetails();
	
	echo $msg;
}
?>