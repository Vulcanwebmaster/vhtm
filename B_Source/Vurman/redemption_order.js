// JavaScript Document for Settlement Instruction -> To Receive fund

$(function() {
$("#loading-dialog").dialog({
			bgiframe: true,
			autoOpen: false,
			height: 100,
			modal: true
});
});

$(function() {
	$("#Trade_Date,#Settlement_Date").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat:'yy-mm-dd',
		numberOfMonths: 2
	});
});

	
		function verify() 
		{
			
			var message = '';
			var newline='';
			var focusfield='';
			
			if(getValueFromId('Client-ID')==""){ message+=newline+"CLIENT-ID";	newline=', '; 
				if(focusfield=='') focusfield='Client-ID';
			}
			
			if(getValueFromId('Reference')==""){ message+=newline+"Reference";	newline=', '; 
				if(focusfield=='') focusfield='Reference';
			}
			
			if(getValueFromId('security1')=="" ){
					message+=newline+"ISIN";	newline=', '; 
					if(focusfield=='') focusfield='security1';
			}
			
			if(getValueFromId('currency_hid')=="" ){
					message+=newline+"currency";	newline=', '; 
					if(focusfield=='') focusfield='currency';
			}
		
		  if(getValueFromId('Quantity')!="")
		  {
		  	if(!(getValueFromId('Quantity') == parseInt(getValueFromId('Quantity'))))
			{
		  		message+=newline + 'QUANTITY MUST BE NUMERIC!';
				newline=', ';
			}
				if(focusfield=='') focusfield='Reference';
		  }
		  else if(getValueFromId('Quantity')==""){ message+=newline+"Quantity"; 
		  		if(focusfield=='') focusfield='Reference';
		  }
		  
		   if(getValueFromId('credit')!="")
		  {
		  	if(!(getValueFromId('credit') == parseInt(getValueFromId('credit'))))
			{
		  		message+=newline + 'AMOUNT MUST BE NUMERIC!';
				newline=', ';
			}
				if(focusfield=='') focusfield='credit';
		  }
		  else if(getValueFromId('credit')==""){ message+=newline+"AMOUNT"; 
		  		if(focusfield=='') focusfield='credit';
		  }
		  
		  if(getValueFromSelect('client')=="" || getValueFromSelect('client')=="0"){
					message+=newline+"Custody A/C";	newline=', '; 
					if(focusfield=='') focusfield='client';
			}
		
		  reZip = new RegExp(/(^\d{4}-\d{2}-\d{2}$)|(^$)/);

		
		 if(message=="")
		 {
			document.getElementById('error1').style.display="none";
			document.getElementById('error2').innerHTML=message;
		   return true;
		 }
		 else {
		   		//alert(message);
				document.getElementById('error1').style.display="";
				document.getElementById('error2').innerHTML=message;
		  		if(focusfield!='') focusId(focusfield);
		   		return false;
		   }
		}
		
		

//Get Client Name

function getClientName()
{
	var clientid=getValueFromId('Client-ID');
	//var fieldsetSeller=getObj('fieldsetSellerDetails');
	//var fieldsetFund=getObj('fieldsetFundDetails');
	
	if(clientid!="")
	{
		getAJaxReqest();
		//setValueFromId('Client',"abc");
		
		$('#loading-dialog').dialog('open');
		
		var url="ajaxfiles/getclientinfo.php";
		var queryString="clientid="+clientid;
		
		req.open("POST", url, true); 
		req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
		req.send(queryString); 
		req.onreadystatechange=showClientInfo
		
	}
	else
	{
		setValueFromId('Client',"");
		//hidebyId('fieldsetSellerDetails');
		//hidebyId('fieldsetFundDetails');
	}
}

