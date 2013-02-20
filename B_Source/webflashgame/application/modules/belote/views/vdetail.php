 <script type="text/javascript">
		    $(window).load(function() {
		        $('#slider').nivoSlider();
		    });
		    </script>
<div id="main">
	<div id="contentmain">
	<!---------------Chi tiet tin tuc -->
			<div id="contentmainleft" class="addnews">
				<?php if(isset($detail)){
				  ?>
				<div id="titlenews">
					<?php echo 'Belote' ?>
				</div>
				<div id="imgnews">
					<?php echo $detail->image ?>
				</div>
				<div id="idcontentnews">
					<?php echo $detail->content ?>
				</div>
				<?php } ?>
			</div>	
	<!--*********** End Chi tiet tin tuc -->
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