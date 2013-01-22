<div id="presentation">
	<div id="presentationWrapper">	
		<div class="contentslide" id="contentslide1">					
			<div class="slideshow" id="slideshow1">
				<img alt="image01" src="<?php echo base_url();?>assets/flash_game/images/1.jpg">
				<img alt="image013" src="<?php echo base_url();?>assets/flash_game/images/4.jpg">
				<img alt="image011" src="<?php echo base_url();?>assets/flash_game/images/2.jpg">
				<img alt="image012" src="<?php echo base_url();?>assets/flash_game/images/3.jpg">				
			</div> 
			<div id="contentsl1" class="contentsl">
				<p>Top winners</p>
				<ul class="1ct">
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>					
				</ul>
			</div>
		</div>
		<div class="contentslide" id="contentslide2">
			<div class="slideshow" id="slideshow2">
				<img alt="image010" src="<?php echo base_url();?>assets/flash_game/images/1.jpg">
				<img alt="image015" src="<?php echo base_url();?>assets/flash_game/images/3.jpg">
				<img alt="image014" src="<?php echo base_url();?>assets/flash_game/images/2.jpg">				
				<img alt="image016" src="<?php echo base_url();?>assets/flash_game/images/4.jpg">
			</div> 
			<div id="contentsl2" class="contentsl">
				<p>Top Tournaments</p>
				<ul class="2ct">
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>
					<li><a href="#">lament</a></li>					
				</ul>
			</div>
		</div>
		<div class="contentslide" id="contentslide3">
			<div class="slideshow" id="slideshow3">				
				<img alt="image018" src="<?php echo base_url();?>assets/flash_game/images/2.jpg">
				<img alt="image019" src="<?php echo base_url();?>assets/flash_game/images/3.jpg">
				<img alt="image017" src="<?php echo base_url();?>assets/flash_game/images/1.jpg">
				<img alt="image0100" src="<?php echo base_url();?>assets/flash_game/images/4.jpg">
			</div>
			<div id="contentsl3" class="contentsl">
				<p>Top winners</p>
					<div class="playeronline">
					<p>3333</p>
					<p>Players Online</p>
				</div>
				<div class="countdownct">
					<div id="expired" style="display:none;">
						=
					</div>
					<div id="counter" class="counter">
						<ul class="countdown">					
							<li><div class="countdown_num" id="countdown_sec"></div></li>
						</ul>
					</div>
					
					
				</div>
				
<style type="text/css">
#expired{ width:85px; height: 90px;font-size:85px; color:#fff; position:absolute; top:200px;}
.playeronline{float:left; text-align:center; width:50%;}
.countdownct{float:left; width:50%; text-align:center}
.countdownct li{ border-bottom:none;}
.counter ul.countdown{
	list-style-type: none;
	color: white;
	font-weight: bold;
	text-align: center;
	margin:0;
}
.counter ul.countdown li{
	float: left;
	background: url(digit.png) no-repeat;
	height:53px;
	width: 38px;
	padding-top: 0px;
	list-style:none;
}
.counter ul.countdown li {font-size: 65px}
.counter ul.countdown label{ float:left; width:50px; height:50px}
.counter ul.countdown li div{
	font-size: 15px;
}
.counter ul.countdown li div.countdown_num{
	font-size: 65px; cursor:pointer
}
.counter ul.countdown li.no_countdown{
	padding-top:4px;
	background:transparent;
	height:53px;
	width:38px;
}
</style>
	
