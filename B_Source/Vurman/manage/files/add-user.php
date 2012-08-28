<?php 
require_once('../../core/connect.php');
require_once('../../core/CoreClass.php');
require_once('../../BLL/UserBLL.php');

$userid="";
$name="";
$email="";
$loginid="";
$pass="";
$active=0;
$msg="";

$objUser=new UserClass($db);
//$objUser->entryby=$_SESSION['userid'];

if(isset($_POST['name']) && $_POST['name']!=""){
	$name=$_POST['name'];
	$objUser->name=$name;
}
else{
	echo "Name is Blank.";
	return;
}


if(isset($_POST['email'])&&$_POST['email']!=""){
	 $email=$_POST['email'];
	 $objUser->email=$email;
}
else{
	echo "Email is Blank.";
	return;
}

if(isset($_POST['loginid'])&&$_POST['loginid']!=""){
	 $loginid=$_POST['loginid'];
	 $objUser->login=$loginid;
}
else{
	echo "Login Id is Blank.";
	return;
}

if(isset($_POST['pass'])&&$_POST['pass']!=""){
	 $pass=$_POST['pass'];
	 $objUser->password=$pass;
}
else{
	echo "Password is Blank.";
	return;
}

if(isset($_POST['role'])&&$_POST['role']!="select"){
	 $role=$_POST['role'];
	 $objUser->role=$role;
}
else{
	echo "Select Role.";
	return;
}

if(isset($_POST['clientid'])&&$_POST['clientid']!=""){
	 $clientid=$_POST['clientid'];
	 $objUser->clientid=$clientid;
}
else{
	echo "Select Client Id.";
	return;
}

if(isset($_POST['buyer'])&&$_POST['buyer']!=""){
	 $buyer=$_POST['buyer'];
	 $objUser->buyer=$buyer;
}
else{
	 $objUser->buyer=0;
}

if(isset($_POST['seller'])&&$_POST['seller']!=""){
	 $seller=$_POST['seller'];
	 $objUser->seller=$seller;
}
else{
	 $objUser->seller=0;
}

if(isset($_POST['custodian'])&&$_POST['custodian']!=""){
	 $custodian=$_POST['custodian'];
	 $objUser->custodian=$custodian;
}
else{
	 $objUser->custodian=0;
}

if(isset($_POST['bic'])&&$_POST['bic']!=""){
	 $bic=$_POST['bic'];
	 $objUser->bic=$bic;
}
else{
	 $objUser->bic="";
}


if(isset($_POST['active'])&&$_POST['active']>=0){
	 $active=$_POST['active'];
}


 $objUser->active=$active;

 
if(isset($_POST['userid'])&&$_POST['userid']!=""){
	 $userid=$_POST['userid'];
	 $objUser->id=$userid;
	 $msg=$objUser->UpdateUser();
}
else
{
	$msg=$objUser->InsertUser();
}
echo $msg."|".$objUser->id;
?>