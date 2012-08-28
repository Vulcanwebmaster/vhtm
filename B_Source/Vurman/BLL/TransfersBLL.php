<?php
Class TransfersClass extends ChildCoreClass
{
	public $transfersArr;
	public $id;
	public $id_client;
	public $id_isin;
	public $fund_name;
	public $amount;
	public $id_custody1;
	public $trade_date;
	public $settlement_date;
	public $partner;
	public $custodian;
	public $custody2;
	public $transfer_agent;
	public $custody3;
	public $comment;
	public $bic1;
	public $bic2;
	public $bic3;
	public $created_at;
	public $types;
	public $status;
	
	function __construct($db)
	{
		$tabName="transfers"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->transfersArr=$arr;
	}
	function GetTransfersUsingArray()
	{
		$arr=array();
		$query="select * from ".$this->TableName;
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
		}
	function SearchTransfers()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->id_client!="")
		{
			$whereQuery.=$and."id_client =".$this->id_client;
			$and=" and ";
		}
		if($this->id_isin!="")
		{
			$whereQuery.=$and."id_isin =".$this->id_isin;
			$and=" and ";
		}
		if($this->fund_name!="")
		{
			$whereQuery.=$and."fund_name =".$this->fund_name;
			$and=" and ";
		}
		if($this->amount!="")
		{
			$whereQuery.=$and."amount =".$this->amount;
			$and=" and ";
		}
		if($this->id_custody1!="")
		{
			$whereQuery.=$and."id_custody1 =".$this->id_custody1;
			$and=" and ";
		}
		if($this->trade_date!="")
		{
			$whereQuery.=$and."trade_date =".$this->trade_date;
			$and=" and ";
		}
		if($this->settlement_date!="")
		{
			$whereQuery.=$and."settlement_date =".$this->settlement_date;
			$and=" and ";
		}
		if($this->partner!="")
		{
			$whereQuery.=$and."partner =".$this->partner;
			$and=" and ";
		}
		if($this->custodian!="")
		{
			$whereQuery.=$and."custodian =".$this->custodian;
			$and=" and ";
		}
		if($this->custody2!="")
		{
			$whereQuery.=$and."custody2 =".$this->custody2;
			$and=" and ";
		}
		if($this->transfer_agent!="")
		{
			$whereQuery.=$and."transfer_agent =".$this->transfer_agent;
			$and=" and ";
		}
		if($this->custody3!="")
		{
			$whereQuery.=$and."custody3 =".$this->custody3;
			$and=" and ";
		}
		if($this->comment!="")
		{
			$whereQuery.=$and."comment =".$this->comment;
			$and=" and ";
		}
		if($this->bic1!="")
		{
			$whereQuery.=$and."bic1 =".$this->bic1;
			$and=" and ";
		}
		if($this->bic2!="")
		{
			$whereQuery.=$and."bic2 =".$this->bic2;
			$and=" and ";
		}
		if($this->bic3!="")
		{
			$whereQuery.=$and."bic3 =".$this->bic3;
			$and=" and ";
		}
		if($this->created_at!="")
		{
			$whereQuery.=$and."created_at =".$this->created_at;
			$and=" and ";
		}
		if($this->types!="")
		{
			$whereQuery.=$and."types =".$this->types;
			$and=" and ";
		}
		if($this->status!="")
		{
			$whereQuery.=$and."status =".$this->status;
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	function InsertTransfers()
	{
		$InsArr=$this->transfersArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['id_isin']=$this->id_isin;
		$InsArr['fund_name']=$this->fund_name;
		$InsArr['amount']=$this->amount;
		$InsArr['id_custody1']=$this->id_custody1;
		$InsArr['trade_date']=$this->trade_date;
		$InsArr['settlement_date']=$this->settlement_date;
		$InsArr['partner']=$this->partner;
		$InsArr['custodian']=$this->custodian;
		$InsArr['custody2']=$this->custody2;
		$InsArr['transfer_agent']=$this->transfer_agent;
		$InsArr['custody3']=$this->custody3;
		$InsArr['comment']=$this->comment;
		$InsArr['bic1']=$this->bic1;
		$InsArr['bic2']=$this->bic2;
		$InsArr['bic3']=$this->bic3;
		$InsArr['created_at']=$this->created_at;
		$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	function UpdateTransfers()
	{
		$InsArr=$this->transfersArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['id_isin']=$this->id_isin;
		$InsArr['fund_name']=$this->fund_name;
		$InsArr['amount']=$this->amount;
		$InsArr['id_custody1']=$this->id_custody1;
		$InsArr['trade_date']=$this->trade_date;
		$InsArr['settlement_date']=$this->settlement_date;
		$InsArr['partner']=$this->partner;
		$InsArr['custodian']=$this->custodian;
		$InsArr['custody2']=$this->custody2;
		$InsArr['transfer_agent']=$this->transfer_agent;
		$InsArr['custody3']=$this->custody3;
		$InsArr['comment']=$this->comment;
		$InsArr['bic1']=$this->bic1;
		$InsArr['bic2']=$this->bic2;
		$InsArr['bic3']=$this->bic3;
		$InsArr['created_at']=$this->created_at;
		$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		
		$updateArr=$InsArr;
	unset($updateArr['id']);
		unset($updateArr['id_client']);
		unset($updateArr['id_isin']);
		unset($updateArr['fund_name']);
		unset($updateArr['amount']);
		unset($updateArr['id_custody1']);
		unset($updateArr['trade_date']);
		unset($updateArr['settlement_date']);
		unset($updateArr['partner']);
		unset($updateArr['custodian']);
		unset($updateArr['custody2']);
		unset($updateArr['transfer_agent']);
		unset($updateArr['custody3']);
		unset($updateArr['comment']);
		unset($updateArr['bic1']);
		unset($updateArr['bic2']);
		unset($updateArr['bic3']);
		unset($updateArr['created_at']);
		unset($updateArr['types']);
		unset($updateArr['status']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
		}
	function DeleteTransfers()
	{
		$InsArr=$this->transfersArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['id_isin']=$this->id_isin;
		$InsArr['fund_name']=$this->fund_name;
		$InsArr['amount']=$this->amount;
		$InsArr['id_custody1']=$this->id_custody1;
		$InsArr['trade_date']=$this->trade_date;
		$InsArr['settlement_date']=$this->settlement_date;
		$InsArr['partner']=$this->partner;
		$InsArr['custodian']=$this->custodian;
		$InsArr['custody2']=$this->custody2;
		$InsArr['transfer_agent']=$this->transfer_agent;
		$InsArr['custody3']=$this->custody3;
		$InsArr['comment']=$this->comment;
		$InsArr['bic1']=$this->bic1;
		$InsArr['bic2']=$this->bic2;
		$InsArr['bic3']=$this->bic3;
		$InsArr['created_at']=$this->created_at;
		$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		
		unset($InsArr['id']);
		unset($InsArr['id_client']);
		unset($InsArr['id_isin']);
		unset($InsArr['fund_name']);
		unset($InsArr['amount']);
		unset($InsArr['id_custody1']);
		unset($InsArr['trade_date']);
		unset($InsArr['settlement_date']);
		unset($InsArr['partner']);
		unset($InsArr['custodian']);
		unset($InsArr['custody2']);
		unset($InsArr['transfer_agent']);
		unset($InsArr['custody3']);
		unset($InsArr['comment']);
		unset($InsArr['bic1']);
		unset($InsArr['bic2']);
		unset($InsArr['bic3']);
		unset($InsArr['created_at']);
		unset($InsArr['types']);
		unset($InsArr['status']);
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