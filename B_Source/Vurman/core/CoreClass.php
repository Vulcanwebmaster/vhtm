<?php
//require_once("connect.php");

class CoreClass
{
	public	$TableName;
	public	$ColumnNumber;
	public 	$db;
	
	function CoreClass($table,$db){
		$this->TableName=$table;
		$this->db=$db;
	}
	
	function GetTableName()
	{
		return $this->TableName;
	}
	
	function SetColumnNumber($number)
	{
		$this->ColumnNumber=$number;
	}
	
	function GetColumnNumber()
	{
		return $this->ColumnNumber;
	}
}

class ChildCoreClass extends CoreClass
{

	public $FieldName		=	array();
	public 	$TypeName		=	array();
	public 	$NullType		=	array();
	public	$KeyName		=	array();
	public 	$DefaultType	=	array();
	public	$ExtraField		=	array();
	
	function ChildCoreClass($table,$db)
	{
		$this->CoreClass($table,$db);
	}
	
	public function SetFieldName($db){
		$query="desc ".$this->TableName;
		$result=mysql_query($query,$db);
		
		$this->SetColumnNumber(mysql_num_rows($result));
//		echo $this->GetColumnNumber();
		
		for($i=0;$i<$this->GetColumnNumber();$i++)
		{
			$row=mysql_fetch_row($result);
			$this->FieldName[$i]=$row[0];
			$this->TypeName[$i]=$row[1];
			$this->NullType[$i]=$row[2];
			$this->KeyName[$i]=$row[3];
			$this->DefaultType[$i]=$row[4];
			$this->ExtraField[$i]=$row[5];
		}
		
	}
	
	public function GetFieldName()
	{
		for($i=0; $i<$this->GetColumnNumber();$i++)
		{
			echo $this->FieldName[$i]." \t ";
			echo $this->TypeName[$i]." \t ";
			echo $this->NullType[$i]." \t ";
			echo $this->KeyName[$i]." \t ";

			echo "<br>";
		}

	}
	
	public function GetFieldsByArray()
	{
		$arr=array();
		for($i=0; $i<$this->GetColumnNumber();$i++)
		{
			$arr[$this->FieldName[$i]]="";
		}
		return $arr;
	}
	
	public function ExecuteQueryWithTable($db)
	{
		$query="select * from ".$this->TableName;
		$result=mysql_query($query,$db);
		echo "<table style='border-collapse:collapse;empty-cells:hide;'><tr>";
		for($i=0; $i<$this->GetColumnNumber();$i++)
		{
				echo "<td style='border:1px solid #ccc;padding:5px;'>".$this->FieldName[$i]."</td> ";
		}
		echo "</tr>";
		while($row=mysql_fetch_array($result))
		{
			echo "<tr>";
			for($i=0; $i<$this->GetColumnNumber();$i++)
			{
				echo "<td style='border:1px solid #ccc;padding:5px;'>".$row[$this->FieldName[$i]]."</td> ";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	
	public function ExecuteQueryReturnArray($db)
	{
		$arr=array();
		$query="select * from ".$this->TableName;
		$result=mysql_query($query,$db);
		$j=0;
		while($row=mysql_fetch_array($result))
		{
			for($i=0; $i<$this->GetColumnNumber();$i++)
			{
				$arr[$j][$this->FieldName[$i]]=$row[$this->FieldName[$i]];
			}
			$j++;
		}
		return $arr;
	}
	
	public function InsertQuery($insertArr)
	{
		$and="";
		$comma="";
		$query="";
		$param="";
		$value="";
		$insertQuery="";
		
		for($i=0;$i<sizeof($insertArr);$i++)
		{
			$param.=$comma.key($insertArr);
			$value.=$comma.$insertArr[key($insertArr)];
			next($insertArr); 
			$comma=",";
		}
		
		$insertQuery="insert into ".$this->TableName."(".$param.") values (".$value.")"  ;
		
		return $insertQuery;
	}
	
	public function UpdateQuery($insertArr,$updateArr)
	{
		
		$and="";
		$comma="";
		$query="";
		$param="";
		$value="";
		$updateQuery="";
		
		for($i=0;$i<sizeof($insertArr);$i++)
		{
			$param.=$comma.key($insertArr)."=".$insertArr[key($insertArr)];
			next($insertArr); 
			$comma=",";
		}
		
		for($i=0;$i<sizeof($updateArr);$i++)
		{
			$value.=$and.key($updateArr)."=".$insertArr[key($updateArr)];
			next($updateArr); 
			$and=" and ";
		}
		
		$updateQuery="update ".$this->TableName." SET ".$param." where ".$value.""  ;
		
		return $updateQuery;
	}
	
	public function DeleteQuery($insertArr)
	{
		
		$and="";
		$comma="";
		$query="";
		$param="";
		$value="";
		$deleteQuery="";
		
		for($i=0;$i<sizeof($insertArr);$i++)
		{
			$param.=$comma.key($insertArr)."=".$insertArr[key($insertArr)];
			next($insertArr); 
			$comma=" and ";
		}

		
		$deleteQuery="delete from ".$this->TableName." where ".$param.""  ;
		
		return $deleteQuery;
	}
	
	public function ExcuteQuery($query)
	{
		
		$arr=array();
		$result=mysql_query($query,$this->db);
		$j=0;

		while($row=mysql_fetch_array($result))
		{
			for($i=0; $i<$this->GetColumnNumber();$i++)
			{
				$arr[$j][$this->FieldName[$i]]=$row[$this->FieldName[$i]];
			}
			$j++;
		}
		
		return $arr;
	}
	
	public function ExcuteQueryOnly($query)
	{
		$arr=array();
		$result=mysql_query($query,$this->db);
		
		return mysql_affected_rows();
	}
	
	public function ExcuteQueryReturnResult($query)
	{
		$arr=array();
		$result=mysql_query($query,$this->db);
		
		return $result;
	}
}

?>