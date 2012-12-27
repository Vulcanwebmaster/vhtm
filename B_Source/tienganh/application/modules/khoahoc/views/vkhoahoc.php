<div id="content">
				
				<div id="content_left">
					<div id="imgleftgv"><p align="center">Thư viện</p></div>
				 	<div id="contentlefftgv">
				 		<ul id="ul_leftgv">
				 			<!-- <?php foreach ($category as $value) 
				 			{ ?>
				 				<li id="li_leftgv4"><a href="<?php echo base_url()?>khoahoc/category/<?php echo $value->id?>"><?php echo $value->cate_name?></a></li>
				 			<?php } ?> -->
				 			<?php foreach ($list_courses_cate as $value) 
				 			{ ?>
				 				<li id="li_leftgv4">
				 					<a href="<?php echo base_url()?>khoahoc/category/<?php echo $value->id?>"><?php echo $value->cate_name?>
				 						
				 					</a>
				 				</li>
				 			<?php } ?>
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
				 			<p><a href="<?php echo base_url();?>khoahoc">Khóa học</a></p>
				 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png"></p>
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
			        	<div class="ctgv">				 			
			 					
			 					<div class="img_main2" style="width: 23% ">
		        				<p><?php $date1 = explode("-", $item->courses_date); echo $date1[2]."-".$date1[1]."</br>".$date1[0] ?></p>
		        				</div>
			 					<div class="divgv2" style="width: 72% ">
			 						<p class="tittlegv"><?php echo $item->courses_name ?></p>
			 						<p>(<?php echo $item->courses_date ?>)</p>
			 						<p><i><?php echo word_limiter(strip_tags($item->courses_content), 15)?> </i></p>
			 						<p class="reamororgv"><a href="<?php echo base_url();?>khoahoc/detail/<?php echo $item->courses_id."-".$item->alias;?>">Chi tiết</a></p>
			 					</div >
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