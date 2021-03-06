<?php
require_once('core/connect.php');
require_once('core/CoreClass.php');
require_once('BLL/IsinBLL.php');
require_once('BLL/CurrencyBLL.php');
require_once('BLL/CustodianBLL.php');
require_once('BLL/Custody_ACBLL.php');
require_once('BLL/CurrencyBLL.php');
require_once('BLL/TradingBLL.php');
require_once('BLL/UserBLL.php');

$objCurrency=new CurrencyClass($db);
$arrCurrency=$objCurrency->GetCurrencyUsingArray();

$objISIN=new IsinClass($db);
$arrISIN=$objISIN->GetIsinUsingArray();
$objUser=new UserClass($db);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">
<head>
    <title>Vurman - Spectrum Funds</title>
    <meta name="keywords" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta name="description" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="Stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/redmond/jquery-ui-1.7.2.custom.css" />
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="js/common.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
     <script type="text/javascript" src="js/red-open-trade-client.js"></script>
    <link rel="stylesheet" href="css/pagination.css" />
	<script type="text/javascript" src="js/jquery.pagination.js"></script>
    
    <style type="text/css">
	table{
		font-size:1.0em;
	}
	table td,table th{
		padding:2px;
	}
	table input,table select{ font-size:1em;}
	#Citys{
		width:650px;
		font-size:0.9em;
	}
	#Citys th
	{
		font-size:0.95em;
	}
	#Citys td
	{
		/*text-align:left;*/
		word-wrap:no-wrap;
		padding-left:2px;
	}
	span .value{
		color:#000000;
	}
	</style>
<?php 
	if(isset($_POST['Search']) && $_POST['Search']=="Search")
	{
	$objTransfer=new TradingClass($db);
	$objTransfer->status="settled";
	$objTransfer->types="sell";
	
	if(isset($_POST['client_id']) && $_POST['client_id']!="")
	{
		$objTransfer->id_client=$_POST['client_id'];
	}
	
	if(isset($_POST['currency']) && $_POST['currency']>0)
	{
		$objTransfer->currency=$_POST['currency'];
	}
	
	if(isset($_POST['security1']) && $_POST['security1']!="")
	{
		$objTransfer->id_isin=$_POST['security1'];
	}
	if(isset($_POST['quantity']) && $_POST['quantity']!="")
	{
		$objTransfer->amount=$_POST['quantity'];
	}	
	
	
	echo $objTransfer->GetTradingUsingJSON();
	}
	if(isset($_POST['Search']) && $_POST['Search']=="Search"){
?>

<?php 
		echo $objISIN->GetISINJSON();
		echo $objCurrency->GetCurrencyJSON();
		echo $objUser->GetUserSUsingJSON();
		$objCustodyAC=new Custody_ACClass($db);
		if($_SESSION['usertype']=="user")
			$objCustodyAC->id_client=$_SESSION['login'];
		echo $objCustodyAC->GetCustodyACJSON();
	}
?>
</head>
<body>
    <div id="main_cont">
        <div id="title">
            <img src="logo_client.jpg" alt="" /></div>
         <div id="left">
            <?php require_once('include/menu-left-client.php'); ?>
        </div>
     


<input type='hidden' name='type' value='purchase'/>        
 	 <div id="content">
     <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
   	   <?php require_once("include/search-trading.php"); ?>
        <?php require_once('include/search-result-table-trade.php'); ?>
        <?php require_once('include/red-order-details.php'); ?>
        </form>
    </div>

<div id="right">
           <?php require_once('include/menu-right-client.php'); ?>
          </div>
</div>
</body>
</html>