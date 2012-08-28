<form action='' method='post'>
<?php //$accounts = array(); ?>
<center/>
Manage users: 
<?php if(count($clients)) { ?>

<table>
<tr>
<td>name</td><td>email</td><td>login</td><td>password</td><td>delete</td>
</tr>
<?php foreach ($clients as $client) : ?>
<tr>
<td><a title='Edit <?php if(isset($account['name'])) echo $account['name']; ?> account' href='user_edit.php?id=<?php echo $client['id'] ?>' ><?php echo $client['name']; ?> </a></td> 
<td><?php echo $client['email']; ?></td> 
<td><?php echo $client['login']; ?></td> 
<td><?php echo $client['password']; ?></td> 
<td><input type='checkbox' name='id_<?php echo $client['id'] ?>' /> </td>
</tr>

<?php endforeach; ?>

</table>
<?php } else {?>
</br>No users in database.
<?php } ?>

</br>

<?php if(count($clients)) { ?>
<input type='submit' name='delete' value='Delete chosen' onclick='confirm("are you sure you want to delete entries ?");'/>
<?php } ?>
<input type='submit' name='add' value='Add new'/>
</form>
