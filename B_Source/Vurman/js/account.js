// JavaScript Document
function FillUserById(id1)
{
	var ob=document.getElementById(id1);
	for(var j=ob.length;j>0;j--)
	{
		ob.remove(0);
	}
	for(var i=0;i<JSONUser.length;i++)
	{
		if(i==0)
			$('#'+id1+'').append("<option value='0'>Select User</option>");
		$('#'+id1+'').append("<option value='"+JSONUser[i].id+"'>"+JSONUser[i].name+"</option>");
	}
}

function FillCurrencyById(id1)
{
	var ob=document.getElementById(id1);
	for(var j=ob.length;j>0;j--)
	{
		ob.remove(0);
	}
	for(var i=0;i<JSONCurrency.length;i++)
	{
		if(i==0)
			$('#'+id1+'').append("<option value='0'>Select Currency</option>");
		$('#'+id1+'').append("<option value='"+JSONCurrency[i].id+"'>"+JSONCurrency[i].abbreviation+"</option>");
	}
}

function getUserName(id)
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

function getAccountName(id)
{
	var accountname="";
	for(var i=0;i<JSONCurrency.length;i++)
	{
		if(id==JSONCurrency[i].id)
		{
			accountname=JSONCurrency[i].abbreviation;
			break;
		}
	}
	return accountname;
}

$(function() {
		
		var name = $("#name"),
			amount = $("#amount"),
			credit = $("#credit"),
			debit = $("#debit"),
			vdate1 = $("#vdate1"),
			vdate2 = $("#vdate2"),
			user = $("#selectUser"),
			currency=$('#selectCurrency'),
			accountid=$('#hduserid'),
			allFields = $([]).add(name).add(amount).add(credit).add(debit).add(vdate1).add(vdate2).add(currency).add(user).add(accountid),
			tips = $("#validateTips");

		function updateTips(t) {
			tips.text(t).effect("highlight",{},1500);
		}

		function checkLength(o,n,min,max) {

			if ( o.val().length > max || o.val().length < min ) {
				o.addClass('ui-state-error');
				updateTips("Length of " + n + " must be between "+min+" and "+max+".");
				return false;
			} else {
				return true;
			}

		}
		
		function CheckValExists(ob1,o,n)
		{
			var objOb1=document.getElementById(ob1);
			if(objOb1.selectedIndex>0)
			{
				return true;
			}
			else
			{
				o.addClass('ui-state-error');
				updateTips("Please select "+n+".");
				return false;
			}
		}

		function checkRegexp(o,regexp,n) {

			if ( !( regexp.test( o.val() ) ) ) {
				o.addClass('ui-state-error');
				updateTips(n);
				return false;
			} else {
				return true;
			}

		}
		
		$("#dialog").dialog({
			bgiframe: true,
			autoOpen: false,
			height: 400,
			width:500,
			minHeight:400,
			minWidth:450,
			modal: true,
			buttons: {
				'Save': function() {
					var bValid = true;
					allFields.removeClass('ui-state-error');
					
					bValid = bValid && checkLength(name,"name",3,80);
					bValid = bValid && checkLength(amount,"amount",1,80);

					bValid = bValid && CheckValExists('selectUser',user,'user');
					bValid = bValid && CheckValExists('selectCurrency',currency,'currency');
					
					if (bValid) {
						getAJaxReqest();
						var url='files/add-account.php';
						var queryString="name="+name.val();
						queryString+="&client="+user.val();
						queryString+="&amount="+amount.val();
						queryString+="&currency="+currency.val();
						queryString+="&credit="+credit.val();
						queryString+="&debit="+debit.val();
						queryString+="&vdate1="+vdate1.val();
						queryString+="&vdate2="+vdate2.val();
						queryString+="&id="+accountid.val();
						alert(queryString);
						
						req.open("POST", url, true); 
						req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
						req.send(queryString); 
						req.onreadystatechange=function()
						{
							if(req.readyState==4)
							{
								var result=req.responseText;
								var testFail=0;
								if(result.search('|')>-1)
								{
									
									var resArr=result.split('|');
									alert(resArr[0]);
									if(resArr[0]=="Added Successfully.")
									{
										JSONAccount[JSONAccount.length]={
											"id":resArr[1],
											"name":name.val(),
											"id_client":user.val(),
											"amount":amount.val(),
											"id_currency":id_currency.val(),
											"credit":credit.val(),
											"debit":debit.val(),
											"vdate1":vdate1.val(),
											"vdate2":vdate2.val(),
											"created_at":''
										};
									}
									else if(resArr[0]=="Updated Successfully.")
									{
										
										for(var i=0;i<JSONAccount.length;i++)
										{
											if(JSONAccount[i].userid==resArr[1])
											{
												JSONAccount[i]={
													"id":resArr[1],
													"name":name.val(),
													"id_client":user.val(),
													"amount":amount.val(),
													"id_currency":id_currency.val(),
													"credit":credit.val(),
													"debit":debit.val(),
													"vdate1":vdate1.val(),
													"vdate2":vdate2.val(),
													"created_at":''
												};
												break;
											}
										}

									}
									else
									{
										testFail++;
										alert(result);
									}
									//alert(testFail);
									if(testFail==0)
									{
										pageselectCallback();   
										initPagination();
									}
									

									$(this).dialog('close');
								}
								else
								{
									alert("Failed.");
									$(this).dialog('close');
								}
							}
						}
					}
				},
				Cancel: function() {
					$(this).dialog('close');
				}
			},
			close: function() {
				allFields.val('').removeClass('ui-state-error');
			}
		});
		
		
		
		$('#create-user').click(function() {
			FillUserById('selectUser');
			FillCurrencyById('selectCurrency');
			clearALL();
			$('#dialog').dialog('open');
		})
		.hover(
			function(){ 
				$(this).addClass("ui-state-hover"); 
			},
			function(){ 
				$(this).removeClass("ui-state-hover"); 
			}
		).mousedown(function(){
			$(this).addClass("ui-state-active"); 
		})
		.mouseup(function(){
				$(this).removeClass("ui-state-active");
		});

	});

function clearALL()
{
			setValueFromId('hduserid','');
			setValueFromId('name','');
			setValueFromId('amount','');
			setValueFromId('credit','');
			setValueFromId('debit','');
			
			setValueFromId('vdate1','');
			setValueFromId('vdate2','');
}

function ViewUser(id1)
{
	for(var i=0;i<JSONAccount.length;i++)
	{
		if(id1==JSONAccount[i].id)
		{
			//alert(JSONAccount[i].username);
			FillUserById('selectUser');
			FillCurrencyById('selectCurrency');
			
			setValueFromId('hduserid',JSONAccount[i].id);
			setValueFromId('name',JSONAccount[i].name);
			setValueFromId('amount',JSONAccount[i].amount);
			setValueFromId('credit',JSONAccount[i].credit);
			setValueFromId('debit',JSONAccount[i].debit);
			
			setValueFromId('vdate1',JSONAccount[i].vdate1);
			setValueFromId('vdate2',JSONAccount[i].vdate2);
			
			SelectFromDropDownlist('selectUser',JSONAccount[i].id_client);
			SelectFromDropDownlist('selectCurrency',JSONAccount[i].id_currency);
			
			$('#dialog').dialog('open');
			break;
		}
	}
}

function loadAll()
{
	FillUserById('selectUser');
	FillUserById('search_user');
	FillCurrencyById('selectCurrency');
	FillCurrencyById('search_currency');
	
	pageselectCallback();   
	initPagination();
}