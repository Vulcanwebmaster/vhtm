<div id="main">
			<div id="additionalContentTop">
				<div class="contBox" id="shopSteps">
					<h3><span>You're just 3 steps away from completing your purchase</span></h3>
					<div class="container">
						<ul>
							<li ><span>Item selection</span></li>
							<li class="active"><span>Payment method</span></li>
							<li><span>Payment</span></li>
							<li><span>Confirmation</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="container">
				<div id="tipHolder"></div>			
				<div class="contBox">
					<h3><span>Choose your payment method</span></h3>
					<div class="container">Your current selection:&nbsp;<strong>INTERNATIONAL</strong> and <strong> (EUR)</strong><br>
					<a id="showCountryCurrencyForm" href="#">Would you like to change your location and/or currency?</a></div>
				</div>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#countryCurrencyForm, #showFormContainerMask').hide();
						$('#showCountryCurrencyForm').click(function(){
							$('#countryCurrencyForm, #showFormContainerMask').show();
							$('#countryCurrencyForm').addClass('countryCurrencyFormContainer');
						});
						$('#formCloseBtn, .fbSubmit').click(function(){
							$('#countryCurrencyForm, #showFormContainerMask').hide();
							$('#countryCurrencyForm').removeClass('countryCurrencyFormContainer');
						});
					});
				</script>
				<div class="contBox" id="countryCurrencyForm">
					<div id="formCloseBtn"><a href="javascript:void(0)"><span>close</span></a></div>
					<h3><span>Change country/currency</span></h3>
					<div class="container">
						<form name="setPaymentConstraint" id="setPaymentConstraint" action="" method="get">
							<table class="formTable">
								<tbody><tr>
									<td><label for="id_country">Country</label></td>
									<td>
										<select name="id_country" id="selectCountry">
											<option value="1" relatedcurr="1">Austria</option>
											<option value="6" relatedcurr="1">Belgium</option>
											<option value="60" relatedcurr="10">Croatia (Hrvatska)</option>
											<option value="63" relatedcurr="7">Czech Republic</option>
											<option value="80" relatedcurr="1">France</option>
											<option value="2" relatedcurr="1">Germany</option>
											<option value="89" relatedcurr="1">Greece</option>
											<option value="102" relatedcurr="6">Hungary</option>
											<option value="0" relatedcurr="1" selected="">INTERNATIONAL</option>
											<option value="108" relatedcurr="1">Ireland</option>
											<option value="8" relatedcurr="1">Italy</option>
											<option value="155" relatedcurr="1">Netherlands</option>
											<option value="174" relatedcurr="8">Poland</option>
											<option value="179" relatedcurr="9">Romania</option>
											<option value="180" relatedcurr="23">Russia</option>
											<option value="4" relatedcurr="1">Slovakia</option>
											<option value="195" relatedcurr="1">Slovenia</option>
											<option value="7" relatedcurr="1">Spain</option>
											<option value="205" relatedcurr="1">Sweden</option>
											<option value="3" relatedcurr="4">Switzerland</option>
											<option value="216" relatedcurr="24">Turkey</option>
											<option value="223" relatedcurr="3">United Kingdom</option>
											<option value="224" relatedcurr="2">United States</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><label for="id_curr">Currency</label></td>
									<td>
										<select name="id_curr" id="selectCurrency">
											<option value="1" selected=""> (EUR)</option>
											<option value="2">$ (USD)</option>
											<option value="3">à(GBP)</option>
											<option value="4">Fr (CHF)</option>
											<option value="6">Ft (HUF)</option>
											<option value="7">Kc (CZK)</option>
											<option value="8">zl (PLN)</option>
											<option value="9">lei (RON)</option>
											<option value="10">Kn (HRK)</option>
											<option value="23">??? (RUB)</option>
											<option value="24">à(TRY)</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><input type="hidden" name="id_item" value="2001"></td>
									<td class="inputElements last">
										<button value="Continue" class="formButton fbSubmit" type="submit"><span>Continue</span></button>
									</td>
								</tr>
							</tbody></table>
						</form>
					</div>
				</div>
				<div class="container">
					<form method="get" action="<?php echo base_url();?>shop/pay/">
						<input type="hidden" name="id_paymenttype" value="">
						<input type="hidden" name="id_item" value="2001">
						<input type="hidden" name="id_country" value="231">
						<table class="listTable  big paymentTable">
							<thead><tr><td colspan="2">The most popular payment methods</td><td></td></tr>
							</thead><tfoot><tr><td colspan="2"></td><td></td></tr></tfoot>
							<tbody>
								<tr class="">
									<td class="first"><img alt="" src="<?php echo base_url();?>assets/flash_game/images/payment_57_logo_90x50.png"></td>
									<td>
										<span class="label">Credit card payment</span>
										<span class="paymentToolTipToggler"><span>i</span></span>
										<div id="paymentDescContainer57" class="paymentDescContainer">
											<p class="desc">Deposit using your Visa or MasterCard credit card. The transaction is made quickly and safely (PCI certified). Your data will be transmitted via an encrypted connection. More information can be found at
												<a href="#">www.visa.com</a> and 
												<a href="http://www.mastercard.com">www.mastercard.com</a>
											</p>
										</div>
									</td>
									<td class="cta last">
										<button class="formButton fbSubmit" type="submit" value="57" data-omn="shoppayment" data-omnvalue="52500" data-omnname="2001">
											<span>Purchase now</span>
										</button>
									</td>
								</tr>
								<tr class="">
									<td class="first">
										<img alt="" src="<?php echo base_url();?>assets/flash_game/images/payment_37_logo_90x50.png">
									</td>
									<td>
										<span class="label">PayPal</span>
										<span class="paymentToolTipToggler"><span>i</span></span>
										<div id="paymentDescContainer37" class="paymentDescContainer">
											<p class="desc">PayPal is an online payment service that allows you to make and receive international payments online. 
												<a href="#" target="_blank">More information</a>
											</p>
										</div>
									</td>
									<td class="cta last">
										<button class="formButton fbSubmit" type="submit" value="37" data-omn="shoppayment" data-omnvalue="52500" data-omnname="2001">
											<span>Purchase now</span>
										</button>
									</td>
								</tr>
							</tbody></table>
						</form>
						</div>
						<div id="paymentToolTip" style="visibility: hidden; zoom: 1; opacity: 0; top: -99999px; left: -99999px; display: block;">
							<div class="toolTipText">
								<div class="desc">You can make payments quickly and easily by calling a premium rate number.</div>
							</div>
							<div class="footer"></div>
						</div>
						<div id="additionalContentBottom">
							<div class="contBox backlink">
								<div class="container"><a href="#"><span>Back</span></a></div>
							</div>
						</div>
					</div>
			<div id="sideNav"></div>
</div>