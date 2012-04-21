x=""; x=x+x; y="  "; i=0; var $Color_error = '#F9CBBF'; var $Color_good = '#DAFCD6'; var $Color_normal = 'white';
function setVisibility(id, visibility) { document.getElementById(id).style.display = visibility;}
function scroll(){ window.defaultStatus=x.substring(i,x.length)+x;  i++; if (i==x.length) i=0;  tid=setTimeout("scroll()",100)}
function stopScroll(){    window.defaultStatus=" ";    window.clearTimeout(tid);} 
function scrollScreen(theURL) {	window.open(theURL,'small','fullscreen=no,scrollbars=yes,width=360,height=420');}
function submit(){	document.forms[0].submit();}
function getlist(frm,vname){	var len = frm.elements.length; lst = "";	for(var i=0;i<len;i++){		if (frm.elements[i].name==vname && frm.elements[i].checked)	lst += frm.elements[i].value + ",";	}
	return (lst.length>0)?lst.substr(0,lst.length-1):"";}
function MM_preloadImages() {  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}}
function MM_swapImgRestore() {   var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;}
function MM_findObj(n, d) {   var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);  if(!x && d.getElementById) x=d.getElementById(n); return x;}
function MM_swapImage() {   var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}}
function MM_openBrWindow(theURL,winName,features) {   window.open(theURL,winName,features);}
function setLabelText(ID, Text){ document.getElementById(ID).innerHTML = Text;}
function mark_fileds(F,TXT){
	document.getElementById(F).style.backgroundColor = $Color_error;
	document.getElementById(F).focus();
	setLabelText("lbl_error", TXT);	
}

function confirm_entry(action){
	input_box=confirm("Do you want realy "+action+"?!");
	if (input_box==true)	 return true;	
	else	return false;	
}
	
function getStyle(obj, styleProp) {
  if (obj.currentStyle) {
    var y = obj.currentStyle[styleProp];
  } else if (window.getComputedStyle)
    var y = window.getComputedStyle(obj, null)[styleProp];
  return y;}
function clearDefault(el) {
  if (el.defaultValue==el.value) el.value = "";
}


var rowHighlight = true
  var colHighlight = true

  function getElement(el) {
    var tagList = new Object
    for (var i = 1; i < arguments.length; i++)
      tagList[arguments[i]] = true
    while ((el!=null) && (tagList[el.tagName]==null))
      el = el.parentElement
    return el
  }

