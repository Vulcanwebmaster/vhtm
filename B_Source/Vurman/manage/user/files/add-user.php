<?php 
require_once('../../../core/connect.php');
require_once('../../../core/CoreClass.php');
require_once('../../../BLL/UserBLL.php');

$userid="";
$name="";
$email="";
$loginid="";
$pass="";
$active=0;
$msg="";

$objUser=new UserClass($db);
$objUser->entryby=$_SESSION['userid'];

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

if(isset($_POST['role'])&&$_POST['role']>0){
	 $role=$_POST['role'];
	 $objUser->role=$role;
}
else{
	echo "Select Role.";
	return;
}

if(isset($_POST['desg'])&&$_POST['desg']>0){
	 $desg=$_POST['desg'];
	 $objUser->desgid=$desg;
}
else{
	echo "Select Role.";
	return;
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
echo $msg."|".$objUser->userid;
?>