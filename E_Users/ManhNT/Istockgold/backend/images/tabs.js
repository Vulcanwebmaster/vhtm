function TabClick(sel) {
	if(!sel) sel = 0;
	for(i=0;i<tabs;i++) {
		document.getElementById('tab'+i).className='tab';
		document.getElementById('tabbox'+i).style.display='none';
	}
	document.getElementById('tab'+sel).className='tabselected';
	document.getElementById('tabbox'+sel).style.display='';
	setTab(sel);
}

for(i=0;i<tabs;i++) {
	document.getElementById('tabbox'+i).style.display='none';
}
function setTab(num) {
	document.getElementById('selectedtab').value=num;
}


var rowHighlight = true // turn on row highlights
var colHighlight = true // turn off row highlights

function getElement(el) {
var tagList = new Object
for (var i = 1; i < arguments.length; i++)
  tagList[arguments[i]] = true
while ((el!=null) && (tagList[el.tagName]==null))
  el = el.parentElement
return el
}

function checkHighlight(which) {
var el = getElement(event.srcElement,"TH","TD")
if (el==null) return
if ((el.tagName=="TH") && (colHighlight)) {
  var idx = el.cellIndex
  var table = getElement(el, "TABLE")
  var column = table.all.tags("COL")[idx]
  if (which)
	column.className="cover"
  else
	column.className=""
}      
if ((el.tagName=="TD") && (rowHighlight)) {
  var row = getElement(el, "TR") 
  var table = getElement(row, "TABLE")
  if (which) 
	row.className = "rover"
  else
	row.className = ""
  cache = row
}
}
