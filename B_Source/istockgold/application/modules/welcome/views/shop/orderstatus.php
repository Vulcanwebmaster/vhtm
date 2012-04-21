 <div id="main-column">
	<h3>Order Status: </h3> 
 <?php 
 	if(isset($order)) 
 	{
 		echo "Order Id : ". $order['order_id'] . '<br/>';
 		echo "Source Currency : ". $order['c_src'] . '<br/>';
 		echo "Source Amount : ". $order['amount_src'] . '<br/>';
 		echo "Source Date : ". $order['date_src'] . '<br/>';
 		echo "Source Status : ". $order['statusSrcStr'] . '<br/>';
 		echo "<hr/>";
 		echo "Destination Currency : ". $order['c_dst'] . '<br/>';
 		echo "Destination Amount : ". $order['amount_dst'] . '<br/>';
 		echo "Destination Status : ". $order['statusDstStr'] . '<br/>';	
 	}
 ?>
 </div>