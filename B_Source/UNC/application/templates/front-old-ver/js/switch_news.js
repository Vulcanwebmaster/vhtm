$(document).ready(function () {
	$('#rs1').addClass('togger_view');
	$('.rs').click(function(){
		$('.rs').removeClass('togger_view');
		$(this).addClass('togger_view');
	})
})

function toggle_view(id1,id2)
{
	var id1 = document.getElementById(id1);
	var id2 = document.getElementById(id2);
	
	id1.style.display = 'block';
	id2.style.display = 'none';
}
