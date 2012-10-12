<?php include('isin_style.css'); ?>
<script>
<?php
function transform($fields)
{
$fields = str_replace('`','',$fields);
$fields = str_replace(' ','',$fields);
$fields = explode(',',$fields);
return $fields;  
}
$fields=transform('`transfer_agent` ,`postal_address` ,`postal_address_I` ,`phone_number` ,`account_number` ,`key_contact_persons` ,`email_address` ,`fax_no` ,`additional_information`,`zip`');
AnyTable::buildJavascript('transfer_agent', $fields);
$transfer_agents = AnyTable::getData('transfer_agent');

$fields=transform('`custodian` ,`postal_address_a` ,`postal_address_b` ,`zip_city` ,`key_contact_person_a_cu` ,`email_address_a` ,`key_contact_person_b` ,`email_address_b` ,`phone_number_cu` ,`fax_number` ,`settlement_details_a` ,`settlement_details_b` ,`settlement_details_c`,`account_number_cu`');
AnyTable::buildJavascript('custodian', $fields);
$custodians= AnyTable::getData('custodian');

$fields=transform('`fund_advisor` ,`postal_address_adv` ,`postal_address_adv_I` ,`phone_number_adv` ,`email_address_adv` ,`fax_number_adv` ,`additional_information_adv`,`zip_city_adv`');
AnyTable::buildJavascript('fund_advisor', $fields);
$fund_advisors = AnyTable::getData('fund_advisor');

$fields=transform('`fund_auditor` ,`postal_address_fau` ,`postal_address_fau_I` ,`phone_number_fau` ,`email_address_fau` ,`fax_number_fau` ,`additional_information_fau`,`zip_city_fau`');
AnyTable::buildJavascript('fund_auditor', $fields);
$fund_auditors= AnyTable::getData('fund_auditor');

$result=array();
?>

