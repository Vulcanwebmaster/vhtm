<?php
Class Redemption_detailsClass extends ChildCoreClass
{
	public $redemption_detailsArr;
	public $id;
	public $funds_id;
	public $minimum_amount;
	public $notice_period;
	public $trading_date;
	public $settlement_cycle;
	public $minimum_units;
	public $trading_frequency;
	public $cut_of_tiime;
	public $additional_information;
	
	function __construct($db)
	{
		$tabName="redemption_details"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->redemption_detailsArr=$arr;
	}
	function GetRedemption_detailsUsingArray()
	{
		$arr=array();
		$query="select * from redemption_details";
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
		}
	function SearchRedemption_details()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->funds_id!="")
		{
			$whereQuery.=$and."funds_id =".$this->funds_id;
			$and=" and ";
		}
		if($this->minimum_amount!="")
		{
			$whereQuery.=$and."minimum_amount =".$this->minimum_amount;
			$and=" and ";
		}
		if($this->notice_period!="")
		{
			$whereQuery.=$and."notice_period =".$this->notice_period;
			$and=" and ";
		}
		if($this->trading_date!="")
		{
			$whereQuery.=$and."trading_date =".$this->trading_date;
			$and=" and ";
		}
		if($this->settlement_cycle!="")
		{
			$whereQuery.=$and."settlement_cycle =".$this->settlement_cycle;
			$and=" and ";
		}
		if($this->minimum_units!="")
		{
			$whereQuery.=$and."minimum_units =".$this->minimum_units;
			$and=" and ";
		}
		if($this->trading_frequency!="")
		{
			$whereQuery.=$and."trading_frequency =".$this->trading_frequency;
			$and=" and ";
		}
		if($this->cut_of_tiime!="")
		{
			$whereQuery.=$and."cut_of_tiime =".$this->cut_of_tiime;
			$and=" and ";
		}
		if($this->additional_information!="")
		{
			$whereQuery.=$and."additional_information =".$this->additional_information;
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	function InsertRedemption_details()
	{
		$InsArr=$this->redemption_detailsArr;
		$InsArr['id']=$this->id;
		$InsArr['funds_id']=$this->funds_id;
		$InsArr['minimum_amount']=$this->minimum_amount;
		$InsArr['notice_period']=$this->notice_period;
		$InsArr['trading_date']=$this->trading_date;
		$InsArr['settlement_cycle']=$this->settlement_cycle;
		$InsArr['minimum_units']=$this->minimum_units;
		$InsArr['trading_frequency']=$this->trading_frequency;
		$InsArr['cut_of_tiime']=$this->cut_of_tiime;
		$InsArr['additional_information']=$this->additional_information;
		
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	function UpdateRedemption_details()
	{
		$InsArr=$this->redemption_detailsArr;
		$InsArr['id']=$this->id;
		$InsArr['funds_id']=$this->funds_id;
		$InsArr['minimum_amount']=$this->minimum_amount;
		$InsArr['notice_period']=$this->notice_period;
		$InsArr['trading_date']=$this->trading_date;
		$InsArr['settlement_cycle']=$this->settlement_cycle;
		$InsArr['minimum_units']=$this->minimum_units;
		$InsArr['trading_frequency']=$this->trading_frequency;
		$InsArr['cut_of_tiime']=$this->cut_of_tiime;
		$InsArr['additional_information']=$this->additional_information;
		
		$updateArr=$InsArr;
	unset($updateArr['id']);
		unset($updateArr['funds_id']);
		unset($updateArr['minimum_amount']);
		unset($updateArr['notice_period']);
		unset($updateArr['trading_date']);
		unset($updateArr['settlement_cycle']);
		unset($updateArr['minimum_units']);
		unset($updateArr['trading_frequency']);
		unset($updateArr['cut_of_tiime']);
		unset($updateArr['additional_information']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
		}
	function DeleteRedemption_details()
	{
		$InsArr=$this->redemption_detailsArr;
		$InsArr['id']=$this->id;
		$InsArr['funds_id']=$this->funds_id;
		$InsArr['minimum_amount']=$this->minimum_amount;
		$InsArr['notice_period']=$this->notice_period;
		$InsArr['trading_date']=$this->trading_date;
		$InsArr['settlement_cycle']=$this->settlement_cycle;
		$InsArr['minimum_units']=$this->minimum_units;
		$InsArr['trading_frequency']=$this->trading_frequency;
		$InsArr['cut_of_tiime']=$this->cut_of_tiime;
		$InsArr['additional_information']=$this->additional_information;
		
		unset($InsArr['id']);
		unset($InsArr['funds_id']);
		unset($InsArr['minimum_amount']);
		unset($InsArr['notice_period']);
		unset($InsArr['trading_date']);
		unset($InsArr['settlement_cycle']);
		unset($InsArr['minimum_units']);
		unset($InsArr['trading_frequency']);
		unset($InsArr['cut_of_tiime']);
		unset($InsArr['additional_information']);
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