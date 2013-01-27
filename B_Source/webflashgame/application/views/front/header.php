<div id="header">
			<h1><a href="#"><span>Games</span></a></h1>
			<h2>Play Poker, Backgammon, Skat and many more games online FOR FREE!</h2>
			<div id="nav1">
				<ul>
<!-- <<<<<<< .mine
				  <li class="game"><a data-gtt="Home" href="<?php echo base_url();?>homepage"><span><cufon class="cufon cufon-canvas" alt="Games" style="width: 60px; height: 15px;"><cufontext>
				  	<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Jeux
								<?php } else{ ?>
									Games
								<?php } ?></cufontext></cufon></span></a></li>
				  <li class="tournament"><a data-gtt="Tournaments" href="<?php echo base_url();?>giaidau"><span><cufon class="cufon cufon-canvas" alt="Tournaments" style="width: 127px; height: 15px;"><cufontext>
				  	<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Tournois
								<?php } else{ ?>
									Tournaments
								<?php } ?></cufontext></cufon></span></a></li>
				  <li class="help"><a data-gtt="Help" href="<?php echo base_url();?>helps"><span><cufon class="cufon cufon-canvas" alt="Help" style="width: 43px; height: 15px;"><cufontext>
				  	<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Jeux
								<?php } else{ ?>
									Help
								<?php } ?></cufontext></cufon></span></a></li>
				  <li style="background:none;">
					<ul style="width: 150px; display: block; height:20px;" id="languages1">
						<li class="active"><a href="<?php echo base_url();?>changelang/change/fr/<?php echo $this->uri->uri_string();?>"><span class="lang_name"><span style="display: block; " class="lang_name">French</span></a></li>
						<li  class="active1"><a href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>"><span class="lang_name">English (UK)</span></a></li>
					</ul>
======= -->
					<li class="btnPlay first" id="pagehome"><a href="<?php echo base_url();?>homepage" data-gtt="Home" title=""><span>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Maison
								<?php } else{ ?>
									Home
								<?php } ?></span></a></li>
					<li class="btnTourn" id="pagetournament"><a data-gtt="Tournaments" href="<?php echo base_url();?>giaidau" title=""><span>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Tournois
								<?php } else{ ?>
									Tournaments
								<?php } ?></span></a></li>
					<li class="btnCommunity" id="pagemygametwist"><a data-gtt="My GameTwist" href="<?php echo base_url();?>mygametwist" title=""><span>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Mes Jeux Twist
								<?php } else{ ?>
									My Games Twist
								<?php } ?></span></a></li>
					<li class="btnShop" id="pageshop"><a data-gtt="Shop" href="<?php echo base_url();?>shop" title=""><span>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Boutique
								<?php } else{ ?>
									Shop
								<?php } ?></span></a></li>
					<li class="btnRules" id="pagehelp"><a data-gtt="Help" href="<?php echo base_url();?>helps" title=""><span>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Jeux
								<?php } else{ ?>
									Help
								<?php } ?></span></a></li>
				 
				  <!--<li class="tournament"><a data-gtt="Tournaments" href="<?php echo base_url();?>giaidau"><span><cufon class="cufon cufon-canvas" alt="Tournaments" style="width: 127px; height: 15px;"><cufontext>Tournaments</cufontext></cufon></span></a></li>
				  <li class="help"><a data-gtt="Help" href="<?php echo base_url();?>helps"><span><cufon class="cufon cufon-canvas" alt="Help" style="width: 43px; height: 15px;"><cufontext>Help</cufontext></cufon></span></a></li>-->
				  <!--<li  id="menulaguages" class="active"><a href="<?php echo base_url();?>changelang/change/fr/<?php echo $this->uri->uri_string();?>" style="height: 40px;"><span style="display: block; " class="lang_name">French</span></a>
					<div  id="languages1" style="padding-top:5px; border-radius: 5px">
						<div><a href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>"><span style="display: block; " class="lang_name">English (US)</span></a></div>
						<div><a href="#"><span class="lang_name">Čeština</span></a></div>
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
						<li class="active1"><a href="#"><span class="lang_name">Norsk</span></a></li><li></li>
					</div>-->
	<li  id="menulaguages" class="active"><a href="<?php echo base_url();?>changelang/change/fr/<?php echo $this->uri->uri_string();?>" style="height: 40px;"><span style="display: block; " class="lang_name">
		<?php if ($_SESSION['lang']=="fr") 
								{?>		
									French
									<?php } else{ ?>
									English
								<?php } ?></span></a>
     <div  id="languages1" style="padding-top:5px; border-radius: 5px">
      <div><a href="<?php echo base_url();?>changelang/change/fr/<?php echo $this->uri->uri_string();?>"><span style="display: block; " class="lang_name">
      	<?php if ($_SESSION['lang']=="fr") 
								{?>		
									French
								<?php } else{ ?>
									English (US)
								<?php } ?> </span></a></div>
      <div style="padding-bottom: 10px"><a href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>"><span class="lang_name">
      	<?php if ($_SESSION['lang']=="fr") 
								{?>		
									English (US)
								<?php } else{ ?>
									French
								<?php } ?> </span></a></div>
     </div>
      </li>
				  </li>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){		
				$('#languages1').hide();
				$('#menulaguages').mouseenter(function(){
					$('#languages1').show();
				});
				$('#menulaguages').mouseleave(function(){
					$('#languages1').hide();
				});
			})
		</script>