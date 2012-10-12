<?php
require_once('core/connect.php');
require_once('core/CoreClass.php');
require_once('BLL/AppoinmentCalendarBLL.php');
require_once('BLL/UserBLL.php');
$ip=$_SERVER['REMOTE_ADDR'];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">
<head>
    <title>Vurman - Spectrum Funds</title>
    <meta name="keywords" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta name="description" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8909-1">
    <link rel="Stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/redmond/jquery-ui-1.7.2.custom.css" />
    <style type="text/css">
	input,textarea{
		font-family:Arial, Helvetica, sans-serif;
	}
	textarea{
		font-size:12px;
		width:150px;
	}
	#calendar_appointment table{
		border-collapse:collapse;
		border-style:1px;
	}
	#calendar_appointment table thead td{
		border:0px solid #CCC;
		font-size:16px;
	}
	#calendar_appointment table thead th{
		padding:5px;
		padding-left:20px;
		padding-right:20px;
		border:1px solid #CCC;
	}
	#calendar_appointment table tbody td{
		padding:15px;
		border:1px solid #CCC;
	}
	
	#appointment_entry table th{
		padding-right:5px;
		padding-left:5px;
	}
	
	#calendar td,#calendar td a,#calendar th{
		font-size:14px;
	}
	
	.greencolor{
		background:#9C6;
		color:#FFF;
		cursor:pointer;
	}
	
	.greencolor a{
		color:#FFF;
	}
	
	.datepassgreencolor{
		background:#060;
		color:#FFF;
	}
	
	.datepassgreencolor a{
		color:#FFF;
	}
	
	.lightgreencolor{
		background:#9FC;
		color:#FFF;
	}
	
	.lightgreencolor {
		color:#333;
	}
	
	.availabledate{
		background:#FFF;
		color:#333;
		cursor:pointer;
	}
	
	.availabledate a{
		color:#333;
	}
	
	.approveddate
	{
		background:#F90;
		color:#333;
		cursor:pointer;
	}
	
	.notavailable{
		background:#F1F1F1;
		color:#333;
		border:1px solid #FFF;
	}
	
	.notavailable a{
		color:#333;
	}
	.approveddate a{
		color:#333;
	}
	
	.weekend{
		background:#FFF;
		color:#F00;
	}
	
	.weekend a{
		color:#F00;
	}
	</style>
    <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/appointment-cal.js"></script>
    <?php 
		/*echo $objISIN->GetISINJSON();
		echo $objCurrency->GetCurrencyJSON();*/
		
		if(isset($_GET['year']) ) 		$year=$_GET['year'];		else			$year=gmdate("Y");

		if(isset($_GET['month']) )		$month=$_GET['month'];		else			$month=gmdate('m');

		$day=1;
		
		$currentTimeStamp = strtotime("$year-$month-$day");
		$monthName = date("F", $currentTimeStamp);
		$numDays = date("t", $currentTimeStamp);
		
		$aCalObj=new AppointmentCalendarClass($db);
		$frmdt=$year."-".$month."-"."01";
		$todt=$year."-".$month."-".$numDays;
		$aCalObj->fromdate=$frmdt;
		$aCalObj->todate=$todt;
		$eventArr=$aCalObj->GetAMonthAppoinments();
		
		$counter = 0;
		$numEventsThisMonth = 0;
		$hasEvent = false;
		$todaysEvents = ""; 
		$numDays = date("t", $currentTimeStamp); 
		
		$previous =  date("Y-m-d",strtotime($frmdt." -1 months"));
		$next =  date("Y-m-d",strtotime($frmdt." +1 months"));
		
		$prevArr=explode("-",$previous);
		$prevMonth=$prevArr[1];
		$prevYear=$prevArr[0];
		
		$nextArr=explode("-",$next);
		$nextMonth=$nextArr[1];
		$nextYear=$nextArr[0];
		
		$todaysday=gmdate('d');
	?>
    <script type="text/javascript">
	var globalMonth="<?php echo $month; ?>";
	var globalYear="<?php echo $year; ?>";
	var totalDay="<?php echo $numDays; ?>";
	var globaluser="<?php echo $_SESSION['login']; ?>";
	var todaysDay="<?php echo $todaysday; ?>";
	</script>
	<?php 
		echo $aCalObj->GetAMonthAppoinmentJSON();
	?>

</head>
<body>
    <div id="main_cont">
        <div id="title">
            <img src="ZEIT8.jpg" alt="" /></div>
        <div id="left">
            <?php require_once('include/menu-left-client.php'); ?>
        </div>
      
        <div id="content">

<?php
if(isset($msg) && $msg!=""){
?>
<div class="error" style="text-transform:uppercase;"><h5><?php echo $msg; ?></h5></div>      
<?php 
}
?>
<div id="error1" style="width:600px; display:none; clear:both; margin-bottom:5px;" align="center">
    <div  class="error" style="text-transform:uppercase; width:250px;">Mandatory Fields * Are:</div>
   <div id="error2" class="error" style="text-transform:uppercase; margin-top:5px;"></div>
</div>

<FORM ACTION="" METHOD="post">
<div id="calendar_appointment">
<table id="calendar" width='630' border='0' cellspacing='1' cellpadding='0'>
<thead>
<tr>
	<td colspan="2" align="center"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?year=<?php echo $prevYear; ?>&month=<?php echo $prevMonth; ?>"><strong>Previous Month</strong></a></td>
	<td colspan="3" align="center"><h3><?php
		echo gmdate("F",$currentTimeStamp);
		echo ", ";
    	echo $year;
	?></h3></td>
	<td colspan="2" align="center"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?year=<?php echo $nextYear; ?>&month=<?php echo $nextMonth; ?>"><strong>Next Month</strong></a></td>
    </tr>
