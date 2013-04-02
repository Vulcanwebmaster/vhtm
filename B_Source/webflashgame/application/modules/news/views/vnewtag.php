<div id="main">
	<div id="contentmain">
		<div id="contentmainleft" class="addnews">
		<!--	<p id="listnews">List news</p>-->
			<ul id="ullistnew">
				<?php 
				 foreach ($list_news_tag as $value) { ?>
				<li>
					<div class="imgdetailnews">
						<?php echo $value->image ?>
					</div>
					<div class="textdetailnews">
						<p class="titlelistnews"><a href="<?php echo base_url();?>news/detail/<?php echo $value->id."-".$value->alias;?>">
							<?php if ($_SESSION['lang']=="fr"){ echo $value->name;  } else{  echo $value->namee; }?></a></p>
						<p class="contentlistnews"><?php if ($_SESSION['lang']=="fr"){ echo word_limiter(strip_tags($value->content), 25);  } else{ echo word_limiter(strip_tags($value->contente), 25);}?></p>
						<p class="readmordetailnews"><a href="<?php echo base_url();?>news/detail/<?php echo $value->id."-".$value->alias;?>">Read more</a></p>
					</div><br clear="both"/>
				</li>
				<?php }  ?>
			</ul>
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