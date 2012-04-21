//Kiểm Tra Tính Hợp Lệ Của Email Trên Trình Khách
function validEmail(obj) {
	var s = obj.value;
	for (var i=0; i<s.length; i++)
		if (s.charAt(i)==" "){
			return false;
		}
	var elem, elem1;
	elem=s.split("@");
	if (elem.length!=2)	return false;

	if (elem[0].length==0 || elem[1].length==0)return false;

	if (elem[1].indexOf(".")==-1)	return false;

	elem1=elem[1].split(".");
	for (var i=0; i<elem1.length; i++)
		if (elem1[i].length==0)return false;
	return true;
}
//------------------------------------------------------------------------
//Kiểm Tra Xem đã có dữ liệu nhập hay chưa
function testSpaceBar(obj){
	if(obj.value=="")return false;
	else{		
		var s = obj.value;
		var temp = s.split(" ");
		var str = "";
		for(var i=0; i<temp.length; i++)str=str + temp[i];
		if(str==""){
			obj.value = str.substring(0,str.length);
			return false;
		}
	}//else
	return true;
}
//-----------------------------------------------------------------------
//Xác Nhận Thoát Khỏi Hệ Thống
function Logout()
	{
		var blnLogout
		blnLogout=confirm("Bạn Có Chắc Chắn Muốn Thoát Khỏi Hệ Thống Không?")
		if (blnLogout==true)
			{
				document.location.href="-Module=2.htm"/*tpa=http://batdongsan24h.com.vn/Library/?Module=2*/
			}
		else
			{
			}
	}
//-----------------------------------------------------------------------
function isValideString(Cstring) {
	var inword = '1234567890,.';
	
	var i ;
	for ( i=0; i<Cstring.length; i++ ){
		if( inword.indexOf(Cstring.substring(i,i+1)) <0){
			return false;
		}		
	}
	return true;
}

function isValidePicture(image){
	stmp = document.getElementById(image).value;
	if(stmp!=''){
		tarr = stmp.split(".");
		if(tarr.length<2)return false;
		stmp = tarr[tarr.length-1];
		stmp = stmp.toLowerCase();
		if(stmp != "gif" && stmp != "jpg" && stmp != "jpeg"){
			alert("Chỉ Chấp Nhận Những Định Dạng Hình Ảnh: *.jpg, *.jpeg, *.gif");
			document.getElementById(image).focus();
			return false;
		}
	}	
	return true;
}
//-----------------------------------------------------------------------

function DisableTab(RecourdCount,Recordset)
{
	document.getElementById('LanguagesDefault').style.display='none';
	document.getElementById('LanguagesDefaultTop').className='ClassTabHidden';
	var i=1, x=1;
	x+=RecourdCount;
	for(i=1;i<x;i++){
		if (i==Recordset){
	   		document.getElementById('InputLanguages'+i).style.display='';
			document.getElementById('TextLanguages'+i).className='ClassTabShow';
		} 
		else{
			document.getElementById('InputLanguages'+i).style.display='none';	
			document.getElementById('TextLanguages'+i).className='ClassTabHidden';
		}
	}
}
function HiddenTab(RecourdCount){
	document.getElementById('LanguagesDefault').style.display='';
	document.getElementById('LanguagesDefaultTop').className='ClassTabShow';
	var i=1, x=1;
	x+=RecourdCount;
	for(i=1;i<x;i++){
	    document.getElementById('InputLanguages'+i).style.display='none';
		document.getElementById('TextLanguages'+i).className='ClassTabHidden';
	}	
}
//-----------------------------------------------------------------------

function docheck_I(status,from_){
	var alen=document.FrmList.elements.length;
	alen=(alen>2)?document.FrmList.chkOneDelete.length:0;
	if (alen>0){
		for(var i=0;i<alen;i++)
			document.FrmList.chkOneDelete[i].checked=status;
	}
	else {
		document.FrmList.chkOneDelete.checked=status;
	}
	if (from_>0)
		document.FrmList.chkAllDelete.checked=status;
}
//-----------------------------------------------------------------------	

