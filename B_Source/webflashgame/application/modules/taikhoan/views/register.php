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
			<div id="sideBar">
			<div class="featureBox  type_news" id="featureBox_">
				<h3><span class="fakeLink"><span>Register now!</span></span></h3>
				<div class="container">
					<div class="backgroundColor" style="background-color: ">
						<span class="img" style="display:block;background-image: url(images/4882-featurebox_register.jpg);"></span>
					</div>
					<span class="transparent" style="display:block;background-image: url(images/featureBoxNoLink.png);"></span>
					<span class="featureStatus" style="display:block;background-image: url(images/game_StatusSprite_EN-US.png);"></span>
					<p class="desc">Over 120 games, real opponents and awesome wins! Join the fun!</p>
				</div>
			</div>
			<div id="trust" class="contBox">
				<h3>Simple &amp; Secure</h3>
				<div class="container">
					<div class="trust"></div>
				</div>
			</div>
		</div>