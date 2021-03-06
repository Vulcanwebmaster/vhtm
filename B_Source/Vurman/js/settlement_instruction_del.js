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
			
			/*if(getValueFromSelect('currency')=="" || getValueFromSelect('currency')=="0"){
					message+=newline+"currency";	newline=', '; 
					if(focusfield=='') focusfield='currency';
			}*/
			
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
			  newline=', ';
		  		if(focusfield=='') focusfield='Reference';
		  }
		 
		  if(getValueFromSelect('custody-ac')=="" || getValueFromSelect('custody-ac')=="0"){
					message+=newline+"Custody A/C";	newline=', '; 
					if(focusfield=='') focusfield='custody-ac';
			}
			 //return false;
		
		  reZip = new RegExp(/(^\d{4}-\d{2}-\d{2}$)|(^$)/);
			
		  if(getValueFromId('Trade_Date')!=""){
		 	if(!reZip.test(getValueFromId('Trade_Date'))){
		  		message += newline + 'TRADE DATE FORMAT MUST BE YYYY-MM-DD !';	
				newline=', ';
				if(focusfield=='') focusfield='Trade_Date';
			}
		  }
		   else if(getValueFromId('Trade_Date')==""){
				message += newline + 'T/D';	
				newline=', ';
				if(focusfield=='') focusfield='Trade_Date';
		  }
		  
		   if(getValueFromId('Settlement_Date')!=""){
		 	if(!reZip.test(getValueFromId('Settlement_Date'))){
		  		message += newline + 'SETTLEMENT DATE FORMAT MUST BE YYYY-MM-DD !';	
				if(focusfield=='') focusfield='Settlement_Date';
			}
		  }
		  else if(getValueFromId('Settlement_Date')==""){
				message += newline + 'V/D';	
				newline=', ';
				if(focusfield=='') focusfield='Settlement_Date';
		  }
		  
		  if(getValueFromId('Partner')==""){ message+=newline+"Seller";	newline=', '; 
				if(focusfield=='') focusfield='Partner';
			}
			
		  if(getValueFromId('Custodian')==""){ message+=newline+"Custodian";	newline=', '; 
				if(focusfield=='') focusfield='Custodian';
			}

		
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
		function switc(val) 
		{
		  document.getElementById('xxx').style.visibility = (val == 'switch') ? 'visible' : 'hidden';
		  if(val!='switch')
			document.getElementById('amount2').value='0';
		
		  return false;
		}
		

//Get Client Name

function getClientName()
{
	var clientid=getValueFromId('Client-ID');
	var fieldsetSeller=getObj('fieldsetSellerDetails');
	var fieldsetFund=getObj('fieldsetFundDetails');
	
	if(clientid!="")
	{
		getAJaxReqest();
		//setValueFromId('Client',"abc");
		
		var url="ajaxfiles/getclientinfo.php";
		var queryString="clientid="+clientid;
		$('#loading-dialog').dialog('open');
		
		req.open("POST", url, true); 
		req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
		req.send(queryString); 
		req.onreadystatechange=showClientInfo
		
	}
	else
	{
		setValueFromId('Client',"");
		hidebyId('fieldsetSellerDetails');
		hidebyId('fieldsetFundDetails');
	}
}

