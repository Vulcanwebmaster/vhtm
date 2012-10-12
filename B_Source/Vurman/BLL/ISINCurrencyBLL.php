<?php
Class ISINCurrencyViewClass extends ChildCoreClass
{
	public $isin_currency_viewArr;
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
	public $currency_name;
	public $abbreviation;
	
	function __construct($db)
	{
		$tabName="isin_currency_view"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->isin_currency_viewArr=$arr;
	}
	function GetIsin_currency_viewUsingArray()
	{
		$arr=array();
		$query="select * from ".$this->TableName;
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
	}
	
	function SearchIsin_currency_view()
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
			$whereQuery.=$and."code =".$this->code;
			$and=" and ";
		}
		if($this->name!="")
		{
			$whereQuery.=$and."name =".$this->name;
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
			$whereQuery.=$and."name_fund =".$this->name_fund;
			$and=" and ";
		}
		if($this->nav!="")
		{
			$whereQuery.=$and."nav =".$this->nav;
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
		if($this->currency_name!="")
		{
			$whereQuery.=$and."currency_name =".$this->currency_name;
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
	
	function GetTable()
	{
		return $this->ExecuteQueryReturnArray($this->db);
	}

}
?>