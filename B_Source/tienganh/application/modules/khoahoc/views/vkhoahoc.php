<div id="content">
				
				<div id="content_left">
					<div id="imgleftgv"><p align="center">
						<?php if ($_SESSION['lang']=="vn") 
						{?>		
							Khóa học
						<?php } else{ ?>
							Course
						<?php } ?>

						</p></div>
				 	<div id="contentlefftgv">
				 		<ul id="ul_leftgv">
				 			<!-- <?php foreach ($category as $value) 
				 			{ ?>
				 				<li id="li_leftgv4"><a href="<?php echo base_url()?>khoahoc/category/<?php echo $value->id?>"><?php echo $value->cate_name?></a></li>
				 			<?php } ?> -->
				 			<?php foreach ($list_courses_cate as $value) 
				 			{ ?>
				 				<li id="li_leftgv4">
				 					<a href="<?php echo base_url()?>khoahoc/category/<?php echo $value->id."-".$value->alias?>">
				 						<?php
				 						if(isset($_SESSION['lang'])){
				 							if ($_SESSION['lang']=="vn") 
											{	
												 echo $value->cate_name;
											 } else{ 
												 echo $value->cate_namee;
											 }
				 						}?>
				 					</a>
				 				</li>
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
				 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon11.gif"></p>
				 			<p><a href="<?php echo base_url();?>khoahoc">
				 				<?php if ($_SESSION['lang']=="vn") 
								{?>		
									Khóa học
								<?php } else{ ?>
									Course
								<?php } ?>

				 				</a></p>
				 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png"></p>
				 			<p><?php if(isset($breadcrum1)){
					 			 if ($_SESSION['lang']=="vn") 
								 {	
									echo $breadcrum1->cate_name; 
								 } else{ 
									echo $breadcrum1->cate_namee; 
								 } 
							
				 			 }  ?></p>
				 			<!-- <p><a href="<?php echo base_url();?>khoahoc">
				 				<?php if ($index == 1) echo 'Thầy giáo';
				 						elseif ($index == 2) echo 'Cô giáo';
										elseif ($index == 0) echo 'Trợ giảng';
				 				?>
				 			</a></p> -->
				 		</div>
				 	
			        	<div id="contentmaingv">
			        	<?php foreach ($items as $item) 
							{ ?>
			        	<div class="ctgv" style="height: 95px">				 			
			 					<div class="img_main2" style="width: 23% ">
		        				<p style="height: 79px; font-family: times new roman "><?php $date1 = explode("-", $item->courses_date); echo $date1[2]."/".$date1[1]."</br><h style='font-size: 17px'>".$date1[0] ?></h></p>
		        				</div>
			 					<div class="divgv2" style="width: 70%; margin-left: 12px ">
			 						<p class="tittlegv"><a href="<?php echo base_url();?>khoahoc/detail/<?php echo $item->courses_id."-".$item->alias;?>">
			 							<?php if ($_SESSION['lang']=="vn") 
										{?>		
											<?php echo word_limiter(strip_tags($item->courses_name), 6)?>
										<?php } else{ ?>
											<?php echo word_limiter(strip_tags($item->courses_namee), 6)?>
										<?php } ?>
			 							</a></p>
			 						<p>(<?php echo $item->courses_date ?>)</p>
			 						<p><i>
			 							<?php if ($_SESSION['lang']=="vn") 
										{?>		
											<?php echo word_limiter(strip_tags($item->courses_content), 15)?> 
										<?php } else{ ?>
											<?php echo word_limiter(strip_tags($item->courses_contente), 15)?> 
										<?php } ?>

			 							</i></p>
			 						<p class="reamororgv"><a href="<?php echo base_url();?>khoahoc/detail/<?php echo $item->courses_id."-".$item->alias;?>">
			 							<?php if ($_SESSION['lang']=="vn") 
										{?>		
											Tìm hiểu thêm
										<?php } else{ ?>
											Read more..
										<?php } ?>
			 							</a></p>
			 					</div>
				 		</div>	
			        	<?php } ?>
			        	<div><?php echo $this->pagination->create_links();?></div>
			        	</div> 
			        	<!--------------End khóa học---------------->
				</div>
				<!-----------end share------------>
			</div>
			</div>
<script type="text/javascript">
				$('#coursehd').addClass('bgli');
			</script>