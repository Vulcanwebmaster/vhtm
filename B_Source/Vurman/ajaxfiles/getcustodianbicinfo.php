<?php 
if(isset($_POST['custodianid']) && $_POST['custodianid']!="")
{
	require_once('../core/connect.php');
	require_once('../core/CoreClass.php');
	require_once('../BLL/CustodianBLL.php');
	
	$custodianid=$_POST['custodianid'];
	$objCustodian=new CustodianClass($db);
	$objCustodian->custid=$custodianid;
	$arrCustodian=$objCustodian->SearchCustodian();
	if(sizeof($arrCustodian)>0)
	{
		echo $arrCustodian[0]['custodian']."|".$arrCustodian[0]['biccust']."|".$arrCustodian[0]['cpacwithcust'];
		//echo $arrCustodian[0]['custodian']."|".$arrCustodian[0]['biccustodian']."|".$arrCustodian[0]['acwithcust']."|".$arrCustodian[0]['transferagent']."|".$arrCustodian[0]['bicta']."|".$arrCustodian[0]['acwithta'];
	}
	else
	{
		echo "Not Found";
	}
}
?>