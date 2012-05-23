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
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/><?php echo substr($item->TieuDe,0,35).' ...';?></li>
				<?php }?>
			</ul>
		</div>
	
	<!-- ============= KHÓA HỌC ================== -->
	<div class="left-title">
		<h4>Khóa học nổi bật</h4>
	</div>
		<div class="list-left">
			<ul>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
			</ul>
		</div>
		
	<!-- ============= THƯ VIỆN ================== -->
	<div class="left-title">
		<h4>Thư viện</h4>
	</div>
		<div class="list-left">
			<ul>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
				<li><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>Nguyễn Tiến Mạnh</li>
			</ul>
		</div>
	<div id="left-bottom"></div>
</div>