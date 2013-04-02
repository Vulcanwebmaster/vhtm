			<div id="header">
				<div id="topheader">
					<div id="spacetopheader">
						
					</div>
					<div class="spacespace"></div>
					<div id="contenttopheader">		
						<?php if(!isset($_SESSION['front_user_fullname'])){ ?>
						<form class="formlogin" style="margin-top: -4px" method="post" action="<?php echo base_url()?>dangky/checkAccount">

							<input type="text" name="nick" id="username" class="usename" value="Nom d'utilisateur" 
								onblur="myFunction();" 
								onfocus="myFunction1();" 
							/>
							<input type="password" name="pass" class="pass" value="Mot de passe" 		 onblur="if(this.value=='') this.value='Mot de passe';" onfocus="if(this.value=='Mot de passe') this.value='';"/>
							<input type="submit" name="submit" value="CONNEXION" class="login" />
							
							<a style="padding: 7px 17px; text-decoration: none;font-size: 12px;" href="<?php echo base_url();?>register" class="register">INSCRIPTION</a>
						</form> 
						<?php }else{ ?>
							<p style=" color: white; width: 190px; float: left;  font-size: 16px ">
							 <?php if ($_SESSION['lang']=="fr") 
								{?>		
									Bonjour: 
								<?php } else{ ?>
									Welcome: 
								<?php } ?> <?php echo $_SESSION['front_user_fullname'] ?></p>
								<form class="formlogin" method="post" action="<?php echo base_url()?>dangky/logOut" >
									<input style="margin-top: -4px" type="submit" name="submit" value="DECONNEXION" class="login" />
								</form>
								<a style="color: blue;margin-left: 1px" href="<?php echo base_url()?>mygametwist"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Modifier votre profil';
														 } else{
														 	echo 'Change Account';
														  }?></a>
						<?php } ?>
					</div>
				</div>
				<div id="bottomheader">
					<div id="logo">
						<a href="<?php echo base_url()?>"><img src="<?php echo base_url();?>assets/flash_game/images/logo.png"/></a>
					</div>
					<div id="menu">
						<ul>
							<li>
								<?php if(isset($_SESSION['front_user_fullname']))
								{ ?>
									<a href="<?php echo base_url();?>games/api">
									<?php if ($_SESSION['lang']=="fr") 
									{?>	
										<label>Jouer</label>
										<p>En ligne</p>
									<?php } elseif($_SESSION['lang']=="en"){ ?>
										<label>Play</label>
										<p>Online</p>	
									<?php }else{ ?>	
										<label>Jouer</label>
										<p>En ligne</p>
									<?php } ?>	
									
									</a>
								<?php }else{ ?>
									<a href="<?php echo base_url();?>dangky/dangnhap">
								<?php if ($_SESSION['lang']=="fr") 
								{?>	
									<label>Jouer</label>
									<p>En ligne</p>
								<?php } elseif($_SESSION['lang']=="en"){ ?>
									<label>Play</label>
									<p>Online</p>	
								<?php }else{ ?>	
									<label>Jouer</label>
									<p>En ligne</p>
								<?php } ?>	
								
								</a>
								<?php } ?>
								
								</li>
							
							<li><a href="<?php echo base_url();?>tournament">
								<?php if ($_SESSION['lang']=="fr") 
								{?>	
									<label>Tournois</label>
									<p>Jouer contre les meilleurs</p>
								<?php } elseif($_SESSION['lang']=="en"){ ?>
									<label>Tournament</label>
									<p>play with the best</p>	
								<?php }else{ ?>	
									<label>Tournois</label>
									<p>Jouer contre les meilleurs</p>
								<?php } ?>	
								</a></li>
							
							<li><a href="<?php echo base_url();?>helps">
								<?php if ($_SESSION['lang']=="fr") 
								{?>	
									<label>Aide</label>
									<p>Des problèmes</p>
								<?php } elseif($_SESSION['lang']=="en"){ ?>
									<label>Help</label>
									<p>problems</p>	
								<?php }else{ ?>	
									<label>Aide</label>
									<p>Des problèmes</p>
								<?php } ?>	
								</a></li>
							<li>
								<?php if ($_SESSION['lang']=="en") 
								{?>	
								<label>English </label>
								<a href="<?php echo base_url();?>changelang/change/fr/<?php echo $this->uri->uri_string();?>"><p style="text-align: center"><img src="<?php echo base_url();?>assets/flash_game/images/el.gif"/></p></a>
								<?php } elseif ($_SESSION['lang']=="fr"){ ?>
								<label>Français </label>

								<a href="<?php echo base_url();?>changelang/change/en/<?php echo $this->uri->uri_string();?>"><p style="text-align: center"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_22.png"/></p></a>

								<?php }else { ?>
								<label>FRANÇAIS </label>
								<a href="<?php echo base_url();?>changelang/change/fr/<?php echo $this->uri->uri_string();?>"><p style="text-align: center"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_22.png"/></p></a>
								<?php } ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		<script type="text/javascript">
		// form login
		function myFunction()
		{
			var userName = document.getElementById("username");
			if(userName.value=="") userName.value="Nom d'utilisateur";
		}
		function myFunction1()
		{
			var userName = document.getElementById("username");
			if(userName.value=="Nom d'utilisateur") userName.value='';
		}
		// End form login
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