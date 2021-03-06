<?php
require_once('core/connect.php');
require_once('core/CoreClass.php');
require_once('BLL/IsinBLL.php');
require_once('BLL/CurrencyBLL.php');
require_once('BLL/CustodianBLL.php');
require_once('BLL/Custody_ACBLL.php');
require_once('BLL/CurrencyBLL.php');
require_once('BLL/Transfer_BLL.php');
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
		//echo $_POST['Settlement_Date'];
		$objTransfer=new TransferClass($db);
		$objTransfer->id_client=$arrUser[0]['id'];
		$objTransfer->client_reference=$_POST['Reference'];
		$objTransfer->id_isin=$_POST['security1'];
		$objTransfer->currency=$_POST['currency_hid'];
		$objTransfer->fund_name=$_POST['Name'];
/*		$objTransfer->isin_reference=$_POST['comment'];*/
		$objTransfer->amount=$_POST['Quantity'];
		/*$objTransfer->custody_ac=$_POST['client'];*/
		$objTransfer->custody_ac=$_POST['custody-ac'];
		$objTransfer->trade_date=$_POST['Trade_Date'];
		$objTransfer->settlement_date=$_POST['Settlement_Date'];
		$objTransfer->seller=$_POST['Partner'];
		$objTransfer->bic_seller=$_POST['BIC_Partner'];
		$objTransfer->custodian=$_POST['Custodian'];
		$objTransfer->bic_custodian=$_POST['Custodian_BIC'];
		$objTransfer->seller_ac_cust=$_POST['client_ac_cust'];
		$objTransfer->transfer_agent=$_POST['TA_Name'];
		$objTransfer->bic_ta=$_POST['TA_BIC'];
		$objTransfer->cust_ac_ta=$_POST['cust_ac_ta'];
		$objTransfer->status="pending";
		$objTransfer->transaction_type="deliver";
		$objTransfer->types="outgoing";
		
		$msg=$objTransfer->InsertTransfer();
		//echo $msg;
	
	}
	else
	{
		$msg="Please enter CLIENT-ID.";
	}
	
}

$objUser1=new UserClass($db);
$objUser1->id=$_SESSION['login'];
$arrUser1=$objUser1->SearchUser();

$objCoustodyAC=new Custody_ACClass($db);
$objCoustodyAC->id_client=$arrUser1[0]['id'];
$arrCustodyAC=$objCoustodyAC->SearchCustody_AC();
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
    <script type="text/javascript" language="javascript" src="js/settlement_instruction_del.js"></script>
    <?php 
		echo $objISIN->GetISINJSON();
		echo $objCurrency->GetCurrencyJSON();
	?>
</head>
<body>
<form name="createT" method="post"  action="" style="padding:0px; margin:0px;">
    <div id="main_cont">
        <div id="title"><img src="ZEIT8.jpg" alt="" /></div>
         <div id="left">
           <?php require_once('include/menu-left-client.php'); ?>
        </div>
     
        <div id="content">

	<div style="margin:5px;"><!--<span id="error">MANDATORY FIELDS * ARE: ISIN, CURRENCY, QUANTITY, CUSTODY A/C, T/D, V/D, SELLER, CUSTODIAN</span>--></div>
<input type='hidden' name='type' value='purchase'/>  
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

 <div>
     <fieldset>
      <legend>CLIENT DETAILS</legend>
       <table align="center">
        <tr>
         <td align="right"><span style='color:#FF0000'>CLIENT-ID*</span></td>
         <td align="left"><input class="norm" type="text" name="Client-ID" id="Client-ID" style="width:80px;" value="<?php echo $_SESSION['login']; ?>" readonly="readonly" /></td>         
         <td align="right"><span style='color:#FF0000'>REFERENCE*</span></td>
         <td align="left"><input class="norm" type="text" name="Reference" id="Reference" style="width:85px" /></td>
        </tr>

        <tr>
    	   	 <td align="right">CLIENT NAME</td>              
	         <td colspan="4" align="left"><input name="Client" type="text" style="width:242px;"  id="Client" readonly="readonly" <?php if(sizeof($arrUser1)){ echo "value='".$arrUser1[0]['name']."'";} ?> /></td>
        </tr>
       </table>
      </fieldset>
