// JavaScript Document
$(document).ready(function(){
	$('.filterBox').hide();
	$('.arrow').click(function(){
	$(this).parent().children('.filterBox').slideToggle();									
	})	
	
	$('.express, #sharedown').hide();
	$('.filteredItem').mouseenter(function(){
		$(this).children().children('.express').show('slow');
		})
	$('.filteredItem').mouseleave(function(){
		$(this).children().children('.express').hide('slow');
		})
		
	$('.infodown').hide();
	$('.info').click(function(){
		$('.infodown').slideToggle();
		})
			
	<!-------end collection------------>
		<!-------bengin detailproduct------------>
			$('.dropdownClass').hide();
					$('.listH').click(function(){
					$(this).children().children('.dropdownClass').slideToggle();
					})
			  									
		<!-------bein lookbokk------------>
		$('#pupPanellogin').hide();
		$('.logonLinkNoAjax').click(function(){
			$('#pupPanellogin').show();
		})
		$('.modalClose ').click(function(){
			$('#pupPanellogin').hide();
			})
		
});