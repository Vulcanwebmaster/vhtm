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
	<hr style="border:none">
	<div id="thuvien-content">
		<div id="col_left">
			<?php $this->load->view('shop/left');?>
		</div>
		<div id="col_right">
			<div id="content">
				<ul style="list-style-type:none; margin:15px; padding-left:0">
					<?php if(count($list)>0)
					{
						foreach($list as $item)
						{?>
							<li>
								<h3 style="color:#005274"><?php echo $item->nguoidang;?></h3>
								<?php if ($item->noidung!='')
								{?>
									<p style="text-align:justify"><?php echo $item->noidung;?></p>
								<?php }?>
							</li>
					<?php	}
					}
					else echo '<center><p>Không có bài cảm nhận nào.</p></center>'?>
				</ul>
				<?php echo $this->pagination->create_links();?>
			</div>
		</div>
	</div>
</div>