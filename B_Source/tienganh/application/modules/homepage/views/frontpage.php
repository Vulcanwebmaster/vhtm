<?php $newmodel=new CI_Model();?>
	<?php if (validation_errors())
	{
		echo '<div class="error-panel">';
		//echo validation_errors('<p style="color:#f83d43">','</p>');
		echo '</div>';
	}?>

				<style>
					#slider img{ width:960px; height:354px !important;}
					#divAdRight img{ width: 150px !important; height: 250px !important }
					#divAdLeft img{ width: 150px !important; height: 250px !important }
				</style>
				
<!-------------Slide chạy dọc 2 bên--------------->
<?php foreach ($list_quangcao as $quangcao)
		{?>
		<div id="divAdRight" style="display: block; position: fixed; top: 0px;">
		<a target="_blank" href="<?php echo $quangcao->link1 ?>"><?php echo $quangcao->anh1 ?></a>
		</div>
<?php 	}
foreach ($list_quangcao as $quangcao)
		{?>
		<div id="divAdLeft" style="display: block; position: fixed; top: 0px;">
		<a target="_blank" href="<?php echo $quangcao->link2 ?>"><?php echo $quangcao->anh2 ?></a>
		</div>
<?php 	} ?>
<script>
    function FloatTopDiv()
    {
        startLX = ((document.body.clientWidth -MainContentW)/2)-LeftBannerW-LeftAdjust , startLY = TopAdjust+80;
        startRX = ((document.body.clientWidth -MainContentW)/2)+MainContentW+RightAdjust , startRY = TopAdjust+80;
        var d = document;
        function ml(id)
        {
            var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
            el.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
            el.x = startRX;
            el.y = startRY;
            return el;
        }
        function m2(id)
        {
            var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
            e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
            e2.x = startLX;
            e2.y = startLY;
            return e2;
        }
        window.stayTopLeft=function()
        {
            if (document.documentElement && document.documentElement.scrollTop)
                var pY =  document.documentElement;
            else if (document.body)
                var pY =  document.body;
            if (document.body.scrollTop > 30){startLY = 3;startRY = 3;} else {startLY = TopAdjust;startRY = TopAdjust;};
            ftlObj.y += (pY+startRY-ftlObj.y)/16;
            ftlObj.sP(ftlObj.x, ftlObj.y);
            ftlObj2.y += (pY+startLY-ftlObj2.y)/16;
            ftlObj2.sP(ftlObj2.x, ftlObj2.y);
            setTimeout("stayTopLeft()", 1);
        }
        ftlObj = ml("divAdRight");
        //stayTopLeft();
        ftlObj2 = m2("divAdLeft");
        stayTopLeft();
    }
    function ShowAdDiv()
    {
        var objAdDivRight = document.getElementById("divAdRight");
        var objAdDivLeft = document.getElementById("divAdLeft");
        if (document.body.clientWidth < 1000)
        {
            objAdDivRight.style.display = "none";
            objAdDivLeft.style.display = "none";
        }
        else
        {
            objAdDivRight.style.display = "block";
            objAdDivLeft.style.display = "block";
            FloatTopDiv();
        }
    }
