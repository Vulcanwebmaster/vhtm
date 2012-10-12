<?php if(trim($errorMessage)){?>
<br/><span id="error"><?php echo $errorMessage;?></span><br/>
<?php } ?>

<center/>
TRANSFER MANAGEMENT: 
<?php if(count($transfers)) { ?>

<table>
<tr>
<td>client</td><td>type</td><td>amount</td><td>isin</td><td>status</td>
</tr>
<?php foreach ($transfers as $transfer) : ?>
<tr>
<td><?php echo $transfer['name']; ?></td> 
<td><a title='Edit <?php echo $transfer['types']; ?> transfer' href='transfer_edit.php?id=<?php echo $transfer['id'] ?>' ><?php echo $transfer['types']; ?> </a></td> 
<td><?php echo $transfer['amount']; ?></td> 
<td><?php echo $transfer['code']; ?></td> 
<td><?php echo $transfer['status']; ?></td> 
</tr>

<?php endforeach; ?>

</table>
<?php } else {?>
</br>No transfers in database.
<?php } ?>

</br>

