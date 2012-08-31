<?php
Class UserClass extends ChildCoreClass
{
	public $userArr;
	public $id;
	public $loginid;
	public $password;
	public $email;
	
	public $cellphone;
	
	public $phone;
	
	public $role;
	public $active;
	public $clientid;
	
	function __construct($db)
	{
		$tabName="user"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->userArr=$arr;
	}
	
	function GetUserUsingArray()
	{
		$arr=array();
		$query="select * from ".$this->TableName;
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
	}
	
	function GetUserUsingJSON()
	{
		$resArr=$this->SearchUser();
		
		$JsonStr="<script type=\"text/javascript\">";
		$JsonStr.="var JSONUser=[";
		$comma="";
		
		foreach($resArr as $item)
		{
			$JsonStr.=$comma."{";
			$JsonStr.="\"id\":\"".$item['id']."\",";
			$JsonStr.="\"firstname\":\"".$item['firstname']."\",";
			$JsonStr.="\"lastname\":\"".$item['lastname']."\",";
			$JsonStr.="\"department\":\"".$item['department']."\",";
			$JsonStr.="\"email\":\"".$item['email']."\",";
			$JsonStr.="\"password\":\"".$item['password']."\",";
			$JsonStr.="\"active\":\"".$item['active']."\",";
			$JsonStr.="\"role\":\"".$item['role']."\"";
			$JsonStr.="}";
			$comma=",";
		}
		$JsonStr.="];</script>";
		
		return $JsonStr;
	}
	
	function GetUserSUsingJSON()
	{
		$resArr=$this->SearchUser();
		
		$JsonStr="<script type=\"text/javascript\">";
		$JsonStr.="var JSONUser=[";
		$comma="";
		foreach($resArr as $item)
		{
			$JsonStr.=$comma."{";
			$JsonStr.="\"id\":\"".$item['id']."\",";
			$JsonStr.="\"loginid\":\"".$item['loginid']."\",";
			$JsonStr.="\"name\":\"".$item['firstname']."\",";
			$JsonStr.="\"active\":\"".$item['active']."\"";
			$JsonStr.="}";
			$comma=",";
		}
		$JsonStr.="];</script>";
		
		return $JsonStr;
	}
	
	function SearchUser()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->id!="")
		{
			$whereQuery.=$and."id =".$this->id;
			$and=" and ";
		}
		if($this->loginid!="")
		{
			$whereQuery.=$and."loginid like '".$this->loginid."%'";
			$and=" and ";
		}
		if($this->password!="")
		{
			$whereQuery.=$and."password like '".$this->password."%'";
			$and=" and ";
		}
		if($this->email!="")
		{
			$whereQuery.=$and."email like '".$this->email."%'";
			$and=" and ";
		}
		if($this->firstname!="")
		{
			$whereQuery.=$and."firstname like '".$this->firstname."%'";
			$and=" and ";
		}
		if($this->lastname!="")
		
		{
		
			$whereQuery.=$and."lastname like '".$this->lastname."%'";
		
			$and=" and ";
		
		}
		if($this->role!="")
		{
			$whereQuery.=$and."role like '".$this->role."%'";
			$and=" and ";
		}
		
		if($this->officephone!="")
		{
			$whereQuery.=$and."officephone like '".$this->officephone."%'";
			$and=" and ";
		}
		if($this->cellphone!="")
		if($this->phone!="")
		if($this->department!="")
		{
			$whereQuery.=$and."department like '".$this->department."%'";
			$and=" and ";
		}
		
		{
		
			$whereQuery.=$and."active = '".$this->active."'";
		
			$and=" and ";
		
		}
		if($this->clientid>0)
		{
			$whereQuery.=$and."clientid=".$this->clientid;
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		//echo $SearchQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	
	function InsertUser()
	{
		$InsArr=$this->userArr;
		$this->GetNewID();
		$InsArr['id']=$this->id;
		$InsArr['loginid']="'".$this->loginid."'";
		$InsArr['password']="'".$this->password."'";
		$InsArr['email']="'".$this->email."'";
		$InsArr['firstname']="'".$this->firstname."'";
		$InsArr['role']="'".$this->role."'";
		$InsArr['active']=$this->active;
		$InsArr['clientid']=$this->clientid;
		
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function UpdateUser()
	{
		$InsArr=$this->userArr;
		$InsArr['id']=$this->id;
		$InsArr['loginid']="'".$this->loginid."'";
		
		$updateArr=$InsArr;
		unset($updateArr['loginid']);
		unset($updateArr['password']);
		unset($updateArr['email']);
		
		unset($updateArr['cellphone']);
		
		unset($updateArr['phone']);
		unset($updateArr['firstname']);
		unset($updateArr['role']);
		unset($updateArr['active']);
		unset($updateArr['clientid']);
		//echo $this->UpdateQuery($InsArr,$updateArr);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function DeleteUser()
	{
		$InsArr=$this->userArr;
		$InsArr['id']=$this->id;
		
		unset($InsArr['loginid']);
		unset($InsArr['password']);
		unset($InsArr['email']);
		unset($InsArr['firstname']);
		unset($InsArr['active']);
		unset($InsArr['officephone']);
		unset($InsArr['cellphone']);
		unset($InsArr['phone']);
		unset($InsArr['department']);
		unset($InsArr['clientid']);
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