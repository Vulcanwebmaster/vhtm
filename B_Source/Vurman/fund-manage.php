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
    <meta name="description" content="Fund Services, Fund Settlement, Hedge Funds, Offshore Funds, Subscription, Redemption">
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
   <img src="ZEIT8.jpg" alt="" /></div>
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
		
			// Coment for test insert below table
			$objFund->ISIN=$_POST['ISIN'];
			$objFund->currency=$_POST['currency'];
			$objFund->fund_name=$_POST['fund_name'];
			$objFund->fund_company=$_POST['fund_company'];
			$objFund->fund_category=$_POST['fund_category'];
			$objFund->fund_status=$_POST['fund_status'];
			$objFund->domicile=$_POST['domicile'];
			$objFund->nav_value=$_POST['nav_value'];
			$objFund->nav_date=$_POST['nav_date'];
			$objFund->fund_strategy=$_POST['fund_strategy'];
			$objFund->primary_strategy=$_POST['primary_strategy'];
			$objFund->secondary_strategy=$_POST['secondary_strategy'];
			$objFund->investment_objectives_a=$_POST['investment_objectives_a'];
			$objFund->investment_objectives_b=$_POST['investment_objectives_b'];
			$objFund->investment_objectives_c=$_POST['investment_objectives_c'];
			$objFund->unique_feature_a=$_POST['unique_feature_a'];
			$objFund->unique_feature_b=$_POST['unique_feature_b'];
			$objFund->inception_date=$_POST['inception_date'];
			$objFund->current_assets=$_POST['current_assets'];
			$objFund->benchmark=$_POST['benchmark'];
			$objFund->risk_appetite=$_POST['risk_appetite'];
			$objFund->geographical_exposure=$_POST['geographical_exposure'];
			$objFund->last_audit=$_POST['last_audit'];
			$objFund->add_info_a=$_POST['add_info_a'];
			$objFund->add_info_b=$_POST['add_info_b'];
			$objFund->transfer_agent_id=$_POST['transfer_agent_id'];
			$objFund->custodian_id=$_POST['custodian_id'];
			$objFund->fund_advisor_id=$_POST['fund_advisor_id'];
			$objFund->fund_auditor_id=$_POST['fund_auditor_id'];
			$objFund->unique_id=$_POST['unique_id'];
			$msg1=$objFund->InsertFund();
			echo $msg1;
			echo ";";
			// Insert insvetment details
			$objInvestmentDTCL=new InvestmentDetailsClass($db);
			$objInvestmentDTCL->initial_minimum_investment=$_POST['initial_minimum_investment'];
			$objInvestmentDTCL->minimum_investment=$_POST['minimum_investment'];
			$objInvestmentDTCL->minimum_units_investment=$_POST['minimum_units_investment'];
			$objInvestmentDTCL->lockup_period=$_POST['lockup_period'];
			$objInvestmentDTCL->notice_period_i=$_POST['notice_period_i'];
			$objInvestmentDTCL->trading_frequency_i=$_POST['trading_frequency_i'];
			$objInvestmentDTCL->trading_date_i=$_POST['trading_date_i'];
			$objInvestmentDTCL->cut_off_time=$_POST['cut_off_time'];
			$objInvestmentDTCL->settlement_cycle_i=$_POST['settlement_cycle_i'];
			$objInvestmentDTCL->administration_fee=$_POST['administration_fee'];
			$objInvestmentDTCL->accepted_investor_types=$_POST['accepted_investor_types'];
			$objInvestmentDTCL->performance_since_start=$_POST['performance_since_start'];
			$objInvestmentDTCL->performance_ytd=$_POST['performance_ytd'];
			$objInvestmentDTCL->high_water_mark=$_POST['high_water_mark'];
			$objInvestmentDTCL->hurdle_rate=$_POST['hurdle_rate'];
			$objInvestmentDTCL->add_info_a=$_POST['add_info_a'];
			$objInvestmentDTCL->add_info_b=$_POST['add_info_b'];
			$objInvestmentDTCL->funds_id=$_POST['funds_id'];
			$msg2=$objInvestmentDTCL->InsertInvestment_details();
			echo $msg2;
			echo ";";
			// Insert subcription fee
			$objSubscriptionFee=new SubscriptionFeeClass($db);
			$objSubscriptionFee ->funds_id=$_POST['funds_id_sub'];
			$objSubscriptionFee ->minimum_front_end_fee=$_POST['minimum_front_end_fee'];
			$objSubscriptionFee ->maximum_front_end_fee=$_POST['maximum_front_end_fee'];
			$objSubscriptionFee ->management_fee=$_POST['management_fee'];
			$objSubscriptionFee ->performance_fee=$_POST['performance_fee'];
			$objSubscriptionFee ->additional_information=$_POST['additional_information'];
			$msg3=$objSubscriptionFee->InsertSubscriptionFee();
			echo $msg3;
			echo ";";
			
			// Insert RedemptionDetails
			$objRedemption_detailsClass=new Redemption_detailsClass($db);
			$objRedemption_detailsClass->funds_id=$_POST['funds_id_red'];
			$objRedemption_detailsClass->minimum_amount=$_POST['minimum_amount'];
			$objRedemption_detailsClass->notice_period=$_POST['notice_period'];
			$objRedemption_detailsClass->trading_date=$_POST['trading_date'];
			$objRedemption_detailsClass->settlement_cycle=$_POST['settlement_cycle'];
			$objRedemption_detailsClass->minimum_units=$_POST['minimum_units'];
			$objRedemption_detailsClass->trading_frequency=$_POST['trading_frequency'];
			$objRedemption_detailsClass->cut_of_tiime=$_POST['cut_of_time'];
			$objRedemption_detailsClass->additional_information=$_POST['additional_information_red'];
			$msg4=$objRedemption_detailsClass->InsertRedemption_details();
			echo $msg4;
			echo ";";
			//Insert Into RedemptionFeesClass
			$objRedemptionFeesClass = new RedemptionFeesClass($db);
			$objRedemptionFeesClass->redemption_details_id=$_POST['redemption_details_id'];
			$objRedemptionFeesClass->minimum_back_end_fee=$_POST['minimum_back_end_fee'];
			$objRedemptionFeesClass->early_withdrawal_fee=$_POST['early_withdrawal_fee'];
			$objRedemptionFeesClass->maximum_back_end_fee=$_POST['maximum_back_end_fee'];
			$objRedemptionFeesClass->additional_information=$_POST['additional_information_redfee'];
			$msg5=$objRedemptionFeesClass->InsertRedemptionFees();
			echo $msg5;
			echo ";";
			// Insert Into TransferAgent
			$objTransferAgentClass=new TransferAgentClass($db);
			$objTransferAgentClass->transfer_agent=$_POST['transfer_agent'];
			$objTransferAgentClass->postal_address=$_POST['postal_address'];
			$objTransferAgentClass->postal_address_I=$_POST['postal_address_I'];
			$objTransferAgentClass->phone_number=$_POST['phone_number'];
			$objTransferAgentClass->account_number=$_POST['account_number'];
			$objTransferAgentClass->key_contact_persons=$_POST['key_contact_persons'];
			$objTransferAgentClass->email_address=$_POST['email_address'];
			$objTransferAgentClass->fax_no=$_POST['fax_no'];
			$objTransferAgentClass->additional_information=$_POST['additional_information_transferagent'];
			$objTransferAgentClass->zip=$_POST['zip'];
			$msg6=$objTransferAgentClass->InsertTransferAgent();
			echo $msg6;
			echo ";";
			//Insert Into Custodian
			$objCustodian->cpid=$_POST['cpid_cus'];
			$objCustodian->counterparty=$_POST['counterparty_cus'];
			$objCustodian->biccp=$_POST['biccp_cus'];
			$objCustodian->custid=$_POST['custid_cus'];
			$objCustodian->custodian=$_POST['custodian_cus'];
			$objCustodian->biccust=$_POST['biccust_cus'];
			$objCustodian->cpacwithcust=$_POST['cpacwithcust_cus'];
			$msg7=$objCustodian->InsertCustodian();
			echo $msg7;
			echo ";";
			// Insert Into Fund Addvisor
			$objFundAdvisor->fund_advisor=$_POST['fund_advisor_adv'];
			$objFundAdvisor->postal_address_adv=$_POST['postal_address_adv'];
			$objFundAdvisor->postal_address_adv_I=$_POST['postal_address_adv_I'];
			$objFundAdvisor->phone_number_adv=$_POST['phone_number_adv'];
			$objFundAdvisor->email_address_adv=$_POST['email_address_adv'];
			$objFundAdvisor->fax_number_adv=$_POST['fax_number_adv'];
			$objFundAdvisor->additional_information_adv=$_POST['additional_information_adv'];
			$objFundAdvisor->zip_city_adv=$_POST['zip_city_adv'];
			$msg8=$objFundAdvisor->InsertFundAdvisor();
			echo $msg8;
			echo ";";
			// Insert Into auditor
			$objFundAuditorClass->fund_auditor=$_POST['fund_auditor_fau'];
			$objFundAuditorClass->postal_address_fau=$_POST['postal_address_fau'];
			$objFundAuditorClass->postal_address_fau_I=$_POST['postal_address_fau_I'];
			$objFundAuditorClass->phone_number_fau=$_POST['phone_number_fau'];
			$objFundAuditorClass->email_address_fau=$_POST['email_address_fau'];
			$objFundAuditorClass->fax_number_fau=$_POST['fax_number_fau'];
			$objFundAuditorClass->additional_information_fau=$_POST['additional_information_fau'];
			$objFundAuditorClass->zip_city_fau=$_POST['zip_city_fau'];
			$msg9=$objFundAuditorClass->InsertFundAuditor();
			echo $msg9;
			echo ";";
	}
	

 ?>