</div>
 <div>
  <fieldset id="fieldsetFundDetails" style="display:all;">
   <legend>FUND DETAILS</legend>
    <table align="center">    
     <tr><td align="right"><span style='color:#FF0000'>ISIN*</span></td>
       <td>
         <input type="text" id="security1" class="norm" style="width:105px;" name="security1" onChange="GetFundName()" />
         </td>
       <td align="right"><span style='color:#FF0000' class="norm">CURRENCY*</span></td>
       <td align="left"><!--<select name="currency" id="currency" class="dropdown"></select>-->
         <input name="currency" type="text" id="currency" style="width:35px;" class="norm" /><input type="hidden" name="currency_hid" id="currency_hid" value="" />
         </td>
     </tr>
             
    <tr>
      <td align="right">FUND NAME</td>        
      <td colspan="3" align="left"><!--<input name="Name" type="text" class="norm" id="Name" size="59" readonly="readonly"  />-->
        <span id="NameSpan" name="NameSpan" style="color:#333; font-size:12px;"></span>
        <input id="Name" name="Name" type="hidden" value="" />
        </td>
    </tr>

    <!--<tr>
     <td align="right">REMARKS</td>                
     <td><input class="norm" type="text" name="comment" id="comment" /></td>
    </tr>-->
              
    <tr>
     <td align="right"><span style='color:#FF0000'>QUANTITY*</span></td>
      <td align="left"><input name="Quantity" type="text" id="Quantity" value="" style="width:100px;" /></td>            
      <td><span style='color:#FF0000'>CUSTODY A/C*</span></td>
       <td><select name="custody-ac" id="custody-ac" class="dropdown">
        <option value="">select</option>
       <?php 
			if(isset($arrCustodyAC))
			{
				for($i=0;$i<sizeof($arrCustodyAC);$i++)
				{
					echo "<option value=\"".$arrCustodyAC[$i]['id']."\">".$arrCustodyAC[$i]['name']."</option>";
				}
			}
		?>
       </select>
      </td>
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
       </table>
      </fieldset>
     </div>
           
      
     <div>
      <fieldset id="fieldsetSellerDetails" style="display:all;">
       <legend>BUYER DETAILS</legend>
        <table align="center"> 
         <tr>  
         <td align="right">BUYER-ID</td>
          <td align="left"><input class="norm" type="text" name="Buyer-ID" id="Buyer-ID" style="width:80px;" onChange="getClientName();" /></td>
         </tr>

         <tr>
          <td align="right"><span style="color:#FF0000">BUYER*</span></td>

          <td colspan="4" align="left">
           <input class="norm" type="text" size="32" name="Partner" id="Partner" onChange="GetSeller();" />
          </td>                   
         
          <td align="right">BIC (BUYER)</td>
            
          <td colspan="2" align="left">
            <input name="BIC_Partner" type="text" class="norm" id="BIC_Partner" size="16" readonly="readonly" />
          </td>
          </tr>
                
         <tr>
          <td align="right"><span style='color:#FF0000'>CUSTODIAN*</span></td>
              
          <td colspan="4" align="left">
           <input class="norm" type="text" size="32" name="Custodian" id="Custodian" onChange="GetCustodianBIC();" />
          </td>         
             
          <td align="right">BIC (CUSTODIAN)</td>
                
          <td align="left">
           <input name="Custodian_BIC" type="text" class="norm" id="Custodian_BIC" size="16" readonly="readonly" />
          </td>
         </tr>
               
         <tr>
          <td align="right">BUYER A/C WITH CUST.</td>

          <td align="left"><input class="norm" type="text" name="client_ac_cust" id="client_ac_cust" size="16" value=""/></td>
         </tr>
                
         <tr>
          <td align="right">TRANSFER AGENT</td>

          <td colspan="4" align="left">
           <input class="norm" type="text" size="32" name="TA_Name" id="TA_Name" /></td>
          
           <td align="right">BIC (TA)</td>
                
           <td align="left"><input name="TA_BIC" type="text" class="norm" id="TA_BIC" size="16" /></td>
          </tr>
                
          <tr>
           <td align="right">CUSTODIAN A/C WITH T/A</td>

           <td align="left"><input class="norm" type="text" name="cust_ac_ta" id="cust_ac_ta" size="16" value=""/></td>
          </tr>

          <tr>
           <td align="right">REMARKS TO VFS</td>

           <td colspan="4" align="left">
           <input class="norm" type="text" size="32" name="remarks_vfs" id="remarks_vfs" value=""/></td>
          </tr>
         </table>
        </fieldset>
       </div>        
       
     <div>
         <fieldset>
          <input style="float:center;" type="submit" value="DELIVER FUND" name="GetFund" onclick='return verify();'/>
         </fieldset>
        </div>       
        
     <div>
         <fieldset>
          <legend>IMPORTANT</legend>
           <center>FIELDS MARKED WITH AN ASTERISK * ARE MANDATORY</center>
          </fieldset>
         </div>
	</div>
    
      <div id="right">
             <?php require_once('include/menu-right-client.php'); ?>
          </div>          

    </div>
 </form> 
<div id="loading-dialog" class="ui-widget">
<img align="loading" src="img/loading.gif" />
<br>
<h3>Please wait...</h3>
</div>
 
</body>
</html>