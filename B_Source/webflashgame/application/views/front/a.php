<div id="container">
	<div id="tipHolder"></div>
	<div id="backgroundHack">

	</div>
	<span class="detailsBackground" style="display:block;background-image: url(http://static1.greentube.com/xsl_gamebase/_gametwist_2010/imgs/backgroundHack.png);"></span><h2>Poker</h2>
	<style type="text/css">
		.featureBox.statusSkill7 {
		display: none;
		}

		#backgroundHack,
		body.games_details #container h1,
		body.games_details #container h1 span {
		background-color: #27567F;
		color: #ffffff;
		}
		body.games_details #container #topWinner h3,
		body.games_details #container #relatedGames h3,
		body.games_details #container #topWinner table td,
		body.games_details #container #topWinner table th,
		body.games_details #container #topWinner a,
		#playNow h3,
		#playNowSideBar h3,
		#playNow,
		#playNowSideBar {
		color: #ffffff;
		}
		body.games_details #container #topWinner h3,
		body.games_details #container #topWinner .container,
		body.games_details #container #relatedGames h3,
		body.games_details #container #topWinner,
		body.games_details #container #relatedGames .gameCat,
		body.games_details #container #topWinner table th,
		#playNow h3,
		#playNowSideBar h3 {
		border-color: #ffffff;
		}

		body.games_details #container #topWinner h3,
		body.games_details #container #relatedGames h3,
		body.games_details #container #topWinner,
		body.games_details #container #topWinner table th {
		/*text-shadow: 0 1px 3px #333;*/
		}

		body.games_details .gameList a {
		color: #ffffff;
		}
		.ie #gameHeader .room,
		.ie #tournDetails dd.link a {
		color: #ffffff;f
		}
	</style>
	<script type="text/javascript">
		window.addEvent('domready', function() {
			gamesDetailsContentLoader = new GT.Address($('content'), {
				onRequestComplete : function() {
					var c = $('content');
					if (c) {
						if (USE_CUFON && ("undefined" !== typeof Cufon)) {
							//Cufon.replace(c.getElements('h3, h4'));
							addCufon();
						}
						$$("table.listTable tbody > tr:nth-child(even), table.formTable tbody > tr:nth-child(even)").addClass("even");
						$$("table.listTable tbody > tr:nth-child(odd), table.formTable tbody > tr:nth-child(odd)").addClass("odd");
						window.fx = new Fx.SmoothScroll({
							offset : {
								x : 0,
								y : -44
							},
							links : '#content a'
						}, c);
						c.getElements('a.profile').each(function(el) {
							el.addEvent('click', function(event) {
								event.preventDefault();
								popupWindowNew(650, 550, "scrollbars=yes", el);
							});
						});

						new GT.Tips($$('#content a[data-gtt]'));

						Mediabox.scanPage();
						downloadMobileGames();

					}
				},
				onRequestSuccess : function() {
					if (IE) {
						$$(".listTable tbody > tr:nth-child(even),.formTable tbody > tr:nth-child(even)").addClass("even");
						$$(".listTable tbody > tr:nth-child(odd),.formTable tbody > tr:nth-child(odd)").addClass("odd");
					}
					$$(".listTable td:first-child,.formTable td:first-child,.listTable th:first-child,.formTable th:first-child").addClass("first");
					$$(".listTable td:last-child,.formTable td:last-child,.listTable th:last-child,.formTable th:last-child").addClass("last");
				}
			});
			downloadMobileGames();
		});

		function downloadMobileGames() {
			if ($('downloadMobileGame')) {
				$('downloadMobileGame').addEvent('click', function() {
					// openWindow('/shop/shop_mobilegames.asp?id_game='+21,'mobile',"scrollbars=yes",'800','600');
					top.location.replace('/shop/shop_mobilegames.asp?id_game=' + 21);

				});
			}
		}

	</script>
	<div class="contBox" id="gamesDetailsHeader">
		<div class="container">
			<div id="gameHeader" class="game_21">
				<div class="rating5">
					<span class="gameHeaderStars" style="display:block;background-image: url(http://static1.greentube.com/xsl_gamebase/_gametwist_2010/imgs/gameHeaderStars.png);"></span>rating: 5
				</div><span class="gameHeaderLogo" style="display:block;background-image: url(http://static6.greentube.com/xsl_gamebase/assets/game_21/logo_220x100/game_21_logo_220x100_EN.png);"></span>
				<dl>
					<dt>
						Playing now:
					</dt>
					<dd>
						277
					</dd>
					<dt>
						Category:
					</dt>
					<dd>
						Card Games
					</dd>
					<dt>
						Min. no. of players:
					</dt>
					<dd>
						2
					</dd>
					<dt>
						Duration:
					</dt>
					<dd>
						~ 1 min.
					</dd>
				</dl><a class="room" href="http://www.gametwist.fr/Card-Games/Poker/Play.html?email=1"><span>Play Poker online!</span></a>
			</div>
			<div id="gameShot">
				<a title="" href="http://static6.greentube.com/xsl_gamebase/assets/game_21/gameshot_780x480/game_21_gameshot_780x480.jpg" rel="lightbox[set1]" data-gtt="Poker"><img alt="Poker" src="Play%20Poker%20at%20GameTwist_files/game_21_gameshot_260x160.jpg"></a>
			</div>
		</div>
	</div>
	<div id="relatedGames" class="contBox">
		<h3><span>Popular games</span></h3>
		<div class="container gameCat">
			<ul class="gameList">
				<li class="related">
					<div class="noOverlay so1_medium rating friendsOnline gameId_108">
						<h4><a title="" href="http://www.gametwist.fr/Casino/Dolphin%E2%80%99s-Pearl%E2%84%A2-Deluxe/"><span>Dolphin’s Pearl™ Deluxe</span></a></h4>
						<div class="so1_container" style="background-color: #001884">
							<p></p>
							<dl>
								<dt>
									<span>Playing now</span>
								</dt>
								<dd>
									232
								</dd>
							</dl>
							<ul>
								<li>
									<span class="border" style="display:block;background-image: url(http://static1.greentube.com/xsl_gamebase/_gametwist_2010/imgs/gameSO1_med.png);"></span><span class="gameLogo pos_8" style="display:block;background-image: url(http://static6.greentube.com/xsl_gamebase/assets/game_108/logo_137x77/game_108_logo_137x77_EN.png);"></span><a href="http://www.gametwist.fr/Casino/Dolphin%E2%80%99s-Pearl%E2%84%A2-Deluxe/Play.html?email=1" class="room"><span class="link" style="display:block;background-image: url(http://static1.greentube.com/xsl_gamebase/_gametwist_2010/imgs/gameSO1_OverlaySprite.png);"></span><span class="status" style="display:block;background-image: url(http://static5.greentube.com/xsl_gamebase/_gametwist_2010/imgs/game_StatusSprite_EN.png);"></span><span class="c2a" style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;">Play now!</span></a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="related">
					<div class="noOverlay so1_medium rating friendsOnline gameId_97">
						<h4><a title="" href="http://www.gametwist.fr/Casino/Fruits-&amp;-Sevens/"><span>Fruits &amp; Sevens</span></a></h4>
						<div class="so1_container" style="background-color: #373131">
							<p></p>
							<dl>
								<dt>
									<span>Playing now</span>
								</dt>
								<dd>
									178
								</dd>
							</dl>
							<ul>
								<li>
									<span class="border" style="display:block;background-image: url(http://static1.greentube.com/xsl_gamebase/_gametwist_2010/imgs/gameSO1_med.png);"></span><span class="gameLogo pos_17" style="display:block;background-image: url(http://static7.greentube.com/xsl_gamebase/assets/game_97/logo_137x77/game_97_logo_137x77_EN.png);"></span><a href="http://www.gametwist.fr/Casino/Fruits-&amp;-Sevens/Play.html?email=1" class="room"><span class="link" style="display:block;background-image: url(http://static1.greentube.com/xsl_gamebase/_gametwist_2010/imgs/gameSO1_OverlaySprite.png);"></span><span class="status" style="display:block;background-image: url(http://static5.greentube.com/xsl_gamebase/_gametwist_2010/imgs/game_StatusSprite_EN.png);"></span><span class="c2a" style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;">Play now!</span></a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="related">
					<div class="noOverlay so1_medium rating friendsOnline gameId_49">
						<h4><a title="" href="http://www.gametwist.fr/Arcade-&amp;-Others/Bingo/"><span>Bingo</span></a></h4>
						<div class="so1_container" style="background-color: #fff5b3">
							<p></p>
							<dl>
								<dt>
									<span>Playing now</span>
								</dt>
								<dd>
									67
								</dd>
							</dl>
							<ul>
								<li>
									<span class="border" style="display:block;background-image: url(http://static1.greentube.com/xsl_gamebase/_gametwist_2010/imgs/gameSO1_med.png);"></span><span class="gameLogo pos_9" style="display:block;background-image: url(http://static7.greentube.com/xsl_gamebase/assets/game_49/logo_137x77/game_49_logo_137x77_EN.png);"></span><a href="http://www.gametwist.fr/Arcade-&amp;-Others/Bingo/Play.html?email=1" class="room"><span class="link" style="display:block;background-image: url(http://static1.greentube.com/xsl_gamebase/_gametwist_2010/imgs/gameSO1_OverlaySprite.png);"></span><span class="status" style="display:block;background-image: url(http://static5.greentube.com/xsl_gamebase/_gametwist_2010/imgs/game_StatusSprite_EN.png);"></span><span class="c2a" style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;">Play now!</span></a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="related">
					<div class="noOverlay so1_medium rating friendsOnline gameId_30">
						<h4><a title="" href="http://www.gametwist.fr/Card-Games/Rummy/"><span>Rummy</span></a></h4>
						<div class="so1_container" style="background-color: #ffa4a4">
							<p></p>
							<dl>
								<dt>
									<span>Playing now</span>
								</dt>
								<dd>
									970
								</dd>
							</dl>
							<ul>
								<li>
									<span class="border" style="display:block;background-image: url(http://static1.greentube.com/xsl_gamebase/_gametwist_2010/imgs/gameSO1_med.png);"></span><span class="gameLogo pos_10" style="display:block;background-image: url(http://static6.greentube.com/xsl_gamebase/assets/game_30/logo_137x77/game_30_logo_137x77_EN.png);"></span><a href="http://www.gametwist.fr/Card-Games/Rummy/Play.html?email=1" class="room"><span class="link" style="display:block;background-image: url(http://static1.greentube.com/xsl_gamebase/_gametwist_2010/imgs/gameSO1_OverlaySprite.png);"></span><span class="status" style="display:block;background-image: url(http://static5.greentube.com/xsl_gamebase/_gametwist_2010/imgs/game_StatusSprite_EN.png);"></span><span class="c2a" style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;">Play now!</span></a>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div id="subNav">
		<ul>
			<li id="btnSo3Details" class="active">
				<a rel="ax:/info" href="http://www.gametwist.fr/Card-Games/Poker/"><span>Game Overview</span></a>
			</li>
			<li id="btnSo3Stat">
				<a href="#stats" rel="ax:/stats"><span>Statistics</span></a>
			</li>
			<li id="btnSo3Rules">
				<a rel="ax:/help" href="http://www.gametwist.fr/Card-Games/Poker/Rules.html"><span>Rules</span></a>
			</li>
		</ul>
	</div><div class="contentTop"></div>
	<div id="content">
		<div class="contBox">
			<div class="container">
				<p></p>
				<p class="MsoNoSpacing" style="margin: 0cm 0cm 0pt">
					<span style="font-family: &quot;Arial&quot;,&quot;sans-serif&quot;; font-size: 9pt; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: DE-AT; mso-bidi-font-size: 7.5pt" lang="EN-GB">Anyone can try his/her hand at <b>Poker</b>. So why not have a crack at the world’s most popular card game. At GameTwist you can choose from the following variants: <b>Texas Hold’Em, Omaha &amp; 5 Card Draw</b>. <o:p></o:p></span>
				</p>
				<p class="MsoNoSpacing" style="margin: 0cm 0cm 0pt">
					<span style="font-family: &quot;Arial&quot;,&quot;sans-serif&quot;; font-size: 9pt; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: DE-AT; mso-bidi-font-size: 7.5pt" lang="EN-GB">
						<o:p>
							&nbsp;
						</o:p></span>
				</p>
				<p class="MsoNoSpacing" style="margin: 0cm 0cm 0pt">
					<span style="font-family: &quot;Arial&quot;,&quot;sans-serif&quot;; font-size: 9pt; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: DE-AT; mso-bidi-font-size: 7.5pt" lang="EN-GB">Up
						to 10 players may play at a single Poker table and all pay into a
						common pot. The player with the best hand wins the pot (stakes). There
						is no fixed number of rounds and each player can play at his/her own
						discretion. At the start of a round each player receives 2 cards. He/she
						must then decide whether the cards form a good foundation on which to
						build a hand. <o:p></o:p></span>
				</p>
				<p class="MsoNoSpacing" style="margin: 0cm 0cm 0pt">
					<span style="font-family: &quot;Arial&quot;,&quot;sans-serif&quot;; font-size: 9pt; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: DE-AT; mso-bidi-font-size: 7.5pt" lang="EN-GB">
						<o:p>
							&nbsp;
						</o:p></span>
				</p>
				<p class="MsoNoSpacing" style="margin: 0cm 0cm 0pt">
					<span style="font-family: &quot;Arial&quot;,&quot;sans-serif&quot;; font-size: 9pt; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: DE-AT; mso-bidi-font-size: 7.5pt" lang="EN-GB">Every
						player can match the previous bet, raise or fold. At the end of the
						round the player with the best hand wins the pot and a new round begins.
						A round consists of 4 betting rounds. Depending on the variant played,
						the players have various opportunities to build their hands.<o:p></o:p></span>
				</p><p></p>
			</div>
		</div>
	</div><div class="contentBottom"></div>
	<div id="stats">
		<div class="contBox">
			<h3><span>Statistics</span></h3>
			<div class="container">
				<p>
					<a href="http://www.gametwist.fr/web/Stats?id_game=21">Statistics</a>
				</p>
			</div>
		</div>
	</div>
