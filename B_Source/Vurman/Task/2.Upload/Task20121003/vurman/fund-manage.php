<?php
require_once('core/connect.php');
require_once('core/CoreClass.php');

require_once('BLL/IsinBLL.php');
require_once('BLL/CurrencyBLL.php');
require_once('BLL/FundBLL.php');
require_once('BLL/Fund_DatabaseBLL.php');
require_once('BLL/FundAuditorBLL.php');
require_once('BLL/FundAdvisorBLL.php');
require_once('BLL/InvestmentDetailsBLL.php');
require_once('BLL/SubscriptionFeeBLL.php');
require_once('BLL/TransferAgentBLL.php');
require_once('BLL/CustodianBLL.php');
require_once('BLL/RedemptionDetailsBLL.php');
require_once('BLL/RedemptionFeesBLL.php');

$objFund=new FundClass($db);
$objISIN=new IsinClass($db);
$objCurrency=new CurrencyClass($db);
$objFundAdvisor=new FundAdvisorClass($db);
$objFundAuditorClass=new FundAuditorClass($db);
$arrayFundAuditorClass=$objFundAuditorClass->GetFundAuditorUsingArray();
$arrayFundAdvisor=$objFundAdvisor->GetFundAdvisorUsingArray();
$arrayCurrency=$objCurrency->GetCurrencyUsingArray();
$arrayTransferAgent1=new TransferAgentClass($db);
$arrayTransferAgent=$arrayTransferAgent1->GetTransferAgentUsingArray();
$objCustodian=new CustodianClass($db);
$arrayCustodian=$objCustodian->GetCustodianUsingArray();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-ch" lang="de-ch">
  <head>
   <title>Vurman - Spectrum Funds</title>
    <meta name="keywords" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta name="JOB_DESCRIPTION" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="Stylesheet" href="css/styles.css" />
    <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script src="js/fund-manage.js" type="text/javascript"></script>
   <style type="text/css">body
        {
            font-family: Arial,Verdana,Helvetica,sans-serif;
            font-size: 12px;
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
            font-size: 12px;
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
        	background:url(img/round_corner_l.gif);
        }
         .tbl_input input
         {
         	height:15px;width:340px;margin-left:5px;display:inline;border:0;margin-top:1px;
         }
         .tbl_lbl
         {
         	float:left;text-align:right;width:220px;
         }
        </style>
</head>


<body>
 <div id="main_cont">
  <div id="title">
   <img src="logo.jpg" alt="" /></div>
    <div id="left">
             <?php require_once('include/menu-left-client.php'); ?>
        </div>
        <div id="right">
             <?php require_once('include/menu-right-client.php'); ?>
          </div>     
 <div id="content">  
