<div id="header">
				<div id="topheader">
					<div id="spacetopheader">
						
					</div>
					<div class="spacespace"></div>
					<div id="contenttopheader">						
						<form class="formlogin">
							<input type="text" name="usename" class="usename" value="Nom d'utilisateur" onblur="if(this.value=='') this.value='Nom d'utilisateur';" onfocus="if(this.value=='Nom d'utilisateur') this.value='';" />
							<input type="text" name="pass" class="pass" value="Mot de passe" onblur="if(this.value=='') this.value='Mot de passe';" onfocus="if(this.value=='Mot de passe') this.value='';"/>
							<input type="submit" name="submit" value="Login" class="login" />
							or
							<input type="submit" name="register" value="enregistrer" class="register"/>
						</form> 
					</div>
				</div>
				<div id="bottomheader">
					<div id="logo">
						<img src="<?php echo base_url();?>assets/flash_game/images/logo.png"/>
					</div>
					<div id="menu">
						<ul>
							<li><a href="<?php echo base_url();?>giaidau">
								<label>Jouner</label>
								<p>enligne</p>
								</a></li>
							
							<li><a href="<?php echo base_url();?>giaidau">
								<label>Tournois</label>
								<p>jouer avec meilleurs</p>
								</a></li>
							
							<li><a href="#">
								<label>Aider</label>
								<p>des problemes?</p>
								</a></li>
							
							<li><a href="#">
								<label>Francais </label>
								<p style="text-align: center"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_22.png"/></p>
								</a></li>
						</ul>
					</div>
				</div>
			</div>