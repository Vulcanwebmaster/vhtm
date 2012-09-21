
	$(function() {
		$("#appointment_entry").dialog({
					bgiframe: true,
					autoOpen: false,
					height: 250,
					width:435,
					modal: true,
					buttons: {
						'CANCEL':function()
						{
							$(this).dialog('close');
						},
						'SAVE':function()
						{
							Save();
						},
						'UPDATE':function()
						{
							Update();
						},
						'DELETE':function()
						{
							deleteNewAppointment();
						}
					}
		});
	});

function newAppointment(ob)
{
	var tmp=parseInt(ob);
	document.getElementById('appointment_id').innerHTML=ob;
	document.getElementById('startdate').value=tmp;
	document.getElementById('enddate').value=tmp;
	document.getElementById('jobdesc').value="";
	
	showButtonDialog('appointment_entry','SAVE',true);
	showButtonDialog('appointment_entry','CANCEL',true);
	showButtonDialog('appointment_entry','UPDATE',false);
	showButtonDialog('appointment_entry','DELETE',false);
	
	$("#appointment_entry").dialog("open");
}

function newAppointment1(ob)
{
	var dt=this.innerHTML;
	var tmp=parseInt(dt);
	document.getElementById('appointment_id').innerHTML=dt;
	document.getElementById('startdate').value=tmp;
	document.getElementById('enddate').value=tmp;
	document.getElementById('jobdesc').value="";
	
	showButtonDialog('appointment_entry','SAVE',true);
	showButtonDialog('appointment_entry','CANCEL',true);
	showButtonDialog('appointment_entry','UPDATE',false);
	showButtonDialog('appointment_entry','DELETE',false);
	
	$("#appointment_entry").dialog("open");
}

function getUser(id)
{
	var username="";
	for(var i=0;i<JSONUser.length;i++)
	{
		if(id==JSONUser[i].id)
		{
			username=JSONUser[i].name;
			break;
		}
	}
	return username;
}

function showNewAppointment()
{
	var dt=this.innerHTML;
	
	
	for(var i=0;i<JSONAppointments.length;i++)
	{
		var tempStartDt=JSONAppointments[i].START_DATE;
		var tempEndDt=JSONAppointments[i].END_DATE;
		
		var tempStartArr=tempStartDt.split('-');
		var tempEndArr=tempEndDt.split('-');
		
		var temp1=parseInt(tempStartArr[2].toString());
		var temp2=parseInt(tempEndArr[2].toString());
		
		if((dt>=temp1 && dt<=temp2) || (dt==temp1) || (dt==temp2)) {
			document.getElementById('startdate').value="";
			document.getElementById('enddate').value="";
			document.getElementById('jobdesc').value="";
			document.getElementById('appointment_id').innerHTML="";
	
			document.getElementById('appointment_id').innerHTML=JSONAppointments[i].appointmentid;
			document.getElementById('startdate').value=tempStartArr[2];
			document.getElementById('enddate').value=tempEndArr[2];
			
			var dsc=JSONAppointments[i].JOB_DESCRIPTION;
			//alert(dsc);
			for(var i=0;i<2;i++)
			{
				dsc= dsc.replace("<br />", "\n");
				if(dsc.search("<br />")!=-1) i=0;
				else i=3;
			}
			
			document.getElementById('jobdesc').value=dsc;
			
			showButtonDialog('appointment_entry','SAVE',false);
			showButtonDialog('appointment_entry','CANCEL',true);
			showButtonDialog('appointment_entry','UPDATE',true);
			showButtonDialog('appointment_entry','DELETE',true);
			break;
		}
	}
	
	$("#appointment_entry").dialog("open");
}

function deleteNewAppointment()
{
	var appointment_id=document.getElementById('appointment_id').innerHTML;
	
	var queryString="id="+appointment_id;
	var url="ajaxfiles/del_appointment_cal_ajax.php";
	req=null;
	getAJaxReqest();
	
	req.open("POST", url, true); 
	req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
	req.send(queryString); 
	req.onreadystatechange=function()
	{
		var appointment_id=document.getElementById('appointment_id').innerHTML;
		if(req.readyState==4){
			var result=req.responseText;
			//alert(result);
			if(result=="Deleted Successfully.")
			{
				//alert(result);
				for(var i=0;i<JSONAppointments.length;i++){
						if(appointment_id==JSONAppointments[i].appointmentid){
							//alert("Found");
							var tmp1=JSONAppointments[i].START_DATE;
							var tmp2=JSONAppointments[i].END_DATE;
							
							var tmpArr1=tmp1.split('-');
							var tmpArr2=tmp2.split('-');
							
							var st1=tmpArr1[2].toString();
							var st2=tmpArr1[2].toString();
							
							var tt1=parseInt(st1);
							var tt2=parseInt(st2);
							
							for(var j=tt1;j<=tt2;j++)
							{
								var divTemp="div"+j;
								document.getElementById(divTemp).className="availabledate";
								document.getElementById(divTemp).onclick=null;
						
								var img = document.getElementById(divTemp);
								img.onclick=null;
								
								if (window.addEventListener) { 	// Mozilla, Netscape, Firefox
								   img.addEventListener('click',newAppointment1, false);
								}
								else {	// IE
								   img.attachEvent('onClick', newAppointment1);
								}

							}
							
							JSONAppointments.splice(i,1);
							$("#appointment_entry").dialog("close");
							break;
						}
					}
					//alert(result);
			}
		}
	}
}

