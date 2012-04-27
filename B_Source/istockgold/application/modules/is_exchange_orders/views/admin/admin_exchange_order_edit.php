<div id="main"><div id="page_title"><h1>Exchange orders </h1></div> 
<div id="status_box">
<style type="text/css">td{ height:30px;}</style>
<div id="head">Edit Exchange Order #<?php echo $order['order_code']?>></div>
<a href="">Back to List Order exchanges</a>
	<table width="99%" cellspacing="4" cellpadding="4" border="0">
	<form method="post" action="" name="edit_lines"></form>
	  <tbody>
		<tr>
			<td>Order Id</td>
			<td><?php echo $order['order_id']?></td>
		</tr>
		<tr>
			<td><strong>Source Currency </strong>:</td>
			<td>
				<select style="width:205px" name="src_cid" onchange="" id="src_cid">
					<option value="1">LibertyReserve Usd</option>
					<option selected="" value="2">WesternUnion Usd</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><strong>Source Amount</strong>:</td>
			<td><input style="width:200px" value="<?php echo $order['amount_src'] ?>" id="src_amount" name="src_amount"></td>
		</tr>
		<tr>
			<td>Source Date:</td>
			<td><input style="width:200px" value="<?php echo $order['date_src'] ?>" id="date_src" name="date_src"></td>
		</tr>
		<tr>
			<td><strong>Source Status</strong>:</td>
			<td>
				<select style="width:205px" id="status_src" name="status_src">
					<?php 
					if(count($order_status))
					{
						foreach($order_status as $key => $list)
						{
							if($list['id'] == $order['status_src'])
								echo "<option selected=\"\" value=\"".$list['id']."\">".$list['value']."</option>";
							else
							echo "<option value=\"".$list['id']."\">".$list['value']."</option>";
						}
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td style="height:10px" colspan="2"><div id="head"></div></td>
		</tr>
      
		<tr>
			<td><strong>Destination Currency </strong>:</td>
			<td> 
				<select style="width:205px" name="dst_cid" onchange="" id="dst_cid">
					<option value="1">E-gold Gold</option>
					<option selected="" value="2">E-gold Silver</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><strong>Destination Amount</strong>:</td>
			<td><input style="width:200px" value="<?php echo $order['amount_dst'] ?>" id="amount_dst" name="amount_dst"></td>
		</tr>
		<tr>
			<td>Destination Date:</td>
			<td><input style="width:200px" value="<?php echo $order['date_src'] ?>" id="date_src" name="date_src"></td>
		</tr>
		<tr>
			<td><strong>Destination Account</strong>:</td>
			<td><input style="width:200px" value="<?php echo $order['account_dst'] ?>" id="account_dst" name="account_dst"></td>
		</tr>
		<tr>
			<td><strong>Order Status</strong>:</td>
			<td>
				<select style="width:205px" name="status_dst" id="status_dst">
					<?php 
					if(count($order_status))
					{
						foreach($order_status as $key => $list)
						{
							if($list['id'] == $order['status_dst'])
								echo "<option selected=\"\" value=\"".$list['id']."\">".$list['value']."</option>";
							else
							echo "<option value=\"".$list['id']."\">".$list['value']."</option>";
						}
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td style="height:10px" colspan="2"><div id="head"></div></td>
		</tr>
		<tr>
			<td>Email Address:</td>
			<td><?php echo $order['email'] ?></td>
		</tr>
		<tr>
			<td valign="top"><strong>Exchange Note</strong>:</td>
			<td><textarea id="note" rows="3" cols="60" name="note"><?php echo $order['note'] ?></textarea></td>
		</tr>
		<tr>
			<td style="text-align:center;" colspan="2">
				<input type="reset" onclick="" class="btn" value="Cancel" id="button" name="cancel">
				<input type="submit" value="Update" class="btn" name="submit">
			</td>
		</tr>
  </tbody></table>
</div>
</div>