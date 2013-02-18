 <script type="text/javascript">
		    $(window).load(function() {
		        $('#slider').nivoSlider();
		    });
		    </script>
<div id="slider12">
					
				  <div class="slider-wrapper theme-default slider">
		            <div id="slider" class="nivoSlider" >
		            	<?php foreach ($image as $value) 
				 			{ ?>
		                 <?php echo $value->image1 ?>
		                 <?php echo $value->image2 ?>
		                 <?php echo $value->image3 ?>
		                 <?php echo $value->image4 ?>
		                 <?php echo $value->image5 ?>
		                 <?php echo $value->image6 ?>
		                 <?php } ?>
		            </div>				           
		        </div>
			
					<img src="<?php echo base_url();?>assets/flash_game/images/bg.png"/>
	</div><!-----------end slide-------------->
<div id="main">
					<div id="topmain">
						<div class="texttopmain">
							<p class="titlep">Enregister</p>
							<div class="numbertexttopmain">
								<img src="<?php echo base_url();?>assets/flash_game/images/1.png"/>
							</div>
							<div class="textcontent">
								<p> Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<div class="submittextcontent" style="padding:11px 16px;">Enregistrer gratuit</div>
							</div><br clear="both"/>
						</div>
						<div class="texttopmain">
							<p class="titlep">Enregister</p>
							<div class="numbertexttopmain">
								<img src="<?php echo base_url();?>assets/flash_game/images/2.png"/>
							</div>
							<div class="textcontent">
								<p> Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<div class="submittextcontent1">Connecter</div>
							</div><br clear="both"/>
						</div>
						<div class="texttopmain">
							<p class="titlep">Enregister</p>
							<div class="numbertexttopmain">
								<img src="<?php echo base_url();?>assets/flash_game/images/3.png"/>
							</div>
							<div class="textcontent">
								<p> Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<div class="submittextcontent2">Jouer en ligne</div>
							</div>
						</div><br clear="both"/>
					</div>
					<div id="contentmain">
						<div id="contentmainleft">
							<div id="new">
								<p class="tieude">News</p>
								<div class="contenttexxtmainlefft">
									<?php foreach ($list_news as $value) 
				 						{ ?>
									<p class="titlenew"><?php echo $value->name ?></p>
									<div class="date">
										<ul>
											<li style="background: none" class="font123"><?php echo date("d",strtotime($value->create_date));?></li>
											<li class="font123" style="font-weight:normal">|</li>
											<li><?php echo date("M",strtotime($value->create_date));?><br/><?php echo date("Y",strtotime($value->create_date));?></li>
										</ul>
									</div>
									<?php } ?>
								</div><br clear="both" />
								<div class="mainctentlmainleft">
									<div class="topmainlefftct">
										<ul>
											<li style="background:none"><a href="#">par Imedgazou</a></li>
											<li>|</li>
											<li class="imglimain"><a href="#">About, accuei</a></li>
											<li>|</li>
											<li class="imglimain1"><a href="<?php echo base_url();?>homepage/news">comments</a></li>
										</ul>
									</div>
								<!--	<style type="text/css">
										.tuyet p{
										float: left;
										width: auto ;
										height: auto ;
										}
																		
								</style>-->
									<div class="contentimgtext tuyet">
										<?php foreach ($list_news as $value) 
				 							{ ?>
				 						<?php echo $value->image ?>
										<!-- <img src="<?php echo base_url();?>assets/flash_game/images/Belote_134.png"/> -->
										<p class="p1"> <?php echo $value->content ?>
											</p>
											<?php }?>
									</div><br clear="both" />
									<div class="bottommainctentmailleft">
										<img src="<?php echo base_url();?>assets/flash_game/images/row.png"/>
										<lable>charger plus de nouvelles</lable>
										<img src="<?php echo base_url();?>assets/flash_game/images/row.png"/>
									</div>
								</div>
							</div>
							
							<div id="play">
									<?php foreach ($list_belote as $value) 
				 			{ ?>
								<p class="tieude">How to play</p>
								<div class="contenttexxtmainlefft">
									<p class="titlenew">Description</p>									
								</div>
								<div style="clear: both; padding:10px 20px 0 20px">
									<?php echo $value->description?>
											
								</div>
								<div class="contenttexxtmainlefft">
									<p class="titlenew">Description</p>									
								</div>								
								<div class="mainctentlmainleft">									
									<div class="contentimgtext tuyet">
										<?php echo $value->image?>
<!-- 										<img src="<?php echo base_url();?>assets/flash_game/images/Belote_134.png"/> -->
										<p class="p2"> <?php echo $value->content ?>
											</p>
									</div><br clear="both" />
									<div class="bottommainctentmailleft">
										<img src="<?php echo base_url();?>assets/flash_game/images/row.png"/>
										<lable>charger plus de nouvelles</lable>
										<img src="<?php echo base_url();?>assets/flash_game/images/row.png"/>
									</div>
								</div>
								<?php }?>
							</div>
						</div>
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
						        			<?php foreach ($photo as $value) 
				 								{ ?>
												<?php echo $value->image1 ?>
												<?php echo $value->image2 ?>										
												<?php echo $value->image3 ?>											
												<?php echo $value->image4 ?>							
												<?php echo $value->image5 ?>
												<?php } ?>
						        		
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