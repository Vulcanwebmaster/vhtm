$(document).ready(function() {	
	$(":button").addClass('button_ie6');
	$(":reset").addClass('button_ie6');
	$(":submit").addClass('button_ie6');				
	$(".fqlink li:last-child").css({"border":"0"});
	$(".fqlinknew li:last-child").css({"border":"0"});
	$(".fqlink a").css({"display":"inline-block"});	
	$(".breadcrumbs a:first-child").css({"padding-left":"0px"});
	if ($("#otherProject").length) {$("#otherProject li:first-child").css({"display":"none"});}
	if ($("#prjdetail").length) {$("#prjdetail li:first-child").css({"display":"none"});}	
	if($("#inter").length){
		$("#inter").hover(function() {
			$("#title").addClass('hover');
			$("#country").addClass('uldisp');
		}, function() {
			$("#title").removeClass('hover');
			$("#country").removeClass('uldisp');		
		});
		$("#country li").hover(function() {
			$(this).addClass('lihover');				
		}, function() {
			$(this).removeClass('lihover');
		});
		
		$("#country li:first-child").css('border-top','none');			}	
});