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
		$tabName="counterparty_setup"; 
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
			$whereQuery.=$and."counterparty_id ='".$this->cpid."'";
			$and=" and ";
		}
		
		if($this->counterparty!="")
		{
			$whereQuery.=$and."counterparty_name ='".$this->counterparty."'";
			$and=" and ";
		}
		
		if($this->biccp!="")
		{
			$whereQuery.=$and."bic_counterparty ='".$this->biccp."'";
			$and=" and ";
		}
		if($this->custid!="")
		{
			$whereQuery.=$and."custodian_id =".$this->custid;
			$and=" and ";
		}
		if($this->custodian!="")
		{
			$whereQuery.=$and."custodian_name ='".$this->custodian."'";
			$and=" and ";
		}
		if($this->biccust!="")
		{
			$whereQuery.=$and."bic_custodian ='".$this->biccust."'";
			$and=" and ";
		}
		if($this->cpacwithcust!="")
		{
			$whereQuery.=$and."counterparty_ac_custodian ='".$this->cpacwithcust."'";
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
			$JsonStr.="\"cpid\":\"".$item['counterparty_id']."\",";
			$JsonStr.="\"counterparty\":\"".$item['counterparty_name']."\",";
			$JsonStr.="\"biccp\":\"".$item['bic_counterparty']."\",";
			$JsonStr.="\"custid\":\"".$item['custodian_id']."\",";
			$JsonStr.="\"custodian\":\"".$item['custodian_name']."\",";
			$JsonStr.="\"biccust\":\"".$item['bic_custodian']."\",";
			$JsonStr.="\"cpacwithcust\":\"".$item['counterparty_ac_custodian']."\"";
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
		$InsArr['counterparty_id']=$this->cpid;
		$InsArr['counterparty_name']="'".$this->counterparty."'";
		$InsArr['bic_counterparty']="'".$this->biccp."'";
		$InsArr['custodian_id']=$this->custid;
		$InsArr['custodian_name']="'".$this->custodian."'";
		$InsArr['bic_custodian']="'".$this->biccust."'";
		$InsArr['counterparty_ac_custodian']="'".$this->cpacwithcust."'";
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
		$InsArr['counterparty_id']=$this->cpid;
		$InsArr['counterparty_name']="'".$this->counterparty."'";
		$InsArr['bic_counterparty']="'".$this->biccp."'";
		$InsArr['custodian_id']=$this->custid;
		$InsArr['custodian_name']="'".$this->custodian."'";
		$InsArr['bic_custodian']="'".$this->biccust."'";
		$InsArr['counterparty_ac_custodian']="'".$this->cpacwithcust."'";
				
		$updateArr=$InsArr;
		//unset($updateArr['id']);
		unset($updateArr['counterparty_id']);
		unset($updateArr['counterparty_name']);
		unset($updateArr['bic_counterparty']);
		unset($updateArr['custodian_id']);
		unset($updateArr['custodian_name']);
		unset($updateArr['bic_custodian']);
		unset($updateArr['counterparty_ac_custodian']);
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