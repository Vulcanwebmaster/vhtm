<?php
class IsinCollection
{

static public function getHistory()
  {
    $_GET['id'] = mysql_real_escape_string($_GET['id']);

    $format = '%Y-%m-%d %H:%M:%S';
    $strf = strftime($format);
    
    $rows = array();
    $query = " SELECT f.*, cu.abbreviation cuname 
               FROM fund f, currency cu
               WHERE cu.id = f.currency AND f.unique_id =
               ( SELECT unique_id FROM fund ff WHERE ff.id = '".$_GET['id']."' )
	       ORDER BY created_at DESC";
    $qres = mysql_query($query);
    
    while($x = mysql_fetch_assoc($qres))
     $rows[] = $x;
    //var_dump($rows);die();
    return($rows);
  }
  /* function accepts $_GET array (that sets id of account, and number of instance)
     function outputs array to be shown at form */
  static public function getHistoryInstance()
  {
    $allInstances = IsinCollection::getHistory();
    if((isset($_GET['number']))&&(isset($allInstances[$_GET['number']])))
      return $allInstances[$_GET['number']];
    else
      return $allInstances[0];
  }
 

// function get all isins
  static public function deleteIsins()
  {
    //1. check, if there are present id's of existing isins;
    //2. check delete mode
    //3. deleting agents, check and correct all probable links heading to them
    foreach($_POST as $key=>$curr):
    $key = mysql_real_escape_string($key);
    if(substr($key, 0, 3) == 'id_')
    if(substr($key,3))
    {
      $query = "SELECT unique_id, transfer_agent_id, custodian_id, fund_advisor_id, fund_auditor_id
      FROM fund WHERE id =  '".substr($key,3)."' ";
      $qres=mysql_query($query);
      $fund=mysql_fetch_object($qres);
      
      if($_POST['mode']=='3')
      {

        $query= "DELETE FROM transfer_agent WHERE id='$fund->transfer_agent_id' " ;
        mysql_query($query);
        $query= "UPDATE fund SET transfer_agent_id = '0'
        WHERE transfer_agent_id = '$fund->transfer_agent_id'" ;
        mysql_query($query);

        $query= "DELETE FROM custodian WHERE id='$fund->custodian_id' " ;
        mysql_query($query);
        $query= "UPDATE fund SET custodian_id = '0'
        WHERE custodian_id = '$fund->custodian_id'" ;
        mysql_query($query);

        $query= "DELETE FROM fund_advisor WHERE id='$fund->fund_advisor_id' " ;
        mysql_query($query);
        $query= "UPDATE fund SET fund_advisor_id = '0'
        WHERE fund_advisor_id = '$fund->fund_advisor_id'" ;
        mysql_query($query);

        $query= "DELETE FROM fund_auditor WHERE id='$fund->fund_auditor_id' " ;
        mysql_query($query);
        $query= "UPDATE fund SET fund_auditor_id='0'
        WHERE fund_auditor_id= '$fund->fund_auditor_id'" ;
        mysql_query($query);
      }
      
      $query = " DELETE FROM fund WHERE unique_id = '$fund->unique_id' ";
      mysql_query($query);

      $query = " DELETE FROM redemption_fees WHERE redemption_detais_id IN (SELECT id FROM
      redemption_details WHERE funds_id='".substr($key,3)."' )";
      mysql_query($query);
      
      $query = " DELETE FROM investment_details, redemption_details, subscription_fee
      WHERE funds_id = '".substr($key,3)."' ";
      mysql_query($query);
      
    }
    endforeach;
    
  }

/*deprecated*/
  static public function getIsin($isin)
  {
    $query = " SELECT i.* FROM isin i, fund f WHERE i.unique_id = f.unique_id
               AND i.id = '$isin' ";
    $qres = mysql_query($query);
    $row = mysql_fetch_assoc($qres);
    return(count($row)-1);
  }
  
  static public function getIsins() 
{
  $isins = array();
  $result = array();
  $query = "SELECT ii.id, ii.ISIN as code, ii.fund_name as name, abbreviation as currency 
  FROM currency c, fund ii WHERE c.id = ii.currency 
  AND ii.created_at = (SELECT MAX(created_at) FROM fund iii WHERE iii.unique_id = ii.unique_id) ORDER BY created_at";
  $qres=mysql_query($query);
  while($row = mysql_fetch_assoc($qres))
    $isins[] = $row;
  foreach($isins as $isin)
    $result[$isin['id']] = $isin;
  return($result);
}

