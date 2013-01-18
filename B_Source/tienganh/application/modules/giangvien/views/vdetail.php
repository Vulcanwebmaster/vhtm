<script src="<?php echo base_url();?>assets/trungtam-tienganh/js/jquery-1.2.6.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/trungtam-tienganh/js/jquery.pngFix.pack.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/trungtam-tienganh/js/jquery.fancybox-1.0.0.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/trungtam-tienganh/js/swfobject.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/trungtam-tienganh/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/trungtam-tienganh/css/fancy.css">
<div id="popup-bg"></div>

<?php	// Lấy chuỗi ký tự từ...
	function strpos_content($content)
	{
	     $start=strpos($content, 'http://youtube');
	     //var_dump($stars); die();
	     if ($start === FALSE)
	      $start=strpos($content, 'http://www.youtube');
	     
	     if ($start !== FALSE)
	      {
	          $i=$start;
	            //tang cho den khi lay dk gia tri
	             while ($content[$i] != '<' && $i<strlen($content)-1) {
	              //echo $content[$i];
	                 $i++;
	             }
	       //die();
	          return substr($content, $start,$i-$start);
	         }
	      else return FALSE;
}?>
<!-------------End---------------->
	
	<style>
		#popup-content{
			padding: 20px !important;
		}
		.submitlh{
			float: left !important;	
		}
	</style>
	
	<div id="popup">
		<div id="popup-header">Email<span id="popup-close" title="Close">x</span></div>
	    <div id="popup-content">
	    	<?php echo $this->load->view('sendmail')?>
	    </div>
	</div>
	<div id="popup1">
		<div id="popup-header">Phone<span id="popup-close1" title="Close">x</span></div>
	    <div id="popup-content">
	    	<h1><?php echo $chitiet->lecturers_phone ?></h1>
	    	<!--<h1>So dien thoai : <?php echo $items->sdt ?></h1>-->
	    </div>
	</div>
	<div id="content">
					<!--<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv">-->
					 <div id="content_left">
					 	<div id="imgleftgv"><p align="center">
				 		<?php if ($_SESSION['lang']=="vn") 
						{?>		
							Giảng viên
						<?php } else{ ?>
							Lecturer
						<?php } ?>
						</p></div>
					 	<div id="contentlefftgv">
					 		<ul id="ul_leftgv" style="padding: 50px">
					 			<?php if ($_SESSION['lang']=="vn") 
								{?>		
									<li id="li_leftgv2" class="bgicongv2"><a href="<?php echo base_url();?>giangvien/thaygiao">Thầy giáo</a></li>
						 			<li id="li_leftgv2" class="bgicongv2"><a href="<?php echo base_url();?>giangvien/cogiao">Cô giáo</a></li>
						 			<li id="li_leftgv2" class="bgicongv2"><a href="<?php echo base_url();?>giangvien/trogiang">Trợ giảng</a></li>
								<?php } else{ ?>
									<li id="li_leftgv2" class="bgicongv2"><a href="<?php echo base_url();?>giangvien/thaygiao">Male teacher</a></li>
						 			<li id="li_leftgv2" class="bgicongv2"><a href="<?php echo base_url();?>giangvien/cogiao">Felmale teacher</a></li>
						 			<li id="li_leftgv2" class="bgicongv2"><a href="<?php echo base_url();?>giangvien/trogiang">Teaching assistant</a></li>
								<?php } ?>

					 			</ul>
					 	</div>
					<!------Banner------->
				 	<?php foreach ($list_quangcao as $quangcao)
							{?>
							<div id="divAds" >
							<a target="_blank" href="<?php echo $quangcao->link1 ?>"><?php echo $quangcao->anh1 ?></a>
							</div>
					<?php 	}
					foreach ($list_quangcao as $quangcao)
							{?>
							<div id="divAds" >
							<a target="_blank" href="<?php echo $quangcao->link2 ?>"><?php echo $quangcao->anh2 ?></a>
							</div>
					<?php 	} ?>
					<!------End Banner------->
					 </div>			 
					 <style>				
					 	#featured img{ width:663px !important; height:235px!important;}
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
					 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon11.gif">
					 			<?php if ($_SESSION['lang']=="vn") 
								{?>		
									<a href="#">Giảng viên</a>
						 			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png">
						 			<a href="#"><?php echo $chitiet->lecturers_category ?></a>
								<?php } else{ ?>
									<a href="#">Lecturer</a>
						 			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png">
						 			<a href="#">
						 				<?php if( $chitiet->lecturers_category=="Trợ giảng"){echo "Teaching assistant";}
											  elseif( $chitiet->lecturers_category=="Thầy giáo"){echo "Male teacher";}
											  elseif( $chitiet->lecturers_category=="Cô giáo"){echo "Felmale teacher";}
										 ?></a>
								<?php } ?>
								</p>
					 		</div>
					 			<div id="contentmaindtgv">
							 			<p id="anhgv">
							 				<?php if ($_SESSION['lang']=="vn") 
											{?>		
												<?php echo $chitiet->lecturers_category ?>
											<?php } else{ 
										
											 } ?>
											</p>
							 			<p id="notegv">
												<?php echo $chitiet->lecturers_title ?>
											</p>	
							 			<div id="contetntitlegv">
							 				<div id="imggv"><?php echo $chitiet->lecturers_image ?></div>
							 				
							 				<div id="ltgv">
							 					<?php if ($_SESSION['lang']=="vn") 
												{?>		
													<?php $tach = $chitiet->lecturers_content; 
																echo str_replace(strpos_content($tach),"",$tach);
															 ?>
												<?php } else{ ?>
													<?php $tach = $chitiet->lecturers_contente; 
																echo str_replace(strpos_content($tach),"",$tach);
															 ?>
												<?php } ?>

							 					</div>
							 			</div><br clear="both"/>
							 			<div class="videogvdt">
							 				<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo substr($chitiet->link_vedio,31)?>" frameborder="0" allowfullscreen></iframe>
							 			</div>
							 			<div id="contentdtbottom">
							 				<div class="bottomcontentdt">
							 					<a href="#" id="show-popup1"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconcall.gif"/></a>
							 				</div>
							 				<div class="bottomcontentdt">
							 					<a href="#" id="show-popup"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconmaildt.gif"/></a>
							 				</div>
							 				
							 			</div><br clear="both" />

