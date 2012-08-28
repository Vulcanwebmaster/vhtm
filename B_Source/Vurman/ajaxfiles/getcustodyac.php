<?php 
if(isset($_POST['id_client']))
{
	require_once('../core/connect.php');
	require_once('../core/CoreClass.php');
	require_once('../BLL/Custody_ACBLL.php');
	require_once('../BLL/UserBLL.php');
	
	$objUser=new UserClass($db);
	$objUser->login=$_POST['id_client'];
	$arrUser=$objUser->SearchUser();
	
	if(sizeof($arrUser)>0)
	{	
	
		$objCustAC=new Custody_ACClass($db);
		$objCustAC->id_client=$arrUser[0]['id'];
		$arrCustAC=$objCustAC->SearchCustody_AC();
		
		if(sizeof($arrCustAC)>0)
		{
			for($i=0;$i<sizeof($arrCustAC);$i++)
			{
				echo $arrCustAC[$i]['id'].",".$arrCustAC[$i]['name']."|";
			}
		}
		else
		{
			echo "0";
		}
	}
	else
	{
		echo "-2";
	}
}
else
{
echo "-1";
}
?>