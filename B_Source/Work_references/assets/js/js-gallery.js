/**
 * 
 */
$(document).ready(function(){
		$('.list ul').css('width',300*<?php echo count($references);?>+'px');
		$('.prev img').click(function(){
			$left=parseInt($('.list ul').css('margin-left'));
			if ($left<0)
				{
					$left+=900;
					$('.list ul').animate({marginLeft:$left+'px'},500);
				}
		});
		
		$('.next img').click(function(){
			$width=parseInt($('.list ul').css('width'));
			$left=parseInt($('.list ul').css('margin-left'));
			
			if ($left>-($width-900))
				{
					$left-=900;
					$('.list ul').animate({marginLeft:$left+'px'},500);
				}
		});
	});