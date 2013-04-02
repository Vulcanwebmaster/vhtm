<style type="text/css">
	.so1_small img{ height:52px !important; width:102px !important; }
	.so1_small p{ height:64px !important; width:112px !important; }
</style>
<style>

	#main{
/*		background: url(<?php echo base_url();?>assets/flash_game/images/backContentTop.jpg) no-repeat;*/
	_zoom: 1;
	overflow: hidden;
	padding: 54px 24px 0 24px;
	
	}
	
	#sideNav{
				float: left;
			    width: 294px;
			}
			 #container{
				float: right;
			   
			    width: 648px;
			}
		#container{
			float: left;
			width: 648px;
		}
			.container ul {
margin: 0;
padding: 0 0 35px 3px;
overflow: hidden;
border-left: none;
zoom: 1;
}
body {
font-family: Verdana,Arial,Helvetica,sans-serif;
color: #333;
}
</style>
 <script type="text/javascript">
    $(document).ready(function(){
     $('body').addClass('games_category uc hasSideBar noLeaderBoard root chrome, game_uc').removeClass('game_default');
    })
   </script>
   			<script>
$("li").hover(
  function () {
    $(this).append($("<span> ***</span>"));
  },
  function () {
    $(this).find("span:last").remove();
  }
);
 
//li with fade class
$("li.fade").hover(function(){$(this).fadeOut(100);$(this).fadeIn(500);});
 
</script>

<?php $this->load->view('front/menu')?>
<div id="main">
	
		<div id="container">
				<div id="tipHolder"></div>
				<div class="contBox gamesCategory">
					
					<h3><span><?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php if(isset($breadcrum1)){
					 			
									echo $breadcrum1->category_namefr; 
								 }  ?>
								<?php } else{ ?>
									<?php if(isset($breadcrum1)){
					 			
									echo $breadcrum1->category_name; 
								 }  ?>
								<?php } ?></span></h3>
					<div class="container">
						<script>
													$(document).ready(function(){
													  $(".so1_container ul li p").show();
													  $(".so1_container ul li p img").addClass("gameLogo pos_10");
													});
												</script>
						<ul id="Card" style="">
							<?php foreach ($items as $item) 
							{ ?>
							<li class="item">
								<div class=" so1_small rating friendsOnline gameId_110"">
									<h4><a href="<?php echo base_url()?>games/detail/<?php echo $item->game_id."-".$item->alias?>" title=""><span>
										<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $item->namefr ?>
								<?php } else{ ?>
									<?php echo $item->name ?>
								<?php } ?></span></a></h4>
									<div class="so1_container" style="background-color: #898989">
										<p></p>
										<dl><dt><span>Playing now</span></dt><dd>619</dd></dl>
										<ul>
											<li>
												<span class="border" style="display:block;background-image: url(images/gameSO1_small.png);"></span>
