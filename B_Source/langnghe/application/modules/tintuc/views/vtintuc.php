
	<!----------------begin -main content------------------------>
	<div class="container">
		<div class="title_content_left2">
			<div class="title_img"><img src="<?php echo base_url();?>assets/langnghe/images/ln_34.jpg"/></div>
			<div class="title_img" style="font-weight:bold; color:#fff;">Trang chủ </div>
			<div class="title_img" style=" color:#fff; ">>> </div>
			<div class="title_img" style="color:#fff; "> Tin tức</div>
		</div>
		<?php foreach ($list_tintuc as $item) 
			{ ?>
		<div class="main_content_left2">
			<p class="title_news"><a href="<?php echo base_url() ?>tintuc/detail/">
									<?php echo $item->news_title ?>
								  </a></p>
			<div>
				<div class="leftnew2">
					<?php echo $item->news_image ?>
				</div>
				<div class="rightnew2">
					<?php echo $item->news_summary ?>
					<p class="readmoreadd"><a href="<?php echo base_url() ?>tintuc/detail/"> Chi tiết...</a></p>   
				</div>
			</div><br clear="both"/>
		</div>
		<?php } ?>
	</div>
	
