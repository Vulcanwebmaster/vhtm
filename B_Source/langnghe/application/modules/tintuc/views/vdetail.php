	<!----------------begin -main content------------------------>
	<div class="container">
		<div class="title_content_left2">
			<div class="title_img"><img src="<?php echo base_url();?>assets/langnghe/images/ln_34.jpg"/></div>
			<div class="title_img" style="font-weight:bold; color:#fff;">Trang chủ </div>
			<div class="title_img" style=" color:#fff; ">>> </div>
			<div class="title_img" style="color:#fff; "> Tin tức</div>
		</div>
		
		<div class="main_content_left2">
			<p class="title_news"><a href="<?php echo base_url() ?>tintuc/detail/">
									<?php echo $news->news_title ?>
								  </a></p>
			<div>
					<?php echo $news->news_image ?>
					<?php echo $news->news_content ?><br>
					<p align="right">Tác giả: <?php echo $news->news_author ?></p>
					<p align="right">Ngày đăng: <?php echo $news->news_post_date ?></p>
			</div><br clear="both"/>
		</div>
		
	</div>