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
						<form name="setPaymentConstraint" id="setPaymentConstraint" action="" method="get">
							<table class="formTable">
								<tbody><tr>
									<td><label for="id_curr">Currency</label></td>
									<td>	
										<select name="id_curr" id="selectCurrency">
											<option value="1" selected="">€ (EUR)</option>
											<option value="2">$ (USD)</option>
											<option value="3">£ (GBP)</option>
											<option value="4">Fr (CHF)</option>
											<option value="6">Ft (HUF)</option>
											<option value="7">Kc (CZK)</option>
											<option value="8">zl (PLN)</option>
											<option value="9">lei (RON)</option>
											<option value="10">Kn (HRK)</option>
											<option value="23">??? (RUB)</option>
											<option value="24">£ (TRY)</option>
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
					<form method="get" action="#">
						<input type="hidden" name="id_item" value="">
						<table class="itemTable listTable ">
							<thead>
								<tr><td colspan="5">Get Twists and start gaming ...</td><td></td></tr>
							</thead>
							<tfoot>
								<tr><td colspan="5"></td><td></td></tr>
							</tfoot>
							<tbody>
								<tr>
									<td><img src="<?php echo base_url();?>assets/flash_game/images/twist.png" alt="" title="14.000 Twists"></td>
									<td><span class="label">14.000 Twists</span></td>
									<td class="regularPrice"></td>
									<td class="sale"></td>
									<td class="price">€ 2,00</td>
									<td class="cta"><button class="formButton fbSubmit " value="2039" type="submit" data-omn="shopitem" data-omnvalue="14000" data-omnname="2039" id=""><span>Deposit now</span></button></td>
								</tr>
								<tr>
									<td><img src="<?php echo base_url();?>assets/flash_game/images/twist.png" alt="" title="22.500 Twists"></td>
									<td><span class="label">22.500 Twists</span></td>
									<td class="regularPrice"></td>
									<td class="sale"></td>
									<td class="price">€ 3,00</td>
									<td class="cta"><button class="formButton fbSubmit " value="2043" type="submit" data-omn="shopitem" data-omnvalue="22500" data-omnname="2043" id=""><span>Deposit now</span></button></td>
								</tr>
								<tr>
									<td><img src="<?php echo base_url();?>assets/flash_game/images/twist.png" alt="" title="30.000 Twists"></td>
									<td><span class="label">30.000 Twists</span></td>
									<td class="regularPrice"></td>
									<td class="sale"></td>
									<td class="price">€ 4,00</td>
									<td class="cta"><button class="formButton fbSubmit " value="2020" type="submit" data-omn="shopitem" data-omnvalue="30000" data-omnname="2020" id=""><span>Deposit now</span></button></td>
								</tr>
								<tr>
									<td><img src="<?php echo base_url();?>assets/flash_game/images/twist.png" alt="" title="37.500 Twists"></td>
									<td><span class="label">37.500 Twists</span></td>
									<td class="regularPrice"></td>
									<td class="sale"></td>
									<td class="price">€ 5,00</td>
									<td class="cta">
										<button class="formButton fbSubmit " value="2003" type="submit" data-omn="shopitem" data-omnvalue="37500" data-omnname="2003" id="">
											<span>Deposit now</span>
										</button>
									</td>
								</tr>
								<tr>
									<td><img src="<?php echo base_url();?>assets/flash_game/images/twist.png" alt="" title="37.500 Twists"></td>
									<td><span class="label">37.500 Twists</span></td>
									<td class="regularPrice"></td>
									<td class="sale"></td>
									<td class="price">€ 5,00</td>
									<td class="cta"><button class="formButton fbSubmit " value="2003" type="submit" data-omn="shopitem" data-omnvalue="37500" data-omnname="2003" id=""><span>Deposit now</span></button></td>
								</tr>
								<tr>
									<td><img src="<?php echo base_url();?>assets/flash_game/images/twist.png" alt="" title="37.500 Twists"></td>
									<td><span class="label">37.500 Twists</span></td>
									<td class="regularPrice"></td>
									<td class="sale"></td>
									<td class="price">€ 5,00</td>
									<td class="cta"><button class="formButton fbSubmit " value="2003" type="submit" data-omn="shopitem" data-omnvalue="37500" data-omnname="2003" id=""><span>Deposit now</span></button></td>
								</tr>
								<tr>
									<td><img src="<?php echo base_url();?>assets/flash_game/images/twist.png" alt="" title="37.500 Twists"></td>
									<td><span class="label">37.500 Twists</span></td>
									<td class="regularPrice"></td>
									<td class="sale"></td>
									<td class="price">€ 5,00</td>
									<td class="cta"><button class="formButton fbSubmit " value="2003" type="submit" data-omn="shopitem" data-omnvalue="37500" data-omnname="2003" id=""><span>Deposit now</span></button></td>
								</tr>
								<tr>
									<td><img src="<?php echo base_url();?>assets/flash_game/images/twist.png" alt="" title="37.500 Twists"></td>
									<td><span class="label">37.500 Twists</span></td>
									<td class="regularPrice"></td>
									<td class="sale"></td>
									<td class="price">€ 5,00</td>
									<td class="cta"><button class="formButton fbSubmit " value="2003" type="submit" data-omn="shopitem" data-omnvalue="37500" data-omnname="2003" id=""><span>Deposit now</span></button></td>
								</tr>
								<tr>
									<td><img src="<?php echo base_url();?>assets/flash_game/images/twist.png" alt="" title="37.500 Twists"></td>
									<td><span class="label">37.500 Twists</span></td>
									<td class="regularPrice"></td>
									<td class="sale"></td>
									<td class="price">€ 5,00</td>
									<td class="cta"><button class="formButton fbSubmit " value="2003" type="submit" data-omn="shopitem" data-omnvalue="37500" data-omnname="2003" id=""><span>Deposit now</span></button></td>
								</tr>
							</tbody></table>
						</form>
						<div class="itemDescription">
							<b>Let's Twist at GameTwist:</b> There's something for everyone at GameTwist, so get your Twist pack here and start gaming!<br><br>
