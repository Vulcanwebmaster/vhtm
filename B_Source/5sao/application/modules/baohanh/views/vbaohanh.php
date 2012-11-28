<script type="text/javascript">
	$('#menu-baohanh').parent().addClass('currentmenu');
</script>

<div id="center">
	
		<?php if ($_SESSION['lang']=="vn") echo $list->noidung_v; else echo $list->noidung_e;?>
	
</div>
