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
	message=message+"<br/><br/>";
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
