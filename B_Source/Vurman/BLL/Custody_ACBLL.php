<?php
Class Custody_ACClass extends ChildCoreClass
{
	public $custody_acArr;
	public $id;
	public $id_client;
	public $name;
	
	function __construct($db)
	{
		$tabName="custody_ac"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->custody_acArr=$arr;
	}

	
	function GetCustody_ACUsingArray()
	{
		$arr=array();
		$query="select * from ".$this->TableName;
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
	}
	
	function SearchCustody_AC()
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
			$whereQuery.=$and."id_client like '".$this->id_client."%'";
			$and=" and ";
		}
		if($this->name!="")
		{
			$whereQuery.=$and."name =".$this->name;
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	
	function GetCustodyACJSON()
	{
		$resArr=$this->SearchCustody_AC();
		
		$JsonStr="<script type=\"text/javascript\">";
		$JsonStr.="var JSONCustodyAC=[";
		$comma="";
		foreach($resArr as $item)
		{
			$JsonStr.=$comma."{";
			$JsonStr.="\"id\":\"".$item['id']."\",";
			$JsonStr.="\"id_client\":\"".$item['id_client']."\",";
			$JsonStr.="\"name\":\"".$item['name']."\"";
			$JsonStr.="}";
			$comma=",";
		}
		$JsonStr.="];</script>";
		
		return $JsonStr;
	}
	
	function InsertCustody_AC()
	{
		$InsArr=$this->custody_acArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['name']=$this->name;
		
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function UpdateCustody_AC()
	{
		$InsArr=$this->custody_acArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['name']=$this->name;
		
		$updateArr=$InsArr;
		unset($updateArr['id']);
		unset($updateArr['id_client']);
		unset($updateArr['name']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function DeleteCustody_AC()
	{
		$InsArr=$this->custody_acArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['name']=$this->name;
		
		unset($InsArr['id']);
		unset($InsArr['id_client']);
		unset($InsArr['name']);
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