<form name="insert_form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div id="errorLable" style="text-align: left;"></div>
	<div id="errorMana" style="text-align:left;"></div>
	<div id="errortbl1" style="text-align:left;" ></div>
    <fieldset class="fldset">
   <legend>Identification of Fund</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ISIN</div><div class="tbl_input"><input size="57"  name="ISIN" id="ISIN" value=""></div></td>
     </tr>

     <tr>
      <td class="fieldset"><div class="tbl_lbl">Currency</div><div class="tbl_input">
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
      <td class="fieldset"><div class="tbl_lbl">Fund Name</div><div class="tbl_input"><input size="57"  name="fund_name" id="fund_name" value=""></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Company</div><div class="tbl_input"><input size="57"  name="fund_company" id="fund_company" value=""></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Category</div><div class="tbl_input"><input size="57"  name="fund_category" id="fund_category" value=""></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Status</div><div class="tbl_input"><input size="57"  name="fund_status" id="fund_status" value=""></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Domicile</div><div class="tbl_input"><input size="57"  name="domicile" id="domicile" value=""></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">N.A.V.</div><div class="tbl_input"><input size="57"  name="nav_value" id="nav_value" value=""></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">N.A.V. Date</div><div class="tbl_input"><input size="57"  name="nav_date" id="nav_date" value=""></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Strategy</div><div class="tbl_input"><input size="57"  name="fund_strategy" id="fund_strategy" value=""></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Primary Strategy</div><div class="tbl_input"><input size="57"  name="primary_strategy" id="primary_strategy" value=""></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Secondary Strategy</div><div class="tbl_input"><input size="57"  name="secondary_strategy" id="secondary_strategy" value=""></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Investment Objectives</div><div class="tbl_input"><input size="57"  name="investment_objectives_a" id="investment_objectives_a" value=""></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Investment Objectives</div><div class="tbl_input"><input size="57"  name="investment_objectives_b" id="investment_objectives_b" value=""></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Investment Objectives</div><div class="tbl_input"><input size="57"  name="investment_objectives_c" id="investment_objectives_c" value=""></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Unique Feature</div><div class="tbl_input"><input size="57"  name="unique_feature_a" id="unique_feature_a" value=""></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Unique Feature</div><div class="tbl_input"><input size="57"  name="unique_feature_b" id="unique_feature_b" value=""></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Inception Date</div><div class="tbl_input"><input size="57"  name="inception_date" id="inception_date" value=""></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Current Assets</div><div class="tbl_input"><input size="57"  name="current_assets" id="current_assets" value=""></div></td>
     </tr>     
 
     <tr> 
      <td class="fieldset"><div class="tbl_lbl">Benchmark</div><div class="tbl_input"><input size="57"  name="benchmark" id="benchmark" value=""></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Risk Appetite</div><div class="tbl_input"><input size="57"  name="risk_appetite" id="risk_appetite" value=""></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Geographical Exposure</div><div class="tbl_input"><input size="57"  name="geographical_exposure" id="geographical_exposure" value=""></div></td>
     </tr>     
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Last Audit</div><div class="tbl_input"><input size="57"  name="last_audit" id="last_audit" value=""></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Additional Information</div><div class="tbl_input"><input size="57"  name="add_info_a" id="add_info_a" value=""></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Additional Information</div><div class="tbl_input"><input size="57"  name="add_info_b" id="add_info_b" value=""></div></td>
     </tr>
       <tr>
      <td class="fieldset"><div class="tbl_lbl">TRANSFER AGENT</div><div class="tbl_input"><input size="57"  name="transfer_agent_id" id="transfer_agent_id" value=""></div></td>
     </tr>
       <tr>
      <td class="fieldset"><div class="tbl_lbl">CUSTODIAN</div><div class="tbl_input"><input size="57"  name="custodian_id" id="custodian_id" value=""></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FUND ADVISOR</div><div class="tbl_input"><input size="57"  name="fund_advisor_id" id="fund_advisor_id" value=""></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">FUND AUDITOR</div><div class="tbl_input"><input size="57"  name="fund_auditor_id" id="fund_auditor_id" value=""></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">UNIQUE</div><div class="tbl_input"><input size="57"  name="unique_id" id="unique_id" value=""></div></td>
     </tr>
      </table>
    </fieldset>


    <div id="errortbl2" style="text-align:left;" ></div>
    <fieldset class="fldset">
   <legend>Investment Details (Subscription)</legend><br>
    <table border="0" width="590px">
     <tbody><tr>
      <td class="fieldset"><div class="tbl_lbl">Initial Minimum Investment</div><div class="tbl_input"><input size="57" name="initial_minimum_investment" id="initial_minimum_investment"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Minimum Investment thereafter</div><div class="tbl_input"><input size="57" name="minimum_investment" id="minimum_investment"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Minimum Units Investment</div><div class="tbl_input"><input size="57" name="minimum_units_investment" id="minimum_units_investment"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Lockup Period</div><div class="tbl_input"><input size="57" name="lockup_period" id="lockup_period"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Notice Period</div><div class="tbl_input"><input size="57" name="notice_period_i" id="notice_period_i"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Trading Frequency</div><div class="tbl_input"><input size="57" name="trading_frequency_i" id="trading_frequency_i"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Trading Date</div><div class="tbl_input"><input size="57" name="trading_date_i" id="trading_date_i"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Cut-off Time</div><div class="tbl_input"><input size="57" name="cut_off_time" id="cut_off_time"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Settlement Cycle</div><div class="tbl_input"><input size="57" name="settlement_cycle_i" id="settlement_cycle_i"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Administration Fee</div><div class="tbl_input"><input size="57" name="administration_fee" id="administration_fee"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Accepted Investor Types</div><div class="tbl_input"><input size="57" name="accepted_investor_types" id="accepted_investor_types"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Performance since Start</div><div class="tbl_input"><input size="57" name="performance_since_start" id="performance_since_start"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Performance ytd</div><div class="tbl_input"><input size="57" name="performance_ytd" id="performance_ytd"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">High Water Mark</div><div class="tbl_input"><input size="57" name="high_water_mark" id="high_water_mark"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Hurdle Rate</div><div class="tbl_input"><input size="57" name="hurdle_rate" id="hurdle_rate"></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Add Info a</div><div class="tbl_input"><input size="57" name="add_info_a" id="add_info_a"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Add Info b</div><div class="tbl_input"><input size="57" name="add_info_b" id="add_info_b"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Funds ID</div><div class="tbl_input"><input size="57" name="funds_id" id="funds_id"></div></td>
     </tr>
      </tbody></table>
       </fieldset>
       
       
   	<div id="errortbl3" style="text-align:left;" ></div>
       <fieldset class="fldset">
   <legend>Fees (Subscription)</legend><br>
    <table border="0" width="590px">
     <tbody>
   <tr>
      <td class="fieldset"><div class="tbl_lbl">Funds ID</div><div class="tbl_input"><input size="57" name="funds_id_sub" id="funds_id_sub"></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Minimum Front End Fee</div><div class="tbl_input"><input size="57" name="minimum_front_end_fee" id="minimum_front_end_fee"></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Maximum Front End Fee</div><div class="tbl_input"><input size="57" name="maximum_front_end_fee" id="maximum_front_end_fee"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Management Fee</div><div class="tbl_input"><input size="57" name="management_fee" id="management_fee"></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Additional information</div><div class="tbl_input"><input size="57" name="additional_information" id="additional_information"></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Performance fee</div><div class="tbl_input"><input size="57" name="performance_fee" id="performance_fee"></div></td>
     </tr>
      </tbody></table>
       </fieldset>
		<br/>
		
		
	<div id="errortbl4" style="text-align:left;" ></div>		
