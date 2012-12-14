<div id="content">
				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv">
				 <div id="content_left">
				 	
				 	<div id="contentlefftgv">
				 		<ul id="ul_leftgv">
				 			<li id="li_leftgv1" class="bgicongv"><a href="<?php echo base_url();?>tintuc/mamnon">Tiếng Anh mầm non</a></li>
				 			<li id="li_leftgv2" class="bgicongv2"><a href="<?php echo base_url();?>tintuc/tieuhoc">Tiếng Anh tiểu học</a></li>
				 			<li id="li_leftgv3" class="bgicongv2"><a href="<?php echo base_url();?>tintuc/sinhvien">Tiếng Anh cho sinh viên</a></li>
				 			<li id="li_leftgv4" class="bgicongv2"><a href="<?php echo base_url();?>tintuc/dilam">Tiếng Anh cho người đi làm</a></li>
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
				 			<p><a href="<?php echo base_url();?>tintuc">Tin tức</a></p>
				 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png"></p>
				 		</div>
				 		
				 		
					<!--------------begin Tin tức---------------->
			        		
								<!--<li style="width:100%; float:left; border:1px solid #ddd; padding:5px 5px; margin:5px 0px;">
									<?php 
										//$preg = preg_match_all('#<img.*>#',$item->news_image,$match);
										//echo $match[0][0]; 
										$image = $item->news_image;
										
									?>
						            <div class="aboutth-item" style="float:left; width:76%; height: 86px;">
						            	<h3><a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->news_id;?>"><?php echo $item->news_title ?></a></h3>
						            </div>
						  	</li>--->
						  						<!--------------begin Tin tức---------------->
			        	<div class="textmaincontent">
			        		<?php foreach ($items as $item) 
							{ ?>
			        		<div class="idmain">
			        			<div class="img_main">
			        				<?php echo $item->news_image ?>
			        			</div>
			        			<div class="text_main">
			        				<p class="title"><?php echo $item->news_title ?></p>
			        				<p><?php echo $item->news_content ?> 
									<a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->news_id;?>">
										Tìm hiểu thêm về sự kiện này <img src="images/icon19.png"/></a></p>
									
			        			</div>
			        		</div>
			        		<?php } ?>
			        	</div>
			        	<!--------------End begin Tin tức---------------->
			        		
			        	<!--------------End begin Tin tức---------------->
				</div>
				<!-----------end share------------>
			</div>
			</div>
