<div id="header">
			<h1><a href="<?php echo base_url();?>homepage"><span>Games</span></a></h1>
			<h2>Play Poker, Backgammon, Skat and many more games online FOR FREE!</h2>
			<div id="nav1">
				<ul>

					<li class="btnPlay first" id="pagehome"><a href="<?php echo base_url();?>homepage" data-gtt="Home" title=""><span>
						<?php if ($_SESSION['lang']=="fr") 
								{?>		
									Page d'accueil
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
									Mes Jeux
								<?php } else{ ?>
									My Games
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
									Aide
								<?php } else{ ?>
									Help
								<?php } ?></span></a></li>
				 
				 
	<li  id="menulaguages" class="active"><a href="<?php echo base_url();?>changelang/change/fr/<?php echo $this->uri->uri_string();?>" style="height: 40px;"><span style="display: block; " class="lang_name">
		<?php if ($_SESSION['lang']=="fr") 
								{?>		
									French
									<?php } else{ ?>
									English
								<?php } ?></span></a>
     <div  id="languages1" style="padding-top:5px; border-radius: 5px">
      <div><a href="<?php echo base_url();?>changelang/change/fr/<?php echo $this->uri->uri_string();?>"><span style="display: block; " class="lang_name">
									French
								</span></a></div>
      <div style="padding-bottom: 10px"><a href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>"><span class="lang_name">
									English (US)
								</span></a></div>
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