function showApproveAppointment(ob)
{
	for(var i=0;i<JSONAppointments.length;i++)
	{
		if(ob==JSONAppointments[i].appointmentid)
		{
			document.getElementById('startdate').value="";
			document.getElementById('enddate').value="";
			document.getElementById('jobdesc').value="";
			document.getElementById('appointment_id').innerHTML="";
	
			document.getElementById('appointment_id').innerHTML=JSONAppointments[i].appointmentid;
			
			var tmp1=JSONAppointments[i].START_DATE;
			var tmp2=JSONAppointments[i].END_DATE;
			
			var tmpArr1=tmp1.split('-');
			var tmpArr2=tmp2.split('-');
			
			document.getElementById('startdate').value=tmpArr1[2];
			document.getElementById('enddate').value=tmpArr2[2];
			
			var dsc=JSONAppointments[i].JOB_DESCRIPTION;
			//alert(dsc);
			for(var i=0;i<2;i++)
			{
				dsc= dsc.replace("<br />", "\n");
				if(dsc.search("<br />")!=-1) i=0;
				else i=3;
			}
			
			document.getElementById('jobdesc').value=dsc;
			
			showButtonDialog('appointment_entry','SAVE',false);
			showButtonDialog('appointment_entry','CANCEL',false);
			showButtonDialog('appointment_entry','DELETE',false);
			showButtonDialog('appointment_entry','UPDATE',false);
			break;
		}
	}
	
	$("#appointment_entry").dialog("open");
}

function showAppointment(ob)
{
	for(var i=0;i<JSONAppointments.length;i++)
	{
		if(ob==JSONAppointments[i].appointmentid)
		{
			document.getElementById('startdate').value="";
			document.getElementById('enddate').value="";
			document.getElementById('jobdesc').value="";
			document.getElementById('appointment_id').innerHTML="";
	
			document.getElementById('appointment_id').innerHTML=JSONAppointments[i].appointmentid;
			
			var tmp1=JSONAppointments[i].START_DATE;
			var tmp2=JSONAppointments[i].END_DATE;
			
			var tmpArr1=tmp1.split('-');
			var tmpArr2=tmp2.split('-');
			
			document.getElementById('startdate').value=tmpArr1[2];
			document.getElementById('enddate').value=tmpArr2[2];
			
			var dsc=JSONAppointments[i].JOB_DESCRIPTION;
			//alert(dsc);
			for(var i=0;i<2;i++)
			{
				dsc= dsc.replace("<br />", "\n");
				if(dsc.search("<br />")!=-1) i=0;
				else i=3;
			}
			
			document.getElementById('jobdesc').value=dsc;
			
			showButtonDialog('appointment_entry','SAVE',false);
			showButtonDialog('appointment_entry','CANCEL',true);
			showButtonDialog('appointment_entry','DELETE',true);
			showButtonDialog('appointment_entry','UPDATE',true);
			break;
		}
	}
	
	$("#appointment_entry").dialog("open");
}