function docheckone_I(){
	var alen=document.FrmList.elements.length;
	var isChecked=true;
	alen=(alen>3)?document.FrmList.chkOneDelete.length:0;
	if (alen>0){
		for(var i=0;i<alen;i++)
			if (document.FrmList.chkOneDelete[i].checked==false)
			isChecked=false;
	}
	else {
		if (document.FrmList.chkOneDelete.checked==false)
		isChecked=false;
	}
	document.FrmList.chkAllDelete.checked=isChecked;
}
//-----------------------------------------------------------------------

function checkall_I(){
	if (document.FrmList.chkAllDelete.checked==true)
		docheck_I(true,1);
	else
		docheck_I(false,2);
}
//-----------------------------------------------------------------------

function checkInput_I(obj,msg,msg_I) {
	var alen=document.FrmList.elements.length;
	var isChecked=false;
	alen=(alen>4)?document.FrmList.chkOneDelete.length:0;
	if (alen>0){
		for(var i=0;i<alen;i++)
			if (document.FrmList.chkOneDelete[i].checked==true)
				isChecked=true;
	}
	else {
		if(document.FrmList.chkOneDelete.checked==true)
			isChecked=true;
	}
	if(!isChecked){
		//GetBlackWindows('1');
		alert(msg);
		//GetBlackWindows('');
	}			 
	else{
		if (obj=="btnDelete")
			//GetBlackWindows('1');
			blnClick=confirm(msg_I);
		if (blnClick==true){
			isChecked=true;
			//GetBlackWindows('');
		}
		else{
			isChecked=false;
			//GetBlackWindows('');
		}
	}
	return isChecked;
}

function TabTD(id,color){
	document.getElementById(id).style.backgroundColor=color;
}
function TabTD_1(id,color){
	document.getElementById(id).style.backgroundColor=color;
}

function makeRequest(url, obj_response, method, parameters, linkImagesLoad) {
	var http_request	= false;
	var show_id			= document.getElementById(obj_response);
	if (!show_id) {
		//alert('Cannot find object response data !');	
		return false;
	}
	if(url == ""){
		return false;
	}
	show_id.innerHTML	= linkImagesLoad;
	if (window.XMLHttpRequest) { // Mozilla, Safari,...
		http_request	= new XMLHttpRequest();
		if (http_request.overrideMimeType) {
			//set type accordingly to anticipated content type
			http_request.overrideMimeType('text/html');
		}
	} else if (window.ActiveXObject) { // IE
		try {
			http_request = new ActiveXObject('Msxml2.XMLHTTP');
		} catch (e) {
			try {
				http_request = new ActiveXObject('Microsoft.XMLHTTP');
			} catch (e) {}
		}
	}
	if (!http_request) {
		alert('Cannot create XMLHTTP instance');
		return false;
	}
	
	http_request.onreadystatechange=	function(){
													if (http_request.readyState == 4) {
														if (http_request.status == 200) {
															//alert(http_request.responseText);
															show_id.innerHTML = http_request.responseText;     
														} else {
															//alert('There was a problem with the request.');
															return false;
														}
													}
												}
	if(method == 'GET'){
		http_request.open('GET', url, true);
		http_request.send('');
	}
	else if(method == 'POST'){
		http_request.open('POST', url, true);
		http_request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		http_request.setRequestHeader('Content-length', parameters.length);
		http_request.setRequestHeader('Connection', 'close');
		http_request.send(parameters);
	}
}
function OpenWindows(url, name, location, status, scrollbars, resizable, width, height)
	{
   		window.open(url,name,'location='+location+',status='+status+',scrollbars='+scrollbars+',resizable='+resizable+',width='+width+',height='+height+'');
	}
	
