<div id="content">
	<!--<img src="<?php echo base_url()?>assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv"/>-->
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
	 		<div id="titlecontentgv">
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
	 					echo substr($image_file, 3, count($image_file)-6);
	 				}?>
	 			</div>
	 			</div>
		 	</div>
		 <!----------------------------->
		 <div id="contentbotomgv">
		 		<div id="share">
					 		<p>Cùng chia sẻ bài viết này:</p>
					 		<ul>
					 			<li><a href="#">
					 				<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
									<script type="IN/Share"></script>
					 				</a></li>
					 			<li><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					 			<li><script type="text/javascript">

document.write('<div style="float:left; margin-left: 7px;"><a href="http://link.apps.zing.vn/share?u=' + location.href + '" target="_blank"><img src="http://sukienhay.com/images/icons/zing-icon.png" /></a></div>');

</script></li>
					 			<li><script type="text/javascript">

document.write('<div style="float:left; margin-left: 7px; margin-top: 3px;"><a href="http://pinterest.com/pin/create/button/?url=' + location.href + '&media=http://ted.edu.vn/__data/assets/image/0003/793164/logo.png&description=H%E1%BB%8Dc%20vi%E1%BB%87n%20doanh%20nh%C3%A2n%20TED%3A%20Ted.Edu.Vn" class="pin-it-button" count-layout="none" target="_blank" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></div>');

</script>&nbsp;</li>
					 			<li><a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconarrow1.png"></a></li>
					 			<li><div style="margin-top:3px; float:left;"><a target="_blank" title="Share this page" href="http://www.sharethis.com/share?url=http://trungtam-tienganh.edu.vn&title=Trung Tâm Tiếng Anh&summary='Chia sẻ tri thức thành công'&img=http://trungtam-tienganh.edu.vn/__data/assets/image/0003/793164/logo.png&pageInfo=%7B%22hostname%22%3A%22http://trungtam-tienganh.edu.vn%22%2C%22publisher%22%3A%22%22%7D"><img width="86" height="25" alt="Share this page" src="http://w.sharethis.com/images/share-classic.gif"></a></div>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">
    stLight.options({
        publisher: '',
        popup: 'true'
    });
</script></li>
					 		</ul>
					 		<div id="shareg">
					 			
					 			<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
								<g:plusone></g:plusone>
					 			<span class="kT XNa">Đề xuất url này trên Google</span>
					 		</div>
					 		<ul style="padding:0">
					 			
					 			<li><a href="#"><script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
					 			<a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/sharr.png"></a></li>
					 			<iframe src="https://www.facebook.com/plugins/like.php?href=<?php echo base_url();?>assets/trungtam-tienganh/images/line.png"
							        scrolling="no" frameborder="0"
							        style="border:none; width:450px; height:80px"></iframe>
					 			
					 		</ul>
					 		<div id="comment">
					 		
							<script src=
							"http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php" 
							type="text/javascript"></script>
							
							<fb:comments></fb:comments>
							
							<script type="text/javascript">
							FB.init("YOUR_API_KEY_HERE", "<path from web root>/xd_receiver.htm");
							</script>
			 					</div>	
			 							 				
					 			<br clear="both">
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
	        			<?php foreach ($list_slide1 as $slide)
									{
										 echo $slide->anh1;
										 echo $slide->anh2;
										 echo $slide->anh3;
										 echo $slide->anh4;
										 echo $slide->anh5;
									}?>
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
