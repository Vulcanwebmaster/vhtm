<?php
Class FundAdvisorClass extends ChildCoreClass
{
	public $fund_advisorArr;
	public $id;
	public $fund_advisor;
	public $postal_address_adv;
	public $postal_address_adv_I;
	public $phone_number_adv;
	public $email_address_adv;
	public $fax_number_adv;
	public $additional_information_adv;
	public $zip_city_adv;
	
	function __construct($db)
	{
		$tabName="fund_advisor"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->fund_advisorArr=$arr;
	}
	function GetFundAdvisorUsingArray()
	{
		$arr=array();
		$query="select * from fund_advisor";
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
		}
	function SearchFundAdvisor()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->fund_advisor!="")
		{
			$whereQuery.=$and."fund_advisor =".$this->fund_advisor;
			$and=" and ";
		}
		if($this->postal_address_adv!="")
		{
			$whereQuery.=$and."postal_address_adv =".$this->postal_address_adv;
			$and=" and ";
		}
		if($this->postal_address_adv_I!="")
		{
			$whereQuery.=$and."postal_address_adv_I =".$this->postal_address_adv_I;
			$and=" and ";
		}
		if($this->phone_number_adv!="")
		{
			$whereQuery.=$and."phone_number_adv =".$this->phone_number_adv;
			$and=" and ";
		}
		if($this->email_address_adv!="")
		{
			$whereQuery.=$and."email_address_adv =".$this->email_address_adv;
			$and=" and ";
		}
		if($this->fax_number_adv!="")
		{
			$whereQuery.=$and."fax_number_adv =".$this->fax_number_adv;
			$and=" and ";
		}
		if($this->additional_information_adv!="")
		{
			$whereQuery.=$and."additional_information_adv =".$this->additional_information_adv;
			$and=" and ";
		}
		if($this->zip_city_adv!="")
		{
			$whereQuery.=$and."zip_city_adv =".$this->zip_city_adv;
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	function InsertFundAdvisor()
	{
		$InsArr=$this->fund_advisorArr;
		//$InsArr['id']=$this->id;
		$InsArr['id']="NULL";
		$InsArr['fund_advisor']=$this->fund_advisor;
		$InsArr['postal_address_adv']=$this->postal_address_adv;
		$InsArr['postal_address_adv_I']=$this->postal_address_adv_I;
		$InsArr['phone_number_adv']=$this->phone_number_adv;
		$InsArr['email_address_adv']=$this->email_address_adv;
		$InsArr['fax_number_adv']=$this->fax_number_adv;
		$InsArr['additional_information_adv']=$this->additional_information_adv;
		$InsArr['zip_city_adv']=$this->zip_city_adv;
		//echo $this->InsertQuery($InsArr);
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully FundAdvisor.";
		else $msg="Failed.";
		return $msg;
	}
	function UpdateFundAdvisor()
	{
		$InsArr=$this->fund_advisorArr;
		$InsArr['id']=$this->id;
		$InsArr['fund_advisor']=$this->fund_advisor;
		$InsArr['postal_address_adv']=$this->postal_address_adv;
		$InsArr['postal_address_adv_I']=$this->postal_address_adv_I;
		$InsArr['phone_number_adv']=$this->phone_number_adv;
		$InsArr['email_address_adv']=$this->email_address_adv;
		$InsArr['fax_number_adv']=$this->fax_number_adv;
		$InsArr['additional_information_adv']=$this->additional_information_adv;
		$InsArr['zip_city_adv']=$this->zip_city_adv;
		
		$updateArr=$InsArr;
	unset($updateArr['id']);
		unset($updateArr['fund_advisor']);
		unset($updateArr['postal_address_adv']);
		unset($updateArr['postal_address_adv_I']);
		unset($updateArr['phone_number_adv']);
		unset($updateArr['email_address_adv']);
		unset($updateArr['fax_number_adv']);
		unset($updateArr['additional_information_adv']);
		unset($updateArr['zip_city_adv']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
		}
	function DeleteFundAdvisor()
	{
		$InsArr=$this->fund_advisorArr;
		$InsArr['id']=$this->id;
		$InsArr['fund_advisor']=$this->fund_advisor;
		$InsArr['postal_address_adv']=$this->postal_address_adv;
		$InsArr['postal_address_adv_I']=$this->postal_address_adv_I;
		$InsArr['phone_number_adv']=$this->phone_number_adv;
		$InsArr['email_address_adv']=$this->email_address_adv;
		$InsArr['fax_number_adv']=$this->fax_number_adv;
		$InsArr['additional_information_adv']=$this->additional_information_adv;
		$InsArr['zip_city_adv']=$this->zip_city_adv;
		
		unset($InsArr['id']);
		unset($InsArr['fund_advisor']);
		unset($InsArr['postal_address_adv']);
		unset($InsArr['postal_address_adv_I']);
		unset($InsArr['phone_number_adv']);
		unset($InsArr['email_address_adv']);
		unset($InsArr['fax_number_adv']);
		unset($InsArr['additional_information_adv']);
		unset($InsArr['zip_city_adv']);
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