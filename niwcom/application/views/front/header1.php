	
		
<div class="wrapper" id="wrapper_head">
            <div class="center">
                <div id="head">
                    <h2 style="background-image: url(&#39;http://niw.com.vn/assets/niw/images/logo150px.png&#39;); background-repeat: no-repeat;
                        top: 0px; left: 0px; width: 157px; height: 79px;">
                    </h2>
                    <!-- Navigation for Pages starts here -->
                    <ul id="menu-main" class="nav">
                        <li id="menu-item-111" <?php if ($index == 1) echo 'class="current-menu-item"';?>>
                            <a class="menu_item_2" href="<?php echo base_url();?>">
                            	<?php if ($_SESSION['lang']=="vn") 
								{?>		
									Trang chủ	
								<?php } else{ ?>
									Homepage
								<?php } ?>
                            </a>
                        </li>
                            <li id="menu-item-119" <?php if ($index == 2) echo 'class="current-menu-item"';?>>
                            <a class="menu_item_2" href="<?php echo base_url();?>gioithieu">
                                <?php if ($_SESSION['lang']=="vn") 
								{?>		
									Giới thiệu	
								<?php } else{ ?>
									About us
								<?php } ?>                                </a> </li>
                        <li id="menu-item-116" <?php if ($index == 3) echo 'class="current-menu-item"';?>>
                            <a class="menu_item_2" href="<?php echo base_url();?>dichvu">
                            	<?php if ($_SESSION['lang']=="vn") 
								{?>		
									Dịch vụ
								<?php } else{ ?>
									Services
								<?php } ?>   
                            </a> </li>
                        <li id="menu-item-117" <?php if ($index == 4) echo 'class="current-menu-item"';?>>
                            <a class="menu_item_2" href="<?php echo base_url();?>sanpham">
                                <?php if ($_SESSION['lang']=="vn") 
								{?>		
									Sản phẩm	
								<?php } else{ ?>
									Products
								<?php } ?>                            </a></li>
                        <li id="menu-item-118" <?php if ($index == 5) echo 'class="current-menu-item"';?>>
                            <a class="menu_item_2" href="<?php echo base_url();?>lienhe">
                                <?php if ($_SESSION['lang']=="vn") 
								{?>		
									Liên hệ 	
								<?php } else{ ?>
									Contact us
								<?php } ?>                           </a></li>
                        <li id="menu-item-120" <?php if ($index == 6) echo 'class="current-menu-item"';?>>
                            <a class="menu_item_2" href="<?php echo base_url();?>tintuc">
                                <?php if ($_SESSION['lang']=="vn") 
								{?>		
									Tin tức	
								<?php } else{ ?>
									News
								<?php } ?>                            </a></li>
                        <li><a href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>" id="english" style="border-style:none;width:auto; padding:10px 0 0 0; margin-right:3px">
                        	<img src="<?php echo base_url();?>assets/niwcom/images/english.gif" alt="" class="menu_item_2">
                        </a></li>
                        <li><a href="<?php echo base_url();?>changelang/change/vn/<?php echo $this->uri->uri_string();?>" id="vietnamese" style="border-style:none;width:auto; padding:10px 0 0 0">
                        	<img src="<?php echo base_url();?>assets/niwcom/images/vietnam.jpg" alt="" class="menu_item_2">
                        </a></li>
                    </ul>
                    
                </div><!--end head-->
                
            </div><!-- end center-->
           
        </div>	 <!--end wrapper-->