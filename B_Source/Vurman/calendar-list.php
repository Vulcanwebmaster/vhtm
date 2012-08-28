<?php
require_once('core/connect.php');
require_once('core/CoreClass.php');
require_once('BLL/AppoinmentCalendarBLL.php');
require_once('BLL/UserBLL.php');
$ip=$_SERVER['REMOTE_ADDR'];

$objAppCal=new AppointmentCalendarClass($db);
if(isset($_POST['SearchBtn']))
{
	if(isset($_POST['desc'])!="")
	{
		$objAppCal->description=$_POST['desc'];
	}
	if(isset($_POST['fromdt'])!="")
	{
		$objAppCal->fromdate=$_POST['fromdt'];
	}
	if(isset($_POST['todt'])!="")
	{
		$objAppCal->todate=$_POST['todt'];
	}
	$arrAppCal=$objAppCal->SearchAppointment_calendar();
}
$objUser=new UserClass($db);
$arrUser=$objUser->SearchUser();

function approved($isapprove)
{
	if($isapprove==1) return "Approved";
	else			 return "Not Approved";
}

function showuser($userid,$arrUser)
{
	if($userid>0) 
	{
		for($i=0;$i<sizeof($arrUser);$i++)
		{
			if($userid==$arrUser[$i]['id'])
			{
				return $arrUser[$i]['name'];
			}
		}
	}
}

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
	fieldset
	{
		margin-top:10px;
		margin-bottom:10px;
	}
	</style>
    <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript">
	$(function() {
		$("#fromdt,#todt").datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat:'yy-mm-dd',
			numberOfMonths: 2
		});
	});
	</script>
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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset>
<legend>SEARCH</legend>
<table width="600" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th align="right">START DATE</th>
    <td align="left"><input type="text" name="fromdt" id="fromdt" size="10"></td>
    <th align="right">END DATE</th>
    <td align="left"><input type="text" name="todt" id="todt" size="10"></td>
    <th align="right">WORK</th>
    <td align="left"><input type="text" name="desc" id="desc" size="10"></td>
    <td align="left"><input type="submit" name="SearchBtn" id="SearchBtn" value="SEARCH"></td>
  </tr>
  </table>
</fieldset>

<fieldset>
<legend>SEARCH RESULTS</legend>
<table width="600" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th scope="col">START DATE</th>
    <th scope="col">END DATE</th>
    <th scope="col">WORK</th>
    <th scope="col">REQUESTED  BY</th>
    <th scope="col">APPROVAL</th>
    </tr>
<?php 
if(isset($arrAppCal))
{
	foreach($arrAppCal as $item)
	{
?>
  <tr>
    <td><?php echo $item['fromdate']; ?></td>
    <td><?php echo $item['todate']; ?></td>
    <td><?php echo $item['description']; ?></td>
    <td><?php echo showuser($item['appointmentby'],$arrUser); ?></td>
    <td><?php echo approved($item['isapprove']); ?></td>
    </tr>
<?php 
	}
}
?>
</table>

</fieldset>
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