<?php if (validation_errors())
	{
		echo '<div class="error-panel">';
		//echo validation_errors('<p style="color:#f83d43">','</p>');
		echo '</div>';
	}?>
<!-------------Check Invail------------>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#sendmail1").validationEngine();
		});
	</script>
<!-------------End Check Invail------------>
	<div id="footer">
		<?php if ($this->session->userdata('result')!='')
						{
						echo '<p style="color:red; padding-left:945px">';
						echo $this->session->userdata('result');
						$this->session->unset_userdata('result');
						echo '</p>';
						}?>
				<div id="footer1">
					<div class="contentfooter1">
						<p>Abonnez-vous à notre newsleteret rester à jour sur les dernieres nouvelles</p>

						<!--<?php 
								echo '<p style="color:#f83d43;padding:0; font-size: 13px; font-weight: bold ">'.$this->session->userdata('lienhe_result').'</p>';
								$this->session->unset_userdata('email_result');
							?>-->
							<form action="<?php echo base_url();?>homepage/send" method="post" class="formemail" id="sendmail1">
							<input style="margin-top:10px" name="e_mail" id="mod_virtuemart_search" maxlength="80" class="inputbox validate[required,custom[email]] text-input" type="text" size="20" value="your email address..." onblur="if(this.value=='') this.value='your email address...';" onfocus="if(this.value=='your email address...') this.value='';"><br/>
							<input  type="submit" value="Subscribe" name="sendmail" class="sub">
							</form>

							<!--<?php echo validation_errors('','</p>'); ?>-->

<!-- 						<div class="sub">Subscribe</div> -->
					</div><br clear="both"/>
				</div>
				<div id="footer2">
					<div class="contentfooter2">
						<img src="<?php echo base_url();?>assets/flash_game/images/Belote_158.png"/>
						<label style="color:#fff">Nouvelles de twitter :</label> <label style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</label>
						<div class="uliu">
							<ul>
<!-- 								<li style="margin-top: 3px"><a href="#"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_156.png"/></a></li> -->
								<li ><a href="https://twitter.com/"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_149.png"/></a></li>
								<li><a href="https://www.facebook.com/"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_151.png"/></a></li>
								<li><a href="<?php echo base_url();?>rss"><img src="<?php echo base_url();?>assets/flash_game/images/Belote_153.png"/></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="footer3">
					Copyright 2013 - <labe style="color:#6fb6c7">Belote.com</labe> Tours droit reserves
				</div>
			</div>