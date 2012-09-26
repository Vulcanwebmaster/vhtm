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



$objCoustodyAC=new Custody_ACClass($db);

$arrCustodyAC=$objCoustodyAC->GetCustody_ACUsingArray();



$ip=$_SERVER['REMOTE_ADDR'];



if(isset($_POST['GetFund'])){

$msg="";

	$clientid=$_POST['Client-ID'];

	

	if($clientid!="")

	{

		$objUser=new UserClass($db);

		$objUser->login=$clientid;

		$arrUser=$objUser->SearchUser();



		$objTransfer=new TradingClass($db);

		$objTransfer->client_id=$arrUser[0]['id'];

		$objTransfer->reference=$_POST['Reference'];
		$objTransfer->client_name=$_POST['Client'];
		$objTransfer->isin=$_POST['security1'];

		$objTransfer->currency=$_POST['currency_hid'];

		$objTransfer->fund_name=$_POST['Name'];

		$objTransfer->unknown_isin=$_POST['comment'];

		$objTransfer->quantity=$_POST['Quantity'];

		$objTransfer->custody_ac=$_POST['custody-ac'];

		$objTransfer->remarks_vurman=$_POST['remarks_vfs'];

		$objTransfer->trade_remarks=$_POST['trade_remarks'];

		$objTransfer->trade_date=$_POST['Trade_Date'];

		$objTransfer->value_date=$_POST['Settlement_Date'];

		//$objTransfer->status="pending";

		//$objTransfer->types="purchase";

		

		$msg=$objTransfer->InsertTrading();

		//echo $msg;

	

	}

	else

	{

		$msg="Please enter CLIENT-ID.";

	}

	

}



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

    <script type="text/javascript" language="javascript" src="js/subscription_order.js"></script>

    

    <?php 

		echo $objISIN->GetISINJSON();

		echo $objCurrency->GetCurrencyJSON();

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



     <fieldset>

      <legend>CLIENT DETAILS</legend>

        <table align="center">

        <tr>

         <td align="right"><span style='color:#FF0000'>CLIENT-ID*</span></td>

         <td align="left"><input class="norm" type="text" name="Client-ID" id="Client-ID" style="width:80px;" onChange="getClientName();" /></td>         

         <td align="right"><span style='color:#FF0000'>REFERENCE*</span></td>

         <td align="left"><input class="norm" type="text" name="Reference" id="Reference" style="width:85px" /></td>

        </tr>



        <tr>

    	   	 <td align="right">CLIENT NAME</td>              

	         <td colspan="4" align="left"><input name="Client" type="text" id="Client" style="width:242px;" readonly="readonly" /></td>

        </tr>

       </table>

      </fieldset>



  <fieldset>

   <legend>SUBSCRIPTION ORDER - DETAILS</legend>

    <table class="contab" align="center">

     <tr>

       <td align="right" style="color:red;">PURCHASE ISIN*</td>

       <td align="left">

       <input type="text" id="security1" class="norm" style="width:105px;" name="security1" onChange="GetFundName()" />

       </td>

       

       <td align="right" style="color:red;">CURRENCY*</td>

      <td align="left">

       <input name="currency" type="text" id="currency" style="width:35px;" class="norm" /><input type="hidden" name="currency_hid" id="currency_hid" value="" />

      </td>

     </tr>

  

     <tr>   

      <td align="right">FUND NAME</td>



     <td colspan="4" align="left">

     	<span id="NameSpan" name="NameSpan" style="color:#333; font-size:12px;"></span>

        <input id="Name" name="Name" type="hidden" value="" />

        </td>

     </tr>

      <tr>

      <td colspan="4" style="padding-top:8px;">

       <div class='notification'>IF ISIN IS NOT IN THE DATABASE, JUST ADD IT IN THE "UNKNOWN ISIN" FIELD</div>

      </td>

     </tr>

     <tr>

       <td align="right">UNKNOWN ISIN</td>

       <td colspan="4" align="left"><input class="norm" type="text" style="width:105px;" name="comment" id="comment" /></td>

     </tr>

       

     <tr>

       <td align="right" style="color:red;">QUANTITY*</td>

      <td align="left"><input style="width:100px;" type="text" name="Quantity" id="Quantity" /></td>   

       

       <td align="right" style="color:red;">CUSTODY A/C*</td>

       <td><select name="custody-ac" id="custody-ac" class="dropdown">

         <option value="" style="padding-left:25px;">select</option>

         <?php 

			if(isset($arrCustodyAC))

			{

				for($i=0;$i<sizeof($arrCustodyAC);$i++)

				{

					echo "<option value=\"".$arrCustodyAC[$i]['id']."\">".$arrCustodyAC[$i]['name']."</option>";

				}

			}

		?>

         </select></td>

     </tr>

     <tr>

      <td align="right"><span style='color:#FF0000'>TRADE DATE*</span></td>



       <td align="left">

        <input name="Trade_Date" type="text" style="width:75px;" id="Trade_Date" />

       </td>

                

       <td align="right"><span style='color:#FF0000'>VALUE DATE*</span></td>

        <td align="left">

         <input style="width:75px;" type="text" name="Settlement_Date" id="Settlement_Date" />

        </td>

      </tr>

     <tr>

       <td align="right">REMARKS TO VFS</td>

       <td colspan="3" align="left"><input class="norm" type="text" size="57" name="remarks_vfs" id="remarks_vfs" value=""/></td>

     </tr>

     <tr>

       <td align="right">TRADE REMARKS</td>

       <td colspan="3" align="left"><input class="norm" type="text" size="57" name="trade_remarks" id="trade_remarks" value=""/></td>

     </tr>

     

   </table>

  </fieldset>



  <fieldset>

   <input style="float:center;" type="submit" id="GetFund" name="GetFund" value="SUBSCRIPTION" onclick='return verify();' />

  </fieldset>



  <fieldset>

   <legend>IMPORTANT</legend>

    <center>FIELDS MARKED WITH AN ASTERISK * ARE MANDATORY</center>

   </fieldset>



 </form>

</div>

 <div id="loading-dialog" class="ui-widget">

<img align="loading" src="img/loading.gif" />

<br>

<h3>Please wait...</h3>

</div> 

        <div id="right">

            <?php require_once('include/menu-right-client.php'); ?>

        </div>

    </div>

</body>

</html>