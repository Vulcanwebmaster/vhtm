<div id="container">
				<div id="tipHolder"></div>
				<div id="subNav">
				<ul>
					<li id="now" class="active "><a href="/web/Tournaments"><span>current</span></a></li>
					<li id="past" class=""><a href="/web/Tournaments?display=past"><span>past</span></a></li>
					<li id="mine" class=""><a href="/web/Tournaments-ShowMine"><span>My tournaments</span></a></li>
					<li id="create" class=""><a href="/web/Tournaments-Add"><span>Create tournament</span></a></li>
				</ul>
			</div>
			<div id="tournContainer">
				<div class="helperTopRight"></div>
				<div class="helperBottomLeft"></div><div class="helperBottomRight"></div>
				<div class="contBox tournList tournSect" id="tournToday">
					<div class="tournHelper"><h3><span>Tournaments today</span></h3>
					<div class="container">
						<ul style="width: 588px;margin-right:0;">
							<?php foreach ($today as $item) 
							{ ?>
							<li class="">
								
								<div class="to1  rating3  medium gameId_53 tournId_32166 tournStatus_2">
									<h4><a title="" href="/web/Tournaments-Details?id_tourn=32166"><span><?php echo $key->name ?></span></a></h4>
									<div class="to1_container">
										<span class="backgroundColor" style="background-color: #ffdd00"></span>
										<span class="to1_logo_3 to1_pos_13"></span>
										<span class="logo" style="display:block;background-image: url(http://static8.greentube.com/xsl_gamebase/assets/game_53/logo_137x77/game_53_logo_137x77_EN-US.png);"></span>
										<span class="border" style="display:block;background-image: url(images//gameSO1_med.png);"></span><a href="/web/Tournaments-Details?id_tourn=32166" class=""><strong class="static switchPrize">
										<span>Twists 37.500</span></strong>
										<dl style="color: #000000"><dt><span>Playing now</span></dt><dd>111</dd></dl>
										<span class="link" style="display:block;background-image: url(images//gameTO1_OverlaySprite.png);"></span>
										<span class="c2a" style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;">
										<span class="register">Register now!</span></span>
										<span class="to1Status typeId0" style="display:block;background-image: url(images//tournSprite.png);clip: rect(0px 65px 65px 0px); top: -10px; left: -10px;"></span>
										<p style="color: #000000">08.Jan&nbsp;20:00</p></a>
										<div class="desc"><span class="label">Start: </span>08.01.2013 20:00 <abbr title="Central European Time">CET</abbr><br>
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
			<div class="contBox tournList tournSect" id="tournWeek1">
				<div class="tournHelper">
					<h3><span>Tournaments this week</span></h3>
					<div class="container">
						<ul style="width: 1176px;margin-right:0;">
							<?php foreach ($week as $item) 
							{ ?>
							<li class="">
								<div class="to1  rating3  medium gameId_29 tournId_32168 tournStatus_2">
									<h4><a title="" href="#"><span><?php echo $item->name ?></span></a></h4>
									<div class="to1_container">
										<span class="backgroundColor" style="background-color: #AABB22"></span>
										<span class="to1_logo_2 to1_pos_9"></span>
										<span class="logo" style="display:block;background-image: url(http://static8.greentube.com/xsl_gamebase/assets/game_29/logo_137x77/game_29_logo_137x77_EN-US.png);"></span>
										<span class="border" style="display:block;background-image: url(images//gameSO1_med.png);"></span><a href="/web/Tournaments-Details?id_tourn=32168" class="">
										<strong class="static switchPrize"><span>Twists 11.200</span></strong>
										<dl style="color: #000000"><dt><span>Playing now</span></dt><dd>14</dd></dl>
										<span class="link" style="display:block;background-image: url(images//gameTO1_OverlaySprite.png);"></span>
										<span class="c2a" style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;">
										<span class="register">Register now!</span></span>
										<span class="to1Status typeId1" style="display:block;background-image: url(images//tournSprite.png);clip: rect(0px 140px 65px 75px); top: -10px; left: -85px;"></span>
										<p style="color: #000000">09.Jan&nbsp;19:00</p></a>
										<div class="desc">
											<span class="label">Start: </span><?php echo $item->start_date ?><abbr title="Central European Time">CET</abbr><br><span class="label">Stake: </span>
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
						</ul>
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
			<div class="contBox tournList tournSect" id="tournWeek2">
				<div class="tournHelper">
					<h3><span>Tournaments next week</span></h3>
					<div style="height:243px;" class="container">
						<ul class="slideimage" style="width: 1176px;margin-right:0; position:absolute">
							<?php foreach ($nextweek as $item) 
							{ ?>
							<li class="">
								<div class="to1  rating3  medium gameId_20 tournId_32180 tournStatus_2">
									<h4><a title="" href="/web/Tournaments-Details?id_tourn=32180"><span><?php echo $item->title;?></span></a></h4>
									<div class="to1_container">
										<span class="backgroundColor" style="background-color: #F4D454"></span>
										<span class="to1_logo_1 to1_pos_0"></span>
										<span class="logo" style="display:block;background-image: url(http://static8.greentube.com/xsl_gamebase/assets/game_20/logo_137x77/game_20_logo_137x77_EN-US.png);"></span>
										<span class="border" style="display:block;background-image: url(images//gameSO1_med.png);"></span>
										<a href="/#" class=""><strong class="static switchPrize"><span>Twists 18.400</span></strong>
										<dl style="color: #000000"><dt><span>Playing now</span></dt><dd>23</dd></dl>
										<span class="link" style="display:block;background-image: url(images//gameTO1_OverlaySprite.png);"></span>
										<span class="c2a" style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;">
										<span class="register">Register now!</span></span>
										<span class="to1Status typeId1" style="display:block;background-image: url(images//tournSprite.png);clip: rect(0px 140px 65px 75px); top: -10px; left: -85px;"></span>
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
						<?php } ?>
						</ul>
					</div>
				</div>
				<ul class="paging">
					<li class="prev inactive"><a title="" data-gtt="Previous page">Previous page</a></li>
					<ol>
						<li class="page1 active"><a title="" data-gtt="Page 1">Page 1</a></li>
						<li class="page2"><a title="" data-gtt="Page 2">Page 2</a></li>
					</ol>
					<li class="next inactive"><a title="" data-gtt="Next page">Next page</a></li>
				</ul>
			</div>
		</div>
	</div>