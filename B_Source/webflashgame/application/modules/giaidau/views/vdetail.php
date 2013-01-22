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
<script type="text/javascript">
    $(document).ready(function(){
     $('body').addClass('tournaments_details tournaments_ uc hasSideBar tournStatus_2 noLeaderBoard root chrome, game_uc').removeClass('game_default');
    })
   </script>
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
				<style type="text/css">
					#backgroundHack {
						background-color: #9b06e9;
						color: #ffffff;
					}
					
					#tournDetails,
					#tournDetails h3,
					#tournDetails a,
					#sideBar .tournStartIn {
						color: #ffffff;
					}

					#tournDetails abbr,
					#tournDetails .container,
					#tournDetails h3,
					#gameHeader .date,
					#sideBar .tournStartIn {
						border-color: #ffffff;
					}
				</style>
				<div id="tournamentsDetailsStatus">
					<span class="to1Status typeId typeId0" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/tournSprite.png);clip: rect(0px 65px 65px 0px); top: -10px; left: -10px;"></span>
				</div>
				<div id="backgroundHack"></div>
				<span class="detailsBackground" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/backgroundHackCutted.png);"></span>
				
				<div id="tournamentsDetailsHeader" class="contBox">
					<div id="gameHeader" class="game_8">
						<div class="rating2">
							<span class="gameHeaderStars" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameHeaderStars.png);"></span>
							rating: 2
						</div>
						<span class="gameHeaderLogo" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_8_logo_220x100_EN-US.png);"></span>
						<div class="date">
							<div>Jan<span>12</span></div>
							<strong class="tournCufon">18:00</strong>
						</div>
					</div>
					<div id="gameShot">
						<img alt="Crazy Eights" src="<?php echo base_url();?>assets/flash_game/images/game_8_gameshot_260x160.jpg">
						<dl class="tournCufon">
							<dt>Jackpot</dt>
							<dd><span class="funCurrencyContainer"><span>Twists </span>37.500</span></dd>
						</dl>
					</div>
				</div>
				<div id="tournDetails">
					<div class="contBox tournDetails">
						<h3>Crazy Eights</h3>
						<div class="container" style="height: 120px;">
							<dl>
								<dt class="stake">Stake:</dt>
								<dd class="stake">Free</dd>
								<dt>Start:</dt>
								<dd> <?php echo $list_chitiet->start_date ?><abbr title="Central European Time">CET</abbr></dd>
								<dt>End:</dt>
								<dd><?php echo $list_chitiet->end_date ?> <abbr title="Central European Time">CET</abbr></dd>
								<dt>Status:</dt>
								<dd>Not started</dd>
								<dt>Players:</dt>
								<dd>393</dd>
								<dt>Free space:</dt>
								<dd>607</dd>
								<dt>My status:</dt>
								<dd>Not registered!</dd>
								<dt></dt>
								<dd class="link">								
									<a id="tournamentsReg" href="#"><span>Register now!</span></a>
								</dd>
							</dl>
						</div>
					</div>
					<div class="contBox topJackpot">
						<h3>Share of jackpot</h3>
						<div class="container">
							<div class="item pos_1">
								<h3>1.</h3>
								<strong><span><span class="funCurrencyContainer"><span>Twists </span>15.000</span></span></strong>
							</div>
							<div class="item pos_2">
								<h3>2.</h3>
								<strong><span><span class="funCurrencyContainer"><span>Twists </span>12.500</span></span></strong>
							</div>
							<div class="item pos_3">
								<h3>3.</h3>
								<strong><span><span class="funCurrencyContainer"><span>Twists </span>10.000</span></span></strong>
							</div>
						</div>
					</div>
				</div>
				<div id="subNav" class="light">
					<ul>
						<li id="btnTo3Details" class="active">
							<a rel="ax:/details"><span>Details</span></a>
						</li>
						<li id="btnTo3Rules" class=""><a rel="ax:/rules"><span>Tournament rules</span></a></li>
						<li id="btnTo3Ranking" class="interceptLinks "><a rel="ax:/ranking"><span>Player list</span></a></li>
					</ul>
				</div>
				<style>
					#subNav a{ cursor:poiter;}
				</style>
				<script type="text/javascript">
				$(document).ready(function(){
					$('.content1').show();				
				$('.content2, .content3').hide();
					$('#btnTo3Details').click(function(){
						$(this).addClass('active');
						$(this).parent().parent().parent().children('.content1').show();
						$(this).parent().parent().parent().children('.content2, .content3').hide();
						$(this).parent().children('#btnTo3Rules, #btnTo3Ranking').removeClass('active');
					});
					$('#btnTo3Rules').click(function(){
						$(this).addClass('active');
						$(this).parent().parent().parent().children('.content2').show();
						$(this).parent().parent().parent().children('.content1, .content3').hide();
						$(this).parent().children('#btnTo3Details, #btnTo3Ranking').removeClass('active');
					});
					$('#btnTo3Ranking').click(function(){
						$(this).addClass('active');
						$(this).parent().parent().parent().children('.content3').show();
						$(this).parent().parent().parent().children('.content2, .content1').hide();
						$(this).parent().children('#btnTo3Details, #btnTo3Rules').removeClass('active');
					});
				});
				</script>
				<div class="contentTop"></div>
				<div id="content" class="content1" style="">
					<table width="100%" cellspacing="1" cellpadding="1" border="0">     
						<tbody>         
							<tr>             
								<td>
									<span style="font-weight: bold;"><?php echo $list_chitiet->name_tour ?><a target="_blank" href="#">Twists:</a></span>
								</td>
							</tr>    
						</tbody>
					</table>
					<p></p>
					<table width="100%" cellspacing="1" cellpadding="1" border="0">     
						<tbody>         
							<tr>             
								<td>
									<img width="128" height="178" alt="" src="<?php echo base_url();?>assets/flash_game/images/winnerposition.jpg"></td>             
								<td>             
									<p><?php echo $list_chitiet->detail ?></p>             
								</td>             
							</tr>    
						</tbody>
					</table>
					<p></p>
				</div>
				<div id="content" class="content2" style="display: none;">
					<div class="contBox">
						<h3><span><?php echo $list_chitiet->name_tour ?></span></h3>
						<div class="container" id="tournRules">
							<?php echo $list_chitiet->rules ?>
						</div>
					</div>
				</div>
				<div id="content" class="content3" style="display: none;">
					<div id="tournRanking" class="contBox">
						<h3><span>Tournament details&nbsp;-&nbsp;<?php echo $list_chitiet->name_tour ?></span></h3>
						<div class="container">
							<table class="listTable">
								<colgroup>
									<col class="first">
										<col class="second">
											<col class="third">
												<col class="fourth">
													<col class="fifth">
														<col class="sixth">
															<col class="seventh">
								</colgroup>
								<thead>
									<tr>
										<th class="first">Place</th>
										<th>Players</th>
										<th>Points</th>
										<th>Games</th>
										<th>Won</th>
										<th class="">Lost</th>
										<th class="last">Winnings</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<td class="first"></td>
										<td colspan="5"></td>
										<td class="last"></td>
									</tr>
								</tfoot>
								<tbody>
									<tr class="light">
										<td> - </td>
										<td>saskia2302</td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
									</tr>
									<tr class="dark">
										<td> - </td>
										<td>arabis01</td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
									</tr>
									<tr class="light">
										<td> - </td>
										<td>lefilou01</td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
									</tr>
									<tr class="dark">
										<td> - </td>
										<td>borussenfan83</td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
									</tr>
									
								</tbody>
							</table>
							<ul class="paging">
								<li class="prev inactive"><a data-gtt="Previous page" title=""><span>Previous page</span></a></li>
								<li>
									<ol>
										<li class="active"><a href="#" data-gtt="Page&nbsp;1" title=""><span>Page&nbsp;1</span></a></li>
										<li><a href="#" data-gtt="Page&nbsp;2" title=""><span>Page&nbsp;2</span></a></li>
										<li><a href="#" data-gtt="Page&nbsp;3" title=""><span>Page&nbsp;3</span></a></li>
										<li><a href="#" data-gtt="Page&nbsp;4" title=""><span>Page&nbsp;4</span></a></li>
										<li><a href="#" data-gtt="Page&nbsp;5" title=""><span>Page&nbsp;5</span></a></li>
										<li><a href="#" data-gtt="Page&nbsp;6" title=""><span>Page&nbsp;6</span></a></li>
										<li><a href="#" title=""><span>Page&nbsp;7</span></a></li>
										<li><a href="#" title=""><span>Page&nbsp;8</span></a></li>
										<li><a href="#" title=""><span>Page&nbsp;9</span></a></li>
										<li><a href="#" data-gtt="Page&nbsp;10" title=""><span>Page&nbsp;10</span></a></li>
										<li><a href="#" title=""><span>Page&nbsp;11</span></a></li>
										<li><a href="#" title=""><span>Page&nbsp;12</span></a></li>										
									</ol>
								</li>
								<li class="next inactive">
									<a href="#" data-gtt="Next page" title=""><span>Next page</span></a>
								</li>
								<li class="total"><span>1&nbsp;-&nbsp;20&nbsp;of&nbsp;395</span></li>
							</ul>
						</div>
					</div>
				</div>			
				<div class="contentBottom"></div>
			</div>
			<div id="sideNav"></div>
			<div id="sideBar">
				<script type="text/javascript">
				window.addEvent('load', function () {
					$('sideBar').getElements('input[type="text"][title], input[type="password"][title]').each(function (item) {
						if (item.value == '')																							   
							new OverText(item);
					});
				});
		</script>
			<div id="tournamentSignOn" class="">
				<div class="contBox">	
					<div class="countdown tournStartCounter">
						<p class="tournStartIn">Begins in:</p>
						<p id="countdown">31:25:07</p>
					</div>
					<div class="buttonHolder">
						<button id="landingSend" class="formButton fbSubmit"><span>Register now!</span></button>
					</div>
				</div>
			</div>
			<div id="trust" class="contBox">
				<h3>Simple &amp; Secure</h3>
				<div class="container">
					<div class="trust">
					</div>
				</div>
			</div>
		</div>
	</div>