<fieldset class="fldset">
   <legend>Redemption Details</legend><br>
    <table border="0" width="590px">
     <tbody>
     	<tr>
      <td class="fieldset"><div class="tbl_lbl">FUND ID</div><div class="tbl_input"><input size="57" name="funds_id_red" id="funds_id_red"></div></td>
     </tr>
     	<tr>
      <td class="fieldset"><div class="tbl_lbl">Minimum Amount</div><div class="tbl_input"><input size="57" name="minimum_amount" id="minimum_amount"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Minimum Units</div><div class="tbl_input"><input size="57" name="minimum_units" id="minimum_units"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Notice Period</div><div class="tbl_input"><input size="57" name="notice_period" id="notice_period"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Trading Frequency</div><div class="tbl_input"><input size="57" name="trading_frequency" id="trading_frequency"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Trading Date</div><div class="tbl_input"><input size="57" name="trading_date" id="trading_date"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Cut-Off Time</div><div class="tbl_input"><input size="57" name="cut_of_time" id="cut_of_time"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Settlement Cycle</div><div class="tbl_input"><input size="57" name="settlement_cycle" id="settlement_cycle"></div></td>
     </tr>
      <tr>
      <td class="fieldset"><div class="tbl_lbl">Additional Information</div><div class="tbl_input"><input size="57" name="additional_information_red" id="additional_information_red"></div></td>
     </tr>
      </tbody></table>
       </fieldset>
       