<?php
	$message="";
	if(isset($_POST['Insert_Fund']))
	{
		echo "Test In database";
		$objFund_Database =new Fund_DatabaseClass($db);
		//$objFund_Database->Test();
		$objFund_Database->isin=$_POST['isin'];
		$objFund_Database->currency=$_POST['currency'];
		$objFund_Database->fund_name=$_POST['fund_name'];
		$objFund_Database->fund_company=$_POST['fund_company'];
		$objFund_Database->fund_category=$_POST['fund_category'];
		$objFund_Database->fund_status=$_POST['fund_status'];
		$objFund_Database->domicile=$_POST['domicile'];
		$objFund_Database->net_asset_value=$_POST['net_asset_value'];
		$objFund_Database->nav_date=$_POST['nav_date'];
		$objFund_Database->performance_start=$_POST['performance_start'];
		$objFund_Database->performance_ytd=$_POST['performance_ytd'];
		$objFund_Database->fund_strategy=$_POST['fund_strategy'];
		$objFund_Database->primary_strategy=$_POST['primary_strategy'];
		$objFund_Database->secondary_strategy=$_POST['secondary_strategy'];
		$objFund_Database->investment_objectives=$_POST['investment_objectives'];
		$objFund_Database->unique_feature=$_POST['unique_feature'];
		$objFund_Database->inception_date=$_POST['inception_date'];
		$objFund_Database->current_assets=$_POST['current_assets'];
		$objFund_Database->benchmark=$_POST['benchmark'];
		$objFund_Database->risk_appetite=$_POST['risk_appetite'];
		$objFund_Database->geographical_exposure=$_POST['geographical_exposure'];
		$objFund_Database->last_audit=$_POST['last_audit'];
		$objFund_Database->add_info=$_POST['add_info'];
		$objFund_Database->initial_min_investment=$_POST['initial_min_investment'];
		$objFund_Database->min_investment=$_POST['min_investment'];
		$objFund_Database->min_units_investment=$_POST['min_units_investment'];
		$objFund_Database->lockup_period_sub=$_POST['lockup_period_sub'];
		$objFund_Database->trade_frequency_sub=$_POST['trade_frequency_sub'];
		$objFund_Database->notice_period_sub=$_POST['notice_period_sub'];
		$objFund_Database->trade_date_sub=$_POST['trade_date_sub'];
		$objFund_Database->cutoff_time_sub=$_POST['cutoff_time_sub'];
		$objFund_Database->settlement_cycle_sub=$_POST['settlement_cycle_sub'];
		$objFund_Database->add_info_1=$_POST['add_info_1'];
		$objFund_Database->min_frontend_fee=$_POST['min_frontend_fee'];
		$objFund_Database->max_frontend_fee=$_POST['max_frontend_fee'];
		$objFund_Database->add_info_2=$_POST['add_info_2'];
		$objFund_Database->min_amount_red=$_POST['min_amount_red'];
		$objFund_Database->min_units_red=$_POST['min_units_red'];
		$objFund_Database->trade_frequency_red=$_POST['trade_frequency_red'];
		$objFund_Database->notice_period_red=$_POST['notice_period_red'];
		$objFund_Database->trade_date_red=$_POST['trade_date_red'];
		$objFund_Database->cutoff_time_red=$_POST['cutoff_time_red'];
		$objFund_Database->settlement_cycle_red=$_POST['settlement_cycle_red'];
		$objFund_Database->add_info_3=$_POST['add_info_3'];
		$objFund_Database->min_backend_fee=$_POST['min_backend_fee'];
		$objFund_Database->max_backend_fee=$_POST['max_backend_fee'];
		$objFund_Database->early_withdrawal_fee=$_POST['early_withdrawal_fee'];
		$objFund_Database->add_info_4=$_POST['add_info_4'];
		$objFund_Database->management_fee=$_POST['management_fee'];
		$objFund_Database->performance_fee=$_POST['performance_fee'];
		$objFund_Database->add_info_5=$_POST['add_info_5'];
		$objFund_Database->accepted_investor_types=$_POST['accepted_investor_types'];
		$objFund_Database->high_water_mark=$_POST['high_water_mark'];
		$objFund_Database->hurdle_rate=$_POST['hurdle_rate'];
		$objFund_Database->custodian_name=$_POST['custodian_name'];
		$objFund_Database->postal_address_c1=$_POST['postal_address_c1'];
		$objFund_Database->postal_address_c2=$_POST['postal_address_c2'];
		$objFund_Database->postal_address_c3=$_POST['postal_address_c3'];
		$objFund_Database->postal_address_c4=$_POST['postal_address_c4'];
		$objFund_Database->key_contact_c=$_POST['key_contact_c'];
		$objFund_Database->email_c=$_POST['email_c'];
		$objFund_Database->phone_c=$_POST['phone_c'];
		$objFund_Database->fax_c=$_POST['fax_c'];
		$objFund_Database->transfer_agent_name=$_POST['transfer_agent_name'];
		$objFund_Database->postal_address_ta1=$_POST['postal_address_ta1'];
		$objFund_Database->postal_address_ta2=$_POST['postal_address_ta2'];
		$objFund_Database->postal_address_ta3=$_POST['postal_address_ta3'];
		$objFund_Database->postal_address_ta4=$_POST['postal_address_ta4'];
		$objFund_Database->key_contact_ta=$_POST['key_contact_ta'];
		$objFund_Database->email_ta=$_POST['email_ta'];
		$objFund_Database->phone_ta=$_POST['phone_ta'];
		$objFund_Database->fax_ta=$_POST['fax_ta'];
		$objFund_Database->fund_advisor_name=$_POST['fund_advisor_name'];
		$objFund_Database->postal_address_adv1=$_POST['postal_address_adv1'];
		$objFund_Database->postal_address_adv2=$_POST['postal_address_adv2'];
		$objFund_Database->postal_address_adv3=$_POST['postal_address_adv3'];
		$objFund_Database->postal_address_adv4=$_POST['postal_address_adv4'];
		$objFund_Database->key_contact_adv=$_POST['key_contact_adv'];
		$objFund_Database->email_adv=$_POST['email_adv'];
		$objFund_Database->phone_adv=$_POST['phone_adv'];
		$objFund_Database->fax_adv=$_POST['fax_adv'];
		$objFund_Database->fund_auditor_name=$_POST['fund_auditor_name'];
		$objFund_Database->postal_address_aud1=$_POST['postal_address_aud1'];
		$objFund_Database->postal_address_aud2=$_POST['postal_address_aud2'];
		$objFund_Database->postal_address_aud3=$_POST['postal_address_aud3'];
		$objFund_Database->postal_address_aud4=$_POST['postal_address_aud4'];
		$objFund_Database->key_contact_aud=$_POST['key_contact_aud'];
		$objFund_Database->email_aud=$_POST['email_aud'];
		$objFund_Database->phone_aud=$_POST['phone_aud'];
		$objFund_Database->fax_aud=$_POST['fax_aud'];
		$mgs=$objFund_Database->InsertFund_Database();
		echo $mgs;
				
	}
 ?>

