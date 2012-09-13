<?php
Class InvestmentDetailsClass extends ChildCoreClass
{
	public $investment_detailsArr;
	public $id;
	public $initial_minimum_investment;
	public $minimum_investment;
	public $minimum_units_investment;
	public $lockup_period;
	public $notice_period_i;
	public $trading_frequency_i;
	public $trading_date_i;
	public $cut_off_time;
	public $settlement_cycle_i;
	public $administration_fee;
	public $accepted_investor_types;
	public $performance_since_start;
	public $performance_ytd;
	public $high_water_mark;
	public $hurdle_rate;
	public $add_info_a;
	public $add_info_b;
	public $funds_id;
	
	function __construct($db)
	{
		$tabName="investment_details"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->investment_detailsArr=$arr;
	}
	
	function GetInvestment_detailsUsingArray()
	{
		$arr=array();
		$query="select * from investment_details";
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
	}
	
	function SearchInvestment_details()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->initial_minimum_investment!="")
		{
			$whereQuery.=$and."initial_minimum_investment =".$this->initial_minimum_investment;
			$and=" and ";
		}
		if($this->minimum_investment!="")
		{
			$whereQuery.=$and."minimum_investment =".$this->minimum_investment;
			$and=" and ";
		}
		if($this->minimum_units_investment!="")
		{
			$whereQuery.=$and."minimum_units_investment =".$this->minimum_units_investment;
			$and=" and ";
		}
		if($this->lockup_period!="")
		{
			$whereQuery.=$and."lockup_period =".$this->lockup_period;
			$and=" and ";
		}
		if($this->notice_period_i!="")
		{
			$whereQuery.=$and."notice_period_i =".$this->notice_period_i;
			$and=" and ";
		}
		if($this->trading_frequency_i!="")
		{
			$whereQuery.=$and."trading_frequency_i =".$this->trading_frequency_i;
			$and=" and ";
		}
		if($this->trading_date_i!="")
		{
			$whereQuery.=$and."trading_date_i =".$this->trading_date_i;
			$and=" and ";
		}
		if($this->cut_off_time!="")
		{
			$whereQuery.=$and."cut_off_time =".$this->cut_off_time;
			$and=" and ";
		}
		if($this->settlement_cycle_i!="")
		{
			$whereQuery.=$and."settlement_cycle_i =".$this->settlement_cycle_i;
			$and=" and ";
		}
		if($this->administration_fee!="")
		{
			$whereQuery.=$and."administration_fee =".$this->administration_fee;
			$and=" and ";
		}
		if($this->accepted_investor_types!="")
		{
			$whereQuery.=$and."accepted_investor_types =".$this->accepted_investor_types;
			$and=" and ";
		}
		if($this->performance_since_start!="")
		{
			$whereQuery.=$and."performance_since_start =".$this->performance_since_start;
			$and=" and ";
		}
		if($this->performance_ytd!="")
		{
			$whereQuery.=$and."performance_ytd =".$this->performance_ytd;
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
		if($this->add_info_a!="")
		{
			$whereQuery.=$and."add_info_a =".$this->add_info_a;
			$and=" and ";
		}
		if($this->add_info_b!="")
		{
			$whereQuery.=$and."add_info_b =".$this->add_info_b;
			$and=" and ";
		}
		if($this->funds_id!="")
		{
			$whereQuery.=$and."funds_id =".$this->funds_id;
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		//echo $SearchQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	
	function InsertInvestment_details()
	{
		$InsArr=$this->investment_detailsArr;
		//$InsArr['id']=$this->id; Hoang Add value for ID=NULL help insert data sucessfully;
		$InsArr['id']="NULL";
		$InsArr['initial_minimum_investment']=$this->initial_minimum_investment;
		$InsArr['minimum_investment']=$this->minimum_investment;
		$InsArr['minimum_units_investment']=$this->minimum_units_investment;
		$InsArr['lockup_period']=$this->lockup_period;
		$InsArr['notice_period_i']=$this->notice_period_i;
		$InsArr['trading_frequency_i']=$this->trading_frequency_i;
		$InsArr['trading_date_i']=$this->trading_date_i;
		$InsArr['cut_off_time']=$this->cut_off_time;
		$InsArr['settlement_cycle_i']=$this->settlement_cycle_i;
		$InsArr['administration_fee']=$this->administration_fee;
		$InsArr['accepted_investor_types']=$this->accepted_investor_types;
		$InsArr['performance_since_start']=$this->performance_since_start;
		$InsArr['performance_ytd']=$this->performance_ytd;
		$InsArr['high_water_mark']=$this->high_water_mark;
		$InsArr['hurdle_rate']=$this->hurdle_rate;
		$InsArr['add_info_a']=$this->add_info_a;
		$InsArr['add_info_b']=$this->add_info_b;
		$InsArr['funds_id']=$this->funds_id;
		//echo $this->InsertQuery($InsArr);
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully InsertInvestmentDetails.";
		else $msg="Failed table InvestmentDetails.";
		return $msg;
	}
	
	function UpdateInvestment_details()
	{
		$InsArr=$this->investment_detailsArr;
		$InsArr['id']=$this->id;
		$InsArr['initial_minimum_investment']=$this->initial_minimum_investment;
		$InsArr['minimum_investment']=$this->minimum_investment;
		$InsArr['minimum_units_investment']=$this->minimum_units_investment;
		$InsArr['lockup_period']=$this->lockup_period;
		$InsArr['notice_period_i']=$this->notice_period_i;
		$InsArr['trading_frequency_i']=$this->trading_frequency_i;
		$InsArr['trading_date_i']=$this->trading_date_i;
		$InsArr['cut_off_time']=$this->cut_off_time;
		$InsArr['settlement_cycle_i']=$this->settlement_cycle_i;
		$InsArr['administration_fee']=$this->administration_fee;
		$InsArr['accepted_investor_types']=$this->accepted_investor_types;
		$InsArr['performance_since_start']=$this->performance_since_start;
		$InsArr['performance_ytd']=$this->performance_ytd;
		$InsArr['high_water_mark']=$this->high_water_mark;
		$InsArr['hurdle_rate']=$this->hurdle_rate;
		$InsArr['add_info_a']=$this->add_info_a;
		$InsArr['add_info_b']=$this->add_info_b;
		$InsArr['funds_id']=$this->funds_id;
		
		$updateArr=$InsArr;
		unset($updateArr['initial_minimum_investment']);
		unset($updateArr['minimum_investment']);
		unset($updateArr['minimum_units_investment']);
		unset($updateArr['lockup_period']);
		unset($updateArr['notice_period_i']);
		unset($updateArr['trading_frequency_i']);
		unset($updateArr['trading_date_i']);
		unset($updateArr['cut_off_time']);
		unset($updateArr['settlement_cycle_i']);
		unset($updateArr['administration_fee']);
		unset($updateArr['accepted_investor_types']);
		unset($updateArr['performance_since_start']);
		unset($updateArr['performance_ytd']);
		unset($updateArr['high_water_mark']);
		unset($updateArr['hurdle_rate']);
		unset($updateArr['add_info_a']);
		unset($updateArr['add_info_b']);
		unset($updateArr['funds_id']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function DeleteInvestment_details()
	{
		$InsArr=$this->investment_detailsArr;
		$InsArr['id']=$this->id;
		$InsArr['initial_minimum_investment']=$this->initial_minimum_investment;
		$InsArr['minimum_investment']=$this->minimum_investment;
		$InsArr['minimum_units_investment']=$this->minimum_units_investment;
		$InsArr['lockup_period']=$this->lockup_period;
		$InsArr['notice_period_i']=$this->notice_period_i;
		$InsArr['trading_frequency_i']=$this->trading_frequency_i;
		$InsArr['trading_date_i']=$this->trading_date_i;
		$InsArr['cut_off_time']=$this->cut_off_time;
		$InsArr['settlement_cycle_i']=$this->settlement_cycle_i;
		$InsArr['administration_fee']=$this->administration_fee;
		$InsArr['accepted_investor_types']=$this->accepted_investor_types;
		$InsArr['performance_since_start']=$this->performance_since_start;
		$InsArr['performance_ytd']=$this->performance_ytd;
		$InsArr['high_water_mark']=$this->high_water_mark;
		$InsArr['hurdle_rate']=$this->hurdle_rate;
		$InsArr['add_info_a']=$this->add_info_a;
		$InsArr['add_info_b']=$this->add_info_b;
		$InsArr['funds_id']=$this->funds_id;
		
		unset($InsArr['id']);
		unset($InsArr['initial_minimum_investment']);
		unset($InsArr['minimum_investment']);
		unset($InsArr['minimum_units_investment']);
		unset($InsArr['lockup_period']);
		unset($InsArr['notice_period_i']);
		unset($InsArr['trading_frequency_i']);
		unset($InsArr['trading_date_i']);
		unset($InsArr['cut_off_time']);
		unset($InsArr['settlement_cycle_i']);
		unset($InsArr['administration_fee']);
		unset($InsArr['accepted_investor_types']);
		unset($InsArr['performance_since_start']);
		unset($InsArr['performance_ytd']);
		unset($InsArr['high_water_mark']);
		unset($InsArr['hurdle_rate']);
		unset($InsArr['add_info_a']);
		unset($InsArr['add_info_b']);
		unset($InsArr['funds_id']);
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