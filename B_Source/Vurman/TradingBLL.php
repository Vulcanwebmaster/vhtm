<?php
Class TradingClass extends ChildCoreClass
{
	public $tradingArr;
	public $id;
	public $client_id;
	public $reference;
	public $isin;		public $client_name;
	public $fund_name;
	public $unknown_isin;
	public $currency;
	public $quantity;
	public $custody_ac;
	public $remarks_vurman;
	public $trade_remarks;
	//public $created_at;
	public $types;
	public $status;
	//public $settled_by;
	//public $settled_date;
	//public $status_settle;
	public $trade_date;
	public $value_date;
	
	function __construct($db)
	{
		$tabName="trading_execution"; 
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
			$JsonStr.="\"id_client\":\"".$item['client_id']."\",";
			$JsonStr.="\"reference\":\"".$item['reference']."\",";
			$JsonStr.="\"id_isin\":\"".$item['isin']."\",";
			$JsonStr.="\"fund_name\":\"".$item['fund_name']."\",";
			$JsonStr.="\"currency\":\"".$item['currency']."\",";
			$JsonStr.="\"amount\":\"".$item['amount']."\",";
			$JsonStr.="\"custody_ac\":\"".$item['custody_ac']."\",";
			$JsonStr.="\"remarks_vfs\":\"".$item['remarks_vurman']."\",";
			$JsonStr.="\"trade_remarks\":\"".$item['trade_remarks']."\",";
			//$JsonStr.="\"created_at\":\"".$item['created_at']."\",";
			$JsonStr.="\"types\":\"".$item['types']."\",";
			$JsonStr.="\"status\":\"".$item['status']."\",";
			//$JsonStr.="\"settled_by\":\"".$item['settled_by']."\",";
			//$JsonStr.="\"settled_date\":\"".$item['settled_date']."\",";
			$JsonStr.="\"isin_reference\":\"".$item['unknown_isin']."\",";
			$JsonStr.="\"trade_date\":\"".$item['trade_date']."\",";
			$JsonStr.="\"settlement_date\":\"".$item['value_date']."\"";
			$JsonStr.="}";
			$comma=",";
		}
		$JsonStr.="];</script>";
		
		return $JsonStr;
	}
	
	function SearchTrading()
	{		echo "Run to test";
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->client_id!="")
		{
			$whereQuery.=$and."client_id =".$this->client_id;
			$and=" and ";
		}
		if($this->reference!="")
		{
			$whereQuery.=$and."reference =".$this->reference;
			$and=" and ";
		}
		if($this->isin!="")
		{
			$whereQuery.=$and."isin like '".$this->isin."%'";
			$and=" and ";
		}
		if($this->fund_name!="")
		{
			$whereQuery.=$and."fund_name =".$this->fund_name;
			$and=" and ";
		}
		if($this->unknown_isin!="")
		{
			$whereQuery.=$and."unknown_isin =".$this->unknown_isin;
			$and=" and ";
		}
		if($this->currency!="")
		{
			$whereQuery.=$and."currency =".$this->currency;
			$and=" and ";
		}
		if($this->quantity!="")
		{
			$whereQuery.=$and."quantity =".$this->quantity;
			$and=" and ";
		}
		if($this->custody_ac!="")
		{
			$whereQuery.=$and."custody_ac =".$this->custody_ac;
			$and=" and ";
		}
		if($this->remarks_vurman!="")
		{
			$whereQuery.=$and."remarks_vurman ='".$this->remarks_vurman."'";
			$and=" and ";
		}
		if($this->trade_remarks!="")
		{
			$whereQuery.=$and."trade_remarks ='".$this->trade_remarks."'";
			$and=" and ";
		}
		if($this->status!="")
		{
			$whereQuery.=$and."status ='".$this->status."'";
			$and=" and ";
		}
		/*if($this->settled_by!="")
		{
			$whereQuery.=$and."settled_by =".$this->settled_by;
			$and=" and ";
		}*/
		/*if($this->settled_date!="")
		{
			$whereQuery.=$and."settled_date =".$this->settled_date;
			$and=" and ";
		}*/
		
		/*if($this->status_settle!="" && $this->status_settle!=null)
		{
			$whereQuery.=$and." (status = 'pending' or status = 'completed') ";
			$and=" and ";
		}*/
		
		if($this->trade_date!="" && $this->trade_date!=null)
		{
			$whereQuery.=$and." trade_date = '".$this->trade_date."'";
			$and=" and ";
		}
		
		if($this->value_date!="" && $this->value_date!=null)
		{
			$whereQuery.=$and." value_date = '".$this->value_date."'";
			$and=" and ";
		}		if($this->types!=""&&$this->types!=null)		{			$whereQuery.=$and." types = '".$this->types."'";			$and=" and ";		}
		
		$searchQuery="select * from ".$this->TableName;		echo $searchQuery;
		if($whereQuery!="") $searchQuery.=" where " .$whereQuery;
		$result=$this->ExcuteQuery($searchQuery);
		return $result;
	}
	function InsertTrading()
	{
		$InsArr=$this->tradingArr;
		
		$this->GetNewID();
		$InsArr['id']=$this->id;
		
		$comma="";
		$msg="";
		
		if($this->client_id=="")
		{
			$msg.=$comma."Client Id";
			$comma=", ";
		}
		if($this->reference== ""){
			$msg.=$comma."Reference";
			$comma=", ";
		}
		if($this->isin=="" || $this->isin==null){
			if($this->unknown_isin=="")
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
		if($this->quantity=="") 
		{
			$msg.=$comma."Amount";
			$comma=", ";
		}
		
		if($msg!="")
		{
			$msg="MANDATORY FIELDS * ARE: ".$msg;
			return $msg;
		}
		
		$InsArr['client_id']=$this->client_id;
		$InsArr['reference']="'".$this->reference."'";				$InsArr['isin']='"'.$this->isin.'"';
		$InsArr['fund_name']="'".$this->fund_name."'";				// Hoang Add- client name				$InsArr['client_name']="'".$this->client_name."'";
		$InsArr['unknown_isin']="'".$this->unknown_isin."'";
		$InsArr['currency']=$this->currency;
		$InsArr['quantity']=$this->quantity;
		$InsArr['custody_ac']=$this->custody_ac;
		$InsArr['remarks_vurman']="'".$this->remarks_vurman."'";
		$InsArr['trade_remarks']="'".$this->trade_remarks."'";
		//$InsArr['created_at']="now()";
		$InsArr['types']="'".$this->types."'";
		$InsArr['status']="'".$this->status."'";
		
		$InsArr['trade_date']="'".$this->trade_date."'";
		$InsArr['value_date']="'".$this->value_date."'";
		
		//unset($InsArr['settled_by']);
		//unset($InsArr['settled_date']);				
		//echo $this->InsertQuery($InsArr);
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)		{			if($_SESSION['gender']=="male")			{			$msg="WELL DONE, BROTHER! (THIS IS A CLOSE MALE FRIEND)";			}			else			{				if($_SESSION['gender']=='female')
					$msg="WELL DONE, SISTER! (THIS IS A CLOSE FEMALE FRIEND)";				else					$msg="Your order was added successfully";
			}					}
		else			{							}
		return $msg;
	}
	
	function UpdateTradingStatus()
	{
		$InsArr=$this->tradingArr;
		$InsArr['id']=$this->id;
		$InsArr['status']="'".$this->status."'";
		//$InsArr['settled_by']=$this->settled_by;
		//$InsArr['settled_date']="now()";
		
		unset($InsArr['client_id']);
		unset($InsArr['reference']);
		unset($InsArr['isin']);
		unset($InsArr['fund_name']);
		unset($InsArr['unknown_isin']);
		unset($InsArr['currency']);
		unset($InsArr['quantity']);
		unset($InsArr['custody_ac']);
		
		unset($InsArr['remarks_vurman']);
		unset($InsArr['trade_remarks']);
		//unset($InsArr['created_at']);
		unset($InsArr['types']);
		unset($InsArr['trade_date']);
		unset($InsArr['value_date']);
		
		$updateArr=$InsArr;
		
		unset($updateArr['status']);
		//unset($updateArr['settled_by']);
		//unset($updateArr['settled_date']);
		
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
		$InsArr['client_id']=$this->client_id;
		$InsArr['reference']=$this->reference;
		$InsArr['isin']="'".$this->isin."'";
		$InsArr['fund_name']=$this->fund_name;
		$InsArr['unknown_isin']=$this->unknown_isin;
		$InsArr['currency']=$this->currency;
		$InsArr['quantity']=$this->quantity;
		$InsArr['custody_ac']=$this->custody_ac;
		$InsArr['remarks_vurman']=$this->remarks_vurman;
		$InsArr['trade_remarks']=$this->trade_remarks;
		//$InsArr['created_at']=$this->created_at;
		$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		//$InsArr['settled_by']=$this->settled_by;
		//$InsArr['settled_date']=$this->settled_date;
		$InsArr['trade_date']="'".$this->trade_date."'";
		$InsArr['value_date']="'".$this->value_date."'";
		
		$updateArr=$InsArr;
		unset($updateArr['id']);
		unset($updateArr['client_id']);
		unset($updateArr['reference']);
		unset($updateArr['isin']);
		unset($updateArr['fund_name']);
		unset($updateArr['unknown_isin']);
		unset($updateArr['currency']);
		unset($updateArr['quantity']);
		unset($updateArr['custody_ac']);
		unset($updateArr['remarks_vurman']);
		unset($updateArr['trade_remarks']);
		//unset($updateArr['created_at']);
		unset($updateArr['types']);
		unset($updateArr['status']);
		//unset($updateArr['settled_by']);
		//unset($updateArr['settled_date']);
		unset($updateArr['trade_date']);
		unset($updateArr['value_date']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
		}
	function DeleteTrading()
	{
		$InsArr=$this->tradingArr;
		$InsArr['id']=$this->id;
		$InsArr['client_id']=$this->client_id;
		$InsArr['reference']=$this->reference;
		$InsArr['isin']="'".$this->isin."'";
		$InsArr['fund_name']=$this->fund_name;
		$InsArr['unknown_isin']=$this->unknown_isin;
		$InsArr['currency']=$this->currency;
		$InsArr['quantity']=$this->quantity;
		$InsArr['custody_ac']=$this->custody_ac;
		$InsArr['remarks_vurman']=$this->remarks_vurman;
		$InsArr['trade_remarks']=$this->trade_remarks;
		//$InsArr['created_at']=$this->created_at;
		$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		//$InsArr['settled_by']=$this->settled_by;
		//$InsArr['settled_date']=$this->settled_date;
		
		unset($InsArr['id']);
		unset($InsArr['client_id']);
		unset($InsArr['reference']);
		unset($InsArr['isin']);
		unset($InsArr['fund_name']);
		unset($InsArr['unknown_isin']);
		unset($InsArr['currency']);
		unset($InsArr['quantity']);
		unset($InsArr['custody_ac']);
		unset($InsArr['remarks_vurman']);
		unset($InsArr['trade_remarks']);
		//unset($InsArr['created_at']);
		unset($InsArr['types']);
		unset($InsArr['status']);
		//unset($InsArr['settled_by']);
		//unset($InsArr['settled_date']);
		unset($InsArr['trade_date']);
		unset($InsArr['value_date']);
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