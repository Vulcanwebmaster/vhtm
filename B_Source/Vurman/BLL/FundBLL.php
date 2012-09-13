<?php
Class FundClass extends ChildCoreClass
{
	public $fundArr;
	public $id;
	public $ISIN;
	public $currency;
	public $fund_name;
	public $fund_company;
	public $fund_category;
	public $fund_status;
	public $domicile;
	public $nav_value;
	public $nav_date;
	public $fund_strategy;
	public $primary_strategy;
	public $secondary_strategy;
	public $investment_objectives_a;
	public $investment_objectives_b;
	public $investment_objectives_c;
	public $unique_feature_a;
	public $unique_feature_b;
	public $inception_date;
	public $current_assets;
	public $benchmark;
	public $risk_appetite;
	public $geographical_exposure;
	public $last_audit;
	public $add_info_a;
	public $add_info_b;
	public $transfer_agent_id;
	public $custodian_id;
	public $fund_advisor_id;
	public $fund_auditor_id;
	public $created_at;
	public $unique_id;
	
	function __construct($db)
	{
		$tabName="fund"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->fundArr=$arr;
	}
	function GetFundUsingArray()
	{
		$arr=array();
		$query="select * from fund";
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
		}
	function SearchFund()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->ISIN!="")
		{
			$whereQuery.=$and.'ISIN ="'.$this->ISIN.'"';
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
		if($this->nav_value!="")
		{
			$whereQuery.=$and."nav_value =".$this->nav_value;
			$and=" and ";
		}
		if($this->nav_date!="")
		{
			$whereQuery.=$and."nav_date =".$this->nav_date;
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
		if($this->investment_objectives_a!="")
		{
			$whereQuery.=$and."investment_objectives_a =".$this->investment_objectives_a;
			$and=" and ";
		}
		if($this->investment_objectives_b!="")
		{
			$whereQuery.=$and."investment_objectives_b =".$this->investment_objectives_b;
			$and=" and ";
		}
		if($this->investment_objectives_c!="")
		{
			$whereQuery.=$and."investment_objectives_c =".$this->investment_objectives_c;
			$and=" and ";
		}
		if($this->unique_feature_a!="")
		{
			$whereQuery.=$and."unique_feature_a =".$this->unique_feature_a;
			$and=" and ";
		}
		if($this->unique_feature_b!="")
		{
			$whereQuery.=$and."unique_feature_b =".$this->unique_feature_b;
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
		if($this->transfer_agent_id!="")
		{
			$whereQuery.=$and."transfer_agent_id =".$this->transfer_agent_id;
			$and=" and ";
		}
		if($this->custodian_id!="")
		{
			$whereQuery.=$and."custodian_id =".$this->custodian_id;
			$and=" and ";
		}
		if($this->fund_advisor_id!="")
		{
			$whereQuery.=$and."fund_advisor_id =".$this->fund_advisor_id;
			$and=" and ";
		}
		if($this->fund_auditor_id!="")
		{
			$whereQuery.=$and."fund_auditor_id =".$this->fund_auditor_id;
			$and=" and ";
		}
		if($this->created_at!="")
		{
			$whereQuery.=$and."created_at =".$this->created_at;
			$and=" and ";
		}
		if($this->unique_id!="")
		{
			$whereQuery.=$and."unique_id =".$this->unique_id;
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		//echo $SearchQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	function InsertFund()
	{
		// Hoang - Add "''" for each variable help insert into database 
		$InsArr=$this->fundArr;
		//$InsArr['id']=$this->id;
		$InsArr['id']="NULL";
		$InsArr['ISIN']="'".$this->ISIN."'";
		$InsArr['currency']="'".$this->currency."'";
		$InsArr['fund_name']="'".$this->fund_name."'";
		$InsArr['fund_company']="'".$this->fund_company."'";
		$InsArr['fund_category']="'".$this->fund_category."'";
		$InsArr['fund_status']="'".$this->fund_status."'";
		$InsArr['domicile']="'".$this->domicile."'";
		$InsArr['nav_value']="'".$this->nav_value."'";
		$InsArr['nav_date']="'".$this->nav_date."'";
		$InsArr['fund_strategy']="'".$this->fund_strategy."'";
		$InsArr['primary_strategy']="'".$this->primary_strategy."'";
		$InsArr['secondary_strategy']="'".$this->secondary_strategy."'";
		$InsArr['investment_objectives_a']="'".$this->investment_objectives_a."'";
		$InsArr['investment_objectives_b']="'".$this->investment_objectives_b."'";
		$InsArr['investment_objectives_c']="'".$this->investment_objectives_c."'";
		$InsArr['unique_feature_a']="'".$this->unique_feature_a."'";
		$InsArr['unique_feature_b']="'".$this->unique_feature_b."'";
		$InsArr['inception_date']="'".$this->inception_date."'";
		$InsArr['current_assets']="'".$this->current_assets."'";
		$InsArr['benchmark']="'".$this->benchmark."'";
		$InsArr['risk_appetite']="'".$this->risk_appetite."'";
		$InsArr['geographical_exposure']="'".$this->geographical_exposure."'";
		$InsArr['last_audit']="'".$this->last_audit."'";
		$InsArr['add_info_a']="'".$this->add_info_a."'";
		$InsArr['add_info_b']="'".$this->add_info_b."'";
		$InsArr['transfer_agent_id']="'".$this->transfer_agent_id."'";
		$InsArr['custodian_id']="'".$this->custodian_id."'";
		$InsArr['fund_advisor_id']="'".$this->fund_advisor_id."'";
		$InsArr['fund_auditor_id']="'".$this->fund_auditor_id."'";
		//$InsArr['created_at']=$this->created_at;
		$InsArr['created_at']="now()";
		$InsArr['unique_id']="'".$this->unique_id."'";
		
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		//print $this->InsertQuery($InsArr);
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