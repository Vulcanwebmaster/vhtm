<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1>Giới thiệu</h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>
<div id="content-panel">
	<div id="current-map">
		<a href="<?php echo base_url();?>">Trang chủ</a>
		<a>:</a>
		<a>Giới thiệu</a>
	</div>
	<hr/>
	<br/>
	<div id="gioithieu-content">
		<?php if ($gioithieu!=false)
		{
			echo $gioithieu->noidung;
		}?>
	</div>
</div>