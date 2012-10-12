<?php 
$number = $_GET['number'];
$id= $_GET['id'];
if(!$number)
  $number=0; 
if(!is_array($result))
  $result = array();

 ?>

<FORM ACTION="" METHOD="post">
<input type='hidden' name='id_account' value='<?php echo $_POST['id_account']?>' />
 <div>
  <fieldset>
   <legend>Account Information</legend>
    <table class="contab" width="545" >
     <tr>
      
      <td> Currency</td>
       <td>
<?php echo $instance['cuname'];  ?>
       </td>
<td>&nbsp;</td>
<td align='right'>&nbsp;</td>
      </tr>
                        
       <tr>
     <tr>
      
      <td>Client </td>
       <td>
<?php echo $instance['clname'] ?>

               </td>
                </tr>
                        
       <tr>
         <td>Amount</td>
        <td><input class="norm"  disabled="disabled" type="text" name="amount" id="amount" value="<?php echo $instance['amount']; ?>"/></td>
       <td>Account name</td>
        <td><input class="norm"  disabled="disabled" type="text" name="aname" id="aname" value="<?php echo $instance['name']; ?>"/></td>
       </tr>


       <tr>
        <td>Credit</td>
        <td><input class="norm"  disabled="disabled"  type="text" name="credit" id="credit" value="<?php echo $instance['credit']; ?>"/></td>
         
        <td>Value Date</td>
        <td><input class="norm"  disabled="disabled"  type="text" name="valuec" id="valuec" value="<?php echo $instance['vdate1']; ?>"/></td>
       </tr>
                                      
       <tr>
        <td>Debit</td>
        <td><input class="norm"  disabled="disabled"  type="text" name="debit" id="debit" value="<?php echo $instance['debit']; ?>"/></td>
       
        <td>Value Date</td>
        <td><input class="norm"  disabled="disabled"  type="text" name="valued" id="valued" value="<?php echo $instance['vdate2']; ?>"/></td>
       </tr>  

                               
      </table>
     </fieldset>
    </div>       
      
    <div>
     <fieldset>
      <legend>Navigation:</legend>
      <center/>
<table width='100%' border=0><tr>
<td width='25%'>
      <?php if($number > 0){?>
       <a href='account_history.php?id=<?php echo $id ?>&number=0'>Current</a>
      <?php } ?>
</td>
<td width='25%'>
      <?php if($number > 0){?>
       <a href='account_history.php?id=<?php echo $id ?>&number=<?php echo ($number-1) ?>'>Next</a>
      <?php } ?>
</td>
<td width='25%'>
      <?php if($number < $total){?>
       <a href='account_history.php?id=<?php echo $id ?>&number=<?php echo ($number+1) ?>'>Previous</a>
      <?php } ?>
</td>
<td width='25%'>
      <?php if($number < $total){?>
       <a href='account_history.php?id=<?php echo $id ?>&number=<?php echo $total ?>'>Very first</a>
      <?php } ?>
</td>
</tr></table>
      <br/>
     </fieldset>
    </div>
   </form>