</script>
<script>
document.write("<script type='text/javascript' language='javascript'>MainContentW = 940;LeftBannerW = 165;RightBannerW = 255;LeftAdjust = 7;RightAdjust = 8;TopAdjust = 10;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");
</script>
<!-------------End Slide chạy dọc 2 bên--------------->
<div id="content">
<!-- <div class="slider-wrapper theme-default">
		           <div id="slider" class="nivoSlider" style="height:354px;">
		            	<a href="<?php echo base_url()?>khoahoc">
		           		<?php foreach ($list_slide as $slide)
									{
										 echo $slide->anh1;
										 echo $slide->anh2;
										 echo $slide->anh3;
										 echo $slide->anh4;
									}?>

		            </div>	-->
		            <div id="featured">	
		            	<!--<a href="<?php echo base_url()?>khoahoc"> -->
		           		<?php foreach ($list_slide as $slide)
									{
												$preg = preg_match_all('#<img.*/>#',$slide->anh1,$match);
												echo '<a href="khoahoc">'.$match[0][0].'</a>';
												$preg = preg_match_all('#<img.*/>#',$slide->anh2,$match);
												echo '<a href="khoahoc">'.$match[0][0].'</a>';
												$preg = preg_match_all('#<img.*/>#',$slide->anh3,$match);
												echo '<a href="khoahoc">'.$match[0][0].'</a>';
												$preg = preg_match_all('#<img.*/>#',$slide->anh4,$match);
												echo '<a href="khoahoc">'.$match[0][0].'</a>';
											
									}?>	
						<!--<a href="http://www.jenny.edu.vn/"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide1.jpg"/></a>
						<a href="http://www.jenny.edu.vn/"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide2.jpg"/></a>
						<a href="http://www.jenny.edu.vn/"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/slide4.jpg"/></a>
						-->		
					</div>	           
		       <!-- </div>-->
		           
		        <div id="manincontent">
		        	<div class="contenttext">
			        	<div class="textmaincontent">
			        		<div class="bgtitlemain" style="width:122px;"><p class="titlemain">Tin tức</p></div>
			        		
			        		<?php foreach ($list_tintuc as $item) 
									{ ?>
			        		<div class="idmain">
			        			<div class="img_main">
			        				<?php echo $item->news_image ?>
			        			</div>
			        			<div class="text_main">
			        				<p class="title"><a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->news_id."-".$item->alias;?>">
															<?php echo $item->news_title ?><br>
														  </a></p>
														  <p>(<?php echo ($item->news_post_date); ?>)</p>
			        				<p><?php echo word_limiter(strip_tags($item->news_content), 18)?></br>
			        					<a href="<?php echo base_url();?>tintuc/detail/<?php echo $item->news_id."-".$item->alias;?>">
			        						Tìm hiểu thêm về sự kiện này <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png"/>
			        					</a>
			        				</p>
			        			</div>
			        		</div>
			        		<?php } ?>
			        		<!----<div class="readmore1"><a href="#">Xem thêm</a></div>--->
			        		<div class="readmore1"><a href="<?php echo base_url();?>tintuc">Xem thêm</a></div>
			        	</div>
			        	
			        	<div class="textmaincontent" style="margin-left:2%;">
		        		<div class="bgtitlemain"><p class="titlemain">Khóa học</p></div>
		        		<?php foreach ($list_khoahoc as $item) 
								{ ?>
		        		<div class="idmain">
		        			<div class="img_main2">
		        				<p><?php $date1 = explode("-", $item->courses_date); echo $date1[2]."/".$date1[1]."</br><h style='font-size: 17px'>".$date1[0] ?></h></p>
		        			</div>
		        			<div class="text_main2">
		        				<p class="title">
		        					<a href="<?php echo base_url();?>khoahoc/detail/<?php echo $item->courses_id."-".$item->alias;?>">
		        					<?php echo $item->courses_name ?>
		        					</a></p>
		        					<p>(<?php echo $item->courses_date ?>)</br></p>
		        				<p><?php echo word_limiter(strip_tags($item->courses_content), 18)?>
		        					<a href="<?php echo base_url();?>khoahoc/detail/<?php echo $item->courses_id."-".$item->alias;?>">
			        						</br>Tìm hiểu thêm về khóa học này <img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon19.png"/>
			        				</a>
		        				</p>
		        			</div>
		        		</div>
		        		<?php } ?>
		        		<!---<div class="readmore"><a href="#">Xem thêm</a></div>-->
		        		<div class="readmore"><a href="<?php echo base_url()?>khoahoc">Xem thêm</a></div>
		        	</div>
		        	</div>		        	
		    
		      		<div class="video">		        		
		            		<div class="contentvideo">
						      	 <div id="galleria">
						      	 	<!-- YouTube: iframe -->
									<?php foreach ($list_video_home as $key) {?>
									<a href="<?php echo $key->link_vedio ?>"><img></a>
						            <a href="#"></a>
						            <?php } ?> 
									<!--
									<div class="video">		        		
				            		<div class="contentvideo">	
										<ul id="slidervideo">
											<?php foreach ($list_video_home as $key) {?>
											<li class="panel3">
												<iframe src="http://www.youtube.com/embed/<?php echo substr($key->link_vedio,31)?>" frameborder="0" allowfullscreen></iframe>
											</li>
											<?php } ?> 
										</ul>
						            		</div>				       
						        	</div>	
									<a href="http://www.youtube.com/watch?v=dEnyE1V4v38"><img></a>
						            <a href="#"></a>
							         <a href="http://www.youtube.com/watch?v=XwqUcd-liWA"><img></a>
						            <a href="#"></a> 
						            <a href="http://www.youtube.com/watch?v=9bZkp7q19f0"><img></a>
						            <a href="#"></a>
									<a href="http://www.youtube.com/watch?v=dEnyE1V4v38"><img></a>
						            <a href="#"></a>
							         <a href="http://www.youtube.com/watch?v=XwqUcd-liWA"><img></a>
						            <a href="#"></a> -->
				        		</div>
				        	</div>
				       </div>
		          <script>
					    // Load the classic theme
					    Galleria.loadTheme('<?php echo base_url()?>assets/trungtam-tienganh/js/galleria.classic.min.js');
					
					    // Initialize Galleria
					    Galleria.run('#galleria');				
				    </script>
				    
		        	<script type="text/javascript">
		        		$(document).ready(function(){
		        			$('.show2').hide();		
		        			$('#li1').addClass('addli');   
		        			$('#li2, #li3, #li4, #li5').children('.children').hide();         			
		        			$('#li1').click(function(){		
		        				$(this).addClass('addli');        				
		        				$(this).children().children('.show1').show();
		        				$(this).children().children('.show2').hide();	
		        				$(this).children('.children').show();			        				
		        				$('#li2, #li3, #li4, #li5').children().children('.show2').hide();
		        				$('#li2, #li3, #li4, #li5').children().children('.show1').show();
		        				$('#li2, #li3, #li4, #li5').children('.children').hide();
		        				$('#li2, #li3, #li4, #li5').removeClass('addli');
		        			});
		        			$('#li2').click(function(){	
		        				$(this).addClass('addli');	        				
		        				$(this).children().children('.show1').hide();
		        				$(this).children().children('.show2').show();	
		        				$(this).children('.children').show();			        				
		        				$('#li3,#li4, #li5').children().children('.show2').hide();
		        				$('#li3,#li4, #li5').children().children('.show1').show();
		        				$('#li1').children().children('.show2').show();
		        				$('#li1').children().children('.show1').hide();
		        				$('#li1, #li3, #li4, #li5').children('.children').hide();
		        				$('#li1, #li3, #li4, #li5').removeClass('addli');
		        			});
		        			$('#li3').click(function(){	
		        				$(this).addClass('addli');	        				
		        				$(this).children().children('.show1').hide();
		        				$(this).children().children('.show2').show();
		        				$(this).children('.children').show();				        				
		        				$('#li2,#li4, #li5').children().children('.show2').hide();
		        				$('#li2,#li4, #li5').children().children('.show1').show();
		        				$('#li1').children().children('.show2').show();
		        				$('#li1').children().children('.show1').hide();
		        				$('#li2, #li1, #li4, #li5').children('.children').hide();
		        				$('#li1, #li2, #li4, #li5').removeClass('addli');
		        			});
		        			$('#li4').click(function(){	
		        				$(this).addClass('addli');	        				
		        				$(this).children().children('.show1').hide();
		        				$(this).children().children('.show2').show();
		        				$(this).children('.children').show();		        				
		        				$('#li2,#li3, #li5').children().children('.show2').hide();
		        				$('#li2,#li3, #li5').children().children('.show1').show();
		        				$('#li1').children().children('.show2').show();
		        				$('#li1').children().children('.show1').hide();
		        				$('#li1, #li2, #li3, #li5').removeClass('addli');
		        				$('#li2, #li3, #li1, #li5').children('.children').hide();
		        			});
		        				$('#li5').click(function(){	
		        				$(this).addClass('addli');	
		        				$(this).children('.children').show();		        				
		        				$(this).children().children('.show1').hide();
		        				$(this).children().children('.show2').show();		        				
		        				$('#li2,#li3, #li4').children().children('.show2').hide();
		        				$('#li2,#li3, #li4').children().children('.show1').show();
		        				$('#li1').children().children('.show2').show();
		        				$('#li1').children().children('.show1').hide();
		        				$('#li1, #li2, #li3, #li4').removeClass('addli');
		        				$('#li2, #li3, #li4, #li1').children('.children').hide();
		        			});
		        			/*=============videoslider===========*/
		        			$('.panel1').addClass('anythingslidecontrols123');
			        		$('.panel1 ').click(function(){
			        			
			        			$(this).addClass('anythingslidecontrols123');
			        			$(this).removeClass('anythingControls');
			        			$('.panel2, .panel3, .panel4, .panel5, .panel6, .panel7').addClass('anythingControls');
			        			$('.panel2, .panel3, .panel4, .panel5, .panel6, .panel7').removeClass('anythingslidecontrols123');
			        		});
			        		$('.panel2 ').click(function(){
			        			
			        			$(this).addClass('anythingslidecontrols123');
			        			$(this).removeClass('anythingControls');
			        			$('.panel1, .panel3, .panel4, .panel5, .panel6, .panel7').addClass('anythingControls');
			        			$('.panel1, .panel3, .panel4, .panel5, .panel6, .panel7').removeClass('anythingslidecontrols123');
			        		});
			        		$('.panel3 ').click(function(){
			        			
			        			$(this).addClass('anythingslidecontrols123');
			        			$(this).removeClass('anythingControls');
			        			$('.panel2, .panel1, .panel4, .panel5, .panel6, .panel7').addClass('anythingControls');
			        			$('.panel2, .panel1, .panel4, .panel5, .panel6, .panel7').removeClass('anythingslidecontrols123');
			        		});
			        		$('.panel4 ').click(function(){
			        			
			        			$(this).addClass('anythingslidecontrols123');
			        			$(this).removeClass('anythingControls');
			        			$('.panel2, .panel3, .panel1, .panel5, .panel6, .panel7').addClass('anythingControls');
			        			$('.panel2, .panel3, .panel1, .panel5, .panel6, .panel7').removeClass('anythingslidecontrols123');
			        		});
			        		$('.panel5').click(function(){
			        			
			        			$(this).addClass('anythingslidecontrols123');
			        			$(this).removeClass('anythingControls');
			        			$('.panel2, .panel3, .panel4, .panel1, .panel6, .panel7').addClass('anythingControls');
			        			$('.panel2, .panel3, .panel4, .panel1, .panel6, .panel7').removeClass('anythingslidecontrols123');
			        		});
			        		$('.panel6').click(function(){
			        			
			        			$(this).addClass('anythingslidecontrols123');
			        			$(this).removeClass('anythingControls');
			        			$('.panel2, .panel3, .panel4, .panel1, .panel7, .panel5').addClass('anythingControls');
			        			$('.panel2, .panel3, .panel4, .panel1, .panel7, .panel5').removeClass('anythingslidecontrols123');
			        		});
			        		$('.panel7').click(function(){
			        			
			        			$(this).addClass('anythingslidecontrols123');
			        			$(this).removeClass('anythingControls');
			        			$('.panel2, .panel3, .panel4, .panel1, .panel6, .panel5').addClass('anythingControls');
			        			$('.panel2, .panel3, .panel4, .panel1, .panel6, .panel5').removeClass('anythingslidecontrols123');
			        		});
			        		 /*--đếm xem có bao nhiêu phần tử a trong thumbNav--*/
								 /*   $size = $('.thumbNav').find('a').length;
								 
								    /*--đặt i=0--*/
								  /*  i=0;
								 	n=1;
								  $(n).click(function(){
								        $('.thumbNav').find('a').eq(n).addClass('anythingslidecontrols123');
								 
								        /*--tăng thêm i  1 đơn vị--*/
								    /*    i++;
								 
								        /*--nếu n tăng bằng số tổng số phần tử a dừng hàm lại--*/
								       /* if(i==n-1 || i==n+1) {
								        	 $('.thumbNav').find('a').eq(i).removeClass('anythingControls');
								        };
								    }*/
			        
		        		})
		        	</script>
	<div class="tab">
						<ul id="ultop">
		        			<li id="li1">
		        				<a href-"#">
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/face1.png" class="show1"/>
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/face.png" class="show2"/>
			        			</a>
		        				<div class="children">
		        					<div id="fb-root"></div>
										<script>(function(d, s, id) {
										  var js, fjs = d.getElementsByTagName(s)[0];
										  if (d.getElementById(id)) return;
										  js = d.createElement(s); js.id = id;
										  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
										  fjs.parentNode.insertBefore(js, fjs);
										}(document, 'script', 'facebook-jssdk'));</script>
									<div class="fb-like-box" data-href="http://www.facebook.com/NiwVietNam" data-width="940" data-height="190" data-show-faces="true" data-stream="false" data-header="false"></div>
		        				</div>
		        			</li>
		        			<li id="li2">
		        				<a href-"#">
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/twiter.png" class="show1"/>
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/twiter1.png" class="show2"/>
			        			</a>
			        				<div class="children">
		        					<a href="https://twitter.com/twitter" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @twitter</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
									</div>
		        			</li>
		        			<li id="li3">
		        				<a href-"#">
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/ytb.png" class="show1"/>
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/ytb1.png" class="show2"/>
			        			</a>
			        				<div class="children">
			        					<?php foreach ($yt_fanpage as $value) {?>
			        					<label style="margin-left: 5px">
			        						<a target="_blank" href="<?php echo $value->video_child ?>"><?php echo  $value->video_child ?></a></br>
			        					</label>
			        					
		        						<iframe width="290" height="170" frameborder="0" allowfullscreen="" src="http://www.youtube.com/embed/<?php echo substr($value->video_child,31)?>" style="padding-left:5px; padding-top: 10px;">
										</iframe>
										<?php }?>
		        					</div>
		        			</li>
		        			
		        			<li id="li4">
			        				<a href-"#">
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/zing.png" class="show1"/>
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/zing1.png" class="show2"/>
			        			</a>
			        				<div class="children">
			        					<div id="zme-root"></div>  

							<script>(function(d, s, id) {
							
							          var js, fjs = d.getElementsByTagName(s)[0];
							
							           if (d.getElementById(id)) {return;}
							
							          js = d.createElement(s); js.id = id;
							
							          js.src = "http://static.me.zing.vn/sp/js/all-1.04.js#&appId=d713b962dbf19d2dea16124b293558d1&status=true";
							
							          fjs.parentNode.insertBefore(js, fjs);
							
							           }(document, 'script', 'zingme-jssdk'));
							 </script>
							 <style>
							 	.zme-fan-box iframe{
							 		height: 200px !important;
							 	}
							 </style>

							<div class="zme-fan-box" data-profile="link" data-width="940" data-height="180" data-numoffan="16" data-pad-left="2" data-pad-right="8"></div>
		        				</div>
		        			</li>
		        			<li id="li5">
		        				<a href-"#">
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/go.png" class="show1"/>
			        				<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/go1.png" class="show2"/>
			        				
			        			</a>
			        				<div class="children">
			        					<script type="text/javascript" src="http://api.go.vn/social-plugins/gconnect/all.min.js?v="></script>
											<script type="text/javascript">
											Go.commentbox({
											appid : 1439184924,
											num_rows : 5,
											title : "test",
											client_url : "http://example.com",
											desc : "",
											img : "",
											template : "light",
											widthifr :500
											},"govn_cm");</script>
											<div id="govn_cm" ></div>
		        					</div>
		        			</li>
		        		</ul>
		        		<div class="righttab">
							<!-------- Gửi mail------------>
							<?php 
								echo '<p style="color:#f83d43; margin:10px;  font-size: 13px; font-weight: bold ">'.$this->session->userdata('lienhe_result').'</p>';
								$this->session->unset_userdata('email_result');
							?>
							<form action="<?php echo base_url();?>homepage/send" method="post">
							<input name="e_mail" id="mod_virtuemart_search" maxlength="80" class="inputbox" type="text" size="20" value="your email address..." onblur="if(this.value=='') this.value='your email address...';" onfocus="if(this.value=='your email address...') this.value='';">
							<input type="submit" value="Send" name="sendmail">
							</form>
							<?php echo validation_errors('','</p>'); ?>
		        		</div>
		        	</div>
		        	<div class="contentbot">
		        		<div class="prev12"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon5.gif"/></div>
			        	<div id="clickslide">
			        		
			        		<div style="width:90%; overflow: hidden; height: 119px; margin:0 20px;">
			        		<!-- Slide Footer---->
			        		<div class="slideimage">
			        			<a href="<?php echo base_url();?>tintuc">
			        			<?php foreach ($list_slide1 as $slide)
									{
										 echo $slide->anh1;
										 echo $slide->anh2;
										 echo $slide->anh3;
										 echo $slide->anh4;
										 echo $slide->anh5;
									}?>
								</a>
			        			<!--<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_152.gif"/>
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_155.gif"/>
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_152.gif"/>
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_155.gif"/>
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_152.gif"/>
			        			<img src="<?php echo base_url();?>assets/trungtam-tienganh/images/trang-chu_155.gif"/>-->
			        		</div>
			        		<!-- End Slide Footer---->
			        		</div>
			        		
			        	</div>
			        	<div class="next12"><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon8.gif"/></div>
			        	<div id="number">
			        		<table class="table">
			        			<tbody><tr>
			        				<td class="bd" colspan="2">
			        					<label>Thống kê</label>
			        				</td>
			        			</tr>
			        			<tr>
			        				<td><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon9.gif"></td>
			        				<td>Hôm nay: <label style="font-weight:bold;">
			        					<?php if(isset($counting['today'])){
			        						echo $counting['today'];
			        					} ?></label></td>
			        			</tr>
			        			<tr>
			        				<td><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon4.gif"></td>
			        				<td>Tháng hiện tại : <label style="font-weight:bold;"><?php echo $counting['month'];?></label></td>
			        			</tr>
			        			<tr>
			        				<td><img src="<?php echo base_url();?>assets/trungtam-tienganh/images/icon7.gif"></td>
			        				<td>Tổng lượt truy cập : <label style="font-weight:bold;"><?php echo $counting['total'];?></label></td>
			        			</tr>
			        		</tbody></table>
			        	</div>
			        		
		        	</div>
		        </div>
			</div>
			<!--<script type="text/javascript">
				$('#homehd').addClass('bgli');
			</script>-->