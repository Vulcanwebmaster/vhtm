<div id="header">
				<div class="logoheader">
					<h5 id="logo">
		
						<a href="#"><img src="<?php echo base_url();?>assets/langnghe/images/logo2.png" alt="Logo"></a>
						<span class="header1">
					Open Source VM2					</span>
					</h5>
				</div>
				<div style="float:right"><img src="<?php echo base_url();?>assets/langnghe/images/img_banner1.jpg"/></div>
				<div class="row-head">
					<div class="relative">
						<div id="topmenu">
							<div class="moduletable-nav">	
								<li>
                                     	<?php if (isset($_SESSION['front_user_fullname']))
                                     	{?>
                                     		<p style="padding:0">Xin chào <strong><?php echo $_SESSION['front_user_fullname'];?></strong> &ndash;
                                     			<a href="<?php echo base_url();?>dangnhap/logOut">Đăng Xuất</a>
                                     		</p>
                                     	<?php }
                                     	else {?>
                                     		<a class="logonLinkNoAjax" style="cursor:pointer"></a>
                                     	<?php }?> 
                                     </li> 	
								<ul class="menu">
										<li class="item-444"><a href="<?php echo base_url();?>homepage">Trang chủ</a></li>
										<li class="item-207"><a href="<?php echo base_url();?>tintuc">Tin tức</a></li>
										<li class="item-471"><a href="<?php echo base_url();?>langnghe">Làng nghề</a></li>
										<li class="item-472"><a href="<?php echo base_url();?>sanpham">Sản phẩm làng nghề</a></li>
										<li class="item-470"><a href="<?php echo base_url();?>dulich">Du lịch làng nghề</a></li>
										<li class="item-472"><a href="<?php echo base_url();?>dangnhap/registAccount">Đăng ký gian hàng</a></li>
										<li class="item-470"><a href="<?php echo base_url();?>thuvienanh">Ảnh làng nghề</a></li>
								</ul>
							</div>	
						</div>
					</div>	
				</div>			
		
			</div>