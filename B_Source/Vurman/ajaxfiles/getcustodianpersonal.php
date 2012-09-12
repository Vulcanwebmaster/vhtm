<?php 
if(isset($_POST['id_cus']))
{
	require_once('../core/connect.php');
	require_once('../core/CoreClass.php');
	require_once('../BLL/CustodianBLL.php');
	
	$id=$_POST['id_cus'];
	
	$objCustodian=new CustodianClass($db);
	$objCustodian->id=$id;
	$arrCustodian=$objCustodian->SearchCustodian();
	if(sizeof($arrCustodian)>0)
	{
		echo $arrCustodian[0]['cpid']."|".$arrCustodian[0]['counterparty']."|".$arrCustodian[0]['biccp']."|".$arrCustodian[0]['custid']."|".
		$arrCustodian[0]['custodian']."|".$arrCustodian[0]['biccust']."|".$arrCustodian[0]['cpacwithcust'];
	}
	else
	{
		echo "Not Found";
	}
}
?>