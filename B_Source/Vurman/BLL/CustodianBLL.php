<?php
Class CustodianClass extends ChildCoreClass
{
	public $id;
	public $cpid;
	public $counterparty;
	public $biccp;
	public $custid;
	public $custodian;
	public $biccust;
	public $cpacwithcust;
	
	function __construct($db)
	{
		$tabName="custodian"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->custodianArr=$arr;
	}
	
	function GetCustodianUsingArray()
	{
		$arr=array();
		$query="select * from ".$this->TableName;
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
	}
		
	function SearchCustodian()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->cpid!="")
		{
			$whereQuery.=$and."cpid ='".$this->cpid."'";
			$and=" and ";
		}
		
		if($this->counterparty!="")
		{
			$whereQuery.=$and."counterparty ='".$this->counterparty."'";
			$and=" and ";
		}
		
		if($this->biccp!="")
		{
			$whereQuery.=$and."biccp ='".$this->biccp."'";
			$and=" and ";
		}
		if($this->custid!="")
		{
			$whereQuery.=$and."custid =".$this->custid;
			$and=" and ";
		}
		if($this->custodian!="")
		{
			$whereQuery.=$and."custodian ='".$this->custodian."'";
			$and=" and ";
		}
		if($this->biccust!="")
		{
			$whereQuery.=$and."biccust ='".$this->biccust."'";
			$and=" and ";
		}
		if($this->cpacwithcust!="")
		{
			$whereQuery.=$and."cpacwithcust ='".$this->cpacwithcust."'";
			$and=" and ";
		}
		
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		//echo $SearchQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	
	function GetCustodianUsingJSON()
	{
		$resArr=$this->SearchCustodian();
				
		$JsonStr="<script type=\"text/javascript\">";
		$JsonStr.="var JSONCustodian=[";
		$comma="";
		
		foreach($resArr as $item)
		{
			$JsonStr.=$comma."{";
			$JsonStr.="\"id\":\"".$item['id']."\",";
			$JsonStr.="\"cpid\":\"".$item['cpid']."\",";
			$JsonStr.="\"counterparty\":\"".$item['counterparty']."\",";
			$JsonStr.="\"biccp\":\"".$item['biccp']."\",";
			$JsonStr.="\"custid\":\"".$item['custid']."\",";
			$JsonStr.="\"custodian\":\"".$item['custodian']."\",";
			$JsonStr.="\"biccust\":\"".$item['biccust']."\",";
			$JsonStr.="\"cpacwithcust\":\"".$item['cpacwithcust']."\"";
			$JsonStr.="}";
			$comma=",";
		}
		$JsonStr.="];</script>";
		
		return $JsonStr;
	}
	
	function InsertCustodian()
	{
		$InsArr=$this->custodianArr;
		$this->GetNewID();
		
		$InsArr['id']=$this->id;
		$InsArr['cpid']=$this->cpid;
		$InsArr['counterparty']="'".$this->counterparty."'";
		$InsArr['biccp']="'".$this->biccp."'";
		$InsArr['custid']=$this->custid;
		$InsArr['custodian']="'".$this->custodian."'";
		$InsArr['biccust']="'".$this->biccust."'";
		$InsArr['cpacwithcust']="'".$this->cpacwithcust."'";
		//echo $this->InsertQuery($InsArr);
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully Into Custodian.";
		else $msg="Failed talbe Custodian.";
		return $msg;
	}
	
	function UpdateCustodian()
	{
		$InsArr=$this->custodianArr;
		$InsArr['id']=$this->id;
		$InsArr['cpid']=$this->cpid;
		$InsArr['counterparty']="'".$this->counterparty."'";
		$InsArr['biccp']="'".$this->biccp."'";
		$InsArr['custid']=$this->custid;
		$InsArr['custodian']="'".$this->custodian."'";
		$InsArr['biccust']="'".$this->biccust."'";
		$InsArr['cpacwithcust']="'".$this->cpacwithcust."'";
				
		$updateArr=$InsArr;
		//unset($updateArr['id']);
		unset($updateArr['cpid']);
		unset($updateArr['counterparty']);
		unset($updateArr['biccp']);
		unset($updateArr['custid']);
		unset($updateArr['custodian']);
		unset($updateArr['biccust']);
		unset($updateArr['cpacwithcust']);
		//echo $this->UpdateQuery($InsArr,$updateArr);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function DeleteCustodian()
	{
		$InsArr=$this->custodianArr;
		$InsArr['id']=$this->id;
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
	
	function GetTable()
	{
		return $this->ExecuteQueryReturnArray($this->db);
	}

}
?>