<div id="errortbl5" style="text-align:left;" ></div>
  <fieldset class="fldset">
   <legend>Fees (Redemption)</legend><br>
    <table border="0" width="590px">
     <tbody>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Redemption details id</div><div class="tbl_input"><input size="57" name="redemption_details_id" id="redemption_details_id"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Minimum Back End Fee</div><div class="tbl_input"><input size="57" name="minimum_back_end_fee" id="minimum_back_end_fee"></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Maximum Back End Fee</div><div class="tbl_input"><input size="57" name="maximum_back_end_fee" id="maximum_back_end_fee"></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Early Withdrawal Fee</div><div class="tbl_input"><input size="57" name="early_withdrawal_fee" id="early_withdrawal_fee"></div></td>
     </tr>
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Additional information</div><div class="tbl_input"><input size="57" name="additional_information_redfee" id="additional_information_redfee"></div></td>
     </tr>
     
      </tbody></table>
       </fieldset>
 <br/>
 
 	<div id="errortbl6" style="text-align:left;" ></div>
 <fieldset class="fldset">
   <legend>Transfer Agent and A/C Details</legend><br>
   <select name="id_transfer" id="id_transfer" onchange="GetTransferAgent();">
	<option selected="selected" value="0">Create transfer agent</option>
		<?php
			for ($i=0;$i<sizeof($arrayTransferAgent);$i++)
			{?>
						<option value="<? print $arrayTransferAgent[$i]['id'];?>"><? print $arrayTransferAgent[$i]['id'];?></option>
			<?}
	 ?>
