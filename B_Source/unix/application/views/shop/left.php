<?php if (isset($flag_DanhMuc) && $flag_DanhMuc == 2){ ?>
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
				<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/hoithao/detail/<?php echo $item->hoithao_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/><?php
					$offset=35;
					while ($item->tieude[$offset]!=' ')
						$offset++;
					echo substr($item->tieude,0,$offset).' ...';?></a></li>
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
						<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>
							<?php 
								$offset=35;
								while ($item->tieude[$offset]!=' ')
									$offset++;
								echo substr($item->tieude,0,$offset).' ...';?>
							</a></li>
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
						<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/thuvien" title="<?php echo $item->tenloai;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>
							<?php 
							$offset=35;
							while($item->tenloai[$offset]!=' ')
								$offset++;
							echo substr($item->tenloai,0,$offset);?>
							</a></li>
				<?php 	}
				?>
				
			</ul>
		</div>
	<div id="left-bottom"></div>
</div>
<?php }
else if (isset($flag_DanhMuc) && $flag_DanhMuc == 1){ ?>
<div>
	<div id="left-top"></div>
	<!-- ============= KHÓA HỌC ================== -->
	<div class="left-title">
		<h4>Khóa học nổi bật</h4>
	</div>
		<div class="list-left">
			<ul>
			<?php $listkhoahoc=$this->MKaimonokago->getListKhoaHoc();
					foreach($listkhoahoc as $item)
					{?>
						<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/><?php echo substr($item->tieude,0,35).' ...';?></a></li>
			<?php 	}
			?>
			</ul>
		</div>
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
				<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/hoithao/detail/<?php echo $item->hoithao_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>
					<?php
					$offset=35;
					while($item->tieude[$offset]!=' ')
						$offset++;
					echo substr($item->tieude,0,$offset).' ...';?>
				</a></li>
				<?php }?>
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
						<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/thuvien" title="<?php echo $item->tenloai;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/><?php echo substr($item->tenloai,0,35);?></a></li>
				<?php 	}
				?>
				
			</ul>
		</div>
	<div id="left-bottom"></div>
</div>
<?php } 
else if (isset($flag_DanhMuc) && $flag_DanhMuc == 3){ ?>
<div>
	<div id="left-top"></div>
	<!-- ============= THƯ VIỆN ================== -->
	<div class="left-title">
		<h4>Thư viện</h4>
	</div>
		<div class="list-left">
			<ul>
				<?php $listthuvien=$this->MKaimonokago->getListThuVien();
					foreach($listthuvien as $item)
					{?>
						<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/thuvien" title="<?php echo $item->tenloai;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/><?php echo substr($item->tenloai,0,35);?></a></li>
				<?php 	}
				?>
				
			</ul>
		</div>
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
				<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/hoithao/detail/<?php echo $item->hoithao_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/><?php echo substr($item->tieude,0,35).' ...';?></a></li>
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
						<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/><?php echo substr($item->tieude,0,35).' ...';?></a></li>
			<?php 	}
			?>
			</ul>
		</div>

	<div id="left-bottom"></div>
</div>
<?php } 
else{?>
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
				<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/hoithao/detail/<?php echo $item->hoithao_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/><?php echo substr($item->tieude,0,35).' ...';?></a></li>
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
						<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/><?php echo substr($item->tieude,0,35).' ...';?></a></li>
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
						<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/thuvien/load/<?php echo $item->loaisach_id;?>" title="<?php echo $item->tenloai;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/><?php echo substr($item->tenloai,0,35);?></a></li>
				<?php 	}
				?>
				
			</ul>
		</div>
	<div id="left-bottom"></div>
</div>
<?php }?>

