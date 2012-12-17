<div id="content">
	<img src="<?php echo base_url()?>assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv"/>
	 <?php echo $this->load->view('front/menu-trai-thuvien')?>		 
	 <style>				
	 	#slider img{ width:663px !important; height:235px!important;}
	 </style>
		 <div id="content_right">
		 	<?php echo $this->load->view('front/slide-thuvien')?>
	 		<script type="text/javascript">
        		$(document).ready(function(){		        			
        			$(".prev121").click(function(){
            			$marginLeft = $(".slideimgimg").css("left");
            			if (parseInt($marginLeft)<0)
				  			$(".slideimgimg").animate({"left": "+=443px"}, "slow");
					});
					
					$(".next121").click(function(){
						// get list all of images
            			var listImages	=	$(".slideimgimg").children("img");

            			// compute width follow above list
            			var totalWidth	=	443 * listImages.length;

            			var marginLeft =	$(".slideimgimg").css("left");
            			if (marginLeft != 'auto') marginLeft	=	parseInt(marginLeft);
            			if (-marginLeft < totalWidth || marginLeft=='auto')
					  		$(".slideimgimg").animate({"left": "-=443px"}, "slow");
					});
					$('#zoom').click(function(){
						$('.slideimgimg img').addClass('zoomimg');
						$('#divzomm').addClass('zoomdiv');
					});
					$('.slideimgimg img').click(function(){
						$('.slideimgimg img').removeClass('zoomimg');
						$('#divzomm').removeClass('zoomdiv');
					});
        		});
				</script>
	 	<div id="contentgv">
	 		<div id="titlecontentgv"style="overflow: hidden;">
	 			<p style="margin-top:-20px"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/iconimg.png"/></p>
	 			<p><a href="#" style="color:#1b75bb">Khóa học 1 <label style="color:#f6921e">(10)</label></a></p>
	 			<p style="margin-top:8px"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/iconimgvd.png"/></p>
	 			<p class="bgvdimgimg"></p>
	 		</div>
	 		<div id="contentmainvd" style="overflow: hidden">
	 			<div id="titledtimg">
	 				<div id="contetntitledtimg">
	 					<div class="ctdtimg next121"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/iconnext.png"/></div>
	 					<div class="ctdtimg prev121"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/iconpr.png"/></div>
	 					<div class="ctdtimg"><p>chuyển ảnh</p></div>				 					
	 					<div class="ctdtimg" id="zoom"><a href="#"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/zoom.png"/></a></div>
	 					<div class="ctdtimg"><a href="#"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/icondown.png"/></a></div>
	 				</div>
	 			</div>
	 			<div style="overflow: hidden; width:443px; margin:0 auto; height:357px; position:relative" id="divzomm">
	 			<div class="slideimgimg" style="width:1400px; position:absolute">
	 				<?php foreach ($list as $image)
	 				{
	 					$image_file	=	$image->image_file;
	 					echo substr($image_file, 3, count($image_file)-7);
	 				}?>
	 			</div>
	 			</div>
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
		 			<li><a href="#"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/sharr.png"/></a></li>
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