function showClientInfo()
{
	if(req.readyState==4){
		var result=req.responseText;
		if(result!="Not Found")
		{
			setValueFromId('Client',result);
			//showbyId('fieldsetSellerDetails');
			//showbyId('fieldsetFundDetails');
			
			var ob=document.getElementById('client');
							
			for(var j=ob.length;j>0;j--)
			{
				ob.remove(0);
			}
			
			var clientid=getValueFromId('Client-ID');
			getAJaxReqest1();
			
			var url="ajaxfiles/getcustodyac.php";
			var queryString1="id_client="+clientid;
			
			req1.open("POST", url, true); 
			req1.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
			req1.send(queryString1); 
			req1.onreadystatechange=function(){
				if(req1.readyState==4){
					var result1=req1.responseText;
					//alert(result1);
					if(result1=="0")
					{
							$('#client').append("<option value='0'>Selection</option>");
					}
					else if(result1=="-1")
					{
							$('#client').append("<option value='0'>Selection</option>");
					}
					else{
						var resArr=result1.split('|');
						
						for(var i=0;i<resArr.length;i++)
						{
							if(resArr[i]!="")
							{
								var tempArr=resArr[i].split(',');
								if(i==0)
									$('#client').append("<option value='0'>Selection</option>");
								$('#client').append("<option value='"+tempArr[0]+"'>"+tempArr[1]+"</option>");
							}
						}
					}
				}
			}
			
		}
		else if(result!="Not Found")
		{
			alert("Client Id does not exist.")
			setValueFromId('Client',"");
			//hidebyId('fieldsetSellerDetails');
			//hidebyId('fieldsetFundDetails');
		}
		else
		{
			alert(result);
			setValueFromId('Client',"");
			//hidebyId('fieldsetSellerDetails');
			//hidebyId('fieldsetFundDetails');
		}
		
		$('#loading-dialog').dialog('close');
	}
	else{
		setValueFromId('Client',"Loading..");
		/*hidebyId('fieldsetSellerDetails');
		hidebyId('fieldsetFundDetails');*/
	}
}

//Get Fund name after selecting ISIN Number
function GetFundName()
{
	$('#loading-dialog').dialog('open');
	var isinval=getValueFromId('security1');
	//alert(isinval);
	
	/*var ob=document.getElementById('currency');
							
	for(var j=ob.length;j>0;j--)
	{
		ob.remove(0);
	}*/
							
	if(isinval!="")
	{
		for(var i=0;i<JSONISIN.length;i++)
		{
			if(isinval==JSONISIN[i]['code'])
			{
				setSpanValueFromId('Name',JSONISIN[i]['name']);
				
				for(var j=0;j<JSONCurrency.length;j++)
				{
					//alert(JSONCurrency[j]['id']+" "+JSONISIN[i]['id_currency']);
					if(JSONCurrency[j]['id']==JSONISIN[i]['id_currency'])
					{
						setValueFromId("currency",JSONCurrency[j]['abbreviation']);
						setValueFromId("currency_hid",JSONCurrency[j]['id']);
						break;
					}
					else
					{
						setValueFromId("currency","");
						setValueFromId("currency_hid","");
					}
				}
				
				break;
			}
		}
	}
	else{
		setSpanValueFromId('Name','');
	}
	$('#loading-dialog').dialog('close');
}

//Get Custodian BIC Name

function GetCustodianBIC()
{
	var custodian=getValueFromId('Custodian');
	
	if(custodian!="")
	{
		getAJaxReqest();
		var url="ajaxfiles/getcustodianbicinfo.php";
		var queryString="custodian="+custodian;
		
		$('#loading-dialog').dialog('open');
		
		req.open("POST", url, true); 
		req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
		req.send(queryString); 
		req.onreadystatechange=showCustodianBICInfo
		
	}
	else
	{
		setValueFromId('Custodian_BIC',"");
	}
}

function showCustodianBICInfo()
{
	if(req.readyState==4){
		var result=req.responseText;
		//alert(result);
		if(result!="Not Found")
		{
			setValueFromId('Custodian_BIC',result);
		}
		else if(result!="Not Found")
		{
			alert("Custodian does not exist.")
			setValueFromId('Custodian_BIC',"");
		}
		else
		{
			alert(result);
			setValueFromId('Custodian_BIC',"");
		}
		
		$('#loading-dialog').dialog('close');
	}
	else{
		setValueFromId('Custodian_BIC',"Loading..");
	}
}

/////////////////////////////////////////////////////////////////////////////////////

function GetSeller()
{
	var custodian=getValueFromId('Partner');
	
	if(custodian!="")
	{
		getAJaxReqest();
		var url="ajaxfiles/getclientinfo.php";
		var queryString="clientid="+custodian;
		
		$('#loading-dialog').dialog('open');
		
		req.open("POST", url, true); 
		req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
		req.send(queryString); 
		req.onreadystatechange=showSeller
		
	}
	else
	{
		setValueFromId('BIC_Partner',"");
	}
}

function showSeller()
{
	if(req.readyState==4){
		var result=req.responseText;
		//alert(result);
		if(result!="Not Found")
		{
			setValueFromId('BIC_Partner',result);
		}
		else if(result!="Not Found")
		{
			alert("Custodian does not exist.")
			setValueFromId('BIC_Partner',"");
		}
		else
		{
			alert(result);
			setValueFromId('BIC_Partner',"");
		}
		
		$('#loading-dialog').dialog('close');
	}
	else{
		setValueFromId('BIC_Partner',"Loading..");
	}
}