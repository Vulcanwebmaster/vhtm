<?php
Class CurrencyClass extends ChildCoreClass
{
	public $currencyArr;
	public $id;
	public $name;
	public $abbreviation;
	
	function __construct($db)
	{
		$tabName="currency"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->currencyArr=$arr;
	}
	
	function GetCurrencyUsingArray()
	{
		$arr=array();
		$query="select * from ".$this->TableName;
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
	}
	
	function GetCurrencyJSON()
	{
		$resArr=$this->SearchCurrency();
		
		$JsonStr="<script type=\"text/javascript\">";
		$JsonStr.="var JSONCurrency=[";
		$comma="";
		foreach($resArr as $item)
		{
			$JsonStr.=$comma."{";
			$JsonStr.="\"id\":\"".$item['id']."\",";
			$JsonStr.="\"name\":\"".$item['name']."\",";
			$JsonStr.="\"abbreviation\":\"".$item['abbreviation']."\"";
			$JsonStr.="}";
			$comma=",";
		}
		$JsonStr.="];</script>";
		
		return $JsonStr;
	}
	
	function SearchCurrency()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->name!="")
		{
			$whereQuery.=$and."name =".$this->name;
			$and=" and ";
		}
		if($this->abbreviation!="")
		{
			$whereQuery.=$and."abbreviation =".$this->abbreviation;
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	
	function InsertCurrency()
	{
		$InsArr=$this->currencyArr;
		$InsArr['id']=$this->id;
		$InsArr['name']=$this->name;
		$InsArr['abbreviation']=$this->abbreviation;
		
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function UpdateCurrency()
	{
		$InsArr=$this->currencyArr;
		$InsArr['id']=$this->id;
		$InsArr['name']=$this->name;
		$InsArr['abbreviation']=$this->abbreviation;
		
		$updateArr=$InsArr;
		unset($updateArr['id']);
		unset($updateArr['name']);
		unset($updateArr['abbreviation']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function DeleteCurrency()
	{
		$InsArr=$this->currencyArr;
		$InsArr['id']=$this->id;
		$InsArr['name']=$this->name;
		$InsArr['abbreviation']=$this->abbreviation;
		
		unset($InsArr['id']);
		unset($InsArr['name']);
		unset($InsArr['abbreviation']);
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