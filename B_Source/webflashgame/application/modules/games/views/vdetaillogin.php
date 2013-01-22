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
			body.hasSideBar #sideBar {
margin-left: 628px;
_margin-left: 625px;
_zoom: 1;
width: 314px;
overflow: hidden;
position: relative;
}

</style>
</style>
 <script type="text/javascript">
    $(document).ready(function(){
     $('body').addClass('games_details uc hasSideBar noLeaderBoard root chrome, game_uc').removeClass('game_default');
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
				<div id="backgroundHack"></div>
				<span class="detailsBackground" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/backgroundHackCutted.png);"></span>
				<h2>Bingo</h2>
				<style type="text/css">
			.featureBox.statusSkill7 {
				display: none;
			}
		
			#backgroundHack,
			body.games_details #container h1,
			body.games_details #container h1 span {
				background-color: #fff5b3;
				color: #60258D;
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
				color: #60258D;
			}
			body.games_details #container #topWinner h3,
			body.games_details #container #topWinner .container,
			body.games_details #container #relatedGames h3,
			body.games_details #container #topWinner,
			body.games_details #container #relatedGames .gameCat,
			body.games_details #container #topWinner table th,
			#playNow h3,
			#playNowSideBar h3 {
				border-color: #60258D;
			}
			
				body.games_details #container #topWinner h3,
				body.games_details #container #relatedGames h3,
				body.games_details #container #topWinner,
				body.games_details #container #topWinner table th {
					/*text-shadow: 0 0px 3px #fff;*/
				}			
				
		body.games_details .gameList a {
			color: #60258D;
		}
		.ie #gameHeader .room,
		.ie #tournDetails dd.link a {
			color: #60258D;
		}
	</style>
		<div class="contBox" id="gamesDetailsHeader">
			<div class="container">
				<div id="gameHeader" class="game_49">
					<div class="rating5">
						<span class="gameHeaderStars" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameHeaderStars.png);"></span>rating: 5</div>
						<span class="gameHeaderLogo" style="display:block;background-image: url(<?php echo base_url();?><?php echo $list_chitiet->image ?></span>
						<dl>
							<dt>Playing now:</dt>
							<dd>48</dd>
							<dt>Type:</dt>
							<dd>Arcade &amp; Other</dd>
							<dt>Min. no. of players:</dt>
							<dd>2</dd>
							<dt>Duration:</dt>
							<dd>~ 3 min.</dd>
						</dl>
						<a class="room" href="<?php echo base_url();?>games/api"><span>Play <?php echo $list_chitiet->name ?> online!</span></a>
					</div>
					<div id="gameShot">
						<a rel="lightbox[set1]" data-gtt="Bingo" href="<?php echo base_url();?>assets/flash_game/images/game_49_gameshot_780x480.jpg" title="">
						<img alt="Bingo" src="<?php echo base_url();?>assets/flash_game/images/game_49_gameshot_260x160.jpg"></a>
					</div>
				</div>
			</div>
			<div id="relatedGames" class="contBox">
				<h3><span>Popular games</span></h3>
				<div class="container gameCat">
					<ul class="gameList">
						<li class="related">
							<div class="noOverlay so1_medium rating friendsOnline gameId_97">
								<h4><a href="#" title=""><span>Fruits &amp; Sevens</span></a></h4>
								<div class="so1_container" style="background-color: #373131">
									<p></p>
									<dl><dt><span>Playing now</span></dt><dd>117</dd></dl>
									<ul>
										<li>
											<span class="border" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_med.png);"></span>
											<span class="gameLogo pos_17" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_97_logo_137x77_EN-US.png);"></span>
											<a class="room" href="#"><span class="link" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_OverlaySprite.png);"></span>
											<span class="status" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_StatusSprite_EN-US.png);"></span>
											<span class="c2a" style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;">Play now!</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="related">
							<div class="noOverlay so1_medium rating friendsOnline gameId_21">
								<h4><a href="#" title=""><span>Poker</span></a></h4>
								<div class="so1_container" style="background-color: #27567F">
									<p></p>
									<dl><dt><span>Playing now</span></dt><dd>255</dd></dl>
									<ul>
										<li>
											<span class="border" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_med.png);"></span>
											<span class="gameLogo pos_1" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_21_logo_137x77_EN-US.png);"></span>
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
						
					</ul>
				</div>
			</div>
			<div id="subNav">
				<ul>
					<li id="btnSo3Details" class="active"><a rel="ax:/info"><span>Game Overview</span></a></li>
					<li id="btnSo3Stat" class=""><a rel="ax:/stats"><span>Statistics</span></a></li>
					<li id="btnSo3Rules"><a rel="<?php echo base_url();?>games/rules"><span>Rules</span></a></li>
				</ul>
			</div>
			<div class="contentTop"></div>
			<div id="content" class="content1">
				<div class="contBox">
					<div class="container">
						<p><?php echo $list_chitiet->overview ?></p>
						<!--<p class="MsoNoSpacing" style="margin: 0cm 0cm 0pt"><b><span lang="EN-GB" style="font-family: &quot;Arial&quot;,&quot;sans-serif&quot;; font-size: 9pt; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: DE-AT; mso-bidi-font-size: 7.5pt">Bingo </span></b><span lang="EN-GB" style="font-family: &quot;Arial&quot;,&quot;sans-serif&quot;; font-size: 9pt; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: DE-AT; mso-bidi-font-size: 7.5pt">is played and loved the world over. Although there are many different variations, the general order of play is always the same. At GameTwist players have the opportunity to select between 1 and 60 Bingo cards, giving them a higher chance of winning.<o:p></o:p></span></p>
						<p class="MsoNoSpacing" style="margin: 0cm 0cm 0pt">
						<span lang="EN-GB" style="font-family: &quot;Arial&quot;,&quot;sans-serif&quot;; font-size: 9pt; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: DE-AT; mso-bidi-font-size: 7.5pt"><o:p>&nbsp;</o:p></span></p>
						<p class="MsoNoSpacing" style="margin: 0cm 0cm 0pt"><span lang="EN-GB" style="font-family: &quot;Arial&quot;,&quot;sans-serif&quot;; font-size: 9pt; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: DE-AT; mso-bidi-font-size: 7.5pt">The following variations are available: 75-Ball and 90-Ball.<o:p></o:p></span></p>
						<p class="MsoNoSpacing" style="margin: 0cm 0cm 0pt"><span lang="EN-GB" style="font-family: &quot;Arial&quot;,&quot;sans-serif&quot;; font-size: 9pt; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: DE-AT; mso-bidi-font-size: 7.5pt"><o:p>&nbsp;</o:p></span></p><p class="MsoNoSpacing" style="margin: 0cm 0cm 0pt"><span lang="EN-GB" style="font-family: &quot;Arial&quot;,&quot;sans-serif&quot;; font-size: 9pt; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: DE-AT; mso-bidi-font-size: 7.5pt">Up to 50 players may play at a single Bingo table. The aim of the game is to mark off a certain pattern on the Bingo card with the numbers drawn at random. The player to achieve this first wins and the round comes to an end.<o:p></o:p></span></p>
						-->
					</div>
				</div>
			</div>
			<div id="content" class="content2">
				<div class="contBox">
					<div class="container">
						<h3><span>Statistics</span></h3>
					<div class="container"><p><a href="#">Statistics</a></p></div>
					</div>
				</div>
			</div>
			
			<div id="content" class="content3">
				<div class="contBox">
					<div class="container">
					<div class="gamesHelpContent contBox">
						<h3 id="a_4163"><span><?php echo $list_chitiet->rules ?></span></h3>
						<!--<div class="container">
							<div><p>In the Bingo lobby players can decide to play at either a 75-Ball table or 90-Ball table. It is not possible to set up new tables. Simply click on ?nter?to join the desired table.</p><p>Bingo cards are displayed on the playing field. All 60 Bingo cards can be viewed using the scroll bar. Select a card by clicking on it, then click ?uy?to purchase it. It is also possible to select more than one card at once by using the ?ard Selector?option. The ?ard Selector?can be set to a number from 1 to 60, allowing the player to mark the corresponding number of cards. For example, if the ?ard Selector?is set to 10, 10 playing cards will be marked.</p><p>By clicking on ?ew?the cards, which have neither been marked nor bought, are replaced by new cards.</p><p>Alternatively, players can use the ?uto-Buy?function. Clicking on this button opens a new window, where the player can select how many cards he/she wants to have and for how many rounds, e.g.: 10 rounds with 5 cards each. The entered number of cards will then be bought automatically at the start of each round.</p><p>The ?uto-Sorting?function can be toggled during the draw. This function orders the player? cards according to how close the card is to being completed. This is on at the start of the game by default.</p><p>Clicking on the ?ingo?button announces that you have achieved ?ingo? If you forget to click on the button, your winnings will be awarded anyway. If a player loses his/her connection to the game before clicking on ?ingo? the win will also be valid.</p><h3>Rules</h3><p>There are two variations of Bingo to choose from: 75-Ball and 90-Ball. Up to 50 players can play at one table. The aim of the game is to form a specific pattern on the Bingo card by crossing out the drawn numbers. The player, who first forms the corresponding pattern, wins and the round comes to an end.</p><p><b>75-Ball Bingo</b></p><p>In this version of the game, the field measures 5 by 5, filled with numbers from 1 to 75. The player who wins the round wins the pot.</p><p><b>90-Ball Bingo </b></p><p>In this version of the game, the field measures 9 by 3. Per line, 5 numbers ranging from 1 to 90 are shown. There are three ways to win. The first is by completing a row, meaning that all 5 numbers in any of the rows on a card are marked off. The second way is by completing 2 such rows. The main way to win comes when all 15 numbers on a card are marked off (a ?ull House?. In the 90-Ball variation, the pot is divided according to a predefined formula.</p><h3>Order of play</h3><p>Bingo basically consists of two phases: the purchase phase and the draw phase. The game begins with the purchase phase. This lasts 90 seconds. During this time the players can select and purchase the desired number of Bingo cards. Players can buy cards as often as they want within the given time limit. Each card costs a defined amount. The player? stake is therefore the sum of cards bought, multiplied by the stake per card. A share of the stake is added to the pot, while the rest constitutes the operating fee.</p><p>The draw phase follows. Every player, who has purchased at least one card, takes part in the draw. Only the purchased cards will then be displayed in the playing field. If a player didn? buy any cards for the game, he/she has the opportunity to buy cards for the next round. For the players involved in the game, one number after the next is drawn. The drawn numbers, provided that they are shown on the card(s), are marked off. As soon as the round has been won, the winner is announced and the next purchase phase can begin.</p>
							</div>
								<ul class="playGames">
									<li class="playGame"><a href="#" class="room"><span>Play Bingo online!</span></a></li>
									<li class="backToTop"><a href="#subNav" data-gtt="top" title=""><span>top</span></a></li>
								</ul>
						</div>-->
						</div>
					</div>
				</div>
			</div>
			<div class="contentBottom"></div>
			<div id="stats">
				<div class="contBox">
					<h3><span>Statistics</span></h3>
					<div class="container"><p><a href="#">Statistics</a></p></div>
				</div>
			</div>
		</div>
		<div id="sideNav"></div>
		<div id="sideBar">
		<div class="contBox" id="sideBarLogin">
			<h3><span>Log In</span></h3>
			<form method="post" enctype="" name="fnLogin" id="fnLogin" class="container" action="/web/Login">
				<table>
					<tbody><tr>
						<td><input type="text" name="nick" id="lNick1" title="Nickname" value="Nickname" onblur="if(this.value=='') this.value='Nickname';" onfocus="if(this.value=='Nickname') this.value='';"></td>
						<td>
							<input type="password" name="pass" id="lPass1" title="Password" value="Password" onblur="if(this.value=='') this.value='Password';" onfocus="if(this.value=='Password') this.value='';">
							
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input name="autologin" type="checkbox" id="autologin2" value="1" class="ffCheckbox">
							<label for="autologin2">Stay logged in</label>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button name="submit" type="submit" class="formButton fbSubmit" id="landingSend">
							<span>Log In</span>
							</button>
						</td>
					</tr>
					</tbody>
				</table>
			</form>
		</div>
		<div id="tagCloud" class="contBox">
			<h3><span>Arcade &amp; Other</span></h3>
			<div class="container">
				<ul>
					<li>
						<a style="font-size: 15px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">4 King Cash� </a>
					</li>
					<li>
						<a style="font-size: 18px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">African Simba </a>
					</li>
					<li><a style="font-size: 17px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">American Poker� II </a></li>
					<li><a style="font-size: 14px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">Baccarat </a></li>
					<li><a style="font-size: 17px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">Beetle Mania� Deluxe </a></li>
					<li><a style="font-size: 15px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">Big Catch� </a></li>
					<li><a style="font-size: 16px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">Black Jack </a></li>
					<li><a style="font-size: 19px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">Book of Ra� </a></li>
					<li><a style="font-size: 20px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">Book of Ra� Deluxe </a></li>
					<li><a style="font-size: 15px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">Bugs &amp; Bees </a></li>
					<li><a style="font-size: 16px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">Bullion Bars� </a></li>
					<li><a style="font-size: 18px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">Caribbean Holidays </a></li>
					<li><a style="font-size: 18px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">Cash Farm� </a></li>
					<li><a style="font-size: 18px;padding: 0 0.4em 0.4em 0;line-height: 1.2em;" href="#">Columbus� Deluxe </a></li>
				</ul>
				<div class="footer">
					<a class="more" href="#">show all</a>
				</div>
			</div>
		</div>
		<style>
					#subNav a{ cursor:poiter;}
				</style>
				<script type="text/javascript">
				$(document).ready(function(){
					$('.content1').show();				
				$('.content2, .content3').hide();
					$('#btnSo3Details').click(function(){
						$(this).addClass('active');
						$(this).parent().parent().parent().children('.content1').show();
						$(this).parent().parent().parent().children('.content2, .content3').hide();
						$(this).parent().children('#btnSo3Stat, #btnSo3Rules').removeClass('active');
					});
					$('#btnSo3Stat').click(function(){
						$(this).addClass('active');
						$(this).parent().parent().parent().children('.content2').show();
						$(this).parent().parent().parent().children('.content1, .content3').hide();
						$(this).parent().children('#btnSo3Details, #btnSo3Rules').removeClass('active');
					});
					$('#btnSo3Rules').click(function(){
						$(this).addClass('active');
						$(this).parent().parent().parent().children('.content3').show();
						$(this).parent().parent().parent().children('.content2, .content1').hide();
						$(this).parent().children('#btnSo3Details, #btnSo3Stat').removeClass('active');
					});
				});
				</script>
		<div class="featureBox statusSkill7 type_skill7" id="featureBox_1">
			<h3><a target="_blank" href="http://www.skill7.com{$dotNetAppFolder}/Bridge?idr=10279"><span>Get ready!</span></a></h3>
			<div class="container">
				<div class="backgroundColor" style="background-color: ">
					<span class="img" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/featurebox_skill7_01.jpg);"></span></div>
					<span class="transparent" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/featureBoxSkill7.png);"></span>
					<span class="featureStatus" style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/feature_skill7Status.png);"></span>
					<p class="desc">Play your favorite game for real stakes! Your opponents are waiting!</p>
				</div>
			</div>
		</div>
	</div>