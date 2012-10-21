$(document).ready(function () {
			var e1 = document.getElementById('col1');
			e1.style.display = 'block';
});
		
function toggle_view(id1,id2) 
{
	var e1 = document.getElementById(id1);
	var e2 = document.getElementById(id2);
	e1.style.display = 'block';
	e2.style.display = 'none'; 
}