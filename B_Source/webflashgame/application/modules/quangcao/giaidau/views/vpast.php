<style>
	#main{
		background: url(<?php echo base_url();?>assets/flash_game/images/backContentTop.jpg) no-repeat;
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
			
</style>

<div id="nav" class="">
			<ul>
				<li class="btnPlay first active"><a href="<?php echo base_url();?>homepage" data-gtt="Home" title=""><span>Home</span></a></li>
				<li class="btnTourn"><a data-gtt="Tournaments" href="<?php echo base_url();?>giaidau" title=""><span>Tournaments</span></a></li>
				<li class="btnCommunity"><a data-gtt="My GameTwist" href="<?php echo base_url();?>dangky/dangnhap" title=""><span>My GameTwist</span></a></li>
				<li class="btnShop"><a data-gtt="Shop" href="<?php echo base_url();?>shop" title=""><span>Shop</span></a></li>
				<li class="btnRules"><a data-gtt="Help" href="<?php echo base_url();?>helps" title=""><span>Help</span></a></li>
			</ul>
			<a id="backToTop" href="#"></a>
		</div>
<div id="main">
			<div id="container">
				<div id="tipHolder"></div>
				<div id="subNav">
				<ul>
					<li class="active " id="now"><a href="<?php echo base_url();?>giaidau"><span>current</span></a></li>
					<li class="" id="past"><a href="<?php echo base_url();?>giaidau/past"><span>past</span></a></li>
					<li class="" id="mine"><a href="<?php echo base_url();?>dangky/dangnhap"><span>My tournaments</span></a></li>
					<li class="" id="create"><a href="<?php echo base_url();?>dangky/dangnhap"><span>Create tournament</span></a></li>
				</ul>
			</div>
			<div id="tournContainer">
				<div class="helperTopRight"></div>
				<div class="helperBottomLeft"></div><div class="helperBottomRight"></div>
				<div id="tournToday" class="contBox tournList tournSect">
					<div class="tournHelper"><h3><span>Tournaments past</span></h3>
					<div class="container">
						<ul style="width: 588px;margin-right:0;">
							<?php foreach ($past as $item) 
							{ ?>
							<li class="">
								<div class="to1  rating3  medium gameId_88 tournId_32167 tournStatus_2">
									<h4><a href="" title=""><span><?php echo $item->name_tour ?></span></a></h4>
									<div class="to1_container">
										<span style="background-color: #cfc29e" class="backgroundColor"></span>
										<span class="to1_logo_5 to1_pos_8"></span><span style="display:block;background-image: url(http://static7.greentube.com/xsl_gamebase/assets/game_88/logo_137x77/game_88_logo_137x77_EN-US.png);" class="logo"></span>
										<span style="display:block;background-image: url(images//gameSO1_med.png);" class="border"></span>
										<a class="" href="/web/Tournaments-Details?id_tourn=32167">
											<strong class="static switchPrize"><span>Twists 37.500</span></strong>
											<dl style="color: #000000"><dt><span>Playing now</span></dt><dd>425</dd></dl>
											<span style="display:block;background-image: url(images//gameTO1_OverlaySprite.png);" class="link"></span>
											<span style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;" class="c2a"><span class="register">Register now!</span></span>
											<span style="display:block;background-image: url(images//tournSprite.png);clip: rect(0px 65px 65px 0px); top: -10px; left: -10px;" class="to1Status typeId0"></span>
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
					</div>
				</div>
			</div>
			</div>
	</div>
	<div id="sideNav"></div>
	<div id="sideBar"></div>
</div>