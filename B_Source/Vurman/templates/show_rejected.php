<br/>
<?php if(empty($transactions)) {?>
<br/>
THERE ARE NO REJECTED TRADES 
<?php } else { ?>
<table border="0" cellspacing="5" cellpadding="5" class="table_clac">
<tr><td>DATE and TIME</td><td>TRADE</td><td>UNITS</td><td>ISIN</td><td>CUSTODY A/C</td>
<?php foreach($transactions as $transaction){?>
<tr><td>
<?php echo $transaction->getDatetime(); ?>
</td><td>
<?php echo $transaction->getType(1); ?>
</td><td>
<?php echo $transaction->getAmount1(); ?>
</td><td>
<?php echo $transaction->getIsin(); ?>
</td><td>
<?php if ($transaction->getType() == 'SELL') { ?>
<?php echo $transaction->getAccount(); ?>
<?php } elseif($transaction->getType() == 'PURCHASE') { ?>
<?php echo $transaction->getAccount(); ?> 
<?php }elseif($transaction->getType() == 'SWITCH'){ ?>
<?php echo $transaction->getAccount(); ?> 
</td></tr>
<tr><td>
<?php echo $transaction->getDatetime(); ?>
</td><td>
<?php echo $transaction->getType(2); ?>
</td><td>
<?php echo $transaction->getAmount2(); ?>
</td><td>
<?php echo $transaction->getIsin2(); ?>
</td><td>
<?php echo $transaction->getAccount(); ?> 
<?php } ?>
</td></tr>
<tr><td colspan='5'>
<?php echo $transaction->getCommentUser();?>&nbsp;
</td></tr>
<?php } ?>
</tr></table>
<?php

  }
?>
