<?php
Class RedemptionFeesClass extends ChildCoreClass
{
	public $redemption_feesArr;
	public $id;
	public $redemption_details_id;
	public $minimum_back_end_fee;
	public $early_withdrawal_fee;
	public $maximum_back_end_fee;
	public $additional_information;
	
	function __construct($db)
	{
		$tabName="redemption_fees"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->redemption_feesArr=$arr;
	}
	function GetRedemptionFeesUsingArray()
	{
		$arr=array();
		$query="select * from redemption_fees";
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
		}
	function SearchRedemptionFees()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->redemption_details_id!="")
		{
			$whereQuery.=$and."redemption_details_id =".$this->redemption_details_id;
			$and=" and ";
		}
		if($this->minimum_back_end_fee!="")
		{
			$whereQuery.=$and."minimum_back_end_fee =".$this->minimum_back_end_fee;
			$and=" and ";
		}
		if($this->early_withdrawal_fee!="")
		{
			$whereQuery.=$and."early_withdrawal_fee =".$this->early_withdrawal_fee;
			$and=" and ";
		}
		if($this->maximum_back_end_fee!="")
		{
			$whereQuery.=$and."maximum_back_end_fee =".$this->maximum_back_end_fee;
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
	function InsertRedemptionFees()
	{
		$InsArr=$this->redemption_feesArr;
		$InsArr['id']=$this->id;
		$InsArr['redemption_details_id']=$this->redemption_details_id;
		$InsArr['minimum_back_end_fee']=$this->minimum_back_end_fee;
		$InsArr['early_withdrawal_fee']=$this->early_withdrawal_fee;
		$InsArr['maximum_back_end_fee']=$this->maximum_back_end_fee;
		$InsArr['additional_information']=$this->additional_information;
		
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	function UpdateRedemptionFees()
	{
		$InsArr=$this->redemption_feesArr;
		$InsArr['id']=$this->id;
		$InsArr['redemption_details_id']=$this->redemption_details_id;
		$InsArr['minimum_back_end_fee']=$this->minimum_back_end_fee;
		$InsArr['early_withdrawal_fee']=$this->early_withdrawal_fee;
		$InsArr['maximum_back_end_fee']=$this->maximum_back_end_fee;
		$InsArr['additional_information']=$this->additional_information;
		
		$updateArr=$InsArr;
	unset($updateArr['id']);
		unset($updateArr['redemption_details_id']);
		unset($updateArr['minimum_back_end_fee']);
		unset($updateArr['early_withdrawal_fee']);
		unset($updateArr['maximum_back_end_fee']);
		unset($updateArr['additional_information']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
		}
	function DeleteRedemptionFees()
	{
		$InsArr=$this->redemption_feesArr;
		$InsArr['id']=$this->id;
		$InsArr['redemption_details_id']=$this->redemption_details_id;
		$InsArr['minimum_back_end_fee']=$this->minimum_back_end_fee;
		$InsArr['early_withdrawal_fee']=$this->early_withdrawal_fee;
		$InsArr['maximum_back_end_fee']=$this->maximum_back_end_fee;
		$InsArr['additional_information']=$this->additional_information;
		
		unset($InsArr['id']);
		unset($InsArr['redemption_details_id']);
		unset($InsArr['minimum_back_end_fee']);
		unset($InsArr['early_withdrawal_fee']);
		unset($InsArr['maximum_back_end_fee']);
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