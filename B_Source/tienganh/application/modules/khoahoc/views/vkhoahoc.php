<div id="content">
				
				<div id="content_left">
					<div id="imgleftgv"><p align="center">Thư viện</p></div>
				 	<div id="contentlefftgv">
				 		<ul id="ul_leftgv">
				 			<?php foreach ($category as $value) 
				 			{ ?>
				 				<li id="li_leftgv4"><a href="<?php echo base_url()?>khoahoc/category/<?php echo $value->id?>"><?php echo $value->cate_name?></a></li>
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
				 			<!--<p><?php if ($index == 0) echo 'Tiếng Anh mầm non';
				 						elseif ($index == 1) echo 'Tiếng Anh tiểu học';
										elseif ($index == 2) echo 'Tiếng Anh cho sinh viên';
										elseif ($index == 3) echo 'Tiếng Anh cho người đi làm';
				 				?></p>-->
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
			        	<!--------------begin khóa học---------------->
			        	<div id="contentmaingv">
			        	<?php foreach ($items as $item) 
							{ ?>
			        	<div class="ctgv">				 			
			 					<!--<div class="divgv"><?php echo $item->lecturers_image ?></div>--->
			 					<div class="img_main2" style="width: 23% ">
		        				<p><?php echo $item->courses_date ?></p>
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