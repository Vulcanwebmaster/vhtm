<?php
Class FundPortfolioClass extends ChildCoreClass
{
	public $fund_portfolioArr;
	public $id;
	public $id_client;
	public $id_isin;
	public $fund_name;
	public $currency;
	public $custody_ac;
	public $credit;
	public $credit_date;
	public $credit_ref;
	public $debit;
	public $debit_date;
	public $debit_ref;
	public $created_by;
	public $created_date;
	public $fromdt;
	public $todt;
	public $cr_db;
	
	function __construct($db)
	{
		$tabName="fund_portfolio"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->fund_portfolioArr=$arr;
	}
	function GetFundPortfolioUsingArray()
	{
		$arr=array();
		$query="select * from fund_portfolio";
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
	}
	
	function SearchFundPortfolio()
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
		if($this->id_isin!="")
		{
			$whereQuery.=$and.'id_isin like "'.$this->id_isin.'%"';
			$and=" and ";
		}
		if($this->fund_name!="")
		{
			$whereQuery.=$and."fund_name like '".$this->fund_name."%'";
			$and=" and ";
		}
		if($this->currency!="")
		{
			$whereQuery.=$and."currency =".$this->currency;
			$and=" and ";
		}
		if($this->custody_ac!="" && $this->custody_ac>0)
		{
			$whereQuery.=$and."custody_ac =".$this->custody_ac;
			$and=" and ";
		}
		if($this->credit!="")
		{
			$whereQuery.=$and."credit =".$this->credit;
			$and=" and ";
		}
		if($this->credit_date!="")
		{
			$whereQuery.=$and."credit_date =".$this->credit_date;
			$and=" and ";
		}
		if($this->credit_ref!="")
		{
			$whereQuery.=$and."credit_ref =".$this->credit_ref;
			$and=" and ";
		}
		if($this->debit!="")
		{
			$whereQuery.=$and."debit =".$this->debit;
			$and=" and ";
		}
		if($this->debit_date!="")
		{
			$whereQuery.=$and."debit_date =".$this->debit_date;
			$and=" and ";
		}
		if($this->debit_ref!="")
		{
			$whereQuery.=$and."debit_ref =".$this->debit_ref;
			$and=" and ";
		}
		if($this->created_by!="")
		{
			$whereQuery.=$and."created_by =".$this->created_by;
			$and=" and ";
		}
		if($this->created_date!="")
		{
			$whereQuery.=$and."created_date =".$this->created_date;
			$and=" and ";
		}
		
		if($this->fromdt!="" && $this->todt!="")
		{
			$whereQuery.=$and."credit_date between '".$this->fromdt."' and '".$this->todt."' or debit_date between '".$this->fromdt."' and '".$this->todt."'";
			$and=" and ";
		}
		else if($this->fromdt!="")
		{
			$whereQuery.=$and."credit_date >= '".$this->fromdt."' or debit_date >='".$this->fromdt."'";
			$and=" and ";
		}
		else if($this->todt!="")
		{
			$whereQuery.=$and."credit_date >= '".$this->fromdt."' or debit_date >='".$this->fromdt."'";
			$and=" and ";
		}
		
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		
		//echo $SearchQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	
	function GetAllBookings()
	{
		$SearchQuery="select sum(credit),sum(debit) from ".$this->TableName." where id_isin='".$this->id_isin."'";
		//echo $SearchQuery;
		$result=$this->ExcuteQueryReturnResult($SearchQuery);

		return $result;
	}
	function InsertFundPortfolio()
	{
		$InsArr=$this->fund_portfolioArr;
		$this->GetNewID();
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['id_isin']="'".$this->id_isin."'";
		$InsArr['fund_name']="'".$this->fund_name."'";
		$InsArr['currency']=$this->currency;
		$InsArr['custody_ac']=$this->custody_ac;
		if($this->credit !=null && $this->credit > 0)
		{
			$InsArr['credit']=$this->credit;
		}
		else
		{
			unset($InsArr['credit']);
		}
		
		if($this->credit_date !=null && $this->credit_date !="")
		{
			$InsArr['credit_date']="'".$this->credit_date."'";
		}
		else
		{
			unset($InsArr['credit_date']);
		}
		
		$InsArr['credit_ref']="'".$this->credit_ref."'";
		
		if($this->debit !=null && $this->debit > 0)
		{
			$InsArr['debit']=$this->debit;
		}
		else
		{
			unset($InsArr['debit']);
		}
		
		if($this->debit_date !=null && $this->debit_date !="")
		{
			$InsArr['debit_date']="'".$this->debit_date."'";
		}
		else
		{
			unset($InsArr['debit_date']);
		}
		
		$InsArr['debit_ref']="'".$this->debit_ref."'";
		$InsArr['created_by']=$this->created_by;
		$InsArr['created_date']="now()";
		
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		//echo $this->InsertQuery($InsArr);
		
		if(mysql_affected_rows()>0)$msg="Added Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function UpdateFundPortfolio()
	{
		$InsArr=$this->fund_portfolioArr;
		$InsArr['id']=$this->id;
		$InsArr['id_client']=$this->id_client;
		$InsArr['id_isin']="'".$this->id_isin."'";
		$InsArr['fund_name']="'".$this->fund_name."'";
		$InsArr['currency']=$this->currency;
		$InsArr['custody_ac']=$this->custody_ac;
		$InsArr['credit']=$this->credit;
		$InsArr['credit_date']="'".$this->credit_date."'";
		$InsArr['credit_ref']="'".$this->credit_ref."'";
		$InsArr['debit']=$this->debit;
		$InsArr['debit_date']="'".$this->debit_date."'";
		$InsArr['debit_ref']="'".$this->debit_ref."'";
		$InsArr['created_by']=$this->created_by;
		$InsArr['created_date']="now()";
		
		$updateArr=$InsArr;
		unset($updateArr['id_client']);
		unset($updateArr['id_isin']);
		unset($updateArr['fund_name']);
		unset($updateArr['currency']);
		unset($updateArr['custody_ac']);
		unset($updateArr['credit']);
		unset($updateArr['credit_date']);
		unset($updateArr['credit_ref']);
		unset($updateArr['debit']);
		unset($updateArr['debit_date']);
		unset($updateArr['debit_ref']);
		unset($updateArr['created_by']);
		unset($updateArr['created_date']);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	function DeleteFundPortfolio()
	{
		$InsArr=$this->fund_portfolioArr;
		$InsArr['id']=$this->id;
		
		unset($InsArr['id_client']);
		unset($InsArr['id_isin']);
		unset($InsArr['fund_name']);
		unset($InsArr['currency']);
		unset($InsArr['custody_ac']);
		unset($InsArr['credit']);
		unset($InsArr['credit_date']);
		unset($InsArr['credit_ref']);
		unset($InsArr['debit']);
		unset($InsArr['debit_date']);
		unset($InsArr['debit_ref']);
		unset($InsArr['created_by']);
		unset($InsArr['created_date']);
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