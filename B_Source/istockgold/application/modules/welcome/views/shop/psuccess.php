 <div id="main-column">
	<div id="au-title">
                    <label style="color: green;">Payment is Successful</label>
     </div>
     <div class="order-status" style="font-size: 13px;">
		 <?php 
		 	if(isset($order)) 
		 	{
		 		echo "<p>Order Id : ". $order['order_id'] . '</p>';
		 		echo "<p>Source Currency : ". $order['c_src'] . '</p>';
		 		echo "<p>Source Amount : ". $order['amount_src'] . '</p>';
		 		echo "<p>Source Date : ". $order['date_src'] . '</p>';
		 		echo "<p>Source Status : ". $order['statusSrcStr'] . '</p>';
		 		echo "<hr style=\"border-top:solid 7px #b0b0b0; margin-top:-5px\">";
		 		echo "<p>Destination Currency : ". $order['c_dst'] . '</p>';
		 		echo "<p>Destination Amount : ". $order['amount_dst'] . '</p>';
		 		echo "<p>Destination Status : ". $order['statusDstStr'] . '</p>';	
		 	}
		 ?>
 	</div>
 </div>