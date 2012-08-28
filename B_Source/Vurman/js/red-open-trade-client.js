// JavaScript Document

function changeStatus(obStatus)
	{
		var trade_id=document.getElementById('trade_id').value;
		var status=obStatus;
		
		var queryString="id="+trade_id+"&status="+status;
		
		getAJaxReqest();
		var url="ajaxfiles/updatetransferstatus.php";
		
		req.open("POST", url, true); 
		req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
		req.send(queryString); 
		req.onreadystatechange=function()
		{
			var trade_id=document.getElementById('trade_id').value;
			if(req.readyState==4){
				var result=req.responseText;
				alert(result);
				if(result=="Updated Successfully."){
					
					showButtonDialog('dialog','SETTLED',false);
					showButtonDialog('dialog','COMPLETED',false);
					showButtonDialog('dialog','CANCELLED',false);
					
					for(var i=0;i<JSONTrading.length;i++){
						if(trade_id==JSONTrading[i].id){
							JSONTrading[i].status="cancelled";
						}
					}
				}
			}
		}
	}
	
	$(function() {
		$("#dialog").dialog({
					bgiframe: true,
					autoOpen: false,
					height: 330,
					width:580,
					modal: true,
					buttons: {
						'Close':function()
						{
							$(this).dialog('close');
						}
					}
		});
	});
	
	
	function initPaginationCity() {
	// count entries inside the hidden content
	var num_entries = JSONTrading.length;
	// Create content inside pagination element
	$("#Searchcity").pagination(num_entries, {
		callback: pageselectCallbackCity,
		items_per_page:20 // Show only one item per page
	});
 }
// When document has loaded, initialize pagination and form 
 $(document).ready(function(){   
 pageselectCallbackCity();   
	initPaginationCity();
});

var temp=0;
function pageselectCallbackCity(page_index, jq){
	// Get number of elements per pagionation page from form
	var items_per_page = 20;
	var max_elem = Math.min((page_index+1) * items_per_page, JSONTrading.length);
	var newcontent = '';
	
	// Iterate through a selection of the content and build an HTML string
	 
	 var color="#f5f5f5";
	 
	for(var i=page_index*items_per_page;i<max_elem;i++)
	{
		//alert(i);
		
		if(color=="#f5f5f5") color="#cccccc";
		else if(color=="#cccccc")	color="#f5f5f5";
		//else color=="#f5f5f5";
		newcontent+="<tr class='result' style='background-color:"+color+"; margin:10px;'>";
			newcontent += '<td>' + getCurrency(JSONTrading[i].currency) + '</td>';
			newcontent += '<td>' + JSONTrading[i].amount + '</td>';
			newcontent += '<td>' + getISIN(JSONTrading[i].id_isin) + '</td>';
			newcontent += '<td colspan=\'2\' >' + JSONTrading[i].fund_name + '</td>';
		newcontent+="</tr>";
		
		newcontent+="<tr class='result' style='background-color:"+color+"; margin:10px;'>";
			newcontent += '<td> <a style=\'text-decoration:underline;\' onclick=ViewTransfer(' + JSONTrading[i].id + ')>'+getUser(JSONTrading[i].id_client)+'</a></td>';
			newcontent += '<td>' + getCustodyAC(JSONTrading[i].custody_ac) + '</td>';
			newcontent += '<td>' + JSONTrading[i].client_reference + '</td>';
			newcontent += '<td>' + JSONTrading[i].trade_date + '</td>';
			newcontent += '<td>' + JSONTrading[i].settlement_date + '</td>';
		newcontent+="</tr>";
		
		newcontent+="<tr class='result' style='background-color:"+color+"; margin:10px;'>";
		newcontent += '<td>' + JSONTrading[i].created_at + '</td>';
		newcontent += '<td>' + JSONTrading[i].status + '</td>';
		newcontent += '<td colspan=\'3\'>&nbsp;</td>';
		newcontent+="</tr>";
	}
	
	// Replace old content with new content
	if(temp<2){
		//alert(temp);
		$('#Citys').append(newcontent);
		
	}
	else
	{
		//alert("else");
		//alert($('#Citys').length);
		$('#Citys tbody tr').remove();
		$('#Citys').append(newcontent);
	}
	temp++;
	// Prevent click event propagation
	return false;
}