Note: Twists are the currency used at GameTwist. They cannot be paid out as real money at any time.
						</div>
					</div>
				</div>
				<div class="contBox contItemsSide omnSubscription">
					<div class="container">
						<form method="get" action="/web/Shop/Shop-Item">
							<input type="hidden" name="id_item" value="">
								<table class="itemTable listTable ">
									<thead>
										<tr>
											<td colspan="5">Play to your heart's content with a Gold subscription ...</td>
											<td></td>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<td colspan="5"></td>
											<td></td>
										</tr>
									</tfoot>
									<tbody>
										<tr>
											<td><img src="<?php echo base_url();?>assets/flash_game/images/abo_1_32x32.png" alt="" title="Gold Subscription - 1 month(s) (Twists: 52.500)"></td>
											<td><span class="label">Gold Subscription - 1 month(s) (Twists: 52.500)</span></td>
											<td class="regularPrice"></td>
											<td class="sale"></td>
											<td class="price">€ 8,50</td>
											<td class="cta"><button class="formButton fbSubmit " value="2001" type="submit" data-omn="shopitem" data-omnvalue="52500" data-omnname="2001" id=""><span>Deposit now</span></button></td>
										</tr>
										<tr>
											<td><img src="<?php echo base_url();?>assets/flash_game/images/abo_3_32x32.png" alt="" title="Gold Subscription - 3 month(s) (Twists: 157.500)"></td>
											<td><span class="label">Gold Subscription - 3 month(s) (Twists: 157.500)</span></td><td class="regularPrice"></td><td class="sale"></td><td class="price">€ 22,50</td>
											<td class="cta"><button class="formButton fbSubmit " value="2011" type="submit" data-omn="shopitem" data-omnvalue="157500" data-omnname="2011" id=""><span>Deposit now</span></button></td>
										</tr>
										<tr>
											<td><img src="<?php echo base_url();?>assets/flash_game/images/abo_12_32x32.png" alt="" title="Gold Subscription - 12 month(s) (Twists: 630.000)"></td>
											<td><span class="label">Gold Subscription - 12 month(s) (Twists: 630.000)</span></td>
											<td class="regularPrice"></td>
											<td class="sale"></td>
											<td class="price">€ 72,00</td>
											<td class="cta"><button class="formButton fbSubmit " value="2002" type="submit" data-omn="shopitem" data-omnvalue="630000" data-omnname="2002" id=""><span>Deposit now</span></button></td>
										</tr>
									</tbody>
								</table>
							</form>
							<div class="itemDescription">
								<strong>You can defeat them all? Get yourself a </strong>
								<strong>GameTwist gold subscription and test yourself against the best of the best.</strong>
								Alongside taking part in official tournaments you will also have the opportunity to create exclusive tournaments for you and your friends!<br><br>
							</div>
						</div>
					</div>
					<div class="contBox contItemsSide shopApp">
						<div class="container">
							<table class="itemTable listTable">
								<thead>
									<tr>
										<td colspan="5">Mobile App - GameTwist on the go</td>
										<td></td>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<td colspan="5"></td>
										<td></td>
									</tr>
								</tfoot>
								<tbody>
									<tr>
										<td><img src="<?php echo base_url();?>assets/flash_game/images/gt_mobilegames_shopicon.png" alt="" title=""></td>
										<td><span class="label">GameTwist App for iOS</span></td>
										<td class="regularPrice"></td>
										<td class="sale"></td>
										<td class="price">Free</td>
										<td class="cta" style="text-align:center; height:72px">
											<a href="http://wap.greentube.com/slots/market_forward.php?edition=com.funstage.gta_ios">
											<img src="<?php echo base_url();?>assets/flash_game/images/app_ios.png" alt="" title="" style="-moz-opacity:0.5;"></a>
										</td>
									</tr>
									<tr>
										<td><img src="<?php echo base_url();?>assets/flash_game/images/gt_mobilegames_shopicon.png" alt="" title=""></td>
										<td><span class="label">GameTwist App for Android</span></td>
										<td class="regularPrice"></td>
										<td class="sale"></td>
										<td class="price">Free</td>
										<td>
											<a href="http://wap.greentube.com/slots/market_forward.php?edition=com.funstage.gta_android">
											<img src="images/google_play.png" alt="" title=""></a>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="itemDescription">Wherever you are, whenever you want to: Get our mobile App and play your favorite slots on your iPhone, Android cell phone or on your tablet PC! Start Lucky Lady’s Charm™ Deluxe anytime!</div>
						</div>
					</div>
					<div class="contBox">
						<div class="container">All prices incl. sales tax</div>
					</div>
					<div id="additionalContentBottom"></div>
				</div>
				<div id="sideNav"></div>
				<div id="sideBar"></div>
			</div>
<script type="text/javascript">
	$('#pageshop').addClass('active')
</script>