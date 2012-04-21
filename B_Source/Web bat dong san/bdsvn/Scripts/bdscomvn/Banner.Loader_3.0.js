// Define struct adObj
var adGroupObjList = new Array();      //Group List (on a Group contans banners object)
var adSize = new Array();      //Set Banner Size
var objMap = new Array();      //Group Index
var rands;
var idx = 0;

function fromRange(start, end) {
  var arr = [];
  while(start <= end)
    arr.push(start++);
  return arr;
};

Array.prototype.shuffle = function() {
  for(var i = this.length; i > 1; --i)
    this.swap(i - 1, Math.floor(Math.random() * i));
  return this;
};

Array.prototype.swap = function(i, j) {
  var t = this[i];
  this[i] = this[j]
  this[j] = t;
};

function BindData(l, gId, w, h) {

    var n = l.length;
    if (n == 0) return;
    else if (n == 1) {
        var player = document.getElementById("AdPlayer-" + gId);
        player.innerHTML = Build_Banners(gId, l[0].Id, l[0].IsImage ? 1 : 0, l[0].Url, l[0].ClickUrl, " class='banner-" + w + "x" + h + "' ", l[0].Tooltip);
        return;
    }
    else {
        var adObjList = new Array();    //Group list content list Banner in Group
        for (var i = 0; i < n; i++) {
            var adObj = new Array();            //thứ tự: bId, Url, Tip, TTL, Temp, Flag, UserClick
            adObj.push(l[i].Id);                    // 0: bId
            adObj.push(l[i].Url);                   // 1: Url
            adObj.push(l[i].Tooltip);               // 2: Tooltip
            adObj.push(l[i].TTL);                   // 3: TTL
            adObj.push(l[i].TTL);                   // 4: TempTTL
            adObj.push(l[i].IsImage ? 1 : 0);       // 5: IsImage
            adObj.push(l[i].ClickUrl);              // 6: ClickUrl
            adObjList.push(adObj);
        }
        adGroupObjList.push(adObjList);
        adSize.push(" class='banner-" + w + "x" + h + "' ");
        objMap.push(gId);

        //var objIndex = 0;       //Set first banner
		rands = this.fromRange(0, n-1).shuffle(); // Create a random banner index array
		var objIndex = rands[idx];		
        var gIndex = jQuery.inArray(gId, objMap);

        var player = document.getElementById("AdPlayer-" + gId);
        player.innerHTML = Build_Banners(gId, adGroupObjList[gIndex][objIndex][0], adGroupObjList[gIndex][objIndex][5], adGroupObjList[gIndex][objIndex][1], adGroupObjList[gIndex][objIndex][6], adSize[gIndex], adGroupObjList[gIndex][objIndex][2]);

        AdLive(gId, objIndex);  //Process Load and Change Banner
    }
}

function AdLive(gId, objIndex) {
    var player = document.getElementById("AdPlayer-" + gId);
    var gIndex = jQuery.inArray(gId, objMap);
    if (adGroupObjList.length > 0) {
        adGroupObjList[gIndex][objIndex][4]--;
        if (adGroupObjList[gIndex][objIndex][4] == 0) {
            //objIndex++;                 //tăng chỉ số của Banner -> next Banner			
			idx++;
			if(idx == rands.length){
				rands = rands.shuffle(); idx = 0;
				for (var i = 0; i < adGroupObjList[gIndex].length; i++)
                    adGroupObjList[gIndex][i][4] = adGroupObjList[gIndex][i][3];
			} // repeat with new random index		
 
			objIndex = rands[idx];
            player.innerHTML = Build_Banners(gId, adGroupObjList[gIndex][objIndex][0], adGroupObjList[gIndex][objIndex][5], adGroupObjList[gIndex][objIndex][1], adGroupObjList[gIndex][objIndex][6], adSize[gIndex], adGroupObjList[gIndex][objIndex][2]);
        }
        setTimeout(function() { AdLive(gId, objIndex) }, 1000);
    }
}

function Build_Banners(gId, bId, flag, objUrl, clickUrl, size, tip) {
    var htm = "";
    if (flag == 1){
		if(clickUrl.indexOf("javascript") == -1){
			htm = "<a id='" + gId + "_banner_" + bId + "' href='" + clickUrl + "' target='_blank' rel='nofollow' onclick='javascript:IncreaseUrl(" + bId +")'>"
				+ "<img src='" + objUrl + "'" + size + "' alt='" + tip + "' title='" + tip + "' /></a>";
		}else{
			htm = "<a id='" + gId + "_banner_" + bId + "' onClick='" + clickUrl + "' href='#' rel='nofollow' onclick='javascript:IncreaseUrl(" + bId +")'>"
				+ "<img src='" + objUrl + "'" + size + "' alt='" + tip + "' title='" + tip + "' /></a>";
		}
	}
    else
		if(clickUrl == ""){
			htm = "<a id='" + gId + "_banner_" + bId + "' target='_blank' rel='nofollow' onmousedown='javascript:IncreaseUrl(" + bId +")'><object" + size + ">"			
            + "<param name='wmode' value='transparent'/>"			
            + "<embed bgcolor='#ffffff' wmode='transparent' allowscriptaccess='always' type='application/x-shockwave-flash'"
			+ "pluginspage='http://www.macromedia.com/go/getflashplayer'  src='" + objUrl + "' " + size + "flashvars='div_id=banner_" + gId + "'>"
            + "</embed>"
            + "</object></a>";
		}else{
			htm = "<a id='" + gId + "_banner_" + bId + "' href='" + clickUrl + "' target='_blank' rel='nofollow' onmousedown='javascript:IncreaseUrl(" + bId +")'><object" + size + ">"			
            + "<param name='wmode' value='transparent'/>"			
            + "<embed bgcolor='#ffffff' wmode='transparent' allowscriptaccess='always' type='application/x-shockwave-flash'"
			+ "pluginspage='http://www.macromedia.com/go/getflashplayer'  src='" + objUrl + "' " + size + "flashvars='div_id=banner_" + gId + "'>"
            + "</embed>"
            + "</object></a>";
		}            
    return htm;
}

