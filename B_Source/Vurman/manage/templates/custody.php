<form action='' method='post'>
<?php //$accounts = array(); ?>
<center/>
Manage custody accounts: 
<?php if(count($accounts)) { ?>

<table>
<tr>
<td>name</td><td>client</td><td>delete</td>
</tr>
<?php foreach ($accounts as $account) : ?>
<tr>
<td><a title='Edit <?php echo $account['name']; ?> account' href='custody_edit.php?id=<?php echo $account['id'] ?>' ><?php echo $account['name']; ?> </a></td> 
<td><?php echo $account['clname']; ?></td> 
<td><input type='checkbox' name='id_<?php echo $account['id'] ?>' /> </td>
</tr>

<?php endforeach; ?>

</table>
<?php } else {?>
</br>No custody accounts in database.
<?php } ?>

</br>

<?php if(count($accounts)) { ?>
<input type='submit' name='delete' value='Delete chosen' onclick='confirm("are you sure you want to delete entries ?");'/>
<?php } ?>
<input type='submit' name='add' value='Add new'/>
</form>
