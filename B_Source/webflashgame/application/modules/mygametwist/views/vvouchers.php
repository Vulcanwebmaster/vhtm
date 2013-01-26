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
				<div id="shopGutschein">
					<div class="contBox">
						<h3><span>Give new vouchers</span></h3>
						<div class="container">
							<p>Twist vouchers are great presents for your gaming friends. So choose from the range of vouchers we have on offer, simply pick it up in our online shop and then use our online form to pass it on to the friend of your choice!</p>
							<table class="listTable">
								<tbody>
									<tr class="noborder">
										<td colspan="2" align="center">
											<form id="frm_b" method="get" action="<?php echo base_url();?>shop">
												<input type="hidden" name="voucher" value="1">
												<button type="submit" class="formButton"><span>Give voucher</span></button>
											</form>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div id="shopGutscheinForm" class="contBox">
						<h3><span>Redeem your voucher</span></h3>
						<div class="container">
							<p><span>Redeem your voucher here. Simply enter your voucher code in the field below and click "Verify"!</span></p>
							<form id="frm_exec" name="frm_exec" method="post" action="/web/Shop/ShopGutschein">
								<table class="formTable">
									<colgroup><col class="first"><col class="second"></colgroup>
									<tbody>
										<tr>
											<td>Voucher code:</td>
											<td><input type="text" id="gcode" name="gcode" class="formField" maxlength="50"></td>
										</tr>
										<tr>
											<td><input type="hidden" name="d"><input type="hidden" name="m" value="check"></td>
											<td><button id="buyVoucher_btn" name="submit" type="submit" class="formButton fbSubmit" value="Verify"><span>Verify</span></button></td>
										</tr>
									</tbody>
								</table>
							</form>
						</div>
					</div>
				</div>
	</div>
<!---------------------------Left------------------------->
<?php $this->load->view('front/mygametwist_left')?>
<!-------------End container--------------->
</div>