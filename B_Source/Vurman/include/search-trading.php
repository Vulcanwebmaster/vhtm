
<fieldset>

	<legend>SEARCH CRITERIA</legend>

	<table width="100%" border="0" cellspacing="0" cellpadding="0"
		style="border-collapse: collapse;">

		<tr>

			<th width="25%" align="right">CLIENT-ID</th>

			<td width="25%" align="left">
				<input name="client_id" type="text"	id="client_id" size="10" style="width: 80px;" <?php if($_SESSION['usertype']=="user"){?>value="<?php echo $_SESSION['login']; ?>" readonly="readonly"<?php } ?>>
			</td>

			<th width="15%" align="right">ISIN</th>

			<td width="35%" align="left">
				<input name='security1' id="security1" onchange='GetFundName()' style="width: 105px;" />
			</td>

		</tr>

		<tr>
			<th width="25%" align="right">CURRENCY</th>

			<td width="25%" align="left">
				<input name="currency" id="currency" style="width: 50px;" />
			</td>
			<th align="right" width="15%">QUANTITY</th>

			<td align="left" width="35%">
				<input name="quantity" type="text" id="quantity" style="width: 50px;"/>
			</td>
		</tr>
		<tr>
			<th width="25%" align="right"></th>

			<td width="25%" align="left"></td>

			<th align="right" width="15%"></th>

			<td align="left" width="35%">
				<input type="submit" name="Search" id="Search" value="SEARCH" />
			</td>

		</tr>

	</table>

</fieldset>
