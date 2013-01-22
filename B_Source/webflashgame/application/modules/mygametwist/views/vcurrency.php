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
			<div id="container">
				<div id="tipHolder"></div>
			<div class="left">
						<div class="contBox" id="settingsCurrency">
							<h3><span>Choose a different currency here:</span></h3>
							<form action="/web/Settings-Save" method="post" enctype="application/x-www-form-urlencoded" class="container">
								<table class="formTable">
								<colgroup><col class="first"><col class="second"></colgroup>
								<thead><tr><td></td><td></td></tr></thead>
								<tfoot><tr><td></td><td></td></tr></tfoot>
								<tbody>
									<tr>
										<td class="inputNames"><label for="id_curr">Currency:</label></td>
										<td class="inputElements">
											<select name="id_curr" id="id_curr" class="ffSelect">
												<option value="10">Kn (HRK)</option>
												<option value="7">Kc (CZK)</option>
												<option value="1" selected=""> (EUR)</option>
												<option value="6">Ft (HUF)</option>
												<option value="8">zl (PLN)</option>
												<option value="3">à(GBP)</option>
												<option value="9">lei (RON)</option>
												<option value="23">??? (RUB)</option>
												<option value="4">Fr (CHF)</option>
												<option value="24">à(TRY)</option>
												<option value="2">$ (USD)</option>
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