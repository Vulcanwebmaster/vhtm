<?php 
require_once('../core/connect.php');
require_once('../core/CoreClass.php');
require_once('../BLL/CustodianBLL.php');

$userid="";
$name="";
$email="";
$loginid="";
$pass="";
$active=0;
$msg="";

$objCustodian=new CustodianClass($db);

if(isset($_POST['cpid']) && $_POST['cpid']!=""){
	$cpid=$_POST['cpid'];
	$objCustodian->cpid=$cpid;
}
else{
	echo "CP-ID is Blank.";
	return;
}


if(isset($_POST['counterparty'])&&$_POST['counterparty']!=""){
	 $counterparty=$_POST['counterparty'];
	 $objCustodian->counterparty=$counterparty;
}
else{
	echo "Counterparty Id is Blank.";
	return;
}

if(isset($_POST['custid']) && $_POST['custid']!=""){
	$custid=$_POST['custid'];
	$objCustodian->custid=$custid;
}
else{
	echo "CUST-ID is Blank.";
	return;
}


if(isset($_POST['custodian'])&&$_POST['custodian']!=""){
	$custodian=$_POST['custodian'];
	$objCustodian->custodian=$custodian;
}
else{
	echo "Counterparty Id is Blank.";
	return;
}

if(isset($_POST['biccp'])&&$_POST['biccp']!=""){ $objCustodian->biccp=$_POST['biccp']; } else{ $objCustodian->biccp=""; }
if(isset($_POST['biccust'])&&$_POST['biccust']!=""){ $objCustodian->biccust=$_POST['biccust']; } else{ $objCustodian->biccust=""; }
if(isset($_POST['cpacwithcust'])&&$_POST['cpacwithcust']!=""){ $objCustodian->cpacwithcust=$_POST['cpacwithcust']; } else{ $objCustodian->cpacwithcust=""; }


if(isset($_POST['id'])&&$_POST['id']!=""){
	 $id=$_POST['id'];
	 $objCustodian->id=$id;
	 $msg=$objCustodian->UpdateCustodian();
}
else
{
	$msg=$objCustodian->InsertCustodian();
}
echo $msg."|".$objCustodian->id;
?>