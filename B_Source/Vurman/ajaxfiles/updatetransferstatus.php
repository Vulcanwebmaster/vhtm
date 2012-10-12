<?php 
if(isset($_POST['id']) && $_POST['id']!="")
{
	require_once('../core/connect.php');
	require_once('../core/CoreClass.php');
	require_once('../BLL/Transfer_BLL.php');
	
	$id=$_POST['id'];
	$status=$_POST['status'];
	
	$objTransfer=new TransferClass($db);
	$objTransfer->id=$id;
	$objTransfer->settled_by=$_SESSION['login'];
	$objTransfer->status=$status;
	$msg=$objTransfer->UpdateTransferStatus();
	
	echo $msg;
}
?>