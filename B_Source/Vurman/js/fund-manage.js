function verifyManage()
{
	var message = '';
	var newline='';
	var focusfield='';
	// IDENTIFICATION OF FUND
	if(getValueFromId('isin')==""){ message+=newline+"ISIN";	newline=', '; 
				if(focusfield=='') focusfield='isin';
			}
	if(getValueFromId('currency')==""){ message+=newline+"CURRENTCY";	newline=', '; 
				if(focusfield=='') focusfield='currency';
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
	if(getValueFromId('domicile')==""){ message+=newline+"DOMICILE";	newline=', '; 
				if(focusfield=='') focusfield='domicile';
			}
	if(getValueFromId('nav_date')==""){ message+=newline+"N.A.V DATE";	newline=', '; 
				if(focusfield=='') focusfield='nav_date';
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
	
	if(getValueFromId('unique_feature')==""){ message+=newline+"UNIQUE ID";	newline=', '; 
				if(focusfield=='') focusfield='unique_feature';
			}
			
	// INVESTMENT DETAILS		
	var message1 = '';
	if(getValueFromId('initial_min_investment')==""){ message1+=newline+" INITIAL MINIMUM INVESTMENT";	newline=', '; 
				if(focusfield=='') focusfield='initial_minimum_investment';
			}
	if(getValueFromId('min_investment')==""){ message1+=newline+"MINIMUM INVESTMENT";	newline=', '; 
				if(focusfield=='') focusfield='min_investment';
			}
	if(getValueFromId('min_units_investment')==""){ message1+=newline+"MINIMUM UNITS INVESTMENT";	newline=', '; 
				if(focusfield=='') focusfield='min_units_investment';
			}
	
	// SUBSCRIPTION FEES
	var message2 = '';
	if(getValueFromId('min_frontend_fee')==""){ message2+=newline+"MIN. FRONT END FEE";	newline=', '; 
				if(focusfield=='') focusfield='min_frontend_fee';
			}
	if(getValueFromId('max_frontend_fee')==""){ message2+=newline+"MAX. FRONT END FEE";	newline=', '; 
				if(focusfield=='') focusfield='max_frontend_fee';
			}
	
	// REDEMPTION DETAILS
	var message3 = '';
	if(getValueFromId('min_amount_red')==""){ message3+=newline+"MIN. AMOUNT";	newline=', '; 
				if(focusfield=='') focusfield='min_amount_red';
			}
	if(getValueFromId('min_units_red')==""){ message3+=newline+"MIN. UNITS";	newline=', '; 
				if(focusfield=='') focusfield='min_units_red';
			}
	if(getValueFromId('trade_frequency_red')==""){ message3+=newline+"TRADING FREQUENCY";	newline=', '; 
				if(focusfield=='') focusfield='trade_frequency_red';
			}
			
	// CUSTODIAN INFORMATION
	var message4 = '';
	if(getValueFromId('custodian_name')==""){ message4+=newline+"CUSTODIAN NAME";	newline=', '; 
				if(focusfield=='') focusfield='custodian_name';
			}
	if(getValueFromId('postal_address_c1')==""){ message4+=newline+"POSTAL ADDRESS C1";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_c1';
			}
	if(getValueFromId('key_contact_c')==""){ message4+=newline+"KEY CONTACT PERSON";	newline=', '; 
				if(focusfield=='') focusfield='key_contact_c';
			}
	if(getValueFromId('email_c')==""){ message4+=newline+"EMAIL ADDRESS";	newline=', '; 
				if(focusfield=='') focusfield='email_c';
			}
	if(getValueFromId('phone_c')==""){ message4+=newline+"PHONE CUSTODIAN";	newline=', '; 
				if(focusfield=='') focusfield='phone_c';
			}
	
	//  TRANSFER AGENT INFORMATION
	var message5 = '';
	if(getValueFromId('transfer_agent_name')==""){ message5+=newline+"TRANSFER AGENT NAME";	newline=', '; 
				if(focusfield=='') focusfield='transfer_agent_name';
			}
	if(getValueFromId('postal_address_ta1')==""){ message5+=newline+"POSTAL ADDRESS TA1 OF TRANSER AGENT";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_ta1';
			}
	if(getValueFromId('key_contact_ta')==""){ message5+=newline+"KEY CONTACT PERSON OF TRANSFER AGENT";	newline=', '; 
				if(focusfield=='') focusfield='key_contact_ta';
			}
	if(getValueFromId('email_ta')==""){ message5+=newline+"EMAIL ADDRESS OF TRANSFER AGEN";	newline=', '; 
				if(focusfield=='') focusfield='email_ta';
			}
	if(getValueFromId('phone_ta')==""){ message5+=newline+"PHONE TRANSFER AGENT";	newline=', '; 
				if(focusfield=='') focusfield='phone_ta';
			}
			
			
	//  FUND ADVISOR INFORMATION
	var message6 = '';
	if(getValueFromId('fund_advisor_name')==""){ message6+=newline+"FUND ADVISOR NAME";	newline=', '; 
				if(focusfield=='') focusfield='fund_advisor_name';
			}
	if(getValueFromId('postal_address_adv1')==""){ message6+=newline+"POSTAL ADDRESS TA1 OF ADVISOR";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_adv1';
			}
	if(getValueFromId('key_contact_adv')==""){ message6+=newline+"KEY CONTACT PERSON OF ADVISOR";	newline=', '; 
				if(focusfield=='') focusfield='key_contact_adv';
			}
	if(getValueFromId('email_adv')==""){ message6+=newline+"EMAIL ADVISOR";	newline=', '; 
				if(focusfield=='') focusfield='email_adv';
			}
	if(getValueFromId('phone_adv')==""){ message6+=newline+"PHONE ADVISOR";	newline=', '; 
				if(focusfield=='') focusfield='phone_adv';
			}
	
	//  FUND AUDITOR INFORMATION
	var message7 = '';
	if(getValueFromId('fund_auditor_name')==""){ message7+=newline+"TRANSFER AGENT NAME";	newline=', '; 
				if(focusfield=='') focusfield='fund_auditor_name';
			}
	if(getValueFromId('postal_address_aud1')==""){ message7+=newline+"POSTAL ADDRESS TA1 OF TRANSER AGENT";	newline=', '; 
				if(focusfield=='') focusfield='postal_address_aud1';
			}
	if(getValueFromId('key_contact_aud')==""){ message7+=newline+"KEY CONTACT PERSON OF TRANSFER AGENT";	newline=', '; 
				if(focusfield=='') focusfield='key_contact_aud';
			}
	if(getValueFromId('email_aud')==""){ message7+=newline+"EMAIL ADDRESS OF TRANSFER AGEN";	newline=', '; 
				if(focusfield=='') focusfield='email_aud';
			}
	if(getValueFromId('phone_aud')==""){ message7+=newline+"PHONE TRANSFER AGENT";	newline=', '; 
				if(focusfield=='') focusfield='phone_aud';
			}
			

	if(message=="")
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
		if(focusfield!='') focusId(focusfield);
		  return false;
	}	  
}
