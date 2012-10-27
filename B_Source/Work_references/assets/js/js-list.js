
$(document).ready(function(){
	$width=$(window).width();
	$height=$(window).height();
	$('.mask').css('left',($width-$('.mask').width())/2+'px');
	$('.mask').css('top',($height-$('.mask').height())/2+'px');
	$('.mask2').css('left',($width-$('.mask2').width())/2+'px');
	$('.mask2').css('top',($height-$('.mask2').height())/2+'px');
	
	$('.mask').hide();
	$('.mask2').hide();
	$(window).resize(function(){
		$width=$(window).width();
		$height=$(window).height();
		$('.mask').css('left',($width-$('.mask').width())/2+'px');
		$('.mask').css('top',($height-$('.mask').height())/2+'px');
		$('.mask2').css('left',($width-$('.mask2').width())/2+'px');
		$('.mask2').css('top',($height-$('.mask2').height())/2+'px');
	});
	
	$('#add_reference').click(function(){
		$('.mask').slideDown();
	});
	$('#add_category').click(function(){
		$('.mask2').slideDown();
	});
	$('.exit').click(function(){
		$(this).parent('td').parent('tr').parent('tbody').parent('table').parent('form').parent('.mask').slideUp();
		$(this).parent('.mask2').slideUp();
	});
	
	
});