<script type="text/javascript">
	/*
		Countdown Timer
		Based on the "Count down until any date script" - By JavaScript Kit (www.javascriptkit.com)
		Author: (c) 2009 Elbert Bautista
		URL: http://www.egTheBlog.com
		Licence : Open Source MIT Licence

	*/
	
	var current="Expired"
	var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")

	function countdown(yr,m,d){
		theyear=yr;themonth=m;theday=d
		var today=new Date()
		var todayy=today.getYear()
		if (todayy < 1000)
		todayy+=1900
		var todaym=today.getMonth()
		var todayd=today.getDate()
		var todayh=today.getHours()
		var todaymin=today.getMinutes()
		var todaysec=today.getSeconds()
		var todaystring=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec
		futurestring=montharray[m-1]+" "+d+", "+yr
		dd=Date.parse(futurestring)-Date.parse(todaystring)
		dday=Math.floor(dd/(60*60*1000*24)*999)
		dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1)
		dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1)
		dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(8*1000))/1000*1)
		if(dsec==-1){
			/*document.getElementById('counter').style.display='none';
			document.getElementById('expired').style.display='block';
			return*/
			//dsec=15;
		}
		else{
			/*document.getElementById('countdown_day').innerHTML=dday;
			document.getElementById('countdown_hour').innerHTML=dhour;
			document.getElementById('countdown_min').innerHTML=dmin;*/
			
			document.getElementById('countdown_sec').innerHTML=dsec;
			setTimeout("countdown(theyear,themonth,theday)",1000)
		}
		$('.countdownct').mouseenter(function(){
				$('#countdown_sec').stop(true);
				document.getElementById('counter').style.display='none';
				document.getElementById('expired').style.display='block';
				return
			})
			$('.countdownct').mouseleave(function(){
				$('#countdown_sec').stop(false);
				document.getElementById('counter').style.display='block';
				document.getElementById('expired').style.display='none';
				return
					
			})
		
	}

			

	var deadline=new Date();
	deadline.setDate(deadline.getDate()+5);
	var deadlineYear = deadline.getYear();
	if (deadlineYear < 1000)
	deadlineYear+=1900
	//enter the count down date using the format year/month/day
	countdown(deadlineYear, deadline.getMonth()+1, deadline.getDate());
	</script>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function() {
		
		$('#slideshow1 img:gt(0)').hide();
		setInterval(function(){
			$('#slideshow1 :first-child').slideDown()
				.next('img').slideUp()
				.end().appendTo('#slideshow1');},
			7000);
			$('#slideshow2 img:gt(0)').hide();
		setInterval(function(){
			$('#slideshow2 :first-child').slideDown()
				.next('#slideshow2 img').slideUp('slow')
				.end().appendTo('#slideshow2');},
			7000);

			$('#slideshow3 img:gt(0)').hide();
		setInterval(function(){
			$('#slideshow3 :first-child').slideDown()
				.next('#slideshow3 img').slideUp()
				.end().appendTo('#slideshow3');},
			7000);
		


	})
  </script>
<div id="nav" class="">
	<ul>
		<li class="btnPlay first active"><a href="<?php echo base_url();?>homepage" data-gtt="Home" title=""><span>Home</span></a></li>
		<li class="btnTourn"><a data-gtt="Tournaments" href="<?php echo base_url();?>giaidau" title=""><span>Tournaments</span></a></li>
		<li class="btnCommunity"><a data-gtt="My GameTwist" href="<?php echo base_url();?>mygametwist" title=""><span>My GameTwist</span></a></li>
		<li class="btnShop"><a data-gtt="Shop" href="<?php echo base_url();?>shop" title=""><span>Shop</span></a></li>
		<li class="btnRules"><a data-gtt="Help" href="<?php echo base_url();?>helps" title=""><span>Help</span></a></li>
	</ul>
	<a id="backToTop" href="#"></a>
</div>

