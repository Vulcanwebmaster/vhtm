<?php 
require_once('../../core/connect.php');
require_once('../../core/CoreClass.php');
require_once('../../BLL/AccountsBLL.php');

$id="";
$name="";
$client="";
$currency="";
$amount="";
$debit=0;
$credit=0;
$vdate1="";
$vdate2="";
$msg="";

$objAccount=new AccountClass($db);
//$objAccount->entryby=$_SESSION['userid'];

if(isset($_POST['name']) && $_POST['name']!=""){
	$name=$_POST['name'];
	$objAccount->name=$name;
}
else{
	echo "Name is Blank.";
	return;
}

if(isset($_POST['amount']) && $_POST['amount']!=""){
	$amount=$_POST['amount'];
	$objAccount->amount=$amount;
}
else{
	echo "Amount is Blank.";
	return;
}


if(isset($_POST['currency'])&&$_POST['currency']!=""){
	 $currency=$_POST['currency'];
	 $objAccount->id_currency=$currency;
}
else{
	echo "Please Select Currency.";
	return;
}

if(isset($_POST['client'])&&$_POST['client']!=""){
	 $client=$_POST['client'];
	 $objAccount->id_client=$client;
}
else{
	echo "Please Select Client.";
	return;
}


if(isset($_POST['debit'])&&$_POST['debit']>=0){
	 $debit=$_POST['debit'];
}

if(isset($_POST['credit'])&&$_POST['credit']>=0){
	 $credit=$_POST['credit'];
}

if(isset($_POST['vdate1'])&&$_POST['vdate1']>=0){
	 $vdate1=$_POST['vdate1'];
}

if(isset($_POST['vdate2'])&&$_POST['vdate2']>=0){
	 $vdate2=$_POST['vdate2'];
}


$objAccount->debit=$debit;
$objAccount->credit=$credit;
$objAccount->vdate1=$vdate1;
$objAccount->vdate2=$vdate2;

 
if(isset($_POST['id'])&&$_POST['id']!=""){
	 $id=$_POST['id'];
	 $objAccount->id=$id;
	 $msg=$objAccount->UpdateAccount();
}
else
{
	$msg=$objAccount->InsertAccount();
}
echo $msg."|".$objAccount->id;
?>