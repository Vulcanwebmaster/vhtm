$(document).ready(function () {
	$('.news1').addClass('togger_background_1');
	$('.news2').addClass('togger_border');
	$('.comment_name').push('name');
	
	$('.news1').click(function(){
		$('.news1').addClass('togger_background_1');
		$('.news1').removeClass('togger_border');
		$('.news2').removeClass('togger_background_2');
		$('.news2').addClass('togger_border');
		var col1 = document.getElementById('col1');
		var col2 = document.getElementById('col2');
		col1.style.display = 'block';
		col2.style.display = 'none';
	})
	$('.news2').click(function(){
		$('.news1').removeClass('togger_background_1');
		$('.news1').addClass('togger_border');
		$('.news2').addClass('togger_background_2');
		$('.news2').removeClass('togger_border');
		var col1 = document.getElementById('col1');
		var col2 = document.getElementById('col2');
		col2.style.display = 'block';
		col1.style.display = 'none';
	})
})

function toggle_view(id1,id2)
{
	var id1 = document.getElementById(id1);
	var id2 = document.getElementById(id2);
	
	id1.style.display = 'block';
	id2.style.display = 'none';
}
