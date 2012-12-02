<?php
	$newModel=new CI_Model();
?>

	  
<!-- BEGIN .main-content-wrapper -->
<div class="main-content-wrapper">
	<!-- BEGIN .main-content -->
	<div class="main-content">
		

		<div class="sidebar">
			<!-- BEGIN .latest-activity -->
			<div class="events sidebar-item">			
					
					<!-- BEGIN .content -->
					<div class="content">
						<div class="main-title">
							<span><b>Hyundai</b></span>
						</div>						
						<?php foreach ($relates as $item): ?>
						<!-- BEGIN .item -->
						<div class="item">
							<h5><a href="<?php echo base_url() ?>sanpham/page1/<?php echo $item->category_id.$item->id.$item->index ?>"><?php echo $item->hangsx;?></a></h5>
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
			
  