<tr>
<th  width='90' class="weekend">S</th>
<th  width='90' class="availabledate">M</th>
<th  width='90' class="availabledate">T</th>
<th  width='90' class="availabledate">W</th>
<th  width='90' class="availabledate">T</th>
<th  width='90' class="availabledate">F</th>
<th  width='90' class="weekend">S</th>
</tr>
</thead> 
<tbody>
<?php 
for($i = 1; $i < $numDays+1; $i++, $counter++)
{
	$timeStamp = strtotime("$year-$month-$i");
	$wday=date('N', $timeStamp)." "; // for given date 
	
	if($i == 1)
	{
		// Workout when the first day of the month is
		$firstDay = date("w", $timeStamp);
	
		for($j = 0; $j < $firstDay; $j++, $counter++)
		echo "<td>&nbsp;</td>";
	} 
	
	if($counter % 7 == 0)
		echo "</tr><tr>";
	
	$dt="";
	$eventName="";
	$eventDesc="";
	$eventLocation="";
	$eventId="";
	$currUser=0;
	
	if($wday>0 && $wday<6)
	{
		foreach($eventArr as $item)
		{
			$currUser=$item['appointmentby'];
			$IsApprove=$item['isapprove'];
			$temp=explode("-",$item['fromdate']);
			$temp2=explode("-",$item['todate']);
			
			$dt=$temp[2];
			$dt2=$temp2[2];
			
			if($dt==$i)
			{
				$eventName=$item['description'];
				$eventId=$item["appointmentid"];
				break;
			}
			else if($i>$dt && $i<=$dt2){
				$eventName=$item['description'];
				$eventId=$item["appointmentid"];
				break;
			}
			else
			{
				$dt="";
				$eventName="";
				$eventDesc="";
				$eventLocation="";
				$eventId="";
			}
			
		}
	}
	else if($wday>=6 && $wday<=7){
		$dt="weekday";
	}
	if($dt==""){
		//$tmpDay=$i+2;
		$today=time();
		$currday=mktime(0,0,0,$month,$i,$year);
		$diffDate=floor(($currday-$today)/86400);
		if($diffDate>=2)
			echo "<td id=\"div$i\" class=\"availabledate\" width='90' onclick=\"newAppointment('$i');\">$i</td>"; 
		else
			echo "<td id=\"div$i\" class=\"notavailable\" width='90' >$i</td>"; 
	}
	else if($dt=="weekday")
	{
		echo "<td class=\"weekend\" width='90'>$i</td>"; 
	}
	else
	{
		 if($currUser==$_SESSION['login']){
			 if($IsApprove==1)
			 	echo "<td id=\"div$i\" class='approveddate' width='90'>$i</td>";
			 else
			 {
				 $today=time();
				 $currday=mktime(0,0,0,$month,$i,$year);
				 $diffDate=floor(($currday-$today)/86400);
				 
				 if($diffDate>=2)
					echo "<td id=\"div$i\" onclick=\"showAppointment('$eventId');\" class='greencolor' width='90'>$i</td>";
				 else
				 	echo "<td id=\"div$i\" class='datepassgreencolor' width='90'>$i</td>";
			 }
		 }
		 else
		 {
			 ?>
		<td <?php echo "id=\"div$i\""; if($IsApprove==1) {echo "class='approveddate'"; }else {echo "class='lightgreencolor'";} ?> width='90'>
       <?php echo  $i; ?>
		</td> 
      <?php
		 }
	}
}
?>
</tbody>
</table>

<div id="appointment_entry">
<fieldset>
<legend>APPOINTMENT INFORMATION</legend> 
<span id="appointment_id" name="appointment_id"></span>
<table width="400" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th scope="row" align="right">START DATE</th>
    <th scope="row" align="left"><input style="width:40px;" type="text" readonly="readonly" value="<?php echo $year; ?>" name="startYear" id="startYear"> - <input style="width:25px;" readonly="readonly" type="text" name="startMonth" id="startMonth" value="<?php echo $month; ?>" > - <input style="width:25px;" type="text" readonly="readonly" name="startdate" id="startdate"></th>
  </tr>
  <tr>
    <th scope="row" align="right">END  DATE</th>
    <th scope="row" align="left"><input style="width:40px;" type="text" readonly="readonly" value="<?php echo $year; ?>" name="endYear" id="endYear"> - <input style="width:25px;" readonly="readonly" type="text" name="endMonth" id="endMonth" value="<?php echo $month; ?>" > - <input style="width:25px;" type="text" name="enddate" id="enddate"></th>
  </tr>
  <tr>
    <th scope="row" align="right">JOB DESCRIPTION</th>
    <th scope="row" align="left"><textarea id="jobdesc" name="jobdesc" cols="20" rows="3"></textarea></th>
  </tr>
  <tr>
    <th scope="row" align="right">&nbsp;</th>
    <th scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th scope="row" align="right">&nbsp;</th>
    <th scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th scope="row" align="right">&nbsp;</th>
    <th scope="row">&nbsp;</th>
  </tr>
</table>
</fieldset>
</div>

</div>
 </form>
</div>
<!--<div id="loading-dialog" class="ui-widget">
<img align="loading" src="img/loading.gif" />
<br>
<h3>Please wait .......</h3>
</div>  -->  
        <div id="right">
            <?php require_once('include/menu-right-client.php'); ?>
        </div>
    </div>
</body>
</html>