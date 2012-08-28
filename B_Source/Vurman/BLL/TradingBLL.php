<?php
Class TradingClass extends ChildCoreClass
{
	public $tradingArr;
	public $id;
	public $id_client;
	public $client_reference;
	public $id_isin;
	public $fund_name;
	public $isin_reference;
	public $currency;
	public $amount;
	public $custody_ac;
	public $remarks_vfs;
	public $trade_remarks;
	public $created_at;
	public $types;
	public $status;
	public $settled_by;
	public $settled_date;
	public $status_settle;
	public $trade_date;
	public $settlement_date;
	
	function __construct($db)
	{
		$tabName="trading"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->tradingArr=$arr;
	}
	function GetTradingUsingArray()
	{
		$arr=array();
		$query="select * from trading";
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
	}
	
	function GetTradingUsingJSON()
	{
		$resArr=$this->SearchTrading();
		
		$JsonStr="<script type=\"text/javascript\">";
		$JsonStr.="var JSONTrading=[";
		$comma="";
		foreach($resArr as $item)
		{
			$JsonStr.=$comma."{";
			$JsonStr.="\"id\":\"".$item['id']."\",";
			$JsonStr.="\"id_client\":\"".$item['id_client']."\",";
			$JsonStr.="\"client_reference\":\"".$item['client_reference']."\",";
			$JsonStr.="\"id_isin\":\"".$item['id_isin']."\",";
			$JsonStr.="\"fund_name\":\"".$item['fund_name']."\",";
			$JsonStr.="\"currency\":\"".$item['currency']."\",";
			$JsonStr.="\"amount\":\"".$item['amount']."\",";
			$JsonStr.="\"custody_ac\":\"".$item['custody_ac']."\",";
			$JsonStr.="\"remarks_vfs\":\"".$item['remarks_vfs']."\",";
			$JsonStr.="\"trade_remarks\":\"".$item['trade_remarks']."\",";
			$JsonStr.="\"created_at\":\"".$item['created_at']."\",";
			$JsonStr.="\"types\":\"".$item['types']."\",";
			$JsonStr.="\"status\":\"".$item['status']."\",";
			$JsonStr.="\"settled_by\":\"".$item['settled_by']."\",";
			$JsonStr.="\"settled_date\":\"".$item['settled_date']."\",";
			$JsonStr.="\"isin_reference\":\"".$item['isin_reference']."\",";
			$JsonStr.="\"trade_date\":\"".$item['trade_date']."\",";
			$JsonStr.="\"settlement_date\":\"".$item['settlement_date']."\"";
			$JsonStr.="}";
			$comma=",";
		}
		$JsonStr.="];</script>";
		
		return $JsonStr;
	}
	
	function SearchTrading()
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
		if($this->client_reference!="")
		{
			$whereQuery.=$and."client_reference =".$this->client_reference;
			$and=" and ";
		}
		if($this->id_isin!="")
		{
			$whereQuery.=$and."id_isin like '".$this->id_isin."%'";
			$and=" and ";
		}
		if($this->fund_name!="")
		{
			$whereQuery.=$and."fund_name =".$this->fund_name;
			$and=" and ";
		}
		if($this->isin_reference!="")
		{
			$whereQuery.=$and."isin_reference =".$this->isin_reference;
			$and=" and ";
		}
		if($this->currency!="")
		{
			$whereQuery.=$and."currency =".$this->currency;
			$and=" and ";
		}
		if($this->amount!="")
		{
			$whereQuery.=$and."amount =".$this->amount;
			$and=" and ";
		}
		if($this->custody_ac!="")
		{
			$whereQuery.=$and."custody_ac =".$this->custody_ac;
			$and=" and ";
		}
		if($this->remarks_vfs!="")
		{
			$whereQuery.=$and."remarks_vfs ='".$this->remarks_vfs."'";
			$and=" and ";
		}
		if($this->trade_remarks!="")
		{
			$whereQuery.=$and."trade_remarks ='".$this->trade_remarks."'";
			$and=" and ";
		}
		if($this->created_at!="")
		{
			$whereQuery.=$and."created_at =".$this->created_at;
			$and=" and ";
		}
		if($this->types!="")
		{
			$whereQuery.=$and."types ='".$this->types."'";
			$and=" and ";
		}
		if($this->status!="")
		{
			$whereQuery.=$and."status ='".$this->status."'";
			$and=" and ";
		}
		if($this->settled_by!="")
		{
			$whereQuery.=$and."settled_by =".$this->settled_by;
			$and=" and ";
		}
		if($this->settled_date!="")
		{
			$whereQuery.=$and."settled_date =".$this->settled_date;
			$and=" and ";
		}
		
		if($this->status_settle!="" && $this->status_settle!=null)
		{
			$whereQuery.=$and." (status = 'pending' or status = 'completed') ";
			$and=" and ";
		}
		
		if($this->trade_date!="" && $this->trade_date!=null)
		{
			$whereQuery.=$and." trade_date = '".$this->trade_date."'";
			$and=" and ";
		}
		
		if($this->settlement_date!="" && $this->settlement_date!=null)
		{
			$whereQuery.=$and." settlement_date = '".$this->settlement_date."'";
			$and=" and ";
		}
		
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	function InsertTrading()
	{
		$InsArr=$this->tradingArr;
		
		$this->GetNewID();
		$InsArr['id']=$this->id;
		
		$comma="";
		$msg="";
		
		if($this->id_client=="")
		{
			$msg.=$comma."Client Id";
			$comma=", ";
		}
		if($this->client_reference== ""){
			$msg.=$comma."Reference";
			$comma=", ";
		}
		if($this->id_isin=="" || $this->id_isin==null){
			if($this->isin_reference=="")
			{
				$msg.=$comma."ISIN";
				$comma=", ";
			}
		}
		if($this->custody_ac<=0)
		{
			$msg.=$comma."Custodian AC";
			$comma=", ";
		}
		if($this->amount=="") 
		{
			$msg.=$comma."Amount";
			$comma=", ";
		}
		
		if($msg!="")
		{
			$msg="MANDATORY FIELDS * ARE: ".$msg;
			return $msg;
		}
		
		$InsArr['id_client']=$this->id_client;
		$InsArr['client_reference']="'".$this->client_reference."'";
		$InsArr['id_isin']="'".$this->id_isin."'";
		$InsArr['fund_name']="'".$this->fund_name."'";
		$InsArr['isin_reference']="'".$this->isin_reference."'";
		$InsArr['currency']=$this->currency;
		$InsArr['amount']=$this->amount;
		$InsArr['custody_ac']=$this->custody_ac;
		$InsArr['remarks_vfs']="'".$this->remarks_vfs."'";
		$InsArr['trade_remarks']="'".$this->trade_remarks."'";
		$InsArr['created_at']="now()";
		$InsArr['types']="'".$this->types."'";
		$InsArr['status']="'".$this->status."'";
		
		$InsArr['trade_date']="'".$this->trade_date."'";
		$InsArr['settlement_date']="'".$this->settlement_date."'";
		
		unset($InsArr['settled_by']);
		unset($InsArr['settled_date']);
		//echo $this->InsertQuery($InsArr);
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Your request was added successfully";
		else $msg="Failed.";
		return $msg;
	}
	
	function UpdateTradingStatus()
	{
		$InsArr=$this->tradingArr;
		$InsArr['id']=$this->id;
		$InsArr['status']="'".$this->status."'";
		$InsArr['settled_by']=$this->settled_by;
		$InsArr['settled_date']="now()";
		
		unset($InsArr['id_client']);
		unset($InsArr['client_reference']);
		unset($InsArr['id_isin']);
		unset($InsArr['fund_name']);
		unset($InsArr['isin_reference']);
		unset($InsArr['currency']);
		unset($InsArr['amount']);
		unset($InsArr['custody_ac']);
		
		unset($InsArr['remarks_vfs']);
		unset($InsArr['trade_remarks']);
		unset($InsArr['created_at']);
		unset($InsArr['types']);
		unset($InsArr['trade_date']);
		unset($InsArr['settlement_date']);
		
		$updateArr=$InsArr;
		
		unset($updateArr['status']);
		unset($updateArr['settled_by']);
		unset($updateArr['settled_date']);
		
		//echo $this->UpdateQuery($InsArr,$updateArr);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function UpdateTrading()
	{
		$InsArr=$this->tradingArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['client_reference']=$this->client_reference;
		$InsArr['id_isin']="'".$this->id_isin."'";
		$InsArr['fund_name']=$this->fund_name;
		$InsArr['isin_reference']=$this->isin_reference;
		$InsArr['currency']=$this->currency;
		$InsArr['amount']=$this->amount;
		$InsArr['custody_ac']=$this->custody_ac;
		$InsArr['remarks_vfs']=$this->remarks_vfs;
		$InsArr['trade_remarks']=$this->trade_remarks;
		$InsArr['created_at']=$this->created_at;
		$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		$InsArr['settled_by']=$this->settled_by;
		$InsArr['settled_date']=$this->settled_date;
		$InsArr['trade_date']="'".$this->trade_date."'";
		$InsArr['settlement_date']="'".$this->settlement_date."'";
		
		$updateArr=$InsArr;
		unset($updateArr['id']);
		unset($updateArr['id_client']);
		unset($updateArr['client_reference']);
		unset($updateArr['id_isin']);
		unset($updateArr['fund_name']);
		unset($updateArr['isin_reference']);
		unset($updateArr['currency']);
		unset($updateArr['amount']);
		unset($updateArr['custody_ac']);
		unset($updateArr['remarks_vfs']);
		unset($updateArr['trade_remarks']);
		unset($updateArr['created_at']);
		unset($updateArr['types']);
		unset($updateArr['status']);
		unset($updateArr['settled_by']);
		unset($updateArr['settled_date']);
		unset($updateArr['trade_date']);
		unset($updateArr['settlement_date']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
		}
	function DeleteTrading()
	{
		$InsArr=$this->tradingArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['client_reference']=$this->client_reference;
		$InsArr['id_isin']="'".$this->id_isin."'";
		$InsArr['fund_name']=$this->fund_name;
		$InsArr['isin_reference']=$this->isin_reference;
		$InsArr['currency']=$this->currency;
		$InsArr['amount']=$this->amount;
		$InsArr['custody_ac']=$this->custody_ac;
		$InsArr['remarks_vfs']=$this->remarks_vfs;
		$InsArr['trade_remarks']=$this->trade_remarks;
		$InsArr['created_at']=$this->created_at;
		$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		$InsArr['settled_by']=$this->settled_by;
		$InsArr['settled_date']=$this->settled_date;
		
		unset($InsArr['id']);
		unset($InsArr['id_client']);
		unset($InsArr['client_reference']);
		unset($InsArr['id_isin']);
		unset($InsArr['fund_name']);
		unset($InsArr['isin_reference']);
		unset($InsArr['currency']);
		unset($InsArr['amount']);
		unset($InsArr['custody_ac']);
		unset($InsArr['remarks_vfs']);
		unset($InsArr['trade_remarks']);
		unset($InsArr['created_at']);
		unset($InsArr['types']);
		unset($InsArr['status']);
		unset($InsArr['settled_by']);
		unset($InsArr['settled_date']);
		unset($InsArr['trade_date']);
		unset($InsArr['settlement_date']);
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