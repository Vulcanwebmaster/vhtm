function ValChange(form, direct) {
  if(form.srcID.value == form.dstID.value) { 	
	if(direct == 'src')
	{
		if( eval(form.dstID.selectedIndex+1) < eval(form.dstID.length) )
			form.dstID.selectedIndex = eval(form.dstID.selectedIndex+1);
		else
			form.dstID.selectedIndex=0;
	}
	else if(direct == 'dst')
	{	
		if( eval(form.srcID.selectedIndex+1) < eval(form.srcID.length) ) 
			form.srcID.selectedIndex = eval(form.srcID.selectedIndex+1);	
		else
			form.srcID.selectedIndex = 0;
	}
  }	
  document.getElementById('SRC_AMOUNT').style.backgroundImage = 'url("'+img_url+'bank_images/'+form.srcID.value+'_combo.gif")';
  document.getElementById('DST_AMOUNT').style.backgroundImage = 'url("'+img_url+'bank_images/'+form.dstID.value+'_combo.gif")';

  AmountChange (form, direct); 
}

function indexInArray(arr,val){
	for(var i=0;i<arr.length;i++) if(arr[i]==val) return i;
	return -1;
} 


function disable_exchange(stat){
	 document.getElementById('SRC_AMOUNT').disabled = stat;
	 document.getElementById('DST_AMOUNT').disabled = stat;
	 document.getElementById('VOUCHER_NUMBER').disabled = stat;
	 document.getElementById('submit_exchange').disabled = stat;
}

function AmountChange(form, dir) {	
  document.getElementById("ERR_MESSAGE").innerHTML = "";
  disable_exchange(false);
  
  var idx =   ((((eval(form.srcID.value) + eval(form.srcID.value)) * eval(form.srcID.value)) * curCnt) +  eval(form.dstID.value));	 	
  var src_rate = rate[idx]['src'];		
  var dst_rate = rate[idx]['dst'];
  var src_amount = form.SRC_AMOUNT.value;
  var dst_amount = form.DST_AMOUNT.value;

  window.status =  ValName[form.srcID.value] + " >> " + ValName[form.dstID.value];
  
  if(metalValue[form.srcID.value]=='voucher')
  {	
  	var srcName = ValName[form.srcID.value].replace(/ \(.*\)/g, '');
	document.getElementById("voucherNumber").style.display = 'table-row';
    document.getElementById("voucherText").innerHTML = srcName;
	document.getElementById("hintImage").src=img_url+'bank_images/'+srcName.toLowerCase()+'_help.gif';
  }
  else	document.getElementById("voucherNumber").style.display = 'none';
  
  // Not Available pairs
  if(src_rate==0 && dst_rate==0)
  { 
    document.getElementById("ERR_MESSAGE").innerHTML = langErr[2];
	disable_exchange(true);	
	src_rate=1;	dst_rate=1; 
	var err_message = true;
  }
  
  if(dir == 'src') {
    dst_amount = MyCeil(src_amount * dst_rate / src_rate, 2);
    form.DST_AMOUNT.value = dst_amount;
  }
  else {
    src_amount = MyCeil(dst_amount * src_rate / dst_rate, 2);
    form.SRC_AMOUNT.value = src_amount;
  }
  
  //Max exchange fee
  var max_comm = MaxFee[form.dstID.value]; 
  if( (src_amount - dst_amount) > max_comm && max_comm > 0)	  form.DST_AMOUNT.value = MyCeil(src_amount-max_comm, 2);
  
  //Min exchange_fee
  if(src_amount > dst_amount)	
	  if( (src_amount - dst_amount) < min_comm && min_comm > 0)	  form.DST_AMOUNT.value = MyCeil(src_amount-min_comm, 2);

  // Is Limited
  if(isNumeric(limitAmt[form.srcID.value]) && limitAmt[form.srcID.value] > 0) { 
	limitmsg = "(Limited)";
	reserved_amount = MyCeil(limitAmt[form.srcID.value] * dst_rate / src_rate, 2);
	if(reserved_amount > Reserve[form.dstID.value]){	reserved_amount = Reserve[form.dstID.value];	limitmsg = "";	}
  }
  else
	reserved_amount = Reserve[form.dstID.value]; limitmsg = "";

  //Block more than reserved amount
  if( ( reserved_amount==0 || reserved_amount < dst_amount ) && !err_message && document.getElementById("over_reserve").value == 0 )
  {
  	document.getElementById("ERR_MESSAGE").innerHTML = langErr[3];
	document.getElementById('submit_exchange').disabled = true;	err_message = true;
  }
 

  //Invalid characters or zero
  if(form.SRC_AMOUNT.value<0 || form.DST_AMOUNT.value<0 )	return;
  if( !isNumeric(form.SRC_AMOUNT.value) || !isNumeric(form.DST_AMOUNT.value)){ 	form.DST_AMOUNT.value = "";	form.SRC_AMOUNT.value = ""; return; }

  document.getElementById("Rate").innerHTML = "<b>" + FormatNumber(src_rate, 2) + "</b> " + ValName[form.srcID.value] + " > <b>" + FormatNumber(dst_rate, 2) + "</b> " + ValName[form.dstID.value];
  document.getElementById("Reserve").innerHTML = "<b>" + reserved_amount + "</b> " + ValName[form.dstID.value] + " " + limitmsg;
  document.getElementById("Minimum").innerHTML = "<b>" + minAmt[form.srcID.value] + "</b> " + ValName[form.srcID.value];
  document.getElementById("dstText").innerHTML = ValName[form.dstID.value];

}

function MyCeil(str, precision) {
	return str.toFixed(2)
}

function FormatNumber(n, zn) {
  if(typeof(zn)=="undefined") return n;
  n = parseFloat(n);
  zn= parseInt(zn);
  p = Math.pow(10, zn);
  s = new String(Math.round(n*p)/p);
  if(ind=s.indexOf(".") > -1) { zn -= s.length-ind-1; } else { s += "."; }
  for(var i=0; i<zn; i++) { s += "0"; }
  return s;
}


function CheckForm(form) {
  if(minAmt[eval(form.srcID.value)] > form.SRC_AMOUNT.value) {
    if(langErr) alert(langErr[1] + " " + minAmt[eval(form.srcID.value)] + " " + ValName[eval(form.srcID.value)] + ".");
    form.SRC_AMOUNT.focus();
    return false;
  }
  return true;
}


function isNumeric(s) {
	return (s.toString().search(/^-?[0-9.]+$/) == 0);
}
