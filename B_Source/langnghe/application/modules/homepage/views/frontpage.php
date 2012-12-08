<div class="container">
		<!---------------------begin slide----------------------------->
		<div class="moduletable_slider">
			 <div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
					<img src="<?php echo base_url();?>assets/langnghe/images/slide1.jpg" data-thumb="images/slide1.jpg" alt="" />					
					<img src="<?php echo base_url();?>assets/langnghe/images/slide2.jpg" data-thumb="images/slide2.jpg" alt="" data-transition="slideInLeft" />
					<img src="<?php echo base_url();?>assets/langnghe/images/slide3.jpg" data-thumb="images/slide3.jpg" alt="" title="#htmlcaption" />
					<img src="<?php echo base_url();?>assets/langnghe/images/slide4.jpg" data-thumb="images/slide4.jpg" alt="" title="#htmlcaption" />
				</div>				
			</div>			
		</div>	
		<script type="text/javascript" src="<?php echo base_url();?>assets/langnghe/js/jquery-1.7.1.min.js"></script>
			<script type="text/javascript" src="<?php echo base_url();?>assets/langnghe/js/jquery.nivo.slider.js"></script>
			 <script type="text/javascript">
				$(window).load(function() {
					$('#slider').nivoSlider();
				});
			</script>
		<!---------------------end slide----------------------------->
		<!---------------------begin text maincontent----------------------------->
		<div class="module_new">
	
		<div class="boxIndent">
			<div class="wrapper">
				<div class="vmgroup_new">
					<div id="content_left">
						<div class="content_left1">
							<div class="title_content_left">
								<div class="title_img"><img src="<?php echo base_url();?>assets/langnghe/images/Villageg-icon.png"/></div>								
								<div class="title_img" style="color:#fff">Giới thiệu</div>
							</div>
							<div class="main_content_left">
								<div class="main_content_left1">
									<p style="font-weight:bold; padding:10px 0">Giới thiệu dự án website làng nghề</p>
									<p>
										Chúng tôi xây dựng chuyên trang về Làng nghề truyền thống Việt Nam với mong muốn góp một phần nhỏ bé giới thiệu và quảng bá các sản phẩm làng nghề truyền thống của các địa phương. Vì thấy sự cần thiết phải dùng thương mại điện tử để hỗ trợ làng nghề Việt Nam quảng bá đến bạn hàng trên mọi miền đất nước được nhanh chóng nên mong muốn sưu tầm những bài báo hay những bài viết về làng nghề, viết về các sản phẩm truyền thống làng nghề, các bài viết giới thiệu cơ sở sản xuất của làng nghề và các hình ảnh về sản phẩm làng nghề. 
									</p>
									<p class="readmoreadd"><a href="#"> Chi tiết...</a></p>
								</div>
							</div>
						</div>
						<div class="content_left2">
							
							<div class="title_content_left">
								<div class="title_img"><img src="<?php echo base_url();?>assets/langnghe/images/Villageg-icon.png"/></div>
								<div class="title_img" style="color:#fff; font-weight:bold"> Tin tức và sự kiện</div>
							</div>
							<div class="main_content_left">
								<?php foreach ($list_tintuc as $item) 
									{ ?>
								<div class="main_content_left2">
									<p class="title_news"><a href="<?php echo base_url() ?>tintuc/detail/<?php echo $item->news_id;?>">
															<?php echo $item->news_title ?>
														  </a></p>
									<div>
										<div class="leftnew2">
											<?php echo $item->news_image ?>
										</div>
										<div class="rightnew2">
											<?php echo $item->news_summary ?>
											<p class="readmoreadd"><a href="<?php echo base_url() ?>tintuc/detail/<?php echo $item->news_id;?>"> Chi tiết...</a></p>   
										</div>
									</div><br clear="both"/>
								</div>
								<?php } ?>
							</div>
						</div>
						<div class="content_left3">
							<div class="title_content_left">
								<div class="title_img"><img src="<?php echo base_url();?>assets/langnghe/images/Villageg-icon.png"/></div>
								
								<div class="title_img" style="color:#fff; font-weight:bold">Gian hàng làng nghề</div>
							</div>
							<div class="main_content_left">
								<?php  foreach ($items as $item) 
									{ ?>
								<div class="img_shop">
									<img src="<?php echo base_url();?><?php echo $item->image;?>" />
									<p class="title_img_shop"><a href="<?php echo base_url();?>langnghe/detail/<?php echo $item->village_id;?>"><?php echo $item->village_name;?></a></p>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<div id="content_right">
						<div><a href="http://vietnamtravelco.com"><img src="<?php echo base_url();?>assets/langnghe/images/da-my-nghe-ninh-binh.gif"/></a></div>
						<div><a href="http://ninhvanninhbinh.com"><img src="<?php echo base_url();?>assets/langnghe/images/lang-nghe-da-ninh-van.gif"/></a></div>
						<div><a href="http://langnghe.com"><img src="<?php echo base_url();?>assets/langnghe/images/thietkewebsite.gif"/></a></div>
						<div><a href="http://sapatour.com"><img src="<?php echo base_url();?>assets/langnghe/images/trong-hoang-gia.jpg"/></a></div>
						<div><a href="http://ninhvanninhbinh.com"><img src="<?php echo base_url();?>assets/langnghe/images/logo-trongdung.gif"/></a></div>
						<div><a href="http://vietnamtravelco.com"><img src="<?php echo base_url();?>assets/langnghe/images/da-my-nghe-ninh-binh.gif"/></a></div>
						<div><a href="http://vietnamtravelco.com"><img src="<?php echo base_url();?>assets/langnghe/images/lang-nghe-da-ninh-van.gif"/></a></div>
						<div><a href="http://vietnamtravelco.com"><img src="<?php echo base_url();?>assets/langnghe/images/thietkewebsite.gif"/></a></div>
						<div id="doitac">
							<h3 style="text-align:center; padding:0"><span><span>Đối tác tài trợ</span></span></h3>
							
							<div id="content_doitac">
								<p><a herf="http://vietnamtravelco.com">Vietnamtravelco.com- Công ty du lịch Việt Nam</a></p>
								<p><a href="http://ninhvanninhbinh.com">Ninhvanninhbinh.com - Làng nghề Ninh vân Ninh Bình</a></p>
								<p><a href="http://langnghe.com">Langnghe.org.vn  - Trang web làng nghề</a></p>
								<p><a href="http://sapatour.com">Sapatour.net - Cty du lịch</a></p>
								<p><a href="http://vietnamtravelco.com">Đá mỹ nghệ Ninh Vân - Ninh Bình</a></p>
							</div>
							
						</div>						
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!---------------------end text maincontent----------------------------->
</div>