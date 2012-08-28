// JavaScript Document
function FillUserById(id1)
{
	var ob=document.getElementById(id1);
	for(var j=ob.length;j>0;j--)
	{
		ob.remove(0);
	}
	for(var i=0;i<JSONCustodian.length;i++)
	{
		if(i==0)
			$('#'+id1+'').append("<option value='0'>Select User</option>");
		$('#'+id1+'').append("<option value='"+JSONCustodian[i].id+"'>"+JSONCustodian[i].name+"</option>");
	}
}

function getUserName(id)
{
	var username="";
	for(var i=0;i<JSONCustodian.length;i++)
	{
		if(id==JSONCustodian[i].id)
		{
			username=JSONCustodian[i].name;
			break;
		}
	}
	return username;
}

$(function() {
		
		var id = $("#id"),
			cpid = $("#cpid"),
			hdid = $("#hdid"),
			counterparty = $("#counterparty"),
			biccp=$('#biccp'),
			custid=$('#custid'),
			custodian=$('#custodian'),
			biccust=$('#biccust'),
			cpacwithcust=$('#cpacwithcust'),
			allFields = $([]).add(id).add(cpid).add(hdid).add(counterparty).add(biccp).add(custid).add(custodian).add(biccust).add(cpacwithcust).
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
			modal: true,
			buttons: {
				'Save': function() {
					var bValid = true;
					allFields.removeClass('ui-state-error');
					bValid = bValid && checkLength(cpid,"CP ID",1,20);
					bValid = bValid && checkLength(counterparty,"COUNTERPARTY",1,80);
					bValid = bValid && checkLength(custid,"CUST ID",1,20);
					bValid = bValid && checkLength(custodian,"CUSTODIAN",1,80);
					
					if (bValid) {
						getAJaxReqest();
						var url='ajaxfiles/add-custodian.php';
						var queryString="id="+id.val();
						queryString+="&cpid="+cpid.val();
						queryString+="&counterparty="+counterparty.val();
						queryString+="&biccp="+biccp.val();
						queryString+="&custid="+custid.val();
						queryString+="&custodian="+custodian.val();
						queryString+="&biccust="+biccust.val();
						queryString+="&cpacwithcust="+cpacwithcust.val();

						//alert(queryString);
						
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
										JSONCustodian[JSONCustodian.length]={
											"id":resArr[1],
											"cpid":cpid.val(),
											"counterparty":counterparty.val(),
											"biccp":biccp.val(),
											"custid":custid.val(),
											"custodian":custodian.val(),
											"biccust":biccust.val(),
											"cpacwithcust":cpacwithcust.val()
										};
									}
									else if(resArr[0]=="Updated Successfully.")
									{
										
										for(var i=0;i<JSONCustodian.length;i++)
										{
											if(JSONCustodian[i].userid==resArr[1])
											{
												JSONCustodian[i]={
													"id":resArr[1],
													"cpid":cpid.val(),
													"counterparty":counterparty.val(),
													"biccp":biccp.val(),
													"custid":custid.val(),
													"custodian":custodian.val(),
													"biccust":biccust.val(),
													"cpacwithcust":cpacwithcust.val()
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
		
		
		
		$('#create-custodian').click(function() {
			$('#dialog').dialog('open');
		});
	});

function ViewCustodian(id1)
{
	for(var i=0;i<JSONCustodian.length;i++)
	{
		if(id1==JSONCustodian[i].id)
		{
			//alert(JSONCustodian[i].username);
			setValueFromId('id',JSONCustodian[i].id);
			setValueFromId('cpid',JSONCustodian[i].cpid);
			setValueFromId('counterparty',JSONCustodian[i].counterparty);
			setValueFromId('biccp',JSONCustodian[i].biccp);
			setValueFromId('custid',JSONCustodian[i].custid);
			setValueFromId('custodian',JSONCustodian[i].custodian);
			setValueFromId('biccust',JSONCustodian[i].biccust);
			setValueFromId('cpacwithcust',JSONCustodian[i].cpacwithcust);
			$('#dialog').dialog('open');
			break;
		}
	}
}

function loadAll()
{
	pageselectCallback();   
	initPagination();
}