<?php
Class TransferAgentClass extends ChildCoreClass
{
	public $transfer_agentArr;
	public $id;
	public $transfer_agent;
	public $postal_address;
	public $postal_address_I;
	public $phone_number;
	public $account_number;
	public $key_contact_persons;
	public $email_address;
	public $fax_no;
	public $additional_information;
	public $zip;
	
	function __construct($db)
	{
		$tabName="transfer_agent"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->transfer_agentArr=$arr;
	}
	function GetTransferAgentUsingArray()
	{
		$arr=array();
		$query="select * from transfer_agent";
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
		}
	function SearchTransferAgent()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->transfer_agent!="")
		{
			$whereQuery.=$and."transfer_agent =".$this->transfer_agent;
			$and=" and ";
		}
		if($this->postal_address!="")
		{
			$whereQuery.=$and."postal_address =".$this->postal_address;
			$and=" and ";
		}
		if($this->postal_address_I!="")
		{
			$whereQuery.=$and."postal_address_I =".$this->postal_address_I;
			$and=" and ";
		}
		if($this->phone_number!="")
		{
			$whereQuery.=$and."phone_number =".$this->phone_number;
			$and=" and ";
		}
		if($this->account_number!="")
		{
			$whereQuery.=$and."account_number =".$this->account_number;
			$and=" and ";
		}
		if($this->key_contact_persons!="")
		{
			$whereQuery.=$and."key_contact_persons =".$this->key_contact_persons;
			$and=" and ";
		}
		if($this->email_address!="")
		{
			$whereQuery.=$and."email_address =".$this->email_address;
			$and=" and ";
		}
		if($this->fax_no!="")
		{
			$whereQuery.=$and."fax_no =".$this->fax_no;
			$and=" and ";
		}
		if($this->additional_information!="")
		{
			$whereQuery.=$and."additional_information =".$this->additional_information;
			$and=" and ";
		}
		if($this->zip!="")
		{
			$whereQuery.=$and."zip =".$this->zip;
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	function InsertTransferAgent()
	{
		$InsArr=$this->transfer_agentArr;
		//$InsArr['id']=$this->id;
		$InsArr['id']="NULL";
		$InsArr['transfer_agent']=$this->transfer_agent;
		$InsArr['postal_address']=$this->postal_address;
		$InsArr['postal_address_I']=$this->postal_address_I;
		$InsArr['phone_number']=$this->phone_number;
		$InsArr['account_number']=$this->account_number;
		$InsArr['key_contact_persons']=$this->key_contact_persons;
		$InsArr['email_address']=$this->email_address;
		$InsArr['fax_no']=$this->fax_no;
		$InsArr['additional_information']=$this->additional_information;
		$InsArr['zip']=$this->zip;
		//echo $this->InsertQuery($InsArr);
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully TransferAgent.";
		else $msg="Failed.";
		return $msg;
	}
	function UpdateTransferAgent()
	{
		$InsArr=$this->transfer_agentArr;
		$InsArr['id']=$this->id;
		$InsArr['transfer_agent']=$this->transfer_agent;
		$InsArr['postal_address']=$this->postal_address;
		$InsArr['postal_address_I']=$this->postal_address_I;
		$InsArr['phone_number']=$this->phone_number;
		$InsArr['account_number']=$this->account_number;
		$InsArr['key_contact_persons']=$this->key_contact_persons;
		$InsArr['email_address']=$this->email_address;
		$InsArr['fax_no']=$this->fax_no;
		$InsArr['additional_information']=$this->additional_information;
		$InsArr['zip']=$this->zip;
		
		$updateArr=$InsArr;
	unset($updateArr['id']);
		unset($updateArr['transfer_agent']);
		unset($updateArr['postal_address']);
		unset($updateArr['postal_address_I']);
		unset($updateArr['phone_number']);
		unset($updateArr['account_number']);
		unset($updateArr['key_contact_persons']);
		unset($updateArr['email_address']);
		unset($updateArr['fax_no']);
		unset($updateArr['additional_information']);
		unset($updateArr['zip']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
		}
	function DeleteTransferAgent()
	{
		$InsArr=$this->transfer_agentArr;
		$InsArr['id']=$this->id;
		$InsArr['transfer_agent']=$this->transfer_agent;
		$InsArr['postal_address']=$this->postal_address;
		$InsArr['postal_address_I']=$this->postal_address_I;
		$InsArr['phone_number']=$this->phone_number;
		$InsArr['account_number']=$this->account_number;
		$InsArr['key_contact_persons']=$this->key_contact_persons;
		$InsArr['email_address']=$this->email_address;
		$InsArr['fax_no']=$this->fax_no;
		$InsArr['additional_information']=$this->additional_information;
		$InsArr['zip']=$this->zip;
		
		unset($InsArr['id']);
		unset($InsArr['transfer_agent']);
		unset($InsArr['postal_address']);
		unset($InsArr['postal_address_I']);
		unset($InsArr['phone_number']);
		unset($InsArr['account_number']);
		unset($InsArr['key_contact_persons']);
		unset($InsArr['email_address']);
		unset($InsArr['fax_no']);
		unset($InsArr['additional_information']);
		unset($InsArr['zip']);
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