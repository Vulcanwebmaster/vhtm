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
<?php $this->load->view('front/menu')?>
<div id="main">
	
		<div id="container">
				<div id="tipHolder"></div>
				<div class="contBox gamesCategory">
					
					<h3><span><?php if(isset($breadcrum1)){
					 			
									echo $breadcrum1->category_name; 
								 
							
				 			 }  ?></span></h3>
					<div class="container">
						
						<ul id="Card" style="">
							<?php foreach ($items as $item) 
							{ ?>
							<li>
								<div class=" so1_small rating friendsOnline gameId_62 external noOverlay">
									<h4><a href="<?php echo base_url()?>games/detail/<?php echo $item->game_id."-".$item->alias?>" title=""><span><?php echo $item->name ?></span></a></h4>
									<div class="so1_container" style="background-color: #898989">
										<p></p>
										<dl><dt><span>Playing now</span></dt><dd>619</dd></dl>
										<ul>
											<li>
												<span class="border" style="display:block;background-image: url(images/gameSO1_small.png);"></span>
												<span class="gameLogo pos_2" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/logosprite_102x54_4.png);"></span>
												<a class="room" href="#">
													<span class="link" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_OverlaySprite.png);"></span>
													<span class="status" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_StatusSprite_EN-US.png);"></span>
													<span class="c2a" style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;">Play now!</span>
												</a>
											</li>
										</ul>
									</div>
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
						<li id="category8"><a href="<?php echo base_url()?>games/category/<?php echo $value->id."-".$value->alias?>"><span><?php echo $value->category_name?></span></a></li>
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