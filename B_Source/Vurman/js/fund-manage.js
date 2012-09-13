function verifyManage()
{
	var message = '';
	var newline='';
	var focusfield='';
	if(getValueFromId('ISIN')==""){ message+=newline+"ISIN";	newline=', '; 
				if(focusfield=='') focusfield='ISIN';
			}
	if(getValueFromId('currency')==""){ message+=newline+"CURRENTCY";	newline=', '; 
				if(focusfield=='') focusfield='fund_name';
			}
	if(getValueFromId('fund_name')==""){ message+=newline+"FUND NAME";	newline=', '; 
				if(focusfield=='') focusfield='fund_name';
			}
	if(getValueFromId('fund_company')==""){ message+=newline+"FUND COMPANY";	newline=', '; 
				if(focusfield=='') focusfield='fund_company';
			}
	if(getValueFromId('fund_category')==""){ message+=newline+"FUND CATEGORY";	newline=', '; 
				if(focusfield=='') focusfield='fund_category';
			}
	if(getValueFromId('fund_status')==""){ message+=newline+"FUND STATUS";	newline=', '; 
				if(focusfield=='') focusfield='fund_status';
			}
	if(getValueFromId('domicile')==""){ message+=newline+"domicile";	newline=', '; 
				if(focusfield=='') focusfield='domicile';
			}
	if(getValueFromId('nav_value')==""){ message+=newline+"N.A.V VALUE";	newline=', '; 
				if(focusfield=='') focusfield='nav_value';
			}
	if(getValueFromId('nav_date')==""){ message+=newline+"N.A.V DATE";	newline=', '; 
				if(focusfield=='') focusfield='nav_date';
			}
	if(getValueFromId('fund_strategy')==""){ message+=newline+"FUND STRATEGY";	newline=', '; 
				if(focusfield=='') focusfield='fund_strategy';
			}
	if(getValueFromId('primary_strategy')==""){ message+=newline+"PRI STRATEGY";	newline=', '; 
				if(focusfield=='') focusfield='primary_strategy';
			}
	if(getValueFromId('secondary_strategy')==""){ message+=newline+"SECOND STRATEGY ";	newline=', '; 
				if(focusfield=='') focusfield='secondary_strategy';
			}
	if(getValueFromId('investment_objectives_a')==""){ message+=newline+"INVESTMENT A";	newline=', '; 
				if(focusfield=='') focusfield='investment_objectives_a';
			}
	if(getValueFromId('investment_objectives_b')==""){ message+=newline+"INVESTMENT B";	newline=', '; 
				if(focusfield=='') focusfield='investment_objectives_b';
			}
	if(getValueFromId('investment_objectives_c')==""){ message+=newline+"INVESTMENT C";	newline=', '; 
				if(focusfield=='') focusfield='investment_objectives_c';
			}
	if(getValueFromId('unique_feature_a')==""){ message+=newline+"UNIQUE A";	newline=', '; 
				if(focusfield=='') focusfield='unique_feature_a';
			}
	if(getValueFromId('unique_feature_b')==""){ message+=newline+"UNIQUE B";	newline=', '; 
				if(focusfield=='') focusfield='unique_feature_b';
			}
	  reZip = new RegExp(/(^\d{4}-\d{2}-\d{2}$)|(^$)/);
	  if(getValueFromId('inception_date')!=""){
		 	if(!reZip.test(getValueFromId('inception_date'))){
		  		message += newline + 'INCEPTION DATE FORMAT MUST BE YYYY-MM-DD !';	
				newline=', ';
				if(focusfield=='') focusfield='inception_date';
			}
		  }
		   else if(getValueFromId('inception_date')==""){
				message += newline + 'INCEPTION DATE';	
				newline=', ';
				if(focusfield=='') focusfield='inception_date';
		  }
	if(getValueFromId('current_assets')==""){ message+=newline+"CURRENT ASSETS";	newline=', '; 
				if(focusfield=='') focusfield='current_assets';
			}
	if(getValueFromId('risk_appetite')==""){ message+=newline+"RISK APPETIE";	newline=', '; 
				if(focusfield=='') focusfield='risk_appetite';
			}
	if(getValueFromId('geographical_exposure')==""){ message+=newline+"GEGRAPHICAL EXPOSURE";	newline=', '; 
				if(focusfield=='') focusfield='geographical_exposure';
			}
	if(getValueFromId('benchmark')==""){ message+=newline+"BENCHMARK";	newline=', '; 
				if(focusfield=='') focusfield='benchmark';
			}
	if(getValueFromId('last_audit')!=""){
		 	if(!reZip.test(getValueFromId('last_audit'))){
		  		message += newline + 'AUDIT DATE FORMAT MUST BE YYYY-MM-DD !';	
				newline=', ';
				if(focusfield=='') focusfield='last_audit';
			}
		  }
		   else if(getValueFromId('last_audit')==""){
				message += newline + 'LAST AUDIT';	
				newline=', ';
				if(focusfield=='') focusfield='last_audit';
		  }
	
	if(getValueFromId('add_info_a')==""){ message+=newline+"ADD INFO A";	newline=', '; 
				if(focusfield=='') focusfield='add_info_a';
			}
	if(getValueFromId('add_info_b')==""){ message+=newline+"ADD INFO B";	newline=', '; 
				if(focusfield=='') focusfield='add_info_b';
			}
	if(getValueFromId('transfer_agent_id')==""){ message+=newline+"TRANSFER AGENT";	newline=','; 
				if(focusfield=='') focusfield='transfer_agent_id';
			}
	if(getValueFromId('custodian_id')==""){ message+=newline+"CUSTODIAN";	newline=', '; 
				if(focusfield=='') focusfield='custodian_id';
			}
	if(getValueFromId('fund_advisor_id')==""){ message+=newline+"FUND ADVISOR";	newline=', '; 
				if(focusfield=='') focusfield='fund_advisor_id';
			}
	if(getValueFromId('fund_auditor_id')==""){ message+=newline+"FUND AUDITOR";	newline=', '; 
				if(focusfield=='') focusfield='fund_auditor_id';
			}
	if(getValueFromId('unique_id')==""){ message+=newline+"UNIQUE ID";	newline=', '; 
				if(focusfield=='') focusfield='unique_id';
			}
			
	// TABLE 2 INVESTMENT DETAILS		
	var message1 = '';
	if(getValueFromId('initial_minimum_investment')==""){ message1+=newline+" INITIAL MINIMUM INVESTMENT";	newline=', '; 
				if(focusfield=='') focusfield='initial_minimum_investment';
			}
	if(getValueFromId('minimum_investment')==""){ message1+=newline+"MINIMUM INVESTMENT";	newline=', '; 
				if(focusfield=='') focusfield='minimum_investment';
			}
	if(getValueFromId('minimum_units_investment')==""){ message1+=newline+"MINIMUM UNITS INVeSTMENT";	newline=', '; 
				if(focusfield=='') focusfield='minimum_units_investment';
			}
	if(getValueFromId('lockup_period')==""){ message1+=newline+"LOCKUP PERIOD";	newline=', '; 
				if(focusfield=='') focusfield='lockup_period';
			}
	if(getValueFromId('notice_period_i')==""){ message1+=newline+"NOTICE PERIOD";	newline=', '; 
				if(focusfield=='') focusfield='notice_period_i';
			}
	if(getValueFromId('trading_frequency_i')==""){ message1+=newline+"TRADING FREQUENCY";	newline=', '; 
				if(focusfield=='') focusfield='trading_frequency_i';
			}
	if(getValueFromId('trading_date_i')!=""){
		 	if(!reZip.test(getValueFromId('trading_date_i'))){
		  		message1 += newline + 'TRADING FORMAT MUST BE YYYY-MM-DD !';	
				newline=', ';
				if(focusfield=='') focusfield='trading_date_i';
			}
		  }
		   else if(getValueFromId('trading_date_i')==""){
				message1+= newline + 'TRANDING DATE';	
				newline=', ';
				if(focusfield=='') focusfield='trading_date_i';
		  }
	
	if(getValueFromId('cut_off_time')==""){ message1+=newline+"CUT OFF TIME";	newline=', '; 
				if(focusfield=='') focusfield='cut_off_time';
			}
	if(getValueFromId('settlement_cycle_i')==""){ message1+=newline+"SETTLEMENT CYCLE";	newline=', '; 
				if(focusfield=='') focusfield='settlement_cycle_i';
			}
	if(getValueFromId('administration_fee')==""){ message1+=newline+"ADMINISTRATIION FEE";	newline=', '; 
				if(focusfield=='') focusfield='administration_fee';
			}
	if(getValueFromId('accepted_investor_types')==""){ message1+=newline+"ACCEPTED INVESTOR TYPES";	newline=', '; 
				if(focusfield=='') focusfield='accepted_investor_types';
			}
	if(getValueFromId('performance_since_start')==""){ message1+=newline+"PERFORMANCE SINCE START";	newline=', '; 
				if(focusfield=='') focusfield='performance_since_start';
			}
	if(getValueFromId('performance_ytd')==""){ message1+=newline+"PERFORMANCE YTD";	newline=', '; 
				if(focusfield=='') focusfield='performance_ytd';
			}
	if(getValueFromId('high_water_mark')==""){ message1+=newline+"HIGHT WATER MARK";	newline=', '; 
				if(focusfield=='') focusfield='high_water_mark';
			}
	if(getValueFromId('hurdle_rate')==""){ message1+=newline+"HURDLE RATE";	newline=', '; 
				if(focusfield=='') focusfield='hurdle_rate';
			}
	if(getValueFromId('add_info_a')==""){ message1+=newline+"ADD INFO A";	newline=', '; 
				if(focusfield=='') focusfield='add_info_a';
			}
	if(getValueFromId('add_info_b')==""){ message1+=newline+"ADD INFO B";	newline=', '; 
				if(focusfield=='') focusfield='add_info_b';
			}
	if(getValueFromId('funds_id')==""){ message1+=newline+"FUNDS ID";	newline=', '; 
				if(focusfield=='') focusfield='funds_id';
			}
			
	// Check erro for talbe subcription details
	var message2 = '';
	if(getValueFromId('funds_id_sub')==""){ message2+=newline+"FUNDS ID";	newline=', '; 
				if(focusfield=='') focusfield='funds_id_sub';
			}
	if(getValueFromId('minimum_front_end_fee')==""){ message2+=newline+"MINIMUM FRONT END FEE";	newline=', '; 
				if(focusfield=='') focusfield='minimum_front_end_fee';
			}
	if(getValueFromId('maximum_front_end_fee')==""){ message2+=newline+"MAXIMUM FRONT END FEE";	newline=', '; 
				if(focusfield=='') focusfield='maximum_front_end_fee';
			}
	if(getValueFromId('management_fee')==""){ message2+=newline+"MANAGEMENT FEE";	newline=', '; 
				if(focusfield=='') focusfield='management_fee';
			}
	if(getValueFromId('additional_information')==""){ message2+=newline+"ADDITIONAL INFORMATION";	newline=', '; 
				if(focusfield=='') focusfield='additional_information';
			}
	if(getValueFromId('performance_fee')==""){ message2+=newline+"PERFORMACE FEE";	newline=', '; 
				if(focusfield=='') focusfield='performance_fee';
			}
	//Check erro not entry  insert into RedemptionFees
	var message3 = '';
	if(getValueFromId('funds_id_red')==""){ message3+=newline+"FUNDS ID RED";	newline=', '; 
				if(focusfield=='') focusfield='funds_id_red';
			}
	if(getValueFromId('minimum_amount')==""){ message3+=newline+"MINIMUM AMOUNT";	newline=', '; 
				if(focusfield=='') focusfield='minimum_amount';
			}
	if(getValueFromId('notice_period')==""){ message3+=newline+"NOTICE PERIOD";	newline=', '; 
				if(focusfield=='') focusfield='notice_period';
			}
	if(getValueFromId('trading_date')!=""){
		 	if(!reZip.test(getValueFromId('trading_date'))){
		  		message3 += newline + 'TRADING FORMAT MUST BE YYYY-MM-DD !';	
				newline=', ';
				if(focusfield=='') focusfield='trading_date';
			}
		  }
		   else if(getValueFromId('trading_date')==""){
				message3 += newline + 'TRANDING DATE';	
				newline=', ';
				if(focusfield=='') focusfield='trading_date';
		  }
	if(getValueFromId('settlement_cycle')==""){ message3+=newline+"SETTLEMENT CYCLE";	newline=', '; 
				if(focusfield=='') focusfield='settlement_cycle';
			}
	if(getValueFromId('minimum_units')==""){ message3+=newline+"MINIMUM UNITS ";	newline=', '; 
				if(focusfield=='') focusfield='minimum_units';
			}
	if(getValueFromId('trading_frequency')==""){ message3+=newline+"TRADING FREQUENCY";	newline=', '; 
				if(focusfield=='') focusfield='trading_frequency';
			}
	if(getValueFromId('cut_of_time')==""){ message3+=newline+"CUT OF TIME";	newline=', '; 
				if(focusfield=='') focusfield='cut_of_time';
			}
	if(getValueFromId('additional_information_red')==""){ message3+=newline+"ADDITIONAL INFORMATION";	newline=', '; 
				if(focusfield=='') focusfield='additional_information_red';
			}
			
	// Check erro Insert Into RedemptionFee
	var message4 = '';
	if(getValueFromId('redemption_details_id')==""){ message4+=newline+"Redemption details id";	newline=', '; 
				if(focusfield=='') focusfield='redemption_details_id';
			}
	if(getValueFromId('minimum_back_end_fee')==""){ message4+=newline+"Minimum back end fee ";	newline=', '; 
				if(focusfield=='') focusfield='minimum_back_end_fee';
			}
	if(getValueFromId('early_withdrawal_fee')==""){ message4+=newline+"Early withdrawal fee";	newline=', '; 
				if(focusfield=='') focusfield='early_withdrawal_fee';
			}
	if(getValueFromId('maximum_back_end_fee')==""){ message4+=newline+"Maximum back end fee";	newline=', '; 
				if(focusfield=='') focusfield='maximum_back_end_fee';
			}
	if(getValueFromId('additional_information_redfee')==""){ message4+=newline+"ADDITIONAL INFORMATION";	newline=', '; 
				if(focusfield=='') focusfield='additional_information_redfee';
			}
				
	// Check erro Insert Into TRansferAgent
	var message5 = '';
	if(getValueFromId('transfer_agent')==""){ message5+=newline+"Transfer Agent";	newline=', '; 
				if(focusfield=='') focusfield='transfer_agent';
			}
	if(getValueFromId('postal_address')==""){ message5+=newline+"Postal address ";	newline=', '; 
				if(focusfield=='') focusfield='postal_address';
			}
	if(getValueFromId('postal_address_I')==""){ message5+=newline+"Postal address I";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_I';
			}
	if(getValueFromId('phone_number')==""){ message5+=newline+"Phone number";	newline=', '; 
				if(focusfield=='') focusfield='phone_number';
			}
	if(getValueFromId('account_number')==""){ message5+=newline+"Account number";	newline=', '; 
				if(focusfield=='') focusfield='account_number';
			}
	if(getValueFromId('key_contact_persons')==""){ message5+=newline+"Key contact persons";	newline=', '; 
				if(focusfield=='') focusfield='key_contact_persons';
			}
	if(getValueFromId('email_address')==""){ message5+=newline+"Email address";	newline=', '; 
				if(focusfield=='') focusfield='email_address';
			}
	if(getValueFromId('fax_no')==""){ message5+=newline+"Fax no";	newline=', '; 
				if(focusfield=='') focusfield='fax_no';
			}
	if(getValueFromId('additional_information_transferagent')==""){ message5+=newline+"Additional information";	newline=', '; 
				if(focusfield=='') focusfield='additional_information_transferagent';
			}
	if(getValueFromId('zip')==""){ message5+=newline+"ZIP";	newline=', '; 
				if(focusfield=='') focusfield='zip';
			}
	
	// Check erro Insert Into Custodian
	var message6 = '';
		if(getValueFromId('cpid_cus')==""){ message6+=newline+"Cpid";	newline=', '; 
				if(focusfield=='') focusfield='cpid_cus';
			}
	if(getValueFromId('custid_cus')==""){ message6+=newline+"Custid";	newline=', '; 
				if(focusfield=='') focusfield='custid_cus';
			}
	
	
	// Check erro Insert Into fundadvisor
	var message7 = '';
	if(getValueFromId('fund_advisor_adv')==""){ message7+=newline+"Fund advisort adv";	newline=', '; 
				if(focusfield=='') focusfield='fund_advisor_adv';
			}
	if(getValueFromId('postal_address_adv')==""){ message7+=newline+"Postal address ";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_adv';
			}
	if(getValueFromId('postal_address_adv_I')==""){ message7+=newline+"Postal address I";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_adv_I';
			}
	if(getValueFromId('phone_number_adv')==""){ message7+=newline+"Phone number";	newline=', '; 
				if(focusfield=='') focusfield='phone_number_adv';
			}
	if(getValueFromId('email_address_adv')==""){ message7+=newline+"Email address";	newline=', '; 
				if(focusfield=='') focusfield='email_address_adv';
			}
	if(getValueFromId('fax_number_adv')==""){ message7+=newline+"Fax number";	newline=', '; 
				if(focusfield=='') focusfield='fax_number_adv';
			}
	if(getValueFromId('additional_information_adv')==""){ message7+=newline+"Additional information";	newline=', '; 
				if(focusfield=='') focusfield='additional_information_adv';
			}
	if(getValueFromId('zip_city_adv')==""){ message7+=newline+"Fax no";	newline=', '; 
				if(focusfield=='') focusfield='zip_city_adv';
			}
			
			
	// Check erro Insert Into fundauditor
	var message8 = '';
	if(getValueFromId('fund_auditor_fau')==""){ message8+=newline+"Fund auditor";	newline=', '; 
				if(focusfield=='') focusfield='fund_auditor_fau';
			}
	if(getValueFromId('postal_address_fau')==""){ message8+=newline+"Postal address auditor ";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_fau';
			}
	if(getValueFromId('postal_address_fau_I')==""){ message8+=newline+"Postal address auditor";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_fau_I';
			}
	if(getValueFromId('phone_number_fau')==""){ message8+=newline+"Phone number";	newline=', '; 
				if(focusfield=='') focusfield='phone_number_fau';
			}
	if(getValueFromId('email_address_fau')==""){ message8+=newline+"Email address fau";	newline=', '; 
				if(focusfield=='') focusfield='email_address_fau';
			}
	if(getValueFromId('fax_number_fau')==""){ message8+=newline+"Fax number fau";	newline=', '; 
				if(focusfield=='') focusfield='fax_number_fau';
			}
	if(getValueFromId('additional_information_fau')==""){ message8+=newline+"Additional information fau";	newline=', '; 
				if(focusfield=='') focusfield='additional_information_fau';
			}
	if(getValueFromId('zip_city_fau')==""){ message8+=newline+"Zip city fau";	newline=', '; 
				if(focusfield=='') focusfield='zip_city_fau';
			}
	
	if(message==""&&message1==""&&message2==""&&message3==""&&message4==""&&message5==""&&message6==""&&message7==""&&message8=="")
	{
		
		return true;
	}
	else
	{
		document.getElementById('errorLable').innerHTML="Mandatory Fields * Are :<br/>";
		document.getElementById('errortbl1').innerHTML="<p style='color:red;'>"+message+"</p>";
		document.getElementById('errortbl2').innerHTML="<p style='color:red;'>"+message1+"</p>";
		document.getElementById('errortbl3').innerHTML="<p style='color:red;'>"+message2+"</p>";
		document.getElementById('errortbl4').innerHTML="<p style='color:red;'>"+message3+"</p>";
		document.getElementById('errortbl5').innerHTML="<p style='color:red;'>"+message4+"</p>";
		document.getElementById('errortbl6').innerHTML="<p style='color:red;'>"+message5+"</p>";
		document.getElementById('errortbl7').innerHTML="<p style='color:red;'>"+message6+"</p>";
		document.getElementById('errortbl8').innerHTML="<p style='color:red;'>"+message7+"</p>";
		document.getElementById('errortbl9').innerHTML="<p style='color:red;'>"+message8+"</p>";
		if(focusfield!='') focusId(focusfield);
		  return false;
	}	  
}
function GetTransferAgent()
{
	var transfer_agent_id=getValueFromId('id_transfer');
	//alert("Co getJaxRequest");
	if(transfer_agent_id!="")
	{
		getAJaxReqest();
		var url="ajaxfiles/gettransferagent.php";
		var queryString="transfer_agent_id="+transfer_agent_id;
		//alert(queryString);
		req.open("POST", url, true); 
		//alert("Chay vao trong NA");
		req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
		req.send(queryString); 
		req.onreadystatechange=showTransferAgentInfo;
	}
	else
		alert("Can't not value");
}
function showTransferAgentInfo()
{
	if(req.readyState==4){
		var result=req.responseText;
		//alert(result);
		if(result!="Not Found")
		{
			var resArr=result.split("|");
			//alert(resArr);
			setValueFromId('transfer_agent',resArr[0]);
				document.getElementById('transfer_agent').readOnly=true;
			setValueFromId('postal_address',resArr[1]);
			document.getElementById('postal_address').readOnly=true;
			setValueFromId('postal_address_I',resArr[2]);
			document.getElementById('postal_address_I').readOnly=true;
			setValueFromId('phone_number',resArr[3]);
			document.getElementById('phone_number').readOnly=true;
			setValueFromId('account_number',resArr[4]);
				document.getElementById('account_number').readOnly=true;
			setValueFromId('key_contact_persons',resArr[5]);
			document.getElementById('key_contact_persons').readOnly=true;
			setValueFromId('email_address',resArr[6]);
			document.getElementById('email_address').readOnly=true;
			setValueFromId('fax_no',resArr[7]);
			document.getElementById('fax_no').readOnly=true;
			setValueFromId('additional_information_transferagent',resArr[8]);
			document.getElementById('additional_information_transferagent').readOnly=true;
			setValueFromId('zip',resArr[9]);
			document.getElementById('zip').readOnly=true;
		}
		else
		{
			setValueFromId('transfer_agent','');
			document.getElementById('transfer_agent').readOnly=false;
			setValueFromId('postal_address','');
			document.getElementById('postal_address').readOnly=false;
			setValueFromId('postal_address_I','');
			document.getElementById('postal_address_I').readOnly=false;
			setValueFromId('phone_number','');
			document.getElementById('phone_number').readOnly=false;
			setValueFromId('account_number','');
			document.getElementById('account_number').readOnly=false;
			setValueFromId('key_contact_persons','');
			document.getElementById('key_contact_persons').readOnly=false;
			setValueFromId('email_address','');
			document.getElementById('email_address').readOnly=false;
			setValueFromId('fax_no','');
			document.getElementById('fax_no').readOnly=false;
			setValueFromId('additional_information_transferagent','');
			document.getElementById('additional_information_transferagent').readOnly=false;
			setValueFromId('zip','');
			document.getElementById('zip').readOnly=false;
				
		}
	}
}
function GetCustodian_cus()
{
	var id=getValueFromId('custodian_id_cus');
	//alert("getJaxRequest");
	if(id!="0")
	{
		getAJaxReqest();
		var url="ajaxfiles/getcustodianpersonal.php";
		var queryString="id_cus="+id;
		//alert(queryString);
		req.open("POST", url, true); 
		//alert("Chay vao trong NA");
		req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
		req.send(queryString); 
		req.onreadystatechange=showCustodian_cus;
	}
	else
		{
			
			setValueFromId('cpid_cus','');
			document.getElementById('cpid_cus').readOnly=false;
			setValueFromId('counterparty_cus','');
			document.getElementById('counterparty_cus').readOnly=false;
			setValueFromId('biccp_cus','');
			document.getElementById('biccp_cus').readOnly=false;
			setValueFromId('custid_cus','');
			document.getElementById('custid_cus').readOnly=false;
			setValueFromId('custodian_cus','');
			document.getElementById('custodian_cus').readOnly=false;
			setValueFromId('biccust_cus','');
			document.getElementById('biccust_cus').readOnly=false;
			setValueFromId('cpacwithcust_cus','');
			document.getElementById('cpacwithcust_cus').readOnly=false;
			
			
		}
}
function showCustodian_cus()
{
	if(req.readyState==4){
		var result=req.responseText;
		//alert(result);
		if(result!="Not Found")
		{
			var resArr=result.split("|");
			//alert(resArr);
			setValueFromId('cpid_cus',resArr[0]);
			document.getElementById('cpid_cus').readOnly=true;
			setValueFromId('counterparty_cus',resArr[1]);
			document.getElementById('counterparty_cus').readOnly=true;
			setValueFromId('biccp_cus',resArr[2]);
			document.getElementById('biccp_cus').readOnly=true;
			setValueFromId('custid_cus',resArr[3]);
			document.getElementById('custid_cus').readOnly=true;
			setValueFromId('custodian_cus',resArr[4]);
			document.getElementById('custodian_cus').readOnly=true;
			setValueFromId('biccust_cus',resArr[5]);
			document.getElementById('biccust_cus').readOnly=true;
			setValueFromId('cpacwithcust_cus',resArr[6]);
			document.getElementById('cpacwithcust_cus').readOnly=true;
			
		}
		
	}
}
function GetFundAdvisor()
{
	var id=getValueFromId('fund_advisor_id_adv');
	//alert("getJaxRequest");
	if(id!="0")
	{
		getAJaxReqest();
		var url="ajaxfiles/getFundAdvisor.php";
		var queryString="id="+id;
		//alert(queryString);
		req.open("POST", url, true); 
		//alert("Chay vao trong NA");
		req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
		req.send(queryString); 
		req.onreadystatechange=showFundAdvisor;
	}
	else
		{
			
			setValueFromId('fund_advisor_adv','');
			document.getElementById('fund_advisor_adv').readOnly=false;
			setValueFromId('postal_address_adv','');
			document.getElementById('postal_address_adv').readOnly=false;
			setValueFromId('postal_address_adv_I','');
			document.getElementById('postal_address_adv_I').readOnly=false;
			setValueFromId('phone_number_adv','');
			document.getElementById('phone_number_adv').readOnly=false;
			setValueFromId('email_address_adv','');
			document.getElementById('email_address_adv').readOnly=false;
			setValueFromId('fax_number_adv','');
			document.getElementById('fax_number_adv').readOnly=false;
			setValueFromId('additional_information_adv','');
			document.getElementById('additional_information_adv').readOnly=false;
			setValueFromId('zip_city_adv','');
			document.getElementById('zip_city_adv').readOnly=false;
		}
}
function showFundAdvisor()
{
	if(req.readyState==4){
		var result=req.responseText;
		//alert(result);
		if(result!="Not Found")
		{
			var resArr=result.split("|");
			//alert(resArr);
			setValueFromId('fund_advisor_adv',resArr[0]);
			document.getElementById('fund_advisor_adv').readOnly=true;
			setValueFromId('postal_address_adv',resArr[1]);
			document.getElementById('postal_address_adv').readOnly=true;
			setValueFromId('postal_address_adv_I',resArr[2]);
			document.getElementById('postal_address_adv_I').readOnly=true;
			setValueFromId('phone_number_adv',resArr[3]);
			document.getElementById('phone_number_adv').readOnly=true;
			setValueFromId('email_address_adv',resArr[4]);
			document.getElementById('email_address_adv').readOnly=true;
			setValueFromId('fax_number_adv',resArr[5]);
			document.getElementById('fax_number_adv').readOnly=true;
			setValueFromId('additional_information_adv',resArr[6]);
			document.getElementById('additional_information_adv').readOnly=true;
			setValueFromId('zip_city_adv',resArr[7]);
		    document.getElementById('zip_city_adv').readOnly=true;
			
		}
		
	}
}
function GetFundAuditor()
{
	var id=getValueFromId('fund_auditor_id_fau');
	//alert("getJaxRequest");
	if(id!="0")
	{
		getAJaxReqest();
		var url="ajaxfiles/getFundAuditor.php";
		var queryString="id="+id;
		//alert(queryString);
		req.open("POST", url, true); 
		//alert("Chay vao trong NA");
		req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
		req.send(queryString); 
		req.onreadystatechange=showFundAuditor;
	}
	else
		{
			
			setValueFromId('fund_auditor_fau','');
			document.getElementById('fund_auditor_fau').readOnly=false;
			setValueFromId('postal_address_fau','');
			document.getElementById('postal_address_fau').readOnly=false;
			setValueFromId('postal_address_fau_I','');
			document.getElementById('postal_address_fau_I').readOnly=false;
			setValueFromId('phone_number_fau','');
			document.getElementById('phone_number_fau').readOnly=false;	
			setValueFromId('email_address_fau','');
			document.getElementById('email_address_fau').readOnly=false;	
			setValueFromId('fax_number_fau','');
			document.getElementById('fax_number_fau').readOnly=false;
			setValueFromId('additional_information_fau','');
			document.getElementById('additional_information_fau').readOnly=false;
			setValueFromId('zip_city_fau','');
			document.getElementById('zip_city_fau').readOnly=false;
		}
}
function showFundAuditor()
{
	if(req.readyState==4){
		var result=req.responseText;
		//alert(result);
		if(result!="Not Found")
		{
			var resArr=result.split("|");
			//alert(resArr);
			setValueFromId('fund_auditor_fau',resArr[0]);
			document.getElementById('fund_auditor_fau').readOnly=true;
			setValueFromId('postal_address_fau',resArr[1]);
			document.getElementById('postal_address_fau').readOnly=true;
			setValueFromId('postal_address_fau_I',resArr[2]);
			document.getElementById('postal_address_fau_I').readOnly=true;
			setValueFromId('phone_number_fau',resArr[3]);
			document.getElementById('phone_number_fau').readOnly=true;	
			setValueFromId('email_address_fau',resArr[4]);
			document.getElementById('email_address_fau').readOnly=true;	
			setValueFromId('fax_number_fau',resArr[5]);
			document.getElementById('fax_number_fau').readOnly=true;
			setValueFromId('additional_information_fau',resArr[6]);
			document.getElementById('additional_information_fau').readOnly=true;
			setValueFromId('zip_city_fau',resArr[7]);
			document.getElementById('zip_city_fau').readOnly=true;
			
		}
		
	}
}
