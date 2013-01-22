<!-------------------------right------------------------->
<!-------------Check Invail------------>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#fnSettingsPersonal").validationEngine();
		});
	</script>
<!-------------End Check Invail------------>
<?php $this->load->view('front/menu');
?>
<div id="main">
			<div id="container" style="float:left;margin-left:294px;position:relative;width:648px;_display:inline">
				<div id="tipHolder"></div>
				<div class="left">
					<div class="contBox" id="settingsPersonal">
						<h3><span>Personal data</span></h3>
						<form method="post" action="<?php echo base_url();?>mygametwist/updatePersonaldata/" class="container" id="fnSettingsPersonal">
							<table class="formTable">
								<colgroup><col class="first"><col class="second"></colgroup>
								<thead>
									<tr><td></td><td></td></tr>
								</thead>
								<tfoot>
									<tr><td></td><td></td></tr>
								</tfoot>
								<tbody>
									<tr>
										<td class="inputNames">Nickname</td>
										<td><a class="profile " href="#" target="profile"><span><?php echo $list_account->username ?></span></a></td>
									</tr>
									<tr>
										<td class="inputNames"><label for="email">E-mail</label></td>
										<td class="inputElements">
											<input name="email" class="validate[required] text-input" type="email" class="formField ffInput" id="email" value="<?php echo $list_account->email ?>"></td>
									</tr>
									<tr>
										<td></td>
										<td class="formDescription">All important messages will be sent to this e-mail address.</td>
									</tr>
									<tr>
										<td class="inputNames"><label for="firstname">Full name</label></td>
										<td class="inputElements">
											<input name="fullname" class="validate[required] text-input" type="text" class="formField ffInput" id="firstname" value="<?php echo $list_account->fullname ?>">
										</td>
									</tr>
									<tr>
										<td class="inputNames">Gender</td>
										<td class="inputElements">
											<table cellpadding="0" cellspacing="0" border="0" id="gender">
												<tbody>
													<?php if(isset($list_account->gender)){ ?>
													<?php if($list_account->gender == "Male"){ ?>
														<tr>
															<td><input type="radio" id="male" name="gender" checked="true" value="Male" class="ffRadio"></td>
															<td class="inputNames"><label for="male">Male</label></td>
														</tr>
														<tr>
															<td><input type="radio" id="female" name="gender" value="Female" class="ffRadio"></td>
															<td class="inputNames"><label for="female">Female</label></td>
														</tr>		
													<?php }else{ ?>
														<tr>
															<td><input type="radio" id="male" name="gender" value="Male" class="ffRadio"></td>
															<td class="inputNames"><label for="male">Male</label></td>
														</tr>
														<tr>
															<td><input type="radio" id="female" name="gender" checked="true" value="Female" class="ffRadio"></td>
															<td class="inputNames"><label for="female">Female</label></td>
														</tr>	
													<?php } }else{ ?>
														<tr>
															<td><input type="radio" id="male" name="gender" value="Male" class="ffRadio"></td>
															<td class="inputNames"><label for="male">Male</label></td>
														</tr>
														<tr>
															<td><input type="radio" id="female" name="gender" checked="true" value="Female" class="ffRadio"></td>
															<td class="inputNames"><label for="female">Female</label></td>
														</tr>	
													<?php } ?>
											</tbody></table>
										</td>
									</tr>
									<tr>
										<td class="inputNames">
											<label for="fk_country">Country</label>
										</td>
										<td class="inputElements">
											<input type="text" class="formField ffInput validate[required] text-input" name="country" id="fk_country" value="<?php echo $list_account->country ?>">
										</td>
									</tr>
									<tr>
										<td class="inputNames">
											<label for="city">City</label>
										</td>
										<td class="inputElements">
											<input type="text" class="formField ffInput validate[required] text-input" name="city" id="city" value="<?php if(isset($list_account->city)) echo $list_account->city ?>">
										</td>
									</tr>
									<tr>
										<td valign="top" id="FormCheckbox" class="inputElements inputNames">
											<input name="newsletterCheckbox" type="checkbox" id="newsletterCheckbox" value="1" class="ffCheckbox" checked="">
										</td>
										<td class="formDescription">
											<label for="newsletterCheckbox">Yes, I would like to receive information about new games, my winnings and interesting news via e-mail for free.*</label>
										</td>
									</tr>
									<script type="text/javascript">
								window.addEvent('domready', function() {
									var newsletterCheckbox = $('newsletterCheckbox');
									if (newsletterCheckbox) {
										newsletterCheckbox.addEvent('change', function () {
											checkNewsletter(this, $('newsletter'));
										});
									}
								});
							</script>
									<tr>
										<td>
										<script type="text/javascript">
			window.addEvent('domready',function(){
				$('securityQuestion').value = $('securityQuestionTag').options[$('securityQuestionTag').selectedIndex].text;
				$('securityQuestionTag').addEvent('change',function(){
					$('securityQuestion').value = this.options[this.selectedIndex].text;
				});
			});
		</script>
											<input type="hidden" name="securityQuestion" id="securityQuestion" value="What was your first pet's name?">
											<input name="cmd" type="hidden" id="cmd" value="personal">
											<input type="hidden" value="1" name="newsletter" id="newsletter">
											<input type="hidden" name="return2" value="">
											<input name="save" type="hidden" id="save" value="1">
											<input type="hidden" name="nextpage" value="">
											<input type="hidden" name="mode" id="mode" value="personal">
										</td>
										<td class="inputElements">
											<button name="submit" type="submit" class="formButton fbSubmit"><span>Save</span></button>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="inputDescription" id="newsletterDescription">
								<span>* You will receive information about games, promotions and features on our sites. This consent may be revoked at any time.</span>
							</div>
						</form>
					</div>
				</div>
			</div>
<!---------------------------Left------------------------->
<?php $this->load->view('front/mygametwist_left')?>
<!---------------------------End right-------------------->
</div>