</select>
    <table border="0" width="590px">
     <tbody><tr>
      <td class="fieldset"><div class="tbl_lbl">Transfer Agent</div><div class="tbl_input"><input size="57" name="transfer_agent" id="transfer_agent"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57" name="postal_address" id="postal_address"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57" name="postal_address_I" id="postal_address_I"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ZIP / City</div><div class="tbl_input"><input size="57" name="zip" id="zip"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Key Contact Person</div><div class="tbl_input"><input size="57" name="key_contact_persons" id="key_contact_persons"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-mail Address</div><div class="tbl_input"><input size="57" name="email_address" id="email_address"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Additional information</div><div class="tbl_input"><input size="57" name="additional_information_transferagent" id="additional_information_transferagent"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Phone</div><div class="tbl_input"><input size="57" name="phone_number" id="phone_number"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fax</div><div class="tbl_input"><input size="57" name="fax_no" id="fax_no"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">A/C  No.</div><div class="tbl_input"><input size="57" name="account_number" id="account_number"></div></td>
     </tr>
      </tbody></table>
       </fieldset>
       
<div id="errortbl7" style="text-align:left;" ></div>       
<fieldset class="fldset">
   <legend>Custodian</legend><br>
   
<select name="custodian_id_cus" id="custodian_id_cus" onchange="GetCustodian_cus();">
<option selected="selected" value="0">Create custodian</option>
	<?php for($i=0;$i<sizeof($arrayCustodian);$i++)
	{?>
		<option value="<?php print $arrayCustodian[$i]['id'] ?>"><?php print $arrayCustodian[$i]['id'];?></option>	
	<?} ?>
