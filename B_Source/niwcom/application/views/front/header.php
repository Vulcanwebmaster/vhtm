        <style type="text/css" media="screen">
         	#slider p, #slider img{ width: 980px !important; height: 445px !important; }
          
        </style>
        
        <!-- wrapper -->
        <div id="container">
            <!-- 100% Bakcground Image -->
            <div class="background_holder">
            </div>
            <!-- / 100% Bakcground Image -->
            <!-- Top Bar -->
            <div id="top_bar">
                <div class="top_content">
                    <!-- Search -->
                    <div class="search_bar">
                    	<!------------Google Search---------->
						<form action="http://www.google.com/search" method="get" target="_blank" class="showtextback">
							<input type="text" class="search_text" value="<?php if ($_SESSION['lang']=="vn") {?>Nhập từ khóa<?php } else{ ?>Search<?php } ?>" name="query" size="10" id="searchfield" title="tìm kiếm" onfocus="clearText(this)" onblur="clearText(this)" />
							<input type="image" src="<?php echo base_url();?>assets/niwcom/images/pixel.gif" class="searchsubmit" alt="" />
<!-- 							<input style="opacity: 1; position: absolute; top: 0; right: 0; height: 53px; cursor: pointer;" type="submit" value="Tìm kiếm" onclick="this.form.keyword.focus();" class="submitsearch" style="padding-left: 14px;"/> -->
							<input value="http://niw.com.vn/" name="sitesearch" style="opacity: 0">
						</form>
						<!---------End Google Search---------->
                    </div>
                    <!-- / Search-->
                    <!-- Top Links -->
                    <ul class="top_links ">
                        <li class="first">
                            <a href="<?php echo base_url();?>" title=""><?php if ($_SESSION['lang']=="vn") 
								{?>		
									Trang chủ	
								<?php } else{ ?>
									Homepage
								<?php } ?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>gioi-thieu" title=""><?php if ($_SESSION['lang']=="vn") 
								{?>		
									Giới thiệu	
								<?php } else{ ?>
									About us
								<?php } ?>   </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>lien-he" title=""> <?php if ($_SESSION['lang']=="vn") 
								{?>		
									Liên hệ 	
								<?php } else{ ?>
									Contact us
								<?php } ?>   </a>
                        </li>
                    </ul>
                    <!-- / Top Links -->
                    <!-- / flags -->
                    <ul class="flags">
                        <li>
                            <a title="Viet Nam" class="j_ttip" href="<?php echo base_url();?>changelang/change/vn/<?php echo $this->uri->uri_string();?>" >
                            	<img src="<?php echo base_url();?>assets/niwcom/images/vietnam.jpg" height="12" alt="de" width="18" />
                            </a>
                        </li>
                        <li>
                        	<a title="English" class="j_ttip" href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>">
                            <img src="<?php echo base_url();?>assets/niwcom/images/assets/flags/en.png" height="12" alt="en" width="18" />
                            </a>
                        </li>
                    </ul>
                    <!-- / flags -->
                </div>
            </div>
            <!-- / Top Bar -->
            <!-- wrapper 2 -->
            <div id="wrapper">
                <!-- Header -->
                <div id="header">
                    <!-- logo -->
                    <div id="logo">
                        <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/niwcom/images/logo150px.png" alt="RT-Theme 13" class="png" /></a>
                    </div>
                    <!-- /logo -->
                    <!-- header slogan -->
                    <div class="top_slogan">
                       <?php if ($_SESSION['lang']=="vn") 
						{?>		
							Điện thoại: (+84) 85898964
						<?php } else{ ?>
							Phone: (+84) 85898964
						<?php } ?>   
                    </div>
                    <!-- /header slogan -->
                    <div class="clear">
                    </div>
                </div>
                <!-- / Header -->
                <!-- Navigation -->
                <div id="navigation">
                    <ul>
                    	<?php if ($_SESSION['lang']=="vn") 
						{?>		
						<li <?php if(isset($index)) if ($index == 1) echo 'class="current_page_item"'; ?>>
                            <a href="<?php echo base_url();?>">Trang chủ</a>
                            <span>Trang chủ NIW</span>
                        </li>
                        <li <?php if(isset($index)) if ($index == 2) echo 'class="current_page_item"'; ?>>
                            <a href="<?php echo base_url();?>gioi-thieu">Giới thiệu</a>
                            <span>Vài nét chính về NIW</span>
                        </li>
                        <li <?php if(isset($index)) if ($index == 3) echo 'class="current_page_item"'; ?>>
                            <a href="<?php echo base_url();?>dich-vu">Dịch vụ</a>
                            <span>Các dịch vụ của NIW</span>
                        </li>
                        <li <?php if(isset($index)) if ($index == 4) echo 'class="current_page_item"'; ?>>
                            <a href="<?php echo base_url();?>sanpham">Sản phẩm</a>
                            <span>Các sản phẩm của NIW</span>
                        </li>
                        <li <?php if(isset($index)) if ($index == 5) echo 'class="current_page_item"'; ?>>
                            <a href="<?php echo base_url();?>lien-he">Liên hệ</a>
                            <span>Thông tin liên hệ NIW</span>
                        </li>
                        <li <?php if(isset($index)) if ($index == 6) echo 'class="current_page_item"'; ?>>
                            <a href="<?php echo base_url();?>tintuc">Tin tức</a>
                            <span>Tin tức - công nghệ</span>
                        </li>
						<?php } else{ ?>
						<li <?php if(isset($index)) if ($index == 1) echo 'class="current_page_item"'; ?>>
                            <a href="<?php echo base_url();?>">Home</a>
                            <span>Home NIW</span>
                        </li>
                        <li <?php if(isset($index)) if ($index == 2) echo 'class="current_page_item"'; ?>>
                            <a href="<?php echo base_url();?>gioi-thieu">About us</a>
                            <span>Some key features of the NIW</span>
                        </li>
                        <li <?php if(isset($index)) if ($index == 3) echo 'class="current_page_item"'; ?>>
                            <a href="<?php echo base_url();?>dich-vu">Services</a>
                            <span>The services of NIW</span>
                        </li>
                        <li <?php if(isset($index)) if ($index == 4) echo 'class="current_page_item"'; ?>>
                            <a href="<?php echo base_url();?>sanpham">Products</a>
                            <span>The products of NIW</span>
                        </li>
                        <li <?php if(isset($index)) if ($index == 5) echo 'class="current_page_item"'; ?>>
                            <a href="<?php echo base_url();?>lien-he">Contact us</a>
                            <span>Contact information NIW</span>
                        </li>
                        <li <?php if(isset($index)) if ($index == 6) echo 'class="current_page_item"'; ?>>
                            <a href="<?php echo base_url();?>tintuc">News</a>
                            <span>News - Technology</span>
                        </li>	
						<?php } ?>
                        
                        
                    </ul>
                </div>
                <!-- / Navigation -->
                <?php if(isset($show_slide)==1){ ?>
                <div class="nivo" id="slider_area">
                <!-- Slider Nivo-->
		            <div id="slider" class="nivoSlider">
		            	 <!-- slide 1 background image -->
                           	<?php echo $list_slide->anh1 ?>
                           	<?php echo $list_slide->anh2 ?>
                           	<?php echo $list_slide->anh3 ?>
                           	<?php echo $list_slide->anh4 ?>
                           	<?php echo $list_slide->anh5 ?>
		            </div>
		            <div id="htmlcaption" class="nivo-html-caption">
		                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
		            </div>
                <!-- / Slider Nivo-->
                </div>
                <?php } ?>