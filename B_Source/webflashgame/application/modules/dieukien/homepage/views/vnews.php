 <script type="text/javascript">
		    $(window).load(function() {
		        $('#slider').nivoSlider();
		    });
		    </script>
<div id="main">
					<div id="contentmain">
					<!---------------Chi tiet tin tuc -->
							<div id="contentmainleft" class="addnews">
								<?php if(isset($list_news)){
								 foreach ($list_news as $value) { ?>
								<div id="titlenews">
									<?php echo $value->name ?>
								</div>
								<div id="imgnews">
									<?php echo $value->image ?>
								</div>
								<div id="idcontentnews">
									<?php echo $value->content ?>
								</div>
								<?php } ?>
						<form action="<?php echo base_url();?>homepage/comment" method="post" class="frmcm">
							<input type="text" name="comment_name" value="Name" onblur="if(this.value=='') this.value='Name';" onfocus="if(this.value=='Name') this.value='';" />
							<textarea name="comment_content" value="Comment" onblur="if(this.value=='') this.value='Comment';" onfocus="if(this.value=='Comment') this.value='';"></textarea>
							<input type="submit" value="Comment" class="submitfrmcm" />
							<div>
								<?php if(isset($list_comment)){
								 foreach ($list_comment as $comment) { ?>
									<p style="font-size: 16px; font-weight: bold"><?php echo $comment->comment_name ?>:</p>
									<?php echo $comment->comment_content ?></br>
								<?php } } } ?>
							</div>
							
						</form>
							</div>	
					<!--*********** End Chi tiet tin tuc -->
						<div id="contentmainright">
							<div class="l12323">
							<div class="mainright1">
								<img src="<?php echo base_url();?>assets/flash_game/images/Belote_52.png"/>
								<div class="ctmainrigt1">
									<p>40.000<br/>joueurs inscrits</p>
									<label>2.000 En Ligne</label>
								</div><br clear="both"/>
							</div>
							<div id="topturnois">
								<p><img src="<?php echo base_url();?>assets/flash_game/images/row_03.png" /></p>
								<ul>
									<li>
										<img src="<?php echo base_url();?>assets/flash_game/images/Belote_74.png"/>
										<label>12:00 <a href="#">Belot Tournoi Interna</a></label>
									</li>
									<li>
										<img src="<?php echo base_url();?>assets/flash_game/images/Belote_78.png"/>
										<label>12:00 <a href="#">Belot Tournoi Interna</a></label>
									</li>
									<li>
										<img src="<?php echo base_url();?>assets/flash_game/images/Belote_80.png"/>
										<label>12:00 <a href="#">Belot Tournoi Interna</a></label>
									</li>
									<li>
										<img src="<?php echo base_url();?>assets/flash_game/images/Belote_82.png"/>
										<label>12:00 <a href="#">Belot Tournoi Interna</a></label>
									</li>
								</ul>
							</div>
							
							<div id="topjou">
								<p><img src="<?php echo base_url();?>assets/flash_game/images/row_06.png" /></p>
								<ul>
									<li class="c1">
										<img src="<?php echo base_url();?>assets/flash_game/images/Belote_74.png"/>
										<label><a href="#">Mon name et surname</a> $865.67</label>
									</li>
									<li class="c2">
										<img src="<?php echo base_url();?>assets/flash_game/images/Belote_78.png"/>
										<label><a href="#">Mon name et surname</a> $865.67</label>
									</li>
									<li class="c2">
										<img src="<?php echo base_url();?>assets/flash_game/images/Belote_80.png"/>
										<label><a href="#">Mon name et surname</a> $865.67</label>
									</li>
									<li class="c1">
										<img src="<?php echo base_url();?>assets/flash_game/images/Belote_82.png"/>
										<label><a href="#">Mon name et surname</a> $865.67</label>
									</li>
								</ul>
							</div>
							<div id="belte">
								<p><img src="<?php echo base_url();?>assets/flash_game/images/row_09.png"/></p>
								<!-- <div class="faclide">
									<img src="<?php echo base_url();?>assets/flash_game/images/Belote_99.png"/>
									<div class="likef">
										<label style="color:#0184a3">Belote.com</label>
										<div style="margin-top:5px;">
											<img src="<?php echo base_url();?>assets/flash_game/images/Belote_102.png"/>
											<label style="padding-top:5px">You like this</label>
										</div>
									</div><br clear="both"/>
								</div> -->
								<script>(function(d, s, id) {
										  var js, fjs = d.getElementsByTagName(s)[0];
										  if (d.getElementById(id)) return;
										  js = d.createElement(s); js.id = id;
										  js.src = "//connect.facebook.net/en/all.js#xfbml=1";
										  fjs.parentNode.insertBefore(js, fjs);
										}(document, 'script', 'facebook-jssdk'));</script>
									<div class="fb-like-box" data-href="http://www.facebook.com/NiwVietNam"
										 data-width="268" data-height="210" data-show-faces="true" data-stream="false" data-header="false"></div>
							</div>
						</div>
						<div class="listgerular">
							<ul>
								<li><a href="https://www.facebook.com/" target="_blank"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_113.png"/></a></li>
								<li><a href="https://twitter.com/" target="_blank"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_115.png"/></a></li>
								<li><a href="https://accounts.google.com/" target="_blank"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_117.png"/></a></li>
								<li><a href="http://www.youtube.com/" target="_blank"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_119.png"/></a></li>
							</ul>
						</div>
						</div>
						<div id="bottommain">						
		        			<div class="prev12"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_138.png"></div>
			        			<div id="clickslide">			        		
			        				<div style="width:90%; overflow: hidden;">
			        		<!-- Slide Footer---->
						        		<div class="slideimage">
												<p><img alt="" src="<?php echo base_url();?>assets/flash_game/images/Belote_111.png"></p>
												<p><img alt="" src="<?php echo base_url();?>assets/flash_game/images/Belote_136.png"></p>											
												<p><img alt="" src="<?php echo base_url();?>assets/flash_game/images/Belote_133.png"></p>											
												<p><img alt="" src="<?php echo base_url();?>assets/flash_game/images/Belote_134.png"></p>								
												<p style="margin-right: 10px"><img alt="" src="<?php echo base_url();?>assets/flash_game/images/Belote_111.png"></p>
						        		</div>
			        		<!-- End Slide Footer---->
			        				</div>
			        		
			        		</div>
			        	<div class="next12"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_141.png"></div>	
		        	</div>
						</div>
						<script type="text/javascript">
						
						$(document).ready(function(){	
							var next=0;
									var prev=0;
							window.setInterval(function(){ 
								next=0; prev=0;
								var left=$('.slideimage').css("left");	        			
								var right=$('.slideimage').css("right");			
									
									
									 $(".prev12").click(function(){
									 	left=$('.slideimage').css("left");	  		
										right=$('.slideimage').css("right");
										//alert(parseInt(left) >=parseInt('0'));
										if (next==0)
										 	if(parseInt(left) < parseInt('0px'))
											{	
									 	 		//$(".slideimage").animate({"left": "=0"}, "slow");
									 	 		 $(".slideimage").animate({"left": "+=260px"}, "slow");
									 	 		 next=1;
									 	 	}
									});		
									$(".next12").click(function(){
										left=$('.slideimage').css("left");	        			
										right=$('.slideimage').css("right");
										//alert(parseInt(left) + " " + parseInt('1500px'));
										
										if (prev==0)
										if(parseInt(left) <= parseInt('-520px')) 
										{	
								 	 		 //$(".slideimage").animate({"left": "-=1500px"}, "slow");
								 	 	}
										else{										
											 	 $(".slideimage").animate({"left": "-=260px"}, "slow");
											 	 prev=1;
											
											}
										
									});	
									
								}, 1000);
							});
						</script>
					</div>