<form name="insert_form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div id="errorLable" style="text-align: left;"></div>
	<div id="errortbl1" style="text-align:left;" ></div>
           <fieldset class="fldset">
   <legend>IDENTIFICATION OF FUND</legend><br>
       <table width="590px" border="0">
         <tr>
           <td class="fieldset"><div class="tbl_lbl">ISIN</div>
             <div class="tbl_input">
               <input size="57"  name="isin" id="isin" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">CURRENCY</div>
             <div class="tbl_input">
			              <select name="currency" id="currency" class="dropdown">
			      			<option value=""> please select</option>
				            <?php 
								for($i=0;$i<sizeof($arrayCurrency);$i++)
								{?>
								<option value="<?php print $arrayCurrency[$i]['id'] ?>"><?php print $arrayCurrency[$i]['name'] ?></option>
								<?php }
							?>
									       				
			            </select>
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">FUND NAME</div>
             <div class="tbl_input">
               <input size="57"  name="fund_name" id="fund_name" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">FUND COMPANY</div>
             <div class="tbl_input">
               <input size="57"  name="fund_company" id="fund_company" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">FUND CATEGORY</div>
             <div class="tbl_input">
               <input size="57"  name="fund_category" id="fund_category" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">FUND STATUS</div>
             <div class="tbl_input">
               <input size="57"  name="fund_status" id="fund_status" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">DOMICILE</div>
             <div class="tbl_input">
               <input size="57"  name="domicile" id="domicile" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">N.A.V.</div>
             <div class="tbl_input">
               <input size="57"  name="net_asset_value" id="net_asset_value" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">N.A.V. DATE</div>
             <div class="tbl_input">
               <input size="57"  name="nav_date" id="nav_date" value="">
             </div></td>
         </tr>
          <tr>
      <td class="fieldset"><div class="tbl_lbl">PERFORMANCE START</div><div class="tbl_input">
      	<input size="57"  name="performance_start" id="performance_start" value="">
      		</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">PERFORMANCE YTD</div><div class="tbl_input">
      	<input size="57"  name="performance_ytd" id="performance_ytd" value="">
      	</div></td>
     </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">FUND STRATEGY</div>
             <div class="tbl_input">
               <input size="57"  name="fund_strategy" id="fund_strategy" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">PRIMARY STRATEGY</div>
             <div class="tbl_input">
               <input size="57"  name="primary_strategy" id="primary_strategy" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">SECONDARY STRATEGY</div>
             <div class="tbl_input">
               <input size="57"  name="secondary_strategy" id="secondary_strategy" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">INVESTMENT OBJECTIVES</div>
             <div class="tbl_input">
               <input size="57"  name="investment_objectives" id="investment_objectives" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">UNIQUE FEATURE</div>
             <div class="tbl_input">
               <input size="57"  name="unique_feature" id="unique_feature" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">INCEPTION DATE</div>
             <div class="tbl_input">
               <input size="57"  name="inception_date" id="inception_date" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">CURRENT ASSETS</div>
             <div class="tbl_input">
               <input size="57"  name="current_assets" id="current_assets" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">BENCHMARK</div>
             <div class="tbl_input">
               <input size="57"  name="benchmark" id="benchmark" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">RISK APPETITE</div>
             <div class="tbl_input">
               <input size="57"  name="risk_appetite" id="risk_appetite" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">GEOGRAPHICAL EXPOSURE</div>
             <div class="tbl_input">
               <input size="57"  name="geographical_exposure" id="geographical_exposure" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">LAST AUDIT</div>
             <div class="tbl_input">
               <input size="57"  name="last_audit" id="last_audit" value="">
             </div></td>
         </tr>
         <tr>
           <td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div>
             <div class="tbl_input">
               <input size="57"  name="add_info" id="add_info" value="">
            </div></td>
         </tr>
       </table>
       </fieldset>
