<br/>
<?php
if(is_array($result))
if(count($result)) { ?>

<br/><span id="error">Mandatory fields * are: <?php echo implode($result,',') ?> </span><br/>
<?php } ?>
<form action='' method='post'>
<input type='hidden' name='userid' value='<?php echo $_GET['userid']?>' />

<table border="0" cellspacing="5" cellpadding="5" class="table_clac">
<tr><td>ISIN</td><td>QUANTITY</td><td>CURRENCY</td><td>CUSTODY A/C</td></tr>
<tr><td>
<select name="isin" id="isin" class="dropdown">
<option value=""> please select</option>
<?php foreach ($isins as $isin): ?>
<option value='<?php echo $isin['id'];?>' <?php if(trim($_POST['isin']) == $isin['id']) echo"selected = 'selected'" ?> ><?php echo $isin['code'];?></option>
<?php endforeach; ?>
</select>
</td><td>
<input type='text' name='quantity' value='<?php echo $_POST['quantity'] ?>' size='5' />
</td><td>
<select name="currency" id="currency" class="dropdown">
<option value=""> please select</option>
<?php foreach ($currencies as $currency): ?>
<option value='<?php echo $currency['id'];?>' <?php if(trim($_POST['currency']) == $currency['id']) echo"selected = 'selected'" ?> ><?php echo $currency['cuname'];?></option>
<?php endforeach; ?>
</select>
<?php ?>
</td><td>
<select name="account" id="account" class="dropdown">
<option value=""> please select</option>
<?php foreach ($accounts as $account): ?>
<option value='<?php echo $account['id'];?>' <?php if(trim($_POST['account']) == $account['id']) echo"selected = 'selected'" ?> ><?php echo $account['name'];?></option>
<?php endforeach; ?>
</select>
</td>
</tr></table>

<input type='submit' name='add' value='Submit'/>
</form>