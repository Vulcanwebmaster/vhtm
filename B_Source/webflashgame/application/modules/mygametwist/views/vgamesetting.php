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
					<div class="contBox" id="settingsGeneral">
						<h3><span>Game settings</span></h3>
						<form action="/web/Settings-Save" method="post" enctype="application/x-www-form-urlencoded" class="container">
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
											<select name="gl_473" id="setting473" class="ffSelect">
												<option value="3550">Yes</option>
												<option value="3551">No</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="inputNames">
											<label for="setting476">Client technology</label>
										</td>
										<td class="inputElements">
											<select name="gl_476" id="setting476" class="ffSelect">
												<option value="3643">Automatic</option>
												<option value="3644">Flash</option>
												<option value="3645">Java</option>
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