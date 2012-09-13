/**
 * 
 */

$(document).ready(function(){
	$('.level2').hide();
	$('#list li').css('cursor','pointer');
	$('#list li').click(function(){
		$(this).children('.level2').slideDown();
	});
	
	$('#list li').mouseleave(function(){
		$(this).children('.level2').slideUp();
	});
});