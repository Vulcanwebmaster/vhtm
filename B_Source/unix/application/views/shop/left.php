<div>
	<div id="left-top"></div>
	<!-- ============= HỘI THẢO ================== -->
	<div class="left-title">
		<h4>Tin hội thảo mới nhất</h4>
	</div>
		<div class="list-left">
			<ul>
				<?php $listhoithao=$this->MKaimonokago->getListHoiThao();
					foreach($listhoithao as $item)
					{
				?>		
				<li><a style="color:#5A5A5A" href="" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/><?php echo substr($item->tieude,0,35).' ...';?></a></li>
				<?php }?>
			</ul>
		</div>
	
	<!-- ============= KHÓA HỌC ================== -->
	<div class="left-title">
		<h4>Khóa học nổi bật</h4>
	</div>
		<div class="list-left">
			<ul>
			<?php $listkhoahoc=$this->MKaimonokago->getListKhoaHoc();
					foreach($listkhoahoc as $item)
					{?>
						<li><a style="color:#5A5A5A" href="" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/><?php echo substr($item->tieude,0,35).' ...';?></a></li>
			<?php 	}
			?>
			</ul>
		</div>
		
	<!-- ============= THƯ VIỆN ================== -->
	<div class="left-title">
		<h4>Thư viện</h4>
	</div>
		<div class="list-left">
			<ul>
				<?php $listthuvien=$this->MKaimonokago->getListThuVien();
					foreach($listthuvien as $item)
					{?>
						<li><a style="color:#5A5A5A" href="" title="<?php echo $item->tenloai;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/><?php echo substr($item->tenloai,0,35);?></a></li>
				<?php 	}
				?>
				<!-- li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li -->
			</ul>
		</div>
	<div id="left-bottom"></div>
</div>