function showClientInfo()
{
	if(req.readyState==4){
		var result=req.responseText;
		if(result!="Not Found")
		{
			//setValueFromId('Client',result);
			var resArr=result.split('|');
						
			setValueFromId('company',resArr[0]);
			setValueFromId('Client',resArr[1]);
			showbyId('fieldsetSellerDetails');
			showbyId('fieldsetFundDetails');
			
			var ob=document.getElementById('custody-ac');
							
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
							$('#custody-ac').append("<option value='0'>select</option>");
					}
					else if(result1=="-1")
					{
							$('#custody-ac').append("<option value='0'>select</option>");
					}
					else{
						var resArr=result1.split('|');
						
						for(var i=0;i<resArr.length;i++)
						{
							if(resArr[i]!="")
							{
								var tempArr=resArr[i].split(',');
								if(i==0)
									$('#custody-ac').append("<option value='0'>select</option>");
								$('#custody-ac').append("<option value='"+tempArr[0]+"'>"+tempArr[1]+"</option>");
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
			hidebyId('fieldsetSellerDetails');
			hidebyId('fieldsetFundDetails');
		}
		else
		{
			alert(result);
			setValueFromId('Client',"");
			hidebyId('fieldsetSellerDetails');
			hidebyId('fieldsetFundDetails');
		}
	}
	else{
		setValueFromId('Client',"Loading..");
		hidebyId('fieldsetSellerDetails');
		hidebyId('fieldsetFundDetails');
	}
	$('#loading-dialog').dialog('close');
}

//Get Fund name after selecting ISIN Number
/*function GetFundName()
{
	$('#loading-dialog').dialog('open');
	var isinval=getValueFromSelect('security1');
	//alert(isinval);
	
	var ob=document.getElementById('currency');
							
	for(var j=ob.length;j>0;j--)
	{
		ob.remove(0);
	}
	//$('#currency').append("<option value='0'>Selection</option>");
	if(isinval>0)
	{
		for(var i=0;i<JSONISIN.length;i++)
		{
			if(isinval==JSONISIN[i]['id'])
			{
				setValueFromId('Name',JSONISIN[i]['name']);
				
				for(var j=0;j<JSONCurrency.length;j++)
				{
					//alert(JSONCurrency[j]['id']+" "+JSONISIN[i]['id_currency']);
					if(JSONCurrency[j]['id']==JSONISIN[i]['id_currency'])
						$('#currency').append("<option value='"+JSONCurrency[j]['id']+"'>"+JSONCurrency[j]['abbreviation']+"</option>");
				}
				
				break;
			}
		}
	}
	else{
		setValueFromId('Name','');
	}
	$('#loading-dialog').dialog('close');
}*/

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
				setSpanValueFromId('NameSpan',JSONISIN[i]['name']);
				setValueFromId("Name",JSONISIN[i]['name']);
				setValueFromId("TA_Name",JSONISIN[i]['transferagent']);
				setValueFromId("TA_BIC",JSONISIN[i]['bicta']);
				for(var j=0;j<JSONCurrency.length;j++)
				{
					//alert(JSONCurrency[j]['id']+" "+JSONISIN[i]['id_currency']);
					if(JSONCurrency[j]['id']==JSONISIN[i]['id_currency'])
					{
						//$('#currency').append("<option value='"+JSONCurrency[j]['id']+"'>"+JSONCurrency[j]['abbreviation']+"</option>");
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
		setSpanValueFromId('NameSpan','');
		setValueFromId("Name","");
	}
	$('#loading-dialog').dialog('close');
}

function GetCustodian()
{
	var custodianid=getValueFromId('custodianid');
	if(custodianid!="")
	{
		$('#loading-dialog').dialog('open');
		getAJaxReqest();
		var url="ajaxfiles/getcustodianbicinfo.php";
		var queryString="custodianid="+custodianid;
		
		req.open("POST", url, true); 
		req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
		req.send(queryString); 
		req.onreadystatechange=showCustodianInfo
		
	}
	else
	{
		setValueFromId('Custodian_BIC',"");
	}
}

function showCustodianInfo()
{
	if(req.readyState==4){
		var result=req.responseText;
		//alert(result);
		if(result!="Not Found")
		{
			var resArr=result.split("|");
			//alert(resArr);
			setValueFromId('Custodian',resArr[0]);
			setValueFromId('Custodian_BIC',resArr[1]);
			setValueFromId('client_ac_cust',resArr[2]);
			 
			/*setValueFromId('TA_Name',resArr[3]);
			setValueFromId('TA_BIC',resArr[4]);
			setValueFromId('cust_ac_ta',resArr[5]);*/
		} else {
			alert("Custodian does not exist.");
			setValueFromId('Custodian',"");
			setValueFromId('Custodian_BIC',"");
			setValueFromId('client_ac_cust',"");
		}
		$('#loading-dialog').dialog('close');
	}
	else{
		setValueFromId('Custodian_BIC',"Loading..");
	}
	
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
	//var custodian=getValueFromId('sellerid');
	var sellerid=getValueFromId('sellerid');
	if(sellerid!="")
	{
		getAJaxReqest();
		//var url="ajaxfiles/getclientinfo.php";
		var url="ajaxfiles/getseller.php";
		var queryString="sellerid="+sellerid;
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
			var resArr=result.split('|');
			
			setValueFromId('Partner',resArr[0]);
			setValueFromId('BIC_Partner',resArr[1]);
		} else {
			alert("Buyer does not exist.");
			setValueFromId('Partner',"");
			setValueFromId('BIC_Partner',"");
		}
		$('#loading-dialog').dialog('close');
	}
	else{
		setValueFromId('BIC_Partner',"Loading..");
	}
}

