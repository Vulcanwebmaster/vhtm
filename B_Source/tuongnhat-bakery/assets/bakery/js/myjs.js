/**
 * 
 */
$(document).ready(function(){
	$('.menu-item a').click(function(){
		$('.menu-item a').removeClass('active');
		$(this).addClass('active');
	});
});