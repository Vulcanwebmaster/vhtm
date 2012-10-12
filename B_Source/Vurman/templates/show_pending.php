<br/>
<?php if(empty($transactions)) {?>
<br/>
THERE ARE NO PENDING TRADES 
<?php } else { ?>
        <table border="0" width="605px">
	 <tr>
	  <td width="150px">DATE and TIME</td>
	  <td width="120px">TRADE</td>
	  <td width="90px">QUANTITY</td>
	  <td width="120px">ISIN</td>
	  <td width="125px">CUSTODY A/C</td>
	 </tr>
	</table>
	<br>

<?php foreach($transactions as $transaction):?>

	<table border="1" width="605px">
	 <tr>
	  <td width="150px"><?php echo $transaction->getDatetime(); ?></td>
	  <td width="120px"><?php echo $transaction->getType(1); ?></td>
	  <td width="90px"><?php echo $transaction->getAmount1(); ?></td>
	  <td width="120px"><?php echo $transaction->getIsin(); ?></td>
	  <td width="125px"><?php echo $transaction->getAccount(); ?></td>
	 </tr>
	</table>
	<table border="0" width="605px">
	 <tr>
	  <td width="605px"><?php echo $transaction->getCommentUser(); ?>&nbsp;</td>
	 </tr>
	</table>
<br/>
<br/>
<?php endforeach;?>
<?php } ?>


	
