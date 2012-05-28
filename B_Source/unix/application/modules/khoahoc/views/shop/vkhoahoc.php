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
		<a>Khóa học</a>
	</div>
	<hr/>
	<div id="hoithao-content">
		<div id="col_left">
			<?php $this->load->view('shop/left');?>
		</div>
		<div id="col_right">
			<div id="content">
				<ul class="list">
					<?php 
					{
						foreach($list as $item)
						{?>
							<li style="clear:both">
								<style type="text/css">
									p{margin-top:5px; margin-bottom:3px}
								</style>
								<table>
									<tr>
										<td>
											<a href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>"><img src="<?php echo base_url().'assets/unix/images/khoahoc/'.$item->anhdaidien;?>" height="100px" width="130px" style="float:left; border:double 4px silver"/></a>
										</td>
										<td style="padding:0 10px; text-align:justify; vertical-align:0">
											<a href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>"><h3 style="margin:0;color:#0158a1"><?php echo $item->tieude;?></h3></a>
											<?php echo substr($item->mota,0,200).' ...';?>
											<a href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>" style="font-style:italic">Xem thêm</a>
										</td>
									</tr>
								</table>
							</li>
							<li><hr/></li>
					<?php 	}
					}?>
				</ul>
				<?php echo $this->pagination->create_links();?>
			</div>
		</div>
	</div>
</div>