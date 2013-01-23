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
					<div class="contBox" id="settings_messages_via">
						<h3><span>General settings</span></h3>
						<form action="<?php echo base_url();?>mygametwist/updateGeneralSetting/" method="post" enctype="" class="container" id="fnSettingsPersonal">
							<table class="formTable">
								<colgroup><col class="first"><col class="second"></colgroup>
								<thead>
									<tr><td></td><td></td></tr></thead>
									<tfoot><tr><td></td><td></td></tr></tfoot>
									<tbody>
										<tr>
											<td class="inputNames"><label for="info_type">Messages:</label></td>
											<td class="inputElements">
												<select class="formField" id="info_type" name="message">
													<?php if(isset($general_setting->message)){ ?>
															<option value="<?php echo $general_setting->message ?>">
														<?php if($general_setting->message=="1"){echo "here in your inbox";}elseif($general_setting->message=="2"){echo "via e-mail";}else{echo "via e-mail and here in your inbox";} ?></option>
														<?php if($general_setting->message=="1"){ ?>
															<option value="2">via e-mail</option>
															<option value="3">via e-mail and here in your inbox</option>
														<?php }elseif($general_setting->message=="2"){ ?>
															<option value="1">here in your inbox</option>
															<option value="3">via e-mail and here in your inbox</option>
														<?php }elseif($general_setting->message=="3"){ ?>
															<option value="1">here in your inbox</option>
															<option value="2">via e-mail</option>
														<?php }else{?>
															<option value="1" selected="">here in your inbox</option>
															<option value="2">via e-mail</option>
															<option value="3">via e-mail and here in your inbox</option>
													<?php } }else{ ?>
														<option value="1" selected="">here in your inbox</option>
														<option value="2">via e-mail</option>
														<option value="3">via e-mail and here in your inbox</option>
													<?php } ?>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<input name="cmd" type="hidden" id="cmd" value="general">
												<input type="hidden" name="return2" value="">
												<input name="save" type="hidden" id="save" value="1">
												<input type="hidden" name="nextpage" value="">
												<input type="hidden" name="mode" id="mode" value="general">
											</td>
											<td class="inputElements">
												<button name="submitButton" type="submit" class="formButton fbSubmit"><span>Save</span></button>
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