<?php 
require_once('core/connect.php');
require_once('core/CoreClass.php');
require_once('BLL/IsinBLL.php');
require_once('BLL/CurrencyBLL.php');
require_once('BLL/FundPortFolioBLL.php');

$objISIN=new IsinClass($db);
$arrISIN=$objISIN->GetIsinUsingArray();

$objCurrency=new CurrencyClass($db);
$arrCurrency=$objCurrency->GetCurrencyUsingArray();

if(isset($_POST['fund_transfer'])){
$msg="";
	
	if($_POST['Client-ID']!="")
	{
		$objFP=new FundPortfolioClass($db);
		$objFP->id_client=$_POST['Client-ID'];
		$objFP->id_isin=$_POST['security1'];
		$objFP->currency=$_POST['currency_hid'];
		$objFP->fund_name=$_POST['Name'];
		$objFP->custody_ac=$_POST['custody-ac'];
		
		$objFP->credit=$_POST['credit'];
		$objFP->credit_date=$_POST['valuec'];
		$objFP->credit_ref=$_POST['reference_c'];
		
		$objFP->debit=$_POST['debit'];
		$objFP->debit_date=$_POST['valued'];
		$objFP->debit_ref=$_POST['reference_d'];
		
		$objFP->created_by=$_SESSION['login'];

		
		$msg=$objFP->InsertFundPortfolio();
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
    <link rel="stylesheet" href="css/redmond/jquery-ui-1.7.2.custom.css" />
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/portfolio_admin.js"></script>
    <link rel="Stylesheet" href="styles.css" />
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

<br />

<?php 
if(isset($msg) && $msg!=""){
?>
<div class="error" style="text-transform:uppercase;"><h5><?php echo $msg; ?></h5></div>      
<?php 
}
?>

<span id="error">MANDATORY FIELDS * ARE: CLIENT, A/C NUMBER, CUSTODY A/C, ISIN, CURRENCY</span><br /><br />

<FORM ACTION="" METHOD="post">
 <div>
  <fieldset>
   <legend>FUND POSITION MANAGEMENT</legend>
    <table class="contab">
     <tr>
      <td align="right"><span style='color:#FF0000'>CLIENT ID*</span></td>
       <td align="left"><input class="norm" type="text" name="Client-ID" id="Client-ID" style="width:80px;" value="" onChange="getClientName();"/></td>
                 
      <td align="right"><span style='color:#FF0000'>CUSTODY A/C*</span></td>  
       <td align="left">
         <select name="custody-ac" id="custody-ac" class="dropdown">
           <option value="">select</option>
           <option value="1">S1-REG.</option>
           <option value='2'>S2-RESTR.</option>
           <option value='3'>S3-U.S.</option>
           <option value='4'>TOTAL</option>
         </select></td>
     </tr>

     <tr>
      <td align="right">CLIENT NAME</td>              
       <td colspan="4" align="left"><input name="Client" type="text" class="norm" id="Client" style="width:242px;" size="62" readonly="readonly" /></td>
      </tr>
            
     <tr>
      <td align="right"><span style='color:#FF0000'>ISIN*</span></td>
       <td align="left"><input type="text" id="security1" class="norm" style="width:105px;" name="security1" onChange="GetFundName()" /></td>
       
       <td align="right">CURRENCY</td>
        <td align="left"><input name="currency" type="text" id="currency" style="width:35px;" class="norm" /><input type="hidden" name="currency_hid" id="currency_hid" value="" /></td>
      </tr>
       
        <tr>
     <td align="right">FUND NAME</td>        
     <td colspan="3" align="left">
     <span id="NameSpan" name="NameSpan" style="color:#333; font-size:12px;"></span>
        <input id="Name" name="Name" type="hidden" value="" />
     </td>
    </tr>
       
      <tr>
        <td align="right">CREDIT</td>
        <td align="left"><input class="norm"  type="text" name="credit" id="credit" value=""/></td>
         
        <td align="right">VALUE DATE&nbsp;</td>
        <td align="left"><input class="norm"  type="text" name="valuec" id="valuec" value=""/></td>
       </tr>
       
       <tr>
        <td align="right">REF.</td>
        <td align="left"><input class="norm"  type="text" name="reference_c" id="reference_c" value=""/></td>
       </tr>
                                      
       <tr>
        <td align="right">DEBIT</td>
        <td align="left"><input class="norm"  type="text" name="debit" id="debit" value=""/></td>
       
        <td align="right">VALUE DATE&nbsp;</td>
        <td align="left"><input class="norm"  type="text" name="valued" id="valued" value=""/></td>
       </tr>
       
       <tr>
        <td align="right">REF.</td>
        <td align="left"><input class="norm"  type="text" name="reference_d" id="reference_d" value=""/></td>
       </tr>  
      </table>
     </fieldset>
    </div>
   
   <br />
   
  <div>
   <fieldset>
    <input name="fund_transfer" type="submit" id="fund_transfer" style="float:center;" value="FUND TRANSFER" />
   </fieldset>
  </div>
  
   <br />  
     
  <div>
   <fieldset>
    <legend>SHOW BOOKINGS ONLY</legend>
     <table class="contab">
      <tr>
      <td align="right"><span style='color:#FF0000'>CLIENT-ID*</span></td>
       <td><input class="norm" type="text" name="client" id="client" value=""/></td>
                 
      <td align="right"><span style='color:#FF0000'>CUSTODY A/C*</span></td>  
       <td><select name="client" id="client" class="dropdown">
        <option value="">select</option>
        <option value="1">S1-REG.</option>
        <option value='2'>S2-RESTR.</option>
        <option value='3'>S3-U.S.</option>
        <option value='4'>TOTAL</option>                   
       </select>
      </td>
     </tr>

     <tr>
      <td align="right">CLIENT NAME</td>              
       <td colspan="4"><input name="Client" type="text" class="norm" id="Client" size="62" readonly="readonly" /></td>
      </tr>
            
     <tr>
      <td align="right"><span style='color:#FF0000'>ISIN*</span></td>
       <td><input class="norm"  type="text" name="isin" id="isin" value=""/></td>
       
       <td align="right">CURRENCY</td>
        <td><input class="norm" type="text" name="currency1" id="currency1" value=""/></td>
      </tr>     
       
      <tr>                              
       <td align="right">FUND POSITION</td>
        <td><input class="norm"  type="text" name="amount" id="amount" value=""/></td>
       </tr>
     
      <tr>      
       <td align="right">ALL BOOKINGS</td>
       <td><input class="norm"  type="text" name="bookings" id="bookings" value=""/></td>
      
       <td align="right">REF.</td>
       <td><input class="norm"  type="text" name="reference" id="reference" value=""/></td>
      </tr>
       
      <tr>  
       <td align="right">DATE RANGE FROM</td>
       <td><input class="norm"  type="text" name="valuecdf" id="valuecdf" value=""/></td>
        
       <td align="right">TO</td>
       <td><input class="norm"  type="text" name="valuecdt" id="valuecdt" value=""/></td>
      </tr>
     </table>
    </fieldset>
   </div>

    <br />

   <div>
    <fieldset>
     <table>                          
      <tr>
       <td align="right">ONLY CREDIT(S)</td>
       <td><input class="norm"  type="text" name="credit_1" id="credit_1" value=""/></td>
      
       <td align="right">REF.</td>
       <td><input class="norm"  type="text" name="reference" id="reference" value=""/></td>
      </tr>
       
      <tr>  
       <td align="right">DATE RANGE FROM</td>
       <td><input class="norm"  type="text" name="valuecf" id="valuecf" value=""/></td>
        
       <td align="right">TO</td>
       <td><input class="norm"  type="text" name="valuect" id="valuect" value=""/></td>
      </tr>
     </table>
    </fieldset>
   </div>

    <br />

   <div>
    <fieldset>
     <table>
      <tr>
       <td align="right">ONLY DEBIT(S)</td>
       <td><input class="norm"  type="text" name="debit_1" id="debit_1" value=""/></td>
      
       <td align="right">REF.</td>
       <td><input class="norm"  type="text" name="reference" id="reference" value=""/></td>
      </tr>
       
      <tr>
       <td align="right">DATE RANGE FROM</td>
       <td><input class="norm"  type="text" name="valuedf" id="valuedf" value=""/></td>
        
       <td align="right">TO</td>
       <td><input class="norm"  type="text" name="valuedt" id="valuedt" value=""/></td>
      </tr>  
     </table>
    </fieldset>
   </div> 

    <br />      
      
    <div>
     <fieldset>
      <input style="float:center;" type="submit" value="VIEW TRANSACTION(S)" />
     </fieldset>
    </div>

    <br />
 
    <div>
     <fieldset>
      <legend>IMPORTANT</legend>
      <center>FIELDS MARKED WITH AN ASTERISK * ARE MANDATORY<br/>
     </fieldset>
    </div>
   </form>
  </div>

<div id="loading-dialog" class="ui-widget">
<img align="loading" src="img/loading.gif" />
<br>
<h3>Please wait .......</h3>
</div>
      
        <div id="right">
             <?php require_once('include/menu-right-client.php'); ?>
           </div>          
          </div>
         </div>
        </body>
       </html>