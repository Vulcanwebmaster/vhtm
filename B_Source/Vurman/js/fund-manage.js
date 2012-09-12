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
	message=message+"SS";
	if(getValueFromId('initial_minimum_investment')==""){ message+=newline+" INITIAL MINIMUM INVESTMENT";	newline=', '; 
				if(focusfield=='') focusfield='initial_minimum_investment';
			}
	if(getValueFromId('minimum_investment')==""){ message+=newline+"MINIMUM INVESTMENT";	newline=', '; 
				if(focusfield=='') focusfield='minimum_investment';
			}
	if(getValueFromId('minimum_units_investment')==""){ message+=newline+"MINIMUM UNITS INVeSTMENT";	newline=', '; 
				if(focusfield=='') focusfield='minimum_units_investment';
			}
	if(getValueFromId('lockup_period')==""){ message+=newline+"LOCKUP PERIOD";	newline=', '; 
				if(focusfield=='') focusfield='lockup_period';
			}
	if(getValueFromId('notice_period_i')==""){ message+=newline+"NOTICE PERIOD";	newline=', '; 
				if(focusfield=='') focusfield='notice_period_i';
			}
	if(getValueFromId('trading_frequency_i')==""){ message+=newline+"TRADING FREQUENCY";	newline=', '; 
				if(focusfield=='') focusfield='trading_frequency_i';
			}
	if(getValueFromId('trading_date_i')!=""){
		 	if(!reZip.test(getValueFromId('trading_date_i'))){
		  		message += newline + 'TRADING FORMAT MUST BE YYYY-MM-DD !';	
				newline=', ';
				if(focusfield=='') focusfield='trading_date_i';
			}
		  }
		   else if(getValueFromId('trading_date_i')==""){
				message += newline + 'TRANDING DATE';	
				newline=', ';
				if(focusfield=='') focusfield='trading_date_i';
		  }
	
	if(getValueFromId('cut_off_time')==""){ message+=newline+"CUT OFF TIME";	newline=', '; 
				if(focusfield=='') focusfield='cut_off_time';
			}
	if(getValueFromId('settlement_cycle_i')==""){ message+=newline+"SETTLEMENT CYCLE";	newline=', '; 
				if(focusfield=='') focusfield='settlement_cycle_i';
			}
	if(getValueFromId('administration_fee')==""){ message+=newline+"ADMINISTRATIION FEE";	newline=', '; 
				if(focusfield=='') focusfield='administration_fee';
			}
	if(getValueFromId('accepted_investor_types')==""){ message+=newline+"ACCEPTED INVESTOR TYPES";	newline=', '; 
				if(focusfield=='') focusfield='accepted_investor_types';
			}
	if(getValueFromId('performance_since_start')==""){ message+=newline+"PERFORMANCE SINCE START";	newline=', '; 
				if(focusfield=='') focusfield='performance_since_start';
			}
	if(getValueFromId('performance_ytd')==""){ message+=newline+"PERFORMANCE YTD";	newline=', '; 
				if(focusfield=='') focusfield='performance_ytd';
			}
	if(getValueFromId('high_water_mark')==""){ message+=newline+"HIGHT WATER MARK";	newline=', '; 
				if(focusfield=='') focusfield='high_water_mark';
			}
	if(getValueFromId('hurdle_rate')==""){ message+=newline+"HURDLE RATE";	newline=', '; 
				if(focusfield=='') focusfield='hurdle_rate';
			}
	if(getValueFromId('add_info_a')==""){ message+=newline+"ADD INFO A";	newline=', '; 
				if(focusfield=='') focusfield='add_info_a';
			}
	if(getValueFromId('add_info_b')==""){ message+=newline+"ADD INFO B";	newline=', '; 
				if(focusfield=='') focusfield='add_info_b';
			}
	if(getValueFromId('funds_id')==""){ message+=newline+"FUNDS ID";	newline=', '; 
				if(focusfield=='') focusfield='funds_id';
			}
			
	// Check erro for talbe subcription details
	message=message+"";
	if(getValueFromId('funds_id_sub')==""){ message+=newline+"FUNDS ID";	newline=', '; 
				if(focusfield=='') focusfield='funds_id_sub';
			}
	if(getValueFromId('minimum_front_end_fee')==""){ message+=newline+"MINIMUM FRONT END FEE";	newline=', '; 
				if(focusfield=='') focusfield='minimum_front_end_fee';
			}
	if(getValueFromId('maximum_front_end_fee')==""){ message+=newline+"MAXIMUM FRONT END FEE";	newline=', '; 
				if(focusfield=='') focusfield='maximum_front_end_fee';
			}
	if(getValueFromId('management_fee')==""){ message+=newline+"MANAGEMENT FEE";	newline=', '; 
				if(focusfield=='') focusfield='management_fee';
			}
	if(getValueFromId('additional_information')==""){ message+=newline+"ADDITIONAL INFORMATION";	newline=', '; 
				if(focusfield=='') focusfield='additional_information';
			}
	if(getValueFromId('performance_fee')==""){ message+=newline+"PERFORMACE FEE";	newline=', '; 
				if(focusfield=='') focusfield='performance_fee';
			}
	//Check erro not entry  insert into RedemptionFees
	if(getValueFromId('funds_id_red')==""){ message+=newline+"FUNDS ID RED";	newline=', '; 
				if(focusfield=='') focusfield='funds_id_red';
			}
	if(getValueFromId('minimum_amount')==""){ message+=newline+"MINIMUM AMOUNT";	newline=', '; 
				if(focusfield=='') focusfield='minimum_amount';
			}
	if(getValueFromId('notice_period')==""){ message+=newline+"NOTICE PERIOD";	newline=', '; 
				if(focusfield=='') focusfield='notice_period';
			}
	if(getValueFromId('trading_date')!=""){
		 	if(!reZip.test(getValueFromId('trading_date'))){
		  		message += newline + 'TRADING FORMAT MUST BE YYYY-MM-DD !';	
				newline=', ';
				if(focusfield=='') focusfield='trading_date';
			}
		  }
		   else if(getValueFromId('trading_date')==""){
				message += newline + 'TRANDING DATE';	
				newline=', ';
				if(focusfield=='') focusfield='trading_date';
		  }
	if(getValueFromId('settlement_cycle')==""){ message+=newline+"SETTLEMENT CYCLE";	newline=', '; 
				if(focusfield=='') focusfield='settlement_cycle';
			}
	if(getValueFromId('minimum_units')==""){ message+=newline+"MINIMUM UNITS ";	newline=', '; 
				if(focusfield=='') focusfield='minimum_units';
			}
	if(getValueFromId('trading_frequency')==""){ message+=newline+"TRADING FREQUENCY";	newline=', '; 
				if(focusfield=='') focusfield='trading_frequency';
			}
	if(getValueFromId('cut_of_time')==""){ message+=newline+"CUT OF TIME";	newline=', '; 
				if(focusfield=='') focusfield='cut_of_time';
			}
	if(getValueFromId('additional_information_red')==""){ message+=newline+"ADDITIONAL INFORMATION";	newline=', '; 
				if(focusfield=='') focusfield='additional_information_red';
			}
			
	// Check erro Insert Into RedemptionFee
	if(getValueFromId('redemption_details_id')==""){ message+=newline+"Redemption details id";	newline=', '; 
				if(focusfield=='') focusfield='redemption_details_id';
			}
	if(getValueFromId('minimum_back_end_fee')==""){ message+=newline+"Minimum back end fee ";	newline=', '; 
				if(focusfield=='') focusfield='minimum_back_end_fee';
			}
	if(getValueFromId('early_withdrawal_fee')==""){ message+=newline+"Early withdrawal fee";	newline=', '; 
				if(focusfield=='') focusfield='early_withdrawal_fee';
			}
	if(getValueFromId('maximum_back_end_fee')==""){ message+=newline+"Maximum back end fee";	newline=', '; 
				if(focusfield=='') focusfield='maximum_back_end_fee';
			}
	if(getValueFromId('additional_information_redfee')==""){ message+=newline+"ADDITIONAL INFORMATION";	newline=', '; 
				if(focusfield=='') focusfield='additional_information_redfee';
			}
				
	// Check erro Insert Into TRansferAgent
	if(getValueFromId('transfer_agent')==""){ message+=newline+"Transfer Agent";	newline=', '; 
				if(focusfield=='') focusfield='transfer_agent';
			}
	if(getValueFromId('postal_address')==""){ message+=newline+"Postal address ";	newline=', '; 
				if(focusfield=='') focusfield='postal_address';
			}
	if(getValueFromId('postal_address_I')==""){ message+=newline+"Postal address I";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_I';
			}
	if(getValueFromId('phone_number')==""){ message+=newline+"Phone number";	newline=', '; 
				if(focusfield=='') focusfield='phone_number';
			}
	if(getValueFromId('account_number')==""){ message+=newline+"Account number";	newline=', '; 
				if(focusfield=='') focusfield='account_number';
			}
	if(getValueFromId('key_contact_persons')==""){ message+=newline+"Key contact persons";	newline=', '; 
				if(focusfield=='') focusfield='key_contact_persons';
			}
	if(getValueFromId('email_address')==""){ message+=newline+"Email address";	newline=', '; 
				if(focusfield=='') focusfield='email_address';
			}
	if(getValueFromId('fax_no')==""){ message+=newline+"Fax no";	newline=', '; 
				if(focusfield=='') focusfield='fax_no';
			}
	if(getValueFromId('additional_information_transferagent')==""){ message+=newline+"Additional information";	newline=', '; 
				if(focusfield=='') focusfield='additional_information_transferagent';
			}
	if(getValueFromId('zip')==""){ message+=newline+"ZIP";	newline=', '; 
				if(focusfield=='') focusfield='zip';
			}
	
	// Check erro Insert Into Custodian
		if(getValueFromId('cpid_cus')==""){ message+=newline+"Cpid";	newline=', '; 
				if(focusfield=='') focusfield='cpid_cus';
			}
	if(getValueFromId('custid_cus')==""){ message+=newline+"Custid";	newline=', '; 
				if(focusfield=='') focusfield='custid_cus';
			}
	
	
	// Check erro Insert Into fundadvisor
	if(getValueFromId('fund_advisor_adv')==""){ message+=newline+"Fund advisort adv";	newline=', '; 
				if(focusfield=='') focusfield='fund_advisor_adv';
			}
	if(getValueFromId('postal_address_adv')==""){ message+=newline+"Postal address ";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_adv';
			}
	if(getValueFromId('postal_address_adv_I')==""){ message+=newline+"Postal address I";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_adv_I';
			}
	if(getValueFromId('phone_number_adv')==""){ message+=newline+"Phone number";	newline=', '; 
				if(focusfield=='') focusfield='phone_number_adv';
			}
	if(getValueFromId('email_address_adv')==""){ message+=newline+"Email address";	newline=', '; 
				if(focusfield=='') focusfield='email_address_adv';
			}
	if(getValueFromId('fax_number_adv')==""){ message+=newline+"Fax number";	newline=', '; 
				if(focusfield=='') focusfield='fax_number_adv';
			}
	if(getValueFromId('additional_information_adv')==""){ message+=newline+"Additional information";	newline=', '; 
				if(focusfield=='') focusfield='additional_information_adv';
			}
	if(getValueFromId('zip_city_adv')==""){ message+=newline+"Fax no";	newline=', '; 
				if(focusfield=='') focusfield='zip_city_adv';
			}
			
			
	// Check erro Insert Into fundauditor
	if(getValueFromId('fund_auditor_fau')==""){ message+=newline+"Fund auditor";	newline=', '; 
				if(focusfield=='') focusfield='fund_auditor_fau';
			}
	if(getValueFromId('postal_address_fau')==""){ message+=newline+"Postal address auditor ";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_fau';
			}
	if(getValueFromId('postal_address_fau_I')==""){ message+=newline+"Postal address auditor";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_fau_I';
			}
	if(getValueFromId('phone_number_fau')==""){ message+=newline+"Phone number";	newline=', '; 
				if(focusfield=='') focusfield='phone_number_fau';
			}
	if(getValueFromId('email_address_fau')==""){ message+=newline+"Email address fau";	newline=', '; 
				if(focusfield=='') focusfield='email_address_fau';
			}
	if(getValueFromId('fax_number_fau')==""){ message+=newline+"Fax number fau";	newline=', '; 
				if(focusfield=='') focusfield='fax_number_fau';
			}
	if(getValueFromId('additional_information_fau')==""){ message+=newline+"Additional information fau";	newline=', '; 
				if(focusfield=='') focusfield='additional_information_fau';
			}
	if(getValueFromId('zip_city_fau')==""){ message+=newline+"Zip city fau";	newline=', '; 
				if(focusfield=='') focusfield='zip_city_fau';
			}
	
	if(message=="")
	{
		
		return true;
	}
	else
	{
		document.getElementById('errorLable').innerHTML="Mandatory Fields * Are :<br/>";
		document.getElementById('errorMana').innerHTML="<p style='color:red;'>"+message+"</p>";
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
			setValueFromId('postal_address',resArr[1]);
			setValueFromId('postal_address_I',resArr[2]);
			setValueFromId('phone_number',resArr[3]);
			setValueFromId('account_number',resArr[4]);
			setValueFromId('key_contact_persons',resArr[5]);
			setValueFromId('email_address',resArr[6]);
			setValueFromId('fax_no',resArr[7]);
			setValueFromId('additional_information_transferagent',resArr[8]);
			setValueFromId('zip',resArr[9]);
		}
		else
		{
			setValueFromId('transfer_agent','');
			setValueFromId('postal_address','');
			setValueFromId('postal_address_I','');
			setValueFromId('phone_number','');
			setValueFromId('account_number','');
			setValueFromId('key_contact_persons','');
			setValueFromId('email_address','');
			setValueFromId('fax_no','');
			setValueFromId('additional_information_transferagent','');
			setValueFromId('zip','');
				
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
			setValueFromId('counterparty_cus','');
			setValueFromId('biccp_cus','');
			setValueFromId('custid_cus','');
			setValueFromId('custodian_cus','');
			setValueFromId('biccust_cus','');
			setValueFromId('cpacwithcust_cus','');
			
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
			setValueFromId('counterparty_cus',resArr[1]);
			setValueFromId('biccp_cus',resArr[2]);
			setValueFromId('custid_cus',resArr[3]);
			setValueFromId('custodian_cus',resArr[4]);
			setValueFromId('biccust_cus',resArr[5]);
			setValueFromId('cpacwithcust_cus',resArr[6]);
			
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
			setValueFromId('postal_address_adv','');
			setValueFromId('postal_address_adv_I','');
			setValueFromId('phone_number_adv','');
			setValueFromId('email_address_adv','');
			setValueFromId('fax_number_adv','');
			setValueFromId('additional_information_adv','');
			setValueFromId('zip_city_adv','');
			
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
			setValueFromId('postal_address_adv',resArr[1]);
			setValueFromId('postal_address_adv_I',resArr[2]);
			setValueFromId('phone_number_adv',resArr[3]);
			setValueFromId('email_address_adv',resArr[4]);
			setValueFromId('fax_number_adv',resArr[5]);
			setValueFromId('additional_information_adv',resArr[6]);
			setValueFromId('zip_city_adv',resArr[7]);
			
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
			setValueFromId('postal_address_fau','');
			setValueFromId('postal_address_fau_I','');
			setValueFromId('phone_number_fau','');
			setValueFromId('email_address_fau','');
			setValueFromId('fax_number_fau','');
			setValueFromId('additional_information_fau','');
			setValueFromId('zip_city_fau','');
			
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
			setValueFromId('postal_address_fau',resArr[1]);
			setValueFromId('postal_address_fau_I',resArr[2]);
			setValueFromId('phone_number_fau',resArr[3]);
			setValueFromId('email_address_fau',resArr[4]);
			setValueFromId('fax_number_fau',resArr[5]);
			setValueFromId('additional_information_fau',resArr[6]);
			setValueFromId('zip_city_fau',resArr[7]);
			
		}
		
	}
}