<!-- 												<span class="gameLogo pos_2" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/logosprite_102x54_4.png);"></span> -->
												<?php echo $item->image;?>
												<a class="room" href="#">
													<span class="link" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_OverlaySprite.png);"></span>
													<span class="status" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_StatusSprite_EN-US.png);"></span>
													<span class="c2a" style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;">Play now!</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div id="so2overlay" style="top: -100px; left: -50px; display: none" class="friendsOnline type1">
											<span class="top" style="background-image: url(http://localhost/webflashgame/assets/flash_game/images/overlayBackSprite.png?v2);"></span>
											<div id="so2overlayTop">
													<h3><span>		
												Sizzling Hot Deluxe								</span></h3>
													<div class="gameDesc"><p></p><p>
				<span&#8230;< p=""></span&#8230;<></p></div>
													<p class="gameShot"></p><p>
				<img alt="" src="/flash_game/assets/flash_game/upload/images/game_110_logo_137x77_EN-US.png" style="width: 137px; height: 77px;"></p>
			<p></p>
													<ul id="so2nav">
														<li class="btnPlay" style="width:21px;"><a href="#" data-gtt="Play" title=""><span>Play</span></a></li>
														<li class="btnHelp" style="width:21px; float:left;"><a href="#" data-gtt="Rules" title=""><span>Rules</span></a></li>
														<li class="btnStats"><a href="#" data-gtt="Statistics" title=""><span>Statistics</span></a></li>
														<li class="btnInfo"><a href="#" data-gtt="Game Overview" title=""><span>Game Overview</span></a></li>
														<li class="btnMobile"><a href="#" data-gtt="Mobile Games" title=""></a></li>
													</ul>
														<dl><dt>Playing now</dt><dd>82</dd></dl>
														<div id="topGame"></div>
														<div id="so2rating" class=""></div>
														<span class="overlayStatus" style=";background-image: url(http://localhost/webflashgame/assets/flash_game/images/game_StatusSprite_EN-US.png);"></span>
														<div class="btnClose">
															<a href="#close" data-gtt="close" title=""><span>close</span></a>
														</div>
													</div>
													<span class="overlayBottom" style="background-image: url(http://localhost/webflashgame/assets/flash_game/images/overlayBackSprite.png?v2);"></span>
													<div id="so2overlayBottom">
														<div><p><span class="tournDate"></span>&nbsp;<strong>Jackpot:</strong>&nbsp;<span class="tournPrize"></span></p><a class="formLink" href="#"><span>To the Tournament</span></a>
															
															</div>
														</div><span class="overlayPointer" style="background-image: url(http://localhost/webflashgame/assets/flash_game/images/overlayBackSprite.png?v2);"></span>
										</div>
							</li>
								<?php } ?>
						</ul>
					
					</div>
				</div>
			</div>
			
			<div id="sideNav"></div>
			
			<div id="sideBar">
				<div id="catList">
					<ul>
						
						<?php foreach ($list_category as $value) 
				 			{ ?>
						<li id="category8"><a href="<?php echo base_url()?>games/category/<?php echo $value->id."-".$value->alias?>"><span>
							<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $value->category_namefr?>
								<?php } else{ ?>
									<?php echo $value->category_name?>
								<?php } ?></span></a></li>
						<?php } ?>
						<li id="skill7Button"><a target="_blank" href="#"><span>Skill7</span></a></li>
						
					</ul>
				</div>
			</div>
			<style type="text/css">
				#catList a{ cursor:pointer !important;}
			</style>
			<script type="text/javascript">
				$(document).ready(function(){
				$('#TwistCasino,#Sports,#Board, #Arcade, #browsergames').hide();
				$('#Card').show();
				$('#category1').addClass('active');
					$('#category5').click(function(){
						$('#TwistCasino').show();
						$(this).addClass('active');
							$('#browsergames,#Card,#Board, #Arcade, #Sports').hide();
						$('#category1, #category2, #category4, #category3, #category8').removeClass('active');
					});
					$('#category1').click(function(){
						$('#Card').show();
						$(this).addClass('active');
							$('#TwistCasino,#browsergames,#Board, #Arcade, #Sports').hide();
						$('#category5, #category2, #category4, #category3, #category8').removeClass('active');
					});
					$('#category2').click(function(){
						$('#Board').show();
						$(this).addClass('active');
							$('#TwistCasino,#Card,#browsergames, #Arcade, #Sports').hide();
						$('#category1, #category5, #category4, #category3, #category8').removeClass('active');
					});
					$('#category4').click(function(){
						$('#Arcade').show();
						$(this).addClass('active');
							$('#TwistCasino,#Card,#Board, #browsergames, #Sports').hide();
						$('#category1, #category2, #category5, #category3, #category8').removeClass('active');
					});
					$('#category3').click(function(){
						$('#Sports').show();
							$('#TwistCasino,#Card,#Board, #Arcade, #browsergames').hide();
						$(this).addClass('active');
						$('#category1, #category2, #category4, #category5, #category8').removeClass('active');
					});
					$('#category8').click(function(){
						$('#browsergames').show();
							$('#TwistCasino,#Card,#Board, #Arcade, #Sports').hide();
						$(this).addClass('active');
						$('#category1, #category2, #category4, #category3, #category5').removeClass('active');
					});
				})
			</script>
		</div>
		<script type="text/javascript">
							$(document).ready(function(){
								$('#so2overlay').hide();
								$('#pagehome').addClass('active');
								$('.so1_container').mouseenter(function(){
									$(this).parent().parent().children('#so2overlay').show();
								})
									$('.item').mouseleave(function(){
									$(this).children('#so2overlay').hide();
								})
								$('.btnClose').click(function(){
									$(this).parent().parent().parent().children('#so2overlay').css('display','none');
									
								})
							})
				</script>