<div id="main">
	<div id="page_title">
		<h1>Exchange settings</h1>
	</div>
	<a href="http://demo.auto-exchanger.com/admin/adm_currencies/?Action=Add">
			<img width="16" height="16" border="0" src="<?php echo base_url();?>assets/images/admin/n_add.png">
			Add new currency</a>
	<style type="text/css">
		select
		{
			font-size: 11px;
			height: 21px;
		}
		.tablefirstrow, .tablefirstrow td
		{
			padding: 2px;
			line-height: 16px !important;
		}
	</style>
	<form action="<?php echo base_url()?>index.php/currency/admin/edit" method="post" name="form1" id="form1">
	<div style="width: 99%">
		<table cellspacing="0" cellpadding="0" border="0" class="rates">
			<tbody>
				<tr class="tablefirstrow">
					<td nowrap="" style="font-size: 11px;">Cid</td>
					<td nowrap="" style="font-size: 11px;">Currency<br>name</td>
					<td nowrap="" style="font-size: 11px;">Currency<br>metal<br>name</td>
					<td nowrap="" style="font-size: 11px;">Exchange<br>status</td>
					<td nowrap="" style="font-size: 11px;">Exchange<br>accept<br>limit</td>
					<td nowrap="" style="font-size: 11px;">Exchange<br>max<br>fee</td>
					<td nowrap="" style="font-size: 11px;">Exchange<br>min</td>
					<td nowrap="" style="font-size: 11px;">Exchange<br>max</td>
					<td nowrap="" style="font-size: 11px;">Reserve<br>amount</td>
					<td nowrap="" style="font-size: 11px;">Show<br>as<br>source</td>
					<td nowrap="" style="font-size: 11px;">Show<br>as<br>destination</td>
				</tr>
				
				<?php 
				if (count($currencies))
				{
					$i = 0;
					foreach ($currencies as $key => $list)
					{
						if($i % 2 == 0)
							echo "<tr class=\"col1\">";
						else
							echo "<tr class=\"col0\">";
							
						echo "<td>".$list['c_id']."</td>";
						echo "<td>".$list['c_name']."</td>";
						echo "<td>".$list['c_metal_name']."</td>";
						if ($list['status']=="1")
							echo "<td>
									<select name=\"status".$list['c_id']."\">
										<option selected=\"\" value=\"1\">Yes</option>
										<option value=\"0\">No</option>
									</select>
								 </td>";
						else
							echo "<td>
									<select name=\"status".$list['c_id']."\">
										<option value=\"1\">Yes</option>
										<option selected=\"\" value=\"0\">No</option>
									</select>
								 </td>";
							
						echo "<td><input type=\"text\" size=\"5\" value=\"".$list['c_limit']."\" name=\"c_limit".$list['c_id']."\"></td>";
						echo "<td><input type=\"text\" size=\"5\" value=\"".$list['c_max_fee']."\" name=\"c_max_fee".$list['c_id']."\"></td>";
						echo "<td><input type=\"text\" size=\"5\" value=\"".$list['c_ex_min']."\" name=\"c_ex_min".$list['c_id']."\"></td>";
						echo "<td><input type=\"text\" size=\"5\" value=\"".$list['c_ex_max']."\" name=\"c_ex_max".$list['c_id']."\"></td>";
						echo "<td><input type=\"text\" size=\"5\" value=\"".$list['c_reserve']."\" name=\"c_reserve".$list['c_id']."\"></td>";
						
						if ($list['is_show_src']=="1")
							echo "<td>
									<select name=\"is_show_src".$list['c_id']."\">
										<option selected=\"\" value=\"1\">Yes</option>
										<option value=\"0\">No</option>
									</select>
								 </td>";
						else
							echo "<td>
									<select name=\"is_show_src".$list['c_id']."\">
										<option value=\"1\">Yes</option>
										<option selected=\"\" value=\"0\">No</option>
									</select>
								 </td>";
							
						if ($list['is_show_dst']=="1")
							echo "<td>
									<select name=\"is_show_dst".$list['c_id']."\">
										<option selected=\"\" value=\"1\">Yes</option>
										<option value=\"0\">No</option>
									</select>
								 </td>";
						else
							echo "<td>
									<select name=\"is_show_dst".$list['c_id']."\">
										<option value=\"1\">Yes</option>
										<option selected=\"\" value=\"0\">No</option>
									</select>
								 </td>";
							
						echo "</tr>";
						$i = $i + 1;
					}
				}
				?>
								
				
				<tr class="tablefirstrow">
					<td nowrap="" style="font-size: 11px;">Cid</td>
					<td nowrap="" style="font-size: 11px;">Currency<br>name</td>
					<td nowrap="" style="font-size: 11px;">Currency<br>metal<br>name</td>
					<td nowrap="" style="font-size: 11px;">Exchange<br>status</td>
					<td nowrap="" style="font-size: 11px;">Exchange<br>accept<br>limit</td>
					<td nowrap="" style="font-size: 11px;">Exchange<br>max<br>fee</td>
					<td nowrap="" style="font-size: 11px;">Exchange<br>min</td>
					<td nowrap="" style="font-size: 11px;">Exchange<br>max</td>
					<td nowrap="" style="font-size: 11px;">Reserve<br>amount</td>
					<td nowrap="" style="font-size: 11px;">Show<br>as<br>source</td>
					<td nowrap="" style="font-size: 11px;">Show<br>as<br>destination</td>
				</tr>
			</tbody>
		</table>
	</div>
	<input type="hidden" value="Save" id="Action" name="Action">
	<center>
		<input type="submit" class="btn" value="Update Currencies" name="submit"></center>
	</form>
	<span style="font-weight: normal" class="ErrorMessage"></span>
	<br>
	<br>
	<div id="page_guide">
		<h2>
			HELP:</h2>
		<strong>• Exchange max</strong>: Generate Error and ask to contact support before
		complete exchange (Sorry Maximum amount for exchange to ... is: ...)<br>
		<strong>• Exchange min</strong>: Generate Error if lower amount source amount is
		lower than it (Sorry Minimum amount for exchange from ... is: ...)<br>
		<strong>• Reserve amount</strong>: Generate Error if destination amount is greater
		that reserved amount (Your request is greater than Reserved Amount)
		<br>
		<strong>• Exchange automatic</strong>: Generate Note for non automated destinations
		(We will exchange this order Manually in next 8 hours)
		<br>
		<strong>• Exchange max fee</strong>: Maximum Fee for destination currency, <u>0</u>
		means unlimited fee<br>
		<strong>• Exchange accept limit</strong>: Maximum amount that you want to receive
		in specified currency. Please note this amount will automatically reduce after every
		automatic payout, '<u>Empty</u>(empt field)' means there is not any limitation for
		amounts of this currency as source.<br>
		<strong>• No interface message</strong>: This option will show specified message
		to customer in payment page(before redirecting to currency site) will see this message,
		You can use this option for offline payment method such as debit cards, example
		message:<br>
		Please contact our support team by <b>Reference no: #%s</b> as subject line.<br>
		<strong>• Access level</strong>: <u>Public</u>: all visitors, <u>Registered</u>:
		ask to sign up before applying exchange order, <u>Verified</u>: If you need manually
		verify customer info by faxing/mailing documents (useful for debit/credit cards)<br>
	</div>
</div>