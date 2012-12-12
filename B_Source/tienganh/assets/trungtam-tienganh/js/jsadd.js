$(document).ready(function(){
	$('#li_leftgv1').addClass('bgicongv')
	$('#li_leftgv2, #li_leftgv3, #li_leftgv4').addClass('bgicongv2');
	$('#li_leftgv1').click(function(){
		$(this).addClass('bgicongv');
		$(this).removeClass('bgicongv2');
		$('#li_leftgv2, #li_leftgv3, #li_leftgv4').addClass('bgicongv2');
		$('#li_leftgv2, #li_leftgv3, #li_leftgv4').removeClass('bgicongv');
	});
	$('#li_leftgv3').click(function(){
		$(this).addClass('bgicongv');
		$(this).removeClass('bgicongv2');
			$('#li_leftgv2, #li_leftgv1, #li_leftgv4').addClass('bgicongv2');
		$('#li_leftgv2, #li_leftgv1, #li_leftgv4').removeClass('bgicongv');
	});
	$('#li_leftgv4').click(function(){
		$(this).addClass('bgicongv');
		$(this).removeClass('bgicongv2');
			$('#li_leftgv2, #li_leftgv3, #li_leftgv1').addClass('bgicongv2');
		$('#li_leftgv2, #li_leftgv3, #li_leftgv1').removeClass('bgicongv');
	});
	$('#li_leftgv2').click(function(){
		$(this).addClass('bgicongv');
		$(this).removeClass('bgicongv2');
			$('#li_leftgv1, #li_leftgv3, #li_leftgv4').addClass('bgicongv2');
		$('#li_leftgv1, #li_leftgv3, #li_leftgv4').removeClass('bgicongv');
	});
});
