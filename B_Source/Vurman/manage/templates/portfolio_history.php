<br/>
<?php
$number = $_GET['number'];
$id= $_GET['userid'];
if(!$number)
  $number=0; 

// var_dump($instances); 
//var_dump($_SERVER); 
?>
<form action='' method='post'>
<input type='hidden' name='userid' value='<?php echo $_REQUEST['userid']?>' />
<?php if(empty($instances)) {?>
<br/>
This user portfolio history is empty. <br/>
<a href='security.php'>Back to client list</a><br/><br/>
<?php } else { ?>
<table width='100%' border='0'><tr><td align='right'>
</td></tr></table>
<table border="0" cellspacing="5" cellpadding="5" class="table_clac">
<tr><td>ISIN</td><td>FUND NAME</td><td>QUANTITY</td><td>CUSTODY A/C</td>
<?php foreach($instances as $instance){?>
<tr><td>
<?php echo $instance['code'];?>
</td><td>
<?php echo $instance['iname'];?>
</td><td>
<?php echo $instance['quantity']?>
</td><td>&nbsp;
<?php echo $instance['custody'] ?>
</td>
</tr>
<?php } ?>
</tr></table>
<table width='100%' border=0><tr>
<td width='25%'>
      <?php if($number > 0){?>
       <a href='portfolio_history.php?userid=<?php echo $id ?>&number=0'>Current</a>
      <?php } ?>
</td>
<td width='25%'>
      <?php if($number > 0){?>
       <a href='portfolio_history.php?userid=<?php echo $id ?>&number=<?php echo ($number-1) ?>'>Next</a>
      <?php } ?>
</td>
<td width='25%'>
      <?php if($number < $total){?>
       <a href='portfolio_history.php?userid=<?php echo $id ?>&number=<?php echo ($number+1) ?>'>Previous</a>
      <?php } ?>
</td>
<td width='25%'>
      <?php if($number < $total){?>
       <a href='portfolio_history.php?userid=<?php echo $id ?>&number=<?php echo $total ?>'>Very first</a>
      <?php } ?>
</td>
</tr></table>
	
<?php } ?>
</form>