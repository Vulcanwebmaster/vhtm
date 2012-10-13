<?php
Class Fund_DatabaseClass extends ChildCoreClass
{
	public $fundArr;
	public $isin;
	public $currency;
	public $fund_name;
	public $fund_company;
	public $fund_category;
	public $fund_status;
	public $domicile;
	public $net_asset_value;
	public $nav_date;
	public $performance_start;
	public $performance_ytd;
	public $fund_strategy;
	public $primary_strategy;
	public $secondary_strategy;
	public $investment_objectives;
	public $unique_feature;
	public $inception_date;
	public $current_assets;
	public $benchmark;
	public $risk_appetite;
	public $geographical_exposure;
	public $last_audit;
	public $add_info;
	public $initial_min_investment;
	public $min_investment;
	public $min_units_investment;
	public $lockup_period_sub;
	public $trade_frequency_sub;
	public $notice_period_sub;
	public $trade_date_sub;
	public $cutoff_time_sub;
	public $settlement_cycle_sub;
	public $add_info_1;
	public $min_frontend_fee;
	public $max_frontend_fee;
	public $add_info_2;
	public $min_amount_red;
	public $min_units_red;
	public $trade_frequency_red;
	public $notice_period_red;
	public $trade_date_red;
	public $cutoff_time_red;
	public $settlement_cycle_red;
	public $add_info_3;
	public $min_backend_fee;
	public $max_backend_fee;
	public $early_withdrawal_fee;
	public $add_info_4;
	public $management_fee;
	public $performance_fee;
	public $add_info_5;
	public $accepted_investor_types;
	public $high_water_mark;
	public $hurdle_rate;
	public $custodian_name;
	public $postal_address_c1;
	public $postal_address_c2;
	public $postal_address_c3;
	public $postal_address_c4;
	public $key_contact_c;
	public $email_c;
	public $phone_c;
	public $fax_c;
	public $transfer_agent_name;
	public $postal_address_ta1;
	public $postal_address_ta2;
	public $postal_address_ta3;
	public $postal_address_ta4;
	public $key_contact_ta;
	public $email_ta;
	public $phone_ta;
	public $fax_ta;
	public $fund_advisor_name;
	public $postal_address_adv1;
	public $postal_address_adv2;
	public $postal_address_adv3;
	public $postal_address_adv4;
	public $key_contact_adv;
	public $email_adv;
	public $phone_adv;
	public $fax_adv;
	public $fund_auditor_name;
	public $postal_address_aud1;
	public $postal_address_aud2;
	public $postal_address_aud3;
	public $postal_address_aud4;
	public $key_contact_aud;
	public $email_aud;
	public $phone_aud;
	public $fax_aud;
	function __construct($db)
	{
		$tabName="fund_database"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->fundArr=$arr;
	}
	function Test()
	{
	$this->isin=1;
	$this->currency=1;
	$this->fund_name=1;
	$this->fund_company=1;
	$this->fund_category=1;
	$this->fund_status=1;
	$this->domicile=1;
	$this->net_asset_value=1;
	$this->nav_date=1;
	$this->performance_start=1;
	$this->performance_ytd=1;
	$this->fund_strategy=1;
	$this->primary_strategy=1;
	$this->secondary_strategy=1;
	$this->investment_objectives=1;
	$this->unique_feature=1;
	$this->inception_date=1;
	$this->current_assets=1;
	$this->benchmark=1;
	$this->risk_appetite=1;
	$this->geographical_exposure=1;
	$this->last_audit=1;
	$this->add_info=1;
	$this->initial_min_investment=1;
	$this->min_investment=1;
	$this->min_units_investment=1;
	$this->lockup_period_sub=1;
	$this->trade_frequency_sub=1;
	$this->notice_period_sub=1;
	$this->trade_date_sub=1;
	$this->cutoff_time_sub=1;
	$this->settlement_cycle_sub=1;
	$this->add_info_1=1;
	$this->min_frontend_fee=1;
	$this->max_frontend_fee=1;
	$this->add_info_2=1;
	$this->min_amount_red=1;
	$this->min_units_red=1;
	$this->trade_frequency_red=1;
	$this->notice_period_red=1;
	$this->trade_date_red=1;
	$this->cutoff_time_red=1;
	$this->settlement_cycle_red=1;
	$this->add_info_3=1;
	$this->min_backend_fee=1;
	$this->max_backend_fee=1;
	$this->early_withdrawal_fee=1;
	$this->add_info_4=1;
	$this->management_fee=1;
	$this->performance_fee=1;
	$this->add_info_5=1;
	$this->accepted_investor_types=1;
	$this->high_water_mark=1;
	$this->hurdle_rate=1;
	$this->custodian_name=1;
	$this->postal_address_c1=1;
	$this->postal_address_c2=1;
	$this->postal_address_c3=1;
	$this->postal_address_c4=1;
	$this->key_contact_c=1;
	$this->email_c=1;
	$this->phone_c=1;
	$this->fax_c=1;
	$this->transfer_agent_name=1;
	$this->postal_address_ta1=1;
	$this->postal_address_ta2=1;
	$this->postal_address_ta3=1;
	$this->postal_address_ta4=1;
	$this->key_contact_ta=1;
	$this->email_ta=1;
	$this->phone_ta=1;
	$this->fax_ta=1;
	$this->fund_advisor_name=1;
	$this->postal_address_adv1=1;
	$this->postal_address_adv2=1;
	$this->postal_address_adv3=1;
	$this->postal_address_adv4=1;
	$this->key_contact_adv=1;
	$this->email_adv=1;
	$this->phone_adv=1;
	$this->fax_adv=1;
	$this->fund_auditor_name=1;
	$this->postal_address_aud1=1;
	$this->postal_address_aud2=1;
	$this->postal_address_aud3=1;
	$this->postal_address_aud4=1;
	$this->key_contact_aud=1;
	$this->email_aud=1;
	$this->phone_aud=1;
	$this->fax_aud=1;
	}
	function GetFund_DatabaseUsingArray()
	{
		$arr=array();
		$query="select * from fund_database";
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
		}
	function SearchFund_Database()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->isin!="")
		{
			$whereQuery.=$and."isin =".$this->isin;
			$and=" and ";
		}
		if($this->currency!="")
		{
			$whereQuery.=$and.'currency ="'.$this->currency.'"';
			$and=" and ";
		}
		if($this->currency!="")
		{
			$whereQuery.=$and."currency ='".$this->currency."'";
			$and=" and ";
		}
		if($this->fund_name!="")
		{
			$whereQuery.=$and."fund_name ='".$this->fund_name."'";
			$and=" and ";
		}
		if($this->fund_company!="")
		{
			$whereQuery.=$and."fund_company ='".$this->fund_company."'";
			$and=" and ";
		}
		if($this->fund_category!="")
		{
			$whereQuery.=$and."fund_category =".$this->fund_category;
			$and=" and ";
		}
		if($this->fund_status!="")
		{
			$whereQuery.=$and."fund_status =".$this->fund_status;
			$and=" and ";
		}
		if($this->domicile!="")
		{
			$whereQuery.=$and."domicile =".$this->domicile;
			$and=" and ";
		}
		if($this->net_asset_value!="")
		{
			$whereQuery.=$and."net_asset_value =".$this->net_asset_value;
			$and=" and ";
		}
		if($this->nav_date!="")
		{
			$whereQuery.=$and."nav_date =".$this->nav_date;
			$and=" and ";
		}
		if($this->performance_start!="")
		{
			$whereQuery.=$and."performance_start =".$this->performance_start;
			$and=" and ";
		}
		if($this->performance_ytd!="")
		{
			$whereQuery.=$and."performance_ytd =".$this->performance_ytd;
			$and=" and ";
		}
		if($this->fund_strategy!="")
		{
			$whereQuery.=$and."fund_strategy =".$this->fund_strategy;
			$and=" and ";
		}
		if($this->primary_strategy!="")
		{
			$whereQuery.=$and."primary_strategy =".$this->primary_strategy;
			$and=" and ";
		}
		if($this->secondary_strategy!="")
		{
			$whereQuery.=$and."secondary_strategy =".$this->secondary_strategy;
			$and=" and ";
		}
		if($this->investment_objectives!="")
		{
			$whereQuery.=$and."investment_objectives =".$this->investment_objectives;
			$and=" and ";
		}
		if($this->unique_feature!="")
		{
			$whereQuery.=$and."unique_feature =".$this->unique_feature;
			$and=" and ";
		}
		if($this->inception_date!="")
		{
			$whereQuery.=$and."inception_date =".$this->inception_date;
			$and=" and ";
		}
		if($this->current_assets!="")
		{
			$whereQuery.=$and."current_assets =".$this->current_assets;
			$and=" and ";
		}
		if($this->benchmark!="")
		{
			$whereQuery.=$and."benchmark =".$this->benchmark;
			$and=" and ";
		}
		if($this->risk_appetite!="")
		{
			$whereQuery.=$and."risk_appetite =".$this->risk_appetite;
			$and=" and ";
		}
		if($this->geographical_exposure!="")
		{
			$whereQuery.=$and."geographical_exposure =".$this->geographical_exposure;
			$and=" and ";
		}
		if($this->last_audit!="")
		{
			$whereQuery.=$and."last_audit =".$this->last_audit;
			$and=" and ";
		}
		if($this->add_info!="")
		{
			$whereQuery.=$and."add_info =".$this->add_info;
			$and=" and ";
		}
		if($this->initial_min_investment!="")
		{
			$whereQuery.=$and."initial_min_investment =".$this->initial_min_investment;
			$and=" and ";
		}
		if($this->min_investment!="")
		{
			$whereQuery.=$and."min_investment =".$this->min_investment;
			$and=" and ";
		}
		if($this->min_units_investment!="")
		{
			$whereQuery.=$and."min_units_investment =".$this->min_units_investment;
			$and=" and ";
		}
		if($this->lockup_period_sub!="")
		{
			$whereQuery.=$and."lockup_period_sub =".$this->lockup_period_sub;
			$and=" and ";
		}
		if($this->trade_frequency_sub!="")
		{
			$whereQuery.=$and."trade_frequency_sub =".$this->trade_frequency_sub;
			$and=" and ";
		}
		if($this->notice_period_sub!="")
		{
			$whereQuery.=$and."notice_period_sub =".$this->notice_period_sub;
			$and=" and ";
		}
		if($this->trade_date_sub!="")
		{
			$whereQuery.=$and."trade_date_sub =".$this->trade_date_sub;
			$and=" and ";
		}
		if($this->cutoff_time_sub!="")
		{
			$whereQuery.=$and."cutoff_time_sub =".$this->cutoff_time_sub;
			$and=" and ";
		}
		if($this->settlement_cycle_sub!="")
		{
			$whereQuery.=$and."settlement_cycle_sub =".$this->settlement_cycle_sub;
			$and=" and ";
		}
		if($this->add_info_1!="")
		{
			$whereQuery.=$and."add_info_1 =".$this->add_info_1;
			$and=" and ";
		}
		if($this->min_frontend_fee!="")
		{
			$whereQuery.=$and."min_frontend_fee =".$this->min_frontend_fee;
			$and=" and ";
		}
		if($this->max_frontend_fee!="")
		{
			$whereQuery.=$and."max_frontend_fee =".$this->max_frontend_fee;
			$and=" and ";
		}
		if($this->add_info_2!="")
		{
			$whereQuery.=$and."add_info_2 =".$this->add_info_2;
			$and=" and ";
		}
		if($this->min_amount_red!="")
		{
			$whereQuery.=$and."min_amount_red =".$this->min_amount_red;
			$and=" and ";
		}
		if($this->min_units_red!="")
		{
			$whereQuery.=$and."min_units_red =".$this->min_units_red;
			$and=" and ";
		}
		if($this->trade_frequency_red!="")
		{
			$whereQuery.=$and."trade_frequency_red =".$this->trade_frequency_red;
			$and=" and ";
		}
		if($this->notice_period_red!="")
		{
			$whereQuery.=$and."notice_period_red =".$this->notice_period_red;
			$and=" and ";
		}
		if($this->trade_date_red!="")
		{
			$whereQuery.=$and."trade_date_red =".$this->trade_date_red;
			$and=" and ";
		}
		if($this->cutoff_time_red!="")
		{
			$whereQuery.=$and."cutoff_time_red =".$this->cutoff_time_red;
			$and=" and ";
		}
		if($this->settlement_cycle_red!="")
		{
			$whereQuery.=$and."settlement_cycle_red =".$this->settlement_cycle_red;
			$and=" and ";
		}
		if($this->add_info_3!="")
		{
			$whereQuery.=$and."add_info_3 =".$this->add_info_3;
			$and=" and ";
		}
		if($this->min_backend_fee!="")
		{
			$whereQuery.=$and."min_backend_fee =".$this->min_backend_fee;
			$and=" and ";
		}
		if($this->max_backend_fee!="")
		{
			$whereQuery.=$and."max_backend_fee =".$this->max_backend_fee;
			$and=" and ";
		}
		if($this->early_withdrawal_fee!="")
		{
			$whereQuery.=$and."early_withdrawal_fee =".$this->early_withdrawal_fee;
			$and=" and ";
		}
		if($this->add_info_4!="")
		{
			$whereQuery.=$and."add_info_4 =".$this->add_info_4;
			$and=" and ";
		}
		if($this->management_fee!="")
		{
			$whereQuery.=$and."management_fee =".$this->management_fee;
			$and=" and ";
		}
		if($this->performance_fee!="")
		{
			$whereQuery.=$and."performance_fee =".$this->performance_fee;
			$and=" and ";
		}
		if($this->add_info_5!="")
		{
			$whereQuery.=$and."add_info_5 =".$this->add_info_5;
			$and=" and ";
		}
		if($this->accepted_investor_types!="")
		{
			$whereQuery.=$and."accepted_investor_types =".$this->accepted_investor_types;
			$and=" and ";
		}
		if($this->high_water_mark!="")
		{
			$whereQuery.=$and."high_water_mark =".$this->high_water_mark;
			$and=" and ";
		}
		if($this->hurdle_rate!="")
		{
			$whereQuery.=$and."hurdle_rate =".$this->hurdle_rate;
			$and=" and ";
		}
		if($this->custodian_name!="")
		{
			$whereQuery.=$and."custodian_name =".$this->custodian_name;
			$and=" and ";
		}
		if($this->postal_address_c1!="")
		{
			$whereQuery.=$and."postal_address_c1 =".$this->postal_address_c1;
			$and=" and ";
		}
		if($this->postal_address_c2!="")
		{
			$whereQuery.=$and."postal_address_c2 =".$this->postal_address_c2;
			$and=" and ";
		}
		if($this->postal_address_c3!="")
		{
			$whereQuery.=$and."postal_address_c3 =".$this->postal_address_c3;
			$and=" and ";
		}
		if($this->postal_address_c4!="")
		{
			$whereQuery.=$and."postal_address_c4 =".$this->postal_address_c4;
			$and=" and ";
		}
		if($this->key_contact_c!="")
		{
			$whereQuery.=$and."key_contact_c =".$this->key_contact_c;
			$and=" and ";
		}
		if($this->email_c!="")
		{
			$whereQuery.=$and."email_c =".$this->email_c;
			$and=" and ";
		}
		if($this->phone_c!="")
		{
			$whereQuery.=$and."phone_c =".$this->phone_c;
			$and=" and ";
		}
		if($this->fax_c!="")
		{
			$whereQuery.=$and."fax_c =".$this->fax_c;
			$and=" and ";
		}
		if($this->transfer_agent_name!="")
		{
			$whereQuery.=$and."transfer_agent_name =".$this->transfer_agent_name;
			$and=" and ";
		}
		if($this->postal_address_ta1!="")
		{
			$whereQuery.=$and."postal_address_ta1 =".$this->postal_address_ta1;
			$and=" and ";
		}
		if($this->postal_address_ta2!="")
		{
			$whereQuery.=$and."postal_address_ta2 =".$this->postal_address_ta2;
			$and=" and ";
		}
		if($this->postal_address_ta3!="")
		{
			$whereQuery.=$and."postal_address_ta3 =".$this->postal_address_ta3;
			$and=" and ";
		}
		if($this->postal_address_ta4!="")
		{
			$whereQuery.=$and."postal_address_ta4 =".$this->postal_address_ta4;
			$and=" and ";
		}
		if($this->email_ta!="")
		{
			$whereQuery.=$and."email_ta =".$this->email_ta;
			$and=" and ";
		}
		if($this->phone_ta!="")
		{
			$whereQuery.=$and."phone_ta =".$this->phone_ta;
			$and=" and ";
		}
		if($this->fax_ta!="")
		{
			$whereQuery.=$and."fax_ta =".$this->fax_ta;
			$and=" and ";
		}
		if($this->fund_advisor_name!="")
		{
			$whereQuery.=$and."fund_advisor_name =".$this->fund_advisor_name;
			$and=" and ";
		}
		if($this->postal_address_adv1!="")
		{
			$whereQuery.=$and."postal_address_adv1 =".$this->postal_address_adv1;
			$and=" and ";
		}
		if($this->postal_address_adv2!="")
		{
			$whereQuery.=$and."postal_address_adv2 =".$this->postal_address_adv2;
			$and=" and ";
		}
		if($this->postal_address_adv3!="")
		{
			$whereQuery.=$and."postal_address_adv3 =".$this->postal_address_adv3;
			$and=" and ";
		}
		if($this->postal_address_adv4!="")
		{
			$whereQuery.=$and."postal_address_adv4 =".$this->postal_address_adv4;
			$and=" and ";
		}
		if($this->key_contact_adv!="")
		{
			$whereQuery.=$and."key_contact_adv =".$this->key_contact_adv;
			$and=" and ";
		}
		if($this->email_adv!="")
		{
			$whereQuery.=$and."email_adv =".$this->email_adv;
			$and=" and ";
		}
		if($this->phone_adv!="")
		{
			$whereQuery.=$and."phone_adv =".$this->phone_adv;
			$and=" and ";
		}
		if($this->fax_adv!="")
		{
			$whereQuery.=$and."fax_adv =".$this->fax_adv;
			$and=" and ";
		}
		if($this->fund_auditor_name!="")
		{
			$whereQuery.=$and."fund_auditor_name =".$this->fund_auditor_name;
			$and=" and ";
		}
		if($this->postal_address_aud1!="")
		{
			$whereQuery.=$and."postal_address_aud1 =".$this->postal_address_aud1;
			$and=" and ";
		}
		if($this->postal_address_aud2!="")
		{
			$whereQuery.=$and."postal_address_aud2 =".$this->postal_address_aud2;
			$and=" and ";
		}
		if($this->postal_address_aud3!="")
		{
			$whereQuery.=$and."postal_address_aud3 =".$this->postal_address_aud3;
			$and=" and ";
		}
		if($this->postal_address_aud4!="")
		{
			$whereQuery.=$and."postal_address_aud4 =".$this->postal_address_aud4;
			$and=" and ";
		}
		if($this->key_contact_aud!="")
		{
			$whereQuery.=$and."key_contact_aud =".$this->key_contact_aud;
			$and=" and ";
		}
		if($this->email_aud!="")
		{
			$whereQuery.=$and."email_aud =".$this->email_aud;
			$and=" and ";
		}
		if($this->phone_aud!="")
		{
			$whereQuery.=$and."phone_aud =".$this->phone_aud;
			$and=" and ";
		}
		if($this->fax_aud!="")
		{
			$whereQuery.=$and."fax_aud =".$this->fax_aud;
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		echo $SearchQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	function InsertFund_Database()
	{
		
		$InsArr=$this->fundArr;
		$InsArr['isin']="'".$this->isin."'";
		$InsArr['currency']="'".$this->currency."'";
		$InsArr['fund_name']="'".$this->fund_name."'";
		$InsArr['fund_company']="'".$this->fund_company."'";
		$InsArr['fund_category']="'".$this->fund_category."'";
		$InsArr['fund_status']="'".$this->fund_status."'";
		$InsArr['domicile']="'".$this->domicile."'";
		$InsArr['net_asset_value']="'".$this->net_asset_value."'";
		$InsArr['nav_date']="'".$this->nav_date."'";
		$InsArr['performance_start']="'".$this->performance_start."'";
		$InsArr['performance_ytd']="'".$this->performance_ytd."'";
		$InsArr['fund_strategy']="'".$this->fund_strategy."'";
		$InsArr['primary_strategy']="'".$this->primary_strategy."'";
		$InsArr['secondary_strategy']="'".$this->secondary_strategy."'";
		$InsArr['investment_objectives']="'".$this->investment_objectives."'";
		$InsArr['unique_feature']="'".$this->unique_feature."'";
		$InsArr['inception_date']="'".$this->inception_date."'";
		$InsArr['current_assets']="'".$this->current_assets."'";
		$InsArr['benchmark']="'".$this->benchmark."'";
		$InsArr['risk_appetite']="'".$this->risk_appetite."'";
		$InsArr['geographical_exposure']="'".$this->geographical_exposure."'";
		$InsArr['last_audit']="'".$this->last_audit."'";
		$InsArr['add_info']="'".$this->add_info."'";
		$InsArr['initial_min_investment']="'".$this->initial_min_investment."'";
		$InsArr['min_investment']="'".$this->min_investment."'";
		$InsArr['min_units_investment']="'".$this->min_units_investment."'";
		$InsArr['lockup_period_sub']="'".$this->lockup_period_sub."'";
		$InsArr['trade_frequency_sub']="'".$this->trade_frequency_sub."'";
		$InsArr['notice_period_sub']="'".$this->notice_period_sub."'";
		$InsArr['trade_date_sub']="'".$this->trade_date_sub."'";
		$InsArr['cutoff_time_sub']="'".$this->cutoff_time_sub."'";
		$InsArr['settlement_cycle_sub']="'".$this->settlement_cycle_sub."'";
		$InsArr['add_info_1']="'".$this->add_info_1."'";
		$InsArr['min_frontend_fee']="'".$this->min_frontend_fee."'";
		$InsArr['max_frontend_fee']="'".$this->max_frontend_fee."'";
		$InsArr['add_info_2']="'".$this->add_info_2."'";
		$InsArr['min_amount_red']="'".$this->min_amount_red."'";
		$InsArr['min_units_red']="'".$this->min_units_red."'";
		$InsArr['trade_frequency_red']="'".$this->trade_frequency_red."'";
		$InsArr['notice_period_red']="'".$this->notice_period_red."'";
		$InsArr['trade_date_red']="'".$this->trade_date_red."'";
		$InsArr['cutoff_time_red']="'".$this->cutoff_time_red."'";
		$InsArr['settlement_cycle_red']="'".$this->settlement_cycle_red."'";
		$InsArr['add_info_3']="'".$this->add_info_3."'";
		$InsArr['min_backend_fee']="'".$this->min_backend_fee."'";
		$InsArr['max_backend_fee']="'".$this->max_backend_fee."'";
		$InsArr['early_withdrawal_fee']="'".$this->early_withdrawal_fee."'";
		$InsArr['add_info_4']="'".$this->add_info_4."'";
		$InsArr['management_fee']="'".$this->management_fee."'";
		$InsArr['performance_fee']="'".$this->performance_fee."'";
		$InsArr['add_info_5']="'".$this->add_info_5."'";
		$InsArr['accepted_investor_types']="'".$this->accepted_investor_types."'";
		$InsArr['high_water_mark']="'".$this->high_water_mark."'";
		$InsArr['hurdle_rate']="'".$this->hurdle_rate."'";
		$InsArr['custodian_name']="'".$this->custodian_name."'";
		$InsArr['postal_address_c1']="'".$this->postal_address_c1."'";
		$InsArr['postal_address_c2']="'".$this->postal_address_c2."'";
		$InsArr['postal_address_c3']="'".$this->postal_address_c3."'";
		$InsArr['postal_address_c4']="'".$this->postal_address_c4."'";
		$InsArr['key_contact_c']="'".$this->key_contact_c."'";
		$InsArr['email_c']="'".$this->email_c."'";
		$InsArr['phone_c']="'".$this->phone_c."'";
		$InsArr['fax_c']="'".$this->fax_c."'";
		$InsArr['transfer_agent_name']="'".$this->transfer_agent_name."'";
		$InsArr['postal_address_ta1']="'".$this->postal_address_ta1."'";
		$InsArr['postal_address_ta2']="'".$this->postal_address_ta2."'";
		$InsArr['postal_address_ta3']="'".$this->postal_address_ta3."'";
		$InsArr['postal_address_ta4']="'".$this->postal_address_ta4."'";
		$InsArr['key_contact_ta']="'".$this->key_contact_ta."'";
		$InsArr['email_ta']="'".$this->email_ta."'";
		$InsArr['phone_ta']="'".$this->phone_ta."'";
		$InsArr['fax_ta']="'".$this->fax_ta."'";
		$InsArr['fund_advisor_name']="'".$this->fund_advisor_name."'";
		$InsArr['postal_address_adv1']="'".$this->postal_address_adv1."'";
		$InsArr['postal_address_adv2']="'".$this->postal_address_adv2."'";
		$InsArr['postal_address_adv3']="'".$this->postal_address_adv3."'";
		$InsArr['postal_address_adv4']="'".$this->postal_address_adv4."'";
		$InsArr['key_contact_adv']="'".$this->key_contact_adv."'";
		$InsArr['email_adv']="'".$this->email_adv."'";
		$InsArr['phone_adv']="'".$this->phone_adv."'";
		$InsArr['fax_adv']="'".$this->fax_adv."'";
		$InsArr['fund_auditor_name']="'".$this->fund_auditor_name."'";
		$InsArr['postal_address_aud1']="'".$this->postal_address_aud1."'";
		$InsArr['postal_address_aud2']="'".$this->postal_address_aud2."'";
		$InsArr['postal_address_aud3']="'".$this->postal_address_aud3."'";
		$InsArr['postal_address_aud4']="'".$this->postal_address_aud4."'";
		$InsArr['key_contact_aud']="'".$this->key_contact_aud."'";
		$InsArr['email_aud']="'".$this->email_aud."'";
		$InsArr['phone_aud']="'".$this->phone_aud."'";
		$InsArr['fax_aud']="'".$this->fax_aud."'";
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		//echo $this->InsertQuery($InsArr);
		if(mysql_affected_rows()>0)$msg="Added Successfully Fund.";
		else $msg="Failed table Fund";
		return $msg;
	}
	function UpdateFund()
	{
		$InsArr=$this->fundArr;
		$InsArr['id']=$this->id;
		$InsArr['ISIN']=$this->ISIN;
		$InsArr['currency']=$this->currency;
		$InsArr['fund_name']=$this->fund_name;
		$InsArr['fund_company']=$this->fund_company;
		$InsArr['fund_category']=$this->fund_category;
		$InsArr['fund_status']=$this->fund_status;
		$InsArr['domicile']=$this->domicile;
		$InsArr['nav_value']=$this->nav_value;
		$InsArr['nav_date']=$this->nav_date;
		$InsArr['fund_strategy']=$this->fund_strategy;
		$InsArr['primary_strategy']=$this->primary_strategy;
		$InsArr['secondary_strategy']=$this->secondary_strategy;
		$InsArr['investment_objectives_a']=$this->investment_objectives_a;
		$InsArr['investment_objectives_b']=$this->investment_objectives_b;
		$InsArr['investment_objectives_c']=$this->investment_objectives_c;
		$InsArr['unique_feature_a']=$this->unique_feature_a;
		$InsArr['unique_feature_b']=$this->unique_feature_b;
		$InsArr['inception_date']=$this->inception_date;
		$InsArr['current_assets']=$this->current_assets;
		$InsArr['benchmark']=$this->benchmark;
		$InsArr['risk_appetite']=$this->risk_appetite;
		$InsArr['geographical_exposure']=$this->geographical_exposure;
		$InsArr['last_audit']=$this->last_audit;
		$InsArr['add_info_a']=$this->add_info_a;
		$InsArr['add_info_b']=$this->add_info_b;
		$InsArr['transfer_agent_id']=$this->transfer_agent_id;
		$InsArr['custodian_id']=$this->custodian_id;
		$InsArr['fund_advisor_id']=$this->fund_advisor_id;
		$InsArr['fund_auditor_id']=$this->fund_auditor_id;
		$InsArr['created_at']=$this->created_at;
		$InsArr['unique_id']=$this->unique_id;
		
		$updateArr=$InsArr;
	unset($updateArr['id']);
		unset($updateArr['ISIN']);
		unset($updateArr['currency']);
		unset($updateArr['fund_name']);
		unset($updateArr['fund_company']);
		unset($updateArr['fund_category']);
		unset($updateArr['fund_status']);
		unset($updateArr['domicile']);
		unset($updateArr['nav_value']);
		unset($updateArr['nav_date']);
		unset($updateArr['fund_strategy']);
		unset($updateArr['primary_strategy']);
		unset($updateArr['secondary_strategy']);
		unset($updateArr['investment_objectives_a']);
		unset($updateArr['investment_objectives_b']);
		unset($updateArr['investment_objectives_c']);
		unset($updateArr['unique_feature_a']);
		unset($updateArr['unique_feature_b']);
		unset($updateArr['inception_date']);
		unset($updateArr['current_assets']);
		unset($updateArr['benchmark']);
		unset($updateArr['risk_appetite']);
		unset($updateArr['geographical_exposure']);
		unset($updateArr['last_audit']);
		unset($updateArr['add_info_a']);
		unset($updateArr['add_info_b']);
		unset($updateArr['transfer_agent_id']);
		unset($updateArr['custodian_id']);
		unset($updateArr['fund_advisor_id']);
		unset($updateArr['fund_auditor_id']);
		unset($updateArr['created_at']);
		unset($updateArr['unique_id']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
		}
	function DeleteFund()
	{
		$InsArr=$this->fundArr;
		$InsArr['id']=$this->id;
		$InsArr['ISIN']=$this->ISIN;
		$InsArr['currency']=$this->currency;
		$InsArr['fund_name']=$this->fund_name;
		$InsArr['fund_company']=$this->fund_company;
		$InsArr['fund_category']=$this->fund_category;
		$InsArr['fund_status']=$this->fund_status;
		$InsArr['domicile']=$this->domicile;
		$InsArr['nav_value']=$this->nav_value;
		$InsArr['nav_date']=$this->nav_date;
		$InsArr['fund_strategy']=$this->fund_strategy;
		$InsArr['primary_strategy']=$this->primary_strategy;
		$InsArr['secondary_strategy']=$this->secondary_strategy;
		$InsArr['investment_objectives_a']=$this->investment_objectives_a;
		$InsArr['investment_objectives_b']=$this->investment_objectives_b;
		$InsArr['investment_objectives_c']=$this->investment_objectives_c;
		$InsArr['unique_feature_a']=$this->unique_feature_a;
		$InsArr['unique_feature_b']=$this->unique_feature_b;
		$InsArr['inception_date']=$this->inception_date;
		$InsArr['current_assets']=$this->current_assets;
		$InsArr['benchmark']=$this->benchmark;
		$InsArr['risk_appetite']=$this->risk_appetite;
		$InsArr['geographical_exposure']=$this->geographical_exposure;
		$InsArr['last_audit']=$this->last_audit;
		$InsArr['add_info_a']=$this->add_info_a;
		$InsArr['add_info_b']=$this->add_info_b;
		$InsArr['transfer_agent_id']=$this->transfer_agent_id;
		$InsArr['custodian_id']=$this->custodian_id;
		$InsArr['fund_advisor_id']=$this->fund_advisor_id;
		$InsArr['fund_auditor_id']=$this->fund_auditor_id;
		$InsArr['created_at']=$this->created_at;
		$InsArr['unique_id']=$this->unique_id;
		
		unset($InsArr['id']);
		unset($InsArr['ISIN']);
		unset($InsArr['currency']);
		unset($InsArr['fund_name']);
		unset($InsArr['fund_company']);
		unset($InsArr['fund_category']);
		unset($InsArr['fund_status']);
		unset($InsArr['domicile']);
		unset($InsArr['nav_value']);
		unset($InsArr['nav_date']);
		unset($InsArr['fund_strategy']);
		unset($InsArr['primary_strategy']);
		unset($InsArr['secondary_strategy']);
		unset($InsArr['investment_objectives_a']);
		unset($InsArr['investment_objectives_b']);
		unset($InsArr['investment_objectives_c']);
		unset($InsArr['unique_feature_a']);
		unset($InsArr['unique_feature_b']);
		unset($InsArr['inception_date']);
		unset($InsArr['current_assets']);
		unset($InsArr['benchmark']);
		unset($InsArr['risk_appetite']);
		unset($InsArr['geographical_exposure']);
		unset($InsArr['last_audit']);
		unset($InsArr['add_info_a']);
		unset($InsArr['add_info_b']);
		unset($InsArr['transfer_agent_id']);
		unset($InsArr['custodian_id']);
		unset($InsArr['fund_advisor_id']);
		unset($InsArr['fund_auditor_id']);
		unset($InsArr['created_at']);
		unset($InsArr['unique_id']);
		$result=$this->ExcuteQueryOnly($this->DeleteQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Deleted Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function GetTable()
	{
		return $this->ExecuteQueryReturnArray($this->db);
	}

}
?>