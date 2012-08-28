// JavaScript Document

function changeStatus(obStatus)
	{
		var transfer_id=document.getElementById('transfer_id').value;
		var status=obStatus;
		
		var queryString="id="+transfer_id+"&status="+status;
		
		getAJaxReqest();
		var url="ajaxfiles/updatetransferstatus.php";
		
		req.open("POST", url, true); 
		req.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
		req.send(queryString); 
		req.onreadystatechange=function()
		{
			var transfer_id=document.getElementById('transfer_id').value;
			if(req.readyState==4){
				var result=req.responseText;
				alert(result);
				if(result=="Updated Successfully."){
					
					showButtonDialog('dialog','SETTLED',false);
					showButtonDialog('dialog','CANCELLED',false);
					
					for(var i=0;i<JSONTransfer.length;i++){
						if(transfer_id==JSONTransfer[i].id){
							JSONTransfer[i].status="cancelled";
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
					height: 530,
					width:550,
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
	var num_entries = JSONTransfer.length;
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
	var max_elem = Math.min((page_index+1) * items_per_page, JSONTransfer.length);
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
		newcontent += '<td>' + JSONTransfer[i].created_at + '</td>';
		newcontent += '<td> <a style=\'text-decoration:underline;\' onclick=ViewTransfer(' + JSONTransfer[i].id + ')>'+getUser(JSONTransfer[i].id_client)+'</a></td>';
		newcontent += '<td>' + JSONTransfer[i].custodian + '</td>';
		newcontent += '<td>' + JSONTransfer[i].trade_date + '</td>';
		newcontent += '<td>' + JSONTransfer[i].settlement_date + '</td>';
		newcontent += '<td>' + JSONTransfer[i].status + '</td>';
		
		newcontent+="</tr>";
		newcontent+="<tr class='result' style='background-color:"+color+";  margin:10px;'>";
		newcontent += '<td>' + getISIN(JSONTransfer[i].id_isin) + '</td>';
		newcontent += '<td>' + getCurrency(JSONTransfer[i].currency) + '</td>';
		newcontent += '<td>' + JSONTransfer[i].amount + '</td>';
		newcontent += '<td colspan=\'3\' style=\'text-align:left; padding-left:5px;\'>' + JSONTransfer[i].fund_name + '</td>';
//		newcontent += '<td>&nbsp;</td>';
		//newcontent += '<td> <a style=\'text-decoration:underline;\' onclick=completed(' + JSONTransfer[i].id + '>Complete</a></td>';
		//newcontent += '<td><a style=\'text-decoration:underline;\' onclick=completed('+JSONTransfer[i].id+')>Cancel</a></td>';
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
	for(var i=0;i<JSONTransfer.length;i++)
	{
		if(id==JSONTransfer[i]['id'])
		{
			//alert(getUser(JSONTransfer[i].id_client));
			document.getElementById('transfer_id').value=JSONTransfer[i].id;
			$("#id_client").text(getUser(JSONTransfer[i].id_client));
			$("#id_reference").text(getUser(JSONTransfer[i].client_reference));
			$("#id_reference").text(JSONTransfer[i].client_reference);
			$("#id_type").text(JSONTransfer[i].types);
			$("#id_status").text(JSONTransfer[i].status);
			$("#id_trans_type").text(JSONTransfer[i].transaction_type);
			
			$("#id_isin").text(getISIN(JSONTransfer[i].id_isin));
			$("#id_currency").text(getCurrency(JSONTransfer[i].currency));
			$("#id_fundname").text(JSONTransfer[i].fund_name);
			
			$("#id_comment").text(JSONTransfer[i].isin_reference);
			$("#id_fundname").text(JSONTransfer[i].fund_name);
			
			$("#id_quantity").text(JSONTransfer[i].amount);
			$("#Trade_Date").text(JSONTransfer[i].trade_date);
			$("#Settlement_Date").text(JSONTransfer[i].settlement_date);
			
			$("#id_seller").text(JSONTransfer[i].seller);
			$("#id_bic_seller").text(JSONTransfer[i].bic_seller);
			$("#id_custodian1").text(JSONTransfer[i].custodian);
			$("#id_custodian_bic").text(JSONTransfer[i].bic_custodian);
			
			$("#client_ac_cust").text(JSONTransfer[i].seller_ac_cust);
			$("#TA_Name").text(JSONTransfer[i].transfer_agent);
			$("#TA_BIC").text(JSONTransfer[i].bic_ta);
			$("#cust_ac_ta").text(JSONTransfer[i].cust_ac_ta);
			
			hidebyId('client_ac_cust_txt');
			hidebyId('TA_Name_txt');
			hidebyId('TA_BIC_txt');
			hidebyId('cust_ac_ta_txt');
			hidebyId('update_details');
			hidebyId('cancel_details');
			hidebyId('edit_details');
			
			$("#dialog").dialog("open");
			
			/*if(JSONTransfer[i].status!="completed")
			{*/
				showButtonDialog('dialog','SETTLED',false);
				showButtonDialog('dialog','CANCELLED',false);
			/*}
			else if(JSONTransfer[i].status=="pending")
			{
				showButtonDialog('dialog','SETTLED',true);
				showButtonDialog('dialog','CANCELLED',true);
			}*/
	  
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