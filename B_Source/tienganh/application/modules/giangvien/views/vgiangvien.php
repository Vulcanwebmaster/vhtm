<div id="content">
				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv">
				 <div id="content_left">
				 	
				 	<div id="contentlefftgv">
				 		<ul id="ul_leftgv">
				 			<li id="li_leftgv2" class="bgicongv2"><a href="<?php echo base_url();?>giangvien/thaygiao">Thầy giáo</a></li>
				 			<li id="li_leftgv2" class="bgicongv2"><a href="<?php echo base_url();?>giangvien/cogiao">Cô giáo</a></li>
				 			<li id="li_leftgv2" class="bgicongv2"><a href="<?php echo base_url();?>giangvien/trogiang">Trợ giảng</a></li>
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
				 			<p><a href="<?php echo base_url();?>giangvien/thaygiao">Thầy giáo</a></p>
				 			
				 		</div>
				 		<div id="contentmaingv">
				 			<?php foreach ($items as $item) 
									{ ?>
				 			<div class="ctgv">	
				 							 			
			 					<div class="divgv"><?php $item->lecturers_image ?></div>
			 					<div class="divgv2">
			 						<p class="tittlegv"><a href="<?php echo base_url() ?>giangvien/detail/<?php echo $item->lecturers_id;?>"><?php echo $item->lecturers_title ?></a></p>
			 						<p><i><?php echo $item->lecturers_content ?></i></p>
			 						<p class="reamororgv"><a href="<?php echo base_url() ?>giangvien/detail/<?php echo $item->lecturers_id;?>">Chi tiết</a></p>
			 					</div>
				 			</div>	<?php } ?>		
					 </div>
					 <!----------------------------->
					 <div id="contentbotomgv">
					 		<div id="share">
					 		<p>Cùng chia sẻ bài viết này:</p>
					 		<ul>
					 			<li><a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/inshare.png"></a></li>
					 			<li><a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/twiter23.png"></a></li>
					 			<li><a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/z.png"></a></li>
					 			<li><a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/pinit.png"></a></li>
					 			<li><a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconarrow1.png"></a></li>
					 			<li><a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/sharethis.png"></a></li>
					 		</ul>
					 		<div id="shareg">
					 			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/g1.png">
					 			<p style="padding:5px">Đề xuất này trên google</p>
					 		</div>
					 		<ul style="padding:0">
					 			<li><a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/sharr.png"></a></li>
					 			<li><a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/line.png"></a></li>
					 			<li><a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/send.png"></a></li>
					 			<li style="padding-top:10px"><a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/faceicon.png"></a></li>
					 			<li style="padding-top:7px"><a href="#">loanguyen</a> like this</li>
					 			
					 		</ul>
					 		<div id="comment">
					 		
			 					<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/pr anh.png">
			 					<div class="formcm">
			 						<form>
			 							<textarea></textarea><br>
			 							<div class="submit">Posting as Biết ơn cuộc sống (Not now)?<input type="submit" value="Comment"></div>
			 							<div class="check"><input type="checkbox">Post to facebook</div>
			 						</form>
			 					</div>	
			 							 				
					 			<br clear="both">
					 		</div>
					 		
					 	</div>
					 	<div class="plupgin" style="margin-top:5px">
					        		<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconface.gif">
					        		<p style="font-size: 13px">Plugin xã hội của Facebook</p>
					        	</div>
					 	<style>
					 		.prev12{left:-10px;}
					 		#clickslide{ margin-left:20px; width:94%}
					 		.next12, .prev12{ width:3%;}
					 		.next12{right:0}
					 		.slideimage img{margin:0 25px 0 -5px;}
					 	</style>
					 	<div class="contentbot" style="margin: 80px 0">
		        		<div class="prev12"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon5.gif"></div>
			        	<div id="clickslide">
			        		
			        		<div style="width:90%; overflow: hidden; height: 119px; margin:0 20px;">
			        		<div class="slideimage">
			        			
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_152.gif">
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_155.gif">
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_152.gif">
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_155.gif">
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_152.gif">
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_155.gif">
			        		</div>
			        		</div>
			        	</div>
			        	<div class="next12"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon8.gif"></div>
			        	
		        	</div>
					 </div>
				</div>
				<!-----------end share------------>
			</div>
			</div>