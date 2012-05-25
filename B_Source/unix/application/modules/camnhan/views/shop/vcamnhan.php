<div id="title-panel">
	<div id="title">
		<div id="title-left"></div>
		<div id="title-center">
			<h1>Cảm nhận</h1>
		</div>
		<div id="title-right"></div>
	</div>
</div>
<div id="content-panel">
	<div id="current-map">
		<a href="<?php echo base_url();?>">Trang chủ</a>
		<a>:</a>
		<a>Cảm nhận</a>
	</div>
	<hr/>
	<div id="thuvien-content">
		<div id="col_left">
			<?php $this->load->view('shop/left');?>
		</div>
		<div id="col_right">
			<div id="content">
				<ul style="list-style-type:none; margin:15px; padding-left:0">
					<?php if(isset($list))
					{
						foreach($list as $item)
						{?>
							<li>
								<h3 style="color:#005274"><?php echo $item->nguoidang;?></h3>
								<p style="text-align:justify">"..<?php echo $item->noidung;?>.."</p>
							</li>
					<?php	}
					}?>
				</ul>
				<?php echo $this->pagination->create_links();?>
			</div>
		</div>
	</div>
</div>