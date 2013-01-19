<script type="text/javascript">
			var SIDENAV_ACCORDION_NR1 = 0,
				SIDENAV_ACCORDION_NR2 = 0;
		</script>
<!--<div id="container">
			<div id="printLink">
				<p><a href="javascript:pgPrint()">print</a></p>
			</div>
			
			<div id="tipHolder"></div>
			<div class="contBox gamesHelpContent">
				<?php foreach ($items as $item) 
							{ ?>
				<h3><span><?php echo $item->title;?></span></h3>
				<div class="container">
					
					<div>
						<p>
							<?php echo $item->description;?></p>
						<p></p>
					</div>
					
				</div><?php } ?>
			</div>
		</div>-->
		<div id="container">
			<div id="printLink">
				<p><a href="javascript:pgPrint()">print</a></p>
			</div>
			<div id="tipHolder"></div>
			<div class="contBox gamesHelpContent">
				<div class="container">
					<div>
						<p><strong>In the help menu you will find;</strong></p>
						<ul>
							<li><strong>game instructions,</strong></li>
							<li><strong>
		an introduction to our website and</strong></li>
							<li><strong>answers to frequently asked questions (FAQs)</strong></li>
						</ul>
						<strong>
covering all games and functions available at GameTwist.<br><br>
Should you have any further questions, please do not hesitate to contact our support team at <a href="#">support@gametwist.com</a>.<br><br>
Our support hotline is available 7 days a week (excl. public holidays) from 8am to 10pm:<br>
						<ul>
							<li><b>Germany: </b><strong>0900 141 0 141</strong> (�1.80/min.)</li>
							<li><b>Austria: 0900 499 944</b> (�1.80/min.)</li>
						</ul><br>
