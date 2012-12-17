<div id="content">
				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv">
				 <div id="content_left">
				 	
				 	<div id="contentlefftgv">
				 		<ul id="ul_leftgv">
				 			<li id="li_leftgv2" <?php if ($index == 1) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>giangvien/thaygiao">Thầy giáo</a></li>
				 			<li id="li_leftgv2" <?php if ($index == 2) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>giangvien/cogiao">Cô giáo</a></li>
				 			<li id="li_leftgv2" <?php if ($index == 0) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>giangvien/trogiang">Trợ giảng</a></li>
				 		</ul>
				 	</div>
				 </div>			 
				 <style>				
				 	#slider img{ width:663px !important; height:235px!important;}
				 </style>
				 <div id="content_right">
				 	<div class="slidegv">
				 		<div class="slider-wrapper theme-default">
				            <div id="slider" class="nivoSlider">
				                <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide1.jpg" data-thumb="images/slide1.jpg" alt="" style="width: 663px; visibility: hidden; display: inline-block;">		                
				                <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide2.jpg" data-thumb="images/slide2.jpg" alt="" style="width: 663px; visibility: hidden; display: inline-block;">
				                <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide31.jpg" data-thumb="images/slide31.jpg" alt="" style="width: 663px; visibility: hidden; display: inline-block;">
				                <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide4.jpg" data-thumb="images/slide4.jpg" alt="" style="width: 663px; visibility: hidden; display: inline-block;">
				           		           
		        		</div>
				 	</div>
				 	<div id="contentgv">
				 		<div id="titlecontentgv">
				 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon11.gif"></p>
				 			<p><a href="<?php echo base_url() ?>">Giảng viên</a></p>
				 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png"></p>
				 			<p><a href="<?php echo base_url();?>giangvien/thaygiao">
				 				<?php if ($index == 1) echo 'Thầy giáo';
				 						elseif ($index == 2) echo 'Cô giáo';
										elseif ($index == 0) echo 'Trợ giảng';
				 				?>
				 				
				 			</a></p>
				 			
				 		</div>
					 						<!--------------begin Tin tức---------------->
			        	<div class="textmaincontent1">
			        		<?php foreach ($items as $item) 
							{ ?>
			        		<div class="idmain">
			        			<div class="img_main1">
			        				<!--<?php echo $item->lecturers_image ?>-->
			        			</div>
			        			<div class="text_main">
			        				<p class="title"><?php echo $item->lecturers_title ?></p>
			        				<p><?php echo word_limiter(strip_tags($item->lecturers_content), 40)?> 
									</br><a href="<?php echo base_url();?>giangvien/detail/<?php echo $item->lecturers_id;?>">
										Xem thêm <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png"/></a></p>
									
			        			</div>
			        		</div>
			        		<?php } ?>
			        		<div><?php echo $this->pagination->create_links();?></div>
			        	</div>
			        	
			        	<!--------------End begin Tin tức---------------->
					 <!----------------------------->
				</div>
				<!-----------end share------------>
			</div>
			</div>