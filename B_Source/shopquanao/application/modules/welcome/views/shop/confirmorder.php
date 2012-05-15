<?php //print displayStatus(); // for BEP?>
<?php echo validation_errors('<div class="message error">','</div>'); // for CI ?>
<style type="text/css">
	h2{font-size:12px; font-weight:bold; margin:0; padding:0; border-style:none}
	p{text-transform:none; margin-bottom:0}
	input{margin-bottom:10px}
</style>
<div style="text-align:left; font-size:12px; padding-left:50px">
	<h2 style="margin:0;padding-top:20px">Chi tiết đơn hàng:</h2><br />
	<?php echo form_open($module."/emailorder"); ?>
	<?php
	
	if (isset($_SESSION['cart'])){
		$count = 1;
		foreach ($_SESSION['cart'] as $PID => $row){	
			echo "<p class='padnmgn'><b> Số lượng: ". $row['count'] . " - Tên sản phẩm: " . $row['name'] . " - Giá tiền từng sản phẩm: " . $row['price']."</b></p><br/>\n";
			echo "<input type='hidden' name='item_name_".$count."' value='".$row['name']."'/>\n";
			echo "<input type='hidden' name='item_quantity_".$count."' value='".$row['count']."'/>\n";
			echo "<input type='hidden' name='item_price_".$count."' value='".$row['price']."'/>\n";
			echo "<input type='hidden' name='item_currency_".$count."' value='".$this->lang->line('webshop_currency_symbol')."'/>\n";
			echo "<input type='hidden' name='ship_method_name_".$count."' value='Posten'/>\n";
			echo "<input type='hidden' name='ship_method_price_".$count."' value='".$shippingprice."'/>\n";
		}
	}
	if(isset($_SESSION['totalprice']))
	{
		$totalprice = $_SESSION['totalprice'];
		$grandtotal = (int)$totalprice + $shippingprice ;
		echo "<p class='padnmgn'><b>". "Tổng giá trị các mặt hàng: ".$this->lang->line('webshop_currency_symbol')." ".number_format($totalprice,2,'.',','). "</b></p>\n";
	}
	echo "<p class='padnmgn'><b>"."Tiền shipping: ".$this->lang->line('webshop_currency_symbol')." ".number_format($shippingprice ,2,'.',',') . "</b></p>\n";
	echo "<p class='padnmgn'><b>"."Số tiền phải thanh toán: ".$this->lang->line('webshop_currency_symbol')." ".number_format($grandtotal,2,'.',','). "</b></p>\n";
	?>
	
	<hr style="margin-bottom:20px"/>
	<p><?php echo $this->lang->line('webshop_first_name'); ?></p>
	<input type="text" name="customer_first_name" value="<?php 
	if(isset($fname))
	{
		echo $fname;
	}
	else
	{
	 	echo set_value('customer_first_name');
	 }
	 ?>" size="30" />
	
	<p><?php echo $this->lang->line('webshop_last_name'); ?></p>
	<input type="text" name="customer_last_name" value="<?php 
	if(isset($lname))
	{
		echo $lname;
	}
	else
	{
	 	echo set_value('customer_last_name');
	 }
	?>" size="30" />
	
	<p><?php echo $this->lang->line('webshop_mobile_tel'); ?></p>
	<input type="text" name="telephone" value="<?php
	if(isset($telephone))
	{
		echo $telephone;
	}
	else
	{
		echo set_value('telephone');
	}
	 ?>" size="15" />
	
	<p><?php echo $this->lang->line('orders_email'); ?></p>
	<input type="text" name="email" value="<?php 
	if(isset($email))
	{
		echo $email;
	}
	else
	{
	 	echo set_value('email');
	 }
	 ?>" size="40" />
	
	<p><?php echo $this->lang->line('orders_email_confirm'); ?></p>
	<input type="text" name="emailconf" value="<?php 
	if(isset($email))
	{
		echo $email;
	}
	else
	{
		echo set_value('emailconf'); 
	}
	?>" size="40" />
	
	<p><?php echo $this->lang->line('orders_shipping_address'); ?></p>
	<input type="text" name="shippingaddress" value="<?php
	if(isset($address))
	{
		echo $address;
	}
	else
	{
		echo set_value('shippingaddress'); 
	}
	?>" size="50" />
	
	<p><?php echo $this->lang->line('orders_post_code'); ?></p>
	<input type="text" name="post_code" value="<?php
	if(isset($pcode))
	{
		echo $pcode;
	}
	else
	{
		echo set_value('post_code'); 
	}
	?>" size="8" />
	
	<p><?php echo $this->lang->line('orders_city'); ?></p>
	<input type="text" name="city" value="<?php 
	if(isset($city))
	{
		echo $city;
	}
	else
	{
		echo set_value('city'); 
	}
	?>" size="20" />
	
	<br />
	<input type="submit" name="submit" value="<?php echo "Thực hiện"; ?>" />
	
	<?php echo form_close(); ?>
</div>