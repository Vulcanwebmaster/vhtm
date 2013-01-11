<div id="content">
				<!--<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/leffgv.png" id="imgleftgv">-->
				 <div id="content_left">
				 	<div id="imgleftgv"><p align="center">Giới thiệu</p></div>
				 <div id="contentlefftgv">
				 		<ul id="ul_leftgv">
				 			<li id="li_leftgv5" <?php if ($index == 0) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>gioithieu/sumenh">Sứ mệnh</a></li>
				 			<li id="li_leftgv2" <?php if ($index == 1) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>gioithieu/tamnhin">Tầm nhìn</a></li>
				 			<li id="li_leftgv3" <?php if ($index == 2) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>gioithieu/giatri">Giá trị cốt lõi</a></li>
				 			<li id="li_leftgv4" <?php if ($index == 3) echo 'class="bgicongv"'; else echo 'class="bgicongv2"';?>><a href="<?php echo base_url();?>gioithieu/vanhoa">Văn hóa công ty</a></li>
				 		</ul>
				 	</div>
				 </div>			 
				 <style>				
				 	#featured img{ width:663px !important; height:235px!important;}
				 </style>
				 <div id="content_right">
				 	<div class="slidegv">
				 		<div class="slider-wrapper theme-default">
				            <div id="featured">	
				            	<?php foreach ($list_slide as $slide)
									{
										
												$preg = preg_match_all('#<img.*/>#',$slide->anh1,$match);
												echo $match[0][0];
												$preg = preg_match_all('#<img.*/>#',$slide->anh2,$match);
												echo $match[0][0];
												$preg = preg_match_all('#<img.*/>#',$slide->anh3,$match);
												echo $match[0][0];
												$preg = preg_match_all('#<img.*/>#',$slide->anh4,$match);
												echo $match[0][0];
											
									}?>
		        		</div>
				 	</div>
				 	<div id="contentgv">
				 		<div id="titlecontentgv">
				 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon11.gif"></p>
				 			<p><a href="#">Giới thiệu</a></p>
				 			<p><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png"></p>
				 			<p style="font-weight: normal" ><?php if ($index == 0) echo 'Sứ mệnh';
				 						elseif ($index == 1) echo 'Tầm nhìn';
										elseif ($index == 2) echo 'Giá trị cốt lõi';
										elseif ($index == 3) echo 'Văn hóa công ty';
				 				?></p>
				 		</div>
				 		
				 		<div id="contentmaingv">
				 			<?php foreach ($items as $item) 
									{ ?>
				 					<?php echo $item->about_content ?>
				 					
				 		<?php } ?>		
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
						 		.slideimage img{margin:0 25px 0 -5px;}
						 	</style>
						 </div>
				</div>
				<!-----------end share------------>
			</div>
			</div>
			<script type="text/javascript">
				$('#aboutushd').addClass('bgli');
			</script>