// function builds string of id's, format ' id1,id2,id3 ', if there are 3 ids total
function formProperJavascript()
{
  $isins = $this->getIsins();
  $show = "";
  foreach($isins as $row):
    $show.= 'Ids['.$row['id'].'] = "'.$row['id'].'";';
    $show.= 'Currency['.$row['id'].'] = "'.$row['currency'].'";';
    $show.= 'Names['.$row['id'].'] = "'.$row['name'].'";';

  endforeach;
  return $show;
}

function getIdsProperty($property) 
{
  $properties = array('id', 'name', 'currency');
  if(!in_array($property,$properties ))
    die('wrong property!');
  $Ids = '';
  $isins = $this->getIsins();
  foreach($isins as $row)  
    if(trim($Ids))
     $Ids=$Ids.',"'.$row[$property].'"';
    else 
     $Ids='"'.$row[$property].'"';
  return $Ids;
}

static public function verifyFields()
{
  foreach($_POST as $key=>$value)
    $_POST[$key] = mysql_real_escape_string($value);
}

static public function addIsin($update = false)
{
  //1. verify values
  IsinCollection::verifyFields();
  //2. add values.
  extract($_POST);
  /* if admin created new records into transfer_agent,custodian,
  fund_advisor and fund_auditor tables */ 
  if(!$transfer_agent_id)
    {
      $query = "INSERT INTO `transfer_agent` (`id` ,`transfer_agent` ,`postal_address` ,
`postal_address_I` ,`phone_number` ,`account_number` ,`key_contact_persons` ,`email_address` ,
`fax_no` ,`additional_information` ,`zip` )
VALUES (NULL , '$transfer_agent', '$postal_address', '$postal_address_I' ,'$phone_number' ,
'$account_number' ,'$key_contact_persons' ,'$email_address' ,'$fax_no' ,'$additional_information' ,
'$zip' );";
mysql_query($query) or die('failed to execute query '.$query);
 $transfer_agent_id = mysql_insert_id();
    }
    elseif($update&&$transfer_agent_id)
    {
      //update record in transfer_agent table
      $query = "UPDATE `transfer_agent` SET `transfer_agent` = '$transfer_agent',
      `postal_address` = '$postal_address',
      `postal_address_I` = '$postal_address_I',
      `phone_number` = '$phone_number',
      `account_number` = '$account_number',
      `key_contact_persons` = '$key_contact_persons',
      `email_address` = '$email_address',
      `fax_no` = '$fax_no',
      `additional_information` = '$additional_information',
      `zip` = '$zip' WHERE `transfer_agent`.`id` = '$transfer_agent_id' LIMIT 1 ;";
       mysql_query($query) or die('failed to execute query '.$query);
    }
  if(!trim($custodian_id))
    {
      //add record to table;
      $query="INSERT INTO `custodian` (`id` ,`custodian` ,`postal_address_a` ,
`postal_address_b` ,`zip_city` ,`key_contact_person_a_cu` ,`email_address_a` ,
`key_contact_person_b` ,`email_address_b` ,`phone_number_cu` ,`fax_number` ,
`settlement_details_a` ,`settlement_details_b` ,`settlement_details_c` ,`account_number_cu` )
VALUES (NULL , '$custodian' ,'$postal_address_a' ,'$postal_address_b' ,'$zip_city' ,
'$key_contact_person_a_cu' ,'$email_address_a' ,'$key_contact_person_b' ,'$email_address_b' ,
'$phone_number_cu' ,'$fax_number' ,'$settlement_details_a' ,'$settlement_details_b' ,
'$settlement_details_c' ,'$account_number_cu' );";
      //get insert id.
      mysql_query($query) or die('failed to execute query '.$query);
      $custodian_id = mysql_insert_id();
    }
    elseif($update&&trim($custodian_id))
    {
      //update record in custodian table
      $query="UPDATE `custodian` SET `custodian` = '$custodian',
`postal_address_a` = '$postal_address_a',
`postal_address_b` = '$postal_address_b',
`zip_city` = '$zip_city',
`key_contact_person_a_cu` = '$key_contact_person_a_cu',
`email_address_a` = '$email_address_a',
`key_contact_person_b` = '$key_contact_person_b',
`email_address_b` = '$email_address_b',
`phone_number_cu` = '$phone_number_cu',
`fax_number` = '$fax_number',
`settlement_details_a` = '$settlement_details_a',
`settlement_details_b` = '$settlement_details_b',
`settlement_details_c` = '$settlement_details_c',
`account_number_cu` = '$account_number_cu' WHERE `custodian`.`id` = '$custodian_id' LIMIT 1 ;";
      mysql_query($query) or die('failed to execute query '.$query);
    }
  if(!trim($fund_advisor_id))
    {
      //add record to table;
      $query="INSERT INTO `fund_advisor` (`id` ,`fund_advisor` ,`postal_address_adv` ,
`postal_address_adv_I` ,`phone_number_adv` ,`email_address_adv` ,`fax_number_adv` ,
`additional_information_adv` ,`zip_city_adv` )
VALUES (NULL , '$fund_advisor' ,'$postal_address_adv' ,'$postal_address_adv_I' ,
'$phone_number_adv' ,'$email_address_adv' ,'$fax_number_adv' ,'$additional_information_adv' ,
'$zip_city_adv' );";
      //get insert id.
      mysql_query($query) or die('failed to execute query '.$query);
      $fund_advisor_id = mysql_insert_id();
      // $_POST['transfer_agent_id'] = insert id
    }
    elseif($update&&trim($fund_advisor_id))
    {
      //update record in fund_advisor table
      $query="UPDATE `fund_advisor` SET `fund_advisor` = '$fund_advisor',
`postal_address_adv` = '$ostal_address_adv',
`postal_address_adv_I` = '$ostal_address_adv_I',
`phone_number_adv` = '$phone_number_adv',
`email_address_adv` = '$email_address_adv',
`fax_number_adv` = '$fax_number_adv',
`additional_information_adv` = '$additional_information_adv',
`zip_city_adv` = '$zip_city_adv' WHERE `fund_advisor`.`id` ='$fund_advisor_id' LIMIT 1 ;";
      mysql_query($query) or die('failed to execute query '.$query);
    }
  if(!trim($fund_auditor_id))
    {
      //add record to table;
      $query="INSERT INTO `fund_auditor` (`id` ,`fund_auditor` ,`postal_address_fau` ,
`postal_address_fau_I` ,`phone_number_fau` ,`email_address_fau` ,`fax_number_fau` ,
`additional_information_fau` ,`zip_city_fau` )
VALUES (NULL , '$fund_auditor' ,'$postal_address_fau' ,'$postal_address_fau_I' ,
'$phone_number_fau' ,'$email_address_fau' ,'$fax_number_fau' ,'$additional_information_fau' ,
'$zip_city_fau' );";
      mysql_query($query) or die('failed to execute query '.$query);
      $fund_auditor_id = mysql_insert_id();
    }
    elseif($update&&trim($fund_auditor_id))
    {
      //update record in fund_auditor table
      $query=" UPDATE `fund_auditor` SET `fund_auditor` = '$fund_auditor',
`postal_address_fau` = '$postal_address_fau',
`postal_address_fau_I` = '$postal_address_fau_I',
`phone_number_fau` = '$phone_number_fau',
`email_address_fau` = '$email_address_fau',
`fax_number_fau` = '$fax_number_fau',
`additional_information_fau` = '$additional_information_fau',
`zip_city_fau` = '$zip_city_fau' WHERE `fund_auditor`.`id` = '$fund_auditor_id' LIMIT 1 ;";
      mysql_query($query) or die('failed to execute query '.$query);
    }
  //echo 'EVERYTHINGS FINE!!!';
  //insert record (together with $_POST[][][][]) to funds table
  //up to are we updating field, or inserting new, evaluate $funds_id
  
  if($update)
    $unique_id = $_POST['unique_id'];
  else
    $unique_id = IsinCollection::generateUniqueId();//generate new 
  
  /*if updating field, get old funds_id
  if inserting field, generate new unique funds_id*/
  
  $query ="INSERT INTO `fund` (`id` ,`ISIN` ,`currency` ,`fund_name` ,`fund_company` ,