<!----------- Binh chon------------>
<form method="post" action="<?php echo base_url();?>giangvien/vote/<?php echo $chitiet->lecturers_id ?>">
			<script type="text/javascript">
				$(document).ready(function(){													
					var ispressed=0;  
					var value = document.getElementById("value");
					var ratingstarvalue = document.getElementById("ratingstarvalue");
					var star1 = document.getElementById("star1");
					var star2 = document.getElementById("star2");
					var star3 = document.getElementById("star3");
					var star4 = document.getElementById("star4");
					var star5 = document.getElementById("star5");

					value.innerHTML="...";

					$("#star1").mouseenter(function(){
						if (ispressed==0)
						{
							star2.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png";
							star3.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png";
							star4.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png";
							star5.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png";
							star1.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star2.png";
						}
					});
					$("#star1").mouseleave(function(){
						if (ispressed==0)
						{
							star1.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png";
							star2.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png";
							star3.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png";
							star4.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png";
							star5.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png";
						}
					});

					$("#star2").mouseenter(function(){
						$("#star1").mouseenter();
						if (ispressed==0)
							star2.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star2.png";
					});
					$("#star2").mouseleave(function(){
						$('#star1').mouseleave();
					});
					
					$("#star3").mouseenter(function(){
						$("#star2").mouseenter();
						if (ispressed==0)
							star3.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star2.png";
					});
					$("#star3").mouseleave(function(){
						$('#star2').mouseleave();
					});

					$("#star4").mouseenter(function(){
						$("#star3").mouseenter();
						if (ispressed==0)
							star4.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star2.png";
					});
					$("#star4").mouseleave(function(){
						$('#star3').mouseleave();
					});

					$("#star5").mouseenter(function(){
						$("#star4").mouseenter();
						if (ispressed==0)
							star5.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star2.png";
					});
					$("#star5").mouseleave(function(){
						$('#star4').mouseleave();
					});                                                    
					
					$("#star1").mousedown(function(){
						ispressed=1;
						star2.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png";
						star3.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png";
						star4.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png";
						star5.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png";
						star1.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star2.png";
						ratingstarvalue.value = 1;
						value.innerHTML="Not good";
					});

					$("#star2").mousedown(function(){
						$("#star1").mousedown();
						star2.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star2.png";
						ratingstarvalue.value = 2;
						value.innerHTML="Needs That Special Something";
					});

					$("#star3").mousedown(function(){
						$("#star2").mousedown();														
						star3.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star2.png";
						ratingstarvalue.value = 3;
						value.innerHTML="Average, Ordinary";
					});

					$("#star4").mousedown(function(){	
						$("#star3").mousedown();											
						star4.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star2.png";
						ratingstarvalue.value = 4;
						value.innerHTML="That's Good Stuff";
					});

					$("#star5").mousedown(function(){
						$("#star4").mousedown();
							star5.src="<?php echo base_url();?>assets/trungtam-tienganh/images/star2.png";
							ratingstarvalue.value = 5;
							value.innerHTML="Perfect. It doesn't get any better";
					});
					
				});
					
			</script>

			<img id="star1" src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png" alt="" />
			<img id="star2" src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png" alt="" />
			<img id="star3" src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png" alt="" />
			<img id="star4" src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png" alt="" />
			<img id="star5" src="<?php echo base_url();?>assets/trungtam-tienganh/images/star.png" alt="" />
			<label id="value" style=" margin-left:5px; width:50px">...</label>
			<input type="hidden" name ="ratingstarvalue" id="ratingstarvalue" value=""/> 
			
			<script type="text/javascript">
				$(document).ready(function(){
					var sm=document.getElementById('Submit');
					$('#Submit').mouseenter(function(){
						$('#Submit').css('background-image','url(<?php echo base_url();?>assets/trungtam-tienganh/images/submitbt2.png)');
						});
					$('#Submit').mouseleave(function(){
						$('#Submit').css('background-image','url(<?php echo base_url();?>assets/trungtam-tienganh/images/submitbt1.png)');
						});
					});
			</script>
			<input type="submit" value="Bình chọn" id="Submit" style="margin-left:30px"/>
