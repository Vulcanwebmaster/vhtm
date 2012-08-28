<br/>
<?php if(empty($transfers)) {?>
<br/>
THERE ARE NO CANCELLED TRANSFERS
<?php } else { ?>

        <table border="0" width="605px">
	 <tr>
	  <td width="90px">T/D</td>
	  <td width="90px">S/D</td>
	  <td width="90px">TRANSFER</td>
	  <td width="90px">UNITS</td>
	  <td width="120px">ISIN</td>
	  <td width="125px">CUSTODY A/C</td>
	 </tr>
	</table>
	
	<br>
		

<?php foreach($transfers as $transfer):?>


	<table border="1" width="605px">
	 <tr>
	  <td width="90px"><?php echo $transfer->getTradeDate(); ?></td>
	  <td width="90px"><?php echo $transfer->getSettlementDate() ?></td>
	  <td width="90px"><?php echo $transfer->getType(1); ?></td>
	  <td width="90px"><?php echo $transfer->getAmount(); ?></td>
	  <td width="120px"><?php echo $transfer->getIsin(); ?></td>
	  <td width="125px"><?php echo $transfer->getAccount(); ?></td>
	 </tr>
	</table>
	<table border="0" width="605px">
	 <tr>
	  <td width="605px"><?php echo $transfer->getComment(); ?>&nbsp;</td>
	 </tr>
	</table>
<br/>
<br/>

<?php endforeach;?>
<?php } ?>


	
