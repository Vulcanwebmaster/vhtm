<div id="content">
				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv">
				 <div id="content_left">
				 	
				 	<div id="contentlefftgv">
				 		<ul id="ul_leftgv">
				 			<li id="li_leftgv5" class="bgicongv2"><a href="<?php echo base_url();?>tintuc/mamnon">Tiếng Anh mầm non</a></li>
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
				 		
				 		<div id="contentmaingv">
				 			<div id="contenttt">
				 				<p class="ttTitle"><?php echo $list_chitiet->news_title ?></p>
				 				<div id="content2">
				 					<?php echo $list_chitiet->news_content ?><br>
				 					<br>
				 					<br><br>
				 					<br>
				 					<br><br><br><br>
				 				</div>
				 			</div>
				 		</div>
					 <!----------------------------->
					 <div id="contentbotomgv" style="">
					 	<div>
					 			<script type="text/javascript">
				        		$(document).ready(function(){		        			
				        			$('#id2, #id3, #id4, #id5, #id6,#id7').hide();	
				        			$('#vd1').addClass('iconbg');	
				        			$('#vd2, #vd3, #vd4, #vd5, #vd6, #vd7').addClass('iconbg2');        			
				        			$('#vd1').click(function(){
				        				$('#id1').show();
				        				$(this).addClass('iconbg');
				        				$(this).removeClass('iconbg2');
				        				$(this).parent().children('#vd2, #vd3, #vd4, #vd5, #vd6, #vd7').removeClass('iconbg'); 
				        				$(this).parent().children('#vd2, #vd3, #vd4, #vd5, #vd6, #vd7').addClass('iconbg2');
				        				$(this).parent().parent().children('#id2,#id3, #id4, #id5, #id6,#id7').hide();
				        				
				        			});
				        			$('#vd2').click(function(){
				        				$('#id2').show();
				        				$(this).addClass('iconbg');
				        				$(this).removeClass('iconbg2');
				        				$(this).parent().children('#vd1, #vd3, #vd4, #vd5, #vd6, #vd7').removeClass('iconbg'); 
				        				$(this).parent().children('#vd1, #vd3, #vd4, #vd5, #vd6, #vd7').addClass('iconbg2');
				        				$(this).parent().parent().children('#id1,#id3, #id4, #id5, #id6,#id7').hide();
				        			});
				        			$('#vd3').click(function(){
				        				$('#id3').show();
				        				$(this).addClass('iconbg');
				        				$(this).removeClass('iconbg2');
				        				$('#vd2, #vd1, #vd4, #vd5, #vd6, #vd7').removeClass('iconbg'); 
				        				$('#vd2, #vd1, #vd4, #vd5, #vd6, #vd7').addClass('iconbg2');
				        				$(this).parent().parent().children('#id1,#id2, #id4, #id5, #id6,#id7').hide();
				        			});
				        			$('#vd4').click(function(){
				        				$('#id4').show();
				        				$(this).addClass('iconbg');
				        				$(this).removeClass('iconbg2');
				        				$('#vd2, #vd3, #vd1, #vd5, #vd6, #vd7').removeClass('iconbg'); 
				        				$('#vd2, #vd3, #vd1, #vd5, #vd6, #vd7').addClass('iconbg2');
				        				$(this).parent().parent().children('#id1,#id3, #id2, #id5, #id6,#id7').hide();
				        			});
				        			$('#vd5').click(function(){
				        				$('#id5').show();
				        				$(this).addClass('iconbg');
				        				$(this).removeClass('iconbg2');
				        				$('#vd2, #vd3, #vd4, #vd1, #vd6, #vd7').removeClass('iconbg'); 
				        				$('#vd2, #vd3, #vd4, #vd1, #vd6, #vd7').addClass('iconbg2');
				        				$(this).parent().parent().children('#id1,#id3, #id2, #id4, #id6,#id7').hide();
				        			});
				        			$('#vd6').click(function(){
				        				$('#id6').show();
				        				$(this).removeClass('iconbg2');
				        				$(this).addClass('iconbg');
				        				$('#vd2, #vd3, #vd4, #vd5, #vd1, #vd7').removeClass('iconbg'); 
				        				$('#vd2, #vd3, #vd4, #vd5, #vd1, #vd7').addClass('iconbg2');
				        				$(this).parent().parent().children('#id1,#id3, #id2, #id5, #id4,#id7').hide();
				        			});
				        			$('#vd7').click(function(){
				        				$('#id7').show();
				        				$(this).addClass('iconbg');
				        				$(this).removeClass('iconbg2');
				        				$('#vd2, #vd3, #vd4, #vd5, #vd6, #vd1').removeClass('iconbg'); 
				        				$('#vd2, #vd3, #vd4, #vd5, #vd6, #vd1').addClass('iconbg2');
				        				$(this).parent().parent().children('#id1,#id3, #id2, #id5, #id6,#id4').hide();
				        			});
				        		});
				        		
				        	</script>
					 	<div id="share">
					 		<p>Cùng chia sẻ bài viết này:</p>
					 		<ul>
					 			<li><a href="#">
					 				
					 				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/inshare.png"></a></li>
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
					 			<li><a href="#"><script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
					 			<a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/sharr.png"></a></li>
					 			<iframe src="https://www.facebook.com/plugins/like.php?href=<?php echo base_url();?>assets/trungtam-tienganh/images/line.png"
							        scrolling="no" frameborder="0"
							        style="border:none; width:450px; height:80px"></iframe>
					 			<li><a href="#"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/send.png"></a></li>
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