<?php
	$newModel=new CI_Model();
?>

	  
<!-- BEGIN .main-content-wrapper -->
<div class="main-content-wrapper">
	<!-- BEGIN .main-content -->
	<div class="main-content">
		<!-- BEGIN .left-side -->
		<div class="left-side">
			
			<!-- BEGIN .main-title -->
			<div class="main-title">
				<span><b>Chi tiết</b></span>
				<a href="#">Trở về trang chủ</a>
			</div>
			<!-- END .main-title -->
			
			<!-- BEGIN .post -->
			<div class="post">
				<h3><a href="#"><?php echo  $product->namev ?></a></h3>
				<div class="date">
				</div>
				<?php echo $product->image ?>
				<br>
				<?php echo $product->mota ?>
				<br>
				<div class="post-menu-card">
					<div class="specification">
						<h3>Specification</h3>
						<div>
							<span class="price"><?php echo $product->price ?> VND</span>
							<ul>
								<li>Tên Sản Phẩm: <b><?php echo $product->namev ?></b></li>
								<li>Hãng sản xuất: <b><?php echo $product->hangsx ?></b></li>
								<li>Mẫu: <b></b></li>
							</ul>
						</div>
						<div class="bottom">&nbsp;</div>
					</div>
				</div>																				
			</div>			
						
		</div>
		<!-- END .left-side -->
		
		<!-- BEGIN .sidebar -->
		<div class="sidebar">
			<!-- BEGIN .latest-activity -->
			<div class="events sidebar-item">			
					
					<!-- BEGIN .content -->
					<div class="content">
						<div class="main-title">
							<span><b>Sản phẩm liên quan</b></span>
						</div>						
						<?php foreach ($relates as $item): ?>
						<!-- BEGIN .item -->
						<div class="item">
							<h5><a href="<?php echo base_url() ?>sanpham/chitiet/<?php echo $item->id."-".$item->alias ?>"><?php echo $item->namev;?></a></h5>
						<!-- END .item -->
						</div>						
						<?php endforeach ?>					

						
					</div>
				<!-- END .content -->
				</div>
			<!-- END .latest-activity -->
			</div>									
			</div>			
		</div>		
	</div>
	<!-- END .main-content -->
</div>
			
  