function verify() 
{
  if((document.getElementById('amount1').value == parseInt(document.getElementById('amount1').value))&&(document.getElementById('amount2').value == parseInt(document.getElementById('amount2').value)))
    document.createT.submit();
  else{
    alert('AMOUNT MUST BE NUMERIC!');	
    return false;}
}
function switc(val) 
{
  document.getElementById('xxx').style.visibility = (val == 'switch') ? 'visible' : 'hidden';
  if(val!='switch')
    document.getElementById('amount2').value='0';

  return true;
}
</script>
<table width='100%'><tr><td align='right'>
<a href='isins_history.php?id=<?php echo $_GET['id'] ?>'>Isin history</a>
</td></tr></table>
<form name='createT' method='post' action=''>
  <input type='hidden' name='id' value='<?php echo $_REQUEST['id']?>' />
  <input type='hidden' name='unique_id' value='<?php echo $my_fund->unique_id?>' />  
  <fieldset class="fldset">
   <legend>Identification of Fund</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ISIN</div><div class="tbl_input"><input size="57"  name="ISIN" id="ISIN" value="<?=$my_fund->ISIN?>"></div></td>
     </tr>

     <tr>
      <td class="fieldset"><div class="tbl_lbl">Currency</div><div class="tbl_input">
      <?php if(isset($my_fund->currency)) $_POST['currency'] = $my_fund->currency; ?>
      <select name="currency" id="currency" class="dropdown">
      <option value=""> please select</option>
      <?php foreach ($currencies as $currency): ?>
      <option value='<?php echo $currency['id'];?>' <?php if(trim($_POST['currency']) == $currency['id']) echo"selected = 'selected'" ?> ><?php echo $currency['cuname'];?></option>
      <?php endforeach; ?>
      </select>
      
      </div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Name</div><div class="tbl_input"><input size="57"  name="fund_name" id="fund_name" value="<?=$my_fund->fund_name?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Company</div><div class="tbl_input"><input size="57"  name="fund_company" id="fund_company" value="<?=$my_fund->fund_company?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Category</div><div class="tbl_input"><input size="57"  name="fund_category" id="fund_category" value="<?=$my_fund->fund_category?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Status</div><div class="tbl_input"><input size="57"  name="fund_status" id="fund_status" value="<?=$my_fund->fund_status?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Domicile</div><div class="tbl_input"><input size="57"  name="domicile" id="domicile" value="<?=$my_fund->domicile?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">N.A.V.</div><div class="tbl_input"><input size="57"  name="nav_value" id="nav_value" value="<?=$my_fund->nav_value?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">N.A.V. Date</div><div class="tbl_input"><input size="57"  name="nav_date" id="nav_date" value="<?=$my_fund->nav_date?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Strategy</div><div class="tbl_input"><input size="57"  name="fund_strategy" id="fund_strategy" value="<?=$my_fund->fund_strategy?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Primary Strategy</div><div class="tbl_input"><input size="57"  name="primary_strategy" id="primary_strategy" value="<?=$my_fund->primary_strategy?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Secondary Strategy</div><div class="tbl_input"><input size="57"  name="secondary_strategy" id="secondary_strategy" value="<?=$my_fund->secondary_strategy?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Investment Objectives</div><div class="tbl_input"><input size="57"  name="investment_objectives_a" id="investment_objectives_a" value="<?=$my_fund->investment_objectives_a?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Investment Objectives</div><div class="tbl_input"><input size="57"  name="investment_objectives_b" id="investment_objectives_b" value="<?=$my_fund->investment_objectives_b?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Investment Objectives</div><div class="tbl_input"><input size="57"  name="investment_objectives_c" id="investment_objectives_c" value="<?=$my_fund->investment_objectives_c?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Unique Feature</div><div class="tbl_input"><input size="57"  name="unique_feature_a" id="unique_feature_a" value="<?=$my_fund->unique_feature_a?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Unique Feature</div><div class="tbl_input"><input size="57"  name="unique_feature_b" id="unique_feature_b" value="<?=$my_fund->unique_feature_b?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Inception Date</div><div class="tbl_input"><input size="57"  name="inception_date" id="inception_date" value="<?=$my_fund->inception_date?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Current Assets</div><div class="tbl_input"><input size="57"  name="current_assets" id="current_assets" value="<?=$my_fund->current_assets?>"></div></td>
     </tr>     
 
     <tr> 
      <td class="fieldset"><div class="tbl_lbl">Benchmark</div><div class="tbl_input"><input size="57"  name="benchmark" id="benchmark" value="<?=$my_fund->benchmark?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Risk Appetite</div><div class="tbl_input"><input size="57"  name="risk_appetite" id="risk_appetite" value="<?=$my_fund->risk_appetite?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Geographical Exposure</div><div class="tbl_input"><input size="57"  name="geographical_exposure" id="geographical_exposure" value="<?=$my_fund->geographical_exposure?>"></div></td>
     </tr>     
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Last Audit</div><div class="tbl_input"><input size="57"  name="last_audit" id="last_audit" value="<?=$my_fund->last_audit?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Additional Information</div><div class="tbl_input"><input size="57"  name="add_info_a" id="add_info_a" value="<?=$my_fund->add_info_a?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Additional Information</div><div class="tbl_input"><input size="57"  name="add_info_b" id="add_info_b" value="<?=$my_fund->add_info_b?>"></div></td>
     </tr>
      </table>
    </fieldset>
  
    <fieldset class="fldset">
   <legend>Investment Details (Subscription)</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Initial Minimum Investment</div><div class="tbl_input"><input size="57" name="initial_minimum_investment" id="initial_minimum_investment" value="<?=$investment_detail->initial_minimum_investment?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Minimum Investment thereafter</div><div class="tbl_input"><input size="57" name="minimum_investment" id="minimum_investment" value="<?=$investment_detail->minimum_investment?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Minimum Units Investment</div><div class="tbl_input"><input size="57" name="minimum_units_investment" id="minimum_units_investment" value="<?=$investment_detail->minimum_units_investment?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Lockup Period</div><div class="tbl_input"><input size="57" name="lockup_period" id="lockup_period" value="<?=$investment_detail->lockup_period?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Notice Period</div><div class="tbl_input"><input size="57"  name="notice_period_i" id="notice_period_i" value="<?=$investment_detail->notice_period_i?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Trading Frequency</div><div class="tbl_input"><input size="57"  name="trading_frequency_i" id="trading_frequency_i" value="<?=$investment_detail->trading_frequency_i?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Trading Date</div><div class="tbl_input"><input size="57"  name="trading_date_i" id="trading_date_i" value="<?=$investment_detail->trading_date_i?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Cut-off Time</div><div class="tbl_input"><input size="57"  name="cut_off_time" id="cut_off_time" value="<?=$investment_detail->cut_off_time?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Settlement Cycle</div><div class="tbl_input"><input size="57"  name="settlement_cycle_i" id="settlement_cycle_i" value="<?=$investment_detail->settlement_cycle_i?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Administration Fee</div><div class="tbl_input"><input size="57"  name="administration_fee" id="administration_fee" value="<?=$investment_detail->administration_fee?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Accepted Investor Types</div><div class="tbl_input"><input size="57"  name="accepted_investor_types" id="accepted_investor_types" value="<?=$investment_detail->accepted_investor_types?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Performance since Start</div><div class="tbl_input"><input size="57"  name="performance_since_start" id="performance_since_start" value="<?=$investment_detail->performance_since_start?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Performance ytd</div><div class="tbl_input"><input size="57"  name="performance_ytd" id="performance_ytd" value="<?=$investment_detail->performance_ytd?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">High Water Mark</div><div class="tbl_input"><input size="57"  name="high_water_mark" id="high_water_mark" value="<?=$investment_detail->high_water_mark?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Hurdle Rate</div><div class="tbl_input"><input size="57"  name="hurdle_rate" id="hurdle_rate" value="<?=$investment_detail->hurdle_rate?>"></div></td>
     </tr>
      </table>
       </fieldset>


  <fieldset class="fldset">
   <legend>Fees (Subscription)</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Minimum Front End Fee</div><div class="tbl_input"><input size="57"  name="minimum_front_end_fee" id="minimum_front_end_fee" value="<?=$subscription_fee->minimum_front_end_fee?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Maximum Front End Fee</div><div class="tbl_input"><input size="57"  name="maximum_front_end_fee" id="maximum_front_end_fee" value="<?=$subscription_fee->maximum_front_end_fee?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Management Fee</div><div class="tbl_input"><input size="57"  name="management_fee" id="management_fee" value="<?=$subscription_fee->management_fee?>"></div></td>
     </tr>
      </table>
       </fieldset>

 
 <br>
 

  <fieldset class="fldset">
   <legend>Redemption Details</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Minimum Amount</div><div class="tbl_input"><input size="57"  name="minimum_amount" id="minimum_amount" value="<?=$redemption_details->minimum_amount?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Minimum Units</div><div class="tbl_input"><input size="57"  name="minimum_units" id="minimum_units" value="<?=$redemption_details->minimum_units?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Notice Period</div><div class="tbl_input"><input size="57"  name="notice_period" id="notice_period" value="<?=$redemption_details->notice_period?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Trading Frequency</div><div class="tbl_input"><input size="57"  name="trading_frequency" id="trading_frequency" value="<?=$redemption_details->trading_frequency?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Trading Date</div><div class="tbl_input"><input size="57"  name="trading_date" id="trading_date" value="<?=$redemption_details->trading_date?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Cut-Off Time</div><div class="tbl_input"><input size="57"  name="cut_of_time" id="cut_of_time" value="<?=$redemption_details->cut_of_time?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Settlement Cycle</div><div class="tbl_input"><input size="57"  name="settlement_cycle" id="settlement_cycle" value="<?=$redemption_details->settlement_cycle?>"></div></td>
     </tr>
      </table>
       </fieldset>

 
 <br>
 

  <fieldset class="fldset">
   <legend>Fees (Redemption)</legend><br>
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Minimum Back End Fee</div><div class="tbl_input"><input size="57"  name="minimum_back_end_fee" id="minimum_back_end_fee" value="<?=$redemption_fees->minimum_back_end_fee?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Maximum Back End Fee</div><div class="tbl_input"><input size="57"  name="maximum_back_end_fee" id="maximum_back_end_fee" value="<?=$redemption_fees->maximum_back_end_fee?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Early Withdrawal Fee</div><div class="tbl_input"><input size="57"  name="early_withdrawal_fee" id="early_withdrawal_fee" value="<?=$redemption_fees->early_withdrawal_fee?>"></div></td>
     </tr>
      </table>
       </fieldset>

 
 <br>
 

  <fieldset class="fldset">
   <legend>Transfer Agent and A/C Details<sup>*</sup></legend><br>
   
   <select name='transfer_agent_id' onchange='SetValues_transfer_agent(this.value,false)'>
