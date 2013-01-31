<style type="text/css">
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
		#anhgame123 p{ display: block; }
		#anhgame123 img{  height: 52px !important; width: 102px !important; }
</style>

<?php $this->load->view('front/menu')?>
<div id="main">
			<div id="container">
				<div id="tipHolder"></div>
				<div id="subNav">
				<ul>
					<li class="active " id="now"><a href="<?php echo base_url();?>giaidau"><span>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									courant
								<?php } else{ ?>
									current
								<?php } ?></span></a></li>
					<li class="" id="past"><a href="<?php echo base_url();?>giaidau/past"><span>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									passé
								<?php } else{ ?>
									past
								<?php } ?></span></a></li>
					<li class="" id="mine"><a href="<?php echo base_url();?>dangky/dangnhap"><span>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Mes tournois
								<?php } else{ ?>
									My tournaments
								<?php } ?></span></a></li>
					<li class="" id="create"><a href="<?php echo base_url();?>setting"><span>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Créer tournoi
								<?php } else{ ?>
									Create tournament
								<?php } ?></span></a></li>
				</ul>
			</div>
			<div id="tournContainer">
				<div class="helperTopRight"></div>
				<div class="helperBottomLeft"></div><div class="helperBottomRight"></div>
				<div id="tournToday" class="contBox tournList tournSect">
					<div class="tournHelper"><h3><span>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Tournois aujourd'hui
								<?php } else{ ?>
									Tournaments today
								<?php } ?></span></h3>
					<div class="container">
						<script>
													$(document).ready(function(){
													  $(".so1_container ul li p").show();
													  $(".so1_container p img").addClass("gameLogo pos_10");
													});
												</script>
								<ul style="width: 588px;margin-right:0;">
							<?php foreach ($today as $item) 
							{ ?>
							<li class="">
								<div class="to1  rating3  medium gameId_88 tournId_32167 tournStatus_2">
									<h4><a href="<?php echo base_url()?>giaidau/detail/<?php echo $item->tour_id?>" title=""><span><?php echo $item->name_tour ?></span></a></h4>
									<div class="to1_container">
										<?php echo $item->image ?>
										<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images//gameSO1_med.png);" class="border"></span>
										<a class="" href="/web/Tournaments-Details?id_tourn=32167">
											<strong class="static switchPrize"><span>Twists 37.500</span></strong>
											<dl style="color: #000000"><dt><span>Playing now</span></dt><dd>425</dd></dl>
											<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images//gameTO1_OverlaySprite.png);" class="link"></span>
											<span style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;" class="c2a"><span class="register">Register now!</span></span>
											<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images//tournSprite.png);clip: rect(0px 65px 65px 0px); top: -10px; left: -10px;" class="to1Status typeId0"></span>
											<p style="color: #000000">08.Jan&nbsp;21:00</p>
										</a>
										<div class="desc">
											<span class="label">Start: </span><?php echo $item->start_date ?> <abbr title="Central European Time">CET</abbr><br>
											<span class="label">Stake: </span>Free<br><span class="label">My status:	</span>Not registered!
										</div>
										<div class="jackpot">
											<h4><span>Jackpot</span></h4>
											<p><span class="funCurrencyContainer"><span>Twists </span>37.500</span></p>
										</div>
									</div>
								</div>
								
							</li>
							<?php }?>
						</ul>				
						<!-- <ul style="width: 588px;margin-right:0;">
							<?php foreach ($today as $item) 
							{  ?>
							<li class="">
								<div class="to1  rating3  medium gameId_88 tournId_32167 tournStatus_2">
									<h4><a href="<?php echo base_url()?>giaidau/detail/<?php echo $item->tour_id?>" title=""><span>
										<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $item->name_tourfr ?>
								<?php } else{ ?>
									<?php echo $item->name_tour ?>
								<?php } ?></span></a></h4>
								<style type="text/css">
													.to1_container p img{
														display: block
													}
													.to1_container img{
														width:136px !important;
														height: 77px !important;
													}
												</style>
									<div id="anhgame123" class="to1_container">
 										<?php echo $item->image ?>
										
										<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_med.png);" class="border"></span>
										<a class="" href="/web/Tournaments-Details?id_tourn=32167">
											<strong class="static switchPrize"><span>Twists 37.500</span></strong>
											<dl style="color: #000000"><dt><span>Playing now</span></dt><dd>425</dd></dl>
											<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameTO1_OverlaySprite.png);" class="link"></span>
											<span style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;" class="c2a"><span class="register">Register now!</span></span>
											<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/tournSprite.png);clip: rect(0px 65px 65px 0px); top: -10px; left: -10px;" class="to1Status typeId0"></span>
											<p style="color: #000000">08.Jan&nbsp;21:00</p>
										</a>
										<div class="desc">
											<span class="label"><?php if ($_SESSION['lang']=="fr") 
								{?>		
									Début:
								<?php } else{ ?>
									Start: 
								<?php } ?></span><?php echo $item->start_date ?> <abbr title="Central European Time">CET</abbr><br>
											<span class="label"><?php if ($_SESSION['lang']=="fr") 
								{?>		
									Enjeu:
								<?php } else{ ?>
									Stake:  
								<?php } ?></span>Free<br><span class="label">
								<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Mon statut:
								<?php } else{ ?>
									My status:	
								<?php } ?></span><?php if ($_SESSION['lang']=="fr") 
								{?>		
									Pas inscrit!
								<?php } else{ ?>
									Not registered!
								<?php } ?>
										</div>
										<div class="jackpot">
											<h4><span><?php if ($_SESSION['lang']=="fr") 
								{?>		
									Gros lot
								<?php } else{ ?>
									Jackpot
								<?php } ?></span></h4>
											<p><span class="funCurrencyContainer"><span>Twists </span>37.500</span></p>
										</div>
									</div>
								</div>
							</li>
							<?php }?>
						</ul> -->
					</div>
				</div>
			</div>
			<div id="tournWeek1" class="contBox tournList tournSect">
				<div class="tournHelper">
					<h3><span>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Tournois cette semaine
								<?php } else{ ?>
									Tournaments this week
								<?php } ?></span></h3>
					<div class="container">
						<style type="text/css">
													.to1_container p{
														display: block
													}
													.to1_container img{
														width:136px !important;
														height: 77px !important;
													}
												</style>
							<ul style="width: 588px;margin-right:0;">
							<?php foreach ($week as $item) 
							{ ?>
							<li class="">
								<div class="to1  rating3  medium gameId_88 tournId_32167 tournStatus_2">
									<h4><a href="<?php echo base_url()?>giaidau/detail/<?php echo $item->tour_id?>" title=""><span><?php echo $item->name_tour ?></span></a></h4>
									<div class="to1_container">
										<?php echo $item->image ?>
										<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images//gameSO1_med.png);" class="border"></span>
										<a class="" href="/web/Tournaments-Details?id_tourn=32167">
											<strong class="static switchPrize"><span>Twists 37.500</span></strong>
											<dl style="color: #000000"><dt><span>Playing now</span></dt><dd>425</dd></dl>
											<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images//gameTO1_OverlaySprite.png);" class="link"></span>
											<span style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;" class="c2a"><span class="register">Register now!</span></span>
											<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images//tournSprite.png);clip: rect(0px 65px 65px 0px); top: -10px; left: -10px;" class="to1Status typeId0"></span>
											<p style="color: #000000">08.Jan&nbsp;21:00</p>
										</a>
										<div class="desc">
											<span class="label">Start: </span><?php echo $item->start_date ?> <abbr title="Central European Time">CET</abbr><br>
											<span class="label">Stake: </span>Free<br><span class="label">My status:	</span>Not registered!
										</div>
										<div class="jackpot">
											<h4><span>Jackpot</span></h4>
											<p><span class="funCurrencyContainer"><span>Twists </span>37.500</span></p>
										</div>
									</div>
								</div>
								
							</li>
							<?php }?>
						</ul>									
						<!-- <ul style="width: 1176px;margin-right:0;">
							<?php foreach ($week as $item) 
							{ ?>
							<li class="">
								<div class="to1  rating3  medium gameId_29 tournId_32168 tournStatus_2">
									<h4><a href="<?php echo base_url()?>giaidau/detail/<?php echo $item->tour_id?>" title=""><span>
										<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $item->name_tourfr ?>
								<?php } else{ ?>
									<?php echo $item->name_tour ?>
								<?php } ?></span></a></h4>
									<div class="to1_container">
										<?php $item->image ?>
										<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_med.png);" class="border"></span><a class="" href="/web/Tournaments-Details?id_tourn=32168">
										<strong class="static switchPrize"><span>Twists 11.200</span></strong>
										<dl style="color: #000000"><dt><span>Playing now</span></dt><dd>14</dd></dl>
										<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameTO1_OverlaySprite.png);" class="link"></span>
										<span style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;" class="c2a">
										<span class="register">Register now!</span></span>
										<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/tournSprite.png);clip: rect(0px 140px 65px 75px); top: -10px; left: -85px;" class="to1Status typeId1"></span>
										<p style="color: #000000">09.Jan&nbsp;19:00</p></a>
										<div class="desc">
											<span class="label">Start: </span>09.01.2013 19:00 <abbr title="Central European Time">CET</abbr><br><span class="label">Stake: </span>
											<span class="funCurrencyContainer">
												<span>Twists </span>1.000</span><br>
												<span class="label">My status:	</span>Not registered!
										</div>
										<div class="jackpot">
											<h4><span>Jackpot</span></h4>
											<p><span class="funCurrencyContainer"><span>Twists </span>11.200</span></p>
										</div>
									</div>
								</div>
							</li>
							<?php }?>
						</ul> -->
					</div>
				</div>
				<!--<ul class="paging">
					<li class="prev inactive"><a href="#" data-gtt="Previous page" title="">Previous page</a></li>
					<ol>
						<li class="active"><a href="#" data-gtt="Page 1" title="">Page 1</a></li>
						<li><a href="#" data-gtt="Page 2" title="">Page 2</a></li>
					</ol>
					<li class="next"><a href="#" data-gtt="Next page" title="">Next page</a></li>
				</ul>-->
			</div>
			<div id="tournWeek2" class="contBox tournList tournSect">
				<div class="tournHelper">
					<h3><span>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Tournois semaine prochaine
								<?php } else{ ?>
									Tournaments next week
								<?php } ?></span></h3>
					<div class="container" style="height:243px;">
						<ul style="width: 700px;margin-right:0; position:absolute" class="slideimage">
							
							<?php foreach ($nextweek as $item) 
							{ ?>
							<li class="">
								<div class="to1  rating3  medium gameId_20 tournId_32180 tournStatus_2">
									<h4><a href="<?php echo base_url()?>giaidau/detail/<?php echo $item->tour_id?>" title=""><span>
										<?php if ($_SESSION['lang']=="fr") 
								{?>		
									<?php echo $item->name_tourfr ?>
								<?php } else{ ?>
									<?php echo $item->name_tour ?>
								<?php } ?></span></a></h4>
									<div class="to1_container">
<!-- 										<span style="background-color: #F4D454" class="backgroundColor"></span> -->
										<span class="to1_logo_1 to1_pos_0"></span>
										<?php echo $item->image ?>
<!-- 										<span style="display:block;background-image: url(http://static8.greentube.com/xsl_gamebase/assets/game_20/logo_137x77/game_20_logo_137x77_EN-US.png);" class="logo"></span> -->
										<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_med.png);" class="border"></span>
										<a class="" href="/#"><strong class="static switchPrize"><span>Twists 18.400</span></strong>
										<dl style="color: #000000"><dt><span>Playing now</span></dt><dd>23</dd></dl>
										<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameTO1_OverlaySprite.png);" class="link"></span>
										<span style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;" class="c2a">
										<span class="register">Register now!</span></span>
										<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/tournSprite.png);clip: rect(0px 140px 65px 75px); top: -10px; left: -85px;" class="to1Status typeId1"></span>
										<p style="color: #000000">14.Jan&nbsp;21:00</p>
										</a>
										<div class="desc">
											<span class="label">Start: </span>14.01.2013 21:00 <abbr title="Central European Time">CET</abbr><br>
											<span class="label">Stake: </span>
											<span class="funCurrencyContainer">
												<span>Twists </span>1.000</span><br>
												<span class="label">My status:	</span>Not registered!
										</div>
										<div class="jackpot">
											<h4><span>Jackpot</span></h4>
											<p><span class="funCurrencyContainer"><span>Twists </span>18.400</span></p>
										</div>
									</div>
								</div>
							</li>
							<?php }?>
						</ul>
					</div>
				</div>
				<ul class="paging">
					<div align="center" style="height:50px; padding-top:10px">
						<?php echo $this->pagination->create_links();?>
					</div>
					<li class="prev inactive"><a data-gtt="Previous page" title="">
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Page précédente
								<?php } else{ ?>
									Previous page
								<?php } ?></a></li>
					<ol>
						<li class="page1 active"><a data-gtt="Page 1" title="">
							<?php if ($_SESSION['lang']=="fr") 
								{?>		
									page 1
								<?php } else{ ?>
									Page 1
								<?php } ?></a></li>
						<li class="page2"><a data-gtt="Page 2" title="">
							<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Page 2
								<?php } else{ ?>
									Page 2
								<?php } ?></a></li>
					</ol>
					<li class="next inactive"><a data-gtt="Next page" title="">
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Page suivante
								<?php } else{ ?>
									Next page
								<?php } ?></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="sideNav"></div>
	<div id="sideBar"></div>
</div>
<script type="text/javascript">
	$('#pagetournament').addClass('active')
</script>