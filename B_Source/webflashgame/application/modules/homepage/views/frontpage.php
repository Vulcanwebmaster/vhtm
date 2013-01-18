<div id="container">
				<div id="tipHolder"></div>
				<div id="featureBoxesTop">
					<div id="featureBox_1" class="featureBox  type_game gameId_110">
						<h3><a target="_self" href="#"><span>Book of Ra&trade; Deluxe</span></a></h3>
						<div class="container">
							<div style="background-color: #561c00" class="backgroundColor">
								<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/featurebox_slots_screenshots_bookofra.jpg);" class="img"></span>
							</div>
							<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/featureBox.png);" class="transparent"></span>
							<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_StatusSprite_EN-US.png);" class="featureStatus"></span>
							<p class="desc">Pyramids, pharaohs and the Book of Ra! The mysterious slot machine awaits!</p>
						</div>
					</div>
					<div id="featureBox_2" class="featureBox  type_news">
						<?php foreach ($list_category as $key) 
						{ ?>
						<h3><a target="_self" href="<?php echo base_url();?>helps/detail/<?php echo $key->id."-".$key->alias;?>"><span>Play for free!</span></a></h3>
						<div class="container">
							<div style="background-color: " class="backgroundColor">
								<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/6040-featurebox_registrieren_5000.jpg);" class="img"></span>
							</div>
							<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/featureBox.png);" class="transparent"></span>
							<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_StatusSprite_EN-US.png);" class="featureStatus"></span>
							<p class="desc">5,000 Twists to start and 1,000 daily Twists to play with!</p>
						</div>
						<?php }?>
					</div>
					<div id="featureBox_3" class="featureBox statusSlot type_game gameId_190">
						<?php foreach ($list_category as $key) 
						{ ?>
						<h3><a target="_self" href="<?php echo base_url();?>helps/detail/<?php echo $key->id."-".$key->alias;?>"><span>Sharky&trade;</span></a></h3>
						<div class="container">
							<div style="background-color: #AACFDD" class="backgroundColor">
								<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_190_logo_220x100_EN-US.png);" class="logo"></span>
							</div>
							<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/featureBox.png);" class="transparent"></span>
							<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/feature_slot_status.png);" class="featureStatus"></span>
							<p class="desc">Spin the reels and find the deserted island with its golden treasures before Capt'n Sharky gets to it!</p>
						</div>
						<?php }?>
					</div>
				</div>
			<div class="contBox" id="gamesTopGames">
					<h3>Top Games</h3>
					<div class="container">
						<p class="topGamesDesc">The best and most-loved games in one click.</p>
						<ul class="gameList">
							
						<?php foreach ($list_games as $key) 
						{ ?>	
						<li>
							<div class=" so1_medium rating friendsOnline gameId_193">
								<h4><a title="" href="<?php echo base_url();?>games/detail/<?php echo $key->id."-".$key->alias;?>"><span><?php echo $key->name ?></span></a></h4>
								<div class="so1_container" style="background-color: #87d2f8">
									<p>Be the first to play all of your cards and become President!</p>
									<dl><dt><span>Playing now</span></dt><dd>31</dd></dl>
									<ul>
										<li>
											<span class="border" style="display:block;background-image: url(images/gameSO1_med.png);"></span>
											<span class="gameLogo pos_13" style="display:block;background-image: url(images/game_193_logo_137x77_EN-US.png);"></span>
											<a href="#" class="room"><span class="link" style="display:block;background-image: url(images/gameSO1_OverlaySprite.png);"></span>
											<span class="status" style="display:block;background-image: url(images/game_StatusSprite_EN-US.png);"></span>
											<span class="c2a" style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;">Play now!</span></a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="categories">
				<?php foreach ($list_category as $key) 
				{ ?>
				<div id="idCategory5" class="contBox gameCat">
					<h2><a data-gtt="Show all games" href="<?php echo base_url();?>games/category/<?php echo $key->id."-".$key->alias?>" title=""><span><?php echo $key->category_name;?></span></a></h2>
					<div class="container">
						<ul style="width: 448px; margin-right:0;">
							<?php foreach ($list_games as $value) {?>
										<?php if($value->category_id  ==  $key->id)
											{?>
							<li class="">
								<div class=" so1_small rating friendsOnline gameId_110">
									<h4><a href="<?php echo base_url();?>games/detail/<?php echo $value->id."-".$value->alias;?>" title=""><span><?php echo $value->name; ?></span></a></h4>
									<div style="background-color: #561c00" class="so1_container">
										<p>Pyramids, pharaohs and the Book of Ra! The mysterious slot machine awaits!</p>
										<dl><dt><span>Playing now</span></dt><dd>500</dd></dl>
										<ul>
											<li>
												<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_small.png);" class="border"></span>
												<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/logosprite_102x54_6.png);" class="gameLogo pos_10"></span>
												<a class="room" href="#"><span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_OverlaySprite.png);" class="link"></span>
												<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_StatusSprite_EN-US.png);" class="status"></span>
												<span style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;" class="c2a">Play now!</span></a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<?php } ?>
							<?php } ?>
						</ul>
					</div>
					<span class="showAll">
						<a href="<?php echo base_url();?>games/category/<?php echo $key->id."-".$key->alias?>">Display all casino games</a></span>
				</div>
				<?php }?>
		</div>
	<div id="featureBox_4" class="featureBox statusSkill7 type_skill7">
		<h3><a target="_blank" href="http://www.skill7.com/web/Display?page=landingpages/aktionen/201008_gametwist/page&p=98896298&lang=en&np=&cid=10988&pid=17&afid=featureBox:4"><span>Become a winner in no time!</span></a></h3>
		<div class="container">
			<div style="background-color: " class="backgroundColor">
				<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/GT_Featurebox_Crossselling_Final.jpg);" class="img"></span>
			</div>
			<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/featureBoxSkill7.png);" class="transparent"></span>
			<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/feature_skill7Status.png);" class="featureStatus"></span>
			<p class="desc">You are just one click away from becoming a real money winner! Do it now!</p>
		</div>
	</div>
	<div id="featureBox_5" class="featureBox  type_news">
		<h3><a target="_self" href="<?php echo base_url();?>taikhoan"><span>My GameTwist</span></a></h3>
		<div class="container">
			<div style="background-color: " class="backgroundColor">
				<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/5156-featurebox_meingametwist.jpg);" class="img"></span>
			</div>
			<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/featureBox.png);" class="transparent"></span>
			<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_StatusSprite_EN-US.png);" class="featureStatus"></span>
			<p class="desc">Your friends, messages, vouchers  and more on one page.</p>
		</div>
	</div>
	<div id="featureBox_5" class="featureBox  type_news">
		<h3><a target="_self" href="<?php echo base_url();?>shop"><span>My GameTwist</span></a></h3>
		<div class="container">
			<div style="background-color: " class="backgroundColor">
				<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/5156-featurebox_meingametwist.jpg);" class="img"></span>
			</div>
			<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/featureBox.png);" class="transparent"></span>
			<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_StatusSprite_EN-US.png);" class="featureStatus"></span>
			<p class="desc">Your friends, messages, vouchers  and more on one page.</p>
		</div>
	</div>
	
	</div>