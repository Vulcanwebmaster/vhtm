<!-------------------Container------------>
<!-------------Check Password------------>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#checkconfpass").validationEngine();
		});
	</script>
<!-------------End Check Password------------>

<?php $this->load->view('front/menu')?> <!-- Menu -->
<div id="main">
			<div id="container" style="float:left;margin-left:294px;position:relative;width:648px;_display:inline">
				<div id="tipHolder"></div>
				<div class="left">
					<div class="contBox" id="settingsPassword">
						<h3><span>Change password</span></h3>
						<form action="<?php echo base_url();?>mygametwist/updateNewPass/" method="post" enctype="application/x-www-form-urlencoded" class="container" id="checkconfpass">
							<table class="formTable">
								<colgroup><col class="first"><col class="second"></colgroup>
								<thead><tr><td></td><td></td></tr></thead>
								<tfoot><tr><td></td><td></td></tr></tfoot>
								<tbody>
									<tr>
										<td class="inputNames"><label for="old_pass">Current password</label></td>
										<td class="inputElements"><input name="old_pass" type="password" class="validate[required] text-input" id="old_pass" maxlength="100" value=""></td>
									<?php if ($this->session->userdata('result')!='')
										{
										echo '<p style="color:red; padding-left:30px">';
										echo $this->session->userdata('result');
										$this->session->unset_userdata('result');
										echo '</p>';
										}?>
									</tr>
									<tr>
										<td class="inputNames"><label for="pass">New password</label></td>
										<td class="inputElements" title="">
											<input name="password" type="password" class="validate[required] text-input" id="pass" maxlength="100" value="">
										</td>
									</tr>
									<tr>
										<td class="inputNames">
											<label for="pass_conf">Repeat password</label>
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
											<button type="submit" class="formButton fbSubmit" name="submit" value="Save"><span>Save</span></button>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
						</div>
					</div>
				</div>
<!---------------------------Left------------------------->
<?php $this->load->view('front/mygametwist_left')?>
<!-------------End container--------------->
</div>
<script type="text/javascript">
	$('#pagemygametwist').addClass('active')
</script>