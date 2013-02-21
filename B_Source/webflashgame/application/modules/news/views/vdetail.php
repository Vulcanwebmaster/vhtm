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
									<?php if ($_SESSION['lang']=="fr"){ echo $detail->name; }else{  echo $detail->namee; } ?>
								</div>
								<div id="imgnews">
									<?php echo $detail->image ?>
								</div>
								<div id="idcontentnews">
									<?php if ($_SESSION['lang']=="fr"){ echo $detail->content; }else{  echo $detail->contente; } ?>
								</div>
								<?php } ?>
						<form action="<?php echo base_url();?>news/comment" method="post" class="frmcm">
							<div class="frmcmdetail">
								<input type="hidden" value="<?php echo $detail->id."-".$detail->alias; ?>" name="news_id" />
								<input type="text" name="comment_name" value="Name" onblur="if(this.value=='') this.value='Name';" onfocus="if(this.value=='Name') this.value='';" />
								<textarea name="comment_content" value="Comment" onblur="if(this.value=='') this.value='Comment';" onfocus="if(this.value=='Comment') this.value='';"></textarea>
								<input type="submit" value="Comment" class="submitfrmcm" />
							</div>
							<div class="contetncommentdt">
								<?php if(isset($list_comment)){
								 foreach ($list_comment as $comment) { ?>
								 	<div class="sizepdetail">
									<p style="font-size: 16px; font-weight: bold; color: #3b5998"><?php echo $comment->comment_name ?>:</p>
									<p class="comment_content"><?php echo $comment->comment_content ?></p>
									</div>
								<?php } }  ?>
							</div>
							
						</form>
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