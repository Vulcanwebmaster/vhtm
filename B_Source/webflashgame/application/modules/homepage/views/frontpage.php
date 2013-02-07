 <script type="text/javascript">
		    $(window).load(function() {
		        $('#slider').nivoSlider();
		    });
		    </script>
<div id="slider12">
					
						  <div class="slider-wrapper theme-default slider">
				            <div id="slider" class="nivoSlider" >
				                <img src="<?php echo base_url();?>assets/flash_game/images/Belote_26.png"/>
				                <img src="<?php echo base_url();?>assets/flash_game/images/mario_gif.gif"/>
				                <img src="<?php echo base_url();?>assets/flash_game/images/sl2.jpg"/>
				                <img src="<?php echo base_url();?>assets/flash_game/images/sl3.jpg"/>
				            </div>				           
				        </div>
				
					<img src="<?php echo base_url();?>assets/flash_game/images/bg.png"/>
				</div>
<div id="main">
					<div id="topmain">
						<div class="texttopmain">
							<p class="titlep">Enregister</p>
							<div class="numbertexttopmain">
								<img src="<?php echo base_url();?>assets/flash_game/images/1.png"/>
							</div>
							<div class="textcontent">
								<p> Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<div class="submittextcontent">Enregistrer gratuit</div>
							</div>
						</div>
						<div class="texttopmain">
							<p class="titlep">Enregister</p>
							<div class="numbertexttopmain">
								<img src="<?php echo base_url();?>assets/flash_game/images/2.png"/>
							</div>
							<div class="textcontent">
								<p> Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<div class="submittextcontent1">Connecter</div>
							</div>
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
						</div>
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
											<li class="imglimain1"><a href="#">10 comments</a></li>
										</ul>
									</div>
									<style type="text/css">
										.tuyet p{
										float: left;
										width: 245px;
										height: 203px;
										}
											.tuyet p img{
										border: 1px solid #696969;
										width: 245px !important;
										height: 203px !important;
										}									
										</style>
									<div class="contentimgtext tuyet">
										<?php foreach ($list_news as $value) 
				 			{ ?>
				 						<?php echo $value->image ?>
										<!-- <img src="<?php echo base_url();?>assets/flash_game/images/Belote_134.png"/> -->
										<p style="width: 375px;text-align: left"> <?php echo $value->content ?>
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
										<p style="width: 375px;text-align: left"> <?php echo $value->content ?>
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
								<div class="faclide">
									<img src="<?php echo base_url();?>assets/flash_game/images/Belote_99.png"/>
									<div class="likef">
										<label style="color:#0184a3">Belote.com</label>
										<div style="margin-top:5px;">
											<img src="<?php echo base_url();?>assets/flash_game/images/Belote_102.png"/>
											<label style="padding-top:5px">You like this</label>
										</div>
									</div><br clear="both"/>
									
								</div>
								<div style="padding:10px"> You and 889,998 others like <labe style="color:#0184a3">Belote.com</labe></div>
								<div class="plupginf">Facebook social plugin</div>
							</div>
						</div>
						<div class="listgerular">
							<ul>
								<li><img src="<?php echo base_url();?>assets/flash_game/images/Belote_113.png"/></li>
								<li><img src="<?php echo base_url();?>assets/flash_game/images/Belote_115.png"/></li>
								<li><img src="<?php echo base_url();?>assets/flash_game/images/Belote_117.png"/></li>
								<li><img src="<?php echo base_url();?>assets/flash_game/images/Belote_119.png"/></li>
								<li><img src="<?php echo base_url();?>assets/flash_game/images/Belote_123.png"/></li>
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