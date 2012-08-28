<?php
Class TransactionsClass extends ChildCoreClass
{
	public $transactionsArr;
	public $id;
	public $id_client;
	public $id_isin1;
	public $amount1;
	public $id_account;
	public $types;
	public $status;
	public $comment_user;
	public $comment_admin;
	public $created_at;
	
	function __construct($db)
	{
		$tabName="transactions"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->transactionsArr=$arr;
	}
	function GetTransactionsUsingArray()
	{
		$arr=array();
		$query="select * from ".$this->TableName;
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
		}
	function SearchTransactions()
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
		if($this->id_isin1!="")
		{
			$whereQuery.=$and."id_isin1 =".$this->id_isin1;
			$and=" and ";
		}
		if($this->amount1!="")
		{
			$whereQuery.=$and."amount1 =".$this->amount1;
			$and=" and ";
		}
		if($this->id_account!="")
		{
			$whereQuery.=$and."id_account =".$this->id_account;
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
		if($this->comment_user!="")
		{
			$whereQuery.=$and."comment_user =".$this->comment_user;
			$and=" and ";
		}
		if($this->comment_admin!="")
		{
			$whereQuery.=$and."comment_admin =".$this->comment_admin;
			$and=" and ";
		}
		if($this->created_at!="")
		{
			$whereQuery.=$and."created_at =".$this->created_at;
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	function InsertTransactions()
	{
		$InsArr=$this->transactionsArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['id_isin1']=$this->id_isin1;
		$InsArr['amount1']=$this->amount1;
		$InsArr['id_account']=$this->id_account;
		$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		$InsArr['comment_user']=$this->comment_user;
		$InsArr['comment_admin']=$this->comment_admin;
		$InsArr['created_at']=$this->created_at;
		
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	function UpdateTransactions()
	{
		$InsArr=$this->transactionsArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['id_isin1']=$this->id_isin1;
		$InsArr['amount1']=$this->amount1;
		$InsArr['id_account']=$this->id_account;
		$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		$InsArr['comment_user']=$this->comment_user;
		$InsArr['comment_admin']=$this->comment_admin;
		$InsArr['created_at']=$this->created_at;
		
		$updateArr=$InsArr;
	unset($updateArr['id']);
		unset($updateArr['id_client']);
		unset($updateArr['id_isin1']);
		unset($updateArr['amount1']);
		unset($updateArr['id_account']);
		unset($updateArr['types']);
		unset($updateArr['status']);
		unset($updateArr['comment_user']);
		unset($updateArr['comment_admin']);
		unset($updateArr['created_at']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
		}
	function DeleteTransactions()
	{
		$InsArr=$this->transactionsArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['id_isin1']=$this->id_isin1;
		$InsArr['amount1']=$this->amount1;
		$InsArr['id_account']=$this->id_account;
		$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		$InsArr['comment_user']=$this->comment_user;
		$InsArr['comment_admin']=$this->comment_admin;
		$InsArr['created_at']=$this->created_at;
		
		unset($InsArr['id']);
		unset($InsArr['id_client']);
		unset($InsArr['id_isin1']);
		unset($InsArr['amount1']);
		unset($InsArr['id_account']);
		unset($InsArr['types']);
		unset($InsArr['status']);
		unset($InsArr['comment_user']);
		unset($InsArr['comment_admin']);
		unset($InsArr['created_at']);
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