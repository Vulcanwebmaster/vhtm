/*# Metadata ################################### Header v.2
# $URL: http://gt-nas-1/svn/gamebase.frontend/branches/1.21/xsl_gamebase/_gametwist_2010/data/js/jsErrorLogger.js $
# $Rev: 10601 $
# $Date: 2012-11-19 15:20:37 +0100 (Mo, 19 Nov 2012) $
# $Author: bstei $
### TOC ###################################################
#
### Description ###########################################
#
#########################################################*/
var domreadyFired = false,
loadFired = false,
errorElement = false,
errorLogDomain = '//logjs-gt.greentube.com',
now = new Date().getTime(),
logHost = document.location.protocol,
sJS,
sCSS,
uGames;

window.onerror = handleErr;

function handleErr(msg, url, l, e) {
		var txt = "";
		txt += "?Error=" + encodeURIComponent(msg);
		txt += "&URL=" + encodeURIComponent(url);
		txt += "&Line=" + encodeURIComponent(l);
		txt += "&domready=" + domreadyFired;
		txt += "&onload=" + loadFired;
		txt += "&referer=" + encodeURIComponent(location.href);
		txt += "&errorElement=" + encodeURIComponent(errorElement);
		//txt += "&tstamp=" + new Date().getTime();
		var errorImg = new Image();
		if(errorLogDomain) {
			errorImg.src = logHost + errorLogDomain + '/web/LogJs' + txt;
		}
		return false;
};

if(window.addEvent) {
	window.addEvent("domready", function (){
		domreadyFired = true;
	});
	
	window.addEvent("load", function (){
		loadFired = true;
	});
	
	window.addEvent("click",function(event){
		var theNodes = [event.target].combine(event.target.getParents())
		//errorElement = "";
		theNodes.each(function(element,index,array){
		var prevNodes = element.getAllPrevious(element.get('tag'))
		var thePosition = prevNodes.length > 0 ? '['+(prevNodes.length+1)+']':'';
		
		errorElement = '/' + element.get('tag') + thePosition//+errorElement;
		});
		//console.log(theAxe); 
	});
}

window.addEvent('load', function () {
	if ( self.location.href.indexOf('#resload') === -1 ) {
			//is js loaded
			if (!$defined(window.GT)) {
				new Element('script', {
					type: 'text/javascript',
					src: logHost + '//static1.greentube.com/xsl_gamebase/_gametwist_2010/data/js/js.static?t='+now
				}).inject(document.head);
				sJS = true;
			}
			
			if (($(document.body).getStyle('color') != '#333333') && ($(document.body).getStyle('color') != '#333')) {
			//if ($(document.body).getStyle('color') != '#ffffff') {
				
				new Element('link', {
					rel: 'stylesheet',
					type: 'text/css',
					href: logHost + '//static1.greentube.com/xsl_gamebase/_gametwist_2010/data/css/css.static?t='+now
				}).inject(document.head);
				sCSS = true;

			}
			
			//games.asp problem check
			if (self.location.href.test(/^http(s)?:\/\/[^/]+\/.+games\.asp.*/)){
				uGames = true;
			}
			
			if ((sJS || sCSS || uGames) === true) {
				self.location.href = '#resload';
				( function () {
					window.fireEvent('loaded');
					window.fireEvent('domready');
					window.fireEvent('load');
				}).delay(2500);
				
				if(sJS)
					( function () {js}).delay(3000);
				
				if(sCSS)
					( function () {css}).delay(3000);
				
				if(uGames)
					( function () {games}).delay(3000);
			}	
	}
});

