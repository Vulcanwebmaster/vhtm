<?php 
if(isset($_POST['id']) && $_POST['id']!="")
{
	require_once('../core/connect.php');
	require_once('../core/CoreClass.php');
	require_once('../BLL/FundAdvisorBLL.php');
	
	$id=$_POST['id'];
	
	$objFundAdvisor1=new FundAdvisorClass($db);
	//echo $cpid;
	$objFundAdvisor1->id=$id;
	$objFundAdvisor=$objFundAdvisor1->SearchFundAdvisor();
	if(sizeof($objFundAdvisor)>0)
	{
		echo $objFundAdvisor[0]['fund_advisor']."|".$objFundAdvisor[0]['postal_address_adv']."|".$objFundAdvisor[0]['postal_address_adv']."|".$objFundAdvisor[0]['phone_number_adv']."|".
		$objFundAdvisor[0]['email_address_adv']."|".$objFundAdvisor[0]['fax_number_adv']."|".$objFundAdvisor[0]['additional_information_adv']."|".$objFundAdvisor[0]['zip_city_adv'];
	}
	else
	{
		echo "Not Found";
	}
}
?>