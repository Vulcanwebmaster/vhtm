<div id="main">
			<div id="container" style="float:left;margin-left:294px;position:relative;width:648px;_display:inline">
				<div id="tipHolder"></div>
				<div class="left">
					<div class="contBox" id="settingsPassword">
						<h3><span><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Changer le mot de passe';
														 } else{
														 	echo 'Change password';
														  }?></span></h3>
						<form action="<?php echo base_url();?>mygametwist/updateNewPass/" method="post" enctype="application/x-www-form-urlencoded" class="container" id="checkconfpass">
							<table class="formTable">
								<colgroup><col class="first"><col class="second"></colgroup>
								<thead><tr><td></td><td></td></tr></thead>
								<tfoot><tr><td></td><td></td></tr></tfoot>
								<tbody>
									<tr>
										<td class="inputNames"><label for="old_pass"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Mot de passe actuel';
														 } else{
														 	echo 'Current password';
														  }?><span style="color: red">(*)</span> </label></td>
										<td class="inputElements"><input name="old_pass" type="password" class="validate[required] text-input" id="old_pass" maxlength="100" value=""></td>
									<?php if ($this->session->userdata('result')!='')
										{
										//echo '<p style="color:red; padding-left:30px">';
										echo '<p style="color:#f83d43; margin:10px;  font-size: 13px; font-weight: bold ">'.$this->session->userdata('result').'</p>';
										//echo $this->session->userdata('result');
										$this->session->unset_userdata('result');
										echo '</p>';
										}?>
									</tr>
									<tr>
										<td class="inputNames"><label for="pass"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Nouveau mot de passe';
														 } else{
														 	echo 'New password';
														  }?><span style="color: red">(*)</span>  </label></td>
										<td class="inputElements" title="">
											<input name="password" type="password" class="validate[required] text-input" id="pass" maxlength="100" value="">
										</td>
									</tr>
									<tr>
										<td class="inputNames">
											<label for="pass_conf"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Confirmer mot de passe';
														 } else{
														 	echo 'Repeat password';
														  }?><span style="color: red">(*)</span>  </label>
										</td>
										<td class="inputElements">
											<input name="pass_conf"  type="password" class="validate[required,equals[pass]] text-input" id="pass_conf" maxlength="100" value="">
										</td>
									</tr>
									<tr>
										<td>
											<input name="cmd" type="hidden" id="cmd" value="password">
											<input name="mode" type="hidden" id="mode" value="password">
											<input name="nick" type="hidden" id="nick" value="">
										</td>
										<td class="inputElements">
											<button type="submit" class="formButton fbSubmit" name="submit" value="Save"><span><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Sauvegarder';
														 } else{
														 	echo 'Save';
														  }?></span></button>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
						</div>
					</div>
			</div>
<!---------------------------Left------------------------->

			<!---------------------------left-------------------->
			<div id="sideNav" style="float:left;width:294px;margin-left:-942px;position:relative">
				<div class="contBox sideNav">
					<h4><span><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Paramètres';
														 } else{
														 	echo 'Setting';
														  }?></span></h4>
					<div class="container">
						<ul>
							<li id="btnSettingsPersonal"><a href="<?php echo base_url();?>mygametwist/personaldata"><span><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Données personnelles';
														 } else{
														 	echo 'Personal information';
														  }?></span></a></li>
							<li id="btnSettingsPassword"><a href="<?php echo base_url();?>mygametwist/changepass"><span><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Changer le mot de passe';
														 } else{
														 	echo 'Change password';
														  }?> </span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="sideBar"></div>
			<br clear="both">
<!---------------------------End left--------------------><!---------------------------End right-------------------->
</div>