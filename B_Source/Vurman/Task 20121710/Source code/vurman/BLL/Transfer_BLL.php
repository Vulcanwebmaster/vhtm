<?php
Class TransferClass extends ChildCoreClass
{
	public $transfers_newArr;
	public $id;
	public $client_id;
	public $reference;		public $client_name;
	public $isin;		public $currency;
	public $fund_name;
	public $unknown_isin;
	public $quantity;
	public $custody_ac;
	public $trade_date;
	public $value_date;
	public $counterparty_id;
	public $counterparty_name;
	public $bic_counterparty;
	public $custodian_id;
	public $custodian_name;
	public $bic_custodian;
	public $counterparty_ac_custodian;
	public $transfer_agent_name;
	public $bic_transfer_agent;
	public $custodian_ac_transfer_agent;
	//public $comment;
	public $created_at;
	public $types;
	public $status;
	public $workername;
	//public $transaction_type;
	//public $settled_by;
	//public $settled_date;
	
	public $from_date;
	public $to_date;
	
	//public $status_settle;
	
	function __construct($db)
	{
		$tabName="settlement_instruction"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->transfers_newArr=$arr;
	}
	function GetTransferUsingArray()
	{
		$arr=array();
		$query="select * from ".$this->TableName;
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
	}
	
	function GetTransferUsingJSON()
	{
		$resArr=$this->SearchTransfer();
		
		$JsonStr="<script type=\"text/javascript\">";
		$JsonStr.="var JSONTransfer=[";
		$comma="";
		foreach($resArr as $item)
		{
			$JsonStr.=$comma."{";
			$JsonStr.="\"id\":\"".$item['id']."\",";
			$JsonStr.="\"id_client\":\"".$item['client_id']."\",";
			$JsonStr.="\"client_reference\":\"".$item['reference']."\",";						
			$JsonStr.="\"client_name\":\"".$item['client_name']."\",";
			$JsonStr.="\"id_isin\":\"".$item['isin']."\",";
			$JsonStr.="\"fund_name\":\"".$item['fund_name']."\",";
			$JsonStr.="\"currency\":\"".$item['currency']."\",";
			$JsonStr.="\"amount\":\"".$item['quantity']."\",";
			$JsonStr.="\"custody_ac\":\"".$item['custody_ac']."\",";
			$JsonStr.="\"trade_date\":\"".$item['trade_date']."\",";
			$JsonStr.="\"settlement_date\":\"".$item['value_date']."\",";
			$JsonStr.="\"sellerid\":\"".$item['counterparty_id']."\",";
			$JsonStr.="\"seller\":\"".$item['counterparty_name']."\",";
			$JsonStr.="\"bic_seller\":\"".$item['bic_counterparty']."\",";
			$JsonStr.="\"custodianid\":\"".$item['custodian_id']."\",";
			$JsonStr.="\"custodian\":\"".$item['custodian_name']."\",";
			$JsonStr.="\"bic_custodian\":\"".$item['bic_custodian']."\",";
			$JsonStr.="\"seller_ac_cust\":\"".$item['counterparty_ac_custodian']."\",";
			$JsonStr.="\"transfer_agent\":\"".$item['transfer_agent_name']."\",";
			$JsonStr.="\"bic_ta\":\"".$item['bic_transfer_agent']."\",";
			$JsonStr.="\"cust_ac_ta\":\"".$item['custodian_ac_transfer_agent']."\",";
			//$JsonStr.="\"comment\":\"".$item['comment']."\",";
			$JsonStr.="\"created_at\":\"".$item['created_at']."\",";
			//$JsonStr.="\"types\":\"".$item['types']."\",";
			$JsonStr.="\"status\":\"".$item['status']."\",";
			$JsonStr.="\"types\":\"".$item['types']."\",";
			//$JsonStr.="\"settled_by\":\"".$item['settled_by']."\",";
			//$JsonStr.="\"settled_date\":\"".$item['settled_date']."\",";
			$JsonStr.="\"comment\":\"".$item['unknown_isin']."\"";
			$JsonStr.="}";
			$comma=",";
		}
		$JsonStr.="];</script>";
		
		return $JsonStr;
	}
	
	function SearchTransfer()
	{
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
		if($this->client_name!="")
		{
			$whereQuery.=$and."client_name=".$this->client_name;
			$and=" and ";
		}
		if($this->isin!="")
		{
			$whereQuery.=$and.'isin like "'.$this->isin.'%"';
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
		if($this->trade_date!="")
		{
			$whereQuery.=$and."trade_date =".$this->trade_date;
			$and=" and ";
		}
		if($this->value_date!="")
		{
			$whereQuery.=$and."value_date =".$this->value_date;
			$and=" and ";
		}
		if($this->counterparty_id!="")
		{
			$whereQuery.=$and."counterparty_id =".$this->counterparty_id;
			$and=" and ";
		}
		if($this->counterparty_name!="")
		{
			$whereQuery.=$and."counterparty_name =".$this->counterparty_name;
			$and=" and ";
		}
		if($this->bic_counterparty!="")
		{
			$whereQuery.=$and."bic_counterparty =".$this->bic_counterparty;
			$and=" and ";
		}
		if($this->custodian_id!="")
		{
			$whereQuery.=$and."custodian_id =".$this->custodian_id;
			$and=" and ";
		}
		if($this->custodian_name!="")
		{
			$whereQuery.=$and."custodian_name =".$this->custodian_name;
			$and=" and ";
		}
		if($this->bic_custodian!="")
		{
			$whereQuery.=$and."bic_custodian =".$this->bic_custodian;
			$and=" and ";
		}
		if($this->counterparty_ac_custodian!="")
		{
			$whereQuery.=$and."counterparty_ac_custodian =".$this->counterparty_ac_custodian;
			$and=" and ";
		}
		if($this->transfer_agent_name!="")
		{
			$whereQuery.=$and."transfer_agent_name =".$this->transfer_agent_name;
			$and=" and ";
		}
		if($this->bic_transfer_agent!="")
		{
			$whereQuery.=$and."bic_transfer_agent =".$this->bic_transfer_agent;
			$and=" and ";
		}
		if($this->custodian_ac_transfer_agent!="")
		{
			$whereQuery.=$and."custodian_ac_transfer_agent =".$this->custodian_ac_transfer_agent;
			$and=" and ";
		}
		/*if($this->comment!="")
		{
			$whereQuery.=$and."comment =".$this->comment;
			$and=" and ";
		}*/
		if($this->created_at!="")
		{
			$whereQuery.=$and."created_at =".$this->created_at;
			$and=" and ";
		}		/*else {
						$this->comment=NULL;
		}*/
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
		/*if($this->transaction_type!="")
		{
			$whereQuery.=$and."transaction_type ='".$this->transaction_type."'";
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
		}*/
		
		if($this->from_date!="" && $this->to_date!="")
		{
			$whereQuery.=$and." value_date between '".$this->from_date."' and '".$this->to_date."'";
			$and=" and ";
		}
		else if($this->from_date!="" && $this->to_date=="")
		{
			$whereQuery.=$and." value_date >= '".$this->from_date."'";
			$and=" and ";
		}
		else if($this->from_date=="" && $this->to_date!="")
		{
			$whereQuery.=$and." value_date <= '".$this->to_date."'";
			$and=" and ";
		}
		
		/*if($this->status!="" && $this->status!=null)
		{
			$whereQuery.=$and." (status = 'pending' or status = 'completed') ";
			$and=" and ";
		}*/
		
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") 		
		{			
			$SearchQuery.=" where " .$whereQuery;					
		}		
		$SearchQuery.=" order by created_at desc";		
		

		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	function InsertTransfer()
	{
		$InsArr=$this->transfers_newArr;
		$this->GetNewID();
		$InsArr['id']=$this->id;
		
		if($this->client_id=="")
		{
			return "Please Enter Client Id";
		}
		else if($this->reference== ""){
			return "Reference cannot blank.";
		}
		else if($this->isin=="" || $this->isin==null){
			if($this->unknown_isin=="")
			{
				return "Please select id ISIN or Reference Number";
			}
		}
		else if($this->custody_ac<=0)
		{
			return "Please select Custodian AC";
		}
		else if($this->quantity=="") return "Amount cannot be blank.";
		else if($this->trade_date=="") return "Please enter a trade date.";
		else if($this->value_date=="") return "Please enter a settlement date.";
		else if($this->counterparty_name=="") return "Seller cannot be blank.";
		else if($this->custodian_name=="") return "Custodian cannot be blank.";
		
		
		$InsArr['client_id']=$this->client_id;
		$InsArr['reference']="'".$this->reference."'";		$InsArr['isin']='"'.$this->isin.'"';		$InsArr['client_name']="'".$this->client_name."'";		
		$InsArr['fund_name']="'".$this->fund_name."'";
		$InsArr['unknown_isin']="'".$this->unknown_isin."'";
		$InsArr['currency']=$this->currency;
		$InsArr['quantity']=$this->quantity;
		$InsArr['custody_ac']=$this->custody_ac;
		$InsArr['trade_date']="'".$this->trade_date."'";
		$InsArr['value_date']="'".$this->value_date."'";
		$InsArr['counterparty_id']="'".$this->counterparty_id."'";
		$InsArr['counterparty_name']="'".$this->counterparty_name."'";
		$InsArr['bic_counterparty']="'".$this->bic_counterparty."'";
		$InsArr['custodian_id']="'".$this->custodian_id."'";
		$InsArr['custodian_name']="'".$this->custodian_name."'";
		$InsArr['bic_custodian']="'".$this->bic_custodian."'";
		$InsArr['counterparty_ac_custodian']="'".$this->counterparty_ac_custodian."'";
		$InsArr['transfer_agent_name']="'".$this->transfer_agent_name."'";
		$InsArr['bic_transfer_agent']="'".$this->bic_transfer_agent."'";
		$InsArr['custodian_ac_transfer_agent']="'".$this->custodian_ac_transfer_agent."'";
		//$InsArr['comment']="'".$this->comment."'";
		$InsArr['created_at']="now()";
		$InsArr['types']="'".$this->types."'";
		$InsArr['status']="'".$this->status."'";
		$InsArr['workername']="'".$this->workername."'";
		//$InsArr['transaction_type']="'".$this->transaction_type."'";
		//unset($InsArr['settled_by']);
		//unset($InsArr['settled_date']);
				// Print Result query for testing
		//echo $this->InsertQuery($InsArr);
		
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)		{		$msg="Your order was added successfully<br/>";				}
		else $msg="SORRY, YOUR ORDER FAILED. PLEASE CONTACT HELP DESK.";
		return $msg;
	}
	
	
	function UpdateTransferDetails()
	{
		$InsArr=$this->transfers_newArr;
		$InsArr['id']=$this->id;
		$InsArr['counterparty_ac_custodian']="'".$this->counterparty_ac_custodian."'";
		$InsArr['transfer_agent_name']="'".$this->transfer_agent_name."'";
		$InsArr['bic_transfer_agent']="'".$this->bic_transfer_agent."'";
		$InsArr['custodian_ac_transfer_agent']="'".$this->custodian_ac_transfer_agent."'";
		$InsArr['status']="'".$this->status."'";
		unset($InsArr['client_id']);
		unset($InsArr['reference']);
		unset($InsArr['isin']);
		unset($InsArr['fund_name']);
		unset($InsArr['unknown_isin']);
		unset($InsArr['currency']);
		unset($InsArr['quantity']);
		unset($InsArr['custody_ac']);
		unset($InsArr['trade_date']);
		unset($InsArr['value_date']);
		unset($InsArr['counterparty_id']);
		unset($InsArr['counterparty_name']);
		unset($InsArr['bic_counterparty']);
		unset($InsArr['custodian_id']);
		unset($InsArr['custodian_name']);
		unset($InsArr['bic_custodian']);
		//unset($InsArr['settled_by']);
		//unset($InsArr['settled_date']);
		//unset($InsArr['comment']);
		unset($InsArr['created_at']);
		unset($InsArr['types']);
		unset($InsArr['status']);				unset($InsArr['client_name']);
		//unset($InsArr['transaction_type']);

		
		$updateArr=$InsArr;
		
		unset($updateArr['bic_transfer_agent']);
		unset($updateArr['counterparty_ac_custodian']);
		unset($updateArr['transfer_agent_name']);
		unset($updateArr['custodian_ac_transfer_agent']);
				//echo $this->UpdateQuery($InsArr,$updateArr);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully";
		else $msg="Failed.";
		return $msg;
	}
	
	function UpdateTransferStatus()
	{
		$InsArr=$this->transfers_newArr;
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
		unset($InsArr['trade_date']);
		unset($InsArr['value_date']);
		unset($InsArr['counterparty_id']);
		unset($InsArr['counterparty_name']);
		unset($InsArr['bic_counterparty']);
		unset($InsArr['custodian_id']);
		unset($InsArr['custodian_name']);
		unset($InsArr['bic_custodian']);
		unset($InsArr['counterparty_ac_custodian']);
		unset($InsArr['transfer_agent_name']);
		unset($InsArr['bic_transfer_agent']);
		unset($InsArr['custodian_ac_transfer_agent']);
		unset($InsArr['comment']);
		unset($InsArr['created_at']);
		unset($InsArr['types']);				unset($InsArr['client_name']);
		//unset($InsArr['transaction_type']);

		
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
	
	function UpdateTransfer()
	{
		$InsArr=$this->transfers_newArr;
		$InsArr['id']=$this->id;
		$InsArr['client_id']=$this->client_id;
		$InsArr['reference']="'".$this->reference."'";				$InsArr['client_name']="'".$this->client_name."'";
		$InsArr['isin']='"'.$this->isin.'"';
		$InsArr['fund_name']="'".$this->fund_name."'";
		$InsArr['unknown_isin']="'".$this->unknown_isin."'";
		$InsArr['currency']=$this->currency;
		$InsArr['quantity']=$this->quantity;
		$InsArr['custody_ac']=$this->custody_ac;
		$InsArr['trade_date']="'".$this->trade_date."'";
		$InsArr['value_date']="'".$this->value_date."'";
		$InsArr['counterparty_name']="'".$this->counterparty_name."'";
		$InsArr['bic_counterparty']="'".$this->bic_counterparty."'";
		$InsArr['custodian_name']="'".$this->custodian_name."'";
		$InsArr['bic_custodian']="'".$this->bic_custodian."'";
		$InsArr['counterparty_ac_custodian']="'".$this->counterparty_ac_custodian."'";
		$InsArr['transfer_agent_name']="'".$this->transfer_agent_name."'";
		$InsArr['bic_transfer_agent']="'".$this->bic_transfer_agent."'";
		$InsArr['custodian_ac_transfer_agent']="'".$this->custodian_ac_transfer_agent."'";
		//$InsArr['comment']="'".$this->comment."'";
		$InsArr['created_at']="'".$this->created_at."'";
		//$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		//$InsArr['transaction_type']=$this->transaction_type;
		//$InsArr['settled_by']=$this->settled_by;
		//$InsArr['settled_date']="'".$this->settled_date."'";
		
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
		unset($updateArr['trade_date']);
		unset($updateArr['value_date']);
		unset($updateArr['counterparty_name']);
		unset($updateArr['bic_counterparty']);
		unset($updateArr['custodian_name']);
		unset($updateArr['bic_custodian']);
		unset($updateArr['counterparty_ac_custodian']);
		unset($updateArr['transfer_agent_name']);
		unset($updateArr['bic_transfer_agent']);
		unset($updateArr['custodian_ac_transfer_agent']);
		//unset($updateArr['comment']);
		unset($updateArr['created_at']);
		unset($updateArr['types']);
		unset($updateArr['status']);
		//unset($updateArr['transaction_type']);
		//unset($updateArr['settled_by']);
		//unset($updateArr['settled_date']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
		}
	function DeleteTransfer()
	{
		$InsArr=$this->transfers_newArr;
		$InsArr['id']=$this->id;
		$InsArr['client_id']=$this->client_id;
		$InsArr['reference']="'".$this->reference."'";
		$InsArr['isin']=$this->isin;
		$InsArr['fund_name']="'".$this->fund_name."'";
		$InsArr['unknown_isin']="'".$this->unknown_isin."'";
		$InsArr['currency']=$this->currency;
		$InsArr['quantity']=$this->quantity;
		$InsArr['custody_ac']=$this->custody_ac;
		$InsArr['trade_date']="'".$this->trade_date."'";
		$InsArr['value_date']="'".$this->value_date."'";
		$InsArr['counterparty_name']="'".$this->counterparty_name."'";
		$InsArr['bic_counterparty']="'".$this->bic_counterparty."'";
		$InsArr['custodian_name']="'".$this->custodian_name."'";
		$InsArr['bic_custodian']="'".$this->bic_custodian."'";
		$InsArr['counterparty_ac_custodian']="'".$this->counterparty_ac_custodian."'";
		$InsArr['transfer_agent_name']="'".$this->transfer_agent_name."'";
		$InsArr['bic_transfer_agent']="'".$this->bic_transfer_agent."'";
		$InsArr['custodian_ac_transfer_agent']="'".$this->custodian_ac_transfer_agent."'";
		//$InsArr['comment']=" '".$this->comment."' ";
		$InsArr['created_at']="'".$this->created_at."'";
		//$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		//$InsArr['transaction_type']=$this->transaction_type;
		//$InsArr['settled_by']=$this->settled_by;
		//$InsArr['settled_date']="'".$this->settled_date."'";
		
		unset($InsArr['id']);
		unset($InsArr['client_id']);
		unset($InsArr['reference']);
		unset($InsArr['isin']);
		unset($InsArr['fund_name']);
		unset($InsArr['unknown_isin']);
		unset($InsArr['currency']);
		unset($InsArr['quantity']);
		unset($InsArr['custody_ac']);
		unset($InsArr['trade_date']);
		unset($InsArr['value_date']);
		unset($InsArr['counterparty_name']);
		unset($InsArr['bic_counterparty']);
		unset($InsArr['custodian_name']);
		unset($InsArr['bic_custodian']);
		unset($InsArr['counterparty_ac_custodian']);
		unset($InsArr['transfer_agent_name']);
		unset($InsArr['bic_transfer_agent']);
		unset($InsArr['custodian_ac_transfer_agent']);
		//unset($InsArr['comment']);
		unset($InsArr['created_at']);
		//unset($InsArr['types']);
		unset($InsArr['status']);
		//unset($InsArr['transaction_type']);
		//unset($InsArr['settled_by']);
		//unset($InsArr['settled_date']);
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