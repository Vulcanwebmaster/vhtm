<?php 
	require_once('../core/connect.php');
	require_once('../core/CoreClass.php');
	require_once('../BLL/AppoinmentCalendarBLL.php');
	
	$fromdate=$_POST['startdate'];
	$todate=$_POST['enddate'];
	$description=$_POST['jobdesc'];
	//$cust_ac_ta=$_POST['cust_ac_ta'];
	
	
	$objAppointment=new AppointmentCalendarClass($db);
	$objAppointment->fromdate=$fromdate;
	$objAppointment->todate=$todate;
	$objAppointment->description=nl2br($description);
	
	$msg="";
	
	if(isset($_POST['id']))
	{
		$id=$_POST['id'];
		$objAppointment->appointmentid=$id;
		$msg=$objAppointment->UpdateAppointment_calendar();
	}
	else{
		$objAppointment->appointmentby=$_SESSION['login'];
		$msg=$objAppointment->InsertAppointment_calendar();
	}
	
	
	echo $msg;

?>