function changeKeyboard(id) 
{
	if (document.getElementById(id).className == "searchLeftOff")
	{
		//setMethod(1);
		Mudim.SetMethod(2);
		document.getElementById(id).className = "searchLeftOn";
	} 
	else
	{
		//setMethod(-1);
		Mudim.SetMethod(0);
		document.getElementById(id).className = "searchLeftOff";
	}      
	return true;
}
	function writeDiv(linkImages){
		document.write('<div id="dhtmltooltip"></div>');
		document.write('<img id="dhtmlpointer" src='+linkImages+'>');
		//document.write('abc')
	}
	writeDiv('tooltiparrow.gif'/*tpa=http://batdongsan24h.com.vn/Images/tooltiparrow.gif*/);

var offsetfromcursorX = 12;
var offsetfromcursorY = 10;
var offsetdivfrompointerX = 10;
var offsetdivfrompointerY = 14;

var ie = document.all;
var ns6 = document.getElementById && ! document.all;
var enabletip = false;

if (ie || ns6)
	var tipobj = document.all ? document.all["dhtmltooltip"] : document.getElementById ? document.getElementById("dhtmltooltip") : "";

var pointerobj = document.all ? document.all["dhtmlpointer"] : document.getElementById ? document.getElementById("dhtmlpointer") : "";

function ietruebody() {
	return (document.compatMode && document.compatMode != "BackCompat") ? document.documentElement : document.body;
}

function showtipbydiv(id, thewidth) {
    showtip(document.getElementById(id).innerHTML, thewidth);
}

function showtip(thetext, thewidth, thecolor) {
	if (ns6 || ie) {
		if (typeof thewidth != "undefined")
			tipobj.style.width = thewidth + "px";
		if (typeof thecolor != "undefined" && thecolor != "")
			tipobj.style.backgroundColor = thecolor;
		tipobj.innerHTML = thetext;		
		enabletip = true;
		return false;
	}
}

function positiontip(e) {
	if (enabletip) {		
		var nondefaultpos = false;
		var curX = (ns6) ? e.pageX : event.clientX + ietruebody().scrollLeft;
		var curY = (ns6) ? e.pageY : event.clientY + ietruebody().scrollTop;
		
		var winwidth = ie && ! window.opera ? ietruebody().clientWidth : window.innerWidth - 20;
		var winheight = ie && ! window.opera ? ietruebody().clientHeight : window.innerHeight - 20;

		var rightedge = ie && ! window.opera ? winwidth - event.clientX - offsetfromcursorX : winwidth - e.clientX - offsetfromcursorX;
		var bottomedge = ie && ! window.opera ? winheight - event.clientY - offsetfromcursorY : winheight - e.clientY - offsetfromcursorY;

		var leftedge = (offsetfromcursorX < 0) ? offsetfromcursorX * (- 1) : - 1000;

		if (rightedge < tipobj.offsetWidth) {
			tipobj.style.left = curX - tipobj.offsetWidth + "px";
			nondefaultpos = true;
		}
		else if (curX < leftedge)
			tipobj.style.left = "5px";
		else {
			tipobj.style.left = curX + offsetfromcursorX - offsetdivfrompointerX + "px";
			pointerobj.style.left = curX + offsetfromcursorX + "px";
		}

		if (bottomedge < tipobj.offsetHeight) {
			tipobj.style.top = curY - tipobj.offsetHeight - offsetfromcursorY + "px";
			nondefaultpos = true;
		}
		else {
			tipobj.style.top = curY + offsetfromcursorY + offsetdivfrompointerY + "px";
			pointerobj.style.top = curY + offsetfromcursorY + "px";
		}

		tipobj.style.visibility = "visible";
		if (!nondefaultpos)
		{
			pointerobj.style.visibility = "visible";
	    }
		else
			pointerobj.style.visibility = "hidden";
	}
}

function hidetip() {
	if (ns6 || ie) {
		enabletip = false;
		tipobj.style.visibility = "hidden";
		pointerobj.style.visibility = "hidden";
		tipobj.style.left = "-1000px";
		tipobj.style.backgroundColor = '';
		tipobj.style.width = '';
	}
}

document.onmousemove = positiontip;
