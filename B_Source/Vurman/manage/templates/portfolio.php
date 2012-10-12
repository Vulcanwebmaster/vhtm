<br/>
<form action='' method='post'>
<input type='hidden' name='userid' value='<?php echo $_REQUEST['userid']?>' />
<?php if(empty($securities)) {?>
<br/>
This user portfolio is empty. <br/>
<a href='security.php'>Back to client list</a><br/><br/>
<?php } else { ?>
<table width='100%' border='0'><tr><td align='right'>
<a href='portfolio_history.php?userid=<?php echo $_GET['userid']?>'>Portfolio history</a>
</td></tr></table>
<table border="0" cellspacing="5" cellpadding="5" class="table_clac">
<tr><td>ISIN</td><td>FUND NAME</td><td>QUANTITY</td><td>CUSTODY A/C</td><td>delete</td>
<?php foreach($securities as $security){?>
<tr><td>
<?php echo $security->getCode();?>
</td><td>
<?php echo $security->getIsin();?>
</td><td>
<input type='text' name='fund_<?php echo $security->getId();?>' value='<?php echo $security->getQuantity();?>' size='5'/>
</td><td>&nbsp;
<?php echo $security->getCustody(); ?>
</td>
<td>&nbsp;
<input type='checkbox' name='id_<?php echo $security->getId();?>' />
</td></tr>
<?php } ?>
</tr></table>
<?php } ?>
<input type='submit' name='add' value='Add new'/>
<input type='submit' name='update' value='Update'/>
<input type='submit' name='delete' value='Delete selected'/>
</form>