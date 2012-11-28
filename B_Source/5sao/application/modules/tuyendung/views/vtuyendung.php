<script type="text/javascript">
	$('#menu-tintuc').parent().addClass('currentmenu');
</script>
<div id="center" style="padding:15px 0">
	<div class="text-content">
		<?php if ($_SESSION['lang']=="vn") echo $detail->noidung_v; else echo $detail->noidung_e;?>
	</div>
</div>