<?php
Class FundAuditorClass extends ChildCoreClass
{
	public $fund_auditorArr;
	public $id;
	public $fund_auditor;
	public $postal_address_fau;
	public $postal_address_fau_I;
	public $phone_number_fau;
	public $email_address_fau;
	public $fax_number_fau;
	public $additional_information_fau;
	public $zip_city_fau;
	
	function __construct($db)
	{
		$tabName="fund_auditor"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->fund_auditorArr=$arr;
	}
	function GetFundAuditorUsingArray()
	{
		$arr=array();
		$query="select * from fund_auditor";
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
		}
	function SearchFundAuditor()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->fund_auditor!="")
		{
			$whereQuery.=$and."fund_auditor =".$this->fund_auditor;
			$and=" and ";
		}
		if($this->postal_address_fau!="")
		{
			$whereQuery.=$and."postal_address_fau =".$this->postal_address_fau;
			$and=" and ";
		}
		if($this->postal_address_fau_I!="")
		{
			$whereQuery.=$and."postal_address_fau_I =".$this->postal_address_fau_I;
			$and=" and ";
		}
		if($this->phone_number_fau!="")
		{
			$whereQuery.=$and."phone_number_fau =".$this->phone_number_fau;
			$and=" and ";
		}
		if($this->email_address_fau!="")
		{
			$whereQuery.=$and."email_address_fau =".$this->email_address_fau;
			$and=" and ";
		}
		if($this->fax_number_fau!="")
		{
			$whereQuery.=$and."fax_number_fau =".$this->fax_number_fau;
			$and=" and ";
		}
		if($this->additional_information_fau!="")
		{
			$whereQuery.=$and."additional_information_fau =".$this->additional_information_fau;
			$and=" and ";
		}
		if($this->zip_city_fau!="")
		{
			$whereQuery.=$and."zip_city_fau =".$this->zip_city_fau;
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	function InsertFundAuditor()
	{
		$InsArr=$this->fund_auditorArr;
		//$InsArr['id']=$this->id;
		$InsArr['id']="NULL";
		$InsArr['fund_auditor']=$this->fund_auditor;
		$InsArr['postal_address_fau']=$this->postal_address_fau;
		$InsArr['postal_address_fau_I']=$this->postal_address_fau_I;
		$InsArr['phone_number_fau']=$this->phone_number_fau;
		$InsArr['email_address_fau']=$this->email_address_fau;
		$InsArr['fax_number_fau']=$this->fax_number_fau;
		$InsArr['additional_information_fau']=$this->additional_information_fau;
		$InsArr['zip_city_fau']=$this->zip_city_fau;
		//echo $this->InsertQuery($InsArr);
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully FundAuditor.";
		else $msg="Failed.";
		return $msg;
	}
	function UpdateFundAuditor()
	{
		$InsArr=$this->fund_auditorArr;
		$InsArr['id']=$this->id;
		$InsArr['fund_auditor']=$this->fund_auditor;
		$InsArr['postal_address_fau']=$this->postal_address_fau;
		$InsArr['postal_address_fau_I']=$this->postal_address_fau_I;
		$InsArr['phone_number_fau']=$this->phone_number_fau;
		$InsArr['email_address_fau']=$this->email_address_fau;
		$InsArr['fax_number_fau']=$this->fax_number_fau;
		$InsArr['additional_information_fau']=$this->additional_information_fau;
		$InsArr['zip_city_fau']=$this->zip_city_fau;
		
		$updateArr=$InsArr;
	unset($updateArr['id']);
		unset($updateArr['fund_auditor']);
		unset($updateArr['postal_address_fau']);
		unset($updateArr['postal_address_fau_I']);
		unset($updateArr['phone_number_fau']);
		unset($updateArr['email_address_fau']);
		unset($updateArr['fax_number_fau']);
		unset($updateArr['additional_information_fau']);
		unset($updateArr['zip_city_fau']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
		}
	function DeleteFundAuditor()
	{
		$InsArr=$this->fund_auditorArr;
		$InsArr['id']=$this->id;
		$InsArr['fund_auditor']=$this->fund_auditor;
		$InsArr['postal_address_fau']=$this->postal_address_fau;
		$InsArr['postal_address_fau_I']=$this->postal_address_fau_I;
		$InsArr['phone_number_fau']=$this->phone_number_fau;
		$InsArr['email_address_fau']=$this->email_address_fau;
		$InsArr['fax_number_fau']=$this->fax_number_fau;
		$InsArr['additional_information_fau']=$this->additional_information_fau;
		$InsArr['zip_city_fau']=$this->zip_city_fau;
		
		unset($InsArr['id']);
		unset($InsArr['fund_auditor']);
		unset($InsArr['postal_address_fau']);
		unset($InsArr['postal_address_fau_I']);
		unset($InsArr['phone_number_fau']);
		unset($InsArr['email_address_fau']);
		unset($InsArr['fax_number_fau']);
		unset($InsArr['additional_information_fau']);
		unset($InsArr['zip_city_fau']);
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