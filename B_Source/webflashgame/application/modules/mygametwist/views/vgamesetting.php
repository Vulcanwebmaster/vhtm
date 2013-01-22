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
					<div class="contBox" id="settingsGeneral">
						<h3><span>Game settings</span></h3>
						<form action="<?php echo base_url();?>mygametwist/updateGameSetting/" method="post" enctype="application/x-www-form-urlencoded" class="container">
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
										<td class="inputNames"><label for="setting473">Play with guests?</label></td>
										<td class="inputElements">
											<select name="play" id="setting473" class="ffSelect">
												<?php if(isset($game_setting->play)){ ?>
													<option value="<?php echo $game_setting->play ?>"><?php if($game_setting->play=="1"){echo "Yes";}else{echo "No";} ?></option>
													<?php if($game_setting->play=="1"){ ?>
														<option value="0">No</option>
													<?php }else{ ?>
														<option value="1">Yes</option>
												<?php } }else{ ?>
													<option value="0">No</option>
													<option value="1">Yes</option>
												<?php } ?>
											</select>
										</td>
									</tr>
									<tr>
										<td class="inputNames">
											<label for="setting476">Client technology</label>
										</td>
										<td class="inputElements">
											<select name="technology" id="setting476" class="ffSelect">
												<?php if(isset($game_setting->technology)){ ?>
													<option value="<?php echo $game_setting->technology ?>"><?php echo $game_setting->technology ?></option>
													<?php if($game_setting->technology=="Automatic"){ ?>
														<option value="Flash">Flash</option>
														<option value="Java">Java</option>
													<?php }elseif($game_setting->technology=="Flash"){ ?>
														<option value="Automatic">Automatic</option>
														<option value="Java">Java</option>
													<?php }elseif($game_setting->technology=="Java"){ ?>
														<option value="Automatic">Automatic</option>
														<option value="Flash">Flash</option>
													<?php }else{ ?>
														<option value="Automatic">Automatic</option>
														<option value="Flash">Flash</option>
														<option value="Java">Java</option>
													<?php } }else{ ?>
														<option value="Automatic">Automatic</option>
														<option value="Flash">Flash</option>
														<option value="Java">Java</option>
													<?php } ?>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<input name="cmd" type="hidden" id="cmd" value="global">
											<input name="mode" type="hidden" id="mode" value="global">
										</td>
										<td>
											<button type="submit" class="formButton fbSubmit"><span>Save</span></button>
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