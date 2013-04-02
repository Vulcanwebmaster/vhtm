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
				<div class="contBox selectedItem">
					<div class="container">
						<ul>
							<li class="">
								<div class="itemContainer">
									<img src="images/abo_1_120x120.png"><div class="item">
										<dl>
											<dt>Gold Subscription</dt>
											<dd class="price"></dd><br />
											<dd class="desc">Our one month introductory offer gives you a month of total access to GameTwist.  You will also receive free extra Twists and you can even host your own tournaments!  Order now!</dd>
										</dl>
										<form method="get" action="<?php echo base_url();?>shop/paymentmethod/">
											<input type="hidden" name="id_item" value="2001">
											<button class="formButton fbSubmit bigPinkButton" value="" type="submit" data-omn="shopitem" data-omnvalue="NaN" data-omnname="NaN" id="pickItemBtn">
												<span>Continue</span>
											</button>
										</form>
										<ul class="itemGutschein">
											<li class="buyVoucher">
												<a href="#"><span>Take as a voucher</span></a>
											</li>
											<li class="buyFriend">
												<a id="friendsListLink" href="#"><span>Or give the item to a GameTwist friend</span></a>
											</li>											
										</ul>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div id="additionalContentBottom">
					<div class="contBox backlink">
						<div class="container"><a href="#"><span>Back</span></a></div>
					</div>
				</div>
			</div>
			<div id="sideNav"></div>
			<div id="sideBar"></div>
		</div>