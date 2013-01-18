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
					<span style="display:block;background-image: url(images/tournSprite.png);clip: rect(0px 65px 65px 0px); top: -10px; left: -10px;" class="to1Status typeId typeId0"></span>
				</div>
				<div id="backgroundHack"></div>
				<span style="display:block;background-image: url(images/backgroundHackCutted.png);" class="detailsBackground"></span>
				
				<div class="contBox" id="tournamentsDetailsHeader">
					<div class="game_8" id="gameHeader">
						<div class="rating2">
							<span style="display:block;background-image: url(images/gameHeaderStars.png);" class="gameHeaderStars"></span>
							rating: 2
						</div>
						<span style="display:block;background-image: url(images/game_8_logo_220x100_EN-US.png);" class="gameHeaderLogo"></span>
						<div class="date">
							<div>Jan<span>12</span></div>
							<strong class="tournCufon">18:00</strong>
						</div>
					</div>
					<div id="gameShot">
						<img src="images/game_8_gameshot_260x160.jpg" alt="Crazy Eights">
						<dl class="tournCufon">
							<dt>Jackpot</dt>
							<dd><span class="funCurrencyContainer"><span>Twists </span>37.500</span></dd>
						</dl>
					</div>
				</div>
				<div id="tournDetails">
					<div class="contBox tournDetails">
						<h3>Crazy Eights</h3>
						<div style="height: 120px;" class="container">
							<dl>
								<dt class="stake">Stake:</dt>
								<dd class="stake">Free</dd>
								<dt>Start:</dt>
								<dd>12.01.2013 18:00 <abbr title="Central European Time">CET</abbr></dd>
								<dt>End:</dt>
								<dd>12.01.2013 19:00 <abbr title="Central European Time">CET</abbr></dd>
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
									<a href="#" id="tournamentsReg"><span>Register now!</span></a>
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
				<div class="light" id="subNav">
					<ul>
						<li class="active" id="btnTo3Details">
							<a rel="ax:/details"><span>Details</span></a>
						</li>
						<li class="" id="btnTo3Rules"><a rel="ax:/rules"><span>Tournament rules</span></a></li>
						<li class="interceptLinks " id="btnTo3Ranking"><a rel="ax:/ranking"><span>Player list</span></a></li>
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
				<div class="content1" id="content">
					<table width="100%" cellspacing="1" cellpadding="1" border="0">     
						<tbody>         
							<tr>             
								<td>
									<span style="font-weight: bold;">This is about honor and piles of <a href="#" target="_blank">Twists:</a></span>
								</td>
							</tr>    
						</tbody>
					</table>
					<p></p>
					<table width="100%" cellspacing="1" cellpadding="1" border="0">     
						<tbody>         
							<tr>             
								<td>
									<img width="128" height="178" src="images/winnerposition.jpg" alt=""></td>             
								<td>             
									<p>The first three players will receive 15,000, 12,500 and 10,000 Twists respectively. <br>
								 May the best player win!</p>             
								</td>             
							</tr>    
						</tbody>
					</table>
					<p></p>
				</div>
				<div class="content2" id="content" style="display: none;">
					<div class="contBox">
						<h3><span>Crazy Eights</span></h3>
						<div id="tournRules" class="container">
							<p></p>
							<p><strong>Winning a Tournament<br></strong></p>
							<ul>
								<li>Tournament winners are notified&nbsp;by e-mail.</li>
								<li>Please make sure the e-mail address you entered in the&nbsp;<a href="#" target="_blank">Settings</a> is correct, so that you receive notification of your win.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="content3" id="content" style="display: none;">
					<div class="contBox" id="tournRanking">
						<h3><span>Tournament details&nbsp;-&nbsp;Crazy Eights</span></h3>
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
								<li class="prev inactive"><a title="" data-gtt="Previous page"><span>Previous page</span></a></li>
								<li>
									<ol>
										<li class="active"><a title="" data-gtt="Page&nbsp;1" href="#"><span>Page&nbsp;1</span></a></li>
										<li><a title="" data-gtt="Page&nbsp;2" href="#"><span>Page&nbsp;2</span></a></li>
										<li><a title="" data-gtt="Page&nbsp;3" href="#"><span>Page&nbsp;3</span></a></li>
										<li><a title="" data-gtt="Page&nbsp;4" href="#"><span>Page&nbsp;4</span></a></li>
										<li><a title="" data-gtt="Page&nbsp;5" href="#"><span>Page&nbsp;5</span></a></li>
										<li><a title="" data-gtt="Page&nbsp;6" href="#"><span>Page&nbsp;6</span></a></li>
										<li><a title="" href="#"><span>Page&nbsp;7</span></a></li>
										<li><a title="" href="#"><span>Page&nbsp;8</span></a></li>
										<li><a title="" href="#"><span>Page&nbsp;9</span></a></li>
										<li><a title="" data-gtt="Page&nbsp;10" href="#"><span>Page&nbsp;10</span></a></li>
										<li><a title="" href="#"><span>Page&nbsp;11</span></a></li>
										<li><a title="" href="#"><span>Page&nbsp;12</span></a></li>										
									</ol>
								</li>
								<li class="next inactive">
									<a title="" data-gtt="Next page" href="#"><span>Next page</span></a>
								</li>
								<li class="total"><span>1&nbsp;-&nbsp;20&nbsp;of&nbsp;395</span></li>
							</ul>
						</div>
					</div>
				</div>			
				<div class="contentBottom"></div>
			</div>