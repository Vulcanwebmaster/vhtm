<?php 
if(isset($_POST['sellerid']) && $_POST['sellerid']!="")
{
	require_once('../core/connect.php');
	require_once('../core/CoreClass.php');
	require_once('../BLL/CustodianBLL.php');
	
	$cpid=$_POST['sellerid'];

	$objCustodian=new CustodianClass($db);
	$objCustodian->cpid=$cpid;
	$arrCustodian=$objCustodian->SearchCustodian();
	if(sizeof($arrCustodian)>0)
	{
		
		echo $arrCustodian[0]['counterparty_name']."|".$arrCustodian[0]['bic_counterparty'];
		//echo $arrCustodian[0]['custodian']."|".$arrCustodian[0]['biccustodian']."|".$arrCustodian[0]['acwithcust']."|".$arrCustodian[0]['transferagent']."|".$arrCustodian[0]['bicta']."|".$arrCustodian[0]['acwithta'];
	}
	else
	{
		echo "Not Found";
	}
}
?>