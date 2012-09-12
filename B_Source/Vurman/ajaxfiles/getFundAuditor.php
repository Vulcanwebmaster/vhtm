<?php 
if(isset($_POST['id']) && $_POST['id']!="")
{
	require_once('../core/connect.php');
	require_once('../core/CoreClass.php');
	require_once('../BLL/FundAuditorBLL.php');
	
	$id=$_POST['id'];
	
	$objFundAuditor1=new FundAuditorClass($db);
	//echo $cpid;
	$objFundAuditor1->id=$id;
	$objFundAAuditor=$objFundAuditor1->SearchFundAuditor();
	if(sizeof($objFundAAuditor)>0)
	{
		echo $objFundAAuditor[0]['fund_auditor']."|".$objFundAAuditor[0]['postal_address_fau']."|".$objFundAAuditor[0]['postal_address_fau_I']."|".$objFundAAuditor[0]['phone_number_fau']."|".
		$objFundAAuditor[0]['email_address_fau']."|".$objFundAAuditor[0]['fax_number_fau']."|".$objFundAAuditor[0]['additional_information_fau']."|".$objFundAAuditor[0]['zip_city_fau'];
	}
	else
	{
		echo "Not Found";
	}
}
?>