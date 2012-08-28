<br/>

<?php if(empty($securities)) {?>
<br/>
THERE ARE NO SECURITIES
<?php } else { ?>
<table width='100%'><tr><td align='right'>
<a href='show_securities_history.php'>Portfolio history</a>
</td></tr></table>
<table border="0" cellspacing="5" cellpadding="5" class="table_clac">
<tr><td>ISIN</td><td>FUND NAME</td><td>QUANTITY</td><td>CURRENCY</td><td>CUSTODY A/C</td>
<?php foreach($securities as $security){?>
<tr><td>
<?php echo $security->getCode();?>
</td><td>
<?php echo $security->getIsin();?>
</td><td>
<?php echo $security->getQuantity();?>
</td><td>&nbsp;
<?php echo $security->getCurrency();?>
</td><td>&nbsp;
<?php echo $security->getCustody(); ?>
</td></tr>
<?php } ?>
</tr></table>
<?php

  }
?>
