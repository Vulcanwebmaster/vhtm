<?php 
if(isset($_POST['transfer_agent_id']) && $_POST['transfer_agent_id']!="")
{
	require_once('../core/connect.php');
	require_once('../core/CoreClass.php');
	require_once('../BLL/TransferAgentBLL.php');
	
	$cpid=$_POST['transfer_agent_id'];
	
	$objTransferAgentSearch=new TransferAgentClass($db);
	//echo $cpid;
	$objTransferAgentSearch->id=$cpid;
	$arrTransferAgentSearch=$objTransferAgentSearch->SearchTransferAgent();
	if(sizeof($arrTransferAgentSearch)>0)
	{
		
		echo $arrTransferAgentSearch[0]['transfer_agent']."|".$arrTransferAgentSearch[0]['postal_address']."|".$arrTransferAgentSearch['0']['postal_address_I']."|".$arrTransferAgentSearch[0]['phone_number']."|"
		.$arrTransferAgentSearch[0]['account_number']."|".$arrTransferAgentSearch[0]['key_contact_persons']."|".$arrTransferAgentSearch[0]['email_address']."|".$arrTransferAgentSearch[0]['fax_no']."|"
		.$arrTransferAgentSearch[0]['additional_information']."|".$arrTransferAgentSearch[0]['zip'];
		
		//echo $arrCustodian[0]['custodian']."|".$arrCustodian[0]['biccustodian']."|".$arrCustodian[0]['acwithcust']."|".$arrCustodian[0]['transferagent']."|".$arrCustodian[0]['bicta']."|".$arrCustodian[0]['acwithta'];
	}
	else
	{
		echo "Not Found";
	}
}
?>