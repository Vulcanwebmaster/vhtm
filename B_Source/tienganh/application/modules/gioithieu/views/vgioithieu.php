<div id="content">
				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv">
				 <div id="content_left">
				 	
				 <div id="contentlefftgv">
				 		<ul id="ul_leftgv">
				 			<li id="li_leftgv5" <?php if ($index == 0) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>gioithieu/sumenh">Sứ mệnh</a></li>
				 			<li id="li_leftgv2" <?php if ($index == 1) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>gioithieu/tamnhin">Tầm nhìn</a></li>
				 			<li id="li_leftgv3" <?php if ($index == 2) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>gioithieu/giatri">Giá trị cốt lõi</a></li>
				 			<li id="li_leftgv4" <?php if ($index == 3) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>gioithieu/vanhoa">Văn hóa công ty</a></li>
				 		</ul>
				 	</div>
				 </div>			 
				 <style>				
				 	#slider img{ width:568px !important; height:235px!important;}
				 </style>
				 <div id="content_right">
				 	<div class="slidegv">
				 		<div class="slider-wrapper theme-default">
				            <div id="slider" class="nivoSlider">
				                <!--<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide1.jpg" data-thumb="images/slide1.jpg" alt="" style="width: 663px; visibility: hidden; display: inline-block;">		                
				                <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide2.jpg" data-thumb="images/slide2.jpg" alt="" style="width: 663px; visibility: hidden; display: inline-block;">
				                <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide31.jpg" data-thumb="images/slide31.jpg" alt="" style="width: 663px; visibility: hidden; display: inline-block;">
				                <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide4.jpg" data-thumb="images/slide4.jpg" alt="" style="width: 663px; visibility: hidden; display: inline-block;">
		        				-->
		        				<?php foreach ($list_slide as $slide)
									{
										 echo $slide->anh1;
										 echo $slide->anh2;
										 echo $slide->anh3;
										 echo $slide->anh4;
									}?>
		        		</div>
				 	</div>
				 	<div id="contentgv">
				 		<div id="titlecontentgv">
				 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon11.gif"></p>
				 			<p><a href="#">Giới thiệu</a></p>
				 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png"></p>
				 			<p><?php if ($index == 0) echo 'Sứ mệnh';
				 						elseif ($index == 1) echo 'Tầm nhìn';
										elseif ($index == 2) echo 'Giá trị cốt lõi';
										elseif ($index == 3) echo 'Văn hóa công ty';
				 				?></p>
				 		</div>
				 		
				 		<div id="contentmaingv">
				 			<?php foreach ($items as $item) 
									{ ?>
				 					<?php echo $item->about_content ?>
				 					
				 		<?php } ?>		
				 		</div>
					 <!----------------------------->
				</div>
				<!-----------end share------------>
			</div>
			</div>