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
			Listing type [ <a href="http://demo.auto-exchanger.com/admin/adm_exchanges/" style="font-size: 13px;">
				Pending</a> | <a href="http://demo.auto-exchanger.com/admin/adm_exchanges/?Type=open"
					style="font-size: 13px;">Open</a> | <a href="http://demo.auto-exchanger.com/admin/adm_exchanges/?Type=complete"
						style="font-size: 13px;">Complete</a> | <a href="http://demo.auto-exchanger.com/admin/adm_exchanges/?Type=all"
							style="font-size: 13px;">ALL</a> ]
			<input type="checkbox" value="on" name="allbox" class="checkbox" onclick="checkAll('lines');" /><b>Check
				all</b>
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
				<tr height="20" class="col0">
					<td>32</td>
					<td><a href='http://demo.auto-exchanger.com/admin/adm_exchanges/?eid=32&Action=Edit'title="Edit this order">1378869883</a></td>
					<td>
						<span style="font-size: 10px !important; line-height: 14px;">11-18 13:21<br />
							Complete
						</span>
					</td>
					<td style="text-align: left" nowrap="nowrap">
						<img src='<?php echo base_url();?>assets/images/wu2.jpg' /><b><span
							class="money_1">$0.99</span></b>
					</td>
					<td>
						<b>3939</b>
					</td>
					<td>
						Open
					</td>
					<td align="right">
						<a href="javascript:accept('1','32','0.009802','3939','5');" title="Click to pay usd 0.009802 C-gold Manually"
							style="font-size: 12px;">
							<img src="<?php echo base_url();?>assets/images/wu2.jpg/3_combo.gif"
								border="0" />
							<span class="money_1">$0.78</span></a>
					</td>
					<td style="text-align: center; line-height: 16px" nowrap="nowrap">
						 <a href="http://demo.auto-exchanger.com/admin/adm_exchanges/?Action=Delete&reference=1378869883&Type=pending"
								title="Delete this order" onclick="return confirm_entry('DELETE #1161722795')">
								<img src="http://demo.auto-exchanger.com/_skins/brown/tplimgs/ico/fasle3.gif" border="0" />
						</a>
					</td>
				</tr>
				<tr height="20" class="col1">
					<td>1</td>
					<td><a href='http://demo.auto-exchanger.com/admin/adm_exchanges/?eid=1&Action=Edit' title="Edit this order">1161722795</a></td>
					<td>
						<span style="font-size: 10px !important; line-height: 14px;">11-18 15:38<br />
							Complete
						</span>
					</td>
					<td style="text-align: left" nowrap="nowrap">
						<img src='<?php echo base_url();?>assets/images/3_combo.gif' /><b><span
							class="money_1">$10.00</span></b><br />
					</td>
					<td>
						<b>U459677036745</b>
					</td>
					<td>
						Open
					</td>
					<td align="right">
						<a href="javascript:accept('0','1','7','U459677036745','8');" title="Click to pay usd 7 V-money Manually"
							style="font-size: 12px;">
							<img src="<?php echo base_url();?>assets/images/wu2.jpg"
								border="0" />
							<span class="money_1">$7.00</span></a>
					</td>
					<td style="text-align: center; line-height: 16px" nowrap="nowrap">
						 <a href="http://demo.auto-exchanger.com/admin/adm_exchanges/?Action=Delete&reference=1161722795&Type=pending"
								title="Delete this order" onclick="return confirm_entry('DELETE #1161722795')">
								<img src="http://demo.auto-exchanger.com/_skins/brown/tplimgs/ico/fasle3.gif" border="0" />
						</a>
					</td>
				</tr>
			</tbody>
		</table>
		</form> <span class="italic">Total orders: 2</span>
	</div>
</div>