</select>
   
    <table border="0" width="590px">
     <tbody><tr>
      <td class="fieldset"><div class="tbl_lbl">Custodian ID</div><div class="tbl_input"><input size="57" name="cpid_cus" id="cpid_cus"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Counterparty</div><div class="tbl_input"><input size="57" name="counterparty_cus" id="counterparty_cus"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Biccp</div><div class="tbl_input"><input size="57" name="biccp_cus" id="biccp_cus"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Custid</div><div class="tbl_input"><input size="57" name="custid_cus" id="custid_cus"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Custodian</div><div class="tbl_input"><input size="57" name="custodian_cus" id="custodian_cus"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Biccust</div><div class="tbl_input"><input size="57" name="biccust_cus" id="biccust_cus"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Cpacwithcust</div><div class="tbl_input"><input size="57" name="cpacwithcust_cus" id="cpacwithcust_cus"></div></td>
     </tr>
      </tbody></table>
       </fieldset>
       
       
<div id="errortbl8" style="text-align:left;" ></div>      
 <fieldset class="fldset">
   <legend>Fund Advisor</legend><br>
   
<select name="fund_advisor_id_adv" id="fund_advisor_id_adv" onchange="GetFundAdvisor();">
<option selected="selected" value="0">Create fund_advisor</option>
<?php
	for($i=0;$i<sizeof($arrayFundAdvisor);$i++)
	{?>
		<option value="<? print $arrayFundAdvisor[$i]['id'] ?>"><? print $arrayFundAdvisor[$i]['id'] ?></option>
	<?}
 ?>
</select>
   
    <table border="0" width="590px">
     <tbody><tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Advisor</div><div class="tbl_input"><input size="57" name="fund_advisor_adv" id="fund_advisor_adv"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57" name="postal_address_adv" id="postal_address_adv"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57" name="postal_address_adv_I" id="postal_address_adv_I"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ZIP / City</div><div class="tbl_input"><input size="57" name="zip_city_adv" id="zip_city_adv"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Key Contact Person</div><div class="tbl_input"><input size="57" name="additional_information_adv" id="additional_information_adv"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-mail Address</div><div class="tbl_input"><input size="57" name="email_address_adv" id="email_address_adv"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Phone</div><div class="tbl_input"><input size="57" name="phone_number_adv" id="phone_number_adv"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fax</div><div class="tbl_input"><input size="57" name="fax_number_adv" id="fax_number_adv"></div></td>
     </tr>
      </tbody></table>
       </fieldset>
 <br>
 
<div id="errortbl9" style="text-align:left;" ></div>
 <fieldset class="fldset">
   <legend>Fund Auditor</legend><br>

<select name="fund_auditor_id_fau" id="fund_auditor_id_fau" onchange="GetFundAuditor();">
<option selected="selected" value="0">Create fund_auditor</option>
<?php for($i=0;$i<sizeof($arrayFundAuditorClass);$i++)
{?>		
		<option value="<?php print $arrayFundAuditorClass[$i]['id']; ?>"><?php print $arrayFundAuditorClass[$i]['id']; ?></option>
<?}
 ?>

</select>
   
   
    <table border="0" width="590px">
     <tbody><tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Auditor</div><div class="tbl_input"><input size="57" name="fund_auditor_fau" id="fund_auditor_fau"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57" name="postal_address_fau" id="postal_address_fau"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57" name="postal_address_fau_I" id="postal_address_fau_I"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ZIP / City</div><div class="tbl_input"><input size="57" name="zip_city_fau" id="zip_city_fau"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Key Contact Person</div><div class="tbl_input"><input size="57" name="additional_information_fau" id="additional_information_fau"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-mail Address</div><div class="tbl_input"><input size="57" name="email_address_fau" id="email_address_fau"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Phone</div><div class="tbl_input"><input size="57" name="phone_number_fau" id="phone_number_fau"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fax</div><div class="tbl_input"><input size="57" name="fax_number_fau" id="fax_number_fau"></div></td>
     </tr>
      </tbody></table>
       </fieldset>
 
 <br>
 

			<input type="submit" name="Insert_Fund" id="Insert_Fund" value="Add" onclick="return verifyManage();"/>
</form>

</div>
 </body>
</html>