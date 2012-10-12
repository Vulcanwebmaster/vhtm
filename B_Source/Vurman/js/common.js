// JavaScript Document for common
var req;
var req1;

function getAJaxReqest()
{
	try
	{
		req = new XMLHttpRequest(); 
	}
	catch(e)
	{
		try
		{
			req  = new ActiveXObject("Msxml2.XMLHTTP"); 
		}
		catch(f)
		{
			try
			{
				req  = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(failed)
			{
				document.write("Explorer cannot be recognized.");
			}
		}
	}
}


function getAJaxReqest1()
{
	try
	{
		req1 = new XMLHttpRequest(); 
	}
	catch(e)
	{
		try
		{
			req1  = new ActiveXObject("Msxml2.XMLHTTP"); 
		}
		catch(f)
		{
			try
			{
				req1  = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(failed)
			{
				document.write("Explorer cannot be recognized.");
			}
		}
	}
}


		function getObj(id1){				return document.getElementById(id1);		}
		
		function getValueFromId(id1){		return document.getElementById(id1).value;		}
		
		function getValueFromObj(obj1){		return obj1.value;		}
		
		function setValueFromId(id1,val){	document.getElementById(id1).value=val;		}
		
		function setValueFromObj(obj1,val){	obj1.value=val;		}
		
		function setSpanValueFromId(obj1,val){	document.getElementById(obj1).innerHTML=val;		}
		
		function focusId(id1){	getObj(id1).focus();			}
		
		function getValueFromSelect(id1){		var obj1=getObj(id1); return obj1.options[obj1.selectedIndex].value;	}
		
		function showbyId(id1){		getObj(id1).style.display="";		}
		
		function hidebyId(id1){		getObj(id1).style.display="none";	}
		
		function hidebyObj(obj1){	obj1.style.display="none";		}
		
		function showbyObj(obj1){	obj1.style.display="";		}
		
		function replaceValuefromSpan(id1,id2)
		{
			var temp1=getObj(id1);
			var temp2=getObj(id2);
			
			temp2.value=temp1.innerHTML;
		}
		
		function replaceValuefromText(id1,id2)
		{
			var temp1=getObj(id1);
			var temp2=getObj(id2);
			
			temp1.innerHTML=temp2.value;
		}
		
		function getCheckedActiveFromRadio(id1,id2)
		{
			if(document.getElementById(id1).checked)
				return document.getElementById(id1).value;
			else if(document.getElementById(id2).checked)
				return document.getElementById(id2).value;
		}
		
		///Radio Button :: Check for active
		function setCheckedActiveFromRadio(id1,id2,val)
		{
			if(document.getElementById(id1).value==val)
			{
				document.getElementById(id1).checked=true;
			}
			else if(document.getElementById(id2).value==val)
			{
				document.getElementById(id2).checked=true;
			}
		}
		
		function SelectFromDropDownlist(id,val)
		{
			var obj=getObj(id);
			
			for(var i=0;i<obj.length;i++)
			{
				if(obj.options[i].value==val){
					obj.options[i].selected ="1";
					break;
				}
			}
		}
		
		function getActive(id)
		{
			if(id==1) return "Active";
			else if(id==0) return "Inactive";
			else	return "undefined";
		}
		