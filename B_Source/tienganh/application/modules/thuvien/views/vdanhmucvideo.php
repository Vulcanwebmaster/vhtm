<div id="content">
				<!--<img src="<?php echo base_url()?>assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv"/>-->
				<?php echo $this->load->view('front/menu-trai-thuvien');?>
				<style>				
				 	#slider img{ width:663px !important; height:235px!important;}
				 </style>
				 <div id="content_right">
				 	<?php echo $this->load->view('front/slide-thuvien')?>
				 	<div id="contentgv">
				 		<div id="titlecontentgv">
				 			<p style="margin-top:-20px"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/iconvideovd.png"/></p>
				 			<p><a href="#" style="color:#1b75bb">Video khóa học</a></p>
				 			<p style="margin-top:8px"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/iconimgvd.png"/></p>
				 			<p class="bgvdimg"></p>
				 		</div>
				 		<div id="contentmainvd">
				 			<?php 
				 			$count	=	0;
				 			foreach ($list as $value)
				 			{?>
					 			<div class="bgvdcontent">
					 				<p align="center"><iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $value->link_vedio?>" frameborder="0" allowfullscreen></iframe></p>
					 				<p align="center">
					 					<a href="#" style="color:#1b75bb"><?php echo $value->vedio_title ?>
					 						<label style="color:#f6921e">(<?php echo $counting[$count];?>)</label></a>
					 				</p>
					 			</div>	
				 			<?php $count++; } ?>
					 	</div>
					 <!----------------------------->
					 <div id="contentbotomgv">
					 		<div id="share">
					 		<p>Cùng chia sẻ bài viết này:</p>
					 		<ul>
					 			<li><a href="#"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/inshare.png"/></a></li>
					 			<li><a href="#"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/twiter23.png"/></a></li>
					 			<li><a href="#"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/z.png"/></a></li>
					 			<li><a href="#"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/pinit.png"/></a></li>
					 			<li><a href="#"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/iconarrow1.png"/></a></li>
					 			<li><a href="#"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/sharethis.png"/></a></li>
					 		</ul>
					 		<div id="shareg">
					 			<img src="<?php echo base_url()?>assets/trungtam-tienganh/images/g1.png"/>
					 			<p style="padding:5px">Đề xuất này trên google</p>
					 		</div>
					 		<ul style="padding:0">
					 			<li><a href="#"><script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
					 			<a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/sharr.png"></a></li>
					 			<li><a href="#"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/line.png"/></a></li>
					 			<li><a href="#"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/send.png"/></a></li>
					 			<li style="padding-top:10px"><a href="#"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/faceicon.png"/></a></li>
					 			<li style="padding-top:7px"><a href="#">loanguyen</a> like this</li>
					 		</ul>
					 		<div id="comment">
					 		
			 					<script src=
							"http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php" 
							type="text/javascript"></script>
							
							<fb:comments></fb:comments>
							
							<script type="text/javascript">
							FB.init("YOUR_API_KEY_HERE", "<path from web root>/xd_receiver.htm");
							</script>
					 			<br clear="both"/>
					 		</div>
					 	</div>
					 	<div class="plupgin" style="margin-top:5px">
					        		<img src="<?php echo base_url()?>assets/trungtam-tienganh/images/iconface.gif"/>
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
		        		<div class="prev12"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/icon5.gif"/></div>
			        	<div id="clickslide">
			        		
			        		<div style="width:90%; overflow: hidden; height: 119px; margin:0 20px;">
			        		<div class="slideimage">
			        			<img src="<?php echo base_url()?>assets/trungtam-tienganh/images/trang-chu_152.gif"/>
			        			<img src="<?php echo base_url()?>assets/trungtam-tienganh/images/trang-chu_155.gif"/>
			        			<img src="<?php echo base_url()?>assets/trungtam-tienganh/images/trang-chu_152.gif"/>
			        			<img src="<?php echo base_url()?>assets/trungtam-tienganh/images/trang-chu_155.gif"/>
			        			<img src="<?php echo base_url()?>assets/trungtam-tienganh/images/trang-chu_152.gif"/>
			        			<img src="<?php echo base_url()?>assets/trungtam-tienganh/images/trang-chu_155.gif"/>
			        		</div>
			        		</div>
			        	</div>
			        	<div class="next12"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/icon8.gif"/></div>
			        	
		        	</div>
					 </div>
				</div>
				<!-----------end share------------>
			</div>
			</div>
			<script type="text/javascript">
				$('#libraryhd').addClass('bgli');
			</script>