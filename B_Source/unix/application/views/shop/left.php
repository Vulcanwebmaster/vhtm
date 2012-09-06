<?php
	$hoithao=$this->MKaimonokago->getListDanhMucOld(0);
	$khoahoc=$this->MKaimonokago->getListDanhMucOld(1);
	$thuvien=$this->MKaimonokago->getListDanhMucOld(2);

	$this->load->helper('text');
	if (isset($flag_DanhMuc) && $flag_DanhMuc == 2){ 
	?>
<div>
	<!--<!--<div id="left-top"></div>--></div>-->
	<!-- ============= HỘI THẢO ================== -->
	<div class="left-title">
		<h4><?php echo $hoithao->ten;?></h4>
	</div>
		<div class="list-left">
			<ul>
				<?php $listhoithao=$this->MKaimonokago->getListHoiThao();
								
					foreach($listhoithao as $item)
					{
				?>		
				<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/hoithao/detail/<?php echo $item->hoithao_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>
					<?php
						$string=$item->tieude;
						echo word_limiter($string,10);
					?>
				</a></li>
				<?php }?>
			</ul>
		</div>
	
	<!-- ============= KHÓA HỌC ================== -->
	<div class="left-title">
		<h4><?php echo $khoahoc->ten;?></h4>
	</div>
		<div class="list-left">
			<ul>
			<?php $listkhoahoc=$this->MKaimonokago->getListKhoaHoc();
					foreach($listkhoahoc as $item)
					{?>
						<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>
							<?php
								$string=$item->tieude;
								echo word_limiter($string,10);
							?>
							</a></li>
			<?php 	}
			?>
			</ul>
		</div>
		
	<!-- ============= THƯ VIỆN ================== -->
	<div class="left-title">
		<h4><?php echo $thuvien->ten;?></h4>
	</div>
		<div class="list-left">
			<ul>
				<?php $listthuvien=$this->MKaimonokago->getListThuVien();
					foreach($listthuvien as $item)
					{?>
						<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/thuvien/load/<?php echo $item->loaisach_id;?>" title="<?php echo $item->tenloai;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>
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
		
	

<?php }
else if (isset($flag_DanhMuc) && $flag_DanhMuc == 1){ ?>
<div>
	<!--<div id="left-top"></div>--></div>
	<!-- ============= KHÓA HỌC ================== -->
	<div class="left-title">
		<h4><?php echo $khoahoc->ten;?></h4>
	</div>
		<div class="list-left">
			<ul>
			<?php $listkhoahoc=$this->MKaimonokago->getListKhoaHoc();
					foreach($listkhoahoc as $item)
					{?>
						<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>
							<?php
								$string=$item->tieude;
								echo word_limiter($string,10);
							?>
							</a></li>
			<?php 	}
			?>
			</ul>
		</div>
	<!-- ============= HỘI THẢO ================== -->
	<div class="left-title">
		<h4><?php echo $hoithao->ten;?></h4>
	</div>
		<div class="list-left">
			<ul>
				<?php $listhoithao=$this->MKaimonokago->getListHoiThao();
					foreach($listhoithao as $item)
					{
				?>		
				<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/hoithao/detail/<?php echo $item->hoithao_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>
					<?php
						$string=$item->tieude;
						echo word_limiter($string,10);
					?>
				</a></li>
				<?php }?>
			</ul>
		</div>
		
	<!-- ============= THƯ VIỆN ================== -->
	<div class="left-title">
		<h4><?php echo $thuvien->ten; ?></h4>
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
			
	

<?php } 
else if (isset($flag_DanhMuc) && $flag_DanhMuc == 3){ ?>
<div>
	<!--<div id="left-top"></div>--></div>
	<!-- ============= THƯ VIỆN ================== -->
	<div class="left-title">
		<h4><?php echo $thuvien->ten;?></h4>
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
	<!-- ============= HỘI THẢO ================== -->
	<div class="left-title">
		<h4><?php echo $hoithao->ten;?></h4>
	</div>
		<div class="list-left">
			<ul>
				<?php $listhoithao=$this->MKaimonokago->getListHoiThao();
					foreach($listhoithao as $item)
					{
				?>		
				<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/hoithao/detail/<?php echo $item->hoithao_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>
					<?php
						$string=$item->tieude;
						echo word_limiter($string,10);
					?>
					</a></li>
				<?php }?>
			</ul>
		</div>	
	<!-- ============= KHÓA HỌC ================== -->
	<div class="left-title">
		<h4><?php echo $khoahoc->ten;?></h4>
	</div>
		<div class="list-left">
			<ul>
			<?php $listkhoahoc=$this->MKaimonokago->getListKhoaHoc();
					foreach($listkhoahoc as $item)
					{?>
						<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>
							<?php
								$string=$item->tieude;
								echo word_limiter($string,10);
							?>
							</a></li>
			<?php 	}
			?>
			</ul>
		</div>
			
	

<?php } 
else{?>
<div>
	<!--<div id="left-top"></div>--></div>
	<!-- ============= HỘI THẢO ================== -->
	<div class="left-title">
		<h4><?php echo $hoithao->ten;?></h4>
	</div>
		<div class="list-left">
			<ul>
				<?php $listhoithao=$this->MKaimonokago->getListHoiThao();
					foreach($listhoithao as $item)
					{
				?>		
				<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/hoithao/detail/<?php echo $item->hoithao_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>
					<?php
						$string=$item->tieude;
						echo word_limiter($string,10);
					?>
				</a></li>
				<?php }?>
			</ul>
		</div>
	
	<!-- ============= KHÓA HỌC ================== -->
	<div class="left-title">
		<h4><?php echo $khoahoc->ten;?></h4>
	</div>
		<div class="list-left">
			<ul>
			<?php $listkhoahoc=$this->MKaimonokago->getListKhoaHoc();
					foreach($listkhoahoc as $item)
					{?>
						<li><a style="color:#5A5A5A" href="<?php echo base_url();?>index.php/khoahoc/detail/<?php echo $item->khoahoc_id;?>" title="<?php echo $item->tieude;?>"><img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>
							<?php
								$string=$item->tieude;
								echo word_limiter($string,10);
							?>
							</a></li>
			<?php 	}
			?>
			</ul>
		</div>
		
	<!-- ============= THƯ VIỆN ================== -->
	<div class="left-title">
		<h4><?php echo $thuvien->ten;?></h4>
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
		
	
<?php }?>

<!--List danh muc moi-->

<?php 
	$listdanhmuc=$this->MKaimonokago->getListDanhMucNew();
	foreach($listdanhmuc as $danhmuc)
	{
		if($danhmuc->ten!="")
		{
?>
		<div class="left-title">
		<h4><?php echo $danhmuc->ten; ?></h4>
		</div>
		<div class="list-left">
			<ul>
				<?php
					$listchuyenmuc=$this->MKaimonokago->getListChuyenMuc($danhmuc->ten);
					foreach($listchuyenmuc as $chuyenmuc)
					{
				?>
				<li>
					<img alt="" src="<?php echo base_url();?>assets/unix/images/arrow.png" width="9px" style="margin-right:10px"/>
					<a style="color:#5A5A5A" href="<?php echo base_url()?>index.php/danhmuc/page/<?php echo $chuyenmuc->id; ?>"><?php echo $chuyenmuc->ten; ?></a>
				</li>
				<?php
					}
				?>
			</ul>
		</div>
<?php
		}
	}
?>
<div id="left-bottom"></div> 

