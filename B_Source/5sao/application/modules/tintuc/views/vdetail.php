<script type="text/javascript">
	$('#menu-tintuc').parent().addClass('currentmenu');
</script>
<div id="center">
	<h3 class="gioithieu-title"><?php if ($lang=="vn") echo $detail->tieude_v; else echo $detail->tieude_e;?></h3></br>
	(<?php echo $detail->ngaythang;?>)</br>
	<?php if ($lang=="vn") echo $detail->noidung_v; else echo $detail->noidung_e;?></br>
	(Tác giả: <?php echo $detail->tacgia;?>)</br>
</div>