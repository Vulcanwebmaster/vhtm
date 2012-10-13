<?php 
require_once('../core/connect.php');
require_once('../core/CoreClass.php');
require_once('../BLL/UserBLL.php');

$userid="";
$name="";
$email="";
$loginid="";
$pass="";
$active=0;
$msg="";

$objUser=new UserClass($db);
//$objUser->entryby=$_SESSION['userid'];

if(isset($_POST['firstname']) && $_POST['firstname']!=""){
	$fname=$_POST['firstname'];
	$objUser->firstname=$fname;
}
else{
	echo "First name is Blank.";
	return;
}

if(isset($_POST['lastname']) && $_POST['lastname']!=""){
	$lname=$_POST['lastname'];
	$objUser->lastname=$lname;
}
else{
	echo "First name is Blank.";
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
	 $objUser->loginid=$loginid;
}
else{
	echo "Login Id is Blank.";
	return;
}

if(isset($_POST['password'])&&$_POST['password']!=""){
	 $pass=$_POST['password'];
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

if(isset($_POST['company'])&&$_POST['company']!=""){
	 $company=$_POST['company'];
	 $objUser->company=$company;
}
else{
	 $objUser->company="";
}

if(isset($_POST['gender'])&&$_POST['gender']!=""){
	 $gender=$_POST['gender'];
	 $objUser->gender=$gender;
}
else{
	 $objUser->gender="";
}

if(isset($_POST['phone'])&&$_POST['phone']!=""){
	 $phone=$_POST['phone'];
	 $objUser->phone=$phone;
}
else{
	 $objUser->phone="";
}

if(isset($_POST['department'])&&$_POST['department']!=""){
	 $department=$_POST['department'];
	 $objUser->department=$department;
}
else{
	 $objUser->department="";
}


if(isset($_POST['active'])&&$_POST['active']>=0){
	 $active=$_POST['active'];
}


 $objUser->active=$active;

 
if(isset($_POST['id'])&&$_POST['id']!=""){
	 $userid=$_POST['id'];
	 $objUser->id=$userid;
	 $msg=$objUser->UpdateUser();
}
else
{
	$msg=$objUser->InsertUser();
}
echo $msg."|".$objUser->id."|".$msg;
?>