	<!----------------begin -main content------------------------>
	<div class="container">
		<div class="title_content_left2">
			<div class="title_img"><img src="<?php echo base_url();?>assets/langnghe/images/ln_34.jpg"/></div>
			<div class="title_img" style="font-weight:bold; color:#fff;">Trang chủ </div>
			<div class="title_img" style=" color:#fff; "> </div>
			<div class="title_img" style="color:#fff; "> Sản phẩm</div>
		</div>
		
		<div class="main_content_left2">
			<p class="title_news"><a href="<?php echo base_url() ?>langnghe/detail/">
									<?php echo $village_detail->village_name; ?>
								  </a></p>
			<div>
					<?php echo $village_detail->image; ?>
					<?php echo $village_detail->village_description; ?>
					<br>
					
			</div><br clear="both"/>
		</div>
		
	</div>