<?php
Class AppointmentCalendarClass extends ChildCoreClass
{
	public $appointment_calendarArr;
	public $appointmentid;
	public $appointmentby;
	public $fromdate;
	public $todate;
	public $description;
	public $isapprove;
	public $approveby;
	public $approvedttime;
	public $entrydatetime;
	
	function __construct($db)
	{
		$tabName="appointment_calendar"; 
		$this->ChildCoreClass($tabName,$db);
		$this->SetFieldName($db);
		$arr=array();
		$arr=$this->GetFieldsByArray();
		$this->appointment_calendarArr=$arr;
	}
	
	function GetAppointment_calendarUsingArray()
	{
		$arr=array();
		$query="select * from appointment_calendar";
		$resArr=$this->ExcuteQuery($query);
		return $resArr;
	}
	
	function SearchAppointment_calendar()
	{
		$searchQuery="";
		$whereQuery="";
		$and="";
		if($this->appointmentid!="")
		{
			$whereQuery.=$and."appointmentid =".$this->appointmentid;
			$and=" and ";
		}
		if($this->appointmentby!="")
		{
			$whereQuery.=$and."appointmentby =".$this->appointmentby;
			$and=" and ";
		}
		/*if($this->fromdate!="")
		{
			$whereQuery.=$and."fromdate =".$this->fromdate;
			$and=" and ";
		}
		if($this->todate!="")
		{
			$whereQuery.=$and."todate =".$this->todate;
			$and=" and ";
		}*/
		if($this->description!="")
		{
			$whereQuery.=$and."description like '".$this->description."%'";
			$and=" and ";
		}
		
		if($this->isapprove!="")
		{
			$whereQuery.=$and."isapprove =".$this->isapprove;
			$and=" and ";
		}
		if($this->approveby!="")
		{
			$whereQuery.=$and."approveby =".$this->approveby;
			$and=" and ";
		}
		if($this->approvedttime!="")
		{
			$whereQuery.=$and."approvedttime =".$this->approvedttime;
			$and=" and ";
		}
		if($this->entrydatetime!="")
		{
			$whereQuery.=$and."entrydatetime =".$this->entrydatetime;
			$and=" and ";
		}
		
		if($this->fromdate!="" && $this->todate!="")
		{
			$whereQuery.=$and." fromdate between '".$this->fromdate."' and '".$this->todate."'";
			$and=" and ";
			$whereQuery.=$and." todate between '".$this->fromdate."' and '".$this->todate."'";
			$and=" and ";
		}
		else if($this->fromdate!="" && $this->todate=="")
		{
			$whereQuery.=$and." fromdate >= '".$this->fromdate."'";
			$and=" and ";
		}
		else if($this->fromdate=="" && $this->todate!="")
		{
			$whereQuery.=$and." todate <= '".$this->todate."'";
			$and=" and ";
		}
		
		$SearchQuery="select * from ".$this->TableName;
		if($whereQuery!="") $SearchQuery.=" where " .$whereQuery;
		//echo $SearchQuery;
		$result=$this->ExcuteQuery($SearchQuery);
		return $result;
	}
	
	function GetAMonthAppoinments()
	{
		$arr=array();
		$whereQuery="";
		$query="select * from ".$this->TableName;
		
		if($this->fromdate!="" && $this->todate!="")
		{
			$whereQuery= " (fromdate between '".$this->fromdate."' and '".$this->todate."')";
			$whereQuery.=" or (todate between '".$this->fromdate."' and '".$this->todate."')";
		}
		if($whereQuery!="")
			$query.=" where ".$whereQuery;
		
		//echo $query;
		$resArr=$this->ExcuteQuery($query);

		return $resArr;
	}
	
	function GetAMonthAppoinmentJSON(){
		$resArr=$this->GetAMonthAppoinments();
		
		$JsonStr="<script type=\"text/javascript\">";
		$JsonStr.="var JSONAppointments=[";
		$comma="";
		foreach($resArr as $item)
		{
			$JsonStr.=$comma."{";
			$JsonStr.="\"appointmentid\":\"".$item['appointmentid']."\",";
			$JsonStr.="\"appointmentby\":\"".$item['appointmentby']."\",";
			$JsonStr.="\"fromdate\":\"".$item['fromdate']."\",";
			$JsonStr.="\"todate\":\"".$item['todate']."\",";
			$dsc=$item['description'];
			//$dsc=str_replace("<br />","",$dsc);
			$dsc=str_replace("\r","",$dsc);
			$dsc=str_replace("\n","",$dsc);
			//$dsc=str_replace('\n\r',"",$dsc);
//			$dsc=str_replace('\r',"",$dsc);
			//$dsc=nl2br($dsc);
			$JsonStr.="\"description\":\"".$dsc."\",";
			$JsonStr.="\"isapprove\":\"".$item['isapprove']."\",";
			$JsonStr.="\"approveby\":\"".$item['approveby']."\",";
			$JsonStr.="\"approvedttime\":\"".$item['approvedttime']."\",";
			$JsonStr.="\"entrydatetime\":\"".$item['entrydatetime']."\"";
			$JsonStr.="}";
			$comma=",";
		}
		$JsonStr.="];</script>";
		
		return $JsonStr;
	}
	
	function InsertAppointment_calendar()
	{
		$InsArr=$this->appointment_calendarArr;
		$this->GetNewId();
		$InsArr['appointmentid']=$this->appointmentid;
		$InsArr['appointmentby']=$this->appointmentby;
		$InsArr['fromdate']="'".$this->fromdate."'";
		$InsArr['todate']="'".$this->todate."'";
		$InsArr['description']="'".$this->description."'";
		$InsArr['entrydatetime']="now()";
		
		unset($InsArr['isapprove']);
		unset($InsArr['approveby']);
		unset($InsArr['approvedttime']);
		/*echo $this->InsertQuery($InsArr);*/
		$result=$this->ExcuteQueryOnly($this->InsertQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Added Successfully.";
		else $msg="Failed.";
		
		if($msg=="Added Successfully.")
			return $this->appointmentid;
		else
			return $msg;
	}
	
	function GetNewId()
	{
		$arr=array();
		$Id=0;
		$query="select * from ".$this->TableName." order by appointmentid desc";
		//echo $query;
		$resArr=$this->ExcuteQuery($query);

		if(isset($resArr[0])){
			if($resArr[0]['appointmentid']!=null)
				$Id=$resArr[0]['appointmentid'];
		}
		
		$Id++;
		$this->appointmentid=$Id;
	}
	
	function UpdateAppointment_calendar()
	{
		$InsArr=$this->appointment_calendarArr;
		$InsArr['appointmentid']=$this->appointmentid;
		//$InsArr['appointmentby']=$this->appointmentby;
		$InsArr['fromdate']="'".$this->fromdate."'";
		$InsArr['todate']="'".$this->todate."'";
		$InsArr['description']="'".$this->description."'";
		$InsArr['entrydatetime']="now()";
		
		unset($InsArr['isapprove']);
		unset($InsArr['approveby']);
		unset($InsArr['approvedttime']);
		
		$updateArr=$InsArr;
		//unset($updateArr['appointmentid']);
		unset($InsArr['appointmentby']);
		unset($updateArr['appointmentby']);
		unset($updateArr['fromdate']);
		unset($updateArr['todate']);
		unset($updateArr['description']);
		unset($updateArr['entrydatetime']);
		//echo $this->UpdateQuery($InsArr,$updateArr);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Updated Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function ApproveAppointmentCalendar()
	{
		$InsArr=$this->appointment_calendarArr;
		$InsArr['appointmentid']=$this->appointmentid;
		$InsArr['isapprove']=1;
		$InsArr['approveby']=$this->approveby;
		$InsArr['approvedttime']="now()";
		
		unset($InsArr['appointmentby']);
		unset($InsArr['fromdate']);
		unset($InsArr['todate']);
		unset($InsArr['description']);
		unset($InsArr['entrydatetime']);
		
		$updateArr=$InsArr;
		//unset($updateArr['appointmentid']);
		
		unset($updateArr['isapprove']);
		unset($updateArr['approveby']);
		unset($updateArr['approvedttime']);
		//echo $this->UpdateQuery($InsArr,$updateArr);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Approved.";
		else $msg="Failed.";
		return $msg;
	}
	
	function CancelAppointmentCalendar()
	{
		$InsArr=$this->appointment_calendarArr;
		$InsArr['appointmentid']=$this->appointmentid;
		$InsArr['isapprove']=1;
		$InsArr['approveby']=$this->approveby;
		$InsArr['approvedttime']="now()";
		
		unset($InsArr['appointmentby']);
		unset($InsArr['fromdate']);
		unset($InsArr['todate']);
		unset($InsArr['description']);
		unset($InsArr['entrydatetime']);
		
		$updateArr=$InsArr;
		//unset($updateArr['appointmentid']);
		
		unset($updateArr['isapprove']);
		unset($updateArr['approveby']);
		unset($updateArr['approvedttime']);
		//echo $this->UpdateQuery($InsArr,$updateArr);
		$result=$this->ExcuteQueryOnly($this->UpdateQuery($InsArr,$updateArr));
		if(mysql_affected_rows()>0)$msg="Approved.";
		else $msg="Failed.";
		return $msg;
	}
	
	function DeleteAppointment_calendar()
	{
		$InsArr=$this->appointment_calendarArr;
		$InsArr['appointmentid']=$this->appointmentid;
		$InsArr['appointmentby']=$this->appointmentby;
		$InsArr['fromdate']=$this->fromdate;
		$InsArr['todate']=$this->todate;
		$InsArr['description']=$this->description;
		$InsArr['entrydatetime']=$this->entrydatetime;
		
		//unset($InsArr['appointmentid']);
		unset($InsArr['appointmentby']);
		unset($InsArr['fromdate']);
		unset($InsArr['todate']);
		unset($InsArr['description']);
		unset($InsArr['entrydatetime']);
		unset($InsArr['isapprove']);
		unset($InsArr['approveby']);
		unset($InsArr['approvedttime']);
		//echo $this->DeleteQuery($InsArr);
		$result=$this->ExcuteQueryOnly($this->DeleteQuery($InsArr));
		if(mysql_affected_rows()>0)$msg="Deleted Successfully.";
		else $msg="Failed.";
		return $msg;
	}
	
	function GetTable()
	{
		return $this->ExecuteQueryReturnArray($this->db);
	}

}
?>