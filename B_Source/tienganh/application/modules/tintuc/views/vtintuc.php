<div id="content">
				
				 <div id="content_left">
				 	<!--<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv">-->
				 	<div id="imgleftgv"><p align="center">Tin tức</p></div>
				 	<div id="contentlefftgv">
				 		<ul id="ul_leftgv">
				 			<li id="li_leftgv5" <?php if ($index == 0) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>tintuc/mamnon">Tiếng Anh mầm non</a></li>
				 			<li id="li_leftgv2" <?php if ($index == 1) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>tintuc/tieuhoc">Tiếng Anh tiểu học</a></li>
				 			<li id="li_leftgv3" <?php if ($index == 2) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>tintuc/sinhvien">Tiếng Anh cho sinh viên</a></li>
				 			<li id="li_leftgv4" <?php if ($index == 3) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>tintuc/dilam">Tiếng Anh cho người đi làm</a></li>
				 		</ul>
				 	</div>
				 </div>			 
				 <style>				
				 	#featured img{ width:663px !important; height:235px!important;}
				 </style>
				 <div id="content_right">
				 	<div class="slidegv">
				 		<div class="slider-wrapper theme-default">
				           <div id="featured">	
			            	<?php foreach ($list_slide as $slide)
								{
									
											$preg = preg_match_all('#<img.*/>#',$slide->anh1,$match);
											echo $match[0][0];
											$preg = preg_match_all('#<img.*/>#',$slide->anh2,$match);
											echo $match[0][0];
											$preg = preg_match_all('#<img.*/>#',$slide->anh3,$match);
											echo $match[0][0];
											$preg = preg_match_all('#<img.*/>#',$slide->anh4,$match);
											echo $match[0][0];
										
								}?>
		        		</div>
				 	</div>
				 	<div id="contentgv">
				 		<div id="titlecontentgv">
				 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon11.gif"></p>
				 			<p><a href="<?php echo base_url();?>tintuc">Tin tức</a></p>
				 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png"></p>
				 			<p style="font-weight: normal"><?php if ($index == 0) echo 'Tiếng Anh mầm non';
				 						elseif ($index == 1) echo 'Tiếng Anh tiểu học';
										elseif ($index == 2) echo 'Tiếng Anh cho sinh viên';
										elseif ($index == 3) echo 'Tiếng Anh cho người đi làm';
				 				?></p>
				 		</div>
				 		
			        	<!------<div class="textmaincontent1">
			        		<?php foreach ($items as $item) 
							{ ?>
			        		<div class="idmain">
			        			<div class="img_main1">
			        				<?php echo $item->news_image ?>
			        			</div>
			        			<div class="text_main">
			        				<p class="title"><?php echo $item->news_title ?></p>
			        				<p><?php echo word_limiter(strip_tags($item->news_content), 40)?> 
									</br><a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->news_id;?>">
										Xem thêm <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png"/></a></p>
			        			</div>
			        		</div>
			        		<?php } ?>
			        		<div><?php echo $this->pagination->create_links();?></div>
			        	</div>------------>
			        	<div id="contentmaingv">
			        	<?php foreach ($items as $item) 
							{ ?>
			        	<div class="ctgv">				 			
			 					<div class="divgv"><?php echo $item->news_image ?></div>
			 					<div class="divgv2">
			 						<p class="tittlegv"><a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->news_id."-".$item->alias;?>">
			 							<?php echo word_limiter(strip_tags($item->news_title), 6) ?></a></p>
			 						<p><i><?php echo $item->news_post_date ?></i></p>
			 						<p><i><?php echo word_limiter(strip_tags($item->news_content), 8)?> </i></p>
			 						<p class="reamororgv"><a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->news_id."-".$item->alias;?>">
			 							Chi tiết</a>
			 						</p>
			 					</div >
				 			</div>	
			        	<?php } ?>
			        	<div><?php echo $this->pagination->create_links();?></div>
			        	</div>
			        	<!--------------End begin Tin tức---------------->
				</div>
				<!-----------end share------------>
			</div>
			</div>
<script type="text/javascript">
				$('#newshd').addClass('bgli');
			</script>