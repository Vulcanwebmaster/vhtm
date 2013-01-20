<div id="header">
			<h1><a href="#"><span>GameTwist</span></a></h1>
			<h2>Play Poker, Backgammon, Skat and many more games online FOR FREE!</h2>
			<div id="nav1">
				<ul>
				  <li class="game"><a data-gtt="Home" href="<?php echo base_url();?>homepage"><span><cufon class="cufon cufon-canvas" alt="Games" style="width: 60px; height: 15px;"><cufontext>Games</cufontext></cufon></span></a></li>
				  <li class="tournament"><a data-gtt="Tournaments" href="<?php echo base_url();?>giaidau"><span><cufon class="cufon cufon-canvas" alt="Tournaments" style="width: 127px; height: 15px;"><cufontext>Tournaments</cufontext></cufon></span></a></li>
				  <li class="help"><a data-gtt="Help" href="<?php echo base_url();?>helps"><span><cufon class="cufon cufon-canvas" alt="Help" style="width: 43px; height: 15px;"><cufontext>Help</cufontext></cufon></span></a></li>
				  <li style="background:none;">
					<ul style="width: 150px; display: block; height:20px;" id="languages1">
						<li class="active"><a href="#"><span style="display: block; " class="lang_name">English (US)</span></a></li>
						<li  class="active1"><a href="#"><span class="lang_name">Čeština</span></a></li>
						<li  class="active1"><a href="#"><span class="lang_name">Dansk</span></a></li>
						<li  class="active1"><a href="#"><span class="lang_name">Deutsch</span></a></li>
						<li  class="active1"><a href="#"><span class="lang_name">English (UK)</span></a></li>
						<li  class="active1"><a href="#"><span class="lang_name">Español (ES)</span></a></li>
						<li  class="active1"><a href="#"><span class="lang_name">Español (LatAm)</span></a></li>
						<li  class="active1"><a href="#"><span class="lang_name">Eλληνικά</span></a></li>
						<li class="active1"><a href="#"><span class="lang_name">Français</span></a></li>
						<li class="active1"><a href="#"><span class="lang_name">Hrvatski</span></a></li>
						<li class="active1"><a href="#"><span class="lang_name">Italiano</span></a></li>
						<li class="active1"><a href="#"><span class="lang_name">Magyar</span></a></li>
						<li class="active1"><a href="#"><span class="lang_name">Nederlands</span></a></li>
						<li class="active1"><a href="#"><span class="lang_name">Norsk</span></a></li><li>
					</ul>
				  </li>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){		
				$('.active1').hide();
				$('#languages1').mouseenter(function(){
					$('.active1').show('slow');
				});
				$('#languages1').mouseleave(function(){
					$('.active1').hide('slow');
				});
			})
		</script>