Prices given are from landline telephones. Prices for calls from cell phones may be higher.<br></strong>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		<style>
			#sideNav{
				float: left;
			    width: 294px;
			}
			 #container{
				float: right;
			   
			    width: 648px;
			}
		</style>
		<div id="sideNav">
		<script type="text/javascript">
			var SIDENAV_ACCORDION_NR1 = 0,
				SIDENAV_ACCORDION_NR2 = 0;
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
			$('#contBox2, #contBox3, #contBox4').children('.container').hide();
			$('#helpContainer85').show();
				$('#contBox1').click(function(){
					$(this).children('.container').show('slow');
					$(this).children('.toggler').addClass('active');
					$('#contBox2, #contBox3, #contBox4').children('.container').hide('slow');
					$('#contBox2, #contBox3, #contBox4').children('.toggler').removeClass('active');
					
				});
				$('#contBox2').click(function(){
					$(this).children('.container').show('slow');
					$(this).children('.toggler').addClass('active');
					$('#contBox1, #contBox3, #contBox4').children('.container').hide('slow');
					$('#contBox1, #contBox3, #contBox4').children('.toggler').removeClass('active');
					
				});
				$('#contBox3').click(function(){
					$(this).children('.container').show('slow');
					$(this).children('.toggler').addClass('active');
					$('#contBox2, #contBox1, #contBox4').children('.container').hide('slow');
					$('#contBox2, #contBox1, #contBox4').children('.toggler').removeClass('active');
					
				});
				$('#contBox4').click(function(){
					$(this).children('.container').show('slow');
					$(this).children('.toggler').addClass('active');
					$('#contBox2, #contBox3, #contBox1').children('.container').hide('slow');
					$('#contBox2, #contBox3, #contBox1').children('.toggler').removeClass('active');
					
				});
				
			})
		</script>
		<div id="contBox1" class="contBox sideNav">
			<h4 style="cursor: default;" class="toggler active"><span>FAQs</span></h4>
			<div id="helpContainer85" class="container opened">
				<div style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden;" class="element">
					<ul>
						<?php foreach ($list_faq as $item) 
							{ ?>
						<li><a href="<?php echo base_url();?>helps/detail/<?php echo $item->id."-".$item->alias;?>"><span><?php echo $item->title?></span></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<div id="contBox2" class="contBox sideNav">
			<h4 class="toggler"><span>Rules</span></h4>
			<div id="helpContainer303" class="container" style="display: none;">
				<div style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;" class="element">
					<ul>
						<li style="cursor: default;" class="gameToggler active"><span>Casino</span>
							<ul style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden;" class="gameElement">
								<li><a href="/help.asp?id_topic=524"><span>Sic Bo </span></a></li>
								<li><a href="/help.asp?id_topic=517"><span>Baccarat</span></a></li>
								<li><a href="/help.asp?id_topic=513"><span>BlackJack</span></a></li>
								<li><a href="/help.asp?id_topic=540"><span>Book of Ra� Deluxe</span></a></li>
								<li><a href="/help.asp?id_topic=508"><span>Bugs'n Bees</span></a></li>
								<li><a href="/help.asp?id_topic=536"><span>Caribbean Holidays</span></a></li>
								<li><a href="/help.asp?id_topic=541"><span>Columbus� Deluxe</span></a></li>
								<li><a href="/help.asp?id_topic=542"><span>Dolphin's Pearl� Deluxe</span></a></li>
								<li><a href="/help.asp?id_topic=507"><span>Fruits'n Sevens</span></a></li>
								<li><a href="/help.asp?id_topic=516"><span>Golden Sevens</span></a></li>
								<li><a href="/help.asp?id_topic=527"><span>King's Treasure</span></a></li>
								<li><a href="/help.asp?id_topic=544"><span>Lucky Lady's Charm� Deluxe</span></a></li>
								<li><a href="/help.asp?id_topic=509"><span>Magic Princess</span></a></li>
								<li><a href="/help.asp?id_topic=510"><span>Mermaid's Pearl</span></a></li>
								<li><a href="/help.asp?id_topic=548"><span>Quest For Gold</span></a></li>
								<li><a href="/help.asp?id_topic=511"><span>Ramses II.</span></a></li>
								<li><a href="/help.asp?id_topic=512"><span>Roulette</span></a></li>
								<li><a href="/help.asp?id_topic=545"><span>Sizzling Hot� Deluxe</span></a></li>
								<li><a href="/help.asp?id_topic=522"><span>The Alchemist</span></a></li>
								<li><a href="/help.asp?id_topic=603"><span>4 King Cash</span></a></li>
								<li><a href="/help.asp?id_topic=794"><span>African Simba</span></a></li>
								<li><a href="/help.asp?id_topic=809"><span>American Poker II</span></a></li>
								<li><a href="/help.asp?id_topic=590"><span>Beetle Mania� deluxe</span></a></li>
								<li><a href="/help.asp?id_topic=602"><span>BigCatch�</span></a></li>
								<li><a href="/help.asp?id_topic=664"><span>Book of Ra� classic</span></a></li>
								<li><a href="/help.asp?id_topic=595"><span>Bullion Bars� </span></a></li>
								<li><a href="/help.asp?id_topic=866"><span>Cash Farm�</span></a></li>
								<li><a href="/help.asp?id_topic=787"><span>Costa del Cash</span></a></li>
								<li><a href="/help.asp?id_topic=671"><span>Darling of Fortune</span></a></li>
								<li><a href="/help.asp?id_topic=825"><span>Dazzling Diamonds</span></a></li>
								<li><a href="/help.asp?id_topic=555"><span>Deuces Wild</span></a></li>
								<li><a href="/help.asp?id_topic=857"><span>Diamond 7</span></a></li>
								<li><a href="/help.asp?id_topic=676"><span>Dolphins Pearl�</span></a></li>
								<li><a href="/help.asp?id_topic=861"><span>Easy Peasy Lemon Squeezy</span></a></li>
								<li><a href="/help.asp?id_topic=727"><span>Fairy Queen�</span></a></li>
								<li><a href="/help.asp?id_topic=856"><span>Flame Dancer </span></a></li>
								<li><a href="/help.asp?id_topic=785"><span>Fruit Sensation</span></a></li>
								<li><a href="/help.asp?id_topic=731"><span>Fruits�n Royals</span></a></li>
								<li><a href="/help.asp?id_topic=738"><span>Globe Roulette</span></a></li>
								<li><a href="/help.asp?id_topic=596"><span>Golden 7�s�</span></a></li>
								<li><a href="/help.asp?id_topic=821"><span>Golden Ark </span></a></li>
								<li><a href="/help.asp?id_topic=860"><span>Hollywood Star</span></a></li>
								<li><a href="/help.asp?id_topic=791"><span>Hot Chance</span></a></li>
								<li><a href="/help.asp?id_topic=820"><span>Indian Spirit</span></a></li>
								<li><a href="/help.asp?id_topic=550"><span>Jacks or Better</span></a></li>
								<li><a href="/help.asp?id_topic=805"><span>Jewel Action</span></a></li>
								<li><a href="/help.asp?id_topic=551"><span>Joker Wild</span></a></li>
								<li><a href="/help.asp?id_topic=859"><span>Jolly Star</span></a></li>
								<li><a href="/help.asp?id_topic=579"><span>Just Jewels�</span></a></li>
								<li><a href="/help.asp?id_topic=592"><span>Katana�</span></a></li>
								<li><a href="/help.asp?id_topic=824"><span>Knight's Quest</span></a></li>
								<li><a href="/help.asp?id_topic=593"><span>Lord of the Ocean�</span></a></li>
								<li><a href="/help.asp?id_topic=818"><span>Lucky Rose</span></a></li>
								<li><a href="/help.asp?id_topic=868"><span>Marilyn�s Diamonds�</span></a></li>
								<li><a href="/help.asp?id_topic=869"><span>Marilyn�s Diamonds� deluxe</span></a></li>
								<li><a href="/help.asp?id_topic=852"><span>Marilyn's Poker II�</span></a></li>
								<li><a href="/help.asp?id_topic=858"><span>Mayan Moons</span></a></li>
								<li><a href="/help.asp?id_topic=583"><span>Multiball Roulette</span></a></li>
								<li><a href="/help.asp?id_topic=771"><span>Mystic Secrets</span></a></li>
								<li><a href="/help.asp?id_topic=604"><span>Party Games Slotto</span></a></li>
								<li><a href="/help.asp?id_topic=862"><span>Pharaoh�s Tomb�</span></a></li>
								<li><a href="/help.asp?id_topic=651"><span>Plenty on Twenty�</span></a></li>
								<li><a href="/help.asp?id_topic=594"><span>Power Stars�</span></a></li>
								<li><a href="/help.asp?id_topic=675"><span>Rainbow King�</span></a></li>
								<li><a href="/help.asp?id_topic=556"><span>Reel King</span></a></li>
								<li><a href="/help.asp?id_topic=670"><span>Rex�</span></a></li>
								<li><a href="/help.asp?id_topic=674"><span>Roaring Forties�</span></a></li>
								<li><a href="/help.asp?id_topic=815"><span>Sea Sirens</span></a></li>
								<li><a href="/help.asp?id_topic=728"><span>Secret Elixir�</span></a></li>
								<li><a href="/help.asp?id_topic=650"><span>Sharky�</span></a></li>
								<li><a href="/help.asp?id_topic=732"><span>Spinning Stars</span></a></li>
								<li><a href="/help.asp?id_topic=678"><span>Ultra Hot� deluxe</span></a></li>
								<li><a href="/help.asp?id_topic=793"><span>Vegas Roulette</span></a></li>
								<li><a href="/help.asp?id_topic=605"><span>Win Wizard</span></a></li>
								<li><a href="/help.asp?id_topic=588"><span>Xtra Hot�</span></a></li>
							</ul>
						</li>
						<li class="gameToggler"><span>Card Games</span>
						<ul style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;" class="gameElement">
							<li><a href="/help.asp?id_topic=334"><span>66</span></a></li>
							<li><a href="/help.asp?id_topic=417"><span>Ace Solitaire</span></a></li>
							<li><a href="/help.asp?id_topic=491"><span>Belote</span></a></li>
							<li><a href="/help.asp?id_topic=307"><span>Blackjack Duel</span></a></li>
							<li><a href="/help.asp?id_topic=502"><span>Bridge</span></a></li>
							<li><a href="/help.asp?id_topic=420"><span>Chinch�n</span></a></li>
							<li><a href="/help.asp?id_topic=311"><span>Jassen</span></a></li>
							<li><a href="/help.asp?id_topic=336"><span>Doppelkopf</span></a></li>
							<li><a href="/help.asp?id_topic=487"><span>Spite&amp;Malice</span></a></li>
							<li><a href="/help.asp?id_topic=340"><span>Crazy Eights</span></a></li>
							<li><a href="/help.asp?id_topic=448"><span>Mus</span></a></li>
							<li><a href="/help.asp?id_topic=317"><span>Pyramids</span></a></li>
							<li><a href="/help.asp?id_topic=428"><span>Sheepshead</span></a></li>
							<li><a href="/help.asp?id_topic=344"><span>31</span></a></li>
							<li><a href="/help.asp?id_topic=318"><span>Schnapsen</span></a></li>
							<li><a href="/help.asp?id_topic=319"><span>Skat</span></a></li>
							<li><a href="/help.asp?id_topic=321"><span>Solitaire</span></a></li>
							<li><a href="/help.asp?id_topic=314"><span>Solitaire Poker</span></a></li>
							<li><a href="/help.asp?id_topic=393"><span>Spider Solitaire</span></a></li>
							<li><a href="/help.asp?id_topic=526"><span>Scopa</span></a></li>
							<li><a href="/help.asp?id_topic=483"><span>Sgt. Major</span></a></li>
							<li><a href="/help.asp?id_topic=353"><span>Bauernschnapsen</span></a></li>
							<li><a href="/help.asp?id_topic=308"><span>Brisca/Briscola</span></a></li>
							<li><a href="/help.asp?id_topic=432"><span>Canasta</span></a></li>
							<li><a href="/help.asp?id_topic=310"><span>Gin Rummy</span></a></li>
							<li><a href="/help.asp?id_topic=504"><span>Hearts</span></a></li>
							<li><a href="/help.asp?id_topic=355"><span>Tarock</span></a></li>
							<li><a href="/help.asp?id_topic=438"><span>Jolly</span></a></li>
							<li><a href="/help.asp?id_topic=351"><span>Tarock</span></a></li>
							<li><a href="/help.asp?id_topic=488"><span>Marias</span></a></li>
							<li><a href="/help.asp?id_topic=419"><span>Poker</span></a></li>
							<li><a href="/help.asp?id_topic=423"><span>Romm�</span></a></li>
							<li><a href="/help.asp?id_topic=374"><span>Ulti</span></a></li>
							<li><a href="/help.asp?id_topic=481"><span>Zs�roz�s</span></a></li>
							<li><a href="/help.asp?id_topic=669"><span>Buraco</span></a></li>
							<li><a href="/help.asp?id_topic=598"><span>French Tarot</span></a></li>
							<li><a href="/help.asp?id_topic=672"><span>Pesten</span></a></li>
							<li><a href="/help.asp?id_topic=582"><span>Pr�f�rence</span></a></li>
							<li><a href="/help.asp?id_topic=740"><span>President</span></a></li>
							<li><a href="/help.asp?id_topic=804"><span>Prophet</span></a></li>
						</ul>
					</li>
					<li class="gameToggler"><span>Board Games</span>
						<ul style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;" class="gameElement">
							<li><a href="/help.asp?id_topic=440"><span>Chicago</span></a></li>
							<li><a href="/help.asp?id_topic=309"><span>Dominoes</span></a></li>
							<li><a href="/help.asp?id_topic=326"><span>Yatzy</span></a></li>
							<li><a href="/help.asp?id_topic=313"><span>Mahjong</span></a></li>
							<li><a href="/help.asp?id_topic=342"><span>Reversello</span></a></li>
							<li><a href="/help.asp?id_topic=343"><span>Chess</span></a></li>
							<li><a href="/help.asp?id_topic=304"><span>Backgammon</span></a></li>
							<li><a href="/help.asp?id_topic=520"><span>Hong Kong Mahjong </span></a></li>
							<li><a href="/help.asp?id_topic=484"><span>Maxi</span></a></li>
							<li><a href="/help.asp?id_topic=485"><span>Rummyclub</span></a></li>
							<li><a href="/help.asp?id_topic=339"><span>Pachisi</span></a></li>
							<li><a href="/help.asp?id_topic=489"><span>Yatzy Live</span></a></li>
						</ul>
					</li>
					<li class="gameToggler"><span>Arcade &amp; Other</span>
						<ul style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;" class="gameElement">
							<li><a href="/help.asp?id_topic=335"><span>4 to win</span></a></li>
							<li><a href="/help.asp?id_topic=333"><span>Bloxx Duel</span></a></li>
							<li><a href="/help.asp?id_topic=337"><span>Explosive</span></a></li>
							<li><a href="/help.asp?id_topic=535"><span>Jewel Magic</span></a></li>
							<li><a href="/help.asp?id_topic=345"><span>Sudoku</span></a></li>
							<li><a href="/help.asp?id_topic=405"><span>Spin7</span></a></li>
							<li><a href="/help.asp?id_topic=323"><span>Sudoku Bloxx</span></a></li>
							<li><a href="/help.asp?id_topic=324"><span>Sugar</span></a></li>
							<li><a href="/help.asp?id_topic=346"><span>Triball</span></a></li>
							<li><a href="/help.asp?id_topic=365"><span>Zuminga</span></a></li>
							<li><a href="/help.asp?id_topic=494"><span>Bingo</span></a></li>
							<li><a href="/help.asp?id_topic=514"><span>Persian Treasures</span></a></li>
						</ul>
					</li>
					<li class="gameToggler"><span>Sports Games</span>
						<ul style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;" class="gameElement">
							<li><a href="/help.asp?id_topic=332"><span>8-Ball Billiards</span></a></li>
							<li><a href="/help.asp?id_topic=306"><span>9-Ball Billiards</span></a></li>
							<li><a href="/help.asp?id_topic=315"><span>Mowing Madness</span></a></li>
							<li><a href="/help.asp?id_topic=316"><span>Penalty King</span></a></li>
							<li><a href="/help.asp?id_topic=320"><span>Snooker</span></a></li>
							<li><a href="/help.asp?id_topic=500"><span>Boule</span></a></li>
							<li><a href="/help.asp?id_topic=564"><span>Darts</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="contBox3" class="contBox sideNav">
		<h4 class="toggler"><span>General Help</span></h4>
		<div id="helpContainer1" class="container" style="display: none;">
			<div style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;" class="element">
				<ul>
					<li><a href="/help.asp?id_topic=257&amp;id_article=920"><span>Country Selection</span></a></li>
					<li><a href="/help.asp?id_topic=86&amp;id_article=1290"><span>Player Evaluation</span></a></li>
					<li><a href="/help.asp?id_topic=84&amp;id_article=204"><span>User Tournament</span></a></li>
					<li><a href="/help.asp?id_topic=390&amp;id_article=1573"><span>Loss of Connection</span></a></li>
					<li><a href="/help.asp?id_topic=23&amp;id_article=178"><span>Rules of Conduct</span></a></li>
					<li><a href="/help.asp?id_topic=80&amp;id_article=1289"><span>Room System</span></a></li>
					<li><a href="/help.asp?id_topic=814&amp;id_article=5896"><span>Games with ranking</span></a></li>
					<li><a href="/help.asp?id_topic=128&amp;id_article=2845"><span>Tournaments</span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="contBox4" class="contBox sideNav">
		<h4 class="toggler"><span>Technical Help</span></h4>
		<div id="helpContainer22" class="container" style="display: none;">
			<div style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden; height: 0px;" class="element">
			<ul>
				<li><a href="/help.asp?id_topic=425&amp;id_article=2035"><span>Black Game Window</span></a></li>
				<li><a href="/help.asp?id_topic=294&amp;id_article=1079"><span>Java/Flash</span></a></li>
				<li><a href="/help.asp?id_topic=424&amp;id_article=2036"><span>Java Download</span></a></li>
				<li><a href="/help.asp?id_topic=426&amp;id_article=2037"><span>Flash Download</span></a></li>
				<li><a href="/help.asp?id_topic=122&amp;id_article=5870"><span>Login</span></a></li>
			</ul>
		</div>
		</div>
	</div>
		<!--<?php foreach ($items as $key) 
				{ ?>
		<div class="contBox sideNav" id="contBox1">
			<h4 class="toggler active" style="cursor: default;"><span><?php echo $key->type; ?></span></h4>
			<div class="container opened" id="helpContainer85" style="">
				<div class="element" style="padding-top: 0px; border-top-style: none; padding-bottom: 0px; border-bottom-style: none; overflow: hidden;">
					<ul>
						<li><a href="<?php echo base_url();?>helps/detail/<?php echo $key->id."-".$key->alias;?>"><span><?php echo $key->title;?></span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php }?>-->
</div>
<div id="sideBar"></div>