<div id="errortbl2" style="text-align:left;" ></div>
  <fieldset class="fldset">
   <legend>INVESTMENT DETAILS (SUBSCRIPTION)</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">INITIAL MIN. INVESTMENT</div>
        <div class="tbl_input">
        	<input size="57"  name="initial_min_investment" id="initial_min_investment" value="">
        	</div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MIN. INVEST. THEREAFTER</div>
        <div class="tbl_input">
        	<input size="57"  name="min_investment" id="min_investment" value="">
        	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MIN. UNITS INVESTMENT</div>
        <div class="tbl_input">
        	<input size="57"  name="min_units_investment" id="min_units_investment" value="">
        	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">LOCK-UP PERIOD</div>
        <div class="tbl_input">
        	<input size="57"  name="lockup_period_sub" id="lockup_period_sub" value="">
        	</div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">TRADING FREQUENCY SUB</div>
      	<div class="tbl_input">
		<input size="57"  name="trade_frequency_sub" id="trade_frequency_sub" value="">	
      	</div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">NOTICE PERIOD</div><div class="tbl_input">
      	<input size="57"  name="notice_period_sub" id="notice_period_sub" value="">
      	</div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">TRADING DATE</div><div class="tbl_input">
      	<input size="57"  name="trade_date_sub" id="trade_date_sub" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">CUT-OFF TIME</div><div class="tbl_input">
      	<input size="57"  name="cutoff_time_sub" id="cutoff_time_sub" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">SETTLEMENT CYCLE</div><div class="tbl_input">
      	<input size="57"  name="settlement_cycle_sub" id="settlement_cycle_sub" value="">
      	</div></td>
     </tr>
    <!-- Additional Information-->
      <tr>
      <td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div>
      	<div class="tbl_input">
      		<input size="57"  name="add_info_1" id="add_info_1" value="">
      	</div>
      </td>
     </tr>
     <!--<tr>
      <td class="fieldset"><div class="tbl_lbl">ADMINISTRATION FEE</div><div class="tbl_input"><?php //if(isset($investment_detail) && sizeof($investment_detail)>0)  echo $investment_detail[0]["administration_fee"]; ?></div></td>
     </tr>-->
     <!--Additional Information-->
      </table>
       </fieldset>
<div id="errortbl3" style="text-align:left;" ></div>
  <fieldset class="fldset">
   <legend>SUBSCRIPTION FEES</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MIN. FRONT END FEE</div>
      	<div class="tbl_input">
      		<input size="57"  name="min_frontend_fee" id="min_frontend_fee" value="">
      	</div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MAX. FRONT END FEE</div>
      	<div class="tbl_input">
      		<input size="57"  name="max_frontend_fee" id="max_frontend_fee" value="">
      		</div></td>
     </tr>
     <!--Additional Information-->
       <tr>
     <td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div>
     <div class="tbl_input">
     	<input size="57"  name="add_info_2" id="add_info_2" value="">
     	</div>
     </td>
     </tr>
    <!-- <tr>
      <td class="fieldset"><div class="tbl_lbl">MANAGEMENT FEE</div><div class="tbl_input"><?php //if(isset($subArr) && sizeof($subArr)>0) echo $subArr[0]["management_fee"]; ?></div></td>
     </tr>-->
      <!--Additional Information-->
      </table>
       </fieldset>
