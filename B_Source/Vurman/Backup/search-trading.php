 <fieldset>
   	     <legend>SEARCH CRITERIA</legend>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
  <tr>
    <th width="120" align="right">CLIENT-ID</th>
    <td width="70" align="left"><input name="client_id" type="text" id="client_id" size="10" style="width:80px;"  <?php if($_SESSION['usertype']=="user"){?>value="<?php echo $_SESSION['login']; ?>" readonly="readonly"<?php } ?> ></td>
    <th width="100" align="right">ISIN</th>
    <td width="120" align="left"><input name='security1' id="security1" onchange='GetFundName()' style="width:105px;" />
     </td>
    <th width="80" align="right">CURRENCY</th>
    <td width="100" align="left"><input name="currency" id="currency" style="width:35px;" />
     </td>
  </tr>
  <tr>
    <th align="right">QUANTITY</th>
    <td align="left"><input name="quantity" type="text" id="quantity" size="10" /></td>
    <th align="right">&nbsp;</th>
    <td>&nbsp;</td>
    <th align="right">&nbsp;</th>
    <td><input type="submit" name="Search" id="Search" value="SEARCH" /></td>
  </tr>
  </table>
</fieldset>