`fund_category` ,`fund_status` ,`domicile` ,`nav_value` ,`nav_date` ,`fund_strategy` ,
`primary_strategy` ,`secondary_strategy` ,`investment_objectives_a` ,`investment_objectives_b` ,
`investment_objectives_c` ,`unique_feature_a` ,`unique_feature_b` ,`inception_date` ,
`current_assets` ,`benchmark` ,`risk_appetite` ,`geographical_exposure` ,`last_audit` ,
`add_info_a` ,`add_info_b` ,`transfer_agent_id` ,`custodian_id` ,`fund_advisor_id` ,
`fund_auditor_id` ,`created_at`,`unique_id`)
VALUES (NULL ,'$ISIN' ,'$currency' ,'$fund_name' ,'$fund_company' ,'$fund_category' ,
'$fund_status' ,'$domicile' ,'$nav_value' ,'$nav_date' ,'$fund_strategy' ,'$primary_strategy' ,
'$secondary_strategy' ,'$investment_objectives_a' ,'$investment_objectives_b' ,
'$investment_objectives_c' ,'$unique_feature_a' ,'$unique_feature_b' ,'$inception_date' ,
'$current_assets' ,'$benchmark' ,'$risk_appetite' ,'$geographical_exposure',
'$last_audit','$add_info_a','$add_info_b','$transfer_agent_id' ,'$custodian_id' ,
'$fund_advisor_id' ,'$fund_auditor_id' ,NOW(), $unique_id);";
      mysql_query($query) or die('failed to execute query '.$query);
      $new_id = mysql_insert_id();  //new insert id

  if(!$update)
  {
    $query="INSERT INTO `investment_details` (
    `id` ,`initial_minimum_investment` ,`minimum_investment` ,`minimum_units_investment` ,
    `lockup_period` ,`notice_period_i` ,`trading_frequency_i` ,`trading_date_i` ,
    `cut_off_time` ,`settlement_cycle_i` ,`administration_fee` ,`accepted_investor_types` ,
    `performance_since_start` ,`performance_ytd` ,`high_water_mark` ,`hurdle_rate` ,
    `add_info_a` ,`add_info_b` ,`funds_id` )
    VALUES (NULL ,'$initial_minimum_investment' ,'$minimum_investment' ,'$minimum_units_investment' ,
    '$lockup_period' ,'$notice_period_i' ,'$trading_frequency_i' ,'$trading_date_i' ,
    '$cut_off_time' ,'$settlement_cycle_i' ,'$administration_fee' ,'$accepted_investor_types' ,
    '$performance_since_start' ,'$performance_ytd' ,'$high_water_mark' ,'$hurdle_rate' ,
    '$add_info_a' ,'$add_info_b' ,'$new_id' );";
    mysql_query($query) or die('failed to execute query '.$query);
    //insert records to investment_details, subscription_fees, redemption_fees,
    $query="INSERT INTO `subscription_fee` (
    `id` ,`funds_id` ,`minimum_front_end_fee` ,`maximum_front_end_fee` ,`management_fee` ,
    `additional_information` )
    VALUES (NULL ,'$new_id' ,'$minimum_front_end_fee' ,'$maximum_front_end_fee' ,
    '$management_fee' ,'$additional_information' );";
    mysql_query($query) or die('failed to execute query '.$query);
    
    $query="INSERT INTO `redemption_details` (`id` ,`funds_id` ,`minimum_amount` ,
    `notice_period` ,`trading_date` ,`settlement_cycle` ,`minimum_units` ,`trading_frequency` ,
    `cut_of_tiime` ,`additional_information` )
    VALUES (NULL ,'$new_id' ,'$minimum_amount' ,'$notice_period' ,'$trading_date' ,
    '$settlement_cycle' ,'$minimum_units' ,'$trading_frequency','$cut_of_tiime' ,
    '$additional_information' );";
    mysql_query($query) or die('failed to execute query '.$query);
    $redemption_details_id = mysql_insert_id();
    //redemption_details tables (together with insert id)
    
    $query="INSERT INTO `redemption_fees` (`id` ,`redemption_details_id` ,`minimum_back_end_fee` ,
    `early_withdrawal_fee` ,`maximum_back_end_fee` ,`additional_information` )
    VALUES (NULL ,'$redemption_details_id' ,'$minimum_back_end_fee' ,'$early_withdrawal_fee' ,
    '$maximum_back_end_fee' ,'$additional_information' );";
    mysql_query($query) or die('failed to execute query '.$query);
    // insert data to isins table, for synchronizing.
    $query="INSERT INTO `isin` (
    `id` ,`code` ,`name` ,`id_currency` ,`limit1` ,`limit2` ,`limit3` ,`name_fund` ,
    `nav` ,`date_nav`,`unique_id` )
    VALUES (NULL ,'$ISIN' ,'$fund_name' ,'$currency' ,'' ,'' ,'' ,'' ,'$nav_value' ,'$nav_date' ,'$unique_id' );";
    mysql_query($query) or die('failed to execute query '.$query);
  }
  else
  {
    /*1. find ids of investment_details, subscription_fees, redemption_fees,
    redemption_details tables
    2. update these tables */
    $investment_detail = mysql_query("SELECT * FROM investment_details WHERE funds_id='$id'"); 
    if ( mysql_error() ) echo mysql_error(); 
    $investment_detail = mysql_fetch_object($investment_detail);
    $query = "UPDATE `investment_details` SET `initial_minimum_investment` = '$initial_minimum_investment',
`minimum_investment` = '$minimum_investment',`minimum_units_investment` = '$minimum_units_investment',
`lockup_period` = '$lockup_period',`notice_period_i` = '$notice_period_i',
`trading_frequency_i` = '$trading_frequency_i',`trading_date_i` = '$trading_date_i',
`cut_off_time` = '$cut_off_time',`settlement_cycle_i` = '$settlement_cycle_i',
`administration_fee` = '$administration_fee',`accepted_investor_types` = '$accepted_investor_types',
`performance_since_start` = '$performance_since_start',`performance_ytd` = '$performance_ytd',
`high_water_mark` = '$high_water_mark',`hurdle_rate` = '$hurdle_rate',
`add_info_a` = '$add_info_a',`add_info_b` = '$add_info_b',
`funds_id` = '$new_id' WHERE `investment_details`.`id` = '$investment_detail->id' LIMIT 1 ;    ";
    mysql_query($query) or die('failed to execute query '.$query);
    $subscription_fee = mysql_query("SELECT * FROM subscription_fee WHERE funds_id='$id'");
    if ( mysql_error() ) echo mysql_error(); 
    $subscription_fee = mysql_fetch_object($subscription_fee);
    if ( mysql_error() ) echo mysql_error(); 
    $query = "UPDATE `subscription_fee` SET `funds_id` = '$new_id',`minimum_front_end_fee` = '$minimum_front_end_fee',
`maximum_front_end_fee` = '$maximum_front_end_fee',`management_fee` = '$management_fee',
`additional_information` = '$additional_information' WHERE `subscription_fee`.`id` = '$subscription_fee->id' LIMIT 1 ;";	
    mysql_query($query) or die('failed to execute query '.$query);                
    $redemption_details = mysql_query("SELECT * FROM redemption_details WHERE funds_id='$id'");
    if ( mysql_error() ) echo mysql_error(); 
    $redemption_details = mysql_fetch_object($redemption_details);
    if ( mysql_error() ) echo mysql_error();
    $query= "UPDATE `redemption_details` SET `funds_id` = '$new_id',
`minimum_amount` = '$minimum_amount',`notice_period` = '$notice_period',`trading_date` = '$trading_date',
`settlement_cycle` = '$settlement_cycle',`minimum_units` = '$minimum_units',`trading_frequency` = '$trading_frequency',
`cut_of_tiime` = '$cut_of_tiime',`additional_information` = '$additional_information' WHERE `redemption_details`.`id` ='$redemption_details->id' LIMIT 1 ;";
    mysql_query($query) or die('failed to execute query '.$query);
    if ( $redemption_details ) 
    {
      $redemption_fees = mysql_query("SELECT * FROM redemption_fees WHERE redemption_details_id='$redemption_details->redemption_details_id'");
      if ( mysql_error() ) echo mysql_error(); 
      $redemption_fees = mysql_fetch_object($redemption_fees);
      if ( mysql_error() ) echo mysql_error();
      $query="UPDATE `redemption_fees` SET `minimum_back_end_fee` = '$minimum_back_end_fee',
`early_withdrawal_fee` = '$early_withdrawal_fee',`maximum_back_end_fee` = '$maximum_back_end_fee',
`additional_information` = '$additional_information' WHERE `redemption_fees`.`id` = '$redemption_fees->id' LIMIT 1 ;";
    mysql_query($query) or die('failed to execute query '.$query);
    }
    //update isin table, for synchronizing:
    $query="UPDATE `isin` SET `code` = '$ISIN',`name` = '$fund_name',`id_currency` = '$currency',
`nav` = '$nav_value',`date_nav` = '$nav_date' WHERE `unique_id` = '$unique_id' LIMIT 1 ;";
    mysql_query($query) or die('failed to execute query '.$query);
  }
}

  static public function generateUniqueId()
  {
    $query = "SELECT unique_id FROM fund f
    WHERE NOT EXISTS (SELECT * FROM fund ff WHERE ff.unique_id = f.unique_id+1 )";
    $qres=mysql_query($query) or die('failed to execute query'.$query);
    $row=mysql_fetch_assoc($qres);
    return((int)$row['unique_id']+1);
  }

  static public function LoadIsin()
  {
    global $my_fund, $investment_detail, $subscription_fee, $redemption_details,
    $redemption_fees, $transfer_agent, $custodian, $fund_advisor, $fund_auditor;
    $id= mysql_real_escape_string($_GET['id']);
    $my_fund = mysql_query("SELECT * FROM fund WHERE id='$id' AND created_at = (SELECT MAX(created_at) FROM fund WHERE id='$id')"); 
    if ( mysql_error() ) echo mysql_error(); 
    $my_fund = mysql_fetch_object($my_fund);

    $investment_detail = mysql_query("SELECT * FROM investment_details WHERE funds_id='$my_fund->id'"); 
    if ( mysql_error() ) echo mysql_error(); 
    $investment_detail = mysql_fetch_object($investment_detail);

    $subscription_fee = mysql_query("SELECT * FROM subscription_fee WHERE funds_id='$my_fund->funds_id'");
    if ( mysql_error() ) echo mysql_error(); 
    $subscription_fee = mysql_fetch_object($subscription_fee);
    if ( mysql_error() ) echo mysql_error(); 
		
    $redemption_details = mysql_query("SELECT * FROM redemption_details WHERE funds_id='$my_fund->funds_id'");
    if ( mysql_error() ) echo mysql_error(); 
    $redemption_details = mysql_fetch_object($redemption_details);
    if ( mysql_error() ) echo mysql_error();
		
    if ( $redemption_details ) 
    {
      $redemption_fees = mysql_query("SELECT * FROM redemption_fees WHERE redemption_details_id='$redemption_details->redemption_details_id'");
      if ( mysql_error() ) echo mysql_error(); 
      $redemption_fees = mysql_fetch_object($redemption_fees);
      if ( mysql_error() ) echo mysql_error(); 
    }
    $transfer_agent = mysql_query("SELECT * FROM transfer_agent WHERE id='$my_fund->transfer_agent_id'");
    if ( mysql_error() ) echo mysql_error(); 
    $transfer_agent = mysql_fetch_object($transfer_agent);
    if ( mysql_error() ) echo mysql_error(); 
    $custodian=mysql_query("SELECT * FROM custodian WHERE id='".$my_fund->custodian_id."'");
    if ( mysql_error() ) echo mysql_error(); 
    $custodian=mysql_fetch_object($custodian);
    if ( mysql_error() ) echo mysql_error(); 
    $fund_advisor=mysql_query("SELECT * FROM fund_advisor WHERE id='".$my_fund->fund_advisor_id."'");
    if ( mysql_error() ) echo mysql_error();
    $fund_advisor=mysql_fetch_object($fund_advisor);
    if ( mysql_error() ) echo mysql_error(); 
    $fund_auditor = mysql_query("SELECT * FROM fund_auditor WHERE id='".$my_fund->fund_auditor_id."'");
    if ( mysql_error() ) echo mysql_error(); 
    $fund_auditor = mysql_fetch_object($fund_auditor);
  }
}
?>