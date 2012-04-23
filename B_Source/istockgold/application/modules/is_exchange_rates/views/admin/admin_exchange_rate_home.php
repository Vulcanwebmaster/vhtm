<div id="main">
	<div id="page_title">
		<h1>
			Exchange Rates</h1>
	</div>
	<style type="text/css">
		TH
		{
			background-color: #F8FAF9;
			cursor: default;
		}
		.tablefirstrow, .tablefirstrow td
		{
			padding: 2px;
			line-height: 18px !important;
		}
		select, input
		{
			font-size: 11px;
			height: 16px;
		}
		#main
		{
			position: absolute;
			top: 240px;
			left: 5px;
			z-index: 10;
			margin: 3%;
		}
		#left
		{
			visibility: hidden;
		}
	</style>
	<?php print anchor('is_admin_home/admin','<img src="'.base_url().'assets/images/admin/n_status.gif" width="18" height="16" border="0" />'.$this->lang->line('istockgold_admin_home'))?> 
	<?php print anchor('currency/admin','<img src="'.base_url().'assets/images/admin/n_order_set.png" width="18" height="18" border="0" />'.$this->lang->line('istockgold_exchange_settings')) ?> 
	<?php print anchor('is_site_currencies/admin','<img src="'.base_url().'assets/images/admin/n_currencies.png" width="16" height="16" border="0" />'.$this->lang->line('istockgold_site_currencies')) ?>
	<?php print anchor('is_site_settings/admin','<img src="'.base_url().'assets/images/admin/n_settings.gif" width="19" height="18" border="0" />'.$this->lang->line('istockgold_site_settings')) ?>
	<div id="status_box">
		<form id="form1" name="form1" method="post" action="./Auto-Exchanger Demo   Automatic currency exchange software - Auto-Exchanger demo  _files/Auto-Exchanger Demo   Automatic currency exchange software - Auto-Exchanger demo  .htm">
		<table width="99%" border="0" cellspacing="1" cellpadding="0" class="rates" style="background-color: #F3F3F3">
			<thead>
				<tr>
					<th class="tablefirstrow" style="text-align: center">
						To / From
					</th>
					<th nowrap="" class="tablefirstrow" style="font-size: 11px; text-align: center">
						LibertyReserve<br>
						(Usd)
					</th>
					<th nowrap="" class="tablefirstrow" style="font-size: 11px; text-align: center">
						WesternUnion<br>
						(Usd)
					</th>
				</tr>
			</thead>
			<tbody>
				<tr class="col1">
					<td class="tablefirstrow" style="font-size: 11px; text-align: center;">
						LibertyReserve Usd
					</td>
					<td>
						<input type="hidden" name="1|1" value="-">&nbsp;
					</td>
					<td>
						<input type="text" size="8" name="1|2" value="1:0.982">
					</td>
					<td class="tablefirstrow" style="font-size: 11px; text-align: center;">
						LibertyReserve Usd
					</td>
				</tr>
				<tr class="col0">
					<td class="tablefirstrow" style="font-size: 11px; text-align: center;">
						WesternUnion Usd
					</td>
					<td>
						<input type="text" size="8" name="2|1" value="1:0.878">
					</td>
					<td>
						<input type="hidden" name="2|2" value="-">&nbsp;
					</td>
					<td class="tablefirstrow" style="font-size: 11px; text-align: center;">
						WesternUnion Usd
					</td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th class="tablefirstrow" style="text-align: center">
						To / From
					</th>
					<th nowrap="" class="tablefirstrow" style="font-size: 11px; text-align: center">
						LibertyReserve<br>
						(Usd)
					</th>
					<th nowrap="" class="tablefirstrow" style="font-size: 11px; text-align: center">
						WesternUnion<br>
						(Usd)
					</th>
				</tr>
			</thead>
		</table>
		<input name="Action" type="hidden" id="Action" value="Save">
		<center>
			<input type="submit" name="Submit" value="Update All Exchange Rates" class="btn"></center>
		</form>
	</div>
	<br>
	<div id="page_guide">
		<h2>
			HELP:</h2>
		<strong>? Disable exchange</strong>: Enter <b>0:0 or empty</b> to disable exchange
		direction.<br>
		<strong>? Internal Usd</strong>: for Commissions withdraw exchange rate (Only used
		on members commissions withdraw page).<br>
	</div>
</div>