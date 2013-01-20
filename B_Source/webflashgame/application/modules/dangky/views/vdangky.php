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
			
</style>

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
				<div id="heading">
					<h3><span>Register</span></h3>
				</div>
				<div id="register" class="contBox regContainer">
					<form method="post" enctype="" name="fnRegister" class="container" id="fnRegister" action="/web/Register-Do">
						<ol>
							<li>
								<fieldset>
									<ol>
										<li title="">
											<label for="nick">Nickname</label>
											<input name="nick" type="text" class="formField ffInput" id="nick" value="">
										</li>
										<li title="">
											<label for="pass">Password</label>
											<input name="pass" type="password" class="formField ffInput" id="pass" value="">
											<div id="passwordVisualFeedback">
												<div id="passwordVisualFeedbackBar">
													<div class="feedbackPointer"></div>
													<div class="feedbackItem01"></div>
													<div class="feedbackItem02"></div>
												</div>
											</div>
										</li>
										<li title="">
											<label for="pass_conf">Repeat password</label>
											<input name="pass_conf" type="password" class="formField ffInput" id="pass_conf" value="">
										</li>
										<li title="">
											<label for="email">E-mail</label>
											<input name="email" type="text" class="formField ffInput" id="email" value="">
											<span class="inputDescription">Important messages about the system and game results will be sent to this e-mail address.</span>
										</li>
									</ol>
								</fieldset>
							</li>
							<li class="last">
								<fieldset>
									<ol>
										<li>Security code<img src="http://www.gametwist.fr/web/Captcha-Image/?bc=000000&amp;fc=188eae&amp;h=58&amp;w=258&amp;fill=ffffff" alt="captcha image" border="0" class="captcha"></li>
										<li title="">
											<label for="securecode">Enter security code</label>
											<input type="text" class="formField ffInput" name="code" value="" id="securecode">
										</li>
										<li id="regFormAgb">
											<input name="agb" type="checkbox" id="agb" value="1" class="ffCheckbox">
											<label for="agb">I accept the <a class="footer_info" target="_blank" href="#">General Terms &amp; Conditions</a></label>
										</li>
										<li id="regFormNewsletter">
											<input name="newsletter" type="checkbox" id="newsletter" value="1" class="ffCheckbox" checked="">
											<label for="newsletter">Yes, I would like to receive information about new games, promotions and interesting news by e-mail for free.*</label>
										</li>
									</ol>
								</fieldset>
								<input name="d" type="hidden">
								<input name="nextpage" type="hidden" id="nextpage" value="">
								<input name="xpf" type="hidden" id="xpf" value="">
								<button type="submit" name="submit" class="formButton fbSubmit" value="1">
								<span>Register</span></button>
							</li>
						</ol>
						<div class="inputDescription" id="newsletterDescription">
							<p>* You will receive information about games, promotions and features on our sites. This consent may be revoked at any time.</p>
						</div>
						<ul class="signonHelpers">
							<li>
								<a href="#" title="Member login"><span>Member login</span></a>
							</li>
							<li>
								<a href="#" title="I forgot my password!"><span>I forgot my password!</span></a>
							</li>
						</ul>
					</form>
				</div>
				<iframe name="iovationframe" id="iovationframe" scrolling="no" noresize="noresize" src="https://static.greentube.com/js/gameSoundManager/index.asp?refDomain=www.gametwist.fr&amp;sid=qv3ocmi5lovl40glwicnb32l-NU.XFC24" frameborder="0" width="0" height="0" style="background:transparent" allowtransparency="true"></iframe>
			</div>
		<div id="sideNav"></div>
		<div id="sideBar"></div>
	</div>