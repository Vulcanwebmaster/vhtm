<style>
	#main{
/*		background: url(<?php echo base_url();?>assets/flash_game/images/backContentTop.jpg) no-repeat;*/
	_zoom: 1;
	overflow: hidden;
	padding: 54px 24px 0 24px;
	}
	
	#sideNav{
				/*float: left;
			    width: 294px;*/
			}
			 #container{
				float: right;
			   
			    width: 648px;
			}
</style>

<?php $this->load->view('front/menu')?>
<div id="main">
		<div id="container">
			<div id="tipHolder"></div>
			<div class="contBox gamesHelpContent">
				
			</div>
		</div>
		<div id="sideNav">
		<script type="text/javascript">
			var SIDENAV_ACCORDION_NR1 = 0,
				SIDENAV_ACCORDION_NR2 = 0;
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
			$('#contBox2, #contBox3, #contBox4').children('.container').hide();
			$('#helpContainer85').show();
				$('#contBox1').click(function(){
					$(this).children('.container').show('slow');
					$(this).children('.toggler').addClass('active');
					$('#contBox2, #contBox3, #contBox4').children('.container').hide('slow');
					$('#contBox2, #contBox3, #contBox4').children('.toggler').removeClass('active');
					
				});
				$('#contBox2').click(function(){
					$(this).children('.container').show('slow');
					$(this).children('.toggler').addClass('active');
					$('#contBox1, #contBox3, #contBox4').children('.container').hide('slow');
					$('#contBox1, #contBox3, #contBox4').children('.toggler').removeClass('active');
					
				});
				$('#contBox3').click(function(){
					$(this).children('.container').show('slow');
					$(this).children('.toggler').addClass('active');
					$('#contBox2, #contBox1, #contBox4').children('.container').hide('slow');
					$('#contBox2, #contBox1, #contBox4').children('.toggler').removeClass('active');
					
				});
				$('#contBox4').click(function(){
					$(this).children('.container').show('slow');
					$(this).children('.toggler').addClass('active');
					$('#contBox2, #contBox3, #contBox1').children('.container').hide('slow');
					$('#contBox2, #contBox3, #contBox1').children('.toggler').removeClass('active');
					
				});
				
			})
		</script>
		<form action="<?php echo base_url();?>setting/registAccount" method="post" align="center">
				 				<form method="post" enctype="" name="fnRegister" class="container" id="fnRegister" action="<?php echo base_url();?>setting/registAccount">
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
											<label for="nick">Nickname</label>
											<input name="nick" type="text" class="formField ffInput validate[required] text-input" id="nick" value="">
										</li>
										
										<li title="">
											<label for="pass">Password</label>
											<input name="pass" type="password" class="formField ffInput validate[required] text-input" id="pass" value="">
										</li>
										<li title="">
											<label for="pass_conf">Repeat password</label>
											<input name="pass_conf" type="password" class="validate[required,equals[pass]] text-input formField ffInput" id="pass_conf" value="">
										</li>
										<li title="">
											<label for="email">E-mail</label>
											<input name="email" type="text" class="formField ffInput validate[required] text-input" id="email" value="">
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
											<input type="text" class="formField ffInput validate[required] text-input" name="code" value="" id="securecode">
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
									</form>
				<style type="text/css">
					.tuyet{
						width: 100px;
						height: 50px;
						
					}
				</style>
</div>
<div id="sideBar"></div>
</div>
<script type="text/javascript">
	$('#pagehelp').addClass('active')
</script>