</form>
<!--- End Binh chon
					 			<p id="anhgv"><?php echo $chitiet->lecturers_category ?></p>
					 			<p id="notegv"><?php echo $chitiet->lecturers_title ?></p>	
					 		
					 			<div id="contetntitlegv">
					 				<div id="imggv"><?php echo $chitiet->lecturers_image ?></div>
					 				<div id="ltgv"><?php echo $chitiet->lecturers_content ?></div>
					 			</div><br clear="both"/>
					 			<div class="videogvdt">
					 				<iframe width="560" height="315" src="http://www.youtube.com/embed/lbw6_VdVWH8" frameborder="0" allowfullscreen></iframe>
					 			</div>
					 			<div id="contentdtbottom">
					 				<div class="bottomcontentdt">
					 					<a href="#" id="show-popup1"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconcall.gif"/></a>
					 				</div>
					 				<div class="bottomcontentdt">
					 					<a href="#" id="show-popup"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconmaildt.gif"/></a>
					 				</div>
					 				<div class="bottomcontentdt1">
					 					<p>What people think about us</p>
					 					<ul>
					 						<li><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconstar.gif"/></li>
					 						<li><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconstar.gif"/></li>
					 						<li><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconstar.gif"/></li>
					 						<li><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconstar.gif"/></li>
					 						<li><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconstar.gif"/></li>
					 					</ul>
					 				</div>
					 			</div><br clear="both" />--->
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
					 			<!----------- <?php echo $chitiet->lecturers_content ?>--------------->
						 <!----------------------------->
						 <div id="contentbotomgv">
						 		<div id="share">
						 		<p><?php if ($_SESSION['lang']=="vn") 
								{?>		
									Cùng chia sẻ bài viết này:
								<?php } else{ ?>
									Share this post: 
								<?php } ?>
								</p>
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
						 			<li><iframe src="https://www.facebook.com/plugins/like.php?href=<?php echo base_url();?>assets/trungtam-tienganh/images/line.png"
								        scrolling="no" frameborder="0"
								        style="border:none; width:450px; height:80px"></iframe></li>
						 			
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
						        		<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/iconface.gif">
						        		<p style="font-size: 13px">Plugin xã hội của Facebook</p>
						        	</div>
						 	<style>
						 		.prev12{left:-10px;}
						 		#clickslide{ margin-left:20px; width:94%}
						 		.next12, .prev12{ width:3%;}
						 		.next12{right:0}
						 	/*	.slideimage img{margin:0 25px 0 -5px;}*/
						 	</style>
						 	<div class="contentbot" style="margin: 80px 0">
			        		<div class="prev12"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon5.gif"></div>
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
				        	<div class="next12"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon8.gif"></div>
				        	
			        	</div>
						 </div>
					</div>
					<!-----------end share------------>
				</div>
				</div>
				<script type="text/javascript">
					$('#teacherhd').addClass('bgli');
				</script>
				<style>
	* {
		margin:0;
		padding:0;
		font-family:Arial, Helvetica, sans-serif;
	}
	a#show-popup {
		padding:20px 0 0 20px;
		float:left;
		text-decoration:none;
		
	}
	a#show-popup1 {
		padding:20px 0 0 20px;
		float:left;
		text-decoration:none;
	}
	div#popup-bg {
		position:fixed;
		top:0;
		bottom:0;
		left:0;
		right:0;
		z-index:99;
		background:#000;
		display:none;
		opacity: 0.2;
	}
	div#popup,div#popup1 {
		width:680px;
		height:480px;
		border:solid 4px #000000;
		z-index:999;
		display:none;
		background:#FFF;
		position: absolute;
		left: 270px;
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
	span#popup-close1 {
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
<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>  -->
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
			obj.fadeIn(1000); //căn giữa popup và thêm draggable của jquery UI cho phần header của popup
			//Đóng popup khi nhấn nút
			
			$('#popup-close').click(function(){
				alert("close");
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
		$('a#show-popup1').click(function(){
			
			//Đặt biến cho các đối tượng để gọi dễ dàng
			var bg=$('div#popup-bg');
			var obj=$('div#popup1');
			var btnClose=obj.find('#popup-close1');
			//Hiện các đối tượng
			bg.animate({opacity:0.2},0).fadeIn(1000); //cho nền trong suốt
			obj.fadeIn(1000); //căn giữa popup và thêm draggable của jquery UI cho phần header của popup
			//Đóng popup khi nhấn nútalert("close");
			
			$('#popup-close1').click(function(){
				
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
	</script> 
				
