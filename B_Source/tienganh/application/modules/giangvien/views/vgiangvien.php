<div id="content">
				<!--<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv">-->
				 <div id="content_left">
				 	<div id="imgleftgv"><p align="center">
				 		<?php if ($_SESSION['lang']=="vn") 
						{?>		
							Giảng viên
						<?php } else{ ?>
							Lecturer
						<?php } ?>
						</p></div>
				 	<div id="contentlefftgv">
				 		<ul id="ul_leftgv">
				 			<?php if ($_SESSION['lang']=="vn") 
							{?>		
								<li id="li_leftgv2" <?php if ($index == 1) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>giangvien/thaygiao">Thầy giáo</a></li>
					 			<li id="li_leftgv2" <?php if ($index == 2) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>giangvien/cogiao">Cô giáo</a></li>
					 			<li id="li_leftgv2" <?php if ($index == 0) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>giangvien/trogiang">Trợ giảng</a></li>
							<?php } else{ ?>
								<li id="li_leftgv2" <?php if ($index == 1) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>giangvien/thaygiao">Male teacher</a></li>
					 			<li id="li_leftgv2" <?php if ($index == 2) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>giangvien/cogiao">Felmale teacher</a></li>
					 			<li id="li_leftgv2" <?php if ($index == 0) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>giangvien/trogiang">Teaching assistant</a></li>
							<?php } ?>

				 			</ul>
				 	</div>
				 	<!------Banner------->
				 	<?php foreach ($list_quangcao as $quangcao)
							{?>
							<div id="divAds" >
							<a target="_blank" href="<?php echo $quangcao->link1 ?>"><?php echo $quangcao->anh1 ?></a>
							</div>
					<?php 	}
					foreach ($list_quangcao as $quangcao)
							{?>
							<div id="divAds" >
							<a target="_blank" href="<?php echo $quangcao->link2 ?>"><?php echo $quangcao->anh2 ?></a>
							</div>
					<?php 	} ?>
					<!------End Banner------->
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
				 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon11.gif">
				 			<a href="<?php echo base_url() ?>">
				 				<?php if ($_SESSION['lang']=="vn") 
								{?>		
									Giảng viên
								<?php } else{ ?>
									Lecturer
								<?php } ?>
								</a>
				 			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png">
				 			<?php if ($_SESSION['lang']=="vn") 
							{?>		
								<a href="<?php echo base_url();?>giangvien/thaygiao">
				 				<?php if ($index == 1) echo 'Thầy giáo';
				 						elseif ($index == 2) echo 'Cô giáo';
										elseif ($index == 0) echo 'Trợ giảng';
				 				?>
				 				</a>
							<?php } else{ ?>
								<a href="<?php echo base_url();?>giangvien/thaygiao">
				 				<?php if ($index == 1) echo 'Male teacher';
				 						elseif ($index == 2) echo 'Felmale teacher';
										elseif ($index == 0) echo 'Teaching assistant';
				 				?>
				 				</a>
							<?php } ?>

				 			</p>
				 		</div>
					 	<!--------------begin Tin tức---------------->
			        	<!-----<div class="textmaincontent1">
			        		<?php foreach ($items as $item) 
							{ ?>
			        		<div class="idmain">
			        			<div class="img_main1">
			        				<?php echo $item->lecturers_image ?>
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
			        	</div>--->
			        	<div id="contentmaingv">
			        	<?php foreach ($items as $item) 
							{ ?>
			        	<div class="ctgv">				 			
			 					<div class="divgv"><?php echo $item->lecturers_image ?></div>
			 					<div class="divgv2">
			 						<p class="tittlegv">
			 							<a href="<?php echo base_url();?>giangvien/detail/<?php echo $item->lecturers_id."-".$item->alias;?>">
			 							<?php 
											 echo $item->lecturers_title ;
										 ?>
										</a></p>
			 						<p><i><?php if ($_SESSION['lang']=="vn") 
											{
											 echo word_limiter(strip_tags($item->lecturers_content), 10);
											 } else{ 
												 echo word_limiter(strip_tags($item->lecturers_contente), 10);
											 } ?>
											 </i></p>
			 						<p class="reamororgv"><a href="<?php echo base_url();?>giangvien/detail/<?php echo $item->lecturers_id."-".$item->alias;?>">
			 							<?php if ($_SESSION['lang']=="vn") 
										{?>		
											Chi tiết
										<?php } else{ ?>
											Read more..
										<?php } ?>
										</a></p>
			 					</div >
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
			<script type="text/javascript">
				$('#teacherhd').addClass('bgli');
			</script>