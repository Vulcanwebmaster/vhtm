<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1><?php echo $left; ?></h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>

<div id="content-panel">
	<hr style="border:none">
	<div id="hoithao-content">
		<div id="col_left">
			<?php $this->load->view('shop/left');?>
		</div>
		<div id="col_right">
			<div id="content" style="border-width:1px; padding:20px; width:720px; text-align:justify">
				<center>
					<h1 style="color:#434343"><?php if (isset($chuyenmuc))
					{
						echo $chuyenmuc->ten;
					}?></h1>
				</center>
				<p style="color:#035a77; text-transform:uppercase">Ngày đăng: <?php if (isset($chuyenmuc)) echo $chuyenmuc->ngaydang;?></p>
				<?php if (isset($chuyenmuc)) echo $chuyenmuc->noidung;?>
			</div>
		</div>
	</div>
</div>