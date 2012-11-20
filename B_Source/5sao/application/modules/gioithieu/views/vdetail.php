<script type="text/javascript">
	$('#menu-gioithieu').parent().addClass('currentmenu');
	
	$(document).ready(function(){
		$('.bg_itemmenu').show();
</script>
<div id="center">
	<h3 class="gioithieu-title"><?php if ($lang=="vn") echo $detail->tieude_v; else echo $detail->tieude_e;?></h3>
	<?php if ($lang=="vn") echo $detail->noidung_v; else echo $detail->noidung_e;?>
</div>