<div id="errortbl4" style="text-align:left;" ></div>
  <fieldset class="fldset">
   <legend>REDEMPTION DETAILS</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MIN. AMOUNT</div>
      	<div class="tbl_input">
      		<input size="57"  name="min_amount_red" id="min_amount_red" value="">
      		</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MIN. UNITS</div>
      	<div class="tbl_input">
      		<input size="57"  name="min_units_red" id="min_units_red" value="">
      </div></td>
     </tr>
          
     <tr>
      <td class="fieldset"><div class="tbl_lbl">TRADING FREQUENCY</div>
      	<div class="tbl_input">
      		<input size="57"  name="trade_frequency_red" id="trade_frequency_red" value="">
      	</div></td>
     </tr>
      <tr>
      <td class="fieldset"><div class="tbl_lbl">NOTICE PERIOD</div>
      	<div class="tbl_input">
      	<input size="57"  name="notice_period_red" id="notice_period_red" value="">
      	</div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">TRADING DATE</div>
      	<div class="tbl_input">
      		<input size="57"  name="trade_date_red" id="trade_date_red" value="">
      		</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">CUT-OFF TIME</div>
      	<div class="tbl_input">
      		<input size="57"  name="cutoff_time_red" id="cutoff_time_red" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">SETTLEMENT CYCLE</div>
      	<div class="tbl_input">
			<input size="57"  name="settlement_cycle_red" id="settlement_cycle_red" value="">
      		</div></td>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div>
      <div class="tbl_input">
      		<input size="57"  name="add_info_3" id="add_info_3" value="">
      	</div>
      </td>
     </tr>
      </table>
       </fieldset>

  <fieldset class="fldset">
   <legend>REDEMPTION FEES</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MIN. BACK END FEE</div>
      	<div class="tbl_input">
      		<input size="57"  name="min_backend_fee" id="min_backend_fee" value="">
      		</div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MAX. BACK END FEE</div>
      	<div class="tbl_input">
      		<input size="57"  name="max_backend_fee" id="max_backend_fee" value="">
      	</div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">EARLY WITHDRAWAL FEE</div>
      	<div class="tbl_input">
      		<input size="57"  name="early_withdrawal_fee" id="early_withdrawal_fee" value="">
      	</div></td>
     </tr>
      <tr>
     <td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div>
     	<div class="tbl_input">
     		<input size="57"  name="add_info_4" id="add_info_4" value="">
     		</div></td>
     </tr>
      </table>
       </fieldset>

  <fieldset class="fldset">
   <legend>FEES</legend>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MANAGEMENT FEE</div><div class="tbl_input">
      	<input size="57"  name="management_fee" id="management_fee" value="">
      </div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">PERFORMANCE FEE</div>
      	<div class="tbl_input">
      		<input size="57"  name="performance_fee" id="performance_fee" value="">
      	</div></td>
     </tr>
     <!--<tr>
      <td class="fieldset"><div class="tbl_lbl">MINIMUM FRONT END FEE</div><div class="tbl_input"><?php //if(isset($subArr) && sizeof($subArr)>0) echo $subArr[0]['minimum_front_end_fee']; ?></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">MAXIMUM FRONT END FEE</div><div class="tbl_input"><?php //if(isset($subArr) && sizeof($subArr)>0) echo $subArr[0]['maximum_front_end_fee']; ?></div></td>
     </tr>-->
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ADDITIONAL INFORMATION</div>
      	<div class="tbl_input">
      		<input size="57"  name="add_info_5" id="add_info_5" value="">
      	</div></td>
     </tr>
      </table>
       </fieldset>
 
<fieldset class="fldset">
	<legend>MISCELLANEOUS</legend>
    <table width="590PX" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ACCEPTED INVESTOR TYPES</div>
      	<div class="tbl_input">
      		<input size="57"  name="accepted_investor_types" id="accepted_investor_types" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">HIGH WATER MARK</div>
      	<div class="tbl_input">
      		<input size="57"  name="high_water_mark" id="high_water_mark" value="">
      		</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">HURDLE RATE</div>
      	<div class="tbl_input">
      		<input size="57"  name="hurdle_rate" id="hurdle_rate" value="">
      	</div></td>
     </tr>
    </table>