<option value='0'><?php echo 'New transfer_agent';?></option>
<?php foreach($transfer_agents as $transfer_agentC){ ?>
<option value='<?php echo $transfer_agentC['id'];?>' <?php if(($transfer_agent->id) == $transfer_agentC['id']) echo"selected = 'selected'" ?>><?php echo $transfer_agentC['id'];?></option>
<?php } ?>
</select>

   
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Transfer Agent</div><div class="tbl_input"><input size="57"  name="transfer_agent" id="transfer_agent" value="<?=$transfer_agent->transfer_agent?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57"  name="postal_address" id="postal_address" value="<?=$transfer_agent->postal_address?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57"  name="postal_address_I" id="postal_address_I" value="<?=$transfer_agent->postal_address_I?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ZIP / City</div><div class="tbl_input"><input size="57"  name="zip" id="zip" value="<?=$transfer_agent->zip?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Key Contact Person</div><div class="tbl_input"><input size="57"  name="key_contact_persons" id="key_contact_persons" value="<?=$transfer_agent->key_contact_persons?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-mail Address</div><div class="tbl_input"><input size="57"  name="email_address" id="email_address" value="<?=$transfer_agent->email_address?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Additional information</div><div class="tbl_input"><input size="57"  name="additional_information" id="additional_information" value="<?=$transfer_agent->additional_information?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Phone</div><div class="tbl_input"><input size="57"  name="phone_number" id="phone_number" value="<?=$transfer_agent->phone_number?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fax</div><div class="tbl_input"><input size="57"  name="fax_no" id="fax_no" value="<?=$transfer_agent->fax_no?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">A/C  No.</div><div class="tbl_input"><input size="57"  name="account_number" id="account_number" value="<?=$transfer_agent->account_number?>"></div></td>
     </tr>
      </table>
       </fieldset>

 
 <br>
 

  <fieldset class="fldset">
   <legend>Custodian<sup>*</sup></legend><br>
   
