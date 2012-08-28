 <fieldset>
   	     <legend>SEARCH CRITERIA</legend>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
  <tr>
    <th width="120" align="right" valign="top">CLIENT-ID</th>
    <td width="70" align="left" valign="top"><input name="client_id" type="text" id="client_id" style="width:80px;" size="10"></td>
    <th width="100" align="right" valign="top">COUNTERPARTY</th>
    <td width="80" align="left" valign="top"><input name="counter_party" type="text" id="counter_party" size="10" /></td>
    <th width="50" align="right" valign="top">ISIN</th>
    <td width="100" align="left" valign="top"><input name='security1' id="security1" onchange='GetFundName()' /></td>
  </tr>
  <tr>
    <th align="right" valign="top">CURRENCY</th>
    <td align="left" valign="top"><input name="currency" id="currency" size="5" /></td>
    <th align="right" valign="top">QUANTITY</th>
    <td align="left" valign="top"><input name="quantity" type="text" id="quantity" size="10" /></td>
    <th align="right" valign="top">&nbsp;</th>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <th align="right" valign="top" style="height:25px;">DATE RANGE FROM</th>
    <td align="left" valign="top"><label for="from_date"></label>
      <input name="from_date" type="text" id="from_date" size="10" /></td>
    <th align="right" valign="top">TO</th>
    <td align="left" valign="top"><input name="to_date" type="text" id="to_date" size="10" /></td>
    <td align="right" valign="top">&nbsp;</td>
    <td align="right" valign="top"><input type="submit" name="Search" id="Search" value="Search" style="text-transform:uppercase;" /></td>
  </tr>
</table>
</fieldset>