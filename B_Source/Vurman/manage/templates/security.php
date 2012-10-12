<form action='' method='post'>
<center/>
Manage portfolios: 
<?php if(count($clients)) { ?>

<table>
<tr>
<td>name</td><td>email</td>
</tr>
<?php foreach ($clients as $client) : ?>
<tr>
<td><a title='Manage <?php echo $client['name']; ?> portfolio ' href='portfolio.php?userid=<?php echo $client['id'] ?>' ><?php echo $client['name']; ?> </a></td> 
<td><?php echo $client['email']; ?></td> 
</tr>

<?php endforeach; ?>

</table>
<?php } else {?>
</br>No clients in database.
<?php } ?>

</br>

</form>
