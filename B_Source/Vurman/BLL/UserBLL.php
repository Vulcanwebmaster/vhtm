<?php
Class UserClass extends ChildCoreClass
{
	public $userArr;
	public $id;
	public $loginid;
	public $password;
	public $email;		
	public $gender;
	public $cellphone;
	
	public $phone;
		public $firstname;		public $lastname;		public $department;
	public $role;
	public $active;
	public $clientid;
	public $company;
	
	function __construct($db)
	{
		$tabName="user_setup"; 
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
			$JsonStr.="\"id\":\"".$item['id']."\",";						$JsonStr.="\"clientid\":\"".$item['client_id']."\",";
			$JsonStr.="\"firstname\":\"".$item['first_name']."\",";
			$JsonStr.="\"lastname\":\"".$item['last_name']."\",";
			$JsonStr.="\"gender\":\"".$item['gender']."\",";
			$JsonStr.="\"company\":\"".$item['company']."\",";						$JsonStr.="\"officephone\":\"".$item['department']."\",";						$JsonStr.="\"cellphone\":\"".$item['cell']."\",";
			$JsonStr.="\"email\":\"".$item['email']."\",";						$JsonStr.="\"phone\":\"".$item['phone']."\",";						$JsonStr.="\"loginid\":\"".$item['login_id']."\",";
			$JsonStr.="\"password\":\"".$item['password']."\",";
			$JsonStr.="\"active\":\"".$item['active']."\",";
			//$JsonStr.="\"company\":\"".$item['company']."\"";
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
			$JsonStr.="\"loginid\":\"".$item['login_id']."\",";
			$JsonStr.="\"name\":\"".$item['first_name']."\",";
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
			$whereQuery.=$and."login_id like '".$this->loginid."%'";
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
			$whereQuery.=$and."first_name like '".$this->firstname."%'";
			$and=" and ";
		}
		if($this->lastname!="")
		
		{
		
			$whereQuery.=$and."last_name like '".$this->lastname."%'";
		
			$and=" and ";
		
		}
		if($this->company!="")
		{
			$whereQuery.=$and."company like '".$this->company."%'";
		
			$and=" and ";
		
		}
		if($this->role!="")
		{
			$whereQuery.=$and."role like '".$this->role."%'";
			$and=" and ";
		}
		
		if($this->gender!="")
		{
			$whereQuery.=$and."gender like '".$this->gender."%'";
			$and=" and ";
		}
		if($this->cellphone!="")		{			$whereQuery.=$and."cell like '".$this->cellphone."%'";			$and=" and ";		}
		if($this->phone!="")		{			$whereQuery.=$and."phone like '".$this->phone."%'";			$and=" and ";		}
		if($this->department!="")
		{
			$whereQuery.=$and."department like '".$this->department."%'";
			$and=" and ";
		}				if($this->active!="")
		
		{
		
			$whereQuery.=$and."active = '".$this->active."'";
		
			$and=" and ";
		
		}
		if($this->clientid>0)
		{
			$whereQuery.=$and."client_id=".$this->clientid;
			$and=" and ";
		}
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		//echo $SearchQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		//echo $result[0]['company'];
		return $result;
	}
	
	function InsertUser()
	{
		$InsArr=$this->userArr;
		$this->GetNewID();
		$InsArr['id']=$this->id;
		$InsArr['login_id']="'".$this->loginid."'";
		$InsArr['password']="'".$this->password."'";
		$InsArr['email']="'".$this->email."'";				$InsArr['gender']="'".$this->gender."'";				$InsArr['cell']="'".$this->cellphone."'";				$InsArr['phone']="'".$this->phone."'";
		$InsArr['first_name']="'".$this->firstname."'";				$InsArr['last_name']="'".$this->lastname."'";				$InsArr['department']="'".$this->department."'";
		$InsArr['role']="'".$this->role."'";
		$InsArr['active']=$this->active;
		$InsArr['client_id']="'".$this->clientid."'";
		$InsArr['company']="'".$this->company."'";
				//echo $msg=$this->InsertQuery($InsArr);
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function UpdateUser()
	{
		$InsArr=$this->userArr;
		$InsArr['id']=$this->id;
		$InsArr['login_id']="'".$this->loginid."'";		
		
		$InsArr['password']="'".$this->password."'";		
		
		$InsArr['email']="'".$this->email."'";		
				
		$InsArr['gender']="'".$this->gender."'";				
		
		$InsArr['client_id']="'".$this->clientid."'";
		
		$InsArr['cell']="'".$this->cellphone."'";				
		
		$InsArr['phone']="'".$this->phone."'";		
		
		$InsArr['first_name']="'".$this->firstname."'";				
		
		$InsArr['last_name']="'".$this->lastname."'";				
		
		$InsArr['department']="'".$this->department."'";		
		
		$InsArr['role']="'".$this->role."'";		
		
		$InsArr['active']="'".$this->active."'";		
		
		
		$InsArr['company']="'".$this->company."'";
		
		$updateArr=$InsArr;
		unset($updateArr['login_id']);
		unset($updateArr['password']);
		unset($updateArr['email']);				unset($updateArr['gender']);
		
		unset($updateArr['client_name']);
		
		unset($updateArr['phone']);				unset($updateArr['cell']);
		unset($updateArr['first_name']);				unset($updateArr['last_name']);				unset($updateArr['department']);
		unset($updateArr['role']);
		unset($updateArr['active']);
		unset($updateArr['company']);
		unset($updateArr['client_id']);
		//echo $this->UpdateQuery($InsArr,$updateArr);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg=" Update Failed.";
		return $msg;
	}
	
	function DeleteUser()
	{
		$InsArr=$this->userArr;
		$InsArr['id']=$this->id;
		
		unset($InsArr['login_id']);
		unset($InsArr['password']);
		unset($InsArr['email']);
		unset($InsArr['first_name']);				unset($InsArr['last_name']);
		unset($InsArr['active']);
		unset($InsArr['gender']);
		unset($InsArr['client_name']);
		unset($InsArr['phone']);
		unset($InsArr['department']);
		unset($InsArr['client_id']);
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