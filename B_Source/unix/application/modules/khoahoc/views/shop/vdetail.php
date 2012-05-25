<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1>Khóa học</h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>
<div id="content-panel">
	<div id="current-map">
		<a href="<?php echo base_url();?>">Trang chủ</a>
		<a>:</a>
		<a href="<?php echo base_url();?>index.php/khoahoc">Khóa học</a>
		<a>:</a>
		<a><?php if (isset($info)) echo $info->tieude;?></a>
	</div>
	<hr/>
	<div id="hoithao-content">
		<div id="col_left">
			<?php $this->load->view('shop/left');?>
		</div>
		<div id="col_right">
			<div id="content" style="border-width:1px; padding:20px; width:720px; text-align:justify">
				<center>
					<h1 style="color:#434343"><?php if (isset($info))
					{
						echo $info->tieude;
					}?></h1>
				</center>
				<p style="color:#035a77; text-transform:uppercase">Ngày đăng: <?php if (isset($info)) echo $info->thoigian;?></p>
				<?php echo $info->mota;?>
			</div>
		</div>
	</div>
</div>