<script src="<?php echo base_url();?>assets/trungtam-tienganh/js/jquery-1.2.6.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/trungtam-tienganh/js/jquery.pngFix.pack.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/trungtam-tienganh/js/jquery.fancybox-1.0.0.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/trungtam-tienganh/js/swfobject.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/trungtam-tienganh/css/fancy.css">
<div id="popup-bg"></div>
	<style>
		#popup-content{
			padding: 20px !important;
		}
		.submitlh{
			float: left !important;	
		}
	</style>
	
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
				 			<p><a href="#" style="color:#1b75bb">
				 				<?php if ($_SESSION['lang']=="vn") 
								{?>		
									Video khóa học
								<?php } else{ ?>
									Video Course
								<?php } ?>
								</a></p>
				 			<p style="margin-top:8px"><img src="<?php echo base_url()?>assets/trungtam-tienganh/images/iconimgvd.png"/></p>
				 			<p class="bgvdimg"></p>
				 		</div>
				 		<div id="contentmainvd">
				 			<?php 
				 			$count	=	0;
				 			foreach ($list as $value)
				 			{?>
					 			<div class="bgvdcontent">
					 				<ul style="list-style-type: none; margin:0; padding:0">
					 					<li>
						 					<a rel="fancyvideo" href="<?php echo $value->link_vedio?>">
												<img src="http://img.youtube.com/vi/<?php echo substr($value->link_vedio,31)?>/3.jpg" style="margin:3px 17px">
				                            <p align="center">
				                            	<?php if ($_SESSION['lang']=="vn") 
												 {		
													 echo $value->vedio_title;
												 } else{ 
													echo $value->vedio_titlee ;
												 } ?>
				                            	</p>
				                        	</a>
			                        	</li>
					 				</ul>
					 			</div>	
				 			<?php $count++; } ?>
					 	</div>
					 	
					 <script type="text/javascript">
					        $(document).ready(function() {
					            $("a[@rel*=fancyvideo]").fancybox({
					                overlayShow: true,
					                frameWidth:640,
					                frameHeight:360
					            });
					        });
					</script>
					 <!----------------------------->
					 <div id="contentbotomgv">
					 		<div id="share">
					 			<?php if ($_SESSION['lang']=="vn") 
								{?>		
									<p>Cùng chia sẻ bài viết này:</p>
								<?php } else{ ?>
									<p>Share this post:</p>
								<?php } ?>
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
					 			<span class="kT XNa">
					 				<?php if ($_SESSION['lang']=="vn") 
									{?>		
										Đề xuất url này trên Google
									<?php } else{ ?>
										Proposed this url on Google
									<?php } ?>
									</span>
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
					        		<p style="font-size: 13px">
					        			<?php if ($_SESSION['lang']=="vn") 
										{?>		
											Plugin xã hội của Facebook
										<?php } else{ ?>
											Plugin Facebook
										<?php } ?>
										</p>
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
			
	<style>
	
	a#show-popup {
		margin:5px 0 0 20px;
		float:left;
		text-decoration:none;
	}
	a#show-popup img{ width:114px; height:85px;}
	a#show-popup1 {
		margin:20px 0 0 20px;
		float:left;
		text-decoration:none;
	}
	div#popup-bg {
		position:absolute;
		top:0;
		bottom:0;
		left:0;
		right:0;
		z-index:99;
		background:#000;
		display:none;
	}
	div#popup {
		width:680px;
		height:480px;
		border:solid 4px #000000;
		z-index:999;
		display:none;
		background:#FFF;
	}
	div#popup-header {
		position:relative;
		float:left;
		width:680px;
		line-height:30px;
		font-size:20px;
		background:#000;
		color:#FF0;
		cursor:move;
	}
	span#popup-close {
		cursor:pointer;
		color:#FFF;
		font-size:12px;
		position:absolute;
		top:-2px;
		right:10px;
		z-index:9999;
	}
	div#popup-content {
		width:670px;
		float:left;
		padding:5px;
	}
	</style>
	
	<!-- <script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
	<script language="javascript">
	$(document).ready(function(){
		(function($){
			//Căn giữa phần tử thuộc tính là absolute so với phần hiển thị của trình duyệt, chỉ dùng cho phần tử absolute đối với body
			$.fn.absoluteCenter = function(){
				this.each(function(){
					var top = -($(this).outerHeight() / 2)+'px';
					var left = -($(this).outerWidth() / 2)+'px';
					$(this).css({'position':'absolute', 'position':'fixed', 'margin-top':top, 'margin-left':left, 'top':'50%', 'left':'50%'});
					return this;
				});
			}
		})(jQuery);
		
		$('a#show-popup').click(function(){
			//Đặt biến cho các đối tượng để gọi dễ dàng
			var bg=$('div#popup-bg');
			var obj=$('div#popup');
			var btnClose=obj.find('#popup-close');
			//Hiện các đối tượng
			bg.animate({opacity:0.2},0).fadeIn(1000); //cho nền trong suốt
			obj.fadeIn(1000).draggable({cursor:'move',handle:'#popup-header'}).absoluteCenter(); //căn giữa popup và thêm draggable của jquery UI cho phần header của popup
			//Đóng popup khi nhấn nút
			btnClose.click(function(){
				bg.fadeOut(1000);
				obj.fadeOut(1000);
			});
			//Đóng popup khi nhấn background
			bg.click(function(){
				btnClose.click(); //Kế thừa nút đóng ở trên
			});
			//Đóng popup khi nhấn nút Esc trên bàn phím
			$(document).keydown(function(e){
				if(e.keyCode==27){
					btnClose.click(); //Kế thừa nút đóng ở trên
				}
			});
			return false;
		});
	});
	</script> -->
				