<?php if(isset($errorMessage) && trim($errorMessage)){?>
<br/><span id="error"><?php echo $errorMessage;?></span><br/>
<?php } ?>

<center/>
Manage isins: 
<form action='' method='post'>
<?php if(count($isins)) { ?>

<table>
<tr>
<td>isin</td><td>fund name</td><td>delete</td>
</tr>
<?php foreach ($isins as $isin) : ?>
<tr>
<td><a title='Edit <?php echo $isin['code']; ?> isin' href='isins_edit.php?id=<?php echo $isin['id'] ?>' ><?php echo $isin['code']; ?></a></td>
<td><?php echo $isin['name']; ?></td> 
<td><input type='checkbox' name='id_<?php echo $isin['id'] ?>' /></td>
</tr>

<?php endforeach; ?>

</table>
<?php } else {?>
</br>No isins in database.
<?php } ?>

<?php if(count($isins)) { ?>
<input type='submit' name='delete' value='Delete chosen' onclick='return confirm("are you sure you want to delete entries ?");'/>
<?php } ?>
<input type='submit' name='add' value='Add new'/>
<br/><br/>
Delete mode:
<select name='mode'>
    <option value='1'>Do not delete agents</option>
<!--    <option value='2'>Delete unused agents only</option>-->
    <option value='3'>Delete agents </option>    
</select>

</form>