</div>
<div id="sideNav"></div>
<div id="sideBar">
	<script type="text/javascript">
		window.addEvent('load', function() {
			$('sideBar').getElements('input[type="text"][title], input[type="password"][title]').each(function(item) {
				if (item.value == '')
					new OverText(item);
			});
		});
	</script>
	<div class="contBox register_form">
		<h3>Register now!</h3>
		<form action="/web/Register" id="fnRegister" class="container" name="fnRegister" method="post" enctype="application/x-www-form-urlencoded">
			<table>
				<tbody>
					<tr>
						<td>
						<input class="formField ffInput" name="nick" id="nick_reg" title="Nickname" type="text">
						<label for="nick_reg" style="line-height: normal; position: absolute; cursor: text; left: 14px; top: 48px;" class="overTxtLabel">Nickname</label></td><td>
						<input class="formField ffInput" name="pass" id="pass_reg" title="Password" type="password">
						<label for="pass_reg" style="line-height: normal; position: absolute; cursor: text; left: 164px; top: 48px;" class="overTxtLabel">Password</label></td>
					</tr>
					<tr>
						<td>
						<input class="formField ffInput" name="email" id="email" title="Your e-mail" type="text">
						<label for="email" style="line-height: normal; position: absolute; cursor: text; left: 14px; top: 79px;" class="overTxtLabel">Your e-mail</label></td><td>
						<input class="formField ffInput" name="pass_conf" id="pass_conf" title="Repeat password" type="password">
						<label for="pass_conf" style="line-height: normal; position: absolute; cursor: text; left: 164px; top: 79px;" class="overTxtLabel">Repeat password</label></td>
					</tr>
					<tr>
						<td colspan="2">
						<div>
							Important messages about the system and game results will be sent to this e-mail address.
						</div></td>
					</tr>
					<tr>
						<td><img alt="captcha image" class="captcha" src="Play%20Poker%20at%20GameTwist_files/a" border="0"></td><td>
						<input class="formField ffInput" name="code" id="securecode" title="Security code" type="text">
						<label for="securecode" style="line-height: normal; position: absolute; cursor: text; left: 164px; top: 158px;" class="overTxtLabel">Security code</label></td>
					</tr>
					<tr>
						<td colspan="2">
						<input name="agb" id="agb" value="1" class="ffCheckbox" tabindex="5" type="checkbox">
						I accept the <a class="footer_info" target="_blank" href="http://www.gametwist.fr/web/Help?xpf=agb&amp;id_article=4462">General Terms &amp; Conditions</a></td>
					</tr>
					<tr>
						<td colspan="2">
						<input name="newsletter" id="newsletter" value="1" class="ffCheckbox" checked="checked" tabindex="6" type="checkbox">
						<label for="newsletter">Yes, I would like to receive information about new games, my winnings and interesting news via e-mail for free.*</label></td>
					</tr>
					<tr>
						<td colspan="2">
						<button id="landingSend" class="formButton fbSubmit" name="submit" type="submit">
							<span>Register now!</span>
						</button></td>
					</tr>
					<tr>
						<td colspan="2">
						<div>
							* You will receive information about games, promotions and features on our sites. This consent may be revoked at any time.
						</div></td>
					</tr>
				</tbody>
			</table>

		</form>
	</div>
	<div id="tagCloud" class="contBox">
		<h3><span>Card Games</span></h3>
		<div class="container">
			<ul>
				<li>
					<a style="font-size: 12px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/31/">31 </a>
				</li>
				<li>
					<a style="font-size: 11px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/66/">66 </a>
				</li>
				<li>
					<a style="font-size: 12px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Ace-Solitaire/">Ace Solitaire </a>
				</li>
				<li>
					<a style="font-size: 14px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Bauernschnapsen/">Bauernschnapsen </a>
				</li>
				<li>
					<a style="font-size: 16px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Belote/">Belote </a>
				</li>
				<li>
					<a style="font-size: 12px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Blackjack-Duel/">Blackjack Duel </a>
				</li>
				<li>
					<a style="font-size: 11px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Bridge/">Bridge </a>
				</li>
				<li>
					<a style="font-size: 14px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Brisca/">Brisca </a>
				</li>
				<li>
					<a style="font-size: 13px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Buraco/">Buraco </a>
				</li>
				<li>
					<a style="font-size: 12px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Canasta/">Canasta </a>
				</li>
				<li>
					<a style="font-size: 14px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Chinch%C3%B3n/">Chinchón </a>
				</li>
				<li>
					<a style="font-size: 14px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Crazy-Eights/">Crazy Eights </a>
				</li>
				<li>
					<a style="font-size: 13px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Doppelkopf/">Doppelkopf </a>
				</li>
				<li>
					<a style="font-size: 14px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/French-Tarot/">French Tarot </a>
				</li>
				<li>
					<a style="font-size: 11px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Gin-Rummy/">Gin Rummy </a>
				</li>
				<li>
					<a style="font-size: 14px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Hearts/">Hearts </a>
				</li>
				<li>
					<a style="font-size: 12px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Jass/">Jass </a>
				</li>
				<li>
					<a style="font-size: 15px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Jolly/">Jolly </a>
				</li>
				<li>
					<a style="font-size: 12px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Marias/">Marias </a>
				</li>
				<li>
					<a style="font-size: 13px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Mus/">Mus </a>
				</li>
				<li>
					<a style="font-size: 11px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Pesten/">Pesten </a>
				</li>
				<li>
					<a style="font-size: 20px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Poker/">Poker </a>
				</li>
				<li>
					<a style="font-size: 10px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Pr%C3%A9f%C3%A9rence/">Préférence </a>
				</li>
				<li>
					<a style="font-size: 19px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/President/">President </a>
				</li>
				<li>
					<a style="font-size: 11px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Prophet/">Prophet </a>
				</li>
				<li>
					<a style="font-size: 13px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Pyramids/">Pyramids </a>
				</li>
				<li>
					<a style="font-size: 19px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Rummy/">Rummy </a>
				</li>
				<li>
					<a style="font-size: 14px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Schnapsen/">Schnapsen </a>
				</li>
				<li>
					<a style="font-size: 14px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Scopa/">Scopa </a>
				</li>
				<li>
					<a style="font-size: 13px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Sergeant-Major/">Sergeant Major </a>
				</li>
				<li>
					<a style="font-size: 11px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Sheepshead/">Sheepshead </a>
				</li>
				<li>
					<a style="font-size: 14px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Skat/">Skat </a>
				</li>
				<li>
					<a style="font-size: 15px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Solitaire/">Solitaire </a>
				</li>
				<li>
					<a style="font-size: 11px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Solitaire-Poker/">Solitaire Poker </a>
				</li>
				<li>
					<a style="font-size: 13px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Spider-Solitaire/">Spider Solitaire </a>
				</li>
				<li>
					<a style="font-size: 14px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Spite-and-Malice/">Spite and Malice </a>
				</li>
				<li>
					<a style="font-size: 13px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Tarock/">Tarock </a>
				</li>
				<li>
					<a style="font-size: 13px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Tarock-20/">Tarock 20 </a>
				</li>
				<li>
					<a style="font-size: 10px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Ulti/">Ulti </a>
				</li>
				<li>
					<a style="font-size: 12px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="http://www.gametwist.fr/Card-Games/Zs%C3%ADroz%C3%A1s/">Zsírozás </a>
				</li>
			</ul>
			<div class="footer">
				<a class="more" href="http://www.gametwist.fr/Card-Games/">show all</a>
			</div>
		</div>
	</div>
	<div class="featureBox statusSkill7 type_skill7" id="featureBox_1">
		<h3><a href="http://www.skill7.com%7B$dotnetappfolder%7D/Bridge?idr=10279" target="_blank"><span>Get ready!</span></a></h3>
		<div class="container">
			<div class="backgroundColor" style="background-color: ">
				<span class="img" style="display:block;background-image: url(http://static1.greentube.com/xsl_gamebase/_gametwist_2010/imgs/featureBoxes/featurebox_skill7_01.jpg);"></span>
			</div><span class="transparent" style="display:block;background-image: url(http://static1.greentube.com/xsl_gamebase/_gametwist_2010/imgs/featureBoxSkill7.png);"></span><span class="featureStatus" style="display:block;background-image: url(http://static1.greentube.com/xsl_gamebase/_gametwist_2010/imgs/feature_skill7Status.png);"></span>
			<p class="desc">
				Play your favourite game for real stakes! Your opponents are waiting!
			</p>
		</div>
	</div>
</div>

