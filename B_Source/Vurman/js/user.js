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
		$('#'+id1+'').append("<option value='"+JSONUser[i].id+"'>"+JSONUser[i].firstname+ " " + JSONUser[i].lastname + "</option>");
	}
}

function getUserName(id)
{
	var username="";
	for(var i=0;i<JSONUser.length;i++)
	{
		if(id==JSONUser[i].id)
		{
			username=JSONUser[i].firstname+ " " + JSONUser[i].lastname;
			break;
		}
	}
	return username;
}

$(function() {
		
		var firstname = $("#firstname"),					lastname = $("#lastname"),
			email = $("#email"),
			password = $("#password"),
			loginid=$('#loginid'),
			role=$('#selectRole'),
			id=$('#id'),
			officephone=$('#officephone'),
			cellphone=$('#cellphone'),
			phone=$('#phone'),
			department=$('#department'),
			clientid=$('#clientid'),
			active=$('#active'),
			allFields = $([]).add(firstname).add(lastname).add(email).add(password).add(loginid).add(role).add(id).add(officephone).add(cellphone).add(phone).add(department).add(active).add(clientid),
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
			height: 500,
			width:500,
			modal: true,
			buttons: {
				'Save': function() {
					var bValid = true;
					allFields.removeClass('ui-state-error');
					
					bValid = bValid && checkLength(clientid,"CLIENT-ID",1,10);
					bValid = bValid && checkLength(firstname,"firstname",1,80);										bValid = bValid && checkLength(lastname,"lastname",1,80);
					bValid = bValid && checkLength(email,"email",6,80);										bValid = bValid && checkLength(loginid,"loginid",4,80);
					bValid = bValid && checkLength(password,"password",4,16);
					bValid = bValid && CheckValExists('selectRole',role,'Role');
					bValid = bValid && checkRegexp(loginid,/^[a-z]([0-9a-z_])+$/i,"Username may consist of a-z, 0-9, underscores, begin with a letter.");
					// From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
					bValid = bValid && checkRegexp(email,/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,"eg. ui@jquery.com");
					bValid = bValid && checkRegexp(password,/^([0-9a-zA-Z])+$/,"Password field only allow : a-z 0-9");

					if (bValid) {						getAJaxReqest();
						var url='ajaxfiles/add-user.php';
						var queryString="firstname="+firstname.val();						queryString+="&lastname="+lastname.val();												queryString+="&department="+department.val();						
						queryString+="&email="+email.val();
						queryString+="&loginid="+loginid.val();
						queryString+="&password="+password.val();
						queryString+="&role="+role.val();
						queryString+="&officephone="+officephone.val();
						queryString+="&cellphone="+cellphone.val();
						queryString+="&phone="+phone.val();
						queryString+="&clientid="+clientid.val();
						queryString+="&id="+id.val();
						var active=getCheckedActiveFromRadio('rduseractive_0','rduseractive_1');
						queryString+="&active="+active;
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
										JSONUser[JSONUser.length]={
											"id":resArr[1],
											"firstname":firstname.val(),																						"lastname":lastname.val(),																						"department":department.val(),
											"email":email.val(),
											"loginid":loginid.val(),
											"password":password.val(),
											"role":role.val(),
											"officephone":officephone.val(),
											"cellphone":cellphone.val(),
											"phone":phone.val(),
											"clientid":clientid.val(),
											"active":getCheckedActiveFromRadio('rduseractive_0','rduseractive_1')
										};
									}
									else if(resArr[0]=="Updated Successfully.")
									{
										
										for(var i=0;i<JSONUser.length;i++)
										{
											if(JSONUser[i].userid==resArr[1])
											{
												JSONUser[i]={
														"id":resArr[1],														"firstname":firstname.val(),																												"lastname":lastname.val(),																												"department":department.val(),														"email":email.val(),														"loginid":loginid.val(),														"password":password.val(),														"role":role.val(),														"officephone":officephone.val(),														"cellphone":cellphone.val(),														"phone":phone.val(),														"clientid":clientid.val(),														"active":getCheckedActiveFromRadio('rduseractive_0','rduseractive_1')
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
									
									/*$('#users tbody').append('<tr>' +
										'<td>' + name.val() + '</td>' + 
										'<td>' + email.val() + '</td>' + 
										'<td>' + password.val() + '</td>' +
										'</tr>'); */
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
			$('#dialog').dialog('open');
		});

	});

function ViewUser(id1)
{
	for(var i=0;i<JSONUser.length;i++)
	{
		if(id1==JSONUser[i].id)
		{
			//alert(JSONUser[i].username);
			setValueFromId('id',JSONUser[i].id);						setValueFromId('clientid',JSONUser[i].clientid);
			setValueFromId('firstname',JSONUser[i].firstname);						setValueFromId('lastname',JSONUser[i].lastname);						setValueFromId('department',JSONUser[i].department);
			setValueFromId('officephone',JSONUser[i].officephone);
			setValueFromId('cellphone',JSONUser[i].cellphone);						setValueFromId('email',JSONUser[i].email);
			setValueFromId('phone',JSONUser[i].phone);
			setValueFromId('loginid',JSONUser[i].loginid);
			setValueFromId('password',JSONUser[i].password);
			SelectFromDropDownlist('selectRole',JSONUser[i].role);
			setCheckedActiveFromRadio('rduseractive_0','rduseractive_1',JSONUser[i].active);
			
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