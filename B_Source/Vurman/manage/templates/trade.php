<?php if(trim($errorMessage)){?>
<br/><span id="error"><?php echo $errorMessage;?></span><br/>
<?php } ?>

<center/>
TRADE MANAGEMENT: 
<?php if(count($transactions)) { ?>

<table>
<tr>
<td>client</td><td>type</td><td>amount</td><td>isin</td><td>status</td>
</tr>
<?php foreach ($transactions as $transaction) : ?>
<tr>
<td><?php echo $transaction['name']; ?></td> 
<td><a title='Edit <?php echo $transaction['types']; ?> transaction' href='transaction_edit.php?id=<?php echo $transaction['id'] ?>' ><?php echo $transaction['types']; ?> </a></td> 
<td><?php echo $transaction['amount1']; ?></td> 
<td><?php echo $transaction['code']; ?></td> 
<td><?php echo $transaction['status']; ?></td> 
</tr>

<?php endforeach; ?>

</table>
<?php } else {?>
</br>THERE ARE NO TRANSACTIONS IN THE DATABASE
<?php } ?>

</br>
