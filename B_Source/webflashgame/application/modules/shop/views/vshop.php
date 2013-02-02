<?php $this->load->view('front/menu')?>
	<div id="main">
			<div id="additionalContentTop">
				<div class="contBox" id="shopSteps">
					<h3><span>You're just 3 steps away from completing your purchase</span></h3>
					<div class="container">
						<ul>
							<li class="active"><span>Item selection</span></li>
							<li><span>Payment method</span></li>
							<li><span>Payment</span></li>
							<li><span>Confirmation</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="container">
				<div id="tipHolder"></div>				
					<div class="contBox"><style type="text/css">
			#doiBox {
				margin: 0 0 40px;
				padding: 0;
				position: relative;
			}
			
			#doiBox .container {
				overflow: hidden;
				position: relative;
			}
			
			#doiBox * {
				position: relative;
				z-index: 2;
			}
			
			#doiBoxContentDisabler {
				position: absolute;
				opacity: .75;
				filter: alpha(opacity=75);
				-ms-filter: "alpha(opacity=75)";
				-khtml-opacity: .75;
				-moz-opacity: .75;
				z-index: 99;
			}
			
			#doiBox .doiBoxBackground {
				bottom: 0;
				height: 100%;
				position: absolute;
				right: 0;
				width: 100%;
				z-index: 1;
			}
		</style>		
					<div id="doiBoxContentDisabler"></div>
					<h3><span>Welcome to the GameTwist Shop!</span></h3>
					<div class="container">You can choose from a range of different packages and additional features for your GameTwist account in the Shop. Choose individual items from our wide selection of products and add them to your account in a few easy steps.</div>
				</div>
				<div class="contBox">
					<div class="container">You would like to pay in another currency?<br>
						<a id="showCountryCurrencyForm" href="#">Change currency</a>
					</div>
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
				<div class="contBox" id="countryCurrencyForm" style="display: none;">
					<div id="formCloseBtn"><a href="javascript:void(0)"><span>close</span></a></div>
					<h3><span>Change country/currency</span></h3>
					<div class="container">
						<form name="setPaymentConstraint" id="setPaymentConstraint" action="<?php echo base_url();?>mygametwist/updateCurrencySetting/" method="post">
							<table class="formTable">
								<tbody>
								<tr>
									<td><label for="id_curr">Currency</label></td>
									<td>	
										<select name="currency" class="ffSelect" id="selectCurrency">
<!-- 											<option value="EUR" selected="">€ (EUR)</option> -->
											<?php if(isset($currency_setting->currency)){ ?>
												<option selected="" value="<?php echo $currency_setting->currency ?>">(<?php echo $currency_setting->currency ?>)</option>
											<?php foreach ($list_tiente as $tiente) { ?>
												<option value="<?php echo $tiente->name ?>"> <?php echo $tiente->icon ?>(<?php echo $tiente->name ?>)</option>
											<?php } ?>
											<?php }else{ 
													 foreach ($list_tiente as $tiente) { ?>
												<option value="<?php echo $tiente->name ?>"> <?php echo $tiente->icon ?>(<?php echo $tiente->name ?>)</option>
											<?php } } ?>
										</select>
									</td>
								</tr>
								<tr>
									<td><input type="hidden" name="id_item" value=""></td>
									<td class="inputElements last"><button value="Continue" class="formButton fbSubmit" type="submit"><span>Continue</span></button></td>
								</tr>
							</tbody></table>
						</form>
					</div>
				</div>
				<div class="contBox contItemsSide omnTwistPackage">
				<div class="container">
					
						<input type="hidden" name="id_item" value="">
						<table class="itemTable listTable ">
							<thead>
								<tr><td colspan="5">Get Twists and start gaming ...</td><td></td></tr>
							</thead>
							<tfoot>
								<tr><td colspan="5"></td><td></td></tr>
							</tfoot>
							<tbody>
								
								<!--------------- Tính tỷ giá và đổi tiền trong game ---------->
								<?php foreach ($list_money as $money) { ?>
								<form method="post" action="<?php echo base_url();?>shop/itemselection/">
									<tr>
										<td><img src="<?php echo base_url();?>assets/flash_game/images/twist.png" alt="" title="14.000 Twists"></td>
										<td><span class="label"><?php echo $money->currency_game ?> Twists</span></td>
										<td class="regularPrice"></td>
										<td class="sale"></td>
										<input type="hidden" name="currencygame123" value="<?php echo $money->currency_game ?> ">
										<?php if(isset($convert_money, $tygia)){ ?>
											<td class="price"> <?php echo $convert_money->icon.' '; echo $money->euro * $tygia ?></td>
											<td class="cta">
												<button class="formButton fbSubmit " name="tygia1" value="<?php echo $money->euro * $tygia ?>" type="submit" data-omn="shopitem" data-omnvalue="14000" data-omnname="2039" id=""><span>Deposit now</span></button>
											</td>
										<?php }else{ ?>
											<td class="price">€ <?php echo $money->euro?></td>
											<td class="cta">
												<button class="formButton fbSubmit " name="tygia1" value="<?php echo $money->euro ?>" type="submit" data-omn="shopitem" data-omnvalue="14000" data-omnname="2039" id=""><span>Deposit now</span></button>
											</td>
										<?php } ?>
									</tr>
								</form>
								<?php }  ?>
								<!------------End Tính tỷ giá và đổi tiền trong game ---------->
								
							</tbody></table>
						
						<div class="itemDescription">
							<b>Let's Twist at GameTwist:</b> There's something for everyone at GameTwist, so get your Twist pack here and start gaming!<br><br>
Note: Twists are the currency used at GameTwist. They cannot be paid out as real money at any time.
						</div>
					</div>
				</div> <br clear="both" />
					<div id="additionalContentBottom"></div>
				</div>
				<div id="sideNav"></div>
				<div id="sideBar"></div>
			</div>
<script type="text/javascript">
	$('#pageshop').addClass('active')
</script>