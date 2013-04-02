<style>
	#main{
/*		background: url(<?php echo base_url();?>assets/flash_game/images/backContentTop.jpg) no-repeat;*/
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
			
</style>
<!-------------Check registry------------>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#fnRegister").validationEngine();
		});
	</script>
<!-------------End Check registry------------>
<!-- <div id="nav" class="">
			<ul>
				<li class="btnPlay first active"><a href="<?php echo base_url();?>homepage" data-gtt="Home" title=""><span>Home</span></a></li>
				<li class="btnTourn"><a data-gtt="Tournaments" href="<?php echo base_url();?>giaidau" title=""><span>Tournaments</span></a></li>
				<li class="btnCommunity"><a data-gtt="My GameTwist" href="<?php echo base_url();?>dangky/dangnhap" title=""><span>My GameTwist</span></a></li>
				<li class="btnShop"><a data-gtt="Shop" href="<?php echo base_url();?>shop" title=""><span>Shop</span></a></li>
				<li class="btnRules"><a data-gtt="Help" href="<?php echo base_url();?>helps" title=""><span>Help</span></a></li>
			</ul>
			<a id="backToTop" href="#"></a>
		</div> -->
<div id="main">
			<div id="container">
				<div id="tipHolder"></div>
				<div id="heading">
					<h3><span>Register</span></h3>
				</div>
				<div id="register" class="contBox regContainer">
					<form method="post" enctype="" name="fnRegister" class="container" id="fnRegister" action="<?php echo base_url();?>dangky/registAccount">
						<ol>
							<li>
								<?php if ($this->session->userdata('result')!='')
										{
											echo '<p style="color:red; padding-left:30px">';
											echo $this->session->userdata('result');
											$this->session->unset_userdata('result');
											echo '</p>';
										}?>
								<fieldset>
									<ol>
										<li title="">
											<label for="nick"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Pseudo';
														 } else{
														 	echo 'Nickname';
														  }?></label>
											<input name="nick" type="text" class="formField ffInput validate[required] text-input" id="nick" value="">
										</li>
										
										<li title="">
											<label for="pass"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Mot de passe';
														 } else{
														 	echo 'Password';
														  }?> </label>
											<input name="pass" type="password" class="formField ffInput validate[required] text-input" id="pass" value="">
										</li>
										<li title="">
											<label for="pass_conf"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Répéter le mot de passe';
														 } else{
														 	echo 'Repeat Password';
														  }?> </label>
											<input name="pass_conf" type="password" class="validate[required,equals[pass]] text-input formField ffInput" id="pass_conf" value="">
										</li>
										<li title="">
											<label for="email"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Courriel';
														 } else{
														 	echo 'E-mail';
														  }?> </label>
											<input name="email" type="text" class="formField ffInput validate[required] text-input" id="email" value="">
											<span class="inputDescription"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Des messages du système et autres informations importantes seront envoyés à cette adresse email.';
														 } else{
														 	echo 'Important messages about the system and game results will be sent to this e-mail address.';
														  }?></span>
										</li>
										
									</ol>
								</fieldset>
							</li>
							<li class="last">
								<fieldset>
									<ol>
										<li title="">
											<label for="nick"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Nom et prénom';
														 } else{
														 	echo 'Full name';
														  }?></label>
											<input name="fullname" type="text" class="formField ffInput validate[required] text-input" id="nick" value="">
										</li>
										
										<li title="">
											<label for="nick"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Pays';
														 } else{
														 	echo 'Country';
														  }?></label>
											<input name="country" type="text" class="formField ffInput validate[required] text-input" id="nick" value="">
										</li>
										
										<li title="">
											<label for="pass"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Ville';
														 } else{
														 	echo 'City';
														  }?></label>
											<input name="city" type="text" class="formField ffInput validate[required] text-input"  id="pass" value="">
										</li>
									</ol>
								</fieldset>
								<input name="d" type="hidden">
								<input name="nextpage" type="hidden" id="nextpage" value="">
								<input name="xpf" type="hidden" id="xpf" value="">
								<button type="submit" name="submit" class="formButton fbSubmit" value="1">
								<span><?php if ($_SESSION['lang']=="fr"){
														 	echo "S'inscrire";
														 } else{
														 	echo 'Register';
														  }?> </span></button>
							</li>
						</ol>
						<div class="inputDescription" id="newsletterDescription">
							<p><?php if ($_SESSION['lang']=="fr"){
														 	echo "* Tu recevras des informations concernant les jeux, les promotions et autres nouveautés du site.";
														 } else{
														 	echo '* You will receive information about games, promotions and features on our sites. This consent may be revoked at any time.';
														  }?></p>
						</div>
						<ul class="signonHelpers">
							<li>
								<a href="<?php echo base_url();?>login" title="Member login"><span><?php if ($_SESSION['lang']=="fr"){
														 	echo "Connexion pour les membres";
														 } else{
														 	echo 'Member login';
														  }?> </span></a>
							</li>
							<li>
								<a href="<?php echo base_url();?>dangky/forgotpass" title="I forgot my password!"><span><?php if ($_SESSION['lang']=="fr"){
														 	echo "J'ai oublié mon mot de passe ! ";
														 } else{
														 	echo 'I forgot my password!';
														  }?></span></a>
							</li>
						</ul>
					</form>
				</div>
				<iframe name="iovationframe" id="iovationframe" scrolling="no" noresize="noresize" src="https://static.greentube.com/js/gameSoundManager/index.asp?refDomain=www.gametwist.fr&amp;sid=qv3ocmi5lovl40glwicnb32l-NU.XFC24" frameborder="0" width="0" height="0" style="background:transparent" allowtransparency="true"></iframe>
			</div>
		<div id="sideNav"></div>
		<div id="sideBar"></div>
	</div>