</fieldset>
<div id="errortbl5" style="text-align:left;" ></div>
  <fieldset class="fldset">
   <legend>CUSTODIAN INFORMATION</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">CUSTODIAN NAME</div>
      	<div class="tbl_input">
      		<input size="57"  name="custodian_name" id="custodian_name" value="">
      	</div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 1</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_c1" id="postal_address_c1" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 2</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_c2" id="postal_address_c2" value="">
      	</div></td>
     </tr> 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 3</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_c3" id="postal_address_c3" value="">
      	</div></td>
     </tr> 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 4</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_c4" id="postal_address_c4" value="">
      	</div></td>
     </tr> 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">KEY CONTACT PERSON</div><div class="tbl_input">
      	<input size="57"  name="key_contact_c" id="key_contact_c" value="">
      </div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-MAIL ADDRESS</div>
      	<div class="tbl_input">
      		<input size="57"  name="email_c" id="email_c" value="">
      </div></td>
     </tr>
     
     <!--<tr>
      <td class="fieldset"><div class="tbl_lbl">KEY CONTACT PERSON</div><div class="tbl_input"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-MAIL ADDRESS</div><div class="tbl_input"></div></td>
     </tr>-->
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">PHONE</div>
      	<div class="tbl_input">
      		<input size="57"  name="phone_c" id="phone_c" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FAX</div>
      	<div class="tbl_input">
      		<input size="57"  name="fax_c" id="fax_c" value="">
      	</div></td>
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
 <div id="errortbl6" style="text-align:left;" ></div>
 <fieldset class="fldset">
   <legend>TRANSFER AGENT INFORMATION</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">TRANSFER AGENT NAME</div>
      	<div class="tbl_input">
      		<input size="57"  name="transfer_agent_name" id="transfer_agent_name" value="">
      		</div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 1</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_ta1" id="postal_address_ta1" value="">
      		</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 2</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_ta2" id="postal_address_ta2" value="">
      		</div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 3</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_ta3" id="postal_address_ta3" value="">
      		</div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 4</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_ta4" id="postal_address_ta4" value="">
      		</div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">KEY CONTACT PERSON</div>
      	<div class="tbl_input">
      		<input size="57"  name="key_contact_ta" id="key_contact_ta" value="">
      </div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-MAIL ADDRESS</div>
      	<div class="tbl_input">
      		<input size="57"  name="email_ta" id="email_ta" value="">
      </div></td>
     </tr>
     
     <!--<tr>
      <td class="fieldset"><div class="tbl_lbl">KEY CONTACT PERSON</div><div class="tbl_input"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-MAIL ADDRESS</div><div class="tbl_input"></div></td>
     </tr>-->
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">PHONE</div>
      	<div class="tbl_input">
      		<input size="57"  name="phone_ta" id="phone_ta" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FAX</div>
      	<div class="tbl_input">
      		<input size="57"  name="fax_ta" id="fax_ta" value="">
      	</div></td>
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
 <div id="errortbl7" style="text-align:left;" ></div>
  <fieldset class="fldset">
   <legend>FUND ADVISOR INFORMATION</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FUND ADVISOR NAME</div>
      	<div class="tbl_input">
      		<input size="57"  name="fund_advisor_name" id="fund_advisor_name" value="">
      	</div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 1</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_adv1" id="postal_address_adv1" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 2</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_adv2" id="postal_address_adv2" value="">
      	</div></td>
     </tr>
     <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 3</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_adv3" id="postal_address_adv3" value="">
      	</div></td>
     </tr>
     <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 4</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_adv4" id="postal_address_adv4" value="">
      	</div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">KEY CONTACT PERSON</div>
      	<div class="tbl_input">
      		<input size="57"  name="key_contact_adv" id="key_contact_adv" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-MAIL ADDRESS</div>
      	<div class="tbl_input">
      		<input size="57"  name="email_adv" id="email_adv" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">PHONE</div>
      	<div class="tbl_input">
      		<input size="57"  name="phone_adv" id="phone_adv" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FAX</div>
      	<div class="tbl_input">
      		<input size="57"  name="fax_adv" id="fax_adv" value="">
      	</div></td>
     </tr>
      </table>
       </fieldset>
<div id="errortbl8" style="text-align:left;" ></div>
  <fieldset class="fldset">
   <legend>FUND AUDITOR INFORMATION</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FUND AUDITOR NAME</div>
      	<div class="tbl_input">
      		<input size="57"  name="fund_auditor_name" id="fund_auditor_name" value="">
      	</div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 1</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_aud1" id="postal_address_aud1" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 2</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_aud2" id="postal_address_aud2" value="">
      	</div></td>
     </tr>
     
    <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 3</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_aud3" id="postal_address_aud3" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">POSTAL ADDRESS 4</div>
      	<div class="tbl_input">
      		<input size="57"  name="postal_address_aud4" id="postal_address_aud4" value="">
      	</div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">KEY CONTACT PERSON</div>
      	<div class="tbl_input">
      		<input size="57"  name="key_contact_aud" id="key_contact_aud" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-MAIL ADDRESS</div>
      	<div class="tbl_input">
      		<input size="57"  name="email_aud" id="email_aud" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">PHONE</div>
      	<div class="tbl_input">
      		<input size="57"  name="phone_aud" id="phone_aud" value="">
      	</div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FAX</div>
      	<div class="tbl_input">
      		<input size="57"  name="fax_aud" id="fax_aud" value="">
      	</div></td>
     </tr>
      </table>
       </fieldset>
 
 <br>
 

			<input type="submit" name="Insert_Fund" id="Insert_Fund" value="Add" onclick=" return verifyManage();"/>
</form>

</div>
 </body>
</html>