<select name='custodian_id' onchange='SetValues_custodian(this.value,false)'>
<option value='0'><?php echo 'New custodian';?></option>
<?php foreach($custodians as $custodianC){ ?>
<option value='<?php echo $custodianC['id'];?>' <?php if($custodian->id == $custodianC['id']) echo"selected = 'selected'" ?>><?php echo $custodianC['id'];?></option>
<?php } ?>
</select>
   
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Custodian</div><div class="tbl_input"><input size="57"  name="custodian" id="custodian" value="<?=$custodian->custodian?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57"  name="postal_address_a" id="postal_address_a" value="<?=$custodian->postal_address_a?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57"  name="postal_address_b" id="postal_address_b" value="<?=$custodian->postal_address_b?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ZIP / City</div><div class="tbl_input"><input size="57"  name="zip_city" id="zip_city" value="<?=$custodian->zip_city?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Key Contact Person</div><div class="tbl_input"><input size="57"  name="key_contact_person_a_cu" id="key_contact_person_a_cu" value="<?=$custodian->key_contact_person_a_cu?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-mail Address</div><div class="tbl_input"><input size="57"  name="email_address_a" id="email_address_a" value="<?=$custodian->email_address_a?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Key Contact Person</div><div class="tbl_input"><input size="57"  name="key_contact_person_b" id="key_contact_person_b" value="<?=$custodian->key_contact_person_b?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-mail Address</div><div class="tbl_input"><input size="57"  name="email_address_b" id="email_address_b" value="<?=$custodian->email_address_b?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Phone</div><div class="tbl_input"><input size="57"  name="phone_number_cu" id="phone_number_cu" value="<?=$custodian->phone_number_cu?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fax</div><div class="tbl_input"><input size="57"  name="fax_number" id="fax_number" value="<?=$custodian->fax_number?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">A/C  No.</div><div class="tbl_input"><input size="57"  name="account_number_cu" id="account_number_cu" value="<?=$custodian->account_number_cu?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Settlement Details</div><div class="tbl_input"><input size="57"  name="settlement_details_a" id="settlement_details_a" value="<?=$custodian->settlement_details_a?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Settlement Details</div><div class="tbl_input"><input size="57"  name="settlement_details_b" id="settlement_details_b" value="<?=$custodian->settlement_details_b?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Settlement Details</div><div class="tbl_input"><input size="57"  name="settlement_details_c" id="settlement_details_c" value="<?=$custodian->settlement_details_c?>"></div></td>
     </tr>
      </table>
       </fieldset>

 
 <br>
 

  <fieldset class="fldset">
   <legend>Fund Advisor<sup>*</sup></legend><br>
   