function Save()
{
	var appointment_id=document.getElementById('appointment_id').innerHTML;
	var startdate=globalYear+"-"+globalMonth+"-"+getValueFromId('startdate');
	var enddate=globalYear+"-"+globalMonth+"-"+getValueFromId('enddate');
	var jobdesc=getValueFromId('jobdesc');
	
	var queryString="startdate="+startdate+"&enddate="+enddate+"&jobdesc="+jobdesc;
	var url="ajaxfiles/appointment_cal_ajax.php";
	//alert(queryString);
	req=null;
	getAJaxReqest();
	
	req.open("POST", url, true); 
	req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
	req.send(queryString); 
	req.onreadystatechange=function()
	{
		if(req.readyState==4){
			var result=req.responseText;
			
			if(result!="Failed.")
			{
				var dsc=document.getElementById('jobdesc').value;
				
				
				for(var i=0;i<2;i++)
				{
					dsc= dsc.replace(/\n/g, '<br />');
					if(dsc.search("\n")!=-1) i=0;
					else i=3;
				}
				for(var i=0;i<2;i++)
				{
					dsc= dsc.replace(/\r/g, '');
					if(dsc.search("\r")!=-1) i=0;
					else i=3;
				}
						JSONAppointments[JSONAppointments.length]={
							"appointmentid":result,
							"START_DATE":globalYear+"-"+globalMonth+"-"+getValueFromId('startdate'),
							"END_DATE":globalYear+"-"+globalMonth+"-"+getValueFromId('enddate'),
							"JOB_DESCRIPTION":dsc
						};

						var temp=document.getElementById('appointment_id').innerHTML;
						
						var tmp1=parseInt(getValueFromId('startdate'));
						var tmp2=parseInt(getValueFromId('enddate'));
						//alert(tmp1+" "+tmp2);
						
						for(var i=tmp1;i<=tmp2;i++)
						{
							/*tmp1++;
							if(tmp2>=tmp1){*/
								var divTemp="div"+i;
								document.getElementById(divTemp).className="greencolor";
								document.getElementById(divTemp).onclick=null;
						
								var img = document.getElementById(divTemp);
								img.onclick=null;
								
								if (window.addEventListener) { 	// Mozilla, Netscape, Firefox
								   img.addEventListener('click',showNewAppointment, false);
								}
								else {	// IE
								   img.attachEvent('onClick', showNewAppointment);
								}
							//}
						}
						$("#appointment_entry").dialog("close");
			}
		}
	}
}

function Update()
{
	var appointment_id=document.getElementById('appointment_id').innerHTML;
	var startdate=globalYear+"-"+globalMonth+"-"+getValueFromId('startdate');
	var enddate=globalYear+"-"+globalMonth+"-"+getValueFromId('enddate');
	var jobdesc=getValueFromId('jobdesc');

	
	var queryString="id="+appointment_id+"&startdate="+startdate+"&enddate="+enddate+"&jobdesc="+jobdesc;
	var url="ajaxfiles/appointment_cal_ajax.php";
	//alert(queryString);
	req=null;
	getAJaxReqest();
	
	req.open("POST", url, true); 
	req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
	req.send(queryString); 
	req.onreadystatechange=function()
	{
		var appointment_id=document.getElementById('appointment_id').innerHTML;
		if(req.readyState==4){
			var result=req.responseText;
			if(result=="Updated Successfully.")
			{
				var dsc=document.getElementById('jobdesc').value;
				for(var i=0;i<2;i++)
				{
					dsc= dsc.replace(/\n/g, '<br />');
					if(dsc.search("\n")!=-1) i=0;
					else i=3;
				}
				for(var i=0;i<2;i++)
				{
					dsc= dsc.replace(/\r/g, '');
					if(dsc.search("\r")!=-1) i=0;
					else i=3;
				}
				
				for(var i=0;i<JSONAppointments.length;i++){
						if(appointment_id==JSONAppointments[i].appointmentid){
							JSONAppointments[i].START_DATE=globalYear+"-"+globalMonth+"-"+getValueFromId('startdate');
							JSONAppointments[i].END_DATE=globalYear+"-"+globalMonth+"-"+getValueFromId('enddate');;
							JSONAppointments[i].JOB_DESCRIPTION=dsc;
							//JSONAppointments[i].cust_ac_ta=getValueFromId('cust_ac_ta_txt');
							break;
						}
					}
					alert(result);
					$("#appointment_entry").dialog("close");
			}
		}
	}
}


function ButtonDialogState(sIDDialog,sLabel,bEnable){     $("#"+sIDDialog+" ~ .ui-dialog-buttonpane").children("button:contains('"+sLabel+"')").button((bEnable==true) ? "enable" : "disable" );//1.8.2     
$("#"+sIDDialog+" ~ .ui-dialog-buttonpane .ui-dialog-buttonset").children("button:contains('"+sLabel+"')").button((bEnable==true) ? "enable" : "disable" );//1.8.4
}
function showButtonDialog(sIDDialog,sLabel,bvisible){ 
//alert(sLabel+" "+bvisible);   
if(bvisible==true){//        
$("#"+sIDDialog+" ~ .ui-dialog-buttonpane").children("button:contains('"+sLabel+"')").show();//1.8.2        
$("#"+sIDDialog+" ~ .ui-dialog-buttonpane .ui-dialog-buttonset").children("button:contains('"+sLabel+"')").show();//1.8.4    
}else{
	//        
	$("#"+sIDDialog+" ~ .ui-dialog-buttonpane").children("button:contains('"+sLabel+"')").hide();//1.8.2        
	$("#"+sIDDialog+" ~ .ui-dialog-buttonpane .ui-dialog-buttonset").children("button:contains('"+sLabel+"')").hide();//1.8.4    
	}}