<style>
	#sideBar{
		margin-left: 628px;
    	overflow: hidden;
   	 position: relative;
    width: 314px;
	}
</style>

			<div id="container">
				<div id="tipHolder"></div>
				<div id="heading">
					<h3><span>Register</span></h3>
				</div>
				<div class="contBox regContainer" id="register">
					<form action="/web/Register-Do" id="fnRegister" class="container" name="fnRegister" enctype="" method="post">
						<ol>
							<li>
								<fieldset>
									<ol>
										<li title="">
											<label for="nick">Nickname</label>
											<input type="text" value="" id="nick" class="formField ffInput" name="nick">
										</li>
										<li title="">
											<label for="pass">Password</label>
											<input type="password" value="" id="pass" class="formField ffInput" name="pass">
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
											<input type="password" value="" id="pass_conf" class="formField ffInput" name="pass_conf">
										</li>
										<li title="">
											<label for="email">E-mail</label>
											<input type="text" value="" id="email" class="formField ffInput" name="email">
											<span class="inputDescription">Important messages about the system and game results will be sent to this e-mail address.</span>
										</li>
									</ol>
								</fieldset>
							</li>
							<li class="last">
								<fieldset>
									<ol>
										<li>Security code<img border="0" class="captcha" alt="captcha image" src="http://www.gametwist.fr/web/Captcha-Image/?bc=000000&amp;fc=188eae&amp;h=58&amp;w=258&amp;fill=ffffff"></li>
										<li title="">
											<label for="securecode">Enter security code</label>
											<input type="text" id="securecode" value="" name="code" class="formField ffInput">
										</li>
										<li id="regFormAgb">
											<input type="checkbox" class="ffCheckbox" value="1" id="agb" name="agb">
											<label for="agb">I accept the <a href="#" target="_blank" class="footer_info">General Terms &amp; Conditions</a></label>
										</li>
										<li id="regFormNewsletter">
											<input type="checkbox" checked="" class="ffCheckbox" value="1" id="newsletter" name="newsletter">
											<label for="newsletter">Yes, I would like to receive information about new games, promotions and interesting news by e-mail for free.*</label>
										</li>
									</ol>
								</fieldset>
								<input type="hidden" name="d">
								<input type="hidden" value="" id="nextpage" name="nextpage">
								<input type="hidden" value="" id="xpf" name="xpf">
								<button value="1" class="formButton fbSubmit" name="submit" type="submit">
								<span>Register</span></button>
							</li>
						</ol>
						<div id="newsletterDescription" class="inputDescription">
							<p>* You will receive information about games, promotions and features on our sites. This consent may be revoked at any time.</p>
						</div>
						<ul class="signonHelpers">
							<li>
								<a title="Member login" href="#"><span>Member login</span></a>
							</li>
							<li>
								<a title="I forgot my password!" href="#"><span>I forgot my password!</span></a>
							</li>
						</ul>
					</form>
				</div>
				<iframe width="0" scrolling="no" height="0" frameborder="0" allowtransparency="true" style="background:transparent" src="https://static.greentube.com/js/gameSoundManager/index.asp?refDomain=www.gametwist.fr&amp;sid=qv3ocmi5lovl40glwicnb32l-NU.XFC24" noresize="noresize" id="iovationframe" name="iovationframe"></iframe>
			</div>
		<div id="sideNav"></div>
		<div id="sideBar">
			<div id="featureBox_" class="featureBox  type_news">
				<h3><span class="fakeLink"><span>Register now!</span></span></h3>
				<div class="container">
					<div style="background-color: " class="backgroundColor">
						<span style="display:block;background-image: url(images/4882-featurebox_register.jpg);" class="img"></span>
					</div>
					<span style="display:block;background-image: url(images/featureBoxNoLink.png);" class="transparent"></span>
					<span style="display:block;background-image: url(images/game_StatusSprite_EN-US.png);" class="featureStatus"></span>
					<p class="desc">Over 120 games, real opponents and awesome wins! Join the fun!</p>
				</div>
			</div>
			<div class="contBox" id="trust">
				<h3>Simple &amp; Secure</h3>
				<div class="container">
					<div class="trust"></div>
				</div>
			</div>
		</div>
	<script type="text/javascript" src="js/GT.js"></script>
			<style>
				.heightlanguages{ height:339px !important}
			</style>
			<script type="text/javascript">
			$(document).ready(function(){		
			
				$('#languages').mouseenter(function(){
					$('#languages').addClass('heightlanguages');
				});
				$('#languages').mouseleave(function(){
					$('#languages').removeClass('heightlanguages');
				});
			})
		</script>
		