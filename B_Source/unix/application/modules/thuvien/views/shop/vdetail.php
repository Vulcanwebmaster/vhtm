<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1>Thư viện</h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>
<div id="content-panel">

	<div id="thuvien-content">
		<div id="col_left">
			<?php $this->load->view('shop/left');?>
		</div>
		<div id="col_right">
			<h3 style="margin-left:20px; border-bottom:solid 2px #0573c8; width:auto">Thông tin sách</h3>
			<div style="width:750px; text-align:center; padding-left:20px">
				<style type="text/css">
					td{vertical-align:0; padding:10px 5px; text-align:justify; font-size:12px}
				</style>
				<center>
				<table style="width:70%">
					<tr>
						<td style="width:20%">Tên sách</td>
						<td><strong><?php echo $information->tensach;?></strong></td>
					</tr>
					<tr>
						<td>Thể loại</td>
						<td><?php echo $type;?></td>
					</tr>
					<tr>
						<td>Tác giả</td>
						<td><?php echo $information->tacgia;?></td>
					</tr>
				</table>
				</center>
			</div>
			<div id="content-panel" style="width:750px; text-align:justify; margin-bottom:15px">
				<!-- iframe width="560" height="315" src="<?php echo str_replace('watch?v=', 'embed/', $information->mota);?>" frameborder="0" allowfullscreen></iframe -->
				<?php echo $this->MKaimonokago->getYouTubeLink($information->mota);?>
			</div>
		</div>
	</div>
</div>