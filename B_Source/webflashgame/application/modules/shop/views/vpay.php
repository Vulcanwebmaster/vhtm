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
<!-- 			Container -->
<div id="container"><div id="tipHolder"></div><div class="contBox" id="paymentDetails"><h4><span>PayPal</span></h4><div class="container"><img alt="PayPal" src="https://static1.greentube.com/xsl_gamebase/assets/payment_37/logo_90x50/payment_37_logo_90x50.png"><p>PayPal offers various transaction options. You can choose to 'load' your account with funds and then send payments to recipients in a number of ways. You can also pay via bank transaction, as well as credit card deposits and direct debit.<br>
<a target="_blank" href="https://www.paypal.com/de/cgi-bin/webscr?cmd=xpt/cps/popup/OLCWhatIsPayPal-outside">More information</a></p><div class="fixithelper"></div></div></div><div class="contBox accountLimited"><div class="container"><p>For security reasons, a monthly deposit limit of € 250.00 applies for 3 months from the date of your first deposit using PayPal at CARRESDAS. If you would like to deposit more than the aforementioned sum in any one month, please use one of the other payment methods on offer. This deposit limit will be automatically lifted after the initial 3 month period.</p></div></div><div class="contBox" id="paymentTransferText"><h3><span>Pay for item</span></h3><div class="container">
	<form target="paymentpopup" action="https://www.paypal.com/cgi-bin/webscr" method="post" name="frm_popup_payment" id="frm_popup_payment">
		<table class="formTable">
			<colgroup><col class="first"></colgroup>
			<tbody>
				<tr>
					<td>
						<input type="hidden" name="item_number" value="14,000 Twists">	<!-- Phần này chính là phần sẽ hiển thị mô tả về sản phẩm của bạn thường là mã code phân loại sản phẩm của bạn -->
						<input type="hidden" name="cmd" value="_xclick">
						<input type="hidden" name="no_note" value="1">
						<input type="hidden" name="business" value="trungoco7n@gmail.com">	<!-- Phần này bạn cần thay thế email của người thụ hưởng số tiền mà người mua thanh toán -->
						<input type="hidden" name="currency_code" value="EUR">		<!-- Phần này chính là mã tiền tệ mà bạn muốn thanh toán EUR, USD... -->
						<input type="hidden" name="return" value="<?php echo base_url();?>shop/confirmation/"> <!-- Phần này bạn cần điền value là đường dẫn trang thanh toán  -->
						<input type="hidden" name="item_name" value="14,000 Twists" id="item_name"  size="45"> <!-- Phần này chính là phần ghi chú từ phía người mua, đây chính là phần sẽ được ghi vào invoice rằng họ đã mua cái gì. -->
						<input type="hidden" name="amount"  value="1" id="amount" size="45"> <!-- Giá trị tiền tệ cần để đổi 1$, 2$... -->
						<button id="nextbuttonactive" name="Submit" value="Submit" class="formButton fbSubmit" type="submit">
							<span>Pay</span>
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	</div></div><div id="additionalContentBottom"></div></div>
<!-- 		End Container -->
			
		<div id="sideNav"></div>
</div>