<?php
Class IsinClass extends ChildCoreClass
{
	public $isinArr;
	public $id;
	public $code;
	public $name;
	public $id_currency;
	public $limit1;
	public $limit2;
	public $limit3;
	public $name_fund;
	public $nav;
	public $date_nav;
	public $unique_id;
	// Hoang Add properties
	public $transferagent;
	public $bicta;
	function __construct($db)
	{
		$tabName="isin"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->isinArr=$arr;
	}
	
	function GetIsinUsingArray()
	{
		$arr=array();
		$query="select * from ".$this->TableName;
		
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
	}
	
	function GetISINJSON()
	{
		$resArr=$this->SearchIsin();
		
		$JsonStr="<script type=\"text/javascript\">";
		$JsonStr.="var JSONISIN=[";
		$comma="";
		foreach($resArr as $item)
		{
			$JsonStr.=$comma."{";
			$JsonStr.="\"id\":\"".$item['id']."\",";
			$JsonStr.="\"code\":\"".$item['code']."\",";
			$JsonStr.="\"name\":\"".$item['name']."\",";
			$JsonStr.="\"id_currency\":\"".$item['id_currency']."\",";
			$JsonStr.="\"transferagent\":\"".$item['transferagent']."\",";
			$JsonStr.="\"bicta\":\"".$item['bicta']."\",";
			$JsonStr.="\"name_fund\":\"".$item['name_fund']."\",";
			$JsonStr.="\"nav\":\"".$item['nav']."\",";
			$JsonStr.="\"date_nav\":\"".$item['date_nav']."\",";
			$JsonStr.="\"unique_id\":\"".$item['unique_id']."\"";
			$JsonStr.="}";
			$comma=",";
		}
		$JsonStr.="];</script>";
		
		return $JsonStr;
	}
	
	function SearchIsin()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->code!="")
		{
			$whereQuery.=$and.'code = "'.$this->code.'"';
			$and=" and ";
		}
		if($this->name!="")
		{
			$whereQuery.=$and."name ='".$this->name."'";
			$and=" and ";
		}
		if($this->id_currency!="")
		{
			$whereQuery.=$and."id_currency =".$this->id_currency;
			$and=" and ";
		}
		if($this->limit1!="")
		{
			$whereQuery.=$and."limit1 =".$this->limit1;
			$and=" and ";
		}
		if($this->limit2!="")
		{
			$whereQuery.=$and."limit2 =".$this->limit2;
			$and=" and ";
		}
		if($this->limit3!="")
		{
			$whereQuery.=$and."limit3 =".$this->limit3;
			$and=" and ";
		}
		if($this->name_fund!="")
		{
			$whereQuery.=$and."name_fund ='".$this->name_fund."'";
			$and=" and ";
		}
		if($this->nav!="")
		{
			$whereQuery.=$and."nav ='".$this->nav."'";
			$and=" and ";
		}
		if($this->date_nav!="")
		{
			$whereQuery.=$and."date_nav =".$this->date_nav;
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
	
	function InsertIsin()
	{
		$InsArr=$this->isinArr;
		$InsArr['id']="NULL";

		
		$InsArr['code']="'".$this->code."'";
		$InsArr['name']="'".$this->name."'";
		$InsArr['id_currency']="'".$this->id_currency."'";
		//$InsArr['limit1']=$this->limit1;
		//$InsArr['limit2']=$this->limit2;
		//$InsArr['limit3']=$this->limit3;
		$InsArr['name_fund']="'".$this->name_fund."'";
		$InsArr['nav']="'".$this->code."'";
		$InsArr['date_nav']="'".$this->date_nav."'";
		$InsArr['unique_id']="'".$this->unique_id."'";
		$InsArr['transferagent']="'".$this->transferagent."'";
		$InsArr['bicta']="'".$this->bicta."'";
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		print $this->InsertQuery($InsArr);
		if(mysql_affected_rows()>0)$msg="Added Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function UpdateIsin()
	{
		$InsArr=$this->isinArr;
		$InsArr['id']=$this->id;
		$InsArr['code']=$this->code;
		$InsArr['name']=$this->name;
		$InsArr['id_currency']=$this->id_currency;
		$InsArr['limit1']=$this->limit1;
		$InsArr['limit2']=$this->limit2;
		$InsArr['limit3']=$this->limit3;
		$InsArr['name_fund']=$this->name_fund;
		$InsArr['nav']=$this->nav;
		$InsArr['date_nav']=$this->date_nav;
		$InsArr['unique_id']=$this->unique_id;
		
		$updateArr=$InsArr;
		unset($updateArr['id']);
		unset($updateArr['code']);
		unset($updateArr['name']);
		unset($updateArr['id_currency']);
		unset($updateArr['limit1']);
		unset($updateArr['limit2']);
		unset($updateArr['limit3']);
		unset($updateArr['name_fund']);
		unset($updateArr['nav']);
		unset($updateArr['date_nav']);
		unset($updateArr['unique_id']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function DeleteIsin()
	{
		$InsArr=$this->isinArr;
		$InsArr['id']=$this->id;
		$InsArr['code']=$this->code;
		$InsArr['name']=$this->name;
		$InsArr['id_currency']=$this->id_currency;
		$InsArr['limit1']=$this->limit1;
		$InsArr['limit2']=$this->limit2;
		$InsArr['limit3']=$this->limit3;
		$InsArr['name_fund']=$this->name_fund;
		$InsArr['nav']=$this->nav;
		$InsArr['date_nav']=$this->date_nav;
		$InsArr['unique_id']=$this->unique_id;
		
		unset($InsArr['id']);
		unset($InsArr['code']);
		unset($InsArr['name']);
		unset($InsArr['id_currency']);
		unset($InsArr['limit1']);
		unset($InsArr['limit2']);
		unset($InsArr['limit3']);
		unset($InsArr['name_fund']);
		unset($InsArr['nav']);
		unset($InsArr['date_nav']);
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