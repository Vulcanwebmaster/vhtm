<?php
Class SubscriptionFeeClass extends ChildCoreClass
{
	public $subscription_feeArr;
	public $id;
	public $funds_id;
	public $minimum_front_end_fee;
	public $maximum_front_end_fee;
	public $management_fee;
	public $performance_fee;
	public $additional_information;
	
	function __construct($db)
	{
		$tabName="subscription_fee"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->subscription_feeArr=$arr;
	}
	function GetSubscriptionFeeUsingArray()
	{
		$arr=array();
		$query="select * from subscription_fee";
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
		}
	function SearchSubscriptionFee()
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
		if($this->minimum_front_end_fee!="")
		{
			$whereQuery.=$and."minimum_front_end_fee =".$this->minimum_front_end_fee;
			$and=" and ";
		}
		if($this->maximum_front_end_fee!="")
		{
			$whereQuery.=$and."maximum_front_end_fee =".$this->maximum_front_end_fee;
			$and=" and ";
		}
		if($this->management_fee!="")
		{
			$whereQuery.=$and."management_fee =".$this->management_fee;
			$and=" and ";
		}
		if($this->performance_fee!="")
		{
			$whereQuery.=$and."performance_fee=".$this->performance_fee;
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
	function InsertSubscriptionFee()
	{
		$InsArr=$this->subscription_feeArr;
		//$InsArr['id']=$this->id;
		$InsArr['id']="NULL";
		$InsArr['funds_id']=$this->funds_id;
		$InsArr['minimum_front_end_fee']=$this->minimum_front_end_fee;
		$InsArr['maximum_front_end_fee']=$this->maximum_front_end_fee;
		$InsArr['management_fee']=$this->management_fee;
		$InsArr['performance_fee']=$this->performance_fee;
		$InsArr['additional_information']=$this->additional_information;
		
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		echo $this->InsertQuery($InsArr);
		if(mysql_affected_rows()>0)$msg="Added Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	function UpdateSubscriptionFee()
	{
		$InsArr=$this->subscription_feeArr;
		$InsArr['id']=$this->id;
		$InsArr['funds_id']=$this->funds_id;
		$InsArr['minimum_front_end_fee']=$this->minimum_front_end_fee;
		$InsArr['maximum_front_end_fee']=$this->maximum_front_end_fee;
		$InsArr['management_fee']=$this->management_fee;
		$InsArr['performance_fee']=$this->performance_fee;
		$InsArr['additional_information']=$this->additional_information;
		
		$updateArr=$InsArr;
		unset($updateArr['id']);
		unset($updateArr['funds_id']);
		unset($updateArr['minimum_front_end_fee']);
		unset($updateArr['maximum_front_end_fee']);
		unset($updateArr['management_fee']);
		unset($updateArr['performance_fee']);
		unset($updateArr['additional_information']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
		}
	function DeleteSubscriptionFee()
	{
		$InsArr=$this->subscription_feeArr;
		$InsArr['id']=$this->id;
		$InsArr['funds_id']=$this->funds_id;
		$InsArr['minimum_front_end_fee']=$this->minimum_front_end_fee;
		$InsArr['maximum_front_end_fee']=$this->maximum_front_end_fee;
		$InsArr['management_fee']=$this->management_fee;
		$InsArr['additional_information']=$this->additional_information;
		
		unset($InsArr['id']);
		unset($InsArr['funds_id']);
		unset($InsArr['minimum_front_end_fee']);
		unset($InsArr['maximum_front_end_fee']);
		unset($InsArr['management_fee']);
		unset($updateArr['performance_fee']);
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