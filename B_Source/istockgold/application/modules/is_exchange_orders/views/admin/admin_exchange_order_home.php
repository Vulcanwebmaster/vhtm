<div id="main">
	<div id="page_title">
		<h1>
			Exchange orders Pending</h1>
	</div>
	<div id="status_box">
		<script language="JavaScript">
			function accept(usr, tid, amt, acc, emn) {
				if (confirm('Sure you want to Manually Pay "' + amt + '"'))
					window.open('http://demo.auto-exchanger.com/admin/adm_manuallpay/?Type=exchange&act=accept&id=' + tid + '&amount=' + amt + '&account=' + acc + '&cid=' + emn + '&user=' + usr);
			}
			function getbulk() {
				scrollScreen('http://demo.auto-exchanger.com/admin/adm_autopayuser/?Type=exchange&act=bulk&bulk=' + getlist(document.lines, 'pay'));
			}
			function checkAll(form) {
				for (var i = 0; i < document.getElementById(form).elements.length; i++) {
					var e = document.getElementById(form).elements[i];
					if ((e.name != 'allbox') && (e.type == 'checkbox')) {
						e.checked = document.getElementById(form).allbox.checked;
					}
				}
			}
		</script>
		<div id="head">
			<form name="lines" id="lines" action="http://demo.auto-exchanger.com/admin/adm_exchanges/"
			method="post">
			<input name="fld_search" type="text" id="fld_search" value="" />
			<input type="submit" name="submit_search" value="Search" class="btn" />
		</div>
		<style type="text/css">
			td
			{
				text-align: center;
			}
		</style>
		<table cellspacing="1" cellpadding="2" border="0" width="99%" class="maintable">
			<tbody>
				<tr height="21">
					<td>id</td>
					<td>Edit</td>
					<td>SRC:Date/Status</td>
					<td>SRC:Amount</td>
					<td>DST:Account</td>
					<td>DST:Status</td>
					<td>DST:Amount</td>
					<td>Delete</td>
				</tr>
				<?php
					if(count($orders))
					{
						$i = 0;
						foreach ($orders as $key => $list)
						{
							if($i % 2 == 0)
								echo "<tr height=\"20\" class=\"col0\">";
							else
								echo "<tr height=\"20\" class=\"col1\">";
							
							echo "<td>".$list['order_id']."</td>";
							echo "<td><a href='".base_url()."index.php/is_exchange_orders/admin/edit/".$list['order_id']."'title=\"Edit this order\">".$list['order_code']."</a></td>";
							echo "<td><span style=\"font-size: 10px !important; line-height: 14px;\">".$list['date_src']."<br />".ucwords(strtolower($list['status_src']))."</span></td>";
							echo "<td style=\"text-align: left\" nowrap=\"nowrap\"><img src='".base_url()."assets/images/wu2.jpg' /><b><span
							class=\"money_1\">$".$list['amount_src']."</span></b></td>";
							echo "<td><b>".$list['account_dst']."</b></td>";
							echo "<td>".ucwords(strtolower($list['status_dst']))."</td>";
							echo "<td align=\"right\"><img src='".base_url()."assets/images/3_combo.gif' />
							<span class=\"money_1\">$".$list['amount_dst']."</span></a>";
							echo "</td><td style=\"text-align: center; line-height: 16px\" nowrap=\"nowrap\">
						 	<a href='".base_url()."index.php/is_exchange_orders/admin/delete/".$list['order_id'].
								"' title=\"Delete this order\" onclick=\"return confirm_entry('DELETE #".$list['order_code']."')\">
								<img src='".base_url()."assets/images/fasle3.gif' /></a></td>";
							echo "</tr>";
							$i = $i + 1;
						}
					}
				?>
			</tbody>
		</table>
		</form> <span class="italic">Total orders: <?php echo count($orders)?></span>
	</div>
</div>