function getCustodyAC(id)
{
	var custAC="";
	
	for(var i=0;i<JSONCustodyAC.length;i++)
	{
		if(id==JSONCustodyAC[i].id)
		{
			custAC=JSONCustodyAC[i].name;
			break;
		}
	}
	
	return custAC;
}

function getISIN(id)
{
	var ISIN="";
	for(var i=0;i<JSONISIN.length;i++)
	{
		if(id==JSONISIN[i].id)
		{
			ISIN=JSONISIN[i].code;
			break;
		}
	}
	return ISIN;
}

function getCurrency(id)
{
	var currency="";
	for(var i=0;i<JSONCurrency.length;i++)
	{
		if(id==JSONCurrency[i].id)
		{
			currency=JSONCurrency[i].abbreviation;
			break;
		}
	}
	return currency;
}

function getUser(id)
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

function ViewTransfer(id)
{
	for(var i=0;i<JSONTrading.length;i++)
	{
		if(id==JSONTrading[i]['id'])
		{
			//alert(getUser(JSONTrading[i].id_client));
			document.getElementById('trade_id').value=JSONTrading[i].id;
			$("#id_client").text(getUser(JSONTrading[i].id_client));
			//$("#id_reference").text(getUser(JSONTrading[i].client_reference));
			$("#id_reference").text(JSONTrading[i].client_reference);
			$("#id_type").text(JSONTrading[i].types);
			$("#id_status").text(JSONTrading[i].status);
			
			$("#id_isin").text(getISIN(JSONTrading[i].id_isin));
			$("#id_currency").text(getCurrency(JSONTrading[i].currency));
			$("#id_fundname").text(JSONTrading[i].fund_name);
			$("#id_custodian").text(getCustodyAC(JSONTrading[i].custody_ac));
			
			$("#id_vfs").text(JSONTrading[i].remarks_vfs);
			$("#id_trade").text(JSONTrading[i].trade_remarks);
			
			$("#id_fundname").text(JSONTrading[i].fund_name);
			
			$("#id_quantity").text(JSONTrading[i].amount);
			
			$("#trade_date").text(JSONTrading[i].trade_date);
			
			$("#value_date").text(JSONTrading[i].settlement_date);
			
			$("#dialog").dialog("open");
			
	  
			break;
		}
	}
	
}


function ButtonDialogState(sIDDialog,sLabel,bEnable){     $("#"+sIDDialog+" ~ .ui-dialog-buttonpane").children("button:contains('"+sLabel+"')").button((bEnable==true) ? "enable" : "disable" );//1.8.2     
$("#"+sIDDialog+" ~ .ui-dialog-buttonpane .ui-dialog-buttonset").children("button:contains('"+sLabel+"')").button((bEnable==true) ? "enable" : "disable" );//1.8.4
}
function showButtonDialog(sIDDialog,sLabel,bvisible){ 
//alert(sLabel+" "+bvisible);   
if(bvisible==true){//        
$("#"+sIDDialog+" ~ .ui-dialog-buttonpane").children("button:contains('"+sLabel+"')").show();//1.8.2        
$("#"+sIDDialog+" ~ .ui-dialog-buttonpane .ui-dialog-buttonset").children("button:contains('"+sLabel+"')").show();//1.8.4    
}else{
	//        
	$("#"+sIDDialog+" ~ .ui-dialog-buttonpane").children("button:contains('"+sLabel+"')").hide();//1.8.2        
	$("#"+sIDDialog+" ~ .ui-dialog-buttonpane .ui-dialog-buttonset").children("button:contains('"+sLabel+"')").hide();//1.8.4    
	}}