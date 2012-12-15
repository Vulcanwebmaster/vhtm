<div id="fb-root"></div>
<script>

//------ like facebook button -------------
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>

<div id="content">
				<img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv"/>
				 <?php echo $this->load->view('front/menu-trai-thuvien');?>			 
				 <style>				
				 	#slider img{ width:663px !important; height:235px!important;}
				 </style>
				 <div id="content_right">
				 	<?php echo $this->load->view('front/slide-thuvien')?>
				 	<div id="contentgv">
				 		<div id="titlecontentgv">
				 			<p style="margin-top:-20px"><img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/iconimg.png"/></p>
				 			<p><a style="color:#1b75bb"><?php if ($category_id == '0')
				 															echo 'Hình ảnh trung tâm';
				 														elseif ($category_id == '1')
				 															echo 'Hình ảnh khóa học';
				 														elseif ($category_id == '2')
				 															echo 'Hình ảnh sự kiện';?></a></p>
				 			<p style="margin-top:8px"><img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/iconimgvd.png"/></p>
				 			<p class="bgvdimgimg"></p>
				 		</div>
				 		<div id="contentmainvd">
				 			<?php 
				 			$count	=	0;
				 			foreach ($list as $item)
				 			{?>
				 				<div class="bgvdcontentimg">
					 				<!-- p align="center"><img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/trang-thu-vien-anh_10.png"/></p -->
					 				<a href="<?php echo base_url()?>thuvien/album/<?php echo $item->album_id?>"><?php echo $item->album_avatar?></a>
					 				<p align="center">
					 					<a href="#" style="color:#1b75bb"><?php echo $item->album_name?>
					 						<label style="color:#f6921e">(<?php echo $counting[$count];?>)</label>
					 					</a>
					 				</p>
					 			</div>
				 			<?php $count++; }?>
					 	</div>
					 <!----------------------------->
					 <div id="contentbotomgv">
					 		<div id="share">
					 		<p>Cùng chia sẻ bài viết này:</p>
					 		<ul>
					 			<li><a href="#"><img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/inshare.png"/></a></li>
					 			<li><a href="#"><img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/twiter23.png"/></a></li>
					 			<li><a href="#"><img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/z.png"/></a></li>
					 			<li><a href="#"><img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/pinit.png"/></a></li>
					 			<li><a href="#"><img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/iconarrow1.png"/></a></li>
					 			<li><a href="#"><img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/sharethis.png"/></a></li>
					 		</ul>
					 		<div id="shareg">
					 			<img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/g1.png"/>
					 			<p style="padding:5px">Đề xuất này trên google</p>
					 		</div>
					 		<ul style="padding:0">
					 			<li>
								</li>
					 			<li>
					 				<div class="fb-like" data-href="http://localhost/tienganh/thuvien/category/0" data-send="true" data-layout="button_count" data-width="450" data-height="90" data-show-faces="true">
					 				</div>
					 			</li>
					 			
					 		</ul>
					 		<div id="comment">
					 		
			 					<img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/pr anh.png"/>
			 					<div class="formcm">
			 						<form>
			 							<textarea ></textarea><br/>
			 							<div class="submit">Posting as Biết ơn cuộc sống (Not now)?<input type="submit" value="Comment" /></div>
			 							<div class="check"><input type="checkbox" />Post to facebook</div>
			 						</form>
			 					</div>	
			 							 				
					 			<br clear="both"/>
					 		</div>
					 		
					 	</div>
					 	<div class="plupgin" style="margin-top:5px">
					        		<img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/iconface.gif"/>
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
		        		<div class="prev12"><img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/icon5.gif"/></div>
			        	<div id="clickslide">
			        		
			        		<div style="width:90%; overflow: hidden; height: 119px; margin:0 20px;">
			        		<div class="slideimage">
			        			
			        			<img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/trang-chu_152.gif"/>
			        			<img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/trang-chu_155.gif"/>
			        			<img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/trang-chu_152.gif"/>
			        			<img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/trang-chu_155.gif"/>
			        			<img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/trang-chu_152.gif"/>
			        			<img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/trang-chu_155.gif"/>
			        		</div>
			        		</div>
			        		
			        		
			        	</div>
			        	<div class="next12"><img src="<?php echo base_url();?>/assets/trungtam-tienganh/images/icon8.gif"/></div>
			        	
		        	</div>
					 </div>
				</div>
				<!-----------end share------------>
			</div>
			</div>