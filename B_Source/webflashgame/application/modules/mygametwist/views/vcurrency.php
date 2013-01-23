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
						<div class="contBox" id="settingsCurrency">
							<h3><span>Choose a different currency here:</span></h3>
							<form action="<?php echo base_url();?>mygametwist/updateCurrencySetting/" method="post" enctype="application/x-www-form-urlencoded" class="container">
								<table class="formTable">
								<colgroup><col class="first"><col class="second"></colgroup>
								<thead><tr><td></td><td></td></tr></thead>
								<tfoot><tr><td></td><td></td></tr></tfoot>
								<tbody>
									<tr>
										<td class="inputNames"><label for="id_curr">Currency:</label></td>
										<td class="inputElements">
										<select id="id_curr" class="ffSelect" name="currency">
											<?php if(isset($currency_setting->currency)){ ?>
												<option selected="" value="<?php echo $currency_setting->currency ?>">(<?php echo $currency_setting->currency ?>)</option>
												<option value="HRK">Kn (HRK)</option>
												<option value="CZK">Kč (CZK)</option>
												<option value="HUF">Ft (HUF)</option>
												<option value="PLN">zł (PLN)</option>
												<option value="EUR">€ (EUR)</option>
												<option value="GBP">£ (GBP)</option>
												<option value="RON">lei (RON)</option>
												<option value="RUB">руб (RUB)</option>
												<option value="CHF">Fr (CHF)</option>
												<option value="TRY">₤ (TRY)</option>
												<option value="USD">$ (USD)</option>
											<?php }else{ ?>
												<option value="HRK">Kn (HRK)</option>
												<option value="CZK">Kč (CZK)</option>
												<option value="HUF">Ft (HUF)</option>
												<option value="PLN">zł (PLN)</option>
												<option value="EUR">€ (EUR)</option>
												<option value="GBP">£ (GBP)</option>
												<option value="RON">lei (RON)</option>
												<option value="RUB">руб (RUB)</option>
												<option value="CHF">Fr (CHF)</option>
												<option value="TRY">₤ (TRY)</option>
												<option value="USD">$ (USD)</option>
											<?php } ?>
										</select>
										</td>
									</tr>
									<tr>
										<td>
											<input name="cmd" type="hidden" id="cmd" value="currency">
											<input name="mode" type="hidden" id="mode" value="currency">
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
<script type="text/javascript">
	$('#pagemygametwist').addClass('active')
</script>