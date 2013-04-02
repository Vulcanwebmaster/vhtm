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
			jQuery("#fnLogin").validationEngine();
		});
	</script>
<!-------------End Check Password------------>

<?php $this->load->view('front/menu')?>
<div id="main">
			<div id="container">	
				<div id="tipHolder"></div>
				<div id="heading">
					<h3><span><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Mot de passe oublie';
														 } else{
														 	echo 'Forgot Password';
														  }?> </span></h3>
				</div>
				<div class="left">
					<div id="login" class="contBox">
						<form method="post" class="container" id="fnLogin" action="<?php echo base_url();?>dangky/checkEmail">
							<table class="formTable">
								<colgroup><col class="first"><col class="second"></colgroup>
								<thead><tr><td class="first"></td><td class="last"></td></tr></thead>
								<tfoot><tr><td class="first"></td><td class="last"></td></tr></tfoot>
								<tbody>
									<tr>
										<td class="inputNames"><label for="nick"><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Courriel';
														 } else{
														 	echo 'Email';
														  }?> </label></td>
										<td class="inputElements"><input name="email" type="text" class="formField ffInput validate[required,custom[email]] text-input" id="nick"></td>
									</tr>
									<?php if ($this->session->userdata('result')!='')
										{
										echo '<p style="color:red; padding-left:30px">';
										echo $this->session->userdata('result');
										$this->session->unset_userdata('result');
										echo '</p>';
										}?>
									<tr>
										<td><input name="nextpage" type="hidden" id="nextpage" value="/web/OptionalData-Save"></td>
										<td class="inputElements"><button name="submit" type="submit" class="formButton fbSubmit"><span><?php if ($_SESSION['lang']=="fr"){
														 	echo 'Envoyer';
														 } else{
														 	echo 'Send';
														  }?> </span></button></td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
		</div>
		<div id="sideNav"></div>
		<div id="sideBar"></div>
	</div>