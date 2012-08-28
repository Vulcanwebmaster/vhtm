<?php
require_once('core/connect.php');
require_once('core/CoreClass.php');

require_once('BLL/IsinBLL.php');
require_once('BLL/CurrencyBLL.php');
require_once('BLL/FundBLL.php');
require_once('BLL/FundAuditorBLL.php');
require_once('BLL/FundAdvisorBLL.php');
require_once('BLL/InvestmentDetailsBLL.php');
require_once('BLL/SubscriptionFeeBLL.php');
require_once('BLL/TransferAgentBLL.php');
require_once('BLL/CustodianBLL.php');
require_once('BLL/RedemptionDetailsBLL.php');
require_once('BLL/RedemptionFeesBLL.php');

$objISIN=new IsinClass($db);
$objCurrency=new CurrencyClass($db);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">
  <head>
   <title>Vurman - Spectrum Funds</title>
    <meta name="keywords" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta name="description" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="Stylesheet" href="css/styles.css" />
    <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" language="javascript" src="js/fund-db.js"></script>
    <style type="text/css">
	body
        {
           /* font-family: Arial,Verdana,Helvetica,sans-serif;
            font-size: 12px*/;
            background-color: #FFFFFF;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        code
        {
            font-size: 14px;
            color: #FFFFFF;
        }
        pre
        {
            font-size: 14px;
            color: #FFFFFF;
            padding: 5px;
        }
        a:link, a:visited, a:active, a:hover
        {
            text-decoration: none;
            font-weight: normal;
            color: #FF0000;
           /* font-size: 12px;*/
        }
        a:active, a:hover
        {
            color: #FFFFFF;
        }
        a.menu
        {
            display: block;
            padding: 3px;
            border-top: 1px solid #605C88;
            background-color: #FFFFFF;
            text-align: center;
            color: #FFFFFF;
            text-decoration: none;
        }
        a.menu:link, a.menu:visited
        {
            color: #FF0000;
            background-color: #FFFFFF;
            text-decoration: none;
        }
        a.menu:active, a.menu:hover
        {
            color: #605C88;
            background-color: #FFFFFF;
        }
        .menutitle
        {
            text-align: center;
            margin: 2px;
        }
        .menucontainer
        {
            border: 1px solid #605C88;
            background-color: #FFFFFF;
            width: 175px;
            margin-top: 10px;
        }
        #content
        {
            background-color: #FFFFFF;
            width: 605px;
            padding: 0px;
            float: left;
            margin-top: 10px;
            margin-left: 97px;
            margin-right: 97px;
            display: inline;
            text-align: center;
        }
        #left
        {
            float: left;
        }
        #right
        {
            float: right;
        }
        .roundcorner_div
        {
            margin-left: 0px;
            height: 21px;
            width: 146px;
            background: url(img/round_corner.gif) no-repeat bottom;
        }
        .roundcorner_textbox
        {
            background: none;
            border: none;
            width: 100px;
            height: 15px;
            margin-left: 5px;
            margin-top: 2px;
            padding: 0px 0px 0px 0px;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 11px;
        }
        #main_cont
        {
            margin: auto;
            width: 1155px;
        }
        #title
        {
            margin: 50px auto 0 auto;
            width: 605px;
            height: 185px;
        }
        .fldset
        {
        	width:605px;float:left;text-align:left;margin-top:20px;
        }
        .tbl_input
        {
        	float:right;
        	height:21px;
        	width:350px;
        	/*background:url(img/round_corner_l.gif);*/
        }
         .tbl_input input
         {
         	height:15px;width:340px;margin-left:5px;display:inline;border:0;margin-top:1px;
         }
         .tbl_lbl
         {
         	float:left;
			text-align:right;
			width:160px;
         }
        </style>
        <style type="text/css">
	fieldset
	{
		margin-top:10px;
		margin-bottom:10px;
	}
	</style>
</head>


<body>
 <div id="main_cont">
  <div id="title">
   <img src="ZEIT8.jpg" alt="" /></div>
    <div id="left">
             <?php require_once('include/menu-left-client.php'); ?>
        </div>
        
        <div id="right">
             <?php require_once('include/menu-right-client.php'); ?>
          </div>


<?php
$exists=0;
$msg="";
if ( isset( $_POST["security1"] ) )
{
	$isinObj=new IsinClass($db);
	$isinObj->code=$_POST["security1"];
	$isinArr=$isinObj->SearchIsin();
	
	//print_r($isinArr);
	
	$fundObj=new FundClass($db);
	$fundObj->ISIN=$_POST["security1"];
	$fundArr=$fundObj->SearchFund();
	//print_r($isinArr);
		
	if(sizeof($fundArr)<=0)
	{
		$msg= "WE ARE SORRY, BUT THE REQUESTED ISIN COULD NOT BE FOUND";
	}
	
	if(sizeof($isinArr)>0)
	{

		if(sizeof($isinArr)>0)
		{
			//echo "Found";
			$invDetail=new InvestmentDetailsClass($db);
			$invDetail->funds_id=$isinArr[0]["id"];
			$investment_detail=$invDetail->SearchInvestment_details();
			
			$redObj=new Redemption_detailsClass($db);
			$redObj->funds_id=$isinArr[0]["id"];
			$redArr=$redObj->SearchRedemption_details();
			
			$subObj=new SubscriptionFeeClass($db);
			$subObj->funds_id=$isinArr[0]["id"];
			$subArr=$subObj->SearchSubscriptionFee();
			
			if(isset($redArr) && sizeof($redArr)>0)
			{
				$redFeeObj=new RedemptionFeesClass($db);
				$redFeeObj->redemption_details_id=$redArr[0]["id"];
				$redFeeArr=$redFeeObj->SearchRedemptionFees();
			}
			
			if(sizeof($fundArr)>0)
			{
				$transferObj=new TransferAgentClass($db);
				$transferObj->id=$fundArr[0]["transfer_agent_id"];
				$transferArr=$transferObj->SearchTransferAgent();
				
				$custObj=new CustodianClass($db);
				$custObj->id=$fundArr[0]["custodian_id"];
				$custArr=$custObj->SearchCustodian();
				
				$fundAdvObj=new FundAdvisorClass($db);
				$fundAdvObj->id=$fundArr[0]["fund_advisor_id"];
				$fundAdvArr=$fundAdvObj->SearchFundAdvisor();
				
				$fundAudObj=new FundAuditorClass($db);
				$fundAudObj->id=$fundArr[0]["fund_auditor_id"];
				$fundAudArr=$fundAudObj->SearchFundAuditor();
			}
		}

	}
}
?>

     
 <div id="content">  

<form name="search_form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div id="error1" style="width:600px; <?php if(isset($msg) && $msg==""){echo "display:none;";} else {echo "display:all;";} ?> clear:both; margin-bottom:5px;" align="center">
    <div id="error2" class="error" style="text-transform:uppercase; margin-top:5px;"><?php if(isset($msg) && $msg!=""){ echo $msg; }?></div>
</div>

  <fieldset id="fieldsetFundDetails" style="display:all;">
   <legend>FUND INFORMATION</legend>
   <table align="center">
     <tr>
       <td align="right"><span style='color:#FF0000'>ISIN*</span></td>
       <td><input type="text" name="security1" id="security1" value="" style="width:105px;"></td>
       </tr>
     </table>
  </fieldset>

         <fieldset>
          <input style="float:center;" type="submit" value="SHOW DETAILS" id="GetFund" name="GetFund" onclick='return verify();'/>
         </fieldset>

         <fieldset>
          <legend>IMPORTANT</legend>
           <center>FIELDS MARKED WITH AN ASTERISK * ARE MANDATORY</center>
          </fieldset>

<?php if ( isset( $_POST['security1'] ) && sizeof($isinArr)>0)
{ 

?>  

         <fieldset class="fldset">
   <legend>IDENTIFICATION OF FUND</legend><br>
       <table width="590px" border="0">
         <tr>
           <td class="fieldset"><div class="tbl_lbl">ISIN</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["ISIN"] ; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">CURRENCY</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["currency"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">FUND NAME</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["fund_name"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">FUND COMPANY</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["fund_company"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">FUND CATEGORY</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["fund_category"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">FUND STATUS</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["fund_status"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">DOMICILE</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["domicile"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">N.A.V.</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["nav_value"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">N.A.V. DATE</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["nav_date"]; ?>
             </div></td>
         </tr>
          <tr>
      <td class="fieldset"><div class="tbl_lbl">PERFORMANCE INCEPTION</div><div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["performance_since_start"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">PERFORMANCE YTD</div><div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["performance_ytd"]; ?></div></td>
     </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">FUND STRATEGY</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["fund_strategy"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">PRIMARY STRATEGY</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["primary_strategy"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">SECONDARY STRATEGY</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["secondary_strategy"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">INVESTMENT OBJECTIVES</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["investment_objectives_a"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl"><!--INVESTMENT OBJECTIVES--></div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["investment_objectives_b"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl"><!--INVESTMENT OBJECTIVES--></div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["investment_objectives_c"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">UNIQUE FEATURE</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["unique_feature_a"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl"><!--UNIQUE FEATURE--></div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["unique_feature_b"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">INCEPTION DATE</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["inception_date"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">CURRENT ASSETS</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["current_assets"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">BENCHMARK</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["benchmark"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">RISK APPETITE</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["risk_appetite"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">GEOGRAPHICAL EXPOSURE</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["geographical_exposure"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">LAST AUDIT</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["last_audit"]; ?>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div>
             <div class="tbl_input">
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo $fundArr[0]["add_info_a"]; ?>
               <?php if(isset($fundArr) && sizeof($fundArr)>0) echo '&nbsp'.$fundArr[0]["add_info_b"]; ?>
            </div></td>
         </tr>
       </table>
       </fieldset>

  <fieldset class="fldset">
   <legend>INVESTMENT DETAILS (SUBSCRIPTION)</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">INITIAL MIN. INVESTMENT</div>
        <div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0 ) echo $investment_detail[0]["initial_minimum_investment"]; ?></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MIN. INVEST. THEREAFTER</div>
        <div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["minimum_investment"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MIN. UNITS INVESTMENT</div>
        <div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["minimum_units_investment"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">LOCK-UP PERIOD</div>
        <div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["lockup_period"]; ?></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">TRADING FREQUENCY</div><div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["trading_frequency_i"]; ?></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">NOTICE PERIOD</div><div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["notice_period_i"]; ?></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">TRADING DATE</div><div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["trading_date_i"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">CUT-OFF TIME</div><div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["cut_off_time"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">SETTLEMENT CYCLE</div><div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["settlement_cycle_i"]; ?></div></td>
     </tr>
    <!-- Additional Information-->
      <tr>
      <td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div></td>
     </tr>
     <!--<tr>
      <td class="fieldset"><div class="tbl_lbl">ADMINISTRATION FEE</div><div class="tbl_input"><?php //if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["administration_fee"]; ?></div></td>
     </tr>-->
     <!--Additional Information-->
      </table>
       </fieldset>

  <fieldset class="fldset">
   <legend>SUBSCRIPTION FEES</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MIN. FRONT END FEE</div><div class="tbl_input"><?php if(isset($subArr) && sizeof($subArr)>0) echo $subArr[0]["minimum_front_end_fee"]; ?></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MAX. FRONT END FEE</div><div class="tbl_input"><?php if(isset($subArr) && sizeof($subArr)>0) echo $subArr[0]["maximum_front_end_fee"]; ?></div></td>
     </tr>
     <!--Additional Information-->
       <tr>
     <td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div>
     <div class="tbl_input"><?php if(isset($subArr) && sizeof($subArr)>0) echo $subArr[0]["additional_information"]; ?></div>
     </td>
     </tr>
    <!-- <tr>
      <td class="fieldset"><div class="tbl_lbl">MANAGEMENT FEE</div><div class="tbl_input"><?php //if(isset($subArr) && sizeof($subArr)>0) echo $subArr[0]["management_fee"]; ?></div></td>
     </tr>-->
      <!--Additional Information-->
      </table>
       </fieldset>

  <fieldset class="fldset">
   <legend>REDEMPTION DETAILS</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MIN. AMOUNT</div><div class="tbl_input"><?php if(isset($redArr) && sizeof($redArr)>0) echo $redArr[0]["minimum_amount"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MIN. UNITS</div><div class="tbl_input"><?php if(isset($redArr) && sizeof($redArr)>0) echo $redArr[0]["minimum_units"]; ?></div></td>
     </tr>
          
     <tr>
      <td class="fieldset"><div class="tbl_lbl">TRADING FREQUENCY</div><div class="tbl_input"><?php if(isset($redArr) && sizeof($redArr)>0) echo $redArr[0]["trading_frequency"]; ?></div></td>
     </tr>
      <tr>
      <td class="fieldset"><div class="tbl_lbl">NOTICE PERIOD</div><div class="tbl_input"><?php if(isset($redArr) && sizeof($redArr)>0) echo $redArr[0]["notice_period"]; ?></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">TRADING DATE</div><div class="tbl_input"><?php if(isset($redArr) && sizeof($redArr)>0) echo $redArr[0]["trading_date"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">CUT-OFF TIME</div><div class="tbl_input"><?php if(isset($redArr[0]["cut_of_time"]) && sizeof($redArr)>0 ) echo $redArr[0]["cut_of_time"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">SETTLEMENT CYCLE</div><div class="tbl_input"><?php if(isset($redArr) && sizeof($redArr)>0) echo $redArr[0]["settlement_cycle"]; ?></div></td>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div>
      <div class="tbl_input"><?php if(isset($redArr) && sizeof($redArr)>0) echo $redArr[0]["additional_information"]; ?></div>
      </td>
     </tr>
      </table>
       </fieldset>

  <fieldset class="fldset">
   <legend>REDEMPTION FEES</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MIN. BACK END FEE</div><div class="tbl_input"><?php if(isset($redFeeArr) && sizeof($redFeeArr)>0) echo $redFeeArr[0]["minimum_back_end_fee"]; ?></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MAX. BACK END FEE</div><div class="tbl_input"><?php if(isset($redFeeArr) && sizeof($redFeeArr)>0) echo $redFeeArr[0]["maximum_back_end_fee"]; ?></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">EARLY WITHDRAWAL FEE</div><div class="tbl_input"><?php if(isset($redFeeArr) && sizeof($redFeeArr)>0) echo $redFeeArr[0]["early_withdrawal_fee"]; ?></div></td>
     </tr>
      <tr>
     <td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div><div class="tbl_input"><?php if(isset($redFeeArr) && sizeof($redFeeArr)>0) echo $redFeeArr[0]["additional_information"]; ?></div></td>
     </tr>
      </table>
       </fieldset>

  <fieldset class="fldset">
   <legend>FEES</legend>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MANAGEMENT FEE</div><div class="tbl_input"><?php if(isset($subArr) && sizeof($subArr)>0) echo $subArr[0]['management_fee']; ?></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">PERFORMANCE FEE</div><div class="tbl_input"><?php if(isset($subArr) && sizeof($subArr)>0) echo $subArr[0]['performance_fee']; ?></div></td>
     </tr>
     <!--<tr>
      <td class="fieldset"><div class="tbl_lbl">MINIMUM FRONT END FEE</div><div class="tbl_input"><?php //if(isset($subArr) && sizeof($subArr)>0) echo $subArr[0]['minimum_front_end_fee']; ?></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MAXIMUM FRONT END FEE</div><div class="tbl_input"><?php //if(isset($subArr) && sizeof($subArr)>0) echo $subArr[0]['maximum_front_end_fee']; ?></div></td>
     </tr>-->
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div><div class="tbl_input"><?php if(isset($subArr) && sizeof($subArr)>0)  echo $subArr[0]['additional_information']; ?></div></td>
     </tr>
      </table>
       </fieldset>
 
<fieldset class="fldset">
	<legend>MISCELLANEOUS</legend>
    <table width="590PX" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ACCEPTED INVESTOR TYPES</div><div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["accepted_investor_types"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">HIGH WATER MARK</div><div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["high_water_mark"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">HURDLE RATE</div><div class="tbl_input"><?php if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["hurdle_rate"]; ?></div></td>
     </tr>
    </table>
</fieldset>

  <fieldset class="fldset">
   <legend>CUSTODIAN INFORMATION</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">CUSTODIAN</div><div class="tbl_input"><?php if(isset($custArr) && sizeof($custArr)>0) echo $custArr[0]["custodian"]; ?></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS</div><div class="tbl_input"><?php if(isset($custArr) && sizeof($custArr)>0) echo $custArr[0]["postal_address_a"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl"><!--POSTAL ADDRESS--></div><div class="tbl_input"><?php if(isset($custArr) && sizeof($custArr)>0) echo $custArr[0]["postal_address_b"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl"><!--ZIP / CITY--></div><div class="tbl_input"><?php if(isset($custArr) && sizeof($custArr)>0) echo $custArr[0]["zip_city"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">KEY CONTACT PERSON</div><div class="tbl_input"><?php if(isset($custArr) && sizeof($custArr)>0) echo $custArr[0]["key_contact_person_a_cu"]; ?>
        <?php if(isset($custArr) && sizeof($custArr)>0) echo ' '.$custArr[0]["key_contact_person_b"]; ?>
      </div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-MAIL ADDRESS</div><div class="tbl_input"><?php if(isset($custArr) && sizeof($custArr)>0) echo $custArr[0]["email_address_a"]; ?>
        <?php if(isset($custArr) && sizeof($custArr)>0) echo ' '.$custArr[0]["email_address_b"]; ?>
      </div></td>
     </tr>
     
     <!--<tr>
      <td class="fieldset"><div class="tbl_lbl">KEY CONTACT PERSON</div><div class="tbl_input"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-MAIL ADDRESS</div><div class="tbl_input"></div></td>
     </tr>-->
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">PHONE</div><div class="tbl_input"><?php if(isset($custArr) && sizeof($custArr)>0) echo $custArr[0]["phone_number_cu"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FAX</div><div class="tbl_input"><?php if(isset($custArr) && sizeof($custArr)>0) echo $custArr[0]["fax_number"]; ?></div></td>
     </tr>
     <!-- <tr>
      <td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div></td>
     </tr>-->
    <!-- <tr>
      <td class="fieldset"><div class="tbl_lbl">A/C  NO.</div><div class="tbl_input"><?php //if(isset($custArr) && sizeof($custArr)>0) echo $custArr[0]["account_number"]; ?></div></td>
     </tr>-->
     
    <!-- <tr>
      <td class="fieldset"><div class="tbl_lbl">SETTLEMENT DETAILS</div><div class="tbl_input"><?php //if(isset($custArr) && sizeof($custArr)>0) echo $custArr[0]["settlement_details_a"]; ?></div></td>
     </tr>-->
     
     <!--<tr>
      <td class="fieldset"><div class="tbl_lbl">SETTLEMENT DETAILS</div><div class="tbl_input"><?php //if(isset($custArr) && sizeof($custArr)>0) echo $custArr[0]["settlement_details_b"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">SETTLEMENT DETAILS</div><div class="tbl_input"><?php //if(isset($custArr) && sizeof($custArr)>0) echo $custArr[0]["settlement_details_c"]; ?></div></td>
     </tr>-->
      </table>
       </fieldset>
 
 <fieldset class="fldset">
   <legend>TRANSFER AGENT INFORMATION</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">TRANSFER AGENT</div><div class="tbl_input"><?php if(isset($transferArr) && sizeof($transferArr)>0) echo $transferArr[0]["transfer_agent"]; ?></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS</div><div class="tbl_input"><?php if(isset($transferArr) && sizeof($transferArr)>0) echo $transferArr[0]["postal_address"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl"><!--POSTAL ADDRESS--></div><div class="tbl_input"><?php if(isset($transferArr) && sizeof($transferArr)>0) echo $transferArr[0]["postal_address_I"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl"><!--ZIP / CITY--></div><div class="tbl_input"><?php if(isset($transferArr) && sizeof($transferArr)>0) echo $transferArr[0]["zip"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">KEY CONTACT PERSON</div><div class="tbl_input"><?php if(isset($transferArr) && sizeof($transferArr)>0) echo $transferArr[0]["key_contact_persons"]; ?>
      </div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-MAIL ADDRESS</div><div class="tbl_input"><?php if(isset($transferArr) && sizeof($transferArr)>0) echo $transferArr[0]["email_address"]; ?>
      </div></td>
     </tr>
     
     <!--<tr>
      <td class="fieldset"><div class="tbl_lbl">KEY CONTACT PERSON</div><div class="tbl_input"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-MAIL ADDRESS</div><div class="tbl_input"></div></td>
     </tr>-->
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">PHONE</div><div class="tbl_input"><?php if(isset($transferArr) && sizeof($transferArr)>0) echo $transferArr[0]["phone_number"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FAX</div><div class="tbl_input"><?php if(isset($transferArr) && sizeof($transferArr)>0) echo $transferArr[0]["fax_no"]; ?></div></td>
     </tr>
      <tr>
      <!--<td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div>
      <div class="tbl_input"><?php //if(isset($transferArr) && sizeof($transferArr)>0) echo $transferArr[0]["additional_information"]; ?></div>
      </td>-->
     </tr>
     <!--<tr>
      <td class="fieldset"><div class="tbl_lbl">A/C  NO.</div><div class="tbl_input"><?php //if(isset($transferArr) && sizeof($transferArr)>0) echo $transferArr[0]["account_number"]; ?></div></td>
     </tr>-->
      </table>
       </fieldset>
 
  <fieldset class="fldset">
   <legend>FUND ADVISOR INFORMATION</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FUND ADVISOR</div><div class="tbl_input"><?php if(isset($fundAdvArr) && sizeof($fundAdvArr)>0) echo $fundAdvArr[0]["fund_advisor"]; ?></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS</div><div class="tbl_input"><?php if(isset($fundAdvArr) && sizeof($fundAdvArr)>0) echo $fundAdvArr[0]["postal_address_adv"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl"><!--POSTAL ADDRESS--></div><div class="tbl_input"><?php if(isset($fundAdvArr) && sizeof($fundAdvArr)>0) echo $fundAdvArr[0]["postal_address_adv_I"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl"><!--ZIP / CITY--></div><div class="tbl_input"><?php if(isset($fundAdvArr) && sizeof($fundAdvArr)>0) echo $fundAdvArr[0]["zip_city_adv"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">KEY CONTACT PERSON</div><div class="tbl_input"><?php if(isset($fundAdvArr) && sizeof($fundAdvArr)>0) echo $fundAdvArr[0]["key_contact_person"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-MAIL ADDRESS</div><div class="tbl_input"><?php if(isset($fundAdvArr) && sizeof($fundAdvArr)>0) echo $fundAdvArr[0]["email_address_adv"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">PHONE</div><div class="tbl_input"><?php if(isset($fundAdvArr) && sizeof($fundAdvArr)>0) echo $fundAdvArr[0]["phone_number_adv"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FAX</div><div class="tbl_input"><?php if(isset($fundAdvArr) && sizeof($fundAdvArr)>0) echo $fundAdvArr[0]["fax_number_adv"]; ?></div></td>
     </tr>
      </table>
       </fieldset>

  <fieldset class="fldset">
   <legend>FUND AUDITOR INFORMATION</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FUND AUDITOR</div><div class="tbl_input"><?php if(isset($fundAudArr) && sizeof($fundAudArr)>0) echo $fundAudArr[0]["fund_auditor"]; ?></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS</div><div class="tbl_input"><?php if(isset($fundAudArr) && sizeof($fundAudArr)>0) echo $fundAudArr[0]["postal_address_fau"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl"><!--POSTAL ADDRESS--></div><div class="tbl_input"><?php if(isset($fundAudArr) && sizeof($fundAudArr)>0) echo $fundAudArr[0]["postal_address_fau_I"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl"><!--ZIP / CITY--></div><div class="tbl_input"><?php if(isset($fundAudArr) && sizeof($fundAudArr)>0) echo $fundAudArr[0]["zip_city_fau"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">KEY CONTACT PERSON</div><div class="tbl_input"><?php if(isset($fundAudArr) && sizeof($fundAudArr)>0) echo $fundAudArr[0]["key_contact_person"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-MAIL ADDRESS</div><div class="tbl_input"><?php if(isset($fundAudArr) && sizeof($fundAudArr)>0) echo $fundAudArr[0]["email_address_fau"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">PHONE</div><div class="tbl_input"><?php if(isset($fundAudArr) && sizeof($fundAudArr)>0) echo $fundAudArr[0]["phone_number_fau"]; ?></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FAX</div><div class="tbl_input"><?php if(isset($fundAudArr) && sizeof($fundAudArr)>0) echo $fundAudArr[0]["fax_number_fau"]; ?></div></td>
     </tr>
      </table>
       </fieldset>
<?php
}
?>
</form>

     </div>
     </div>
 </body>
</html>