<div id="main">
<div id="container">
				<div id="tipHolder"></div>
				<div id="featureBoxesTop">
					<div id="featureBox_1" class="featureBox  type_game gameId_110">
						<?php foreach ($top1 as $key) 
						{ ?>
						<h3><a target="_self" href="<?php echo base_url();?>helps/detail/<?php echo $key->game_id."-".$key->alias;?>"><span><?php echo $key->name ?></span></a></h3>
						<div class="container">
							<div style="background-color: #561c00" class="backgroundColor">
								<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/featurebox_slots_screenshots_bookofra.jpg);" class="img"></span>
							</div>
							<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/featureBox.png);" class="transparent"></span>
							<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_StatusSprite_EN-US.png);" class="featureStatus"></span>
							<p class="desc">Pyramids, pharaohs and the Book of Ra! The mysterious slot machine awaits!</p>
						</div>
						<?php }?>
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
						
						<ul class="gameList">
							<p class="topGamesDesc">The best and most-loved games in one click.</p>
						<?php foreach ($top_game as $key) 
						{ ?>	
						<li class="item">
							<div class=" so1_medium rating friendsOnline gameId_193">
								<h4><a title="" href="<?php echo base_url();?>games/detail/<?php echo $key->game_id."-".$key->alias;?>"><span><?php echo $key->name ?></span></a></h4>
								<div class="so1_container" style="background-color: #87d2f8">
									<p>Be the first to play all of your cards and become President!</p>
									<dl><dt><span>Playing now</span></dt><dd>31</dd></dl>
									<ul>
										<li>
											<span class="border" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_med.png);"></span>
											<span class="gameLogo pos_13" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_193_logo_137x77_EN-US.png);"></span>
											<a href="#" class="room"><span class="link" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_OverlaySprite.png);"></span>
											<span class="status" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_StatusSprite_EN-US.png);"></span>
											<span class="c2a" style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;">Play now!</span></a>
										</li>
									</ul>
								</div>
							</div>
							<div id="so2overlay" style=" top: -100px; left: -100px; display:none " class="friendsOnline type1">
								<span class="top" style="background-image: url(<?php echo base_url();?>assets/flash_game/images/overlayBackSprite.png?v2);"></span>
								<div id="so2overlayTop">
										<h3><span><?php echo $key->name?></span></h3>
										<div class="gameDesc"><p>12-35-75-9-4 ... <?php echo word_limiter($key->overview,4)?></p></div>
										<p class="gameShot"><img src="<?php echo base_url();?>assets/flash_game/images/game_49_gameshot_113x70.jpg" width="113" height="70" alt=""></p>
										<ul id="so2nav">
												<li class="btnPlay"><a href="#" data-gtt="Play" title=""><span>Play</span></a></li>
												<li class="btnHelp"><a href="#" data-gtt="Rules" title=""><span>Rules</span></a></li>
												<li class="btnStats"><a href="#" data-gtt="Statistics" title=""><span>Statistics</span></a></li>
												<li class="btnInfo"><a href="#" data-gtt="Game Overview" title=""><span>Game Overview</span></a></li>
												<li class="btnMobile"><a href="#" data-gtt="Mobile Games" title=""></a></li>
											</ul>
											<dl><dt>Playing now</dt><dd>82</dd></dl>
											<div id="topGame"></div>
											<div id="so2rating" class=""></div>
											<span class="overlayStatus" style=";background-image: url(<?php echo base_url();?>assets/flash_game/images/game_StatusSprite_EN-US.png);"></span>
											<div class="btnClose">
												<a href="#close" data-gtt="close" title=""><span>close</span></a>
											</div>
										</div>
										<span class="overlayBottom" style="background-image: url(<?php echo base_url();?>assets/flash_game/images/overlayBackSprite.png?v2);"></span>
										<div id="so2overlayBottom">
											<div><p><span class="tournDate"></span>&nbsp;<strong>Jackpot:</strong>&nbsp;<span class="tournPrize"></span></p><a class="formLink" href="#"><span>To the Tournament</span></a>
												
												</div>
											</div><span class="overlayPointer" style="background-image: url(<?php echo base_url();?>assets/flash_game/images/overlayBackSprite.png?v2);"></span>
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
							<li class="item">
								<div class=" so1_small rating friendsOnline gameId_110">
									<h4><a href="<?php echo base_url();?>games/detail/<?php echo $value->game_id."-".$value->alias;?>" title=""><span><?php echo $value->name; ?></span></a></h4>
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
								<div id="so2overlay" style=" top: -100px; left: -50px; display:none " class="friendsOnline type1">
								<span class="top" style="background-image: url(<?php echo base_url();?>assets/flash_game/images/overlayBackSprite.png?v2);"></span>
								<div id="so2overlayTop">
										<h3><span><?php echo $value->name ?></span></h3>
										<div class="gameDesc"><p><?php echo word_limiter($value->overview,6)?></p></div>
										<p class="gameShot"><img src="<?php echo base_url();?>assets/flash_game/images/game_49_gameshot_113x70.jpg" width="113" height="70" alt=""></p>
										<ul id="so2nav">
											<li class="btnPlay"><a href="#" data-gtt="Play" title=""><span>Play</span></a></li>
											<li class="btnHelp"><a href="#" data-gtt="Rules" title=""><span>Rules</span></a></li>
											<li class="btnStats"><a href="#" data-gtt="Statistics" title=""><span>Statistics</span></a></li>
											<li class="btnInfo"><a href="#" data-gtt="Game Overview" title=""><span>Game Overview</span></a></li>
											<li class="btnMobile"><a href="#" data-gtt="Mobile Games" title=""></a></li>
										</ul>
											<dl><dt>Playing now</dt><dd>82</dd></dl>
											<div id="topGame"></div>
											<div id="so2rating" class=""></div>
											<span class="overlayStatus" style=";background-image: url(<?php echo base_url();?>assets/flash_game/images/game_StatusSprite_EN-US.png);"></span>
											<div class="btnClose">
												<a href="#close" data-gtt="close" title=""><span>close</span></a>
											</div>
										</div>
										<span class="overlayBottom" style="background-image: url(<?php echo base_url();?>assets/flash_game/images/overlayBackSprite.png?v2);"></span>
										<div id="so2overlayBottom">
											<div><p><span class="tournDate"></span>&nbsp;<strong>Jackpot:</strong>&nbsp;<span class="tournPrize"></span></p><a class="formLink" href="#"><span>To the Tournament</span></a>
												
												</div>
											</div><span class="overlayPointer" style="background-image: url(<?php echo base_url();?>assets/flash_game/images/overlayBackSprite.png?v2);"></span>
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
	<div id="sideNav"></div>
			<div id="sideBar"></div>
		</div>
			<script type="text/javascript">
							$(document).ready(function(){
								$('#so2overlay').hide();
								
								$('.item').mouseenter(function(){
									$(this).children('#so2overlay').show();
								})
									$('.item').mouseleave(function(){
									$(this).children('#so2overlay').hide();
								})
							})
				</script>