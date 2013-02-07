			<div id="header">
				<div id="topheader">
					<div id="spacetopheader">
						
					</div>
					<div class="spacespace"></div>
					<div id="contenttopheader">		
						<?php if(!isset($_SESSION['front_user_fullname'])){ ?>
						<form class="formlogin" method="post" action="<?php echo base_url()?>dangky/checkAccount">
							<input type="text" name="nick" class="usename" value="Nom dutilisateur" onblur="if(this.value=='') this.value='Nom dutilisateur';" onfocus="if(this.value=='Nom dutilisateur') this.value='';" />
							<input type="text" name="pass" class="pass" value="Mot de passe" 		 onblur="if(this.value=='') this.value='Mot de passe';" onfocus="if(this.value=='Mot de passe') this.value='';"/>
							<input type="submit" name="submit" value="Login" class="login" />
							or
							<a style="padding: 8px 10px 10px 7px; text-decoration: none;" href="<?php echo base_url();?>register" class="register">enregistrer</a>
						</form> 
						<?php }else{ ?>
							 <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Bonjour: 
								<?php } else{ ?>
									Welcome: 
								<?php } ?> <?php echo $_SESSION['front_user_fullname'] ?></p>
						<?php } ?>
					</div>
				</div>
				<div id="bottomheader">
					<div id="logo">
						<a href="<?php echo base_url()?>"><img src="<?php echo base_url();?>assets/flash_game/images/logo.png"/></a>
					</div>
					<div id="menu">
						<ul>
							<li><a href="<?php echo base_url()?>games/api">
								<label>Jouner</label>
								<p>enligne</p>
								</a></li>
							
							<li><a href="<?php echo base_url();?>tournament">
								<label>Tournois</label>
								<p>jouer avec meilleurs</p>
								</a></li>
							
							<li><a href="<?php echo base_url();?>helps">
								<label>Aider</label>
								<p>des problemes?</p>
								</a></li>
							<li>
								<?php if ($_SESSION['lang']=="en") 
								{?>	
								<label>Francais </label>
								<a href="<?php echo base_url();?>changelang/change/fr/<?php echo $this->uri->uri_string();?>"><p style="text-align: center"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_22.png"/></p></a>
								<?php } elseif ($_SESSION['lang']=="fr"){ ?>
								<label>English </label>
								<a href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>"><p style="text-align: center"><img src="<?php echo base_url();?>assets/flash_game/images/el.gif"/></p></a>
								<?php }else { ?>
								<label>Francais </label>
								<a href="<?php echo base_url();?>changelang/change/fr/<?php echo $this->uri->uri_string();?>"><p style="text-align: center"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_22.png"/></p></a>
								<?php } ?>
							</li>
						</ul>
					</div>
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