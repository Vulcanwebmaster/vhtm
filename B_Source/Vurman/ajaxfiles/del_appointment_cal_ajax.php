<?php 
	require_once('../core/connect.php');
	require_once('../core/CoreClass.php');
	require_once('../BLL/AppoinmentCalendarBLL.php');
	
	
	$objAppointment=new AppointmentCalendarClass($db);
	
	$msg="";
	
	if(isset($_POST['id']))
	{
		$id=$_POST['id'];
		$objAppointment->appointmentid=$id;
		$msg=$objAppointment->DeleteAppointment_calendar();
	}
		
	echo $msg;

?>