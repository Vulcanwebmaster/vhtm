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
<!-------------Check Password------------>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#fnLogin1").validationEngine();
		});
	</script>
<!-------------End Check Password------------>

<?php $this->load->view('front/menu')?>
<div id="main">
			<div id="container">	
				<div id="tipHolder"></div>
				<div id="heading">
					<h3><span><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Connexion';
														 } else{
														 	echo 'Login';
														  }?> </span></h3>
				</div>
				<div class="left">
					<div id="login" class="contBox">
						<form method="post" enctype="application/x-www-form-urlencoded" name="fnLogin" class="container" id="fnLogin" action="<?php echo base_url();?>dangky/checkAccount">
							<table class="formTable">
								<colgroup><col class="first"><col class="second"></colgroup>
								<thead><tr><td class="first"></td><td class="last"></td></tr></thead>
								<tfoot><tr><td class="first"></td><td class="last"></td></tr></tfoot>
								<tbody>
									<tr>
										<td class="inputNames"><label for="nick"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Pseudo';
														 } else{
														 	echo 'Nickname';
														  }?> </label></td>
										<td class="inputElements"><input name="nick" type="text" class="formField ffInput validate[required] text-input" id="nick" value=""></td>
									</tr>
									<tr>
										<td class="inputNames"><label for="pass"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Mot de passe';
														 } else{
														 	echo 'Password';
														  }?> </label></td>
										<td class="inputElements"><input name="pass" type="password" class="formField ffInput validate[required] text-input" id="pass" value=""></td>
									</tr>
									<?php if ($this->session->userdata('result')!='')
										{
										echo '<p style="color:red; padding-left:30px">';
										echo $this->session->userdata('result');
										$this->session->unset_userdata('result');
										echo '</p>';
										}?>
									<!-- <tr class="formTips" title="Stay logged in :: Remember log-in details">
										<td id="fnLoginCheckbox" class="checkBoxTableCell inputElements">
											<input name="autologin" type="checkbox" id="autologin" value="1" class="ffCheckbox">
										</td>
										<td class="autologinDesc inputDescription"><label for="autologin">Stay logged in</label></td>
									</tr> -->
									<tr>
										<td><input name="nextpage" type="hidden" id="nextpage" value="/web/OptionalData-Save"></td>
										<td class="inputElements"><button name="submit" type="submit" class="formButton fbSubmit"><span><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Connexion';
														 } else{
														 	echo 'Log In';
														  }?> </span></button></td>
									</tr>
								</tbody>
							</table>
							<ul class="signonHelpers">
								<li class="formTips"><a class="opener close" href="<?php echo base_url();?>dangky/forgotpass"><span><?php if ($_SESSION['lang']=="fr"){
														 	echo "J'ai oublié mon mot de passe !";
														 } else{
														 	echo 'I forgot my password!';
														  }?> </span></a></li>
								<li><a class="opener close" href="<?php echo base_url();?>register"><span><?php if ($_SESSION['lang']=="fr"){
														 	echo "Es-tu nouveau (nouvelle) ? Inscris-toi maintenant !";
														 } else{
														 	echo 'New here? Register now!';
														  }?></span></a></li>
							</ul>
						</form>
					</div>
				</div>
			<div class="right"></div>
		</div>
		<div id="sideNav"></div>
		<div id="sideBar"></div>
	</div>