<select name='fund_advisor_id' onchange='SetValues_fund_advisor(this.value,false)'>
<option value='0'><?php echo 'New fund_advisor';?></option>
<?php foreach($fund_advisors as $fund_advisorC){ ?>
<option value='<?php echo $fund_advisorC['id'];?>' <?php if($fund_advisor->id == $fund_advisorC['id']) echo"selected = 'selected'" ?>><?php echo $fund_advisorC['id'];?></option>
<?php } ?>
</select>
   
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Advisor</div><div class="tbl_input"><input size="57"  name="fund_advisor" id="fund_advisor" value="<?=$fund_advisor->fund_advisor?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57"  name="postal_address_adv" id="postal_address_adv" value="<?=$fund_advisor->postal_address_adv?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57"  name="postal_address_adv_I" id="postal_address_adv_I" value="<?=$fund_advisor->postal_address_adv_I?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ZIP / City</div><div class="tbl_input"><input size="57"  name="zip_city_adv" id="zip_city_adv" value="<?=$fund_advisor->zip_city_adv?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Key Contact Person</div><div class="tbl_input"><input size="57"  name="additional_information_adv" id="additional_information_adv" value="<?=$fund_advisor->additional_information_adv?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-mail Address</div><div class="tbl_input"><input size="57"  name="email_address_adv" id="email_address_adv" value="<?=$fund_advisor->email_address_adv?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Phone</div><div class="tbl_input"><input size="57"  name="phone_number_adv" id="phone_number_adv" value="<?=$fund_advisor->phone_number_adv?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fax</div><div class="tbl_input"><input size="57"  name="fax_number_adv" id="fax_number_adv" value="<?=$fund_advisor->fax_number_adv?>"></div></td>
     </tr>
      </table>
       </fieldset>

 
 <br>
 

  <fieldset class="fldset">
   <legend>Fund Auditor<sup>*</sup></legend><br>

<select name='fund_auditor_id' onchange='SetValues_fund_auditor(this.value,false)'>
<option value='0'><?php echo 'New fund_auditor';?></option>
<?php foreach($fund_auditors as $fund_auditorC){ ?>
<option value='<?php echo $fund_auditorC['id'];?>' <?php if($fund_auditor->id == $fund_auditorC['id']) echo"selected = 'selected'" ?>><?php echo $fund_auditorC['id'];?></option>
<?php } ?>
</select>
   
   
    <table width="590px" border="0">
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fund Auditor</div><div class="tbl_input"><input size="57"  name="fund_auditor" id="fund_auditor" value="<?=$fund_auditor->fund_auditor?>"></div></td>
     </tr>
 
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57"  name="postal_address_fau" id="postal_address_fau" value="<?=$fund_auditor->postal_address_fau?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Postal Address</div><div class="tbl_input"><input size="57"  name="postal_address_fau_I" id="postal_address_fau_I" value="<?=$fund_auditor->postal_address_fau_I?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">ZIP / City</div><div class="tbl_input"><input size="57"  name="zip_city_fau" id="zip_city_fau" value="<?=$fund_auditor->zip_city_fau?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Key Contact Person</div><div class="tbl_input"><input size="57"  name="additional_information_fau" id="additional_information_fau" value="<?=$fund_auditor->additional_information_fau?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">E-mail Address</div><div class="tbl_input"><input size="57"  name="email_address_fau" id="email_address_fau" value="<?=$fund_auditor->email_address_fau?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Phone</div><div class="tbl_input"><input size="57"  name="phone_number_fau" id="phone_number_fau" value="<?=$fund_auditor->phone_number_fau?>"></div></td>
     </tr>
     
     <tr>
      <td class="fieldset"><div class="tbl_lbl">Fax</div><div class="tbl_input"><input size="57"  name="fax_number_fau" id="fax_number_fau" value="<?=$fund_auditor->fax_number_fau?>"></div></td>
     </tr>
      </table>
    </fieldset>
    <fieldset class="fldset">
     <legend>Attention!<sup>*</sup></legend>
     Modifying fields of data, marked with <sup>*</sup>, you will affect any fund, using this data ;<br/>
     Modifying dropdown menu, you will attach another fund advisor, for instance, to this fund.
    </fieldset>
 <br>

<input type='submit' name='add' value='Add'/>
</form>
