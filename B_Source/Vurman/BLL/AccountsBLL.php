<?php
Class AccountClass extends ChildCoreClass
{
	public $accountArr;
	public $id;
	public $id_account;
	public $id_client;
	public $name;
	public $amount;
	public $id_currency;
	public $credit;
	public $debit;
	public $vdate1;
	public $vdate2;
	public $created_at;
	
	function __construct($db)
	{
		$tabName="account"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->accountArr=$arr;
	}
	
	function GetAccountUsingJSON()
	{
		$resArr=$this->SearchAccount();
		
		$JsonStr="<script type=\"text/javascript\">";
		$JsonStr.="var JSONAccount=[";
		$comma="";
		foreach($resArr as $item)
		{
			$JsonStr.=$comma."{";
			$JsonStr.="\"id\":\"".$item['id']."\",";
			$JsonStr.="\"id_account\":\"".$item['id_account']."\",";
			$JsonStr.="\"id_client\":\"".$item['id_client']."\",";
			$JsonStr.="\"name\":\"".$item['name']."\",";
			$JsonStr.="\"amount\":\"".$item['amount']."\",";
			$JsonStr.="\"id_currency\":\"".$item['id_currency']."\",";
			$JsonStr.="\"credit\":\"".$item['credit']."\",";
			$JsonStr.="\"debit\":\"".$item['debit']."\",";
			$JsonStr.="\"vdate1\":\"".$item['vdate1']."\",";
			$JsonStr.="\"vdate2\":\"".$item['vdate2']."\",";
			$JsonStr.="\"created_at\":\"".$item['created_at']."\"";
			$JsonStr.="}";
			$comma=",";
		}
		$JsonStr.="];</script>";
		
		return $JsonStr;
	}
	
	function GetAccountUsingArray()
	{
		$arr=array();
		$query="select * from account";
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
	}
	
	function SearchAccount()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->id_account!="")
		{
			$whereQuery.=$and."id_account =".$this->id_account;
			$and=" and ";
		}
		if($this->id_client!="")
		{
			$whereQuery.=$and."id_client =".$this->id_client;
			$and=" and ";
		}
		if($this->name!="")
		{
			$whereQuery.=$and."name like '".$this->name."%'";
			$and=" and ";
		}
		if($this->amount!="")
		{
			$whereQuery.=$and."amount =".$this->amount;
			$and=" and ";
		}
		if($this->id_currency!="")
		{
			$whereQuery.=$and."id_currency =".$this->id_currency;
			$and=" and ";
		}
		if($this->credit!="")
		{
			$whereQuery.=$and."credit =".$this->credit;
			$and=" and ";
		}
		if($this->debit!="")
		{
			$whereQuery.=$and."debit =".$this->debit;
			$and=" and ";
		}
		if($this->vdate1!="")
		{
			$whereQuery.=$and."vdate1 ='".$this->vdate1."'";
			$and=" and ";
		}
		if($this->vdate2!="")
		{
			$whereQuery.=$and."vdate2 ='".$this->vdate2."'";
			$and=" and ";
		}
		if($this->created_at!="")
		{
			$whereQuery.=$and."created_at ='".$this->created_at."'";
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		echo $SearchQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	
	function InsertAccount()
	{
		$InsArr=$this->accountArr;
		$this->GetNewID();
		$this->GetNewIDClient();
		$InsArr['id']=$this->id;
		$InsArr['id_account']=$this->id_account;
		$InsArr['id_client']=$this->id_client;
		$InsArr['name']="'".$this->name."'";
		$InsArr['amount']=$this->amount;
		$InsArr['id_currency']=$this->id_currency;
		$InsArr['credit']=$this->credit;
		$InsArr['debit']=$this->debit;
		$InsArr['vdate1']="'".$this->vdate1."'";
		$InsArr['vdate2']="'".$this->vdate2."'";
		$InsArr['created_at']="now()";
		
		//echo $this->InsertQuery($InsArr);
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function UpdateAccount()
	{
		$InsArr=$this->accountArr;
		$InsArr['id']=$this->id;
		$InsArr['id_account']=$this->id_account;
		$InsArr['id_client']=$this->id_client;
		$InsArr['name']="'".$this->name."'";
		$InsArr['amount']=$this->amount;
		$InsArr['id_currency']=$this->id_currency;
		$InsArr['credit']=$this->credit;
		$InsArr['debit']=$this->debit;
		$InsArr['vdate1']="'".$this->vdate1."'";
		$InsArr['vdate2']="'".$this->vdate2."'";
		$InsArr['created_at']="now()";
		
		unset($InsArr['id_account']);
		
		$updateArr=$InsArr;
		unset($updateArr['id_client']);
		unset($updateArr['name']);
		unset($updateArr['amount']);
		unset($updateArr['id_currency']);
		unset($updateArr['credit']);
		unset($updateArr['debit']);
		unset($updateArr['vdate1']);
		unset($updateArr['vdate2']);
		unset($updateArr['created_at']);
		
		echo $this->UpdateQuery($InsArr,$updateArr);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function DeleteAccount()
	{
		$InsArr=$this->accountArr;
		$InsArr['id']=$this->id;
		$InsArr['id_account']=$this->id_account;
		$InsArr['id_client']=$this->id_client;
		$InsArr['name']=$this->name;
		$InsArr['amount']=$this->amount;
		$InsArr['id_currency']=$this->id_currency;
		$InsArr['credit']=$this->credit;
		$InsArr['debit']=$this->debit;
		$InsArr['vdate1']=$this->vdate1;
		$InsArr['vdate2']=$this->vdate2;
		$InsArr['created_at']=$this->created_at;
		
		unset($InsArr['id_account']);
		unset($InsArr['id_client']);
		unset($InsArr['name']);
		unset($InsArr['amount']);
		unset($InsArr['id_currency']);
		unset($InsArr['credit']);
		unset($InsArr['debit']);
		unset($InsArr['vdate1']);
		unset($InsArr['vdate2']);
		unset($InsArr['created_at']);
		$result=$this->ExcuteQueryOnly($this->DeleteQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Deleted Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function GetNewID()
	{
		$arr=array();
		$Id=0;
		$query="select * from ".$this->TableName." order by id desc";
		//echo $query;
		$resArr=$this->ExcuteQuery($query);
		
		if(isset($resArr[0])){
			if($resArr[0]['id']!=null)
				$Id=$resArr[0]['id'];
		}
		
		$Id++;
		$this->id=$Id;
	}
	
	function GetNewIDClient()
	{
		$arr=array();
		$Id=0;
		$query="select * from ".$this->TableName." where id_client=".$this->id_client." order by id desc";
		//echo $query;
		$resArr=$this->ExcuteQuery($query);
		
		if(isset($resArr[0])){
			if($resArr[0]['id_client']!="" || $resArr[0]['id_client']!="")
				$Id=$resArr[0]['id_client'];
		}
		
		$Id++;
		$this->id_account=$Id;
	}
	
	function GetTable()
	{
		return $this->ExecuteQueryReturnArray($this->db);
	}

}
?>