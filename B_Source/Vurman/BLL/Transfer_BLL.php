<?php
Class TransferClass extends ChildCoreClass
{
	public $transfers_newArr;
	public $id;
	public $id_client;
	public $client_reference;
	public $id_isin;
	public $fund_name;
	public $isin_reference;
	public $currency;
	public $amount;
	public $custody_ac;
	public $trade_date;
	public $settlement_date;
	public $sellerid;
	public $seller;
	public $bic_seller;
	public $custodianid;
	public $custodian;
	public $bic_custodian;
	public $seller_ac_cust;
	public $transfer_agent;
	public $bic_ta;
	public $cust_ac_ta;
	public $comment;
	public $created_at;
	public $types;
	public $status;
	public $transaction_type;
	public $settled_by;
	public $settled_date;
	
	public $from_date;
	public $to_date;
	
	public $status_settle;
	
	function __construct($db)
	{
		$tabName="transfers_new"; 
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
			$JsonStr.="\"id_client\":\"".$item['id_client']."\",";
			$JsonStr.="\"client_reference\":\"".$item['client_reference']."\",";
			$JsonStr.="\"id_isin\":\"".$item['id_isin']."\",";
			$JsonStr.="\"fund_name\":\"".$item['fund_name']."\",";
			$JsonStr.="\"currency\":\"".$item['currency']."\",";
			$JsonStr.="\"amount\":\"".$item['amount']."\",";
			$JsonStr.="\"custody_ac\":\"".$item['custody_ac']."\",";
			$JsonStr.="\"trade_date\":\"".$item['trade_date']."\",";
			$JsonStr.="\"settlement_date\":\"".$item['settlement_date']."\",";
			$JsonStr.="\"sellerid\":\"".$item['sellerid']."\",";
			$JsonStr.="\"seller\":\"".$item['seller']."\",";
			$JsonStr.="\"bic_seller\":\"".$item['bic_seller']."\",";
			$JsonStr.="\"custodianid\":\"".$item['custodianid']."\",";
			$JsonStr.="\"custodian\":\"".$item['custodian']."\",";
			$JsonStr.="\"bic_custodian\":\"".$item['bic_custodian']."\",";
			$JsonStr.="\"seller_ac_cust\":\"".$item['seller_ac_cust']."\",";
			$JsonStr.="\"transfer_agent\":\"".$item['transfer_agent']."\",";
			$JsonStr.="\"bic_ta\":\"".$item['bic_ta']."\",";
			$JsonStr.="\"cust_ac_ta\":\"".$item['cust_ac_ta']."\",";
			$JsonStr.="\"comment\":\"".$item['comment']."\",";
			$JsonStr.="\"created_at\":\"".$item['created_at']."\",";
			$JsonStr.="\"types\":\"".$item['types']."\",";
			$JsonStr.="\"status\":\"".$item['status']."\",";
			$JsonStr.="\"transaction_type\":\"".$item['transaction_type']."\",";
			$JsonStr.="\"settled_by\":\"".$item['settled_by']."\",";
			$JsonStr.="\"settled_date\":\"".$item['settled_date']."\",";
			$JsonStr.="\"isin_reference\":\"".$item['isin_reference']."\"";
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
		if($this->trade_date!="")
		{
			$whereQuery.=$and."trade_date =".$this->trade_date;
			$and=" and ";
		}
		if($this->settlement_date!="")
		{
			$whereQuery.=$and."settlement_date =".$this->settlement_date;
			$and=" and ";
		}
		if($this->sellerid!="")
		{
			$whereQuery.=$and."sellerid =".$this->sellerid;
			$and=" and ";
		}
		if($this->seller!="")
		{
			$whereQuery.=$and."seller =".$this->seller;
			$and=" and ";
		}
		if($this->bic_seller!="")
		{
			$whereQuery.=$and."bic_seller =".$this->bic_seller;
			$and=" and ";
		}
		if($this->custodianid!="")
		{
			$whereQuery.=$and."custodianid =".$this->custodianid;
			$and=" and ";
		}
		if($this->custodian!="")
		{
			$whereQuery.=$and."custodian =".$this->custodian;
			$and=" and ";
		}
		if($this->bic_custodian!="")
		{
			$whereQuery.=$and."bic_custodian =".$this->bic_custodian;
			$and=" and ";
		}
		if($this->seller_ac_cust!="")
		{
			$whereQuery.=$and."seller_ac_cust =".$this->seller_ac_cust;
			$and=" and ";
		}
		if($this->transfer_agent!="")
		{
			$whereQuery.=$and."transfer_agent =".$this->transfer_agent;
			$and=" and ";
		}
		if($this->bic_ta!="")
		{
			$whereQuery.=$and."bic_ta =".$this->bic_ta;
			$and=" and ";
		}
		if($this->cust_ac_ta!="")
		{
			$whereQuery.=$and."cust_ac_ta =".$this->cust_ac_ta;
			$and=" and ";
		}
		if($this->comment!="")
		{
			$whereQuery.=$and."comment =".$this->comment;
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
		if($this->transaction_type!="")
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
		}
		
		if($this->from_date!="" && $this->to_date!="")
		{
			$whereQuery.=$and." settlement_date between '".$this->from_date."' and '".$this->to_date."'";
			$and=" and ";
		}
		else if($this->from_date!="" && $this->to_date=="")
		{
			$whereQuery.=$and." settlement_date >= '".$this->from_date."'";
			$and=" and ";
		}
		else if($this->from_date=="" && $this->to_date!="")
		{
			$whereQuery.=$and." settlement_date <= '".$this->to_date."'";
			$and=" and ";
		}
		
		if($this->status_settle!="" && $this->status_settle!=null)
		{
			$whereQuery.=$and." (status = 'pending' or status = 'completed') ";
			$and=" and ";
		}
		
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		echo $SearchQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	function InsertTransfer()
	{
		$InsArr=$this->transfers_newArr;
		$this->GetNewID();
		$InsArr['id']=$this->id;
		
		if($this->id_client=="")
		{
			return "Please Enter Client Id";
		}
		else if($this->client_reference== ""){
			return "Reference cannot blank.";
		}
		else if($this->id_isin=="" || $this->id_isin==null){
			if($this->isin_reference=="")
			{
				return "Please select id ISIN or Reference Number";
			}
		}
		else if($this->custody_ac<=0)
		{
			return "Please select Custodian AC";
		}
		else if($this->amount=="") return "Amount cannot be blank.";
		else if($this->trade_date=="") return "Please enter a trade date.";
		else if($this->settlement_date=="") return "Please enter a settlement date.";
		else if($this->seller=="") return "Seller cannot be blank.";
		else if($this->custodian=="") return "Custodian cannot be blank.";
		
		
		$InsArr['id_client']=$this->id_client;
		$InsArr['client_reference']="'".$this->client_reference."'";
		$InsArr['id_isin']="'".$this->id_isin."'";
		$InsArr['fund_name']="'".$this->fund_name."'";
		$InsArr['isin_reference']="'".$this->isin_reference."'";
		$InsArr['currency']=$this->currency;
		$InsArr['amount']=$this->amount;
		$InsArr['custody_ac']=$this->custody_ac;
		$InsArr['trade_date']="'".$this->trade_date."'";
		$InsArr['settlement_date']="'".$this->settlement_date."'";
		$InsArr['sellerid']="'".$this->sellerid."'";
		$InsArr['seller']="'".$this->seller."'";
		$InsArr['bic_seller']="'".$this->bic_seller."'";
		$InsArr['custodianid']="'".$this->custodianid."'";
		$InsArr['custodian']="'".$this->custodian."'";
		$InsArr['bic_custodian']="'".$this->bic_custodian."'";
		$InsArr['seller_ac_cust']="'".$this->seller_ac_cust."'";
		$InsArr['transfer_agent']="'".$this->transfer_agent."'";
		$InsArr['bic_ta']="'".$this->bic_ta."'";
		$InsArr['cust_ac_ta']="'".$this->cust_ac_ta."'";
		$InsArr['comment']="'".$this->comment."'";
		$InsArr['created_at']="now()";
		$InsArr['types']="'".$this->types."'";
		$InsArr['status']="'".$this->status."'";
		$InsArr['transaction_type']="'".$this->transaction_type."'";
		
		unset($InsArr['settled_by']);
		unset($InsArr['settled_date']);
		
		//echo $this->InsertQuery($InsArr);
		
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Your order was added successfully";
		else $msg="SORRY, YOUR ORDER FAILED. PLEASE CONTACT HELP DESK.";
		return $msg;
	}
	
	
	function UpdateTransferDetails()
	{
		$InsArr=$this->transfers_newArr;
		$InsArr['id']=$this->id;
		$InsArr['seller_ac_cust']="'".$this->seller_ac_cust."'";
		$InsArr['transfer_agent']="'".$this->transfer_agent."'";
		$InsArr['bic_ta']="'".$this->bic_ta."'";
		$InsArr['cust_ac_ta']="'".$this->cust_ac_ta."'";
		
		unset($InsArr['id_client']);
		unset($InsArr['client_reference']);
		unset($InsArr['id_isin']);
		unset($InsArr['fund_name']);
		unset($InsArr['isin_reference']);
		unset($InsArr['currency']);
		unset($InsArr['amount']);
		unset($InsArr['custody_ac']);
		unset($InsArr['trade_date']);
		unset($InsArr['settlement_date']);
		unset($InsArr['sellerid']);
		unset($InsArr['seller']);
		unset($InsArr['bic_seller']);
		unset($InsArr['custodianid']);
		unset($InsArr['custodian']);
		unset($InsArr['bic_custodian']);
		unset($InsArr['settled_by']);
		unset($InsArr['settled_date']);
		unset($InsArr['comment']);
		unset($InsArr['created_at']);
		unset($InsArr['types']);
		unset($InsArr['status']);
		unset($InsArr['transaction_type']);

		
		$updateArr=$InsArr;
		
		unset($updateArr['bic_ta']);
		unset($updateArr['seller_ac_cust']);
		unset($updateArr['transfer_agent']);
		unset($updateArr['cust_ac_ta']);
		
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
		unset($InsArr['trade_date']);
		unset($InsArr['settlement_date']);
		unset($InsArr['sellerid']);
		unset($InsArr['seller']);
		unset($InsArr['bic_seller']);
		unset($InsArr['custodianid']);
		unset($InsArr['custodian']);
		unset($InsArr['bic_custodian']);
		unset($InsArr['seller_ac_cust']);
		unset($InsArr['transfer_agent']);
		unset($InsArr['bic_ta']);
		unset($InsArr['cust_ac_ta']);
		unset($InsArr['comment']);
		unset($InsArr['created_at']);
		unset($InsArr['types']);
		unset($InsArr['transaction_type']);

		
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
	
	function UpdateTransfer()
	{
		$InsArr=$this->transfers_newArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['client_reference']="'".$this->client_reference."'";
		$InsArr['id_isin']="'".$this->id_isin."'";
		$InsArr['fund_name']="'".$this->fund_name."'";
		$InsArr['isin_reference']="'".$this->isin_reference."'";
		$InsArr['currency']=$this->currency;
		$InsArr['amount']=$this->amount;
		$InsArr['custody_ac']=$this->custody_ac;
		$InsArr['trade_date']="'".$this->trade_date."'";
		$InsArr['settlement_date']="'".$this->settlement_date."'";
		$InsArr['seller']="'".$this->seller."'";
		$InsArr['bic_seller']="'".$this->bic_seller."'";
		$InsArr['custodian']="'".$this->custodian."'";
		$InsArr['bic_custodian']="'".$this->bic_custodian."'";
		$InsArr['seller_ac_cust']="'".$this->seller_ac_cust."'";
		$InsArr['transfer_agent']="'".$this->transfer_agent."'";
		$InsArr['bic_ta']="'".$this->bic_ta."'";
		$InsArr['cust_ac_ta']="'".$this->cust_ac_ta."'";
		$InsArr['comment']="'".$this->comment."'";
		$InsArr['created_at']="'".$this->created_at."'";
		$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		$InsArr['transaction_type']=$this->transaction_type;
		$InsArr['settled_by']=$this->settled_by;
		$InsArr['settled_date']="'".$this->settled_date."'";
		
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
		unset($updateArr['trade_date']);
		unset($updateArr['settlement_date']);
		unset($updateArr['seller']);
		unset($updateArr['bic_seller']);
		unset($updateArr['custodian']);
		unset($updateArr['bic_custodian']);
		unset($updateArr['seller_ac_cust']);
		unset($updateArr['transfer_agent']);
		unset($updateArr['bic_ta']);
		unset($updateArr['cust_ac_ta']);
		unset($updateArr['comment']);
		unset($updateArr['created_at']);
		unset($updateArr['types']);
		unset($updateArr['status']);
		unset($updateArr['transaction_type']);
		unset($updateArr['settled_by']);
		unset($updateArr['settled_date']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
		}
	function DeleteTransfer()
	{
		$InsArr=$this->transfers_newArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['client_reference']="'".$this->client_reference."'";
		$InsArr['id_isin']=$this->id_isin;
		$InsArr['fund_name']="'".$this->fund_name."'";
		$InsArr['isin_reference']="'".$this->isin_reference."'";
		$InsArr['currency']=$this->currency;
		$InsArr['amount']=$this->amount;
		$InsArr['custody_ac']=$this->custody_ac;
		$InsArr['trade_date']="'".$this->trade_date."'";
		$InsArr['settlement_date']="'".$this->settlement_date."'";
		$InsArr['seller']="'".$this->seller."'";
		$InsArr['bic_seller']="'".$this->bic_seller."'";
		$InsArr['custodian']="'".$this->custodian."'";
		$InsArr['bic_custodian']="'".$this->bic_custodian."'";
		$InsArr['seller_ac_cust']="'".$this->seller_ac_cust."'";
		$InsArr['transfer_agent']="'".$this->transfer_agent."'";
		$InsArr['bic_ta']="'".$this->bic_ta."'";
		$InsArr['cust_ac_ta']="'".$this->cust_ac_ta."'";
		$InsArr['comment']="'".$this->comment."'";
		$InsArr['created_at']="'".$this->created_at."'";
		$InsArr['types']=$this->types;
		$InsArr['status']=$this->status;
		$InsArr['transaction_type']=$this->transaction_type;
		$InsArr['settled_by']=$this->settled_by;
		$InsArr['settled_date']="'".$this->settled_date."'";
		
		unset($InsArr['id']);
		unset($InsArr['id_client']);
		unset($InsArr['client_reference']);
		unset($InsArr['id_isin']);
		unset($InsArr['fund_name']);
		unset($InsArr['isin_reference']);
		unset($InsArr['currency']);
		unset($InsArr['amount']);
		unset($InsArr['custody_ac']);
		unset($InsArr['trade_date']);
		unset($InsArr['settlement_date']);
		unset($InsArr['seller']);
		unset($InsArr['bic_seller']);
		unset($InsArr['custodian']);
		unset($InsArr['bic_custodian']);
		unset($InsArr['seller_ac_cust']);
		unset($InsArr['transfer_agent']);
		unset($InsArr['bic_ta']);
		unset($InsArr['cust_ac_ta']);
		unset($InsArr['comment']);
		unset($InsArr['created_at']);
		unset($InsArr['types']);
		unset($InsArr['status']);
		unset($InsArr['transaction_type']);
		unset($InsArr['settled_by']);
		unset($InsArr['settled_date']);
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