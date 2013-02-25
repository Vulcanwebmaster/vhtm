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
							<p class="titlep"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Enregister';
														 } else{
														 	echo 'Register';
														  }?></p>
							<div class="numbertexttopmain">
								<img src="<?php echo base_url();?>assets/flash_game/images/1.png"/>
							</div>
							<div class="textcontent">
								<?php foreach ($step as $value) 
				 						{ ?>
								<p> <?php echo $value->b1fr ?></p>
								<div class="submittextcontent" style="padding:11px 16px;"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Enregistrer gratuit';
														 } else{
														 	echo 'Register free';
														  }?></div>
								<?php }?>
							</div><br clear="both"/>
						</div>
						<div class="texttopmain">
							<p class="titlep"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Enregister';
														 } else{
														 	echo 'Register';
														  }?></p>
							<div class="numbertexttopmain">
								<img src="<?php echo base_url();?>assets/flash_game/images/2.png"/>
							</div>
							<div class="textcontent">
								<?php foreach ($step as $value) 
				 						{ ?>
								<p> <?php echo $value->b2fr ?></p>
								<div class="submittextcontent" style="padding:11px 16px;"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Connecter';
														 } else{
														 	echo 'Login';
														  }?></div>
								<?php }?>
							</div><br clear="both"/>
						</div>
						<div class="texttopmain">
							<p class="titlep"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Enregister';
														 } else{
														 	echo 'Register';
														  }?></p>
							<div class="numbertexttopmain">
								<img src="<?php echo base_url();?>assets/flash_game/images/3.png"/>
							</div>
							<div class="textcontent">
								<?php foreach ($step as $value) 
				 						{ ?>
								<p> <?php echo $value->b3fr ?></p>
								<div class="submittextcontent" style="padding:11px 16px;"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Jouer en ligne';
														 } else{
														 	echo 'Play Online';
														  }?></div>
								<?php }?>
							</div>
						</div><br clear="both"/>
					</div>
					<div id="contentmain">
						<div id="contentmainleft">
							<div id="new">
								<p class="tieude"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'News';
														 } else{
														 	echo 'News';
														  }?></p>
								<div class="contenttexxtmainlefft">
									<?php foreach ($list_news as $value) 
				 						{ ?>
									<p class="titlenew"><?php if ($_SESSION['lang']=="fr"){
														 	 echo $value->name;
														 } else{
														 	echo $value->namee;
														  }?></p>
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
											<?php foreach($list_news as $item)
											{?>
												<li style="background:none">
														<?php if ($_SESSION['lang']=="fr"){ ?>
															auteur: <?php echo $item->author;?>
														<?php } else{ ?>
															author: <?php echo $item->author;?>
														<?php }?></li>
												<li>|</li>
											<?php }?>
												<li class="imglimain">
													<?php foreach($list_news_tag as $item)
													{?>
													<a href="<?php echo base_url()?>news/category/<?php echo $item->id."-".$item->alias?>">
														<?php if ($_SESSION['lang']=="fr"){ ?>
															<?php echo $item->namefr ?>
														<?php } else{ ?>
															<?php echo $item->name ?>
														<?php }?>
													 
													</a>
													<?php }?>
												</li>
												<?php foreach($list_news as $item)
												{?>
												<li>|</li>
												<li class="imglimain1"><a href="<?php echo base_url();?>news/detail/<?php echo $item->id."-".$value->alias;?>">comments</a></li>
												<?php }?>
										</ul>
									</div>
									<div class="contentimgtext tuyet">
										<?php foreach ($list_news as $value) 
				 							{ ?>
				 						<?php echo $value->image ?>
										<!-- <img src="<?php echo base_url();?>assets/flash_game/images/Belote_134.png"/> -->
										<p class="p1"> <?php if ($_SESSION['lang']=="fr"){
														 	echo word_limiter(strip_tags($value->content), 70);
														 } else{
														 	echo word_limiter(strip_tags($value->contente), 70);
														  }?>
											</p>
											<?php }?>
									</div><br clear="both" />
									<div class="bottommainctentmailleft">
										<img src="<?php echo base_url();?>assets/flash_game/images/row.png"/>
										<lable><a href="<?php echo base_url();?>news">plus de nouvelles</a> </lable>
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
									<?php if ($_SESSION['lang']=="fr"){
														 	echo word_limiter(strip_tags($value->descriptionfr), 70);
														 } else{
														 	echo word_limiter(strip_tags($value->description), 70);
														  }?>
											
								</div>
								<div class="contenttexxtmainlefft">
									<p class="titlenew">Description</p>									
								</div>								
								<div class="mainctentlmainleft">									
									<div class="contentimgtext tuyet">
										<?php echo $value->image?>
<!-- 										<img src="<?php echo base_url();?>assets/flash_game/images/Belote_134.png"/> -->
										<p class="p2"><?php if ($_SESSION['lang']=="fr"){
														 	echo word_limiter(strip_tags($value->contentfr), 70);
														 } else{
														 	echo word_limiter(strip_tags($value->content), 70);
														  }?> 
											</p>
									</div><br clear="both" />
									<div class="bottommainctentmailleft">
										<img src="<?php echo base_url();?>assets/flash_game/images/row.png"/>
										<lable><a href="<?php echo base_url();?>belote/detail/<?php echo $value->id."-".$value->alias;?>">charger plus de nouvelles</a></lable>
										<img src="<?php echo base_url();?>assets/flash_game/images/row.png"/>
									</div>
								</div>
								<?php }?>
							</div>
						</div>
						<!-- Content Right-->
						<?php $this->load->view('front/content_right')?>
						<!-- Slide Footer -->
						<?php $this->load->view('front/slide_bottom')?>
						<!-- End Slide Footer -->
						
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