function IncreaseUrl(bannerId)
{
	$.ajax({
        url: "/Advertise/IncreaseUsersClick",
        data: { id: bannerId },
        error: function(err) { }
    });
}

function BindBannerSlide(l, gId, w, h, isLeft) {
    var n = l.length; if (n == 0) return;
    var html = "";
	var size = " class='banner-" + w + "x" + h + "' ";
    for (var i = 0; i < n; i++) {
        html += Build_Banners(gId, l[i].Id, l[i].IsImage ? 1 : 0, l[i].Url, l[i].ClickUrl, size, l[i].Tooltip);
    }
    if (isLeft) document.getElementById("fl_menu").innerHTML = html;
    else document.getElementById("fr_menu").innerHTML = html;

    DoShowBannerLide(isLeft);
}

function FloatMenu(id) {
    var animationSpeed = 1500;
    var animationEasing = 'easeOutQuint';
    var scrollAmount = $(document).scrollTop();
    var newPosition = menuPosition + scrollAmount;
    if ($(window).height() < $(id).height()) {
        $(id).css('top', menuPosition);
    } else {
        $(id).stop().animate({ top: newPosition }, animationSpeed, animationEasing);
    }
}

function DoShowBannerLide(isLeft) {
    Resize();
    if ($("#fl_menu").length) { menuPosition = $('#fl_menu').position().top; FloatMenu("#fl_menu"); }
    if ($("#fr_menu").length) { menuPosition = $('#fr_menu').position().top; FloatMenu("#fr_menu"); }
}
$(window).scroll(function() {
    Resize();
    if ($("#fl_menu").length) { FloatMenu("#fl_menu"); }
    if ($("#fr_menu").length) { FloatMenu("#fr_menu"); }
});
$(window).resize(function() { Resize(); });
$(document).ready(function() { 
	$("#fl_menu").hide(); $("#fr_menu").hide(); 
	if ($("#fl_menu").length){
		menuPosition=$('#fl_menu').position().top;	        
		FloatMenu("#fl_menu");	
	}
	if ($("#fr_menu").length){
		menuPosition=$('#fr_menu').position().top;	        
		FloatMenu("#fr_menu");	
	}
});
function Resize() {
    if ($(window).width() > $("#page").width() + $("#fl_menu").width() + $("#fr_menu").width() + 20) {
        var top = 30;
        var left = 0;
        if ($("#fl_menu").length) {
            left = (($(window).width() - $("#page").width()) / 2) - $("#fl_menu").width() - 10;
            $("#fl_menu").attr("style", "top:" + top + "px; left:" + left + "px;position:absolute;");
        }
        if ($("#fr_menu").length) {
            left = (($(window).width() + $("#page").width()) / 2) + 10;
            $("#fr_menu").attr("style", "top:" + top + "px; left:" + left + "px;position:absolute;");
        }
        $("#fl_menu").show();$("#fr_menu").show();
    }
    else { $("#fl_menu").hide(); $("#fr_menu").hide(); }
}

// for slide down banner

var jsTimeout = new Number();
var jsTimeDelay = 60;
var jsAcceleration = 0.2;
var jsVelocity = 3;

function jsAnimate(div_id, attr, value)
{
	var _originValue = new Number();
	var _splitArr = new Array();
	
	_splitArr = String(document.getElementById(div_id).style[attr]).split("px");	
	_originValue = parseInt(_splitArr[0]);
	clearTimeout(jsTimeout);
	if (parseInt(value) > _originValue)
	{
		jsTimeout = setTimeout('animateProcess("'+div_id+'", "'+attr+'", "increase", "'+_originValue+'", "'+value+'", 1)', jsTimeDelay);
	} else if (parseInt(value) < _originValue)
	{
		jsTimeout = setTimeout('animateProcess("'+div_id+'", "'+attr+'", "increase", "'+_originValue+'", "'+value+'", 1)', jsTimeDelay);
	}
}

function animateProcess(div_id, attr, type, begin, end, timing)
{
	clearTimeout(jsTimeout);
	var _distance = (jsAcceleration * Math.pow(parseInt(timing),2)) / 2 + jsVelocity * parseInt(timing);
	var _s = new Number();
	switch (type)
	{
		case "increase":
			_s = parseInt(begin) + parseInt(_distance);
			if (_s >= parseInt(end))
			{
				document.getElementById(div_id).style[attr]	= end + "px";
			} else {
				document.getElementById(div_id).style[attr]	= _s + "px";
				timing++;
				jsTimeout = setTimeout('animateProcess("'+div_id+'", "'+attr+'", "'+type+'", "'+_s+'", "'+end+'", '+timing+')', jsTimeDelay);
			}
			break;
		case "decrease":
			_s = parseInt(begin) - parseInt(_distance);
			if (_s <= parseInt(end))
			{
				document.getElementById(div_id).style[attr]	= end + "px";
			} else {
				document.getElementById(div_id).style[attr]	= _s + "px";
				timing++;
				jsTimeout = setTimeout('animateProcess("'+div_id+'", "'+attr+'", "'+type+'", "'+_s+'", "'+end+'", '+timing+')', jsTimeDelay);
			}
			break;
	}
}

// end for silde down banner